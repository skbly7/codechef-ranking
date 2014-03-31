<?php
/*
Sample request will be like :
http://localhost/project/this_month.php?month=AUG13&lmonth=JULY13&short=COOK37&lshort=COOK23


Old and very bad way to update submissions.. :P


Created by Shivam Khandelwal dated 3rd Sept. 2013
*/
  $handle = fopen("time.php", "w");
  $content=date("l, F j, Y h:m:s a", strtotime("+0 hours"));
  fwrite($handle,$content,strlen($content)); 
  fclose($handle);
  
include "crawl2.php";    
include "connect.php";
  
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

function recalculate($user,$month,$lmonth,$short,$lshort)
{
  $url="http://www.codechef.com/users/".$user;
  $html = file_get_html($url);

  $title="";
  $res = preg_match("/<title>(.*)<\/title>/siU", $html, $title_matches);
  $title = preg_replace('/\s+/', ' ', $title_matches[1]);
  $title = trim($title);
  $pos = strpos($title, 'User');
  if($pos==9)
  {
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
      $sql="SELECT COUNT(*) as total FROM dynamic WHERE handle='".$user."'";
      $retval=mysql_query($sql);
      $data=mysql_fetch_assoc($retval);
      if($data['total']==0)
      {
          $sql = "INSERT INTO dynamic
           (handle, short, lshort, longg, llong, p1, p2, p3, p4)
           VALUES('".$user."',".$i1.", ".$i2.", ".$i3.", ".$i4.",'".$problems1."', '".$problems2."','".$problems3."','".$problems4."')";
           echo $sql;
          $retval = mysql_query($sql);
          return true;
      }
      else
      {
          
          $sql="UPDATE dynamic
          SET short=".$i1.", lshort=".$i2.", longg=".$i3.", llong=".$i4.", p1='".$problems1."', p2='".$problems2."', p3='".$problems3."', p4='".$problems4."' 
          WHERE handle='".$user."'";
          
          echo $sql;
          $retval = mysql_query($sql);
          return true;
      }

  }
  else
  {
    //header("Location: add.php?error=1");
    return false;
  }
}

$month=$_GET['month'];
$lmonth=$_GET['lmonth'];
$short=$_GET['short'];
$lshort=$_GET['lshort'];
//recalculate($user,$month,$lmonth,$short,$lshort);
$sql = "SELECT handle FROM detail";
$result = mysql_query($sql);
if(empty($_GET['work']))
{
 echo 'You should learn some more hacking, or try reading more piece of codes..!';
  echo "<br>"+realpath('');
}
else
{
    while($row = mysql_fetch_assoc($result))
    {
    if(recalculate($row['handle'],$month,$lmonth,$short,$lshort)==false)
    echo 'error in calculating of '.$row['handle'];
    echo 'calculated of '.$row['handle']."<br><br><br>";
    }
}
?> 