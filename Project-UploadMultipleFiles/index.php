<?php  
    if(isset($_POST['submit'])){ // when user submit the form 
     //  echo "<pre>"; // Pre formating purposes 
      // print_r($_FILES); // print the result 
      
      // To check the format of the images
    //   echo "<pre>";
    //   print_r($_FILES['doc']);
    //   die(); // exit the function 
      
        foreach($_FILES['doc']['name'] as $key => $val) {
// To change the name of the image file randomly
            $rand = rand('1', '3');
            $file = $rand.'_'.$val; 
//IMAGE VALIDATION: To upload the images with only specific extensions, execute the following if condition
            // if($_FILES['doc']['type'][$key] != 'image/png') {
            //     break; 
            // }
 
// The move_uploaded_file() function moves an uploaded file to a new destination.
// This function only works on files uploaded via PHP's HTTP POST upload mechanism.
// If the destination file already exists, it will be overwritten.
// Syntax: move_uploaded_file(file, dest)
        // move_uploaded_file($_FILES['doc']['tmp_name'][$key], 'media/'.$val);
         move_uploaded_file($_FILES['doc']['tmp_name'][$key], 'media/'.$file); // Random image name
         // To insert the files/images in the database,
         // INSERT INTO Table (Field_Name) VALUES($file);
       }
    }
?>

<!-- The enctype attribute specifies how the form-data should be encoded when submitting it to the server. -->
<!-- The enctype attribute can be used only if method="post" -->
<form method="POST" enctype="multipart/form-data">
    <!-- multiple attribute is required to select multiple files -->
    <!--doc[]   -->
    <input type="file" name="doc[]" multiple>
    <input type="submit" name="submit">
</form>