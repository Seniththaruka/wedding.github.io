

<? php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
       <title>Login Form</title>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1, sharink-to-fit=no">
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
       <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
       </head>
       <link rel="stylesheet" type="text/css" href="styleeeee.css">
       <script src='https://kit.fontawesome.com/a076d05399.js'></script>
<body>
      <div class="container-fluid">
      <div class="row">
              <div class="col-lg-6 col-md-6 d-none d-md-block image-container"></div>
             <div class="col-lg-6 col-md-6 form-container">
             <div class="col-lg-8 col-md-12 col-sm-9 col-xs-12 form-box text-center">
                    <div class="logo mb-3">
                    <img src="img/logo.png" width="150px">
                           
                    </div>
                    <div class="heading mb-4">
                    <h4>Login into your account</h4>
                    </div>
                    <form action="authenticate.php" method="POST">
                    <div class="form-input">
                           <span><i class="fa fa-user"></i>
                           </span>
                           <input type="text" placeholder="User Name" name="username" required>
                           </div>
                           <div class="form-input">
                           <span><i class="fa fa-lock"></i></span>
                                  <input type="password" placeholder="Password" required name="password">
                           </div>
                           <div class="row mb-3">
                            <div class="col-6 d-flex">     
                           <div class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" id="cb1">
                                  <label class="custom-control-label text-white" for="cb1"> Remember me</label>
                                  </div>
                           </div>
                           <div class="col-6 text-right">
                           <a href="forget.php" class="forget-link">Forget Password</a>
                           </div>
                    </div> 
                     <div class="text-left mb-3">
                           <button type="submit" class="btn">Login</button>
                           
                           
                           </div>
                           <div class="text-center mb-2">
                           <div class="mb-3" style="color: #000">or login with</div>
                                  
                                  <div class="socialMediaLinks">
                                          
                                         <a href="https://facebook.com" class="fab fa-facebook-f"></a>
                                         
                                          <a href="https://plus.google.com" class="fab fa-google-plus-g"></a>
                                         <a href="https://twitter.com" class="fab fa-twitter"></a>
                                  </div>
                                  
                                        
                           </div>
                           <div style="color: #000">Don't have an account<a href="join.php" class="signup-link"> Sign up here</a>
                                  
                           
                           </div>
                    </form>
                         
                    </div>
             </div>
             </div>
            
              
            
       
       </div> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
       
       
       
       </body>

</html>