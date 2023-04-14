<?php  
require('config.php');

function db_connect(){
    global $servername, $username, $password, $dbname;
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}
function selectAllVisite($conn)
{
  $sql="SELECT idV,tipoV,data,ora,descrizione from visita order by idV ";
  $result=$conn->query($sql);
  $rowsVisite=$result->fetch_all(MYSQLI_ASSOC);
  return$rows;
}
?>