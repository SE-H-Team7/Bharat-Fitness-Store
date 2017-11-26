<?php
    extract($_GET);
    $handle = fopen("file.txt", "w");
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname="bfs";
    $area=$length*$breadth;
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql="SELECT eqbrandname,eqcategory,height,length,breadth,eqcost,max(eqcost/(length*breadth)) as cost from equipments as a, equipments_brands as b, equipments_categories as c,equipments_size as d where a.eqid = d.eqid and a.eqbrandid=b.eqbrandid and a.eqcatid=c.eqcatid group by a.eqcatid order by (length*breadth)";
$result=$conn->query($sql);
while($budget>0 && $area>0){
    compute();
}
/*
if ($result->num_rows > 0) {
    // output data of each row
    $ctr=0;
    $row = $result->fetch_assoc();
    while($row) {
        if($row["eqcost"]< $budget && ($row["length"]*$row["breadth"])<$area){
        $op="name: " . $row["eqbrandname"]. " - cat: " . $row["eqcategory"]. " " . $row["eqcost"]. "\n";
        $budget=$budget-$row["eqcost"];
        $area=$area-($row["length"]*$row["breadth"]);
         fwrite($handle,$op);
     }
         if(!($row = $result->fetch_assoc()) && $budget>0 && $area>0)
         {
            mysqli_data_seek($result, 0);
            $row = $result->fetch_assoc();
         }
    }
}
*/
function compute(){
    global $result;
    global $budget;
    global $area;
    global $handle;
    mysqli_data_seek($result, 0);
    while($row = $result->fetch_assoc()) {
       
        $op="name: " . $row["eqbrandname"]. " - cat: " . $row["eqcategory"]. " " . $row["eqcost"]. "\n";
        $budget=$budget-$row["eqcost"];
        $area=$area-($row["length"]*$row["breadth"]);
         fwrite($handle,$op);
     

}
}
/*
$ct=$ctr;
$ctr=0;
while($budget>0 && $area>0){
    while($ctr<$ct){
        $op="brandname" . $rows[$ctr]["eqbrandname"]. " - cat: " . $rows[$ctr]["eqcategory"]. " " . $rows[$ctr]["eqcost"]. "\n";
        if($budget-$rows[$ctr]["eqcost"]>0 && $area-($rows[$ctr]["length"]*$rows[$ctr]["breadth"])>0){
            $budget=$budget-$rows[$ctr]["eqcost"];
            $area=$area-($rows[$ctr]["length"]*$rows[$ctr]["breadth"]);
            fwrite($handle,$op);
        }
        $ctr++;
    }
    $ctr=0;
}
*/
#$op="brandname" . $rows[$ctr]["eqbrandname"]. " - cat: " . $rows[$ctr]["eqcategory"]. " " . $rows[$ctr]["eqcost"]. "\n";
#fwrite($handle,$op);
 header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename='.basename('file.txt'));
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize('file.txt'));
    readfile('file.txt');
fclose($handle);
$conn->close();
    #exit;
?>