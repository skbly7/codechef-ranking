<?php
/* Gets user's name, country etc updated */


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


//////////////	
  if($_GET['res']!=$_GET['show'])
  {
    header("Location: update.php?error=3");
  }
  else
  {
	$value=0;
    $user=mysql_real_escape_string($_GET['user']);
    $sql='SELECT college as total FROM detail WHERE handle="'.$user.'"';
    $retval=mysql_query($sql)or die("cannot select db");
    $data=mysql_fetch_array($retval)or die("cannot select db");
    mysql_error();

    $value=$data['total']; 
    if($data['total']>0)
    {
      include_once "files/crawl2.php";
      include "files/college.php";
      $url="http://www.codechef.com/users/".$user;
      $html = file_get_html($url);
      setcookie("College", $value, time()+3600);
      $title="";
      $res = preg_match("/<title>(.*)<\/title>/siU", $html, $title_matches);
      $title = preg_replace('/\s+/', ' ', $title_matches[1]);
      $title = trim($title);
      $pos = strpos($title, 'User');
      if($pos==9)
      {
        $name="";        
        foreach($html->find('h1') as $element)
                $name=$name."".$element.'<br>';
        $naam=g($name,'<h1>',"'s User");
        if($naam[0]==NULL)
          $naam[0]='Undefined';
        echo $naam[0].'<br>';
        $country=g($name,'/64/','.png');
        if($country[0]==NULL)
          $country[0]='NA';
        $country[0]=strtoupper($country[0]);
		foreach($html->find('body') as $element)
		$test_ini=$test_ini."".$element;
				$institute=g($test_ini,'Institution:','</tr>');
		$to_check="xyz".$institute[0];
		$add=0;
		foreach($final[$value] as $fun)
		if(strpos($to_check, $fun)>0)
		$add=1;
		echo $add;
		if($add==0)
		{
		header("Location: update.php?error=4");
		}
		else
		{
		$sql = 'UPDATE detail SET name="'.$naam[0].'", country="'.$country[0].'", college='.$value.' WHERE handle="'.$user.'"';
        echo $sql;
        $retval = mysql_query($sql)or die("cannot select db");
        mysql_error();
        header("Location: update.php?error=9&user=".$user."");
        //echo 'Thank you ';
}
      }
      else
      {
        header("Location: update.php?error=1");
      }
    }
      else
      {
        header("Location: update.php?error=2");
      }
      mysql_close($conn);
    }
?>					