<?php
include_once "../connect.php";
$show=1;
if(isset($_GET['c']))
{
$show=0;
}

if($show)
{
echo '
			<p>Welcome to this new section of Codechef Ranking.<br/>Now you can view scorecard of your college on website too. To start just select a college from dropdown below :<br/></p>
			<p><br/>
			<form action="'.$_SERVER['SCRIPT_NAME'].'" method="GET" style="margin:10px" id="c">
			<select name="c" value="options" autofocus="autofocus" autocorrect="off" autocomplete="off">
			<option value="" selected="selected">Select Contest</option>';

mysql_select_db('information_schema');
$q='SELECT TABLE_NAME FROM TABLES WHERE CREATE_OPTIONS="" AND TABLE_NAME NOT LIKE "%ques" AND TABLE_NAME NOT IN ("detail", "dynamic", "gol", "sep13", "update") ORDER BY CREATE_TIME desc';
$result=mysql_query($q);
 while($row = mysql_fetch_array($result))
				{
echo '<option value="'.$row['TABLE_NAME'].'" >'.$row['TABLE_NAME'].'</option> ';
				}



echo '
			</SELECT>
			<INPUT type="submit" value="Submit">
			</form>
			</p>
		';

}
?>