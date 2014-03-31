<?php

$show=1;
echo '<script src="files/jquery.js"></script>
	<script src="files/jquery-ui-autocomplete.js"></script>
	<script src="files/jquery.select-to-autocomplete.min.js"></script>
	<script type="text/javascript" charset="utf-8">
	  (function($){
	    $(function(){
	      $("select").selectToAutocomplete();
	    });
	  })(jQuery);
	</script>';
echo "<script type='text/javascript'>

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36157444-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>";
if (isset($_COOKIE["College"]))
{
$show=0;
$value=$_COOKIE["College"];
$value=preg_replace('/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s', '', $value);
if($value==0)
$show=1;
else
echo '
			<h4>'.mysql_real_escape_string($_COOKIE["Name"]).' Selected (<a href="select.php">Remove</a>)</h4>
			
			<p><img src="college/'.$_COOKIE["Image"].'" width="100" height="100"/>
			</p>
		';
}

if($show)
echo '
			<h2>No college selected</h2>
			<p><br/>
			<form action="select.php" method="post" name="links" style="margin:10px" id="select_college" id="ins" style="color:red;font-family:Calibri;">
				<select name="college" value="options" autofocus="autofocus" autocorrect="off" autocomplete="off" id="ins" >
	<option value="" selected="selected">Select Institute</option>
	<option value="3"  data-alternative-spellings="International Institute">IIIT Hyderabad</option>
	<option value="5" data-alternative-spellings="IIIT">Indian Institute of Information Technology, Allahabad</option>
	<option value="4" data-alternative-spellings="IIT">Indian Institute of Technology Kanpur</option>
	<option value="13" data-alternative-spellings="Indian Institute">IIT-BHU</option>
	<option value="14" data-alternative-spellings="Indian Institute">IIT Roorkee</option>
	<option value="16" data-alternative-spellings="Indraprastha Institute of Information Technology">IIIT Delhi</option>
	<option value="15" data-alternative-spellings="Indian School of Mines">ISM Dhanbad</option>
	<option value="6" data-alternative-spellings="National Institute of Technology">NIT Karnataka</option>
	<option value="7" data-alternative-spellings="Netaji Subhas Institute of Technology">NSIT</option>
	<option value="11" data-alternative-spellings="Motilal Nehru National Institutes of Technology">MNNIT Allahabad</option>
	<option value="10" data-alternative-spellings="National Institute of Technology">NIT Raipur</option>
	<option value="12" data-alternative-spellings="National Institute of Technology">NIT Durgapur</option>
	<option value="17" data-alternative-spellings="National Institute of Technology">NIT Trichy</option>
	<option value="8" data-alternative-spellings="Lovely Professional">LPU Jalandhar</option>
	<option value="9" data-alternative-spellings="Cochin University of Science and Technology">Cochin University</option>
			<option value="18" data-alternative-spellings="Sir Padampat Singhania University">SPSU Udaipur</option>
			<option value="19" data-alternative-spellings="DCE">Delhi Technological University</option>
			<option value="20" data-alternative-spellings="JMI">Jamia Millia Islamia</option>
			<option value="21" data-alternative-spellings="BVCOEND">Bharati Vidyapeeths College of Engineering, Delhi</option>
			<option value="22" data-alternative-spellings="RKGIT">Raj Kumar Goel Institute Of Technology</option>
			<option value="23" data-alternative-spellings="IITB">Indian Institute of Technology Bombay</option>
			<option value="24" data-alternative-spellings="IIT G">Indian Institute of Technology Guwahati</option>
			<option value="25" data-alternative-spellings="NIT Rourkela">National Institute of Technology, Rourkela</option>
	<option value="1" data-alternative-spellings="Jaypee Institute of Information Technology">JIIT, JUET, JUIT</option>
	<option value="2">SRM Institute of Science and Technology</option>
			<option value="26" data-alternative-spellings="LNMIIT">LNM Institute of Information Technology</option>
			<option value="27" data-alternative-spellings="Thapar">Thapar University</option>
			<option value="28" data-alternative-spellings="IITJ">Indian Institute of Technology Jodhpur</option>
			<option value="29" data-alternative-spellings="NIT Jalandhar">Dr. B. R. Ambedkar National Institute of Technology</option>
			<option value="30" data-alternative-spellings="BITS">Birla Institute of Technology Mesra</option>
			<option value="31" data-alternative-spellings="BVRIT">Dr. B.V.Raju Institute of Technology</option>
			<option value="32" data-alternative-spellings="NIT">National Institute of Technology, Warangal</option>
			<option value="33" data-alternative-spellings="GBU">Gautam Buddha University</option>
			<option value="34" data-alternative-spellings="MVIT">Sir M Visvesvaraya Institute of Technology</option>
			<option value="35" data-alternative-spellings="University">Jadavpur University</option>
			<option value="36" data-alternative-spellings="NIT">National Institute of Technology, Hamirpur</option>
			<option value="37" data-alternative-spellings="bvucoe">BVU College of Engineering, Pune</option>
			<option value="38" data-alternative-spellings="abes">ABES Engineering College</option>
			<option value="39" data-alternative-spellings="HITK">Heritage Institute Of Technology, Kolkata</option>
			<option value="40" data-alternative-spellings="Banglore">Christ University</option>
			<option value="41" data-alternative-spellings="MIMIT">Malout Institute of Management and Information Technology</option>
			<option value="42" data-alternative-spellings="APIIT">Asia Pacific Institute of Information Technology</option>
			<option value="43" data-alternative-spellings="NIST">National Institute of Science and Technology</option>
			<option value="44" data-alternative-spellings="VIT">Vellore Institute of Technology</option>
			<option value="45" data-alternative-spellings="TICT">Techno India College of Technology</option>
			<option value="46" data-alternative-spellings="SGSITS">Shri Govindram Seksaria Institute of Technology and Science</option>
			<option value="47" data-alternative-spellings="MANIT">Maulana Azad National Institute of Technology</option>
			<option value="48" data-alternative-spellings="VSSUT">Veer Surendra Sai University Of Technology</option>
			<option value="49" data-alternative-spellings="VNIT">Visvesvaraya National Institute of Technology</option>
			<option value="50" data-alternative-spellings="Pune">D Y Patil School Of Engineering</option>
			<option value="51" data-alternative-spellings="ODISHA">Synergy Institute of Engineering & Technology</option>
			<option value="52" data-alternative-spellings="NIT">National Institute of Technology Calicut</option>
			<option value="53" data-alternative-spellings="NIT">National Institute of Technology Kurukshetra</option>
			<option value="54" data-alternative-spellings="UITR">University Institute of Technology, RGPV</option>
			<option value="55" data-alternative-spellings="Rangampet">Sree Vidyanikethan Engineering College</option>
			<option value="56" data-alternative-spellings="SVNIT">Sardar Vallabhbhai National Institute of Technology, Surat</option>
			<option value="57" data-alternative-spellings="MNIT">Malaviya National Institute of Technology, Jaipur</option>
			<option value="58" data-alternative-spellings="SVIT">Sardar Patel Institute of Technology</option>
			<option value="59" data-alternative-spellings="SJCE">Sri Jayachamarajendra College of Engineering</option>
			<option value="60" data-alternative-spellings="IIT">Indian Institute of Technology Kharagpur</option>
			<option value="61" data-alternative-spellings="GB Pant">Govind Ballabh Pant Engineering College, Pauri</option>
			<option value="62" data-alternative-spellings="LD College">Lalbhai Dalpatram College of Engineering</option>
			<option value="63" data-alternative-spellings="HBTI">Harcourt Butler Technological Institute</option>
			<option value="64" data-alternative-spellings="NIT">National Institute of Technology, Jamshedpur</option>
			<option value="65" data-alternative-spellings="TAT">Trident Academy of Technology</option>
			<option value="66" data-alternative-spellings="MSIT">Maharaja Surajmal Institute of Technology</option>
			<option value="67" data-alternative-spellings="BIETJHS">Bundelkhand Institute of Engineering and Technology</option>
			<option value="68" data-alternative-spellings="LBSCE">Lal Bahadur Shastri College of Engineering, Kasaragod</option>
			<option value="69" data-alternative-spellings="ACPCE">A C Patil College Of Engineering</option>
			<option value="70" data-alternative-spellings="IIT">Indian Institute of Technology Ropar</option>
			<option value="71" data-alternative-spellings="Amity">Amity School of Engineering and Technology</option>
			<option value="72" data-alternative-spellings="CBIT">Chaitanya Bharathi Institute of Technology</option>
			<option value="73" data-alternative-spellings="SRMCEM">Sri Ramswaroop Memorial College of Engineering and Management Lucknow</option>
			<option value="74" data-alternative-spellings="BITS">Birla Institute of Technology and Science Pilani</option>
			<option value="75" data-alternative-spellings="SIESGST">SIES Graduate School of Technology</option>
			<option value="76" data-alternative-spellings="WBUT">West Bengal University of Technology</option>
			<option value="77" data-alternative-spellings="IIIT">International Institute Of Information Technology, Bangalore</option>
			<option value="78" data-alternative-spellings="MMMEC">Madan Mohan Malaviya Engineering College, Gorakhpur</option>
			<option value="79" data-alternative-spellings="IIT">Indian Institute of Technology Mandi</option>
			<option value="80" data-alternative-spellings="RVCE">Rashtreeya Vidyalaya College of Engineering</option>
			<option value="81" data-alternative-spellings="SASTRA">Shanmugha Arts, Science, Technology & Research Academy</option>
			<option value="82" data-alternative-spellings="UOHYD">University of Hyderabad</option>
			<option value="83" data-alternative-spellings="DAIICT">Dhirubhai Ambani Institute of Information and Communication Technology</option>
			<option value="84" data-alternative-spellings="IIITM">Indian Institute of Information Technology and Management, Gwalior</option>
			<option value="85" data-alternative-spellings="MAIT">Maharaja Agrasen Institute of Technology</option>
			<option value="86" data-alternative-spellings="IIITDM">Indian Institute of Information Technology Design and Manufacturing Kancheepuram</option>
			<option value="87" data-alternative-spellings="Raghu">Raghu Engineering College</option>
			<option value="88" data-alternative-spellings="VJTI">Veermata Jijabai Technological Institute</option>
			<option value="89" data-alternative-spellings="KIIT">Kalinga Institute of Industrial Technology</option>
			<option value="90" data-alternative-spellings="IIT">Indian Institute of Technology Delhi</option>
			<option value="91" data-alternative-spellings="BIET">Bapuji Institute of Engineering & Technology</option>
			<option value="92" data-alternative-spellings="JGEC">Jalpaiguri Government Engineering College</option>
			<option value="93" data-alternative-spellings="IIT">Indian Institute of Technology Indore</option>
			<option value="94" data-alternative-spellings="STVINCENT">St. Vincent Pallotti College Of Engineering and Technology</option>
			<option value="95" data-alternative-spellings="Shankara">Shankara Institute of Technology</option>
			<option value="96" data-alternative-spellings="SMVDU">Shri Mata Vaishno Devi University</option>
			<option value="97" data-alternative-spellings="UPES">University of Petroleum and Energy Studies</option>
			<option value="98" data-alternative-spellings="GKV">Gurukul Kangri Vishwavidyalaya, Haridwar</option>
			<option value="99" data-alternative-spellings="NSE">Netaji Subhash Engineering College</option>
			<option value="100" data-alternative-spellings="IMS">IMS Engineering College</option>
			<option value="101" data-alternative-spellings="IIT">Indian Institute of Technology Hyderabad</option>
			<option value="102" data-alternative-spellings="UDISTRITAL">Universidad Distrital Francisco Jose de Caldas</option>
			<option value="103" data-alternative-spellings="UVCE">University Visvesvaraya College of Engineering</option>
			<option value="104" data-alternative-spellings="BMS">B.M.S. College of Engineering</option>
			<option value="105" data-alternative-spellings="JSSATEN">JSS Academy Of Technical Education</option>
			<option value="106" data-alternative-spellings="ECB">Govt. Engineering College Bikaner</option>
			<option value="107" data-alternative-spellings="IIITDMJ">Indian Institute of Information Technology, Design and Manufacturing, Jabalpur</option>
			<option value="108" data-alternative-spellings="SVCE">Sri Venkateswara College of Engineering </option>
			<option value="109" data-alternative-spellings="DRIEMS">DRIEMS College</option>
			<option value="110" data-alternative-spellings="DAUNIV">Institute of Engineering and Technology, Devi Ahilya Vishwavidyalaya</option>
			<option value="111" data-alternative-spellings="	USAT">Charotar University of Science and Technology</option>
			<option value="112" data-alternative-spellings="UNITED">United College of Engineering and Research</option>
			<option value="113" data-alternative-spellings="DU">University of Delhi</option>
			<option value="114" data-alternative-spellings="KIET">Krishna Institute Of Engineering And Technology</option>
			<option value="115" data-alternative-spellings="IET-DAVV">Institute of Engineering and Technology, DAVV</option>
			<option value="116" data-alternative-spellings="PICT">Pune Institute of Computer Technology</option>
			<option value="117" data-alternative-spellings="GB Pant">Govind Ballabh Pant Engineering College, Delhi</option>
			<option value="118" data-alternative-spellings="UIET Panjab University Swami Sarvanand Giri Regional Campus">U.I.E.T., Hoshiarpur</option>
			<option value="119" data-alternative-spellings="NIT Patna">National Institute of Technology, Patna</option>
			<option value="120" data-alternative-spellings="BBAU Lucknow">Babasaheb Bhimrao Ambedkar University</option>
			<option value="121" data-alternative-spellings="IGDTUW">Indira Gandhi Delhi Technical University for Women</option>
			<option value="122" data-alternative-spellings="NOIDA">Noida International University</option>
			<option value="123" data-alternative-spellings="Ambedkar Institute of Technology">Ambedkar Institute of Advanced Communication Technologies and Research</option>
			<option value="124" data-alternative-spellings="NIEC">Northern India Engineering College</option>
			<option value="125" data-alternative-spellings="DMCE">Datta Meghe College of Engineering</option>
			<option value="126" data-alternative-spellings="BECS">Bengal Engineering & Science University,Shibpur</option>
			<option value="127" data-alternative-spellings="JIET">Jodhpur Institute of Engineering and Technology</option>
			<option value="128" data-alternative-spellings="VCE">Vasavi College of Enginnering</option>
			<option value="129" data-alternative-spellings="ITER">Institute of Technical Education and Research, Bhubaneswar</option>
			<option value="130" data-alternative-spellings="MSRIT">M. S. Ramaiah Institute of Technology</option>
			<option value="131" data-alternative-spellings="VGEC">Vishwakarma Government Engineering College</option>
			<option value="132" data-alternative-spellings="GCEK">Government College Of Engineering Kannur</option>
			<option value="133" data-alternative-spellings="Dehradun">DIT University, Dehradun</option>
			<option value="134" data-alternative-spellings="kolkata">Techno India Salt Lake</option>
			<option value="135" data-alternative-spellings="AIET">Avanthi Institute of Engineering and Technology</option>
			<option value="136" data-alternative-spellings="Indore">Acropolis Institute Of Technology and Research</option>
			<option value="137" data-alternative-spellings="KGCE">Konkan Gyanpeeth College of Engineering</option>
			<option value="138" data-alternative-spellings="Belgaum">KLS Gogte Institute of Technology</option>
			<option value="139" data-alternative-spellings="AISSMS">AISSMS College of Engineering, Pune</option>
			<option value="140" data-alternative-spellings="NITMAS">Neotia Institute Of Technology Management And Science</option>
			<option value="141" data-alternative-spellings="SISTEC">Sagar Institute of Science and Technology</option>
			<option value="142" data-alternative-spellings="vignanlara">Vignans Lara Institute of Technology and Science</option>
			<option value="143" data-alternative-spellings="ymcaie">Ymca institute of engineering</option>
			<option value="144" data-alternative-spellings="IIIT">International Institute of Information Technology, Bhubaneswar</option>
			<option value="145" data-alternative-spellings="Charleston">College of Charleston</option>
			<option value="146" data-alternative-spellings="NIET">Noida Institute of Engineering and Technology</option>
			<option value="147" data-alternative-spellings="NIT">National Institute of Technology, Agartala</option>
			<option value="148" data-alternative-spellings="Indraprastha">Guru Gobind Singh Indraprastha University</option>
			<option value="149" data-alternative-spellings="rcc">RCC Institute of Information Technology</option>
			<option value="150" data-alternative-spellings="Amrita">Amrita School of Engineering, Amritapuri</option>
			<option value="151" data-alternative-spellings="BCETDGP">Bengal college of engineering and technology</option>
			<option value="152" data-alternative-spellings="Manipal">Manipal University Jaipur</option>
			<option value="153" data-alternative-spellings="Haldia">Haldia Institute of Technology, Midnapore</option>
			<option value="154" data-alternative-spellings="DDU">Dharmsinh Desai University, Nadiad</option>
				</SELECT>
				<INPUT type="submit" value="Submit">
			</form>
			</p>
		';
?>