<?php
use App\Http\Controllers\ProdctController;
$total=ProdctController::cartitem();
?>



<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><img src="images/logo_bg.PNG" alt ="logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">SHSN Supplements</a> 
      <li class="nav-item">
      <a class="nav-link" href="#">SHSN Naturals</a>
        </li>
      <li class="nav-item">
      <a class="nav-link" href="#">Sale</a>
       </li>
       <li class="nav-item">
       <a class="nav-link" href="#">Nutrition University</a>
       </li>
       <li class="nav-item">
       <a class="nav-link" href="#">Fitness Plans</a>
       </li>
     
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
          Shop
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Shop Main Page</a>
          <div class="dropdown-divider"></div>
         
          <a class="dropdown-item" href="#">Find Products</a>
          <a class="dropdown-item" href="#">Shop by Categories </a>
          <a class="dropdown-item" href="#">Shop by Brands </a>
          <a class="dropdown-item" href="#">Shop by Goal </a>
     
        </div>
      </li>
     
    </ul>
    <form action="/search" class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2 "  name="query" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <ul class="nav navbar-nav navbar-right">
      <li>
        <a>
          Cart()
        </a>
      </li>

    </ul>
  </div>
</nav>
