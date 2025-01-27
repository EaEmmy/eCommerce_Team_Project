<html>

<head>
	<title><?=_("Setup 2FA Account")?></title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<style>
body{
background: rgb(2,0,36);
background: linear-gradient(45deg, rgba(2,0,36,1) 0%, rgba(1,57,95,1) 30%, rgba(0,212,255,1) 100%);
}    
</style>
</head>

<body>
<?php
if(isset($_GET['error'])){
?>
<div class="alert alert-danger" role="alert">
	<?=$_GET['error']?>
</div>
<?php
}
?>

<?php
if(isset($_GET['message'])){
?>
<div class="alert alert-success" role="alert">
	<?=$_GET['message']?>
</div>
<?php
}
?>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="http://localhost/Main/home"><?=_("ShopMart")?></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

<div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/Login/register"><?=_("Register")?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/Login/login"><?=_("Login")?></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="http://localhost/Login/logout"><?=_("Logout")?></a>
      </li>
      <div class="dropdown">
                        <a class="nav-link" data-bs-toggle="dropdown"><?= _("Language")?></a>
                        <div class="dropdown-menu">
                        <a href="?lang=en_CA" class="dropdown-item">English</a>
                         <a href="?lang=fr_CA" class="dropdown-item">Français</a>
                        </div>
      </div>  
</div>
</nav>

	 <div class="mask d-flex align-items-center h-100 gradient-custom-3" style="opacity:80%;">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 20px;">
            <div class="card-body p-5">     
                     
			<button class='btn btn-info'><a a class='nav-link' href="/Login/setup2fa"> <?=_("Set up 2-factor authentication")?></a></button>
      </br>
      </br>

      <!-- <button class='btn btn-warning'><a a class='nav-link' href="/Login/check2fa"> <?=_("Verify 2-factor authentication")?></a></button> -->

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
<!-- <form action='' method='post'>
	<label>Old password:<input type="password" name="old_password" /></label><br>
	<label>New password:<input type="password" name="password" /></label><br>
	<label>New password confirmation:<input type="password" name="password_confirm" /></label><br>
	<input type="submit" name="action" value="Change password" />
</form>

<a href="/Login/logout">Log out</a>
 -->

</body>
</html>