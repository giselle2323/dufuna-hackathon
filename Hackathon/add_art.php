<?php include 'session.php'; ?>
<?php
         
        $message = ''; 
        
        
        if(isset($_POST['submit'])){
            $name = $_POST['name']; 
            $price = $_POST['price'];
            $art_by = $_POST['art_by'];
            $created_date = date("Y/m/d");
            $target_dir = "upload/";
            $target_file = $target_dir . basename($_FILES["image"]["name"]);
           // $uploadOk = 1;
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
           // Check if image file is a actual image or fake image
            if (empty($name) || empty($price) || empty($art_by)) {     
                $message = 'All fields are required'; }
           
            else if (!is_numeric($price)) {     
                $message = 'Price should be numeric';  
            } else {
                $filename = $_FILES["image"]["tmp_name"];
                $rand = mt_rand();
                $picture = 'art'."_".$rand."".$rand."_".'CU'.".".$imageFileType;
                if (move_uploaded_file($filename,"upload/" .$picture)) {
            $sql = "INSERT INTO art_upload (name, art_by, created_date, image, price, status)       
            VALUES ('$name', '$art_by', '$created_date', '$picture', '$price', 1 )";   
             $result60 = mysqli_query($link, $sql) or die ("Couldn't execute sql");
             if ($result60) { 
                header("location:success1.php");
             } 
            }}}

            = $_POST['price'];
            $art_by = $_POST['art_by'];
            $created_date = date("Y/m/d");
            $target_dir = "upload/";
            $target_file = $target_dir . basename($_FILES["image"]["name"]);
           // $uploadOk = 1;
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
           // Check if image file is a actual image or fake image
            if (empty($name) || empty($price) || empty($art_by)) {     
                $message = 'All fields are required'; }
           
            else if (!is_numeric($price)) {     
                $message = 'Price should be numeric';  
            } else {
                $filename = $_FILES["image"]["tmp_name"];
                $rand = mt_rand();
                $picture = 'art'."_".$rand."".$rand."_".'CU'.".".$imageFileType;
                if (move_uploaded_file($filename,"upload/" .$picture)) {
            $sql = "INSERT INTO art_upload (name, art_by, created_date, image, price, status)       
            VALUES ('$name', '$art_by', '$created_date', '$picture', '$price', 1 )";   
             $result60 = mysqli_query($link, $sql) or die ("Couldn't execute sql");
             if ($result60) { 
                header("location:mealsuccess1.php");
             } 
            }}}
    ?>