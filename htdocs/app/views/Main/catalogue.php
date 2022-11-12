<html>
<head>

	<title><?= _("Index") ?></title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<style>
body{
background-color: steelblue;
} 

.card {
        margin: 0 auto; /* Added */
        float: none; /* Added */
        margin-bottom: 10px; /* Added */
}
</style>
</head>

<body>

 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">ShopMart</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">

   <form action="/Main/search" method="get" style='display:inline-block'>         
      <div class="input-group">
          <input type="search" name='search_term' class="form-control" placeholder="Enter search term" />
        <button type="submit" class="btn btn-primary" value="Search"><i class="bi-search"></i></button>
      </div>    
    </form>

      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/Main/home">Home <span class="sr-only"></span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="http://localhost/Main/catalogue">Catalogue</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/Login/register">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/Login/login">Login</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="http://localhost/Login/logout">Logout</a>
      </li>
      </li>
    </ul>
  </div>
</nav>

</br>

<form action='' enctype="multipart/form-data" method='post'>
  <label style="color:white;" for="item_price">Filter by price:</label>
  <select name="item_price" id="item_price">
    <option value="asc">Lowest to Highest</option>
    <option value="desc">Highest to Lowest</option>
  </select>
  <input type="submit" value="Filter">
</form>


</br>
</br>
<div class="card w-75">
<div class="card-body">
<div class="mask d-flex align-items-center h-100 gradient-custom-3">
<div class="card" style="border-radius: 20px;">
<div class="card-body p-200" style="" >


<h2 class="text-center mb-5">Catalogue</h2>
     
<form action='' enctype="multipart/form-data" method='post'>
<div class="form-outline mb-4">
<table width="100%" border="1" cellpadding="5" cellspacing="5">

<tr><th>Name</th><th>Description</th><th>Price</th><th>Image</th><th>Action</th><th>Action</th><th>Action</th></tr>
                	
                      	<?php
                      	$item = new \app\models\Item();
                      	$items = $item->getAll();
                      	foreach ($data as $item) {
                      		echo "<tr>
                      		<td type=name>$item->item_name</td>
                      		<td type=name>$item->item_description</td>
                          <td type=name>$item->item_price</td>
                      		<td> <img src='/images/".$item->item_image."'style='max-width:200px;max-height:100px'/></td></td>
                          <td type=action>
                          <button class='btn btn-info'><a class='nav-link' href='/Buyer/contact/$item->seller_id'>Contact seller</a></button>
                          </td>
                          <td type=action>
                          <button class='btn btn-secondary'><a class='nav-link' href='/Seller/delete/$item->item_id'>Add to watchlist</a></button>
                          </td>
                      		<td type=action>
                      	  <button class='btn btn-warning'><a class='nav-link' href='/Buyer/addToCart/$item->item_id'>Add to cart</a></button>
                      		</td>
                      		</tr>";
                      	}
                      ?>
                      </table>
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

<h1><?= _("Hello World!") ?></h1>
<p><?= _("I like cats.") ?></p>

</body>
</html>