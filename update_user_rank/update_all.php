<?php
/*
Now I use CURL..
*/
include "../connect.php";
	function g($string,$start,$end){
     preg_match_all('/' . preg_quote($start, '/') . '(.*?)'. preg_quote($end, '/').'/i', $string, $m); 
     $out = array(); 

     foreach($m[1] as $key => $value){ 
       $type = explode('::',$value); 
       if(sizeof($type)>1){ 
        if(!is_array($out[$type[0]])) 
         $out[$type[0]] = array(); 
        $out[$type[0]][] = $type[1]; 
       } else { 
         if($value=='NA')
         {
         $value=0;
          $out[] = $value;
          $out[] = $value; 
         }
         else
         {
          $out[] = $value; 
        }
       } 
     } 
    return $out;
    }

	function call($handle)
	{
		// create curl resource
		$ch = curl_init();

		// set url
		$url="http://www.codechef.com/users/".$handle;
		curl_setopt($ch, CURLOPT_URL, $url);

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
		$nodes = $finder->query('//*[contains(@class, "rating-table")]');

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
		$rank="";
		$reallll=0;
		$detail=$buffdom->getElementsByTagName('hx');
		foreach($detail as $i)
		{
		$reallll++;
		$rank=$rank."hx".$i->nodeValue."/hx";
		}
		echo $rank;
		$rank=g($rank,'hx','/hx');
		for($i=0;$i<5;$i++)
		if(!isset($rank[$i]))
		$rank[$i]="";
		
		if($rank[2]=="")
		{
			$rank[2]=$rank[3];
			$rank[3]=$rank[4];
		}
		if($reallll==2)
		{
		$new_rank=array($rank[0],0,$rank[2],0);
		$rank=$new_rank;
		}
		if($reallll==4&&$rank[3]=="")
		{
		$rank[3]=0;
		}
		if($rank[3]=="")
		$rank[3]=0;
//		echo $handle." Ranks are : ".$rank[0]." , ".$rank[1]." , ".$rank[2]." , ".$rank[3].'<br>';
//$sql = 'UPDATE detail SET rank1='.$rank[0].', rank2='.$rank[1].' WHERE handle="'.$handle.'"';
$sql = 'UPDATE detail SET old_rank1=rank1,rank1='.$rank[0].' WHERE (rank1>'.$rank[0].' OR rank1<'.$rank[0].' ) AND handle="'.$handle.'"';
$retval = mysql_query($sql)or die("$output");

$sql = 'UPDATE detail SET old_rank2=rank2,rank2='.$rank[1].' WHERE (rank2>'.$rank[1].' OR rank2<'.$rank[1].' ) AND handle="'.$handle.'"';
$retval = mysql_query($sql)or die("$output");

$sql = 'UPDATE detail SET old_rank3=rank3,rank3='.$rank[2].' WHERE (rank3>'.$rank[2].' OR rank3<'.$rank[2].' ) AND handle="'.$handle.'"';
$retval = mysql_query($sql)or die("$output");

$sql = 'UPDATE detail SET old_rank4=rank4,rank4='.$rank[3].' WHERE (rank4>'.$rank[3].' OR rank4<'.$rank[3].' ) AND handle="'.$handle.'"';
$retval = mysql_query($sql)or die("$output");

echo "<br>";
//		$retval = mysql_query($sql)or die("$output");
	
	}

if(!isset($_GET['start']))
{
	$sql='SELECT handle FROM detail';
}
else
{
	$sql='SELECT handle FROM detail WHERE handle LIKE "'.$_GET['start'].'%"';
}
	$count=0;
    $result=mysql_query($sql)or die("cannot select db");
    while($row = mysql_fetch_assoc($result))
	{
	//	echo $row['handle']."<br/>";
		call($row['handle']);
		$count++;
		/*
		Why so many sleep commands ??
		
		Actually Codechef dont allow so many request within few seconds,
		so a sleep/delay from my side.. :P
		
		*/
	//	sleep(0.3);
		if(1)
		{
			$count=0;
			sleep(1);
		}
	}
?>			