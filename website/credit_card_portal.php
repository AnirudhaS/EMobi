<!DOCTYPE html>
<html>
<head>
<title>Purchase</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<link rel='stylesheet' type='text/css' href='http://cdn1.editmysite.com/editor/libraries/fancybox/fancybox.css?1349390647'></script>
<link rel='stylesheet' href='http://cdn1.editmysite.com/editor/images/common/common-v2.css?buildTime=1349390647' type='text/css' />
<link rel='stylesheet' type='text/css' href='files/main_style.css?1349454442' title='wsite-theme-css' />
<link href='http://fonts.googleapis.com/css?family=Actor' rel='stylesheet' type='text/css' />
<style type='text/css'>
#wsite-content div.paragraph, #wsite-content p, #wsite-content .product-block .product-title, #wsite-content .product-description, .blog-sidebar div.paragraph, .blog-sidebar p, .wsite-form-field label, .wsite-form-field label {}
#wsite-content h2, #wsite-content .product-long .product-title, #wsite-content .product-large .product-title, #wsite-content .product-small .product-title, .blog-sidebar h2 {}
#wsite-title{}
</style>

<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'></script>
<script type='text/javascript' src='http://cdn1.editmysite.com/editor/libraries/jquery_effects.js?1349390647'></script>
<script type='text/javascript' src='http://cdn1.editmysite.com/editor/libraries/fancybox/fancybox.min.js?1349390647'></script>
<script type='text/javascript' src='http://cdn1.editmysite.com/editor/images/common/utilities-jq.js?1349390647'></script>
<script type='text/javascript' src='http://cdn1.editmysite.com/editor/libraries/flyout_menus_jq.js?1349390647'></script>

</head>
<body class='wsite-theme-light no-header-page wsite-page-browse'>
<div id="header-wrap">
	<div id="page">
		<div id="header-container">
			<table id="header">
				<tr>
					<td id="logo"><span class='wsite-logo'><a href=''><span id="wsite-title">EMobi</span></a></span></td>
					<td id="header-right">
						<table>
							<tr>
								<td class="phone-number"></td>
								<td class="social"></td>
							</tr>
						</table>
						<div class="search"></div>
					</td>
				</tr>
			</table>
			<div id="topnav">
				<ul><li id='pg400466696106696683'><a href='home.html'>Home</a></li><li id='pg709337864551970741'><a href='login-page.html'>Login Page</a></li><li id='pg288094095702542280'><a href='register-here.html'>Register Here</a></li><li id='active'><a href='browse.html'>Browse</a></li><li id='pg817468303534948898'><a href='administrator-login.html'>Administrator Login</a></li><li id='pg785866385556613261'><a href='contact-us.html'>Contact Us</a></li></ul>
				<div style="clear:both"></div>
			</div>
		</div>
	</div>
</div>


<div id="banner-wrap">
	<div id="container">
		<div id="banner-bot">
			<div id="banner-top">
				<div id="banner-mid">
					<div id="banner">
						<div class="wsite-header"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="main-wrap">
	<div id="page">
		<div id="main">
			<div id="content">
			
<div id='wsite-content' class='wsite-not-footer'>

<font color="red"><h1>
<center> CREDIT CARD INFORMATION  </center>
<form action=purchase.php method="post">
<?php printf ("<input type=\"hidden\" value=\"%s\" name=\"phone\" />", $_POST["phone"]); ?>
Card Number : <input type="text" name="cc_no"><br/>
Name : <input type="text" name="name"><br/>
Expiry Date : <input type="text" name="date"><br/>
Code : <input type="password" name="code"><br/>
Password : <input type="password" name="pass"><br/>
<input type="submit" value="Submit">
</form>

	</h1>
</center>
</div>
</div>
		</div>
	</div>
</div>


</body>
</html>