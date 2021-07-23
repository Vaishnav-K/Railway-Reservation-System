<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="css/s1.css" type="text/css">
<style type="text/css">
    
	li {
		font-family: sans-serif;
		font-size:18px;
	}
	.container
{
	width: 100%;

}
.wrapper
{
	width: 1050px;
	margin: auto;
}
.dark
{
	background-color: #c0c3cc;
	color: black;
}

*{
	margin:0px;
	}
ul li
{
	
	width: 120px;
	display: inline-block;
	height: 35px;
	line-height: 35px;
	text-align: center;
}
ul li a
{
	color: black;
	text-decoration: none;
	display: block;
}

ul li a:hover
{
	background-color: #647dbd;
	color:white;
}

ul li{
	cursor: pointer;
	margin-left: 65px;
}
</style>
</head>
<body link="black" alink="black" vlink="black">

     <div class="container dark">
        <div class="wrapper">
          <div class="Menu">
            <ul id="navmenu">
            <li><A HREF="select1.php">Home</A></li>
            <li><A HREF="pnrstatus.php">Trains</A></li>
            <li><a href="booktkt.php">Meals</a></li> 
            <li><a href="bookedTicketHistory.php">Tickets</a></li>			
            <li><a href="index.php">Logout</a></li>
            </ul>
          </div>
        </div>
      </div>  
</body>
</html>