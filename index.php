<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  
<style type="text/css">
          @import url("//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css");
          .login-block{
              background: #DE6262;  /* fallback for old browsers */
          background: -webkit-linear-gradient(to bottom, #FFB88C, #DE6262);  /* Chrome 10-25, Safari 5.1-6 */
          background: linear-gradient(to bottom, #FFB88C, #DE6262); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
          float:left;
          width:100%;
          padding : 50px 0;
          }
          .banner-sec{background:url(https://static.pexels.com/photos/33972/pexels-photo.jpg)  no-repeat left bottom; background-size:cover; min-height:500px; border-radius: 0 10px 10px 0; padding:0;}
          .container{background:#fff; border-radius: 10px; box-shadow:15px 20px 0px rgba(0,0,0,0.1);}
          .carousel-inner{border-radius:0 10px 10px 0;}
          .carousel-caption{text-align:left; left:5%;}
          .login-sec{padding: 50px 30px; position:relative;}
          .login-sec .copy-text{position:absolute; width:80%; bottom:20px; font-size:13px; text-align:center;}
          .login-sec .copy-text i{color:#FEB58A;}
          .login-sec .copy-text a{color:#E36262;}
          .login-sec h2{margin-bottom:30px; font-weight:800; font-size:30px; color: #DE6262;}
          .login-sec h2:after{content:" "; width:100px; height:5px; background:#FEB58A; display:block; margin-top:20px; border-radius:3px; margin-left:auto;margin-right:auto}
          .btn-login{background: #DE6262; color:#fff; font-weight:600;}
          .banner-text{width:70%; position:absolute; bottom:40px; padding-left:20px;}
          .banner-text h2{color:#fff; font-weight:600;}
          .banner-text h2:after{content:" "; width:100px; height:5px; background:#FFF; display:block; margin-top:20px; border-radius:3px;}
          .banner-text p{color:#fff;}
</style>

</head>

<body style="    background: #6178b0;;
">

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<!------ Include the above in your HEAD tag ---------->

                    <?php 
                        if(isset($_SESSION['error'])){
                          echo $_SESSION['error'];
                          unset($_SESSION['error']);
                        }
                    ?>
    
<section class="login-block" style="    background: linear-gradient(to bottom, #33145d, #627ab1);
">
<?php
if(isset($_SESSION['auth'])){
    if($_SESSION['role']=='employee'){
        header("location:employee/dashboard.php");
    }
    else if($_SESSION['role']=='admin'){
        header("location:admin/dashboard.php");
    }
}
?>
    <div class="container">
        <div class="row">
          <div class="col-md-4 login-sec">
              <h2 class="text-center">Login Now</h2>
              <form class="login-form" action="login_insert.php" method="post">
        <div class="form-group">
          <label for="exampleInputEmail1" class="text-uppercase" style="font-weight: bold;font-size: 10px;">Enter First Name</label>
          <input type="text" name="fname" class="form-control" placeholder="Name">
          
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1" class="text-uppercase"style="font-weight: bold;font-size: 10px;">Enter Password</label>
          <input type="password" name="password" class="form-control" placeholder="Password">
        </div>
  
  
        <div class="form-check">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input">
          <small>Remember Me</small>
        </label>
        <button type="submit" class="btn btn-login float-right">Submit</button>
      </div>
  
       </form>
    </div>
    <div class="col-md-8 banner-sec">
      <img class="d-block img-fluid" src="https://static.pexels.com/photos/33972/pexels-photo.jpg" alt="First slide">
    </div>
</section>

</body>
</html>