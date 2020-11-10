<?php 
	$password = $_POST['password'];
	
	if($password == ''){
		
	} else if (strlen($password) <= 8) {
		echo '<div class="check">Mật khẩu bạn nhập phải có nhiều hơn 8 ký tự!!</div>';
	}
 ?>