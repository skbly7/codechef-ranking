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

			<h2>Ranking According to Long Contest</h2><br />
			  <h4><a href="add.php">(To add new student codechef username go to Add menu)</a></h4><br />
			   <?php
				if($value==0)
				{
				include "files/select-on-page.php";
				}
				else
				{
				 //include "config.php";
			  $sno=1;
			  $result = mysql_query("SELECT * FROM detail WHERE rank1>0 AND college=".$value." ORDER BY rank1");
			  echo "<table>
			  <tr>
			  <th>Sno.</th>
			  <th>Username</th>
			  <th>Name</th>
			  <th>Country</th>
			  <th>Global Rank (Long)</th>
			  <th>Country Rank (Long)</th>
			  <th>Change Global (Long)</th>
			  </tr>";
			$change=0;
				 $url="http://www.codechef.com/users/";
			  while($row = mysql_fetch_array($result))
				{
				if($sno<=15)
				{$star=0;
				if($row['old_rank1']==0)
{
$star=1;
				$change=0;
}
				else
				$change= $row['old_rank1']-$row['rank1'] ;
				echo "<tr>";
				echo "<td>" . $sno++. "</td>";
				  echo "<td><a href='".$url . $row['handle'] ."' target=_blank>".$row['handle'] . "</a></td>";     
				echo "<td>" . $row['name'] . "</td>";
				echo "<td>" . $row['country'] . "</td>";
				echo "<td>" . $row['rank1'] . "</td>";
				echo "<td>" . $row['rank2'] . "</td>";
if($star==1)
            echo "<td>" . $change . "</td><td><img src='img/star.png' style='width:20px;height:20px;'/></td>";
        else
        if($change>0)
            echo "<td>" . $change . "</td><td><img src='img/up.png' style='width:20px;height:20px;'/></td>";
          else
             echo "<td>" . $change . "</td><td><img src='img/down.png' style='width:20px;height:20px;' /></td>"; 
        echo "</tr>";
				}
				}
			  echo "</table>";
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