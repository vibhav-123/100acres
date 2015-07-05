<?php
class imagecheck{
public function check($file){
// Check for errors
if($file['error'] > 0){
    die('An error ocurred when uploading.');
}
// Check file
if(!getimagesize($file['tmp_name'])){
    die('Please ensure you are uploading an image.');
}



// Check filesize
if($file['size'] > 50000000){
    die('File uploaded exceeds maximum upload size.');
}

// Check if the file exists
if(file_exists('upload/' . $file['name'])){
    die('File with that name already exists.');
}

// Upload file
if(!move_uploaded_file($file['tmp_name'], '/var/www/html/myProj/web/uploads/images/' . $file['name'])){  
 die('Error uploading file - check destination is writeable.');
}
}
}
