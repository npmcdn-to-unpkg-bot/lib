<?php
?>
<html>
 
        <input type='file' id="upload" />
        <input type='text' id="img_url" />
  
</html>
<script src="http://demo.phpgang.com/upload-multiple-images-jquery-ajax-using-php/js/jquery-1.8.0.min.js"></script>

<script>
$('#upload').on('change', function() { 
 alert('as');
    var file_data = $('#upload').prop('files')[0];   
    var form_data = new FormData();                  
    form_data.append('file', file_data);
  //  alert(form_data);                             
    $.ajax({
                url: 'upload.php', // point to server-side PHP script 
                dataType: 'text',  // what to expect back from the PHP script, if anything
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,                         
                type: 'post',
                success: function(php_script_response){
                    alert(php_script_response); // display response from the PHP script, if any
     
     $('#img_url').val(php_script_response);
     
                }
     });
});
</script>
