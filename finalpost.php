<?php
for($i=5;($i>0);$i--){

if($_POST['add']=="/".$_COOKIE["webifiedusr".$i]){

if(isset($_COOKIE[webifiedusr.$i])){
$file=fopen($_COOKIE[webifiedusr.$i],"w");
$html= $_POST['file'];
$str1= substr("$html", 6360);
$str2= str_replace("tRuE", "false", "$str1");
$str3="<html><head><link rel='stylesheet' href='http://s.mlcdn.co/animate.css'>
<link rel='stylesheet' href='http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
</head>". $str2."</html>";
$str4=str_replace("move;", "auto;", "$str3");
$str5=str_replace("bodypre", "body", "$str4");
fwrite($file, $str5);
fclose($file);
$str1= "";
unset($str2);
$str2= "";
unset($str3);
$str3= "";
unset($html);
$html=$_COOKIE[webifiedusr.$i];
setcookie("webifiedusr".$i, "", time()-1, "/");
echo "<meta http-equiv='refresh' content='0; url=$html'/>";}
break;

}

}
?>
<meta http-equiv='refresh' content='5; url=denied.html'/>
