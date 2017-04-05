<!DOCTYPE HTML>
<HTML>
    <HEAD>
        <TITLE>Maestro</TITLE>
        <meta charset="utf-8">
    </HEAD>
    <BODY>
	<div class="header">
            <!-- 헤더 -->
	</div>
	<div class="content">


<?php

	echo '<a href="http://'.$_SERVER['HTTP_HOST'].'">  홈   </a>'; 
	
$is_logged = $_SESSION['is_logged'];
if($is_logged=='YES') {
    $user_id = $_SESSION['user_id'];
    //$message = $user_id . ' 님 환영합니다.';
	
	echo '<a href="http://'.$_SERVER['HTTP_HOST'].'/member/logout.php">  로그아웃  </a>'; 
	echo '<a href="http://'.$_SERVER['HTTP_HOST'].'/note/select_mode.php">  연주모드  </a>'; 
	echo '<a href="http://'.$_SERVER['HTTP_HOST'].'/score/score_board.php"> 기록조회  </a>'; 
}
else {

    //echo '<a href="http://'.$_SERVER['HTTP_HOST'].'/member/login.php">로그인</a>'; 
}
?>
        
<?php
    echo $message;
?>

<hr/>