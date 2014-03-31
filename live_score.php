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
<?php
if(!isset($_GET['c']))
{
echo '			<h2>Scorecard of your college</h2><br />';
}
else
{
$contest=$_GET['c'];
$contest=preg_replace('/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s', '', $contest);
echo '			<h2>Live score ranking of '.$contest.'</h2><br />			  <h4>(<a href="live_score.php">Reset</a> | <a href="live_score.php?force=1&c='.$contest.'">View Global Score</a>)</h4><br />';
}
?>

			   <?php
				if($value==0)
				{
				include "files/select-on-page.php";
				}
				else if(!isset($_GET['c']))
				{
				include "files/select_contest.php";
				}
				else
				{
				 //include "config.php";
			  $sno=1;
$college=preg_replace('/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s', '', $_COOKIE['College']);
$q= 'SELECT detail.name,detail.rank1,detail.rank3,detail.handle,detail.country,'.$contest.'.score FROM detail,'.$contest.' WHERE detail.college='.$college.' AND detail.handle=SUBSTR('.$contest.'.handle,6) ORDER BY '.$contest.'.score desc';
if(isset($_GET['force']))
{
$q= 'SELECT detail.name,detail.rank1,detail.rank3,detail.handle,detail.country,'.$contest.'.score FROM detail,'.$contest.' WHERE detail.handle=SUBSTR('.$contest.'.handle,6) ORDER BY '.$contest.'.score desc';

echo 'Only users registered with okrdx are shown below.';
}
			  $result = mysql_query($q);
			  echo "<table>
			  <tr>";


if(!isset($_GET['force']))
{
			  echo "<th>College Rank</th>";
}
			  echo "<th>Overall Rank</th>
			  <th>Username</th>
			  <th>Name</th>
			  <th>Country</th>
			  <th>Score</th>

			  </tr>";
			$change=0;
				 $url="http://www.codechef.com/users/";

			  while($row = mysql_fetch_array($result))
				{
				echo "<tr>";
if(!isset($_GET['force']))
{
$q= 'SELECT count(*)+1 FROM detail,'.$contest.' WHERE detail.handle=SUBSTR('.$contest.'.handle,6) AND  detail.college='.$college.' AND  score>'.$row['score'];
$result2=mysql_query($q);
$count = mysql_fetch_array($result2);

				echo "<td>" . $count[0]. "</td>";
}
$query = 'select count(*)+1 from '.$contest.' where score>'.$row['score'];
$result2=mysql_query($query);
$count = mysql_fetch_array($result2);
				echo "<td>" . $count[0] . "</td>";
				  echo "<td><a href='".$url . $row['detail.handle'] ."' target=_blank>".$row['handle'] . "</a></td>";     
				echo "<td>" . $row['name'] . "</td>";
				echo "<td>" . $row['country'] . "</td>";
				echo "<td>" . $row['score'] . "</td>";

				echo "</tr>";
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