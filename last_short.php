<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<!--
old way to display..

check sshort.php or llong.php for newer code..!

-->
<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1"/>
<meta name="description" content="description"/>
<meta name="keywords" content="keywords"/> 
<meta name="author" content="author"/> 
<link rel="stylesheet" type="text/css" href="default.css" media="screen"/>
<title>Codechef Ranking System</title>
</head>

<body>
<?php include_once "connect.php"; ?>
<div class="top">
				
	<div class="header">

		<div class="left">
			Codechef Rankings
		</div>
		
		<div class="right">
		<?php	include "files/top-right.php"; ?>

		</div>

	</div>	

</div>

<div class="container">	
<?php include "files/nav.php";?>


	<div class="main">		
		
		<div class="content">

			<h2>Submission of last month's Short Contest</h2><br />
			  <h4><a href="add.php">(To add new student codechef username go to Add menu)</a></h4><br />
			   <?php
				if($value==0)
				{
				include "files/select-on-page.php";
				}
				else
				{
	        $sno=1;
      $result = mysql_query("SELECT dynamic.handle,detail.name,dynamic.longg,dynamic.p3 FROM dynamic,detail WHERE dynamic.longg>0 AND dynamic.handle=detail.handle AND detail.college=".$value." ORDER BY dynamic.longg desc");
      echo "<table>
      <tr>
      <th>Sno.</th>
      <th>Username</th>
	  <th>Name</th>
      <th>Problems Solved</th>
      <th>Total</th>
      </tr>";
      while($row = mysql_fetch_array($result))
        {
        $url="http://www.codechef.com/users/";
        echo "<tr>";
        echo "<td>" . $sno++. "</td>";
          echo "<td><a href='".$url . $row['handle'] ."' target=_blank>".$row['handle'] . "</a></td>";       
        echo "<td>".$row['name']."</td>";
		echo "<td>" . $row['longg'] . "</td>";
        echo "<td>" . $row['p3'] . "</td>";
        echo "</tr>";
        }
      echo "</table>";
    echo "<h2>Other members (Inactive in this contest)</h2><br />";
      $sno=1;
      $result = mysql_query("SELECT dynamic.handle FROM dynamic,detail WHERE dynamic.longg=0 AND dynamic.handle=detail.handle AND detail.college=".$value." ORDER BY dynamic.handle");
      while($row = mysql_fetch_array($result))
        {
        echo $sno++. ". <a style='text-decoration:none;' href='".$url . $row['handle'] ."' target=_blank>".$row['handle']."</a><br>";
        }
			  }
			 ?>
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