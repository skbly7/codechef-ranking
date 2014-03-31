<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>

<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1"/>
<meta name="description" content="description"/>
<meta name="keywords" content="keywords"/> 
<meta name="author" content="author"/> 
<link rel="stylesheet" type="text/css" href="default.css" media="screen"/>
<title>Codechef Ranking System</title>

</head>

<body>
<?php include "files/college.php"; ?>
<div class="top">
				
	<div class="header">

		<div class="left">
			Codechef Rankings
		</div>
		
		<div class="right">
<?php include "files/top-right.php"; ?>
		</div>

	</div>	

</div>

<div class="container">	
<?php include "files/nav.php";?>


	<div class="main">		
		
		<div class="content">
    <h1>Add New Username</h1><br />
    <img src="img/add_user.jpg"><br/>
	<?php 
$value=$_COOKIE['College'];
	if($value==0)
	{
	include "files/select-on-page.php";

	}
	else
	{
	if(isset($_GET['error']))
    $error=$_GET['error'];
	else
	$error=0;
      $i=rand(100000,999999);
		if($error==2){ 
    ?><br>
    <div style="background-color:rgba(247, 6, 6, 0.5);border-radius:30px;border:4px white solid;margin-bottom:30px;color:white;font-size:25px;padding:2px;"><img style="margin-top:1px;" src="img/error.png"/> User already exist in database.</div>
    <?php } else if($error==1){?>
    <div style="background-color:rgba(247, 6, 6, 0.5);border-radius:30px;border:4px white solid;margin-bottom:30px;color:white;font-size:25px;padding:2px;"><img style="margin-top:1px;" src="img/error.png"/> Please check the username and try again.</div>
     <?php } else if($error==3){?>
    <div style="background-color:rgba(247, 6, 6, 0.5);border-radius:30px;border:4px white solid;margin-bottom:30px;color:white;font-size:25px;padding:2px;"><img style="margin-top:1px;" src="img/error.png"/> Wrong Captcha Code.</div>
    <?php } else if($error==4) {?>
    <div style="background-color:rgba(247, 6, 6, 0.5);border-radius:30px;border:4px white solid;margin-bottom:30px;color:white;font-size:25px;padding:2px;"><img style="margin-top:1px;" src="img/error.png"/> It was almost added..! <a href="add.php?error=4&read=1">Read more</a></div>
    <?php
    $sno=1;
    if($_GET['read']==1)
    {
    echo "<h4>Any of the following word should appear in your Codechef's profile Institute or About Me field :<br/>";
    foreach($final[$value] as $element)
    echo $sno++.". ".$element."<br/>";
    echo "<br/>";
    echo "If you feel that we have not added any string which should be there, please let us know. Fill the 'Report a bug' form on right side.";
    }
    ?>
    </h4>
    <?php } else if($error==9) {?>
    <div style="background-color:rgba(6, 73, 247, 0.5);border-radius:30px;border:4px white solid;margin-bottom:30px;color:white;font-size:25px;padding:2px;"><img style="margin-top:1px;" src="img/success.png"/> User "<?php echo $_GET['user']; ?>" added successfully.</div>
    <?php }?>
    <form name="input" action="addr.php" method="get">
      <h2>Username:</h2> <input type="text" name="user"><br/>
	  <!--- Hahaha you would die laughing if you see this captcha working... :D   -->
	<h2>Security Check:</h2><br/><span style="font-size:30px;background:white;color:black;border:2px black solid;cursor:default;"><?php echo $i; ?></span><p></p>
      <input type="text" name="res"><input type="text" name="show" value="<?php echo $i;?>" hidden>
      <br/>
      
    <input type="submit" value="Submit">
    </form>
    <?php }?>
		</div>

		<div class="sidenav">
<?php include "files/sidenav.php";?>
		</div>

		<div class="clearer"><span></span></div>

	</div>

	<div class="footer">&copy; 2013 <a href="http://www.shivamkhandelwal.in/" target="_blank">Shivam Khandelwal</a> | Designed and Developed by Shivam Khandelwal
	</div>

</div>

</body>

</html>		