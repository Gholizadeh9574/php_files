<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test1";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
echo "<br>";


//آپدیت کردن اطلاعات 


// $sql2 = "UPDATE main SET date='1996-10-01' where id=3";
echo "<br>";
// if (mysqli_query($conn,$sql2)) {
//     echo "Record updated successfully";
// } else {
//     echo "Error updating record: " . mysqli_error($conn);
// }

echo "<br>";
echo "<br>";

// انتخاب کردن و نمایش به صورت json


$sql="select * from main";
$res=mysqli_query($conn,$sql);
$rr = array();
while($r = mysqli_fetch_assoc($res)) {
    $rr[] = $r;
}
// اضافه کردن آبجکت اول
echo '{"ok":"true","res":';
// نمایش اطلاعات بازیابی شده
print json_encode($rr);
//اضاقه کردن { آخر
echo "}";



$res=mysqli_query($conn,$sql);


echo "<br>";
echo "<br>";
echo "<br>";
print_r($res);
echo "<br>";
echo "<br>";
echo "<br>";


if (mysqli_num_rows($res) < 0) {
    var_dump(mysqli_fetch_assoc($res));
    echo "<br>";
    echo "<br>";

    while($row = mysqli_fetch_assoc($res)) {
    print_r($row);
    echo "<br>";
    var_dump($row); 
    echo "<br>";
    echo "<br>";
    echo json_encode($row);
    echo "<br>";
    echo "<br>";
    echo "<br>";
    }
} 
else {
    echo "0 results";
    echo "<br>";
}

$res=mysqli_query($conn,$sql);   
echo "<br>";
echo "<br>";
var_dump(mysqli_fetch_assoc($res));


?>