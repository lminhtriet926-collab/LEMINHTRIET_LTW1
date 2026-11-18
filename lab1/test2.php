<?php
$so1 = 17;
$so2 = 19;
echo "$so1 <br>";
echo "$so2 <br>";
echo "cong: ".$so1 + $so2." <br>";
echo "tru: ".$so1 - $so2." <br>";
echo "nhan: ".$so1 * $so2." <br>";
echo "chia: ".$so1 / $so2." <br>";
echo "chi lay phan du: ".$so1 % $so2. " <br>";

$so = 17;
$chuoi = "19";
echo"== ";
if($so == $chuoi)
    echo "true <br>";
else
    echo "false <br>";
echo"=== ";
if($so === $chuoi)
    echo "true <br>";
else
    echo "false <br>";
echo"!= ";
if($so != $chuoi)
    echo "true <br>";
else
    echo "false <br>";
echo"<> ";
if($so <> $chuoi)
    echo "true <br>";
else
    echo "false <br>";
echo"!== ";
if($so !== $chuoi)
    echo "true <br><br>";
else
    echo "false <br>";
// == , !=, <> chi so sanh gia tri cua bien
// con ===, !== so sanh them kieu du lieu

$x = 17;
echo '++$x ='  . ++$x . "<br>";
echo '$x++ ='  . $x++ . "<br><br>";

$s1 = "1";
$s2 = "2";
echo "dung . :".$s1 . $s2."<br>";
echo "dung .= :". $s1 .= $s2."<br><br>";
// . la s1 noi vao s2 con = la noi thang vao chuoi trai

$strlen = "khong dau";
echo "strlen ".strlen($strlen)."<br>";
$mb_strlen = "có dấu ";
echo "mb_strlen ".mb_strlen($mb_strlen)."<br><br>";

$s3 = "Lê Minh Triet";
echo "strtoupper ".strtoupper($s3)."<br>";
echo "mb_strtoupper ".mb_strtoupper($s3)."<br>";
echo "strtolower ".strtolower($s3)."<br>";
echo "mb_strtolower ".mb_strtolower($s3)."<br>";
//hai ham strtoupper va strtolower ko the thay doi cac chu co dau
//hai ham mb_strtoupper va mb_strtolower co the thay doi cac chu co dau

$c1 ="123 abc";
$c2 ="abc 123";
echo var_dump((int)$c1) ."<br>";
echo var_dump((int)$c2) ."<br>";


?>