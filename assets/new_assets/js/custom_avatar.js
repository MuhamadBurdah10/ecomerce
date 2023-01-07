$(document).ready(function() {
	
	// enable fileupload plugin
	$('input[name="picture"]').fileuploader({
		limit: 2,
        extensions: ['jpg'],
		fileMaxSize: 10,
		changeInput: ' ',
		theme: 'avatar',
		addMore: true,
        enableApi: true,
		thumbnails: {
			box: '<div class="fileuploader-wrapper">' +
					'<div class="fileuploader-items"></div>' +
					'<div class="fileuploader-droparea" data-action="fileuploader-input"><i class="fileuploader-icon-main"></i></div>' +
				   '</div>' +
					'<div class="fileuploader-menu">' +
						'<button type="button" class="fileuploader-menu-open"><i class="fileuploader-icon-menu"></i></button>' +
						'<ul>' +
							'<li><a data-action="fileuploader-input"><i class="fileuploader-icon-upload"></i> ${captions.upload}</a></li>' +
							'<li><a data-action="fileuploader-edit"><i class="fileuploader-icon-edit"></i> ${captions.edit}</a></li>' +
							'<li><a data-action="fileuploader-remove"><i class="fileuploader-icon-trash"></i> ${captions.remove}</a></li>' +
						'</ul>' +
					'</div>',
			item: '<div class="fileuploader-item">' +
				      '${image}' +
					  '<span class="fileuploader-action-popup" data-action="fileuploader-edit"></span>' +
					  '<div class="progressbar3" style="display: none"></div>' +
					'</div>',
			item2: null,
			itemPrepend: true,
			startImageRenderer: true,
            canvasImage: false,
			_selectors: {
				list: '.fileuploader-items'
			},
			popup: {
				arrows: false,
				onShow: function(item) {
					item.popup.html.addClass('is-for-avatar');
                    item.popup.html.on('click', '[data-action="remove"]', function(e) {
                        item.popup.close();
                        item.remove();
                    }).on('click', '[data-action="cancel"]', function(e) {
                        item.popup.close();
                    }).on('click', '[data-action="save"]', function(e) {
						if (item.editor && !item.isSaving) {
							item.isSaving = true;
                        	item.editor.save();
						}
						if (item.popup.close)
							item.popup.close();
                    });
                },
				onHide: function(item) {
					if (!item.isSaving && !item.uploaded && !item.appended) {
						item.popup.close = null;
						item.remove();
					}
				} 	
			},
			onImageLoaded: function(item, listEl, parentEl, newInputEl, inputEl) {
                if (item.choosed && !item.isSaving) {
					if (item.reader.node && item.reader.width >= 256 && item.reader.height >= 256) {
						//item.image.hide();
						item.popup.open();
						item.editor.cropper();
					} else {
						item.remove();
						alert('The image is too small!');
					}
				} else if (item.data.isDefault)
					item.html.addClass('is-default');
				else if (item.image.hasClass('fileuploader-no-thumbnail'))
					item.html.hide();
            },
			onItemRemove: function(html) {
				html.fadeOut(250, function() {
					html.remove();
				});
			}
		},
		dragDrop: {
			container: '.fileuploader-wrapper'
		},
		editor: {
            cropper: {
				ratio: '1:1',
				minWidth: 256,
				minHeight: 256,
				showGrid: false
			},
			onSave: function(base64, item, listEl, parentEl, newInputEl, inputEl) {
				var api = $.fileuploader.getInstance(inputEl);
				
				if (item.choosed) {
				 if (api.getFiles().length == 2 && (api.getFiles()[0].data.isDefault || api.getFiles()[0].choosed))
				  api.getFiles()[0].remove();
				 parentEl.find('.fileuploader-menu ul a').show();
				} else if (item.appended) {
					// hide current thumbnail (this is only animation)
					//item.image.addClass('fileuploader-loading').html('');
					item.imageIsUploading = true;
					item.html.find('.fileuploader-action-popup').hide();
					parentEl.find('[data-action="fileuploader-edit"]').hide();

					$.post("<?php echo site_url('user/ajaxpicresize');?>", {name: item.name, _editor: JSON.stringify(item.editor), fileuploader: 1}, function() {
						item.reader.read(function() {
							item.html.find('.fileuploader-action-popup').show();	
							
							item.popup.html = item.popup.editor = item.editor.crop = item.editor.rotation = item.popup.zoomer = null;
							item.renderThumbnail();
						}, null, true);
					}).always(function() {
						delete item.isSaving;
					});
				}
				//item.image.show();
			}
        },
		afterRender: function(listEl, parentEl, newInputEl, inputEl) {
			var api = $.fileuploader.getInstance(inputEl);
			
			// remove multiple attribute
			inputEl.removeAttr('multiple');
			
			// disabled input
			if (api.isDisabled()) {
				parentEl.find('.fileuploader-menu').remove();
			}
			
			// [data-action]
			parentEl.on('click', '[data-action]', function() {
				var $this = $(this),
					action = $this.attr('data-action'),
					item = api.getFiles().length ? api.getFiles()[api.getFiles().length-1] : null;
				
				switch (action) {
					case 'fileuploader-input':
						api.open();
						break;
					case 'fileuploader-edit':
						if (item && item.popup) {
							item.popup.open();
							item.editor.cropper();
							delete item.isSaving;
						}
						break;
					case 'fileuploader-retry':
						if (item && item.upload.retry)
							item.upload.retry();
						break;
					case 'fileuploader-remove':
						if (item)
							item.remove();
						break;
				}
			});
			
			// menu
			$('body').on('click', function(e) {
				var $target = $(e.target),
					$parent = $target.closest('.fileuploader');
				
				$('.fileuploader-menu').removeClass('is-shown');
				if ($target.is('.fileuploader-menu-open') || $target.closest('.fileuploader-menu-open').length)
					$parent.find('.fileuploader-menu').addClass('is-shown');
			});
		},
		onEmpty: function(listEl, parentEl, newInputEl, inputEl) {
			var api = $.fileuploader.getInstance(inputEl),
				defaultAvatar = inputEl.attr('data-fileuploader-default');
			
			if (defaultAvatar && !listEl.find('> .is-default').length)
				api.append({name: '', type: 'image/png', size: 0, file: defaultAvatar, data: {isDefault: true, popup: false, listProps: {is_default: true}}});
			
			parentEl.find('.fileuploader-menu ul a').hide().filter('[data-action="fileuploader-input"]').show();
		},
		onRemove: function(item) {
			if (item.name && (item.appended || item.uploaded))
				$.post("<?php echo site_url('user/ajaxpicremove');?>", {
					file: item.name
				});
		},
		captions: {
			edit: 'Edit',
			upload: 'Change',
			remove: 'Remove',
			errors: {
        		filesLimit: 'Only 1 file is allowed to be uploaded.',
			}
		}
    });
});