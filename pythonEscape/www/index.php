<!DOCTYPE html>
<html lang="en">
<head>
    <title>Python Script Tester</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Overpass' rel='stylesheet'>
</head>
<style>
    body {
        font-family: 'Overpass';font-size: 22px;
    }
    .output{
        padding-top: 1em;
        padding-bottom: 1em;
        color:white;
        font-weight: bold;
        text-align:center;
        font-size: 2em;
    }
</style>
<body>
<div class="output">
    Send us your Python Script and we'll run it for you!
</div>
<div class="wrapper" style="height:50%">
    <div class="file-upload">
        <form id="form" method="POST" action="upload.php" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload"/>
        <i class="fa fa-arrow-up"></i>
        </form>
    </div>
</div>

<?php
$a1 = $_POST['0'];
$output = $_POST['1'];
if (isset($output)){
    echo '<div class="output">The output of your script '.$name.' is: '.$output.'</div>';
}
else{
    echo '<div class="output">'.$a1.'</div>';
}
?>

</body>
<script>
    document.getElementById("fileToUpload").onchange = function() {
        document.getElementById("form").submit();
    };
</script>
</html>