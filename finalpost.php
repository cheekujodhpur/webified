<?php
for($i=5;($i>0);$i--){

if($_POST['add']=="/".$_COOKIE["webifiedusr".$i]){

if(isset($_COOKIE[webifiedusr.$i])){
$file=fopen($_COOKIE[webifiedusr.$i],"w");
$html= $_POST['file'];
$str=file_get_contents("scroll.txt");
$str1= substr("$html", 4940);
$str2= str_replace("tRuE", "false", "$str1");
$str3=$str.$str2."</html>";
$str4=str_replace("move;", "auto;", "$str3");
$str5=str_replace("bodypre", "body", "$str4");
$str6=str_replace(".5px", "0", $str5);
fwrite($file, $str6);
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
