
<html><head>
<?php
error_reporting(1);
?>
<title>Style Gartel</title>

<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">

<link rel="stylesheet" type="text/css" href="default.css" title="default">

</head>


<body>
<div id="WholePage">
<div id="Inner">
<div id="Container" style="border:groove;border-color:#00CCFF">
<div id="Head">
<div id="Head_left">
<div id="Leaf_top"></div>
<div id="Leaf_bottom"> <a class="registration" href="index.php?con=11">REGISTRATION</a> <a class="log-in" href="index.php?con=12">LOG IN</a> </div>
</div>
<div id="Head_right">
<div id="Logo">
<div id="Name"></div>
</div>
<div id="Top_menu"> <a class="orders" href="index.php?con=3"><span>GALLERY</span></a>
<a class="contact" href="index.php?con=1"><span>CONTACT</span></a>
<a class="help" href="index.php?con=2"><span>ABOUT US</span></a>
<a class="home" href="?page=home"><span>HOME</span></a>
</div>
</div>
</div>
<div id="CentralPart">
<div id="LeftPart">
<div id="Menu">
<div id="Menu_header">

<div class="menu_header_left"> <span class="menu_text">MEN</span>
</div>
<div class="menu_header_right"> </div>
</div>
<div id="Menu_content"> <a class="menu_item" href="index.php?catg=1 & subcatg=Casual Shirts"><span>Casual Shirts</span></a><br>
<a class="menu_item" href="index.php?catg=1 & subcatg=Jeans"><span>Jeans</span></a><br>
<a class="menu_item" href="index.php?catg=1 & subcatg=T-Shirts"><span>T-shirts
</span></a><br>
<a class="menu_item" href="index.php?catg=1 & subcatg=Footwear"><span>Footwear</span></a><br>
<a class="menu_item" href="index.php?catg=1 & subcatg=Shorts"><span>Shorts</span></a><br>
<a class="menu_item" href="index.php?catg=1 & subcatg=watches"><span>Watches
</span></a><br>

</div>

<div class="menu_header_left"> <span class="menu_text">WOMEN</span>
</div>
<div class="menu_header_right"> </div>
<div id="Menu_content"> <a class="menu_item" href="index.php?catg=2 & subcatg=dresses"><span>Dresses</span></a><br>

<a class="menu_item" href="index.php?catg=2 & subcatg=Kurtas"><span>Kurtas</span></a><br>
<a class="menu_item" href="index.php?catg=2 & subcatg=Sandals"><span>Sandals</span></a><br>
<a class="menu_item" href="index.php?catg=2 & subcatg=Office Wear"><span>Office Wear</span></a><br>
<a class="menu_item" href="index.php?catg=2 & subcatg=Artificial Jewellery"><span>Jewellery</span></a><br>
</div>

<div class="menu_header_left"> <span class="menu_text">KIDS</span>
</div>
<div class="menu_header_right"> </div>
<div id="Menu_content"> <a class="menu_item" href="index.php?catg=3 & subcatg=Baby Apparel"><span>Baby Apparel</span></a><br>
<a class="menu_item" href="index.php?catg=3 & subcatg=Girls Apparel"><span>Girls Apparel</span></a><br>
<a class="menu_item" href="index.php?catg=3 & subcatg=Boys Apparel"><span>Boys Apparel</span></a><br>
<a class="menu_item" href="index.php?catg=3 & subcatg=Kids Toys"><span>Kids Toys</span></a><br>

</div>
</div>
</div>

<div id="RightPart">
<?php
  if($_REQUEST['se'])
	    {
		include("search.php");
		}
if($_REQUEST['con']==1)
{
include("contact.php");
}
if($_REQUEST['con']==2)
{
include("about.php");
}
if($_REQUEST['con']==3)
{
include("gallery.php");
}
if($_REQUEST['con']==11)
 {
	include("register.php");
	 }
	if($_REQUEST['con']==12)
 {
	include("login.php");
	 }
	
		if($_REQUEST['con']==13)
 {
	include("welcome.php");
	 }
		if($_REQUEST['con']==14)
 {
	include("viewitem.php");
	 }

if(!($_REQUEST['catg'])and !($_REQUEST['con'])and !($_REQUEST['se']))
{
include("home.php");
}

if($_REQUEST['catg']==1)
{
if($_REQUEST['subcatg']=='Casual Shirts')
{
include("casual.php");
}
}
if($_REQUEST['catg']==1)
{
if($_REQUEST['subcatg']=='Jeans')
{
include("jeans.php");
}
}
if($_REQUEST['catg']==1)
{
if($_REQUEST['subcatg']=='T-Shirts')
{
include("tshirt.php");
}
}
if($_REQUEST['catg']==1)
{
if($_REQUEST['subcatg']=='Footwear')
{
include("shoe.php");
}
}
if($_REQUEST['catg']==1)
{
if($_REQUEST['subcatg']=='Shorts')
{
include("shorts.php");
}
}
if($_REQUEST['catg']==1)
{
if($_REQUEST['subcatg']=='watches')
{
include("watch.php");
}
}
if($_REQUEST['catg']==2)
{
if($_REQUEST['subcatg']=='dresses')
{
include("dress.php");
}
}


if($_REQUEST['catg']==2)
{
if($_REQUEST['subcatg']=='Sandals')
{
include("sandals.php");
}
}
if($_REQUEST['catg']==2)
{
if($_REQUEST['subcatg']=='Kurtas')
{
include("kurtas.php");
}
}
if($_REQUEST['catg']==2)
{
if($_REQUEST['subcatg']=='Office Wear')
{
include("office.php");
}
}
if($_REQUEST['catg']==2)
{
if($_REQUEST['subcatg']=='Artificial Jewellery')
{
include("jewel.php");
}
}
if($_REQUEST['catg']==3)
{
if($_REQUEST['subcatg']=='Baby Apparel')
{
include("baby.php");
}
}
if($_REQUEST['catg']==3)
{
if($_REQUEST['subcatg']=='Girls Apparel')
{
include("girls.php");
}
}
if($_REQUEST['catg']==3)
{
if($_REQUEST['subcatg']=='Boys Apparel')
{
include("boy.php");
}
}
if($_REQUEST['catg']==3)
{
if($_REQUEST['subcatg']=='Kids Toys')
{
include("toy.php");
}
}
?>

</div>
    

<div class="cleaner"></div>
</div>
<div id="Bottom">
<p class="down"><center><b>&copy; University of Kelaniya - Statistics and Computer Science Department</b></center></p>

</div>
</div>
</div>
</div>
</div>

</body></html>