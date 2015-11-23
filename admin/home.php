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
<title></title>
    <style type="text/css">
			nav ul ul {
	display: none;
}

	nav ul li:hover > ul {
		display: block;
	}

			nav ul {
	background: #efefef; 
	background: linear-gradient(top, #efefef 0%, #bbbbbb 100%);  
	background: -moz-linear-gradient(top, #efefef 0%, #bbbbbb 100%); 
	background: -webkit-linear-gradient(top, #efefef 0%,#bbbbbb 100%); 
	box-shadow: 0px 0px 9px rgba(0,0,0,0.15);
	padding: 0 20px;
	border-radius: 10px;  
	list-style: none;
	position: relative;
	display: inline-table;
}
	nav ul:after {
		content: ""; clear: both; display: block;
	}
			
			nav ul li {
	float: left;
}
	nav ul li:hover {
		background: #4b545f;
		background: linear-gradient(top, #4f5964 0%, #5f6975 40%);
		background: -moz-linear-gradient(top, #4f5964 0%, #5f6975 40%);
		background: -webkit-linear-gradient(top, #4f5964 0%,#5f6975 40%);
	}
		nav ul li:hover a {
			color: #fff;
		}
	
	nav ul li a {
		display: block; padding: 25px 40px;
		color: #757575; text-decoration: none;
	}
			
			nav ul ul {
				background: #5f6975; border-radius: 0px; padding: 0;
				position: absolute;
				top: 100%;
			}
			nav ul ul li {
				float: none; 
				border-top: 2px solid #6b727c;
				border-bottom: 1px solid #575f6a;
				position: relative;
			}
			nav ul ul li a {
				padding: 15px 40px;
				color: blue;
			}	
			nav ul ul ul {
				position: absolute; left: 100%; top:0;
			}
				nav ul ul li a:hover {
				background: #4b545f;
			}
			nav ul ul ul {
	position: absolute; left: 100%; top:0;
}
 ul li:hover {
		background: #4b545f;
		background: linear-gradient(top, #4f5964 0%, #5f6975 40%);
		background: -moz-linear-gradient(top, #4f5964 0%, #5f6975 40%);
		background: -webkit-linear-gradient(top, #4f5964 0%,#5f6975 40%);
	}
        ul {
            text-align:center;
            background: #efefef; 
	        background: linear-gradient(top, #efefef 0%, #bbbbbb 50%);  
	        background: -moz-linear-gradient(top, #efefef 0%, #bbbbbb 100%); 
	        background: -webkit-linear-gradient(top, #efefef 0%,#bbbbbb 100%); 
	        box-shadow: 0px 0px 9px rgba(0,0,0,0.15);
	        padding: 0 20px;
	        border-radius: 10px;  
	        list-style: none;
	

        }
            ul li {
            list-style:none;
            }
        
          ul li:hover a {
			    color: #fff;
		}
        ul li a {
		        display: block; padding: 25px 40px;
		        color: black; text-decoration: none;
	}
			
		</style>
    
</head>
<body>
    <div style="background-color:black;">
    <nav>
    
				<ul>
		            <li><a href="?con=hm">Home</a></li>
		            <li><a href="?log=out">Log Out</a></li>
	            </ul>
      </nav>
    </div>
    
    <div style="width:20%;height:100%;float:left;background-color:#e5e5ff;">
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
	<div style="width:80%;height:100%;float:right; background-color:#e5e5ff;">
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

