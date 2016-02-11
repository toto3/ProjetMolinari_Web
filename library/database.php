<?php
require_once 'config.php';

$dbConn = new mysqli($dbHost, $dbUser, $dbPass,$dbName);
 if ($dbConn->connect_errno){
     trigger_error('Erreur de connection a la bd'. $dbConn->connect_error, E_USER_ERROR);
 }


function dbQuery($sql)
{       
        global $dbConn;
	if (!($result = $dbConn->query($sql))) {
                 echo "Echec lors de la récupération : (" . $dbConn->errno . ") " . $dbConn->error;
                 //trigger_error('Err : ' . $sql . ' Error: ' . $dbConn->error, E_USER_ERROR);
        }
        return $result;
}  



function dbFetchArray($result, $resultType = MYSQLI_NUM) {
        return $result->fetch_array($resultType );
}


function dbFetchAssoc($result)
{
   
    //if (!$result->fetch_assoc()) {
        // var_dump($result);
    //throw new Exception("Database Error [{$this->database->errno}] {$this->database->error}");
    //}    
    
    $r=@$result->fetch_assoc();
    
     
    return $r;
    //return $result->fetch_assoc();
}

function dbFetchRow($result) 
{
    return mysqli_fetch_row($result);       
}


function dbNumRows($result)
{
        return $result->num_rows;
}


function dbInsertId()
{
        global $dbConn;
        return $dbConn->insert_id;
}
?>