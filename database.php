<?php 

$server="localhost";
$username="root";
$password="";
$dbname="mysqlstudents";

$conn=new mysqli($server,$username,$password,$dbname);
if ($conn->connect_error) {
    die("Faild To connect".$conn->connect_error);
}

$data="SELECT * FROM crud";
$query=$conn->query($data);

if ($query->num_rows > 0) {
    while ($row=$query->fetch_array()) {
        echo '
        
        FullName : '.$row['fname'].'<br>
        
        ';
    }
}



     
?>