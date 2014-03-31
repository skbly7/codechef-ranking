<?php
/* One of most important file...

Comments have been added to make it more readable... 
Hope you enjoy reading it, if you found any bug please inform me : skbly7@gmail.com

Finally opening it.. :P
*/

//DB Connection
include "connect.php";

//Not useful now
include "files/month.php";

//Defined a function for finding all elements within two text. Returns a array.
//Sorry wasn't knowing about advance crawling at the time of making it.. :)
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

/* Recalculate function start 
Please dont waste time thinking why it is named recalculate, i too dont remember what i was thinking that tym.. :/

Funtion to calculate a Codechef User Submissions is below
It was a early prototype. And now it is not in use anymore.. :)
*/
function recalculate($user,$month,$lmonth,$short,$lshort,$html)
{

// Finding 1 is finding rank for latest Long Solutions
    $finding1=g($html,"".$month."</b>:&nbsp;<span>","</span>");
    if(array_key_exists(0,$finding1))
    {
    $names_of_solved=g($finding1[0],'">','</a>');
    $i1=1;
    $problems1=$names_of_solved[0];
    while(array_key_exists($i1,$names_of_solved))
    {
    $problems1=$problems1.", ".$names_of_solved[$i1];
    $i1++;
    }
    }
    else
    {
    $problems1="Not solved any";
    $i1=0;
    }
  //  echo $problems1." Total : ".$i1;

    $finding2=g($html,"".$lmonth."</b>:&nbsp;<span>","</span>");
    if(array_key_exists(0,$finding2))
    {
    $names_of_solved=g($finding2[0],'">','</a>');
    $i2=1;
    $problems2=$names_of_solved[0];
    while(array_key_exists($i2,$names_of_solved))
    {
    $problems2=$problems2.", ".$names_of_solved[$i2];
    $i2++;
    }
    }
    else
    {
    $problems2="Not solved any";
    $i2=0;
    }
  //  echo $problems2." Total : ".$i2;
    
    $finding3=g($html,"".$short."</b>:&nbsp;<span>","</span>");
    if(array_key_exists(0,$finding3))
    {
    $names_of_solved=g($finding3[0],'">','</a>');
    $i3=1;
    $problems3=$names_of_solved[0];
    while(array_key_exists($i3,$names_of_solved))
    {
    $problems3=$problems3.", ".$names_of_solved[$i3];
    $i3++;
    }
    }
    else
    {
    $problems3="Not solved any";
    $i3=0;
    }
  //  echo $problems3." Total : ".$i3;
    
    $finding4=g($html,"".$lshort."</b>:&nbsp;<span>","</span>");
    if(array_key_exists(0,$finding4))
    {
      $names_of_solved=g($finding4[0],'">','</a>');
      $i4=1;
      $problems4=$names_of_solved[0];
      while(array_key_exists($i4,$names_of_solved))
      {
      $problems4=$problems4.", ".$names_of_solved[$i4];
      $i4++;
      }
    }
    else
    {
    $problems4="Not solved any";
    $i4=0;
    }
  //  echo $problems4." Total : ".$i4;
      $sql="SELECT COUNT(*) as total FROM TABLE_NAME WHERE ************='".$user."'";
      $retval=mysql_query($sql);
      $data=mysql_fetch_assoc($retval);

      $sql = "INSERT INTO dynamic(handle, short, lshort, longg, llong, p1, p2, p3, p4)
           VALUES('".$user."',".$i1.", ".$i2.", ".$i3.", ".$i4.",'".$problems1."', '".$problems2."','".$problems3."','".$problems4."')";
           echo $sql;
          $retval = mysql_query($sql);
          return true;

}
	
/*Recalculate function end */

// You wonder what it is ??
// I just befooled some, by displaying a text field like captcha code in add page, there was never a captcha.. :P 
// You can select it and drag into the text field.. :D

  if(($_GET['res']!=$_GET['show'])&&0)
  {
    header("Location: add.php?error=3");
  }
  else
  {
  
	$value=0;
	//Check for college selection. Each college has a unique ID
	if (isset($_COOKIE["College"]))
	$value=mysql_real_escape_string($_COOKIE["College"]);
    $user=mysql_real_escape_string($_GET['user']);
    $sql='SELECT COUNT(*) as total FROM detail WHERE handle="'.$user.'"';
    $retval=mysql_query($sql)or die("cannot select db");
    $data=mysql_fetch_assoc($retval)or die("cannot select db");
    mysql_error();
    // echo $data['total'];    
	
	// If user was already added a error message would be shown. For this the above work has been done.
    if($data['total']==0)
    {
	
		// HTML DOM PARSER LIBRARY
      include_once "files/crawl2.php";
		// ALL COLLEGE DETAILS (as a array)
      include "files/college.php";
      $url="http://www.codechef.com/users/".$user;
      $html = file_get_html($url);
      
      $title="";
      $res = preg_match("/<title>(.*)<\/title>/siU", $html, $title_matches);
      $title = preg_replace('/\s+/', ' ', $title_matches[1]);
      $title = trim($title);
      $pos = strpos($title, 'User');
	  // Check if a user exist on Codechef or not.. 
	  // Codechef displays "user" in title if url is right else not. Used this check...
      if($pos==9)
      {
		$rank="";
		$reallll=0;
		// Well a lot of work to get correct ranking in all the cases of Codechef... Actually Codechef shows NA, N/A, 0, - , many things for no rank.
		// Removed each bug time to time in this script
		foreach($html->find('hx') as $element)
		{
			$reallll++;
			$rank=$rank."".$element.'<br>';
		}
//		echo $reallll;
		$rank=g($rank,'<hx>','</hx>');
//		print_r($rank)."<br>";
		if($rank[2]=="")
		{
		$rank[2]=$rank[3];
		$rank[3]=$rank[4];
		}
//		print_r($rank);
		if($reallll==2)
		{
		$new_rank=array($rank[0],0,$rank[2],0);
		$rank=$new_rank;
		}
		if($reallll==4&&$rank[3]=="")
		{
		$rank[3]=0;
		}
//		print_r($rank);
//		echo "Ranks are : ".$rank[0]." , ".$rank[1]." , ".$rank[2]." , ".$rank[3].$rank[4].'<br>';

// FINALLY WE ARE NOW HAVING ALL THE RANKING IN A ARRAY $rank....!!
// HUNT FOR CODECHEF USER's NAME
		$name="";

		foreach($html->find('h1') as $element)
		$name=$name."".$element.'<br>';
		$naam=g($name,'<h1>',"'s User");
		if($naam[0]==NULL)
		$naam[0]='Undefined';
		//echo $naam[0].'<br>';

// HUNT FOR COUNTRY OF USER
		$country=g($name,'/64/','.png');
		if($country[0]==NULL)
		$country[0]='NA';
		$country[0]=strtoupper($country[0]);
		foreach($html->find('body') as $element)
		$test_ini=$test_ini."".$element;

// CHECK FOR CODECHEF USER's INSITUTE NAME IN PROFILE in place About Me and Insitution		
		
		$about=g($test_ini,'About Me:','</tr>');
		$institute=g($test_ini,'Institution:','</tr>');
		$to_check="xyz".$institute[0];
		$to_check2="xyz".$about[0];
		$add=0;
		foreach($final[$value] as $fun)
		if(stripos($to_check, $fun)>0)
		$add=1;
		foreach($final[$value] as $fun)
		if(stripos($to_check2, $fun)>0)
		$add=1;
		echo $add;
		if($add==0)
		{
		// INSIDE IT IF THE USER IS NOT OF THE INSITUTION NAME SUPPLIED IN COOKIE
		header("Location: add.php?error=4");
		}
		else
		{
		// FINALLY ADDING THE USER INTO THE DATABASE
		recalculate($user,$month,$lmonth,$short,$lshort,$html);
		$sql = 'INSERT INTO detail (handle, name, country, rank1, rank2, rank3, rank4, college) VALUES("'.$user.'", "'.$naam[0].'", "'.$country[0].'", '.$rank[0].', '.$rank[1].', '.$rank[2].', '.$rank[3].', '.$value.')';
        $retval = mysql_query($sql)or die("cannot select db");
		mysql_error();
		header("Location: add.php?error=9&user=".$user."");
		//echo 'Thank you ';
		}
      }
      else
      {
        header("Location: add.php?error=1");
      }
    }
      else
      {
        header("Location: add.php?error=2");
      }
      mysql_close($conn);
    }
?>					