<?php
include 'class.php';
$init = new RndyTech;
echo
"

__        _____ _     _     ___    _    __  __
\ \      / /_ _| |   | |   |_ _|  / \  |  \/  |
 \ \ /\ / / | || |   | |    | |  / _ \ | |\/| |
  \ V  V /  | || |___| |___ | | / ___ \| |  | |
   \_/\_/  |___|_____|_____|___/_/   \_\_|  |_|
   
____  _____ ____ ____  _   _ _   _____
|  _ \| ____/ ___/ ___|| | | | | |_   _|
| |_) |  _| \___ \___ \| | | | |   | |
|  _ <| |___ ___) |__) | |_| | |___| |
|_| \_\_____|____/____/ \___/|_____|_|

 _   _   _ _____ ___
   / \ | | | |_   _/ _ \
  / _ \| | | | | || | | |
 / ___ \ |_| | | || |_| |
/_/   \_\___/  |_| \___/


=====================================
NAMA - NAMA CODE & TAMPILAN NYA
CODE | NAMA TAMPILAN
ㅤG  = Codashop FF Log FB Only
ㅤV  = MediaFire
ㅤM  = Mobile Legends
=====================================
copyright ©2022 WILLIAMHOST
=====================================
DI GUNAKAN SECUKUPNYA JANGAN SAMPE JEBOL
SMTP MU BROH(•‿•)

";
echo "\n";
$z = 0;
$h = "\e[0;32m";
$p = "\e[1;37m";
sleep(2);
echo "╔╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤\n";
echo "╟\n";
echo "╟> URL  >_: ";
$website = trim(fgets(STDIN));
echo "╟> Msg  >_: ";
$pesan = trim(fgets(STDIN));
echo "╟> Amount  >_: ";
$batas = trim(fgets(STDIN));
echo "╟\n";
echo "╟\n";
echo "╚╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧\n";
echo "╔╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤\n";
echo "╟\n";
echo "╟> URL : $website \n";
echo "╟> Ip Address : 40.83.78.143 \n";
echo "╟> Status : 200 \n";
echo "╟> Reason : OK \n";
echo "╟> Able To Spam : $h Yes $p\n";
echo "╟\n";
echo "╚╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧\n";
echo "╔╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤\n";
echo "╟\n";
echo "╟> Continue Spam Y/N : ";
$Jwb = trim(fgets(STDIN));
echo "╟\n";
echo "╚╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧\n";
sleep(2);
$y = 1;
$msg = "AutoRessByRndyTech";
while($y <= $batas)
{
    echo ''.$init->RndySpam($website,$msg);
    if($y == $batas){
    echo "+\n";
    echo "=> $batas Result Terkirim ® RndyTech \n";
    echo "+\n";
    echo "+++++++++++++++++++++++++++++++++++++++++++++++++++\n";
    }
 $y++;
}
?>