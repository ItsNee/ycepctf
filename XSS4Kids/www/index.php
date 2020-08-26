<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>XSS Search</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="search" id="bar">
        <input id="inp" type="search" class="search-box"/>
    <span class="search-button" onclick="Go()">
    <span class="search-icon">
    </span>
  </span>
</div>
<form action="index.php" id="subform" method="POST">
    <input type="hidden" id="subsub" name="query">
</form>
<div id="new" class="search-box"style="text-align:center;"></div>
<?php
$result = $_POST['query'];
if (isset($result)){
    $result = preg_replace('/[^a-zA-Z 0-9()\/<>.=""]/',"This Character Is Blocked",$result);
 echo'<br>';
echo '<div style = "text-align: center;" class="search-box"> You have searched for: '.$result.'</div>';
echo'<br>';
}
?>
</body>
<script>
    var _0x1dda=['submit','toggle','subsub','inp','bar','classList','subform','value','open','getElementById','length'];(function(_0x50798f,_0x1dda21){var _0x467054=function(_0x151c19){while(--_0x151c19){_0x50798f['push'](_0x50798f['shift']());}};_0x467054(++_0x1dda21);}(_0x1dda,0x1b6));var _0x4670=function(_0x50798f,_0x1dda21){_0x50798f=_0x50798f-0x0;var _0x467054=_0x1dda[_0x50798f];return _0x467054;};function Go(){var _0x46c166=document[_0x4670('0x0')](_0x4670('0x6'))[_0x4670('0x7')],_0x22a9ff=document['getElementById'](_0x4670('0x5'))[_0x4670('0x9')],_0x513c73=document[_0x4670('0x0')](_0x4670('0x4')),_0x545f35=document[_0x4670('0x0')](_0x4670('0x8'));_0x46c166[_0x4670('0x1')]===0x1?_0x46c166['toggle'](_0x4670('0xa')):_0x22a9ff==null||_0x22a9ff===''?_0x46c166[_0x4670('0x3')](_0x4670('0xa')):(_0x513c73[_0x4670('0x9')]=_0x22a9ff,_0x545f35[_0x4670('0x2')]());}
</script>
</html>