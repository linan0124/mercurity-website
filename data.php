<?php
header('Access-Control-Allow-Origin:*');
date_default_timezone_set('Asia/Shanghai');
$name = "";
$email = "";
$amount = "";
$country = "";
$desc = "";
$comments = "";
if (isset($_POST["name"])) {
	$name = $_POST["name"];
}

if (isset($_POST["email"])) {
	$email = $_POST["email"];
}
if (isset($_POST["amount"])) {
	$amount = $_POST["amount"];
}
if (isset($_POST["country"])) {
	$country = $_POST["country"];
}
if (isset($_POST["desc"])) {
	$desc = $_POST["desc"];
}
if (isset($_POST["comments"])) {
	$comments = $_POST["comments"];
}

// $ti=date("Y-m-d H-i-s",time());
$stm="申请信息:\nName:".$name."\nEmail:".$email."\nPURCHASE AMOUNT IN US DOLLAR:".$amount."\nCountry:".$country."\nBUSINESS DESCRIPTION:".$desc."\nADDITIONAL COMMENTS:".$comments."\nTime:".date("Y-m-d H-i-s",time());
$filename="data/".date("Y-m-d H-i-s",time());

$myfile = fopen($filename.".txt", "w") or die("Unable to open file!");
fwrite($myfile, $stm);
fclose($myfile);

return true;
// if(isset($_POST["username"])&& isset($_POST["pwd"])){

//      if($_POST["username"]=='wq'&& $_POST["pwd"]=="123"){
//             echo "登陆成功！";
//         }else{
//             echo "登陆失败！";
//         }
// }

?>