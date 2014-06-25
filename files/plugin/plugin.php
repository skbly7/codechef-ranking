<?php
include '../../connect.php';
$sno=1;
$user=mysql_real_escape_string($_GET['user']);
$page=mysql_real_escape_string($_GET['page']);
$contest=mysql_real_escape_string($_GET['contest']);

$save=$page;
if(isset($page))
{
$from=($page-1)*10;
$end=$from+10;
$sno=$from+1;
}
else
{
$from=1;
$end=10;
}


$sql='SELECT detail.college FROM detail WHERE detail.handle="'.$user.'"';
$result=mysql_query($sql);
if(mysql_num_rows($result))
$college=mysql_fetch_array($result);
else
$college['college']=-1;
	if($college['college']==1)
	{
	//$college_name="Jaypee University' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/jp.jpg' id='logo'>";
	}
	else if($college['college']==2)
	{
	//$college_name="SRM University' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/srm.jpg' id='logo'>";
	}
	else if($college['college']==3)
	{
	//$college_name="IIIT Hyderabad' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/iiith.gif' id='logo'>";
	}
	else if($college['college']==4)
	{
	//$college_name="IIT Kanpur' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/iitk.png' id='logo'>";
	}
	else if($college['college']==5)
	{
	//$college_name="IIT Allahabad' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/iiita.jpg' id='logo'>";
	}
	else if($college['college']==6)
	{
	//$college_name="NIT Karnataka' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/nit-karnataka.png' id='logo'>";
	}
	else if($college['college']==7)
	{
	//$college_name="NSIT' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/nsit.jpg' id='logo'>";
	}
	else if($college['college']==8)
	{
	//$college_name="LPU' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/lpu.png' id='logo'>";
	}
	else if($college['college']==9)
	{
	//$college_name="Cochin Univ.' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/cochin.jpg' id='logo'>";
	}
	else if($college['college']==10)
	{
	//$college_name="NIT Raipur' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/nit-raipur.jpg' id='logo'>";
	}
	else if($college['college']==11)
	{
	//$college_name="MNNIT Allahabad' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/mnnit.jpg' id='logo'>";
	}
	else if($college['college']==12)
	{
	//$college_name="NIT Durgapur' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/nit-durgapur.jpg' id='logo'>";
	}
	else if($college['college']==13)
	{
	//$college_name="IIT-BHU' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/iit-bhu.JPG' id='logo'>";
	}
	else if($college['college']==14)
	{
	//$college_name="IIT Roorkee' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/iitr.jpg' id='logo'>";
	}
	else if($college['college']==15)
	{
	//$college_name="ISM Dhanbad' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/ism.jpg' id='logo'>";
	}
	else if($college['college']==16)
	{
	//$college_name="IIIT-Delhi' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/iiitd.png' id='logo'>";
	}
	else if($college['college']==17)
	{
	//$college_name="NIT Trichy' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/nitt.JPG' id='logo'>";
	}
	else if($college['college']==18)
	{
	//$college_name="SPSU' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/padampat.png' id='logo'>";
	}
	else if($college['college']==19)
	{
	//$college_name="DTU' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/19.jpg' id='logo'>";
	}
	else if($college['college']==20)
	{
	//$college_name="JMI' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/20.jpg' id='logo'>";
	}
	else if($college['college']==21)
	{
	//$college_name="BVC' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/21.JPG' id='logo'>";
	}
	else if($college['college']==22)
	{
	//$college_name="RKGIT' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/22.jpg' id='logo'>";
	}
	else if($college['college']==23)
	{
	//$college_name="IITB' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/23.jpg' id='logo'>";
	}
	else if($college['college']==24)
	{
	//$college_name="IIT Guwahati' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/24.jpg' id='logo'>";
	}
	else if($college['college']==25)
	{
	//$college_name="NIT Rourkela' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/25.jpg' id='logo'>";
	}
	else if($college['college']==26)
	{
	//$college_name="LNMIIT' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/26.jpg' id='logo'>";
	}
	else if($college['college']==27)
	{
	//$college_name="Thapar' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/27.jpg' id='logo'>";
	}
	else if($college['college']==28)
	{
	//$college_name="IIT Jodhpur' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/28.png' id='logo'>";
	}
	else if($college['college']==29)
	{
	//$college_name="NIT Jalandhar' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/29.jpg' id='logo'>";
	}
	else if($college['college']==30)
	{
	//$college_name="BITS Mesra' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/30.jpg' id='logo'>";
	}
	else if($college['college']==31)
	{
	//$college_name="BVRIT' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/31.jpg' id='logo'>";
	}
	else if($college['college']==32)
	{
	//$college_name="NIT Warangal' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/32.jpg' id='logo'>";
	}
	else if($college['college']==33)
	{
	//$college_name="GBU' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/33.jpg' id='logo'>";
	}
	else if($college['college']==34)
	{
	//$college_name="MVIT' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/34.jpg' id='logo'>";
	}
	else if($college['college']==35)
	{
	//$college_name="Jadavpur' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/35.jpg' id='logo'>";
	}
	else if($college['college']==36)
	{
	//$college_name="NIT Hamirpur' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/36.jpg' id='logo'>";
	}
	else if($college['college']==37)
	{
	//$college_name="BVUCOE' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/37.png' id='logo'>";
	}
	else if($college['college']==38)
	{
	//$college_name="ABES' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/38.jpg' id='logo'>";
	}
	else if($college['college']==39)
	{
	//$college_name="Heritage(HITK)' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/39.jpg' id='logo'>";
	}
	else if($college['college']==40)
	{
	//$college_name="Christ University' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/40.jpg' id='logo'>";
	}
	else if($college['college']==41)
	{
	//$college_name="MIMIT' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/41.png' id='logo'>";
	}
	else if($college['college']==42)
	{
	//$college_name="APIIT' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/42.png' id='logo'>";
	}
	else if($college['college']==43)
	{
	//$college_name="NIST' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/43.jpg' id='logo'>";
	}
	else if($college['college']==44)
	{
	//$college_name="VIT' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/44.jpg' id='logo'>";
	}
	else if($college['college']==45)
	{
	//$college_name="TICT' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/45.jpg' id='logo'>";
	}
	else if($college['college']==46)
	{
	//$college_name="SGSITS' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/46.jpg' id='logo'>";
	}
	else if($college['college']==47)
	{
	//$college_name="MANIT' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/47.jpg' id='logo'>";
	}
	else if($college['college']==48)
	{
	//$college_name="VSSUT' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/48.jpg' id='logo'>";
	}
	else if($college['college']==49)
	{
	//$college_name="VNIT' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/49.jpg' id='logo'>";
	}
	else if($college['college']==50)
	{
	//$college_name="D.Y. Patil' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/50.png' id='logo'>";
	}
	else if($college['college']==51)
	{
	//$college_name="Synergy' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/51.jpg' id='logo'>";
	}
	else if($college['college']==52)
	{
	//$college_name="NIT Calicut' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/52.jpg' id='logo'>";
	}
	else if($college['college']==53)
	{
	//$college_name="NIT Kurukshetra' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/53.jpg' id='logo'>";
	}
	else if($college['college']==54)
	{
	//$college_name="UIT, RGPV' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/54.gif' id='logo'>";
	}
	else if($college['college']==55)
	{
	//$college_name="Vidyanikethan' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/55.jpg' id='logo'>";
	}
	else if($college['college']==56)
	{
	//$college_name="SVNIT' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/56.jpg' id='logo'>";
	}
	else if($college['college']==57)
	{
	//$college_name="MNIT' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/57.jpg' id='logo'>";
	}
	else if($college['college']==58)
	{
	//$college_name="SVIT' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/58.jpg' id='logo'>";
	}
	else if($college['college']==59)
	{
	//$college_name="SJCE' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/59.jpg' id='logo'>";
	}
	else if($college['college']==60)
	{
	//$college_name="IIT Kharagpur' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/60.jpg' id='logo'>";
	}
	else if($college['college']==61)
	{
	//$college_name="GB Pant' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/61.jpg' id='logo'>";
	}
	else if($college['college']==62)
	{
	//$college_name="LD College' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/62.jpg' id='logo'>";
	}
	else if($college['college']==63)
	{
	//$college_name="HBTI' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/63.jpg' id='logo'>";
	}
	else if($college['college']==64)
	{
	//$college_name="NIT Jamshedpur' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/64.jpg' id='logo'>";
	}
	else if($college['college']==65)
	{
	//$college_name="TAT' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/65.jpg' id='logo'>";
	}
	else if($college['college']==66)
	{
	//$college_name="MSIT' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/85.jpg' id='logo'>";
	}
	else if($college['college']==67)
	{
	//$college_name="BIETJHS' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/67.jpg' id='logo'>";
	}
	else if($college['college']==68)
	{
	//$college_name="LBSCE' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/68.jpg' id='logo'>";
	}
	else if($college['college']==69)
	{
	//$college_name="ACPCE' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/69.jpg' id='logo'>";
	}
	else if($college['college']==70)
	{
	//$college_name="IIT Ropar' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/70.jpg' id='logo'>";
	}
	else if($college['college']==71)
	{
	//$college_name="Amity' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/71.jpg' id='logo'>";
	}
	else if($college['college']==72)
	{
	//$college_name="CBIT' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/72.jpg' id='logo'>";
	}
	else if($college['college']==73)
	{
	//$college_name="SRMCEM' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/73.jpg' id='logo'>";
	}
	else if($college['college']==74)
	{
	//$college_name="BITS Pilani' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/74.jpg' id='logo'>";
	}
	else if($college['college']==75)
	{
	//$college_name="SIESGST' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/75.jpg' id='logo'>";
	}
	else if($college['college']==76)
	{
	//$college_name="WBUT' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/76.jpg' id='logo'>";
	}
	else if($college['college']==77)
	{
	//$college_name="IIIT Bangalore' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/77.jpg' id='logo'>";
	}
	else if($college['college']==78)
	{
	//$college_name="MMMEC' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/78.jpg' id='logo'>";
	}
	else if($college['college']==79)
	{
	//$college_name="IIT Mandi' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/79.jpg' id='logo'>";
	}
	else if($college['college']==80)
	{
	//$college_name="RVCE' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/80.jpg' id='logo'>";
	}
	else if($college['college']==81)
	{
	//$college_name="SASTRA' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/81.jpg' id='logo'>";
	}
	else if($college['college']==82)
	{
	//$college_name="UOHYD' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/82.jpg' id='logo'>";
	}
	else if($college['college']==83)
	{
	//$college_name="DAIICT' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/83.jpg' id='logo'>";
	}
	else if($college['college']==84)
	{
	//$college_name="IIITM' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/84.jpg' id='logo'>";
	}
	else if($college['college']==85)
	{
	//$college_name="MAIT' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/66.jpg' id='logo'>";
	}
	else if($college['college']==86)
	{
	//$college_name="IIITDM' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/86.jpg' id='logo'>";
	}
	else if($college['college']==87)
	{
	//$college_name="Raghu College' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/87.jpg' id='logo'>";
	}
	else if($college['college']==88)
	{
	//$college_name="VJTI' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/88.jpg' id='logo'>";
	}
	else if($college['college']==89)
	{
	//$college_name="KIIT' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/89.jpg' id='logo'>";
	}
	else if($college['college']==90)
	{
	//$college_name="IIT Delhi' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/90.jpg' id='logo'>";
	}
	else if($college['college']==91)
	{
	//$college_name="BIET' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/91.jpg' id='logo'>";
	}
	else if($college['college']==92)
	{
	//$college_name="JGEC' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/92.jpg' id='logo'>";
	}
	else if($college['college']==93)
	{
	//$college_name="IIT Indore' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/93.jpg' id='logo'>";
	}
	else if($college['college']==94)
	{
	//$college_name="STVINCENT' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/94.jpg' id='logo'>";
	}
	else if($college['college']==95)
	{
	//$college_name="Shankara' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/95.jpg' id='logo'>";
	}
	else if($college['college']==96)
	{
	//$college_name="SMVDU' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/96.jpg' id='logo'>";
	}
	else if($college['college']==97)
	{
	//$college_name="UPES' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/97.jpg' id='logo'>";
	}
	else if($college['college']==98)
	{
	//$college_name="GKV' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/98.jpg' id='logo'>";
	}
	else if($college['college']==99)
	{
	//$college_name="NSE' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/99.jpg' id='logo'>";
	}
	else if($college['college']==100)
	{
	//$college_name="IMS' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/100.jpg' id='logo'>";
	}
	else if($college['college']==101)
	{
	//$college_name="IIT Hyderabad' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/101.jpg' id='logo'>";
	}
	else if($college['college']==102)
	{
	//$college_name="UDISTRITAL' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/102.jpg' id='logo'>";
	}
	else if($college['college']==103)
	{
	//$college_name="UVCE' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/103.jpg' id='logo'>";
	}
	else if($college['college']==104)
	{
	//$college_name="BMS' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/104.jpg' id='logo'>";
	}
	else if($college['college']==105)
	{
	//$college_name="JSSATEN' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/105.jpg' id='logo'>";
	}
	else if($college['college']==106)
	{
	//$college_name="ECB' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/106.jpg' id='logo'>";
	}
	else if($college['college']==107)
	{
	//$college_name="IIITDMJ' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/107.jpg' id='logo'>";
	}
	else if($college['college']==108)
	{
	//$college_name="SVCE' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/108.jpg' id='logo'>";
	}
	else if($college['college']==109)
	{
	//$college_name="DRIEMS' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/109.jpg' id='logo'>";
	}
	else if($college['college']==110)
	{
	//$college_name="DAUNIV' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/110.jpg' id='logo'>";
	}
	else if($college['college']==111)
	{
	//$college_name="CHARUSAT' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/111.jpg' id='logo'>";
	}
	else if($college['college']==112)
	{
	//$college_name="UNITED' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/112.jpg' id='logo'>";
	}
	else if($college['college']==113)
	{
	//$college_name="DU' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/113.jpg' id='logo'>";
	}
	else if($college['college']==114)
	{
	//$college_name="KIET' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/114.jpg' id='logo'>";
	}
	else if($college['college']==115)
	{
	//$college_name="IET-DAVV' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/115.jpg' id='logo'>";
	}
	else if($college['college']==116)
	{
	//$college_name="PICT' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/116.jpg' id='logo'>";
	}
	else if($college['college']==117)
	{
	//$college_name="GB Pant' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/117.jpg' id='logo'>";
	}
	else if($college['college']==118)
	{
	//$college_name="UIET' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/118.jpg' id='logo'>";
	}
	else if($college['college']==119)
	{
	//$college_name="NIT Patna' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/119.jpg' id='logo'>";
	}
	else if($college['college']==120)
	{
	//$college_name="BBAU Lucknow' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/120.jpg' id='logo'>";
	}
	else if($college['college']==121)
	{
	//$college_name="IGDTUW' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/121.jpg' id='logo'>";
	}
	else if($college['college']==122)
	{
	//$college_name="Noida Univ.' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/122.jpg' id='logo'>";
	}
	else if($college['college']==123)
	{
	//$college_name="Ambedkar Ins.' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/123.jpg' id='logo'>";
	}
	else if($college['college']==124)
	{
	//$college_name="NIEC' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/124.jpg' id='logo'>";
	}
	else if($college['college']==125)
	{
	//$college_name="DMCE' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/125.jpg' id='logo'>";
	}
	else if($college['college']==126)
	{
	//$college_name="BECS' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/126.jpg' id='logo'>";
	}
	else if($college['college']==127)
	{
	//$college_name="JIET' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/127.jpg' id='logo'>";
	}
	else if($college['college']==128)
	{
	//$college_name="VCE' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/128.jpg' id='logo'>";
	}
	else if($college['college']==129)
	{
	//$college_name="ITER' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/129.jpg' id='logo'>";
	}
	else if($college['college']==130)
	{
	//$college_name="MSRIT' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/130.jpg' id='logo'>";
	}
	else if($college['college']==131)
	{
	//$college_name="VGEC' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/131.jpg' id='logo'>";
	}
	else if($college['college']==132)
	{
	//$college_name="GCEK' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/132.jpg' id='logo'>";
	}
	else if($college['college']==133)
	{
	//$college_name="DIT' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/133.png' id='logo'>";
	}
	else if($college['college']==134)
	{
	//$college_name="Techno India' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/134.jpg' id='logo'>";
	}
	else if($college['college']==135)
	{
	//$college_name="AIET' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/135.gif' id='logo'>";
	}
	else if($college['college']==136)
	{
	//$college_name="Acropolis' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/136.jpg' id='logo'>";
	}
	else if($college['college']==137)
	{
	//$college_name="KGCE' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/137.jpg' id='logo'>";
	}
	else if($college['college']==138)
	{
	//$college_name="KLS Gogte' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/138.jpg' id='logo'>";
	}
	else if($college['college']==139)
	{
	//$college_name="AISSMS' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/139.jpg' id='logo'>";
	}
	else if($college['college']==140)
	{
	//$college_name="NITMAS' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/140.jpg' id='logo'>";
	}
	else if($college['college']==141)
	{
	//$college_name="SISTEC' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/141.png' id='logo'>";
	}
	else if($college['college']==142)
	{
	//$college_name="Vignan' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/142.jpg' id='logo'>";
	}
	else if($college['college']==143)
	{
	//$college_name="YMCAIE' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/143.jpg' id='logo'>";
	}
	else if($college['college']==144)
	{
	//$college_name="IIIT BHU' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/144.JPG' id='logo'>";
	}
	else if($college['college']==145)
	{
	//$college_name="Charleston' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/145.gif' id='logo'>";
	}
	else if($college['college']==146)
	{
	//$college_name="NIET' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/146.jpg' id='logo'>";
	}
	else if($college['college']==147)
	{
	//$college_name="NIT Agartala' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/147.jpg' id='logo'>";
	}
	else if($college['college']==148)
	{
	//$college_name="Guru. G. S. Indra.' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/148.gif' id='logo'>";
	}
	else if($college['college']==149)
	{
	////$college_name="RCC' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/149.jpg' id='logo'>";
	}
	else if($college['college']==150)
	{
	////$college_name="Amrita' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/150.jpg' id='logo'>";
	}
	else if($college['college']==151)
	{
	//$college_name="BCETDGP' id='logo'>";
	echo "<img align='center'  src='http://www.okrdx.com/college/151.jpg' id='logo'>";
	}
	else if($college['college']==152)
	{
	echo "<img align='center'  src='http://www.okrdx.com/college/152.jpg' id='logo'>";
	}
	else if($college['college']==153)
	{
	echo "<img align='center'  src='http://www.okrdx.com/college/153.png' id='logo'>";
	}
	else if($college['college']==154)
	{
	echo "<img align='center'  src='http://www.okrdx.com/college/154.jpg' id='logo'>";
	}
	else if($college['college']==155)
	{
	echo "<img align='center'  src='http://www.okrdx.com/college/155.gif' id='logo'>";
	}
	else if($college['college']==156)
	{
	echo "<img align='center'  src='http://www.okrdx.com/college/156.jpg' id='logo'>";
	}
	else if($college['college']==157)
	{
	echo "<img align='center'  src='http://www.okrdx.com/college/157.jpg' id='logo'>";
	}
	else if($college['college']==158)
	{
	echo "<img align='center'  src='http://www.okrdx.com/college/158.jpg' id='logo'>";
	}
	else if($college['college']==159)
	{
	echo "<img align='center'  src='http://www.okrdx.com/college/159.gif' id='logo'>";
	}
	else if($college['college']==160)
	{
	echo "<img align='center'  src='http://www.okrdx.com/college/160.jpg' id='logo'>";
	}
	else if($college['college']==161)
	{
	echo "<img align='center'  src='http://www.okrdx.com/college/161.jpg' id='logo'>";
	}
	else if($college['college']==162)
	{
	echo "<img align='center'  src='http://www.okrdx.com/college/162.jpg' id='logo'>";
	}
	else
	{
	$value=0;
	}

?>


<link type="text/css" rel="stylesheet" media="all" href="style.css" />

<?php

if($college['college']==-1)
{
echo "<body bgcolor='black'>";
echo "<script type='text/javascript'>

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36157444-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
";
echo "<div style='font-size:20px;text-align:center;width:150px;color:white;'>
<b>Sorry</b><br>Your college / username is<b> not listed</b> on Codechef Ranking
</div><div id='new2' style='text-align:left;font-size:20px;width:150px;margin-top:20px;'>
What you can do ?
<br>
<a href='https://docs.google.com/forms/d/1xILuCEE2GumneJai9cLpQCPsu5IZ2kMSboyGvbRWz14/viewform' target='_blank'>Add college</a><br>
<a href='http://www.okrdx.com/add.php' target='_blank'>Add codechef user</a><br>
<a href='https://docs.google.com/forms/d/1B95gKV66uAaUuKUZjc-T-CFKV-oPDMm_srP2Nm-gbwQ/viewform' target='_blank'>Report a bug</a><br>
<a href='http://www.okrdx.com/update.php' target='_blank'>Update profile</a><br><br><a href='http://fb.com/okrdx' target='_blank'><img src='icon.png' width=150></a>
</div>";
}
else
{
echo "<body bgcolor='white'>";
echo "<script type='text/javascript'>

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36157444-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
";
echo '<div id="main"><table class="problems" cellpadding="0" cellspacing="0" width="100%">
<tbody id="new">
<tr class="headerrow">
	<th style="text-align: left;" width="10%">Rank</th>
	<th style="text-align: center;" width="15%">Country</th>
	<th style="text-align: center;" width="30%">User</th>
	<th style="text-align: right;" width="15%">Score</th>	
</tr>';
$q= 'SELECT detail.handle,detail.country,'.$contest.'.score FROM detail,'.$contest.' WHERE detail.college='.$college['college'].' AND detail.handle=SUBSTR('.$contest.'.handle,4) ORDER BY '.$contest.'.score desc LIMIT '.$from.',10';
//echo $q;
$sql=mysql_query($q) OR die("Error:".mysql_error());
if(mysql_num_rows($sql)<1)
{
$q= 'SELECT detail.handle,detail.country,'.$contest.'.score FROM detail,'.$contest.' WHERE detail.college='.$college['college'].' AND detail.handle=SUBSTR('.$contest.'.handle,6) ORDER BY '.$contest.'.score desc LIMIT '.$from.',10';
//echo $q;
$sql=mysql_query($q) OR die("Error:".mysql_error());
}
while($i = mysql_fetch_array($sql))
{
	echo '<tr class="row">
					<td align="center">'.$sno++.'</td>
					<td align="center"><img src="http://codechef_shared.s3.amazonaws.com/download/flags/24/'.strtolower($i['country']).'.png"></td>
					<td align="center"><a class="link" target="_blank" href="http://www.codechef.com/users/'.$i['handle'].'">'.$i['handle'].'</a></td>
					<td class="slang" align="right">'.$i['score'].'</td>
				</tr>';
}
echo '<tr class="row"></tr><tr class="row"><td align="left" style="padding:10px;">';
if($save!=1)
echo '<div id="btn"><a href="plugin.php?user='.$user.'&page='.($save-1).'&contest='.$contest.'">Previous</a></div>';
echo '</td><td align="right">
</td><td></td><td class="slang" align="right" style="padding:10px;">';
if($sno%10==1&&$college['college']!=-1)
echo '<div id="btn"><a href="plugin.php?user='.$user.'&page='.($save+1).'&contest='.$contest.'">Next</a></div>';
echo '</td></tr></tbody></div>';

}
?>
