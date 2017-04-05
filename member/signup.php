<?php
require_once '../preset.php';
include '../header.php';
?>
         <form name="signup_form" method="post" action="./signup_check.php" >
            아이디 : <input type="text" name="user_id" /><br />
            비밀번호 : <input type="password" name="user_pass" /><br />
            비밀번호 확인 : <input type="password" name="user_pass2" /><br />
            이름 : <input type="text" name="user_name" /><br />
            성별 : <input type="text" name="user_gender" /><br />
            <input type="submit" value="회원가입" />
        </form>    
        
<?php
    include '../footer.php';
?>
