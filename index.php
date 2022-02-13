<?php 
     //code here....
include "databaseclass.php";

 $obj=new Database();


// $obj->insert("crud",['fname'=>'Tayyab Bhatti','class'=>'10','roll'=>'10']);
// echo "Insert Result is ";
// print_r($obj->getresult());



// $obj->update("crud",['fname'=>'ChunnaMunna'],'fname="Muntaha"');
// echo "Update Result is ";
// print_r($obj->getresult());



// $obj->delete("crud",'roll="3"');
// echo " Delete Result is ";
// print_r($obj->getresult());


// $obj->sql("SELECT * FROM crud Where fname='Nabeel Farooq'");
// echo " Your Records Result is ";
// print_r($obj->getresult());


$obj->select("crud",'*',null,null,null,null);
$result=$obj->getresult();

echo '<table border="1" width="500px">

<tr>

<th>ID</th>
<th>Full name</th>
<th>Class</th>
<th>Roll</th>

</tr>

     ';
foreach ($result as $key => list("id"=>$id,"fname"=>$fname,"class"=>$class,"roll"=>$roll)) {
     echo "
     <tr>
     <td>$id</td> - <td>$fname</td> - <td>$class</td> - <td>$roll</td>\n
     </tr>
     ";
}
echo '</table>';








?>