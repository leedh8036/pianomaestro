<?php
require_once '../preset.php';
include '../header.php';
?>

         <form name="login_form" method="post" action="./login_check.php" >
            아이디 : <input type="text" name="user_id" /><br />
            비밀번호 : <input type="password" name="user_pass" /><br />
            <input type="submit" value="로그인" />
        </form>    
        
<?php
    include '../footer.php';
?>
