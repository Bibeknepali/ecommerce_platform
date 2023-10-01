<?php 
//session_start();

?>
<html lang="en" dir="ltr">
   <head>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
html,body{
  display: center;
  height: 100%;
  width: 100%;
  place-items: center;
  background: linear-gradient(315deg, #ffffff 0%, #d7e1ec 2000%);
}
.wrapper{
  display: inline-flex;
}
.wrapper .icon{
  margin: 0 20px;
  text-align: center;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  position: relative;
  z-index: 2;
  transition: 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}
.wrapper .icon span{
  display: block;
  height: 60px;
  width: 60px;
  background: #fff;
  border-radius: 50%;
  position: relative;
  z-index: 2;
  box-shadow: 0px 10px 10px rgba(0,0,0,0.1);
  transition: 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}
.wrapper .icon span i{
  line-height: 60px;
  font-size: 25px;
}
.wrapper .icon .tooltip{
  position: absolute;
  top: 0;
  z-index: 1;
  background: #fff;
  color: #fff;
  padding: 10px 18px;
  font-size: 20px;
  font-weight: 500;
  border-radius: 25px;
  opacity: 0;
  pointer-events: none;
  box-shadow: 0px 10px 10px rgba(0,0,0,0.1);
  transition: 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}
.wrapper .icon:hover .tooltip{
  top: -70px;
  opacity: 1;
  pointer-events: auto;
}
.icon .tooltip:before{
  position: absolute;
  content: "";
  height: 15px;
  width: 15px;
  background: #fff;
  left: 50%;
  bottom: -6px;
  transform: translateX(-50%) rotate(45deg);
  transition: 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}
.wrapper .icon:hover span{
  color: #fff;
}
.wrapper .icon:hover span,
.wrapper .icon:hover .tooltip{
  text-shadow: 0px -1px 0px rgba(0,0,0,0.4);
}
.wrapper .facebook:hover span,
.wrapper .facebook:hover .tooltip,
.wrapper .facebook:hover .tooltip:before{
  background: #3B5999;
}
.wrapper .twitter:hover span,
.wrapper .twitter:hover .tooltip,
.wrapper .twitter:hover .tooltip:before{
  background: #46C1F6;
}
.wrapper .instagram:hover span,
.wrapper .instagram:hover .tooltip,
.wrapper .instagram:hover .tooltip:before{
  background: #e1306c;
}
.wrapper .github:hover span,
.wrapper .github:hover .tooltip,
.wrapper .github:hover .tooltip:before{
  background: #333;
}
.wrapper .youtube:hover span,
.wrapper .youtube:hover .tooltip,
.wrapper .youtube:hover .tooltip:before{
  background: #DE463B;
}
</style>
<div class="top-bar animate-dropdown">
	<div class="container">
		<div class="header-top-inner">
			<div class="cnt-account">
				<ul class="list-unstyled">

<?php if(strlen($_SESSION['login']))
    {   ?>
				<li><a href="#"><i class="icon fa fa-user"></i>Welcome -<?php echo htmlentities($_SESSION['username']);?></a></li>
				<?php } ?>

					<li><a href="my-account.php"><i class="icon fa fa-user"></i>My Account</a></li>
					<li><a href="my-wishlist.php"><i class="icon fa fa-heart"></i>Wishlist</a></li>
					<li><a href="my-cart.php"><i class="icon fa fa-shopping-cart"></i>My Cart</a></li>
					<li><a href="#"><i class="icon fa fa-key"></i>Checkout</a></li>
					<?php if(strlen($_SESSION['login'])==0)
    {   ?>
<li><a href="login.php"><i class="icon fa fa-sign-in"></i>Login</a></li>
<?php }
else{ ?>
	
				<li><a href="logout.php"><i class="icon fa fa-sign-out"></i>Logout</a></li>
				<?php } ?>	
				</ul>
			</div><!-- /.cnt-account -->

<div class="cnt-block">
				<ul class="list-unstyled list-inline">
					<li class="dropdown dropdown-small">
						<a href="track-orders.php" class="dropdown-toggle" ><span class="key">Track Order</b></a>
						
					</li>

				
				</ul>
			</div>
			
			<div class="clearfix"></div>
		</div><!-- /.header-top-inner -->
	</div><!-- /.container -->
</div><!-- /.header-top -->