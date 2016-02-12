<?php

    require_once 'library/config.php';
    require_once("manager/manager_monilari.php");
    require_once("classes/table_monilari.php");

    $val_rouge="rr";
    $val_vert="vv";
    $val_bleu="bb";
    
    
 if (isset($_GET['rouge'])) 
 {
  $rouge=$_GET['rouge'];   
 }
  if (isset($_GET['vert'])) 
 {
  $vert=$_GET['vert'];   
 }
   if (isset($_GET['bleu'])) 
 {
  $bleu=$_GET['bleu'];   
 }
 
 if (isset($_GET['jour'])) 
 {
  $jour=$_GET['jour'];   
 }
 
 if (isset($_GET['heure'])) 
 {
  $heure=$_GET['heure'];   
 }
 
 //mettre validation anti injection ici
 
 
 
//   if (isset($_GET['log'])) 
// {
//  $log=$_GET['log'];   
// }
// if (isset($_GET['temps'])) 
// {
//  $temps=$_GET['temps'];   
// }
// if (isset($_GET['moment'])) 
// {
//  $moment=$_GET['moment'];   
// }
//  if (isset($_GET['chiffA'])) 
// {
//  $chiffA=$_GET['chiffA'];   
// }
//  if (isset($_GET['chiffB'])) 
// {
//  $chiffB=$_GET['chiffB'];   
// } 
// if (isset($_GET['cur'])) 
// {
//  $cur=$_GET['cur'];   
// }

 
   
                
                
 
 $table = new table_monilari();
 $table->set_rouge($rouge);
 $table->set_vert($vert);
 $table->set_bleu($bleu);
 $table->set_jour($jour);
 $table->set_heure($heure);
 
 $ret=ajoutCouleurs($table);//$log,$temps,$moment,$chiffA,$chiffB,$cur,$jour,$heure)

?>
