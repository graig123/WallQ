<?php
session_start();

require "namen.php";
require "queque.php";
$stat1 = queque(1);
$stat2 = queque(2);
$stat3 = queque(3);
$stat4 = queque(4);
$stat5 = queque(5);
$stat6 = queque(6);
$stat7 = queque(7);
$stat8 = queque(8);

$main = queque($_SESSION['wachtrij']);

if($_SESSION['sub1'] == 0){
}elseif($_SESSION['sub1'] == 101){
    if($stat1[1] < $_SESSION['limiet']){
    echo '<div id="sub1"><table style="width: 100%" ><tr><td width="50%">',$namen[1], '</td><td width="16.6%"><b>',$stat1[1],'</b></td><td width="25%"><b>',$stat1[2],'</b></td><td width="16.6%"></td></tr></table></div>';} else {
    echo '<div id="sub1-alarm"><table style="width: 100%" ><tr><td width="50%">',$namen[1], '</td><td width="16.6%"><b>',$stat1[1],'</b></td><td width="16.6%"><b>',$stat1[2],'</b></td><td width="16.6%"></td></tr></table></div>';
    }
}elseif($_SESSION['sub1'] == 102){
    if($stat2[1] < $_SESSION['limiet']){
    echo '<div id="sub1"><table style="width: 100%" ><tr><td width="50%">',$namen[2], '</td><td width="16.6%"><b>',$stat2[1],'</b></td><td width="25%"><b>',$stat2[2],'</b></td><td width="16.6%"></td></tr></table></div>';} else {
    echo '<div id="sub1-alarm"><table style="width: 100%" ><tr><td width="50%">',$namen[2], '</td><td width="16.6%"><b>',$stat2[1],'</b></td><td width="16.6%"><b>',$stat2[2],'</b></td><td width="16.6%"></td></tr></table></div>';
    }
}elseif($_SESSION['sub1'] == 103){
    if($stat3[1] < $_SESSION['limiet']){
    echo '<div id="sub1"><table style="width: 100%" ><tr><td width="50%">',$namen[3], '</td><td width="16.6%"><b>',$stat3[1],'</b></td><td width="25%"><b>',$stat3[2],'</b></td><td width="16.6%"></td></tr></table></div>';} else {
    echo '<div id="sub1-alarm"><table style="width: 100%" ><tr><td width="50%">',$namen[3], '</td><td width="16.6%"><b>',$stat3[1],'</b></td><td width="16.6%"><b>',$stat3[2],'</b></td><td width="16.6%"></td></tr></table></div>';
    }
}elseif($_SESSION['sub1'] == 104){
    if($stat4[1] < $_SESSION['limiet']){
    echo '<div id="sub1"><table style="width: 100%" ><tr><td width="50%">',$namen[4], '</td><td width="16.6%"><b>',$stat4[1],'</b></td><td width="25%"><b>',$stat4[2],'</b></td><td width="16.6%"></td></tr></table></div>';} else {
    echo '<div id="sub1-alarm"><table style="width: 100%" ><tr><td width="50%">',$namen[4], '</td><td width="16.6%"><b>',$stat4[1],'</b></td><td width="16.6%"><b>',$stat4[2],'</b></td><td width="16.6%"></td></tr></table></div>';
    }
}elseif($_SESSION['sub1'] == 105){
    if($stat5[1] < $_SESSION['limiet']){
    echo '<div id="sub1"><table style="width: 100%" ><tr><td width="50%">',$namen[5], '</td><td width="16.6%"><b>',$stat5[1],'</b></td><td width="25%"><b>',$stat5[2],'</b></td><td width="16.6%"></td></tr></table></div>';} else {
    echo '<div id="sub1-alarm"><table style="width: 100%" ><tr><td width="50%">',$namen[5], '</td><td width="16.6%"><b>',$stat5[1],'</b></td><td width="16.6%"><b>',$stat5[2],'</b></td><td width="16.6%"></td></tr></table></div>';
    }
}elseif($_SESSION['sub1'] == 106){
    if($stat6[1] < $_SESSION['limiet']){
    echo '<div id="sub1"><table style="width: 100%" ><tr><td width="50%">',$namen[6], '</td><td width="16.6%"><b>',$stat6[1],'</b></td><td width="16.6%"><b>',$stat6[2],'</b></td><td width="16.6%"></td></tr></table></div>';} else {
    echo '<div id="sub1-alarm"><table style="width: 100%" ><tr><td width="50%">',$namen[6], '</td><td width="16.6%"><b>',$stat6[1],'</b></td><td width="16.6%"><b>',$stat6[2],'</b></td><td width="16.6%"></td></tr></table></div>';
    }
}elseif($_SESSION['sub1'] == 107){
    if($stat7[1] < $_SESSION['limiet']){
    echo '<div id="sub1"><table style="width: 100%"><tr><td width="50%">',$namen[7],'</td><td width="16.6%"><b>',$stat7[1],'</b></td><td width="25%"><b>',$stat7[2],'</b></td><td width="16.6%"></td></tr></table></div>';} else {
    echo '<div id="sub1-alarm"><table style="width: 100%" ><tr><td width="50%">',$namen[7], '</td><td width="16.6%"><b>',$stat7[1],'</b></td><td width="16.6%"><b>',$stat7[2],'</b></td><td width="16.6%"></td></tr></table></div>';
    }
}elseif($_SESSION['sub1'] == 108){
    if($stat8[1] < $_SESSION['limiet']){
    echo '<div id="sub1"><table style="width: 100%" ><tr><td width="50%">',$namen[8], '</td><td width="16.6%"><b>',$stat8[1],'</b></td><td width="16.6%"><b>',$stat8[2],'</b></td><td width="16.6%"></td></tr></table></div>';} else {
    echo '<div id="sub1-alarm"><table style="width: 100%" ><tr><td width="50%">',$namen[8], '</td><td width="16.6%">  <b>',$stat8[1],'</b></td><td width="16.6%"><b>',$stat8[2],'</b></td><td width="16.6%"></td></tr></table></div>';
    }

}elseif($_SESSION['sub1'] == 111){
	if($main[6] == 0){
	echo '<div id="agentsub-alarm"><table style="width: 100%" ><tr><td width="50%">Agent status</td><td width="16.6%">Ingelogd: <b>',$main[6],'</b></td><td width="16.6%">Pauze: <b>',$main[5],'</b></td><td width="16.6%">Besch.: <b>',$main[4],'</b></td></tr></table></div>';
	} else {
    echo '<div id="agentsub"><table style="width: 100%" ><tr><td width="50%">Agent status</td><td width="16.6%">Ingelogd: <b>',$main[6],'</b></td><td width="16.6%">Pauze: <b>',$main[5],'</b></td><td width"16.6%">Besch.: <b>',$main[4],'</b></td></tr></table></div>';
    }
}


if($_SESSION['sub2'] == 0){
}elseif($_SESSION['sub2'] == 101){
    if($stat1[1] < $_SESSION['limiet']){
    echo '<div id="sub2"><table style="width: 100%" ><tr><td width="50%">',$namen[1], '</td><td width="16.6%"><b>',$stat1[1],'</b></td><td width="25%"><b>',$stat1[2],'</b></td><td width="16.6%"></td></tr></table></div>';} else {
    echo '<div id="sub2-alarm"><table style="width: 100%" ><tr><td width="50%">',$namen[1], '</td><td width="16.6%"><b>',$stat1[1],'</b></td><td width="16.6%"><b>',$stat1[2],'</b></td><td width="16.6%"></td></tr></table></div>';
    }
}elseif($_SESSION['sub2'] == 102){
    if($stat2[1] < $_SESSION['limiet']){
    echo '<div id="sub2"><table style="width: 100%" ><tr><td width="50%">',$namen[2], '</td><td width="16.6%"><b>',$stat2[1],'</b></td><td width="25%"><b>',$stat2[2],'</b></td><td width="16.6%"></td></tr></table></div>';} else {
    echo '<div id="sub2-alarm"><table style="width: 100%" ><tr><td width="50%">',$namen[2], '</td><td width="16.6%"><b>',$stat2[1],'</b></td><td width="16.6%"><b>',$stat2[2],'</b></td><td width="16.6%"></td></tr></table></div>';
    }
}elseif($_SESSION['sub2'] == 103){
    if($stat3[1] < $_SESSION['limiet']){
    echo '<div id="sub2"><table style="width: 100%" ><tr><td width="50%">',$namen[3], '</td><td width="16.6%"><b>',$stat3[1],'</b></td><td width="25%"><b>',$stat3[2],'</b></td><td width="16.6%"></td></tr></table></div>';} else {
    echo '<div id="sub2-alarm"><table style="width: 100%" ><tr><td width="50%">',$namen[3], '</td><td width="16.6%"><b>',$stat3[1],'</b></td><td width="16.6%"><b>',$stat3[2],'</b></td><td width="16.6%"></td></tr></table></div>';
    }
}elseif($_SESSION['sub2'] == 104){
    if($stat4[1] < $_SESSION['limiet']){
    echo '<div id="sub2"><table style="width: 100%" ><tr><td width="50%">',$namen[4], '</td><td width="16.6%"><b>',$stat4[1],'</b></td><td width="25%"><b>',$stat4[2],'</b></td><td width="16.6%"></td></tr></table></div>';} else {
    echo '<div id="sub2-alarm"><table style="width: 100%" ><tr><td width="50%">',$namen[4], '</td><td width="16.6%"><b>',$stat4[1],'</b></td><td width="16.6%"><b>',$stat4[2],'</b></td><td width="16.6%"></td></tr></table></div>';
    }
}elseif($_SESSION['sub2'] == 105){
    if($stat5[1] < $_SESSION['limiet']){
    echo '<div id="sub2"><table style="width: 100%" ><tr><td width="50%">',$namen[5], '</td><td width="16.6%"><b>',$stat5[1],'</b></td><td width="25%"><b>',$stat5[2],'</b></td><td width="16.6%"></td></tr></table></div>';} else {
    echo '<div id="sub2-alarm"><table style="width: 100%" ><tr><td width="50%">',$namen[5], '</td><td width="16.6%"><b>',$stat5[1],'</b></td><td width="16.6%"><b>',$stat5[2],'</b></td><td width="16.6%"></td></tr></table></div>';
    }
}elseif($_SESSION['sub2'] == 106){
    if($stat6[1] < $_SESSION['limiet']){
    echo '<div id="sub2"><table style="width: 100%" ><tr><td width="50%">',$namen[6], '</td><td width="16.6%"><b>',$stat6[1],'</b></td><td width="16.6%"><b>',$stat6[2],'</b></td><td width="16.6%"></td></tr></table></div>';} else {
    echo '<div id="sub2-alarm"><table style="width: 100%" ><tr><td width="50%">',$namen[6], '</td><td width="16.6%"><b>',$stat6[1],'</b></td><td width="16.6%"><b>',$stat6[2],'</b></td><td width="16.6%"></td></tr></table></div>';
    }
}elseif($_SESSION['sub2'] == 107){
    if($stat7[1] < $_SESSION['limiet']){
    echo '<div id="sub2"><table style="width: 100%" ><tr><td width="50%">',$namen[7], '</td><td width="16.6%"><b>',$stat7[1],'</b></td><td width="25%"><b>',$stat7[2],'</b></td><td width="16.6%"></td></tr></table></div>';} else {
    echo '<div id="sub2-alarm"><table style="width: 100%" ><tr><td width="50%">',$namen[7], '</td><td width="16.6%"><b>',$stat7[1],'</b></td><td width="16.6%"><b>',$stat7[2],'</b></td><td width="16.6%"></td></tr></table></div>';
    }
}elseif($_SESSION['sub2'] == 108){
    if($stat8[1] < $_SESSION['limiet']){
    echo '<div id="sub2"><table style="width: 100%" ><tr><td width="50%">',$namen[8], '</td><td width="16.6%"><b>',$stat8[1],'</b></td><td width="16.6%"><b>',$stat8[2],'</b></td><td width="16.6%"></td></tr></table></div>';} else {
    echo '<div id="sub2-alarm"><table style="width: 100%" ><tr><td width="50%">',$namen[8], '</td><td width="16.6%">  <b>',$stat8[1],'</b></td><td width="16.6%"><b>',$stat8[2],'</b></td><td width="16.6%"></td></tr></table></div>';
    }
	
	}     





if($_SESSION['sub3'] == 0){
}elseif($_SESSION['sub3'] == 101){
    if($stat1[1] < $_SESSION['limiet']){
    echo '<div id="sub3"><table style="width: 100%" ><tr><td width="50%">',$namen[1], '</td><td width="16.6%"><b>',$stat1[1],'</b></td><td width="25%"><b>',$stat1[2],'</b></td><td width="16.6%"></td></tr></table></div>';} else {
    echo '<div id="sub3-alarm"><table style="width: 100%" ><tr><td width="50%">',$namen[1], '</td><td width="16.6%"><b>',$stat1[1],'</b></td><td width="16.6%"><b>',$stat1[2],'</b></td><td width="16.6%"></td></tr></table></div>';
    }
}elseif($_SESSION['sub3'] == 102){
    if($stat2[1] < $_SESSION['limiet']){
    echo '<div id="sub3"><table style="width: 100%" ><tr><td width="50%">',$namen[2], '</td><td width="16.6%"><b>',$stat2[1],'</b></td><td width="25%"><b>',$stat2[2],'</b></td><td width="16.6%"></td></tr></table></div>';} else {
    echo '<div id="sub3-alarm"><table style="width: 100%" ><tr><td width="50%">',$namen[2], '</td><td width="16.6%"><b>',$stat2[1],'</b></td><td width="16.6%"><b>',$stat2[2],'</b></td><td width="16.6%"></td></tr></table></div>';
    }
}elseif($_SESSION['sub3'] == 103){
    if($stat3[1] < $_SESSION['limiet']){
    echo '<div id="sub3"><table style="width: 100%" ><tr><td width="50%">',$namen[3], '</td><td width="16.6%"><b>',$stat3[1],'</b></td><td width="25%"><b>',$stat3[2],'</b></td><td width="16.6%"></td></tr></table></div>';} else {
    echo '<div id="sub3-alarm"><table style="width: 100%" ><tr><td width="50%">',$namen[3], '</td><td width="16.6%"><b>',$stat3[1],'</b></td><td width="16.6%"><b>',$stat3[2],'</b></td><td width="16.6%"></td></tr></table></div>';
    }
}elseif($_SESSION['sub3'] == 104){
    if($stat4[1] < $_SESSION['limiet']){
    echo '<div id="sub3"><table style="width: 100%" ><tr><td width="50%">',$namen[4], '</td><td width="16.6%"><b>',$stat4[1],'</b></td><td width="25%"><b>',$stat4[2],'</b></td><td width="16.6%"></td></tr></table></div>';} else {
    echo '<div id="sub3-alarm"><table style="width: 100%" ><tr><td width="50%">',$namen[4], '</td><td width="16.6%"><b>',$stat4[1],'</b></td><td width="16.6%"><b>',$stat4[2],'</b></td><td width="16.6%"></td></tr></table></div>';
    }
}elseif($_SESSION['sub3'] == 105){
    if($stat5[1] < $_SESSION['limiet']){
    echo '<div id="sub3"><table style="width: 100%" ><tr><td width="50%">',$namen[5], '</td><td width="16.6%"><b>',$stat5[1],'</b></td><td width="25%"><b>',$stat5[2],'</b></td><td width="16.6%"></td></tr></table></div>';} else {
    echo '<div id="sub3-alarm"><table style="width: 100%" ><tr><td width="50%">',$namen[5], '</td><td width="16.6%"><b>',$stat5[1],'</b></td><td width="16.6%"><b>',$stat5[2],'</b></td><td width="16.6%"></td></tr></table></div>';
    }
}elseif($_SESSION['sub3'] == 106){
    if($stat6[1] < $_SESSION['limiet']){
    echo '<div id="sub3"><table style="width: 100%" ><tr><td width="50%">',$namen[6], '</td><td width="16.6%"><b>',$stat6[1],'</b></td><td width="16.6%"><b>',$stat6[2],'</b></td><td width="16.6%"></td></tr></table></div>';} else {
    echo '<div id="sub3-alarm"><table style="width: 100%" ><tr><td width="50%">',$namen[6], '</td><td width="16.6%"><b>',$stat6[1],'</b></td><td width="16.6%"><b>',$stat6[2],'</b></td><td width="16.6%"></td></tr></table></div>';
    }
}elseif($_SESSION['sub3'] == 107){
    if($stat7[1] < $_SESSION['limiet']){
    echo '<div id="sub3"><table style="width: 100%" ><tr><td width="50%">',$namen[7], '</td><td width="16.6%"><b>',$stat7[1],'</b></td><td width="25%"><b>',$stat7[2],'</b></td><td width="16.6%"></td></tr></table></div>';} else {
    echo '<div id="sub3-alarm"><table style="width: 100%" ><tr><td width="50%">',$namen[7], '</td><td width="16.6%"><b>',$stat7[1],'</b></td><td width="16.6%"><b>',$stat7[2],'</b></td><td width="16.6%"></td></tr></table></div>';
    }
}elseif($_SESSION['sub3'] == 108){
    if($stat8[1] < $_SESSION['limiet']){
    echo '<div id="sub3"><table style="width: 100%" ><tr><td width="50%">',$namen[8], '</td><td width="16.6%"><b>',$stat8[1],'</b></td><td width="16.6%"><b>',$stat8[2],'</b></td><td width="16.6%"></td></tr></table></div>';} else {
    echo '<div id="sub3-alarm"><table style="width: 100%" ><tr><td width="50%">',$namen[8], '</td><td width="16.6%">  <b>',$stat8[1],'</b></td><td width="16.6%"><b>',$stat8[2],'</b></td><td width="16.6%"></td></tr></table></div>';
    }
}elseif($_SESSION['sub3'] == 109){
echo '<div id="sub3">Tijd  <b>' . date("H:i") .'</b></div>';
}elseif($_SESSION['sub3'] == 110){
echo '<div id="sub3">Datum  <b>' . date("d-m-y") .'</b></div>';
}

?>