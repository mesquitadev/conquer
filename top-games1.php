<?php
require_once ('config.php');
?>
                          </p>
					      <div align="center" class="style26">
                            <div align="center"><b><font color="#00FF00">Top Characters</b></div>
				          </div>
					      <div align="center">
                            <table<?php echo $tableSet; ?>>
                              <tr>
                                <td width="*" align="center"><font color="#56A5EC">Rank</td>
                                <td width="*" align="center"><font color="#56A5EC">Nome</td>
                                <td width="*" align="center"><font color="#FBB117">Profession</td>
                                <td width="*" align="center"><font color="#669999">Previous profession</td>
                                <td width="*" align="center"><font color="#CC3300">Level</td>
                              </tr>
                              <?php				
	$rank = mysql_query('SELECT name,level,profession,old_prof FROM cq_user WHERE level>69'
      .' ORDER by level desc LIMIT '.$limit.';');
	$i=1;
	while ($row = mysql_fetch_array($rank)) {
		echo '<tr><td align="center">'.$i.'.</td>
      <td align="center"><font color="#56A5EC">'.$row['name'].'</td>
      <td align="center"><font color="#FBB117">'.prof($row['profession']).'</td>
      <td align="center"><font color="#669999">'.prof($row['old_prof']).'</td>
      <td align="center"><font color="#CC3300">'.$row['level'].'</td>
    </tr> ';
    $i++;
    }
?>
                            </table>
				          </div>
					      <br />
                          <br />
                        </div>
					    <div align="center"><b><font color="#00FF00">Top Virtue</b></font></div>
					    <table<?php echo $tableSet; ?>>
                          <tr>
                            <td width="30" align="center"><font color="#56A5EC">Rank</td>
                            <td width="*" align="center"><font color="#56A5EC">Nome</td>
                            <td width="50" align="center"><font color="#FBB117">Profession</td>
                            <td width="50" align="center"><font color="#CC3300">Virtue</td>
                          </tr>
                          <?php				
	$rank = mysql_query('SELECT name,virtue,profession FROM cq_user WHERE virtue>2000'
      .' ORDER by virtue desc LIMIT '.$limit.';');
	$i=1;
	while ($row = mysql_fetch_array($rank)) {
	
    echo '<tr><td align="center">'.$i.'.</td>
      <td align="center">'.$row['name'].'</td>
      <td align="center">'.prof($row['profession']).'</td>
      <td align="center">'.($row['virtue']*1).'</td>
    </tr> ';
    $i++;
    }
?>
                        </table>
					    <br />
                        <br />
                        <div align="center"><b><font color="#00FF00">Top MoneyBag</b></div>
                        <table<?php echo $tableSet; ?>>
                          <tr>
                            <td width="30" align="center"><font color="#56A5EC">Rank</td>
                            <td width="*" align="center"><font color="#56A5EC">Nome</td>
                            <td width="150" align="center"><font color="#FBB117">MoneyBag</td>
                            <td width="75" align="center"><small><font color="#CC3300">CPsBag</small></td>
                          </tr>
                          <?php				
	$rank = mysql_query('SELECT name,money_saved+money as cash,emoney FROM cq_user WHERE '
      .'(money_saved>4000000 OR money>4000000) AND emoney>16 ORDER by cash DESC,emoney DESC LIMIT '.$limit.';');
	$i=1;
	while ($row = mysql_fetch_array($rank)) {
	
    echo '<tr><td align="center">'.$i.'.</td>
      <td align="center">'.$row['name'].'</td>
      <td align="center">'.(int)($row['cash']/1000000).' kk</td>
      <td align="center"><small>'.($row['emoney']+0).'</small></td>
    </tr> ';
    $i++;
    }
?>
                        </table>
                        <br />
                        <br />
                        <div align="center"><b><font color="#00FF00">Top Nobles</b></div>
                        <table<?php echo $tableSet; ?>>
                          <tr>
                            <td width="30">Rank</td>
                            <td width="*" align="center"><font color="#56A5EC">Name</td>
                            <td width="50" align="center"><font color="#56A5EC">noble</td>
                            <td width="100" align="center"><font color="#CC3300">donated</td>
                          </tr>
                          <?php				
	$rank = mysql_query('SELECT user_Name,value FROM dyna_rank_rec'
      .' ORDER by value desc LIMIT '.$limit.';');
	$i=1;
	while ($row = mysql_fetch_array($rank)) {
	
    echo '<tr><td align="center">'.$i.'.</td>
      <td align="center">'.$row['user_Name'].'</td>
      <td align="center">'.noble($i,$row['value']).'</td>
      <td align="center">'.(int)($row['value']/1000000).' kk</td>
    </tr> ';
    $i++;
    }
?>
                        </table>
                        <br />
                        <br />
                        <div align="center"><b><font color="#00FF00">KO Board</b></div>
                        <table<?php echo $tableSet; ?>>
                          <tr>
                            <td width="30"><font color="#CC3300">Rank</td>
                            <td width="*" align="center"><font color="#CC3300">Name</td>
                            <td width="50" align="center"><font color="#56A5EC">KO count</td>
                          </tr>
                          <?php				
	$rank = mysql_query('SELECT * FROM cq_superman'
      .' ORDER by number desc LIMIT '.$limit.';');
	$i=1;
	while ($row = mysql_fetch_array($rank)) {
	
    echo '<tr><td align="center">'.$i.'.</td>
      <td align="center">'.$row['name'].'</td>
      <td align="center">'.($row['number']+0).'</td>
    </tr> ';
    $i++;
    }
?>
                        </table>
                        <br />
                        <br />
                        <div align="center"><b><font color="#00FF00">Top Devils</b></div>
                        <table<?php echo $tableSet; ?>>
                          <tr>
                            <td width="30" align="center"><font color="#56A5EC">Rank</td>
                            <td width="*" align="center"><font color="#56A5EC">Name</td>
                            <td width="50" align="center"><font color="#CC3300">Profession</td>
                            <td width="50" align="center"><font color="#FBB117">Level</td>
                            <td width="50" align="center"><font color="#FBB117">PK points</td>
                          </tr>
                          <?php				
	$rank = mysql_query('SELECT name,pk,level,profession FROM cq_user WHERE pk>33'
      .' ORDER by pk desc LIMIT '.$limit.';');
	$i=1;
	while ($row = mysql_fetch_array($rank)) {
	
    echo '<tr><td align="center">'.$i.'.</td>
      <td align="center">'.$row['name'].'</td>
      <td>'.prof($row['profession']).'</td>
      <td align="center">'.$row['level'].'</td>
      <td align="center">'.pk($row['pk']).'</td>
    </tr> ';
    $i++;
    }
?>
                        </table>
                        <br />
                        <br />
                        <div align="center"><b><font color="#00FF00">Top Guilds</b></div>
                        <table<?php echo $tableSet; ?>>
                          <tr>
                            <td width="30" align="center"><font color="#56A5EC">Rank</td>
                            <td width="100" align="center"><font color="#56A5EC">Guild Name</td>
                            <td width="100" align="center"><font color="#CC3300">Guild Leader</td>
                            <td width="*" align="center"><font color="red">Guild fund</font></td>
                            <td width="60" align="center"><font color="darkgreen">Members</font></td>
                          </tr>
                          <?php				
	$rank = mysql_query('SELECT name,leader_name,money,amount AS members FROM cq_syndicate WHERE money>100000'
	    .' AND amount>2 AND del_flag=0'
      .' ORDER by money desc,amount LIMIT '.$limit2.';');
	$i=1;
	while ($row = mysql_fetch_array($rank)) {
	  echo '<tr><td align="center">'.$i.'.</td>
      <td align="center">'.$row['name'].'</td>
      <td align="center">'.$row['leader_name'].'</td>
      <td align="center"><font color="red">'.(int)($row['money']/1000).' k</font></td>
      <td align="center"><font color="darkgreen"><b>'.($row['members']+0).'</b></font></td>
    </tr> ';
    $i++;
    }
?>
                        </table><script language="JavaScript">


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