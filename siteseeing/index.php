<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Google</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css'><link rel="stylesheet" href="./style.css">
</head>

<html>
<body>
    <script> 
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
        }
    </script>

    <style>::-webkit-input-placeholder  { color:#c9c9c9; font-size: 0.73em;} /* Webkit */
        :-moz-placeholder { color:#c9c9c9; font-size: 0.73em;}  /* Firefox <= 18 */
        ::-moz-placeholder { color:#c9c9c9; font-size: 0.73em;}  /* Firefox >= 19 */
        :-ms-input-placeholder {  color: #c9c9c9; font-size: 0.73em;} /* Internet Explorer */
        
        body {
            margin: 0 auto;
            padding: 0;
        }
        #container {
            margin: 10px 0 0 0;
            text-align: center;
        }
        #topbar {
            margin: 25px 40px 0 0;
        }
        ul {
            list-style-type: none;
        }
        li {
            float: right;
            display: block;
            padding: 0 0 0 18px;
        }
        #topbar ul li {
            font: 12.5px Arial, sans-serif;
        }
        #topbar ul li:first-child {
            margin-top: -10px;
        }

        a {
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        a:link, a:visited {
            color: black;
        }
        #bottom a:link, #bottom a:visited {
            color: #666;
        }
        #logo {
            margin: auto;
            padding: 30px 0 30px 0;
            width: 20em;
            display: block;
            clear: both;
        }
        #searchbar {
            margin: auto;
        }
        #searchbar input {
            width: 25em;
            margin: auto;
            padding: 4px 8px 4px 8px;
            border: 1px solid #d5d5d5;
            display: inline-block;
            font-size: 1.35em;
            vertical-align: middle;
        }
        #search-options {
            margin-top: 10px;
        }
        .button {
            background-color: #eeeeee;
            font: bold 13.5px/30px Arial, sans-serif!important;
            color: #7a7a7a;
            display: inline-block;
            border-radius: 2px;
        }
        .button:hover {
            border: 1px solid #cccccc;
            color: black;
        }
        #searchbar input:hover {
            border: 1px solid #7e7e7e;
        }
        #languages {
          font: 12px/12px Arial;
          margin: 20px 0 0 0;
        }
        #languages a:link {
          color:#1a0dab;
        }
        #languages a:visited {
          color:#609;
        }
        #bottombar {
            background-color: #f2f2f2;
            border-top: 2px solid #e4e4e4;
            height: 40px;
            clear: both;
            position: relative;
            margin-top: 215px;
            font: 12.5px/40px Arial;
        }
        #bottombar ul {
            margin-left: 27px margin-top: 5px;
        }
        #bottomleft {
            float: left;
        }
        #bottomright {
            margin-right: 27px;
        }
        
        </style>
        
    <div id="container">
        <div id="topbar">
            <ul>
                <li>
                    
                </li>
                <li><a href="https://images.google.com/">Images</a></li>
                <li><a href="https://mail.google.com/">Gmail</a></li>
            </ul>
        </div>
        <img style="" id="logo" alt="google" src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png" />
        <div id="searchbar">
            <form action="<?php $_PHP_SELF ?>" method="POST">
                <input class="XSS-input" type="text" name="medium-mode" rows="0.5" placeholder="Search Google" ></input>
                <input value="Search" type="submit" class="button"></input>
            </form>

        </div>

        <div id="languages">
            <br>
            <br>
            <br>
          <p>Google.com.sg says:
            <p id="before-php-p"> </p>  
            <br>          
            <?php
                $messages = array("Ya got caught! Try again", "Good try, but try harder.", 
                "You thought you could get past THIS security?!", "Not gonna happen. Better luck next time!");
                if (isset($_POST["medium-mode"])) {
                    $input = $_POST["medium-mode"];
                    if (preg_match("'[<]script[>]alert\(.*?\)[<]/script[>]'", $input)) {
                        $rand = rand(0, count($messages)-1);
                        if (rand(0, 100) === 0) echo "<script>window.location.replace('/3nc0d3df1l3.html');</script>";
                        else echo "<script>window.location.replace('/3nc0d3df1l3.html');</script>";
                    } else {
                        echo $input;
                    }
                }
            ?>
          </p>
        </div>
    </div>
</body>

</html>
<!-- partial -->
  
</body>
</html>
