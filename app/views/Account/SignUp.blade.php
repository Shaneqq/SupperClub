<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Bootstrap signup form example</title>
    <!-- BOOTSTRAP STYLE SHEET -->
     {{HTML::style('assets/signup/css/bootstrap.css')}}
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- GOOGLE FONT FOR BETTER FONT STYLE -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css' />
     <!-- CUSTOM STYLE CSS -->
    <style type="text/css">
        body {
            background-color:#f4f4f4;
             font-family: 'Open Sans Condensed', sans-serif;
             font-size:17px;
        }
        
        .pad-top {
            padding-top:70px;
        }
        .panel-set {
            border-radius:0px;
        }
    </style>
</head>
<body>
    <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Design Bootstrap</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav ">
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">ABOUT</a></li>
                    <li><a href="#">SERVICES</a></li>
                    <li><a href="#">CONTACT</a></li>
                </ul>
            </div>

        </div>
    </div>
    <!-- NAVBAR CODE END -->


    <div class="container back">
            <div class="row text-center pad-top">
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3"">
                    <img src="assets/img/vivaldi-font-logo.png" alt=""  />
                    <br /><br />
                </div>
                
                </div>         
              
            <!-- ROW END -->
        <div class="row ">
                    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                        <div class="panel panel-info panel-set">
                            <div class="panel-heading">
                             Enter Details to Register 
                            </div>
                            <div class="panel-body"> 
                    <label>Enter Your Name</label>
                    <input type="text" class="form-control" >
                         <label>Enter Your Email</label>
                    <input type="text" class="form-control" >
                    <label>Enter Password </label>
                    <input type="password" class="form-control" >
                     <label>Re-Enter Password </label>
                    <input type="password" class="form-control" >
                                <hr />
 
                                          <a href="#" class="btn btn-info">Sign Up Now ! </a>

                    <hr /> 
                        Please fill all above fields carefully to register / sign up.
                                 If already a member <a href="#">click here</a>
                                

                    </div>
                            </div>
                        </div>
                </div>
         <!-- ROW END -->
          
    </div>
    <!-- CONATINER END -->

    <!-- REQUIRED SCRIPTS FILES -->
    <!-- CORE JQUERY FILE -->
    
    {{HTML::script('/assets/signup/js/jquery-1.11.1.js')}}
    {{HTML::script('/assets/signup/js/bootstrap.js')}}
   
</body>

</html>
