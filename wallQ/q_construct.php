<?php

function q_construct($invoer1) {

// functie maakt de php pagina aan welke gebruikt zal worden als include op
// de index.php pagina.
require_once "queque.php";
$ch = queque($GLOBALS['godvar']);

  $opslaan = fopen("main_qbox.php", "w") or die("Unable to open file!");
  
  fwrite($opslaan, "<?php\r\n");
  fwrite($opslaan, "require_once 'queque.php';\r\n");
  fwrite($opslaan, "\$q = queque(");
  fwrite($opslaan, $invoer1);
  fwrite($opslaan, ");\r\n");
  fwrite($opslaan, "echo '<div class=\"module1\">';\r\n");
  fwrite($opslaan, "echo '<table width=\"100%\" border=\"0\" cellspacing=\"0\">';\r\n");
  fwrite($opslaan, "echo '<tr>';\r\n");
  fwrite($opslaan, "echo '<td width=\"70%\"><div id=\"pwachtrij-text1\"><b>Aantal wachtende</b></div></td>';\r\n");
  fwrite($opslaan, "if (\$q[1] < 3) {\r\n");
  fwrite($opslaan, "echo '<td width=\"30%\"><div id=\"pwachtrij-waarde1\"><b>', \$q[1], '</b></div></td>';\r\n");
  fwrite($opslaan, "} else {\r\n");
  fwrite($opslaan, "echo '<td width=\"30%\"><div id=\"pwachtrij-waarde-alarm1\"><b>', \$q[1], '</b></div></td>';\r\n");
  fwrite($opslaan, " }\r\n");
  fwrite($opslaan, "echo '</tr>';\r\n");
  fwrite($opslaan, "echo '<tr>';\r\n");
  fwrite($opslaan, "echo '<td width=\"70%\"><div id=\"pwachtrij-text2\"><b>Langst wachtende</b></div></td>';\r\n");
  fwrite($opslaan, "if (\$q[1] < 3) {\r\n");
	fwrite($opslaan, "echo '<td width=\"30%\"><div id=\"pwachtrij-waarde2\"><b>',\$q[2], '</b></div></td>';\r\n");
  fwrite($opslaan, "} else {\r\n");
  fwrite($opslaan, "echo '<td width=\"30%\"><div id=\"pwachtrij-waarde-alarm2\"><b>',\$q[2], '</b></div></td>';\r\n");
  fwrite($opslaan, "}\r\n");
  fwrite($opslaan, "echo '</tr>';\r\n");
  fwrite($opslaan, "echo '</div>';");
  fwrite($opslaan, "?>\r\n");

fclose($opslaan);

  $opslaan1 = fopen("main_qbox1.php", "w") or die("Unable to open file!");


  fwrite($opslaan1, "<?php\r\n");
  fwrite($opslaan1, "require_once 'queque.php';\r\n");
  fwrite($opslaan1, "\$q = queque(");
  fwrite($opslaan1, $invoer1);
  fwrite($opslaan1, ");\r\n");
  fwrite($opslaan1, "echo '<div id=\"pwachtrij-waarde1\"><b>', \$q[1], '</div>';\r\n");
  fwrite($opslaan1, "?>\r\n"); 

fclose($opslaan1);   

$opslaan2 = fopen("main_qbox2.php", "w") or die("Unable to open file!");


  fwrite($opslaan2, "<?php\r\n");
  fwrite($opslaan2, "require_once 'queque.php';\r\n");
  fwrite($opslaan2, "\$q = queque(");
  fwrite($opslaan2, $invoer1);
  fwrite($opslaan2, ");\r\n");
  fwrite($opslaan2, "echo '<div id=\"pwachtrij-waarde2\"><b>', \$q[2], '</div>';\r\n");
  fwrite($opslaan2, "?>\r\n");

fclose($opslaan2); 

//print_p($ch);
}


?>
