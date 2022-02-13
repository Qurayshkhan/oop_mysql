
<?php 
     //code here....
include "databaseclass.php";

$obj=new Database();

if (isset($_POST['submit'])) {
    $fname=$_POST['fname'];
    $class=$_POST['class'];
    $roll=$_POST['roll'];
    $values=['fname'=>$fname,'class'=>$class,'roll'=>$roll];
    if ($obj->insert('crud',$values)) {
        echo "<h1>Insert Data successfully</h1>";
    }else{
        echo "<h1>No Data insert Successfully</h1>";
    }
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="save-data.php" method="POST">

<br>
<label for="">Name</label>
<input type="text" name="fname" >
<br><br>
<br>
<label for="">Class</label>
<input type="text" name="class" >
<br><br>
<br>
<label for="">Roll</label>
<input type="text" name="roll" >
<br><br>
<br>
<label for="">student name</label>
<select name="" id="">
<?php 
     //code here....
    
$obj->select('crud');
$result=$obj->getresult();

foreach ($result as list("id"=>$id,"fname"=>$fname)) {
    echo '
    <option value="'.$id.'">
    '.$fname.'
    </option>
    ';
}

?>


</select>

<br><br>
<button type="submit" name="submit">Submit</button>

</form>

</body>
</html>