<!DOCTYPE html>

<html>

<head>

    <title>Image Upload in PHP</title>

    <! link the css file to style the form >

    <link rel="stylesheet" type="text/css" href="style.css" />

</head>

<body>

    <div id="wrapper">

        <! specify the encoding type of the form using the 

                enctype attribute >

        <form method="POST" action="" enctype="multipart/form-data">        

            <input type="file" name="choosefile" value="" />

            <div>

                <button type="submit" name="uploadfile">

                UPLOAD

                </button>

            </div>

        </form>

    </div>

</body>

</html>

<?php

error_reporting(0);

?>
<?php

error_reporting(0);

?>

<?php

$msg = ""; 

// check if the user has clicked the button "UPLOAD" 

if (isset($_POST['uploadfile'])) {

    $filename = $_FILES["choosefile"]["name"];

    $tempname = $_FILES["choosefile"]["tmp_name"]; 
    
    // $file_ext = strrchr($_FILES["choosefile"]["name"], '.');
    // $target_file = md5(basename($_FILES["choosefile"]["name"])).$file_ext;
    // move_uploaded_file($_FILES["choosefile"]["name"], $target_dir.$target_file);

        $folder = "image/".$filename;   

    // connect with the database

    $db = mysqli_connect("localhost", "root", "", "Image_Upload"); 

        // query to insert the submitted data

        $sql = "INSERT INTO image (filename) VALUES ('$filename')";

        // function to execute above query

        mysqli_query($db, $sql);       

        // Add the image to the "image" folder"

        if (move_uploaded_file($tempname, $folder)) {

            $msg = "Image uploaded successfully";

        }else{

            $msg = "Failed to upload image";

    }

}

$result = mysqli_query($db, "SELECT * FROM image");



// dekrip


$url = 'https://www.md5online.org/api.php'; 
$key = 'YOUR_VIP_KEY'; 
 
//manage your input here, from a form, a file or a database 
$md5 = "d3c8e06e57cc1af7ebdba01427e62bc2"; 
 
$result = file_get_contents($url."?p=".$key."&h=".$md5); 
 
//do your post action here, with the result 
echo $result; 


?>