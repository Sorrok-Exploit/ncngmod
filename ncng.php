<?php /***
MAU GAPAIN?? MAU RECODE BOLEH HAHAHA
TELEGRAM :	https://t.me/ncngmod
INSTAGRAM : @nober_ld
***/
error_reporting(0);
$res="\033[0m";
$hitam="\033[0;30m";
$abu2="\033[1;30m";
$putih="\033[0;37m";
$putih2="\033[1;37m";
$red="\033[0;31m";
$red2="\033[1;31m";
$green="\033[0;32m";
$green2="\033[1;32m";
$yellow="\033[0;33m";
$yellow2="\033[1;33m";
$blue="\033[0;34m";
$blue2="\033[1;34m";
$purple="\033[0;35m";
$purple2="\033[1;35m";
$lblue="\033[0;36m";
$lblue2="\033[1;36m";
$HITAM="\033[40m";
$MERAH="\033[41m";
$HIJAU="\033[42m";
$KUNING="\033[43m";
$BIRU="\033[44m";
$UNGU="\033[45m";
$CYAN="\033[46m";
$PUTIH="\033[47m";
$Off="\033[0m";

include "cfg.php";

function fetch_value($str,$find_start) {
        $start = @strpos($str,$find_start);
        if ($start === false) {
                return "";
        }
        $length = strlen($find_start);
        $end = strpos(substr($str,$start +$length));
        return trim(substr($str,$start +$length));
}


function url($url){
$headers = array();
$headers[] = "Mozilla/5.0 (Linux; Android 10; Redmi Note 8) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.67 Mobile Safari/537.36";
$ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      $res = curl_exec($ch);
return $res;
}

error_reporting(0);
system("clear");

$res = url("https://controlc.com/7686cce6");
//echo $res."\n";
$link1 = explode('Link Password: ',$res);
$link = explode(' ',$link1[1]);
//echo $link[0]."\n";
$pw1 = explode('Pass: ',$res);
$pw = explode(' ',$pw1[1]);
//echo $pass[0]."\n";

$pass = $pw[0];
$read = file_get_contents("key.txt");
system("clear");
echo $baner = "
\033[1;32m 
█▄░█ █▀▀ █▄░█ █▀▀   █▀▄▀█ █▀█ █▀▄
█░▀█ █▄▄ █░▀█ █▄█   █░▀░█ █▄█ █▄▀\n\n";


//echo $green2." •SILAHKAN AMBIL PASSWORD DI TELEGRAM @NCNGMOD.\n";
//echo $red2." •(The password is in the video)\n";
//echo $red2."📌".$green2." Link Password :" .$red2.$link[0]."\n";
echo $red2."📌".$green2." JOIN TELEGRAM @NCNGMOD\n";

if ($pass == 'no'){
      echo $M2." 📌 Script Sudah Di Off Kan\n";
      exit;                                                       }else{
if($read == $pass){
      echo $HJ2." 📍 Proses Upload Password \n";
      sleep(5);
}
elseif($read != $pass){
      //echo $putih2." •Jangan di skip videonya. anggap aja nonton film Jav\n\n";
      $save = fopen("key.txt", "w");
echo $red2."📌".$green2." Link Password : " .$red2.$link[0]."\n";
echo $red2."📌".$green2." MASUKAN PASSWORD DI SINI : ".$red2;
$p = trim(fgets(STDIN));

if($pass == $p){
        fwrite($save, $p);
        echo $red2."\n📌".$green2." LOGIN SUCCESS\n";
        fclose($save);
        sleep(2);
        echo $red2."📌".$green2." JANGAN LUPA BERSYUKUR HARI INI\n";
        sleep(3);
        echo $red2."📌".$green2." PASSWORD AKAN DI RESET SETIAP HARI\n";
        sleep(3);
        }else{
        echo $M2."📌 LOGIN GAGAL, MASUKIN PASSWORD YG BENER DONG. SILAHKAN COBA LAGI\n";
        exit;
        }
        }
}
sleep(3);
system("clear");
system("xdg-open https://t.me/ncngmod");
sleep(5);
system("clear");
echo $purple."\n 
█▄░█ █▀▀ █▄░█ █▀▀   █▀▄▀█ █▀█ █▀▄
█░▀█ █▄▄ █░▀█ █▄█   █░▀░█ █▄█ █▄▀\n";

echo $putih."\n●▬▬▬▬▬▬▬▬▬▬▬▬ஜ۩۞۩ஜ▬▬▬▬▬▬▬▬▬▬▬▬●";
echo $lblue."\n[?] Script   :".$putih." INDO TODAY";
echo $lblue."\n[-] Versi    :".$yellow." 1.0";
echo $putih."\n●▬▬▬▬▬▬▬▬▬▬▬▬ஜ۩۞۩ஜ▬▬▬▬▬▬▬▬▬▬▬▬●";
echo $green."\n[!] Author   :".$putih." N-24";
echo $green."\n[-] KODE UNDANG:".$putih." STK6EP";
echo $putih."\n●▬▬▬▬▬▬▬▬▬▬▬▬ஜ۩۞۩ஜ▬▬▬▬▬▬▬▬▬▬▬▬●";
echo $blue."\n[-] TELEGRAM :".$green." https://t.me/ncngmod";
echo $blue."\n[-] DONATE DANA :".$green." +6282333140377";
echo $putih."\n●▬▬▬▬▬▬▬▬▬▬▬▬ஜ۩۞۩ஜ▬▬▬▬▬▬▬▬▬▬▬▬●\n";
sleep(3);
echo "\n";
$i = 1;
while($i < 100)
{
$ua = array(
"User-Agent: ".$user_agent,
"Host: task.idtopnews.com",
"content-type: text/plain;charset=utf-8",
"Cookie: ".$cookie,
"Sign: ".$sign1,
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://task.idtopnews.com/v1/tasks/reading/reward");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data1);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$r= curl_exec($ch);
$r = json_decode($r);

$user_id = $r->data->bonus->params->user_id;
$id = $r->data->bonus->params->id;
$value = $r->data->bonus->params->value;
$content_id = $r->data->bonus->params->content_id;
$read_times = $r->data->bonus->params->read_times;
echo $yellow2."\nUser_id    : ".$green2.$user_id;
echo $yellow2."\nId         : ".$green2.$id;
echo $yellow2."\nReward     : ".$green2.$value.$yellow2." Coin";
echo $yellow2."\nContent_id : ".$green2.$content_id;
echo $yellow2."\nRead_times : ".$green2.$read_times;
echo $green2."\n●▬▬▬▬▬▬▬▬▬▬▬▬ஜ۩۞۩ஜ▬▬▬▬▬▬▬▬▬▬▬▬●\n";
for ($time=15; $time>0; $time--){
echo "\r                                \r";
echo $green2."tunggu ".$putih."$time".$green2." detik";
sleep(1);
}
echo "\r                                \r";
$i++;
}



$i = 1;
while($i < 100)
{
$ua = array(
"User-Agent: ".$user_agent,
"Host: task.idtopnews.com",
"content-type: text/plain;charset=utf-8",
"Cookie: ".$cookie,
"Sign: ".$sign2,
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://task.idtopnews.com/v1/tasks/reading/reward");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data2);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$r= curl_exec($ch);
$r = json_decode($r);

$user_id = $r->data->bonus->params->user_id;
$id = $r->data->bonus->params->id;
$value = $r->data->bonus->params->value;
$content_id = $r->data->bonus->params->content_id;
$read_times = $r->data->bonus->params->read_times;
echo $yellow2."\nUser_id    : ".$green2.$user_id;
echo $yellow2."\nId         : ".$green2.$id;
echo $yellow2."\nReward     : ".$green2.$value.$yellow2." Coin";
echo $yellow2."\nContent_id : ".$green2.$content_id;
echo $yellow2."\nRead_times : ".$green2.$read_times;
echo $green2."\n●▬▬▬▬▬▬▬▬▬▬▬▬ஜ۩۞۩ஜ▬▬▬▬▬▬▬▬▬▬▬▬●\n";
for ($time=15; $time>0; $time--){
echo "\r                                \r";
echo $green2."tunggu ".$putih."$time".$green2." detik";
sleep(1);
}
echo "\r                                \r";
$i++;
}




$i = 1;
while($i < 100)
{
$ua = array(
"User-Agent: ".$user_agent,
"Host: task.idtopnews.com",
"content-type: text/plain;charset=utf-8",
"Cookie: ".$cookie,
"Sign: ".$sign3,
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://task.idtopnews.com/v1/tasks/reading/reward");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data3);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$r= curl_exec($ch);
$r = json_decode($r);

$user_id = $r->data->bonus->params->user_id;
$id = $r->data->bonus->params->id;
$value = $r->data->bonus->params->value;
$content_id = $r->data->bonus->params->content_id;
$read_times = $r->data->bonus->params->read_times;
echo $yellow2."\nUser_id    : ".$green2.$user_id;
echo $yellow2."\nId         : ".$green2.$id;
echo $yellow2."\nReward     : ".$green2.$value.$yellow2." Coin";
echo $yellow2."\nContent_id : ".$green2.$content_id;
echo $yellow2."\nRead_times : ".$green2.$read_times;
echo $green2."\n●▬▬▬▬▬▬▬▬▬▬▬▬ஜ۩۞۩ஜ▬▬▬▬▬▬▬▬▬▬▬▬●\n";
for ($time=15; $time>0; $time--){
echo "\r                                \r";
echo $green2."tunggu ".$putih."$time".$green2." detik";
sleep(1);
}
echo "\r                                \r";
$i++;
}


$i = 1;
while($i < 100)
{
$ua = array(
"User-Agent: ".$user_agent,
"Host: task.idtopnews.com",
"content-type: text/plain;charset=utf-8",
"Cookie: ".$cookie,
"Sign: ".$sign4,
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://task.idtopnews.com/v1/tasks/reading/reward");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data4);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$r= curl_exec($ch);
$r = json_decode($r);

$user_id = $r->data->bonus->params->user_id;
$id = $r->data->bonus->params->id;
$value = $r->data->bonus->params->value;
$content_id = $r->data->bonus->params->content_id;
$read_times = $r->data->bonus->params->read_times;
echo $yellow2."\nUser_id    : ".$green2.$user_id;
echo $yellow2."\nId         : ".$green2.$id;
echo $yellow2."\nReward     : ".$green2.$value.$yellow2." Coin";
echo $yellow2."\nContent_id : ".$green2.$content_id;
echo $yellow2."\nRead_times : ".$green2.$read_times;
echo $green2."\n●▬▬▬▬▬▬▬▬▬▬▬▬ஜ۩۞۩ஜ▬▬▬▬▬▬▬▬▬▬▬▬●\n";
for ($time=15; $time>0; $time--){
echo "\r                                \r";
echo $green2."tunggu ".$putih."$time".$green2." detik";
sleep(1);
}
echo "\r                                \r";
$i++;
}



$i = 1;
while($i < 100)
{
$ua = array(
"User-Agent: ".$user_agent,
"Host: task.idtopnews.com",
"content-type: text/plain;charset=utf-8",
"Cookie: ".$cookie,
"Sign: ".$sign5,
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://task.idtopnews.com/v1/tasks/reading/reward");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data5);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$r= curl_exec($ch);
$r = json_decode($r);

$user_id = $r->data->bonus->params->user_id;
$id = $r->data->bonus->params->id;
$value = $r->data->bonus->params->value;
$content_id = $r->data->bonus->params->content_id;
$read_times = $r->data->bonus->params->read_times;
echo $yellow2."\nUser_id    : ".$green2.$user_id;
echo $yellow2."\nId         : ".$green2.$id;
echo $yellow2."\nReward     : ".$green2.$value.$yellow2." Coin";
echo $yellow2."\nContent_id : ".$green2.$content_id;
echo $yellow2."\nRead_times : ".$green2.$read_times;
echo $green2."\n●▬▬▬▬▬▬▬▬▬▬▬▬ஜ۩۞۩ஜ▬▬▬▬▬▬▬▬▬▬▬▬●\n";
for ($time=15; $time>0; $time--){
echo "\r                                \r";
echo $green2."tunggu ".$putih."$time".$green2." detik";
sleep(1);
}
echo "\r                                \r";
$i++;
}
