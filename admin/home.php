<?php
error_reporting(1);
session_start();
$name=$_SESSION['eid'];
if($_REQUEST['log']=='out')
{
session_destroy();
header("location:index.php");
}
else if($name=="")
{
header("location:index.php");
}
?>
<head>
<title></title>
    <link rel="stylesheet" type="text/css" href="admin.css">
    
</head>
<body>
    <div >
    <nav>
    
				<ul>
		            <li><a href="?con=hm">Home</a></li>
		            <li><a href="?log=out">Log Out</a></li>
	            </ul>
      </nav>
    </div>
    
    <div style="width:20%;height:100%;float:left;">
	<div align="center">
        <ul>
		            <li><a href="?con=add">Add Item</a></li>
		            <li><a href="?con=view">View All</a></li>
					<li><a href="?con=ord" >Orders(
				 <?php
				 include("config.php");
					$count=0;
					$sel=mysql_query("select * from orders");
					$count=mysql_num_rows($sel);
					echo $count;
				 ?>)
					</a></li>
					<li><a href="?con=fdbk">Feedback(
			 <?php
			 include("config.php");
				$count=0;
				$sel=mysql_query("select * from fdbk");
				$count=mysql_num_rows($sel);
				echo $count;
			 ?>)
					
					</a></li>
					
	            </ul>
		</div>
    </div>
	<div style="width:80%;height:100%;float:right;">
	
<?php
switch($_REQUEST['con'])
{
case 'add':include("additem.php");
        break;

case 'view':include("view.php");
        break;
		case 'ord':include("orders.php");
        break;
		case 'fdbk':include("fdbk.php");
        break;
case 'hm':include("hm.php");
        break;
		}
		if($_REQUEST['view'])
		{
		include("viewtable.php");
		}
	
		?>
	
</div>
</div>

    
</body>

