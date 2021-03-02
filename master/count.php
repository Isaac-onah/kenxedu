<?php


function countPost(){
 		$db = mysqli_connect("localhost", "kenxeduc_admin", ".Push12-", "kenxeduc_kenx-edu");
	$query = "SELECT * FROM post";
	$result = mysqli_query($db, $query);
    $rows = mysqli_num_rows($result);
    echo  $rows;

}
function countAuthor(){
 		$db = mysqli_connect("localhost", "kenxeduc_admin", ".Push12-", "kenxeduc_kenx-edu");
	$query = "SELECT * FROM author";
	$result = mysqli_query($db, $query);
    $rows = mysqli_num_rows($result);
    echo  $rows;
    
}



?>