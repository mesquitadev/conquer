<meta HTTP-EQUIV = "Refresh" CONTENT = "5; URL = status.php">
<?php
require_once ('config.php');


		
                       
                        mysql_select_db($accdb);
			$res = mysql_query('SELECT count(id) FROM account;');
			$val = mysql_fetch_array($res);
			echo '    <font style="text-shadow:0px 0px 2px White; font-size:14px; color:White; font-family: Tahoma; font-weight: bold;"><font style="text-shadow:0px 0px 2px black;"><font color="black">Total de Contas:</font> '.$val[0].'<br />';

			mysql_select_db($gamedb);
			$res = mysql_query('SELECT count(id) FROM cq_user;');
			$val = mysql_fetch_array($res);
			echo '    <font style="text-shadow:0px 0px 2px White; font-size:14px; color:White; font-family: Tahoma; font-weight: bold;"><font style="text-shadow:0px 0px 2px black;"><font color="black">Total Personagem:</font> '.$val[0].'<br />';


			echo '';
			$fp = @fsockopen($serveraddress, $serverport, $errno, $errstr, 1);
			if (!$fp) {
				echo '<font style="text-shadow:0px 0px 2px White; font-size:14px; color:White; font-family: Tahoma; font-weight: bold;"><font color="black">SERVIDOR: </font><font style="color: red"> DESLIGADO</font><br />';
			}
			else
			{
				echo '<font style="text-shadow:0px 0px 2px White; font-size:14px; color:White; font-family: Tahoma; font-weight: bold;"><font color="black">servidor:</font><font style="color: lime"> LIGADO</font><br />';
				fclose($fp);
			}
                                
?><font style="text-shadow:0px 0px 2px White; font-size:14px; color:White; font-family: Tahoma; font-weight: bold;"><font style="text-shadow:0px 0px 2px black;"><font color="black">Jogadores Online:</font><Font style="text-shadow:0px 0px 1px black;"><Font Color= "blue"> <?php echo (exec('netstat -a -n |find "5816"  |find "ESTABLISHED" /c') -2); ?></font></font><strong><br />
<tr><td class="alt2" nowrap="nowrap"><font color="black">Guilds: <font color="lime">
					<?php
						mysql_select_db($database);
						$res = mysql_query('SELECT count(id) FROM cq_syndicate;');
						$val = mysql_fetch_array($res);
						echo ''.$val[0].'';
					?>
						</font></td></tr>
  </strong></font></div>
<div align="center"></div>



<script language="JavaScript">


var message="";
///////////////////////////////////
function clickIE() {if (document.all) {(message);return false;}}
function clickNS(e) {if
(document.layers||(document.getElementById&&!document.all)) {
if (e.which==2||e.which==3) {(message);return false;}}}
if (document.layers)
{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}
else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;}

document.oncontextmenu=new Function("return false")
// -->
</script>