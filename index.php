<?php
include("db.php");
$sql="SELECT * FROM user";
$res=mysqli_query($conn,$sql);
$count=mysqli_num_rows($res);
//echo $count;
header('content-type:application/json');// enable cores
if($count>0){
    while($row=mysqli_fetch_assoc($res)){
        $arr[]=$row;
    }
    echo json_encode(['status'=>true,'data'=>$arr,'result'=>'found']);
}
else{
    echo"no data found";
    echo json_encode(['status'=>true,'msg'=>$arr,'result'=>'not']);
}
$conn->close();
?>