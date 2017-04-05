<?php
require_once '../preset.php';
require_once '../header.php';
?>
<?php

$q = "SELECT * FROM ACCOUNT WHERE id='$user_id'";
$result = $mysqli->query( $q);

if($result->num_rows==1) {
    //해당 ID 의 회원이 존재할 경우
    // 암호가 맞는지를 확인

    $encryped_pass = sha1($user_pass);
    $row = $result->fetch_array(MYSQLI_ASSOC);
    if( $row['pw'] == $encryped_pass ) {
        $_SESSION['is_logged'] = 'YES';
        $_SESSION['user_id'] = $user_id;
        $_SESSION['idx'] = $row['idx'];
        
        header('Location: '.$url['root'].'member/login_done.php');
        exit();
    }
    else {
    	//아이디와 비밀번호가 일치 하지 않음
        $_SESSION['is_logged'] = 'NO';
        $_SESSION['user_id'] = '';
        
        header('Location: '.$url['root'].'member/login_done.php');
        exit();
    }

}
else {
	echo "해당 계정은 존재 하지 않습니다.";
    // 없거나, 비정상
    
}

$result->free();

$mysqli->close();
require_once '../footer.php';
?>
