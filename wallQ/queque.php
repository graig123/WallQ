<?php

// Fuction om de juiste queque te verkrijgen

function queque($q_number) {

// declareer de Namen van de afdelingen zoals ze op het wallboard zichtbaar worden

require 'namen.php';

// het exportbestand uit de cms uitlezen

$file01 = "../cms/multi_export.csv";
$waardes01 = array();
$handle = fopen($file01, "r");
while (!feof($handle)) {
       $waardes01 [] = str_replace("\r\n", "", fgets($handle, 128));
                       }
fclose($handle);

// de array opblazen en variabelen maken

$acd = explode(",", $waardes01[0]);
$skill = explode(",", $waardes01[1]);
$in_wacht = explode(",", $waardes01[2]);
$langst_in_wacht = explode(",", $waardes01[3]);
$gem_antw_snelheid = explode(",", $waardes01[4]);
$besch = explode(",", $waardes01[5]);
$pauze = explode(",", $waardes01[6]);
$ingesch = explode(",", $waardes01[7]);


//SIM!!!

//$acd = array('acd','rijnland','rijnland','rijnland','rijnland','rijnland','rijnland','rijnland','rijnland',);
//$skill = $namen;
//$in_wacht = array('wachtende',rand(0,5),rand(0,5),rand(0,5),rand(0,5),rand(0,5),rand(0,5),rand(0,5),rand(0,5),);
//$langst_in_wacht = array('langst',rand(0,60).':'.rand(0,60),rand(0,60).':'.rand(0,60),rand(0,60).':'.rand(0,60),rand(0,60).':'.rand(0,60),rand(0,60).':'.rand(0,60),rand(0,60).':'.rand(0,60),rand(0,60).':'.rand(0,60),rand(0,60).':'.rand(0,60),);
//$gem_in_wacht = array('gem',rand(0,60).':'.rand(0,60),rand(0,60).':'.rand(0,60),rand(0,60).':'.rand(0,60),rand(0,60).':'.rand(0,60),rand(0,60).':'.rand(0,60),rand(0,60).':'.rand(0,60),rand(0,60).':'.rand(0,60),rand(0,60).':'.rand(0,60),);
//$gem_antw_snelheid = array('gem',rand(0,60).':'.rand(0,60),rand(0,60).':'.rand(0,60),rand(0,60).':'.rand(0,60),rand(0,60).':'.rand(0,60),rand(0,60).':'.rand(0,60),rand(0,60).':'.rand(0,60),rand(0,60).':'.rand(0,60),rand(0,60).':'.rand(0,60),);

//$besch = array('besch',rand(0,3),rand(0,3),rand(0,3),rand(0,3),rand(0,3),rand(0,3),rand(0,3),rand(0,3),);
//$pauze = array('pauze',rand(0,3),rand(0,3),rand(0,3),rand(0,3),rand(0,3),rand(0,3),rand(0,3),rand(0,3),);
//$ingesch = array('ingesc',rand(0,3),rand(0,3),rand(0,3),rand(0,3),rand(0,3),rand(0,3),rand(0,3),rand(0,3),);

//SIM einde

// de queque arrays maken: deze zullen verder gebruikt gaan worden in de site $q0 zijn onbruikbare skillnamen, q1 tm q8 zijn de queque's

//$q0 = array($acd[0],$skill[0],$in_wacht[0],$langst_in_wacht[0],$gem_antw_snelheid[0],$besch[0],$pauze[0],$ingesch[0]);
$q1 = array($namen[1],$in_wacht[1],$langst_in_wacht[1],$gem_antw_snelheid[1],$besch[1],$pauze[1],$ingesch[1]);

$langst_in_wacht1 = explode(":",$q1[2]);
                          if ($langst_in_wacht1[0] == "") {
                              $q1[2] = "0$q1[2]";         }
$gem_antw_snelheid1 = explode(":", $q1[3]);
                          if ($gem_antw_snelheid1[0] == "") {
                              $q1[3] = "0$q1[3]";           }
                          if ($gem_antw_snelheid1[0] == "0") {
                              $q1[3] = "0:0$q1[3]";          }                              

$q2 = array($namen[2],$in_wacht[2],$langst_in_wacht[2],$gem_antw_snelheid[2],$besch[2],$pauze[2],$ingesch[2]);

$langst_in_wacht2 = explode(":",$q2[2]);
                          if ($langst_in_wacht2[0] == "") {
                              $q2[2] = "0$q2[2]";         }
$gem_antw_snelheid2 = explode(":", $q2[3]);
                          if ($gem_antw_snelheid2[0] == "") {
                              $q2[3] = "0$q2[3]";           }
                          if ($gem_antw_snelheid2[0] == "0") {
                              $q2[3] = "0:0$q2[3]";          }                              

$q3 = array($namen[3],$in_wacht[3],$langst_in_wacht[3],$gem_antw_snelheid[3],$besch[3],$pauze[3],$ingesch[3]);

$langst_in_wacht3 = explode(":",$q3[2]);
                          if ($langst_in_wacht3[0] == "") {
                              $q3[2] = "0$q3[2]";         }
$gem_antw_snelheid3 = explode(":", $q3[3]);
                          if ($gem_antw_snelheid3[0] == "") {
                              $q3[3] = "0$q3[3]";           }
                          if ($gem_antw_snelheid3[0] == "0") {
                              $q3[3] = "0:0$q3[3]";          }                              

$q4 = array($namen[4],$in_wacht[4],$langst_in_wacht[4],$gem_antw_snelheid[4],$besch[4],$pauze[4],$ingesch[4]);

$langst_in_wacht4 = explode(":",$q4[2]);
                          if ($langst_in_wacht4[0] == "") {
                              $q4[2] = "0$q4[2]";         }
$gem_antw_snelheid4 = explode(":", $q4[3]);
                          if ($gem_antw_snelheid4[0] == "") {
                              $q4[3] = "0$q4[3]";           }
                          if ($gem_antw_snelheid4[0] == "0") {
                              $q4[3] = "0:0$q4[3]";          }                              

$q5 = array($namen[5],$in_wacht[5],$langst_in_wacht[5],$gem_antw_snelheid[5],$besch[5],$pauze[5],$ingesch[5]);

$langst_in_wacht5 = explode(":",$q5[2]);
                          if ($langst_in_wacht5[0] == "") {
                              $q5[2] = "0$q5[2]";         }
$gem_antw_snelheid5 = explode(":", $q5[3]);
                          if ($gem_antw_snelheid5[0] == "") {
                              $q5[3] = "0$q5[3]";           }
                          if ($gem_antw_snelheid5[0] == "0") {
                              $q5[3] = "0:0$q5[3]";          }                              

$q6 = array($namen[6],$in_wacht[6],$langst_in_wacht[6],$gem_antw_snelheid[6],$besch[6],$pauze[6],$ingesch[6]);

$langst_in_wacht6 = explode(":",$q6[2]);
                          if ($langst_in_wacht6[0] == "") {
                              $q6[2] = "0$q6[2]";         }
$gem_antw_snelheid6 = explode(":", $q6[3]);
                          if ($gem_antw_snelheid6[0] == "") {
                              $q6[3] = "0$q6[3]";           }
                          if ($gem_antw_snelheid6[0] == "0") {
                              $q6[3] = "0:0$q6[3]";          }                              

$q7 = array($namen[7],$in_wacht[7],$langst_in_wacht[7],$gem_antw_snelheid[7],$besch[7],$pauze[7],$ingesch[7]);

$langst_in_wacht7 = explode(":",$q7[2]);
                          if ($langst_in_wacht7[0] == "") {
                              $q7[2] = "0$q7[2]";         }
$gem_antw_snelheid7 = explode(":", $q7[3]);
                          if ($gem_antw_snelheid7[0] == "") {
                              $q7[3] = "0$q7[3]"; 
                                        }
                          if ($gem_antw_snelheid7[0] == "0") {
                              $q7[3] = "0:0$q7[3]";          }                              

$q8 = array($namen[8],$in_wacht[8],$langst_in_wacht[8],$gem_antw_snelheid[8],$besch[8],$pauze[8],$ingesch[8]);

$langst_in_wacht8 = explode(":",$q8[2]);
                          if ($langst_in_wacht8[0] == "") {
                              $q8[2] = "0$q8[2]";         }
$gem_antw_snelheid8 = explode(":", $q8[3]);
                          if ($gem_antw_snelheid8[0] == "") {
                              $q8[3] = "0$q8[3]";           }
                          if ($gem_antw_snelheid8[0] == "0") {
                              $q8[3] = "0:0$q8[3]";          
                              }  

              if ($q_number == 0) {
                  return $q0;     }
              if ($q_number == 1) {
                  return $q1;     }
              if ($q_number == 2) {
                  return $q2;     }
              if ($q_number == 3) {
                  return $q3;     }
              if ($q_number == 4) {
                  return $q4;     }
              if ($q_number == 5) {
                  return $q5;     }
              if ($q_number == 6) {
                  return $q6;     }
              if ($q_number == 7) {
                  return $q7;     }
              if ($q_number == 8) {
                  return $q8;     }
}

?>
