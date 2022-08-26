<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/navbar.css">
  <style>
	/* .navbar a i,.seperator , .navbar a{
		color: #2a718e !important;
	}
    .logo{
        border-radius: 100%;
        width: 53px;
    } */
	</style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
  <a class="navbar-brand" href="home.php"><img src="images/logo.jpg" alt="Logo" class="logo" ></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
	  <li class="nav-item">
          <a class="nav-link" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link about" href="aboutus.php">About Us</a>
        </li>
		<li class="nav-item">
          <a class="nav-link contact" href="contactus.php">Contact Us</a>
        </li>
		<li class="nav-item">
          <a class="nav-link shop" href="shop.php">Shop</a>
        </li>
		<li class="nav-item">
          <a class="nav-link dashboard" href="dashboard.php">Dashboard</a>
        </li>
      </ul>
      <div class="d-flex">
      <a class="cart text-decoration-none me-3" href='cart.php'><i class="fas fa-shopping-cart"></i></a>
	  <a class="profile text-decoration-none me-3" href='profile.php'><i class="fas fa-user-alt"></i></a>
		<a class="text-decoration-none signup me-3" href='signup.php'>Sign up</a>
		<span class='seperator me-3'>|</span>
        <a class="text-decoration-none me-3 signin" href='login.php'>Sign in</a>
        <a class="signout text-decoration-none me-3" href='signout.php'>Sign out</a>
</div>
    </div>
  </div>
</nav>



</body>
</html> 