<?php

require_once("./classes/table_monilari.php");
require_once("./library/database.php");


//$action = isset($_GET['action']) ? $_GET['action'] : '';
//$day= isset($_GET['day']) ? $_GET['day'] : 15;
////$day=15;
//switch ($action)
//{
//
//     case 'getMusicPI' :
//        getMusicPI();
//      break;
//    case 'getAllLogPHP' :
//        getAllLogPHP($day);
//      break;
//
//  case 'getCount':
//      getCount($day);
//      break;
//  
//    default :
//        // if action is not defined or unknown
//        // move to main product page
//      
//}








function ajoutCouleursOLD($tableMonilari) {//$val_rouge,$val_vert,$val_bleu,$temps,$moment,$chiffA,$chiffB,$cur,$jour,$heure)

    $table = $tableMonilari;
    $rouge = $table->get_rouge();
    $vert = $table->get_vert();
    $bleu = $table->get_bleu();
    $jour = $table->get_jour();
    $heure = $table->get_heure();

    $query2 = "INSERT INTO monilari ( rouge,vert,bleu,jour,heure) Values('" . $rouge . "','" . $vert . "','" . $bleu . "','" . $jour . "','" . $heure . "')"; //'".$temps."','".$moment."','".$chiffA."','".$chiffB."','".$cur."','".$jour."','".$heure."')";
    echo "sql::::" . $query2;
    $result2 = dbQuery($query2); //or die ("Query Failed ".mysql_error());
    echo $result2;
    echo $query2;
    //header('Location: listeDesPoi.php');
    return 0;
}


function ajoutCouleurs($tableMonilari)
{
    $table = $tableMonilari;
    $rouge = $table->get_rouge();
    $vert = $table->get_vert();
    $bleu = $table->get_bleu();
    $jour = $table->get_jour();
    $heure = $table->get_heure();
    
    $sql = "INSERT INTO monilari (rouge,vert,bleu,jour,heure) Values(?,?,?,?,?)";

    $mysqli=dbConnection();
    $stmt = $mysqli->prepare($sql);/* Prepare statement */
    /* Bind parameters. TYpes: s = string, i = integer, d = double,  b = blob */
    $stmt->bind_param('sssss',$rouge,$vert,$bleu,$jour,$heure);
    if($stmt === false) {
      trigger_error('Wrong SQL: ' . $sql . ' Error: ' . $mysqli->error, E_USER_ERROR);
    }
    $stmt->execute();/* Execute statement */
    $stmt->close();
}




function getCouleurs($REFind,$page,$itemPerPage = 2) 
{
    $offset = ($page - 1) * $itemPerPage;
    $query;
    if ($REFind == 0) {
        $query = "SELECT rouge, vert,bleu,jour,heure FROM  monilari order by id desc LIMIT $offset, $itemPerPage";
    } else {
        $query = "SELECT * FROM monilari WHERE id=".$REFind." ;";
    }

    $result = dbQuery($query) ;
    $couleusID = 0;
    $couleusData;
    if (dbNumRows($result) > 0) 
    {
    while($row = dbFetchAssoc($result))
    {
        extract($row);
        //Build  object
        $T = new table_monilari();
        $T->set_id($id);
        $T->set_rouge($rouge);
        $T->set_vert($vert);
        $T->set_bleu($bleu);
        $T->set_jour($jour);
        $T->set_heure($heure);
     
        $couleusData[$couleusID] = $T;
        $couleusID = $couleusID + 1;
    }
}
   
    if ($couleusID == 0) {
        return null;
    } else {
        return $couleusData;
    }
}


?>
