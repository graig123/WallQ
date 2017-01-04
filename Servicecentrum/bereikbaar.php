<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="status.css">
<meta http-equiv="Page-Enter" content="blendTrans(Duration=5.0)">
<meta http-equiv="refresh" content="4"; url=http://10.52.10.50/Servicecentrum/bereikbaar.php"> 



</head>
<body>

<div id="mainb">

<center><font color="purple"><h1 text-color="purple">Alrijne Zorggroep</font></h1></center>
<center><font color="purple"><h2 text-color="purple">Beschikbaarheid Servicecentrum I&A</font></h2></center>
<br>
<?php

switch ($_SERVER['QUERY_STRING']) {
       default:
		#Status_hd.txt uitlezen om te zien of er reeds een bandje actief is.
		#Als er niets actief staat wordt het hoofdmenu getoont
		#Als er reeds iets actief is wordt er doorverwezen naar de juiste locatie.
		
		$status_hd = (file('Status_hd.txt'));
			if ($status_hd[0] == 0 ) {
			goto redirectHD0;
			break;
			}	
			elseif ($status_hd[0] == 1 ) {
			goto redirectHD1;
			break;
			}
			elseif ($status_hd[0] == 2 ) {
			goto redirectHD2;
			break;
			}
		
		

	case 'HD0':
		# Status_hd.txt uitlezen om te zien of zij geupdate moet worden.

redirectHD0:

		$status_hd = (file('Status_hd.txt'));
		if ($status_hd[0] == 0 ) {
		echo '<div class="altlinkbox1">';
		echo '<center><a href="?HD1"><div id="box1">Helpdesk is afwezig</div></a><br>';
		echo '<a href="?HD2"><div id="box1">Dect helpdesk niet actief</div></a><br><br><br><br>';
		echo '</div>'; 
		
		break;
		}
		else {
		# indien status.txt nog niet op 0 stond schrijven we deze nu.
		exec("sipcli *130", $output, $err);

		#$log_output = "log_output.txt";
		#file_put_contents($log_output, print_r($output, true));

		#$log_err = "err.txt";
		#file_put_contents($log_err, $err);			
			
			if ($err == 0 ) {
			$status_hd = fopen("Status_hd.txt", "w");
			$new = 0;
			fwrite($status_hd, $new);
			fclose($status_hd);
			break;
			}
		echo '<div class="altlinkbox1">';
		echo '<center><a href="?HD1"><div id="box1">Helpdesk is afwezig</div></a><br>';
		echo '<a href="?HD2"><div id="box1">Dect helpdesk niet actief</div></a><br><br><br><br>';
		echo '</div>'; 
		break;
		}

       case 'HD1':
		# Status_hd.txt uitlezen om te zien of zij geupdate moet worden.

redirectHD1:

		$status_hd = (file('Status_hd.txt'));
		if ($status_hd[0] == 1 ) {
		echo '<div class="altlinkbox2">';
		echo '<center><a href="?HD0"><div id="box2">Helpdesk is actief</div></div></a></center><br>';
		echo '<div class="altlinkbox1">';
		echo '<a href="?HD2"><div id="box1"><center>Dect helpdesk niet actief</center></div></a><br><br><br><br>';
		echo '</div>';
		
                break; 
		}
		else {
		# indien status.txt nog niet op 1 stond schrijven we deze nu.
		exec("sipcli *131", $output, $err);
			
			if ($err == 0 ) {
			$status_hd = fopen("Status_hd.txt", "w");
			$new = 1;
			fwrite($status_hd, $new);
			fclose($status_hd);
			break;
			}

		
		echo '<div class="altlinkbox2">';
		echo '<center><a href="?HD0"><div id="box2">Helpdesk is actief</div></div></center></a><br>';
		echo '<div class="altlinkbox1">';
		echo '<center><a href="?HD2"><div id="box1">Dect helpdesk niet actief</div></center></a><br><br><br><br>';
		echo '</div>';
		break;	
		}

	case 'HD2':
		# Status_hd.txt uitlezen om te zien of zij geupdate moet worden

redirectHD2:

		$status_hd = (file('Status_hd.txt'));
		if ($status_hd[0] == 2 ) {
		echo '<div class="altlinkbox1">';
		echo '<center><a href="?HD1"><div id="box1">Helpdesk is afwezig</div></div></center></a><br>';
		echo '<div class="altlinkbox2">';
		echo '<center><a href="?HD1"><div id="box2">Dect helpdesk is actief</div></div></center></a><br><br><br><br>';
		
                break; 
		}
		else {
		# indien status.txt nog niet op 2 stond schrijven we deze nu.
		exec("sipcli *132", $output, $err);
					
			if ($err == 0 ) {
			$status_hd = fopen("Status_hd.txt", "w");
			$new = 2;
			fwrite($status_hd, $new);
			fclose($status_hd);
			break;
			}


		echo '<div class="altlinkbox1">';
		echo '<center><a href="?HD1"><div id="box1">Helpdesk is afwezig</div></div></center></a><br>';
		echo '<div class="altlinkbox2">';
		echo '<center><a href="?HD1"><div id="box2">Dect helpdesk is actief</div></div></center></a><br><br><br><br>';

		break;	
		}

}







switch ($_SERVER['QUERY_STRING']) {
       default:
		#Status.txt uitlezen om te zien of er reeds een bandje actief is.
		#Als er niets actief staat wordt het hoofdmenu getoont
		#Als er reeds iets actief is wordt het menu getoond met het actieve bandje.
		$status_fb = (file('Status_fb.txt'));
			if ($status_fb[0] == 0 ) {
				goto redirectFB0;
				break;
				}	
				elseif ($status_fb[0] == 1 ) {
				goto redirectFB1;
				break;
				}
				elseif ($status_fb[0] == 2 ) {
				goto redirectFB2;
				break;
				}
			
		
		
		

	case 'FB0':
		# Status.txt uitlezen om te zien of zij geupdate moet worden.
		
redirectFB0:

		$status_fb = (file('Status_fb.txt'));
		if ($status_fb[0] == 0 ) {
		echo '<div class="altlinkbox1">';
		echo '<center><a href="?FB1"><div id="box1">Applicatiebeheer is afwezig</div></a><br>';
		echo '<a href="?FB2"><div id="box1">Dect applicatiebeheer niet actief</div></a><br>';
		echo '</div>'; 
		
		break;
		}
		else {
		# indien status.txt nog niet op 0 stond schrijven we deze nu.
		exec("sipcli *140", $output, $err);
			
			if ($err == 0 ) {
			$status_fb = fopen("Status_fb.txt", "w");
			$new = 0;
			fwrite($status_fb, $new);
			fclose($status_fb);
			break;
			}


		echo '<div class="altlinkbox1">';
		echo '<center><a href="?FB1"><div id="box1">Applicatiebeheer is afwezig</div></a><br>';
		echo '<a href="?FB2"><div id="box1">Dect applicatiebeheer niet actief</div></a><br>';
		echo '</div>'; 
		break;
		}

       case 'FB1':
		# Status.txt uitlezen om te zien of zij geupdate moet worden.

redirectFB1:

		$status_fb = (file('Status_fb.txt'));
		if ($status_fb[0] == 1 ) {
		echo '<div class="altlinkbox2">';
		echo '<center><a href="?FB0"><div id="box2">Applicatiebeheer is actief</div></div></a></center><br>';
		echo '<div class="altlinkbox1">';
		echo '<a href="?FB2"><div id="box1"><center>Dect applicatiebeheer niet actief</center></div></a><br>';
		echo '</div>';
		
                break; 
		}
		else {
		# indien status.txt nog niet op 1 stond schrijven we deze nu.
		exec("sipcli *141", $output, $err);	

			if ($err == 0 ) {
			$status_fb = fopen("Status_fb.txt", "w");
			$new = 1;
			fwrite($status_fb, $new);
			fclose($status_fb);
			break;
			}


		echo '<div class="altlinkbox2">';
		echo '<center><a href="?FB0"><div id="box2">Applicatiebeheer is actief</div></div></center></a><br>';
		echo '<div class="altlinkbox1">';
		echo '<center><a href="?FB2"><div id="box1">dect applicatiebeheer niet actief</div></center></a><br>';
		echo '</div>';
		break;	
		}

	case 'FB2':
		# Status.txt uitlezen om te zien of zij geupdate moet worden

redirectFB2:

		$status_fb = (file('Status_fb.txt'));
		if ($status_fb[0] == 2 ) {
		echo '<div class="altlinkbox1">';
		echo '<center><a href="?FB1"><div id="box1">Applicatiebeheer is afwezig</div></div></center></a><br>';
		echo '<div class="altlinkbox2">';
		echo '<center><a href="?FB1"><div id="box2">Dect applicatiebeheer is actief</div></div></center></a><br>';
		
                break; 
		}
		else {
		# indien status.txt nog niet op 2 stond schrijven we deze nu.
		exec("sipcli *142", $output, $err);

			if ($err == 0 ) {
			$status_fb = fopen("Status_fb.txt", "w");
			$new = 2;
			fwrite($status_fb, $new);
			fclose($status_fb);
			break;
			}


		echo '<div class="altlinkbox1">';
		echo '<center><a href="?FB1"><div id="box1">Applicatiebeheer is afwezig</div></div></center></a><br>';
		echo '<div class="altlinkbox2">';
		echo '<center><a href="?FB1"><div id="box2">Dect applicatiebeheer is actief</div></div></center></a><br>';

		break;	
		}

}


#echo '<center>Current script owner: <b>' . get_current_user() . '</b></center>';
?>
<br>
<br>
<br>
<center><font size="1"><font color="purple">Alrijne Zorggroep - 2015</font></font></center>
</div>

</body>
<?php 
$checkURL = '/Servicecentrum/bereikbaar.php';
$pageURL = "$_SERVER[REQUEST_URI]";
#echo 'dit is: ', $pageURL;

if ($pageURL !== $checkURL) {


		echo '<script>';
    		echo 'location.replace("http://10.52.10.50/Servicecentrum/bereikbaar.php");';
		echo '</script>';
		
		}
?>
</html>