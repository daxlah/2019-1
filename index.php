<?php

if(!empty($_POST)){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];


    if(!empty($_FILE)) {
        /*
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["browsePhoto"]["fileName"]);
        $uploadOK = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        //image check
        $check = getimagesize($_FILES["browsePhoto"]["temp_name"]);
        if ($check !== false) {
            //save image stuff here
        }
        */


    }

    //create folder
    $folder = date("Y\-m\-d");
    mkdir ($folder, 0755);


    //$folder = "/" . $folder . "/";

    if(is_dir($folder)){
        $file = fopen($folder . DIRECTORY_SEPARATOR . "text.txt", "w");
        $msg = $name . ", " . $email . ", " . $message;
    }else {
        echo "folder not found";
    }

    /*
    echo $name . "<br>";
    echo $email . "<br>";
    echo $message . "<br>";
    */
}


?>


<html>
<head>
    <link rel="stylesheet" type="text/css" href="basicCss.css">
</head>

<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" id="mainForm">
    <div class = "fields">
        <p>
            <label for="name">Name</label>
            <input type="text" id="name" name="name">
            <br>
            <br>
            <span class="error" id="errorName">Please enter a name</span>
        </p>
        <p>
            <label for="email">Email</label>
            <input tpye="text" id="email" name="email">
        </p>
        <p>
            <label for="message">Message</label>
            <textarea id="message" name="message"></textarea>
        </p>
        <br>
        <span>
            <label for="browsePhoto">Photo</label>
            <input type="file" id="browsePhoto" name="browsePhoto">
        </span>
    </div>
    <br>
    <input type="submit" value="Submit">
</form>

</html>
