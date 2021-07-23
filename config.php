<?php
	//require_once './inc/class.captcha.php';
	// Configurations
	$myhost='localhost';   // MySQL database address
	$myuser='test'; 		   // MySQL server login
	$mypass='test'; 		   // MySQL server pass
	
	$accdb='account_zf';         //your server account database
	//$accdb='account';   //your server account database
	$gamedb='zf';			    //your server game database
	
	//register.php
	$passhash=false;     // set to true if u wish to save hash of pass instead of plain text pass
  
  //status.php
  $serveraddress='167.114.29.188'; 	//your server ip
	$serverport='5816';		//your server connection port
	$servername='ClassicCo'; 	//your server name
  
	//ranks.php
	$tableSet=' width="200" border="5" align="center"';  // rank tables settings html code
	$limit=33;   //records[lines/rows] limit for ranks table
	$limit2=13;  //records[lines/rows] limit for half of an rank table guilds
	
	
	
	//  DON'T CHANGE ANYTHING BELOW THIS LINE
	//   //    //    //    //    //    //    //    //    //    //    //   //    //    //    //    //    //    //    //
  //      even more if u dont know what u r doing !!!
	$MySQL=mysql_connect($myhost,$myuser,$mypass);
	mysql_select_db($gamedb);
	
	// mainly ranks.php ...
  function prof ($val) { //params> int_proffesion   returns>string_proffesion  //made for prof and old_prof
    if ($val>9 && $val<16)  return 'Trojan';
    if ($val>19 && $val<26) return 'Warrior';
    if ($val>39 && $val<46) return 'Archer';
    if ($val>99 && $val<102)  return 'Taoist';
    if ($val>131 && $val<136) return 'Water';
   if ($val>141 && $val<146) return 'Fire';
   if ($val>54 && $val<56) return 'Ninja'; 
    if ($val>0) return 'ERROR';
    
  	return (Empty($val) ? '' : 'Error'); //  when old prof is not set print nothing in table
    }
  function pk ($val) {  //params> int_pk   returns>string_PKpoints
    if ($val>=1000) return '<font color="black"><b><u>'.$val.'</u></b></font>';
    if ($val>=100) return '<font color="black"><b>'.$val.'</b></font>';    //  <font color="darkgreen">
    if ($val>=30 && $val<100)  return '<font color="red">'.$val.'</font>';
    
    return $val;  //I know ... lets say ... STANDART dot
    }
  function noble ($val,$cash) {  //params> int_nobleNr. int_donated   returns>string_nobleRank
    if ($val<4) return '<font color="#FF9900"><img border="0" src="Ranking/King.png"><font color="white">/<font color="lightpink"><img border="0" src="Ranking/Queen.png">';
    if ($val<16) return '<font color="#669966"><img border="0" src="Ranking/Prince.png">';
    if ($val<51)  return '<img border="0" src="Ranking/Duck.png">';
    
    if ($cash>200000000)  return 'Earl';
    if ($cash>100000000)  return 'Baron';
    if ($cash>30000000)   return 'Knight';
    
    return 'Error';  //I know ... lets say ... STANDART dot
    }

/*
<script type="text/javascript"> 
function toggle(a,b) { 
a = document.getElementById(a); 
b = document.getElementById(b); 
var display = a.style.display ? '' : 'none'; 
a.style.display = display; 
var displaydva = a.style.display ? 'block' : 'none'; 
b.style.display = displaydva; 
} 
</script> 
<script type="text/javascript"> function Rshow(o) {
          var a = document.getElementByID('b'+o+'');
          a.style.display='none';
          document.getElementByID('row'+o+'').style.display='block';
          }
        function Rhide(o) {
          document.getElementByID('b'+o+'').style.display='block';
          var a = document.getElementByID('row'+o+'');
          a.style.display='none';
          } </script>
*/
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
</head><body>
<script type="text/javascript"> 
function todd(a,b) { 
a = document.getElementById('row' + a + b); 
//var display = a.style.display ? '' : 'none'; 
//a.style.display = display; 
a.style.display='block'; 
} 
</script> 

