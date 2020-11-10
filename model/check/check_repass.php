<?php 
	$password = $_POST['password'];
	$repassword = $_POST['repassword'];
	
	if ($repassword != $password) {
		echo '<div class="check">Mật khẩu bạn nhập lại chưa chính xác!!</div>';
	} else if ($repassword = '') {
		
	} else if ($repassword == $password) {
		
	}
 ?>