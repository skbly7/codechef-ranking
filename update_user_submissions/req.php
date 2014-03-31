<?php
ini_set('max_execution_time', 0);
set_time_limit(0);
include "../connect.php";

// HERE COMES THE GREAT FIND_OF FUNCTION
// I LOVED CURL AFTER IMPLEMENTING THIS. ACTUALLY DOM PARSER AND ALL CANT HANDLE BIG DOCUMENTS..!!

function find_of($examid)
{

// create curl resource
        $ch = curl_init();

// set url
curl_setopt($ch, CURLOPT_URL, "http://www.codechef.com/rankings/".$examid);

//return the transfer as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// $output contains the output string
$output = curl_exec($ch);

// close curl resource to free up system resources
curl_close($ch);      
//print_r($output);

$dom = new DOMDocument();
@$dom->loadHTML($output);

$finder = new DomXPath($dom);
$nodes = $finder->query('//*[contains(@class, "primary-col-wrapper")]');
//print_r($nodes);

$tmp_dom = new DOMDocument(); 
foreach ($nodes as $node) 
    {
    $tmp_dom->appendChild($tmp_dom->importNode($node,true));
    }
 $innerHTML="";
 $innerHTML.=trim($tmp_dom->saveHTML()); 

  $buffdom = new DOMDocument();
  @$buffdom->loadHTML($innerHTML);

    # Iterate over all the <a> tags
$result=mysql_query("DELETE FROM `update`");
$sql="INSERT INTO `update`(`time`) VALUES (ADDTIME(CURRENT_TIMESTAMP,'05:30'))";
echo $sql;
$result=mysql_query($sql);

$result=mysql_query("SHOW TABLES LIKE '".$examid."ques'");

	if(mysql_num_rows($result) > 0)
	echo "Table Exists..!!<br/>";
	else
	{
$sql="CREATE TABLE ".$examid."ques ( id int, name varchar(60) PRIMARY KEY)";
		mysql_query($sql);
		//echo $sql."<br>";
}
$result=mysql_query("DELETE FROM `".$examid."ques`");
			$names=$buffdom->getElementsByTagName('th');
			$k=($names->length)-5;
			for($i=2;$i<($names->length)-3;$i++) {
				$sql="INSERT INTO ".$examid."ques VALUES (".($i-1).",'".$names->item($i)->nodeValue."')";
				mysql_query($sql);
				echo $sql."<br>";
			}

$result=mysql_query("SHOW TABLES LIKE '".$examid."'");
	if(mysql_num_rows($result) > 0)
	echo "Table Exists..!!<br/>";
	else
	{
			$sql="CREATE TABLE ".$examid."(handle varchar(20) PRIMARY KEY,rank int";
			for($i=1;$i<12;$i++) {
				$sql=$sql.",ques".($i)." int";
			}
			$sql=$sql.",score FLOAT(6,4))";
		mysql_query($sql);
					echo $sql;
	}

$detail=$buffdom->getElementsByTagName('td');
$result=mysql_query("DELETE FROM `update`");
$sql="INSERT INTO `update`(`time`) VALUES (ADDTIME(CURRENT_TIMESTAMP,'05:30'))";
$result=mysql_query($sql);
	for($i=0;$i<($detail->length);$i=$i+($names->length)) {
		$sql="INSERT INTO ".$examid." VALUES ('".$detail->item($i+1)->nodeValue."','".$detail->item($i)->nodeValue."'";
$sql2="UPDATE ".$examid." SET rank='".$detail->item($i)->nodeValue."'";
		for($j=0;$j<$k;$j++) {
			if(strcmp('-',($detail->item($i+2+$j)->nodeValue)))
			{
			$sql2=$sql2.",ques".($j+1)."=1";			
			$sql=$sql.",1";
			}
			else
			{
			$sql2=$sql2.",ques".($j+1)."=0";
			$sql=$sql.",0";
			}
			//$sql=$sql.",'".$detail->item($i+2+$j)->nodeValue."'";
		}
		$j++;
		for(;$j<12;$j++)
		{
		$sql2=$sql2.",ques".($j)."=0";
					$sql=$sql.",0";
	}
	$sql2=$sql2.",score=".$detail->item($i+$k+4)->nodeValue;
	$sql2=$sql2." WHERE handle='".$detail->item($i+1)->nodeValue."'";
	$sql=$sql.",".$detail->item($i+$k+4)->nodeValue.")";		
	mysql_query($sql);
	mysql_query($sql2);
	echo $sql."<br>".$sql2."<br><br>";
    }
$result=mysql_query("DELETE FROM `update`");
$sql="INSERT INTO `update`(`time`) VALUES (ADDTIME(CURRENT_TIMESTAMP,'05:30'))";
echo $sql;
$result=mysql_query($sql);
}
?>
