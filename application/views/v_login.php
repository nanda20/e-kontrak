<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="css/style.css">

    <link rel="icon" href="Favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <title>Aplikasi E-Kontrak </title>  
<style type="text/css" media="screen">

img {
    margin-left:7%;
    vertical-align: center;
    border-style: none;
    margin-bottom: 25px;
}

@import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);


.background {
  background-image: url("https://cdn.pixabay.com/photo/2016/01/19/17/53/writing-1149962_960_720.jpg");
    
    width: 100%;
    height: 100%;
     background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.layer {
    background-color: rgba(44, 62, 80,0.7);
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}


body{
    margin: 0;
    font-size: .9rem;
    font-weight: 400;
    line-height: 1.6;
    color: #212529;
    text-align: left;
    /*background-color: #16a085;*/
/*    background-image: url("https://www.vtexperts.com/wp-content/uploads/2016/07/google-map-background-1900x1170.png");
     background-color: red;*/
}
.login-form{
    margin-top:6% !important;

}

  
    .is{
	    opacity: 1;
	    animation-name: fadeInOpacity;
    	animation-iteration-count: 1;
    	animation-timing-function: ease-in;
    	animation-duration: 0.5s;
	}
	
	@keyframes fadeInOpacity {
	0% {
	    margin-top:-60px;
		opacity: 0;
	}
	100% {
		opacity: 1;
		margin-top: 0;
	}

  
</style>
</head>
<body>


<div class="background">
    <div class="layer">
<div class="container">
    <div class="is">
<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
           
            <div class="col-md-6">
                 <img   src="https://www.krakatausteel.com/public/images/reverselogo.png" width="85%" height="80px"/>
            <br>
                <div class="card">
                    
                    <div class="card-header">LOGIN E-Kontrak</div>
                    <div class="card-body">
                        <form action="<?php echo base_url('Login'); ?>" method="POST">
                            <div class="form-group row">
                                <label for="email_address" class="col-md-4 col-form-label text-md-right">Username</label>
                                <div class="col-md-6">
                                    <input type="text" id="email_address" class="form-control" name="user" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                <div class="col-md-6">
                                    <input type="password" id="password" class="form-control" name="pass" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
                                <!-- <a href="#" class="btn btn-link"> -->
                                    <!-- Lupa Password ? Hubungi Admin -->
                                <!-- </a> -->
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
     </div>
</div>
</div>
</main>







</body>
</html>




