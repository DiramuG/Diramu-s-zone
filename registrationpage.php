<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="reg_css.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
	<script src="https://code.iconify.design/iconify-icon/1.0.0/iconify-icon.min.js"></script>
</head>
<body>

<div class="navbar">

	<div class="logo">
	<h1>TOYS</h1> 
	</div>

	<div class="searchbar">
		<input type="text" placeholder="What are you looking for?">
		
	</div>

<div class="icons">
	<div class="icon1">
		<iconify-icon icon="eva:question-mark-circle-fill" style="color: #df2935;" width="40" height="40"></iconify-icon>
	</div>

	<div class="icon2">
		<iconify-icon icon="el:search-alt" style="color: #df2935;" width="40" height="40" flip="horizontal"></iconify-icon>
		<p>Hi,User</p>
		
	</div>

	<div class="icon3">
	<iconify-icon icon="el:shopping-cart" style="color: #df2935;" width="24" height="24"></iconify-icon>

</div>
	</div>
</div>

<div class="bodypg">
	
	<h3>Register</h3>

	<form action="register_user.php" method="POST">
	<input type="text" id="firstname" name="firstname" placeholder="First Name">
	<input type="text" id="lastname" name="lastname" placeholder="Last Name">
	<input type="email" id="email" name="email" placeholder="Email">

	<input type="password" id="password" name="password" placeholder="Password">

	<div class="button">
	<input type="submit" value="REGISTER" name="">
	</div>

	<hr>

<footer>
	<div class="frame3">
		<b><h1>TOYS</h1></b>
		<span class="icons">
		<iconify-icon icon="akar-icons:facebook-fill" style="color: red;" width="24" height="24"></iconify-icon>
		<iconify-icon icon="ant-design:instagram-filled" style="color: red;" width="24" height="24"></iconify-icon>
		<iconify-icon icon="ant-design:twitter-circle-filled" style="color: red;" width="24" height="24"></iconify-icon>

	</span>
	
	<p>Copyright 2022.Toys</p>


	</div>
	<div class="info">
		<b><h4>INFO</h4></b>
		<p>ABOUT US</p>
		<p>CONTACT US</p>
		<p>WORK WITH US</p>
		<p>PRIVACY POLICY</p>
	</div>
	<div class= "CustCare">
		<b><h4>CUSTOMER CARE</h4></b>
		<p>SHIPPING</p>
		<p>RETURNS</p>
		<p>GIFT CARDS</p>
		<p>OUTLET</p>
	</div>
	</footer>
	</form>
</div>


</body>
</html>