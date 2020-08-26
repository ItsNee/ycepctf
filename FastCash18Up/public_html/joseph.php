<?php
if (strtolower($_POST['DoIWantMoney']) == "no"){
    echo '<h1>Is this important? Who Knows</h1>';
}
else if (strtolower($_POST['DoIWantMoney'])  == "yes"){
    header("Location: /goodjob.php");
    exit;
}
else {
    echo "<h1>You modified the request header, you're getting closeeeee</h1>";
}
?>