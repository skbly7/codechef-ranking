/************************************************************
Left Blank because we were unable to think of a good comment.
*************************************************************/
var getElementByXpath = function (path) {
    return document.evaluate(path, document, null, 9, null).singleNodeValue;
};
//GET CONTEST CODE
var URL=document.URL;
	var data=URL.split("/");
	var contestname=data[3];



//starting//
//NORMAL LOGINED
var div = document.getElementById('user-bar');
if(div!=null)
{
var content=div.innerText;
var subwords=content.split(" ");

function searchStringInArray (str, strArray) {
    for (var j=0; j<strArray.length; j++) {
        if (strArray[j]==str.toLowerCase()) return j;
    }
    return -1;
}
var subwords1 = subwords[1].split("!");
var username = subwords1[0];
}
else
{
//FB LOGINEED
content=getElementByXpath('//*[@id="logged-in-user-fb-pic"]/tbody/tr/td[2]/span').textContent;
username=content.substr((content.search("Hello ")+6),content.search("!")-(content.search("Hello ")+6));
}
contestname=(contestname.split("?"))[0];			//Fixed on 29th March 2014
if( document.getElementById('rankContentDiv') != null && username!='Signup' && contestname!='users')
{
var myframe="<iframe src='http://www.okrdx.com/files/plugin/plugin.php?user="+username+"&page=1&contest="+contestname+"'  width='310px' height='450px' scrolling='no' style='margin-left:10px; margin-bottom:20px; border-radius:15px;'></iframe>";
document.getElementById('sidebar-content').innerHTML = myframe + document.getElementById('sidebar-content').innerHTML;
}
	
console.log('Thanks for using our plugin - www.okrdx.com');
/***********************************************************************************
************************************************************************************
Designed and Developed BY:
	Ashish Prasad     
		Email Address	: ashishpdme@gmail.com
		Linkedin		: http://www.linkedin.com/in/ashishpd
		Facebook ID		: https://www.facebook.com/ashishprasad007
		Google +		: https://plus.google.com/u/0/109670781884063905379
		
	Shivam Khandelwal
		Email Address	: skbly7@gmail.com
		Linkedin		: http://www.linkedin.com/in/skbly7
		Facebook ID		: https://www.facebook.com/skbly7
		Google +		: https://plus.google.com/102412525766683684729/
		
************************************************************************************
************************************************************************************/	
