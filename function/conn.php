<?
$mysqli=false;
function conndb(){
    global $mysqli;
    $mysqli=new mysqli("localhost","root","root","test250223");
    $mysqli->query("SET NAMES 'utf-8'");
}
function cldb(){
    global $mysqli;
    $mysqli->close();
}

function Slider($lim,$id){
    global $mysqli;
    conndb();
    if($id){$where="WHERE `id`=".$id;}
    $res=$mysqli->query("SELECT * FROM `slider` $where ORDER BY `id` DESC LIMIT $lim");
    cldb();
    if(!$id){
            return resArr ($res);}
            else{return $res->fetch_assoc();} 
}
function resArr($res){
$arr=array();
while(($row=$res->fetch_assoc()) != false){
    $arr[]=$row;
}
return $arr;
}
?>