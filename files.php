<HTML>
<form method='post' action='' enctype='multipart/form-data'>
    <input type="file" name="file[]" id="file" multiple>
        <br><br>
    <input type='submit' name='submit' value='Upload'>
</form>
</HTML>
<?php
if(isset($_POST['submit'])){
 $countfiles = count($_FILES['file']['name']);
 for($i=0 ; $i<$countfiles ; $i++){
  $filename = $_FILES['file']['name'][$i];
  $upload = move_uploaded_file($_FILES['file']['tmp_name'][$i],'uploadFiles/'.$filename); 
 }
 if($upload){
    echo "Upload successfully";
}else{
    echo "Upload unsuccessfully";
}
}
?>
