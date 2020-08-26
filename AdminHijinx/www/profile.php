<?php
if ($_GET['id'] == 727158){
$profile = array("Jeremiah", "Ang", 92911234, 9382830,"jjang@gmail.com","Singapore","password123");
}
elseif ($_GET['id'] == 1){
    $profile = array("Administrator","Jonathan", 9291983,6521121,"admin@socialbook.com","Singapore","KSOXJDJS");
}
elseif ($_GET['id'] == "galf"){
    header("Location: ../galf.php");
}
else{
    header("Location: index.php?FORBIDDEN");
}
?>
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
    <title>SocialBook</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/fonts/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/assets/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/assets/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/assets/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="util.css">
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<style>
    body{
        color:white;
        background-color: #0E1621;
    }
    .list-group-item{
        background-color: #182533;
    }
    .form-control{
        background-color: #182533;
        color:white;
        font-size: 13px;
    }
    .nav-tabs > li.active > a{
        background-color: #182533;
        color:white;
        font-weight: bold;
    }
    .list-group-item{
        color:white;
    }
</style>
<body>
<div class="container bootstrap snippet">
    <div class="row">
        <div class="col-sm-10"><h1>SocialBook</h1></div>
         </div>
    <div class="row">
        <div class="col-sm-3"><!--left col-->


            <div class="text-center">
                <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">

            </div></hr><br>


            <ul class="list-group">
                <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>Shares</strong></span> 125</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>Likes</strong></span> 13</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>Posts</strong></span> 37</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>Followers</strong></span> 78</li>
            </ul>


        </div><!--/col-3-->
        <div class="col-sm-9">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Home</a></li>

            </ul>


            <div class="tab-content">
                <div class="tab-pane active" id="home">
                    <hr>
                    <form class="form" action="##" method="post" id="registrationForm">
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="first_name"><h4>First name</h4></label>
                                <input type="text" class="form-control" name="first_name" id="first_name" value="<?php echo $profile[0]?>" title="enter your first name if any.">
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="last_name"><h4>Last name</h4></label>
                                <input type="text" class="form-control" name="last_name" id="last_name" value="<?php echo $profile[1]?>" title="enter your last name if any.">
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="phone"><h4>Phone</h4></label>
                                <input type="text" class="form-control" name="phone" id="phone" value="<?php echo $profile[2]?>" title="enter your phone number if any.">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="mobile"><h4>Mobile</h4></label>
                                <input type="text" class="form-control" name="mobile" id="mobile" value="<?php echo $profile[3]?>" title="enter your mobile number if any.">
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="email"><h4>Email</h4></label>
                                <input type="email" class="form-control" name="email" id="email" value="<?php echo $profile[4]?>" title="enter your email.">
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="email"><h4>Location</h4></label>
                                <input type="email" class="form-control" id="location" value="<?php echo $profile[5]?>" title="enter a location">
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="password"><h4>Password</h4></label>
                                <input type="password" class="form-control" name="password" id="password" value="<?php echo $profile[6]?>" title="enter your password.">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <br>

                                <a class="btn btn-lg" type="reset" href="index.php" ><i class="glyphicon glyphicon-repeat"></i>Logout</a>
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <br>
                            </div>
                        </div>
                    </form>

                    <hr>

                </div><!--/tab-pane-->

            </div><!--/tab-pane-->
        </div><!--/tab-content-->

    </div><!--/col-9-->
</div><!--/row-->
</body>
<script>
    $(document).ready(function() {


        var readURL = function(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.avatar').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }


        $(".file-upload").on('change', function(){
            readURL(this);
        });
    });
</script>
