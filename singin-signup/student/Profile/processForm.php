<?php 
$msg = "";
$css_class = "";

$conn = mysqli_connect('localhost', 'root', '', 'image-upload');

    if (isset($_POST['save-user'])) {
        echo "<pre>", print_r($_FILES['profileImage']['name']),"</pre>";
        
        $bio = $_POST['bio'];
        $profileImage = time() . '_' . $_FILES['profileImage'] ['name'];

        $target = 'images/' . $profileImage;

        if (move_uploaded_file($_FILES['profileImage'] ['tmp_name'], $target)){
            $sql = "INSERT INTO users (profile_image, bio) VALUES ('$profileImage', '$bio')";
            if (mysqli_query($conn, $sql)) {
                $msg = "Image uploaded and save to database";
                $css_class = "alert-success";
            }else {
                $msg = "Database Error: Failed to save user";
                $css_class = "alert-danger";
            }


        }else {
            $msg = "failed to upload to upload";
            $css_class = "alert-danger";
        }

    }
?>
