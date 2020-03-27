<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <?php
include'conn.php';
$sql="select * from list where id<6 ORDER BY count";
$array=$conne->getRowsArray($sql);
foreach($array as $key=>$cotent){
    $count=$array[$key]['count'];
$s=null;
$s1=null;
if($count!=1){
$s="<p>".$array[$key]['title']."</p>";        
}
    else{
   $s1="<p>".$array[$key]['title']."</p>"; 
    } 
    echo   $s.$s1;
}
        ?>
    </body>
</html>
