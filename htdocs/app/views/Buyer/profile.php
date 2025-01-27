<html>
<head>

<title><?=_("Buyer Profile")?></title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<style>
body{
background: rgb(2,0,36);
background: linear-gradient(45deg, rgba(2,0,36,1) 0%, rgba(1,57,95,1) 30%, rgba(0,212,255,1) 100%);} 
</style>
</head>


<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="http://localhost/Main/catalogue"><?=_("ShopMart")?></a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>

<div class="collapse navbar-collapse" id="navbarNavDropdown">
<ul class="navbar-nav">

      <li class="nav-item">
        <a class="nav-link" href="http://localhost/Main/catalogue"><?=_("Catalog")?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/Buyer/messageboard"><?=_("Message Board")?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/Buyer/history"><?=_("Order History")?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/Buyer/myReviews"><?=_("My Reviews")?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/Buyer/watchlist"><?=_("Watchlist")?></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="http://localhost/Buyer/cart"><?=_("Cart")?></a>
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
    </ul>
  </div>
</nav>

  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 20px;">
            <div class="card-body p-5">
              <h2 class="text-center mb-5"><?=_("My Profile")?></h2>
            

                <button class='btn btn-warning'> <a class='nav-link' href="/Buyer/editProfile"><center><?=_("Edit Profile")?></center></a></button>
                </br>
                </br>
              
              
                <form action='' enctype="multipart/form-data" method='post'>
                  <div class="form-outline mb-4">

                           <dl>
                  <dt>
                    <?=_("First name:")?>
                  </dt>
                  <dd>
                    <?= $data['buyer']->buyer_fname ?>
                  </dd>
                  <dt>
                    <?=_("Last name:")?>
                  </dt>
                  <dd>
                    <?= $data['buyer']->buyer_lname ?>
                  </dd>
                  <dt>
                    <?=_("Email:")?>
                  </dt>
                  <dd>
                    <?= $data['buyer']->buyer_email ?>
                  </dd>
                </dl>

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

</body>
</html>