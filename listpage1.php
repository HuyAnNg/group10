<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<?php 
require_once('./dbshoes.php');
//echo $sql;
 ?>
<link rel="stylesheet" href="listpage1.css">
<link rel="icon" href="image/Icon.png" type="image/gif" sizes="16x16">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<header class="header">
	
	<div class="row1">
		<a href="home.php"><img src="image/logo.svg" alt="loading" class="logo"></a>
	
		<nav class="nav_links">
			<ul class="u">
				<li><a class="bar" href="about.php">ABOUT</a></li>
				<li><a class="bar" href="services.php">SERVICES</a></li>
				<li><a class="bar" href="contact.php">CONTACT US</a></li>
			</ul>
		</nav>
	</div>



	<div class="row2">
		<a href="#"><img src="image/cart_empty.svg" alt="loading" class="cart-logo"></a>
			
		<div class="search-container">
			<form action="#">
				<button class="search-button" type="submit"><i class="fa fa-search"></i></button>
				<input class="input" type="text" placeholder="Search" name="search">
			</form>
		</div>
				
		<a href="listpage1.php"><button class="shop-now">SHOP NOW</button></a>
	
	</div>

	<label for="nav-toggle" class="nav-toggle-label">
		<span style="color: white"></span>
	</label>
	

</header>


<body class="webpage">
	
	<div class="offset-header"></div>
	<div class="wall-header"><h1>CATEGORIES</h1></div>
	<div class="offset-under"></div>

	<div class="body">
		<div class="wall">
			<div class="wall-nav">
					<div class="wall-list">
						<ul><?php 
						$sql = "select *from category";
						$rows= query($sql);
				
						for ($i=0; $i < count($rows) ; $i++) {
						 ?>
							<div class="div-li"><li><a href="listpage1.php?catid=<?=$rows[$i][0]?>"><?=$rows[$i][1]?></a></li></div>
							<?php } ?>
						</ul>
					</div>	
			</div>
			
			<br>
			
			<div class="login">
				<a href="login.php">Log In as Admin?</a>
			</div>
			 
		</div>
		
		<div class="prod-area">
				
				<div>
						<table class="prod-table">
							
							<?php 
								if (isset($_GET['catid'])) {
									# code...
									$sql = "select * from product where CatId=".$_GET['catid'];
								}
								elseif(isset($_GET['search']))
								{
									$key = $_GET['key'];
									$sql = "Select * From product where ProductName like '%" . $key . "%'";
								}
								else
								{
									$sql = "Select * from product";
								}
								$name = query($sql);
								for ($i=0; $i <count($name) ; $i++) { 
							 ?>
							
							<tr style="width: 1000px">
								
							<th>
								<a class="shoesname" href="productdetail.php?productid=<?=$name[$i][0]?>" >
									<img src="<?=$name[$i][3]?>" alt="loading" width="300" height="300"class="prod-pic">
									<div class="shoesname"><?=$name[$i][2]?></div>
								</a>
							</th>
								
								<th >
									<div style="margin-left: 300px;" >Price: $<?=$name[$i][5]?></div>

								</th>
								

							<?php } ?>
								
							</tr>
						</table>
				</div>
		</div>

</body>
</html>