<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>

<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1"/>
<meta name="description" content="Codechef rankings for each and every college. See current standing for Long, Short along with the submissions users have made it."/>
<meta name="keywords" content="Codechef,Ranking,Codechef Ranking,College"/> 
<meta name="author" content="Shivam Khandelwal"/> 
<link rel="stylesheet" type="text/css" href="default.css" media="screen"/>
<title>Codechef Ranking System</title>
<?php

//do 3:30 hrs minus from original
$date = 'February 07 2014 11:30:40 AM IST';
$date2 = 'February 17 2014 11:30:40 AM IST';
$contest_name = 'February<br>Long Contest<br>2014<br>';
$start_date = strtotime($date);
$exp_date = strtotime($date2);
$now = time();
if ($now < $start_date) {
?>
<script>
// Count down milliseconds = server_end - server_now = client_end - client_now
var server_end = <?php echo $start_date; ?> * 1000;
var server_now = <?php echo time(); ?> * 1000;
var client_now = new Date().getTime();
var end = server_end - server_now + client_now; // this is the real end time

var _second = 1000;
var _minute = _second * 60;
var _hour = _minute * 60;
var _day = _hour *24
var timer;

function showRemaining()
{
    var now = new Date();
    var distance = end - now;
    if (distance < 0 ) {
       clearInterval( timer );
		var complete = document.getElementById('complete');
		complete.innerHTML='<div style="text-align:center;font-size:20px;background-color:#DFE0E9;font-family:Calibri;margin-top:30px;margin:40px;padding:20px;border:2px solid white;border-radius:20px;"><?php echo $contest_name;?> Going On</div>'
       return;
    }
    var days = Math.floor(distance / _day);
    var hours = Math.floor( (distance % _day ) / _hour );
    var minutes = Math.floor( (distance % _hour) / _minute );
    var seconds = Math.floor( (distance % _minute) / _second );
	if(hours<10)
		hours='0'+hours;
	if(minutes<10)
		minutes='0'+minutes;
	if(seconds<10)
		seconds='0'+seconds;
	if(days<10)
		days='0'+days;
		var complete = document.getElementById('complete');
	
	complete.innerHTML='<div id="heading">Next Contest<br>Countdown</div><div class="box_outer" style="margin-left:10px;"><div id="timer_d" class="box">'+days+'</div><div class="box_bottom">Days</div></div><div class="box_outer"><div id="timer_h" class="box">'+hours+'</div><div class="box_bottom">Hours</div></div><div class="box_outer"><div id="timer_m" class="box">'+minutes+'</div><div class="box_bottom">Min</div></div><div class="box_outer"><div id="timer_s" class="box">'+seconds+'</div><div class="box_bottom">Sec</div></div>';

}

timer = setInterval(showRemaining, 1000);
</script>
<?php
}
else if($now < $exp_date)
{
	?>
<script>
window.onload=function()
{
var complete = document.getElementById('complete');
complete.innerHTML='<div style="text-align:center;font-size:20px;background-color:#DFE0E9;font-family:Calibri;margin-top:30px;margin:40px;padding:20px;border:2px solid white;border-radius:20px;"><?php echo $contest_name;?> Going On</div>'
}
	</script>
<?php
} else
{
?>
<script>
window.onload=function()
{
var complete = document.getElementById('complete');
complete.innerHTML='<div style="text-align:center;font-size:20px;background-color:#DFE0E9;font-family:Calibri;margin-top:30px;margin:40px;padding:20px;border:2px solid white;border-radius:20px;"><?php echo $contest_name;?> Ended</div>'
}
</script>
<?php 
}
?>
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
<div id="fb-root"></div> <script>(function(d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//connect.facebook.net/en_US/all.js#xfbml=1"; fjs.parentNode.insertBefore(js, fjs); }(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-post" data-href="https://www.facebook.com/photo.php?fbid=610708765685956&amp;set=a.505414129548754.1073741829.491033864320114&amp;type=1" data-width="466"><div class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/photo.php?fbid=610708765685956&amp;set=a.505414129548754.1073741829.491033864320114&amp;type=1">Post</a> by <a href="https://www.facebook.com/okrdx">Codechef Ranking</a>.</div></div>



			<h1>Welcome to OKRDX</h1>
			<p>CodeChef is a global programming community. They host contests, trainings and events for programmers around the world. Their goal is to provide a platform for programmers everywhere to meet, compete, and have fun. CodeChef is a noncommercial organization operated by Directi, an Indian software company based in Mumbai, India.</p>			
			<p>But their isn't such feature on Codechef in which users can comptete within their college, see other programmer's progress on Codechef at a place and can know whom they have to approach to learn/ask doubt after the contest.</p>

			<p>Thus, this site has been made to provide all the features one need to know about other programmers of their college. <strong>This site is an initiative to increase number of active codechef users from all the colleges in India.</strong>
			<!--<p><strong>Presently 120+ colleges are added our site.</strong><br>Some of colleges from starting phase are : <br>
			Jaypee Institue of Information Technology (JIIT)<br>
			International Institute of Information Technology, Hyderabad<br>
			Indian Institute of Technology Kanpur (IITK)<br>
			Indian Institute of Information Technology, Allahabad<br>
			Indian Institute of Technology (BHU), Varanasi<br>
			National Institute of Technology, Raipur<br>
			National Institute of Technology Karnataka<br>
			National Institute of Technology, Durgapur<br>
			National Institute of Technology, Trichy<br>
			Netaji Subhas Institute of Technology<br>
			SRM University (Chennai and Delhi)<br>-->
			<p><h2>You can add your college too, by just filling few details <a href="https://docs.google.com/forms/d/1xILuCEE2GumneJai9cLpQCPsu5IZ2kMSboyGvbRWz14/viewform" target="_blank">here</a></h2><br><h4>Logos of all colleges which have been added are displayed below :</h4><br>
			</p>
<div id="fb-root"></div> <script>(function(d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//connect.facebook.net/en_US/all.js#xfbml=1"; fjs.parentNode.insertBefore(js, fjs); }(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-post" data-href="https://www.facebook.com/media/set/?set=a.492045044218996.1073741828.491033864320114&amp;type=1" data-width="550"><div class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/media/set/?set=a.492045044218996.1073741828.491033864320114&amp;type=1">Post</a> by <a href="https://www.facebook.com/okrdx">Codechef Ranking</a>.</div></div>
			</p>
		</div>

			<div class="sidenav">
			<!--<div id="complete"></div>-->
<div><center><h2>Download<br/>Chrome Extension<br/><a href="download.php"><img src="img/chrome.png" alot="Google Chrome" width="200" height="200"/></a></h2></center></div>
		</div>

		<div class="clearer"><span></span></div>

	</div>

	<div class="footer">&copy; 2013 <a href="http://www.shivamkhandelwal.in/">Shivam Khandelwal</a> | Designed and Developed by Shivam Khandelwal
	</div>

</div>

</body>

</html>		
