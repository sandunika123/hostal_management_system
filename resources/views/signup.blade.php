
<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="/css/style1.css">
</head>
<body>
<div class="container login-container">
      <div class="row">
        <div class="col-md-6 ads">
            <br>
          <h3><span id="fl"><img src="/images/logo.png" width="100px" height="120px"></span></h3>
          <h3><span id="fl">You're warmly welcome to FOT - Hostal Management System</span></h3>
        </div>
        <div class="col-md-6 login-form ad" >
            <br>
          <form action="" method="POST">
            @csrf
            <div class="form-group">
              <input type="text" class="form-control" name="fname" placeholder="First name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="lname" placeholder="Last name">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="nic" placeholder="NIC Number">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="E-mail Address">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <br>
            <div class="form-group">
              <button type="button" class="btn btn-primary btn-lg btn-block">Sign In</button>
            </div>
<br>
          </form>
        </div>
      </div>
    </div>
</body>
</html>
