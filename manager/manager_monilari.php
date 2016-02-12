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








function ajoutCouleurs($tableMonilari) {//$val_rouge,$val_vert,$val_bleu,$temps,$moment,$chiffA,$chiffB,$cur,$jour,$heure)

    $table = $tableMonilari;
    $rouge = $table->get_rouge();
    $vert = $table->get_vert();
    $bleu = $table->get_bleu();

    $query2 = "INSERT INTO monilari ( rouge,vert,bleu) Values('" . $rouge . "','" . $vert . "','" . $bleu . "')"; //'".$temps."','".$moment."','".$chiffA."','".$chiffB."','".$cur."','".$jour."','".$heure."')";
    echo "sql::::" . $query2;
    $result2 = dbQuery($query2); //or die ("Query Failed ".mysql_error());
    echo $result2;
    echo $query2;
    //header('Location: listeDesPoi.php');
    return 0;
}

function getCouleurs($REFind,$page,$itemPerPage = 2) 
{
    $offset = ($page - 1) * $itemPerPage;
    $query;
    if ($REFind == 0) {
        $query = "SELECT rouge, vert,bleu FROM  monilari order by id desc LIMIT $offset, $itemPerPage";
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
