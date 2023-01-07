// @fahmi penambahan report untuk other dan deskripsi harus ada  15 - agustus - 2019-->
	$('#submit').click(function(){
    if (document.getElementById('other').checked && document.getElementById('deskripsi').value == "") {
    	alert("Harap isi Deskripsi");
    	return false;
    }
})
//end of @fahmi penambahan report untuk other dan deskripsi harus ada  15 - agustus - 2019
// @fahmi validasi checkbox 15 - agustus - 2019
$('input[type=checkbox]').click(function () {

    if ($('input:checkbox:checked').length > 0) {
        
        $('#submit').removeAttr('disabled'); 
        
    } else {
        $('#submit').prop('disabled', true); 
    }
});
// end of @fahmi validasi checkbox 15 - agustus - 2019