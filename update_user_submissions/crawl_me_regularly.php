<?php
ignore_user_abort(1);
date_default_timezone_set('Asia/Kolkata');
include "../crawl2.php";
include "../connect.php";
include "req.php";
ini_set('display_errors', '1');
$html=file_get_html('http://www.codechef.com/contests');


//IF TRUE RUN..!!

// SO HOW CRAWLING IS DONE ?
// I CHECK THE CONTESTS PAGE OF THE CODECHEF.
// AND FIND ALL THE CONTESTS WHICH ARE ONGOING
// THEN RECALCULATE THE SUBMISSIONS MADE IN THAT CONTEST... :)

$sno=0;
$start = time()+date('H:i', strtotime('-30 minutes'));
$end = time()+date('H:i', strtotime('+30 minutes'));
foreach($html->find('div[id=statusdiv] tr') as $i)
{
if(strtotime($i->childNodes(2)->innertext)<$start && strtotime($i->childNodes(3)->innertext)>$end )
{
		////Find of is the function defined to update all submission in a month...!!!
		find_of($i->childNodes(0)->innertext);
	}
	$sno++;
}
?>
