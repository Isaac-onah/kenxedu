<?php

	$title = $_POST['title'];
	$seo = $_POST['seo'];
	$fileName = $_FILES["file"]["name"];
	$fileTmpName = $_FILES["file"]["tmp_name"];
	$fileSize = $_FILES["file"]["size"];
	$fileType = $_FILES["file"]["type"];
	$fileExt = explode('.',$fileName);
	$fileActualExt = strtolower(end($fileExt));
	$allowed = array('jpg', 'jpeg', 'png');
	
	
    print_r($_FILES['file']);
    echo $fileName;
    
 	$file = addslashes(file_get_contents($_FILES['file']['tmp_name']));
	$content = $_POST['content'];
	$category = $_POST['category']; //Example 1 2 4 
	$author = $_POST['author'];

    
	$db = mysqli_connect("localhost", "kenxeduc_admin", ".Push12-", "kenxeduc_kenx-edu");
	$query = "INSERT INTO post (title, image, imagetype, seo_title, category, content, author) VALUES ('$title', '$file', '$fileType', '$seo', '$category', '$content', '$author')";
	$res = mysqli_query($db, $query);
	

			header('location:http://kenxedu.com/master/index.php');


?>