$(document).ready(function() {
  
  // enable fileuploader plugin
  $('input[name="cover"]').fileuploader({
                limit : 1,
        extensions: ['jpg','png','jpeg'],
    changeInput: ' ',
    theme: 'thumbnails',
        enableApi: true,
    addMore: true,
    readerForce: true,
    thumbnails: {
      box: '<div class="fileuploader-items">' +
                      '<ul class="fileuploader-items-list">' +
                '<li class="fileuploader-thumbnails-input"><div class="fileuploader-thumbnails-input-inner"><i>+</i></div></li>' +
                      '</ul>' +
                  '</div>',
      item: '<li class="fileuploader-item">' +
               '<div class="fileuploader-item-inner">' +
                           
                           '<div class="actions-holder">' +
                           '<button type="button" class="fileuploader-action fileuploader-action-popup fileuploader-action-edit" title="Edit"><i class="fileuploader-icon-edit"></i></button>' +
                   '<button type="button" class="fileuploader-action fileuploader-action-remove" title="${captions.remove}"><i class="fileuploader-icon-remove"></i></button>' +
                           '</div>' +
                           '<div class="thumbnail-holder">' +
                               '${image}' +
                               '<span class="fileuploader-action-popup"></span>' +
                           '</div>' +
                           '<div class="content-holder"><h5>${name}</h5><span>${size2}</span></div>' +
                           '<div class="progress-holder">${progressBar}</div>' +
                       '</div>' +
                  '</li>',
      item2: '<li class="fileuploader-item">' +
               '<div class="fileuploader-item-inner">' +
                           
                           '<div class="actions-holder">' +
                   '<a href="${file}" class="fileuploader-action fileuploader-action-download" title="${captions.download}" download><i class="fileuploader-icon-download"></i></a>' +
                   '<button type="button" class="fileuploader-action fileuploader-action-popup fileuploader-action-edit" title="Edit"><i class="fileuploader-icon-edit"></i></button>' +
                   '<button type="button" class="fileuploader-action fileuploader-action-remove" title="${captions.remove}"><i class="fileuploader-icon-remove"></i></button>' +
                           '</div>' +
                           '<div class="thumbnail-holder">' +
                               '${image}' +
                               '<span class="fileuploader-action-popup"></span>' +
                           '</div>' +
                           '<div class="content-holder"><h5 title="${name}">${name}</h5><span>${size2}</span></div>' +
                           '<div class="progress-holder">${progressBar}</div>' +
                       '</div>' +
                   '</li>',
      itemPrepend: true,
      startImageRenderer: true,
            canvasImage: false,
      _selectors: {
        list: '.fileuploader-items-list',
        item: '.fileuploader-item',
        start: '.fileuploader-action-start',
        retry: '.fileuploader-action-retry',
        remove: '.fileuploader-action-remove'
      },
      onItemShow: function(item, listEl, parentEl, newInputEl, inputEl) {
        var plusInput = listEl.find('.fileuploader-thumbnails-input'),
                    api = $.fileuploader.getInstance(inputEl.get(0));
        
                plusInput.insertAfter(item.html)[api.getOptions().limit && api.getChoosedFiles().length >= api.getOptions().limit ? 'hide' : 'show']();
        plusInput.hide();
        if(item.format == 'image') {
          item.html.find('.fileuploader-item-icon').hide();
        }
      },
            onItemRemove: function(html, listEl, parentEl, newInputEl, inputEl) {
                var plusInput = listEl.find('.fileuploader-thumbnails-input'),
            api = $.fileuploader.getInstance(inputEl.get(0));
            
                html.children().animate({'opacity': 0}, 200, function() {
                    html.remove();
                    
                    if (api.getOptions().limit && api.getChoosedFiles().length - 1 < api.getOptions().limit)
                        plusInput.show();
                });
            }
    },
        dragDrop: {
      container: '.fileuploader-thumbnails-input'
    },
    afterRender: function(listEl, parentEl, newInputEl, inputEl) {
      var plusInput = listEl.find('.fileuploader-thumbnails-input'),
        api = $.fileuploader.getInstance(inputEl.get(0));
    
      plusInput.on('click', function() {
        api.open();
      });
    },
     editor: {
      cropper: {
        ratio: '1:1',
        minWidth: 100,
        minHeight: 100,
        showGrid: true
      }
    },

    });
});