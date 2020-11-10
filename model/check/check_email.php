<?php 
	include_once '../../controller/database.php';
	$email = $_POST['email'];
	if ($email == '') {

	} else if (!preg_match ("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+\.[A-Za-z]{2,6}$/", $email))  {
    	echo '<div class="check">Email sai định dạng!!</div>';
    } else {

    }
    $check = $connect->build_query([
    	"select" => "*",
    	"table" => "`user`",
    	"where" => "`email`='$email'"
    ])->num_rows();
    if ($check == 1) {
    	echo '<div class="check">Email đã tồn tại!!</div>';
    } else {
    	 
    }
?>