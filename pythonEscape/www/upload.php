
<?php
function redirect_post($url, array $data)
{
    ?>
    <head>
        <script type="text/javascript">
            function closethisasap() {
                document.forms["redirectpost"].submit();
            }
        </script>
    </head>
    <body onload="closethisasap();">
    <form name="redirectpost" method="post" action="<? echo $url; ?>">
        <?php
        if ( !is_null($data) ) {
            foreach ($data as $k => $v) {
                echo '<input type="hidden" name="' . $k . '" value="' . $v . '"> ';
            }
        }
        ?>
    </form>
    </body>
    </html>
    <?php
    exit;
}
$dir = "uploads/";
$target = $dir.basename($_FILES['fileToUpload']['name']);
$FileType = strtolower(pathinfo($target,PATHINFO_EXTENSION));
if($FileType != "py" ) {
    $request = array("Sorry, only .py files are allowed");
    redirect_post('/index.php', $request);
}
else {
    move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target);
    chmod($target, 0777);
    $message = exec($target . " 2>&1");
    $request = array(basename($_FILES['fileToUpload']['name']), $message);
    unlink($target);
    redirect_post('/index.php', $request);
}
?>
