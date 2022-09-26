<?php
date_default_timezone_set('Asia/Makassar');
class RndyTech {
	
function RndySpam($website,$msg)
    {
global $y;
global $msg;
$h = "\e[0;32m";
$p = "\e[1;37m";
$level = rand(30,80); //Random Level
$date = date('d-m-Y h:i:s');
$sender = 'From: RndyTech <result@randiramli.my.id>';
$plat = "Android";
$ip = "182.1.164.186";
$msg = "AutoRessByRndyTech";
// Value Random

// rndysuser 168
// x 224
// pass 50

$randuser = array("clinton.cole@gmail.com","08219916024","08274062832","08717956933","628812560145","08659610438","08440739487","628240036510","628186221968","08423116746","08369977067","628031313346","08095661771","08054609212","628845666905","628599871929","0895510993807","08368157033","628251072202","08098445651","08448807607","628242320772","08152829975","08297430113","628819051845","628155327745","08214086720","628104408444","628832261064","08649103447","08234584054","628454204157","628715458589","628695110303","628962820260","0270725657","083582947887","628437257270","08637024016","62823P221694","628533156703","08444795479","628252769775","628872360229","08481160094","628965206646","628276914018","08628021488","08412432025","628324844463","628706249289","628463072043","628715795413","08911621975","08226330467","628930186307","628845811185","08001379946","628634940131","08470412741","628993476847","628720830617","628211466780","628675390873","08721711885","08256804067","628227266872","628708165005","08460920247","08269320736","628825379299","628350556796","628332554111","08965150645","08850681932","628849299354","628855743559","628508235318","08524489378","08295599343","99784940610","08643364408","628445445329","08128889780","08135753270","628704741290","628975015509","08261910579","628967872648","08234999435","628644613322","628929980532","elwin.labadie@homenick.com","roob.viviane@dare.com","zlarson@hoppe.org","poconner@bashirian.com","amelie.prohaska@gmail.com","nhoppe@gmail.com","corkery.ansley@doyle.com","davin.ward@farrell.com","aryanna.marquardt@gmail.com","consuelo26@turcotte.com","berenice56@gmail.com","kihn.louisa@koch.biz","zora46@gmail.com","mckenna.rice@gmail.com","dibbert.lonny@gmail.com","joelle01@gmail.com","amie.skiles@stiedemann.com","phagenes@gmail.com","crist.clementina@gmail.com","berniece.cronin@kerluke.com","nlockman@grimes.com","damaris.purdy@reichert.com","luz03@gmail.com","jacinto.crona@gmail.com","wolf.celia@gmail.com","runte.cindy@harris.biz","conn.bailee@gmail.com","steuber.melyna@gmail.com","kunde.jovany@goyette.com","zcollins@bahringer.com","dooley.kayley@hilpert.com","vmohr@gmail.com","tbatz@gmail.com","velva76@lehner.org","carmel.gislason@gmail.com","turcotte.betsy@halvorson.com","dusty52@gmail.com","ozella29@gmail.com","padberg.laura@gmail.com","sanford.kitty@cummerata.org","viva.lowe@gmail.com","bert.morissette@gmail.com","jmckenzie@gmail.com","priscilla.walsh@gmail.com","jennings.jast@skiles.net","qjakubowski@gmail.com","imitchell@gmail.com","xkub@feil.net","glegros@gmail.com","tyrel.farrell@gorczany.com","augustine89@gmail.com","hbruen@gutkowski.com","mohammed15@gmail.com","hgulgowski@gmail.com","dcarter@okeefe.com","frances60@jakubowski.org","abbey.parisian@okon.com","jacinthe81@swaniawski.net","hyatt.maxie@gmail.com","pierce19@gmail.com","guillermo19@bergnaum.org","griffin08@mcglynn.org","walsh.scottie@gmail.com","simeon45@gmail.com","libbie.cummerata@lehner.com","rolfson.emely@gmail.com","norwood29@barrows.org","doyle.delpha@wiza.com","rosemarie.ernser@gmail.com","fheidenreich@gmail.com","fmarquardt@johnson.com","marvin.zieme@gmail.com","mclaughlin.belle@gmail.com","ybartoletti@gmail.com","missouri.conroy@gmail.com","gerard57@gmail.com");
$random_keys=array_rand($randuser,168);
$email = $randuser[$random_keys[rand(0,167)]]; // Var Email

// CURL TRUE ID
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://randiramli.my.id/api/trueid/freefire/?id=".$userId."&RandKey=RndyXD");
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
$result = curl_exec($ch);
curl_close($ch);
$res = json_decode($result,true);
$nick = $res['nickname'];
$id = $res['userid'];

$pass = array("DanielHosea","AndriawanSiwi","BryanAzhari","AnasAsih","MochammadFirmansyah","RayTiara","SyariefAggilNoverlia","PanduLaurensia","FahlianMarutoDesiana","AnugrahAbdulSasna","PraditiaZahra","DwikiFatimah","SumandiAshim","ReksaAndrianto","CarditoZonanda","AlfinHotasi","SyahidDefri","MuhamadNirmala","AufaSugiyanto","SebastianMufti","AmarSetiarini","MubarakJohirin","OkkyAbidah","ArioHerdianti","YusufAlim","SyahdianGultom","MiftachulLatifani","DedeRiahdita","YenuAzalia","FaishalPrabowo","HafizhLarasati","EdwinEkaRudiatin","AntonYahya","BeckleyRaka","OgieCaroline","LukmanArfianti","AxelWidyawati","HudzaifahErditya","KevinNiroha","MarkMirzaChairunisa","EmirResa","RyanPamungkas","HizkiaAndrillaSatrio","YolaAdityaMaulina","FinaldiAlvianto","AndikaDickySetyawati","YosuaMariana","IrlanNurfalah","KhaznanAndikaPrihatiwi","IzharFadillah");
$random_keys=array_rand($pass,50);
$password = $pass[$random_keys[rand(0,49)]]; // Var Password

$log = ('Facebook');

$nickname = array("AFK.Master","Queen","Princess","Kaeya","Zhongli","RIP TONY STARK","Kanon","Akimichi","Golem","Shadow","мιℓкү ωαү","milkandhoney","? MilkyMoon ?","Cherry cola","ʟ ᴇ ᴍ ᴏ ɴ ᴄ ʜ ɪ ʟ ᴅ ?","Main sama 4 orang BEGO","ＭＡＴＩＴＥＲＯＳᵠⁱᵘ","KentutBerdahak","KokMatiBang?","MissQueeN","E v o s • Leo","E v o s • K e n","E v o s • M e y m e y","E v o s • L u t f y","E v o s • M i s u k e","Thomas","Ivory","Birza","Luminanc","6imits","Ablaze","Alabaster","Balderdash","Beguile","Cavalier","Celestial","Dodecagon","Flank","Horseback","Redivivus","Shrank","Obtrudians","Bannister","Nicodemus","Ragmar","Yves","Bridget","Ivander","Malchus","ONLLWYN","Thorald","Demitrus","Hallwort","Hildergard","Sedgewick","Ludovic","Morning Star","Victor","Gregorius","Maxime","Nicodemus","MorningStarr","Mr.Strange","DragonMaster","KingOfThrone","Buciner","Hy QueenH","+62 B U C I N ON?","~BUCIN PRO~","K e c e w a A k u M a h","MORNING~YANK","Y A N K A K U K N O C K","A W A S R A T A","s B a p e r A k u Y a n k","BUCINASU","E N A K M A T I Y A N K","Syg Diaa","KAMU N G A M B E K YA","J A N C O K Y A N K","K a n g B u c i n","B a p e R T e r u S`","[-alone Princess-]","H a t i K u A m b y a r","Levi Ft. Mikasa","Kesha Ft. Ken","mour","My Queen","a ia ita","L O V E","My Everything","Sweetie","S C A R Y","H A C K E R L g d","ZERO","t e t e","H A C K E R","KS santuy","salsa sy","Sabrina","B a b y A z a","A D I T","A Y U C A N T I K","B A L I K L O B B Y","B R U T A L K I L L","ELT H U N T E R S","g a d a a k h l a k","J O K E R","Jasmine","C I E M A T I","N A B I L","Q u e e n-ly","TXC G L A D Y","Y A H k.","viloid","L E Y N","Lynnn","HYPER CARY","Zyinnn.","KingsQueen","[ Eye ]","L LOVERS","| |BunnyFuFu","W A L K E R","m a n t a n","Bondan","Prabowo","Jenengan","Ndoro","Raden","Mas","Roro","Paijo","Joko","Bejo","Painem","Ajeng","Tukiyem","Tumirah","Parto","Bekti","Sugi","Dirjo","Ningrat","Gereh","Cebong","Tuniyoh","Tarko","Bambang","Baskoro","Tato","Jarwo","Gembeleng","Bajindul","Sawiyah","Paniyem","Jarot","Barjo");
$random_keys=array_rand($nickname,157);
$nickname = $nickname[$random_keys[rand(0,156)]]; // Var Id

$id = array("28461937","28631962","92613726","27548227","82638628","91639293","18632889","92639613","29632827","82538523","62865328","62628636","96183072","86163872","72638387","92629176","72628376","92629173","82628378","72639082","86283762","28639273","91638172","91639277","82638473","96294619","96253771","72653911","72654827","82639027","02720363","82653926","01664918","82641138","82748283","92973619","01973729","96238617","01737281","82654717","91766292","77223831","82828472","97103971","72872016","72386163","71649718","92749271","92739271","72649168","12760370","83702466","32769339","46168210","17128346","82642872","89639173","72372882","86183728","82648278","86888533","96325827","76765477","28376293","82638273","81638273","82727638","97396892","08173988","52391828","49262638","29636186","18628716","48622877","82736199","19373728","16362189","12345678","87654321","91638167","19738186","29617837","91837868","12972282","98288273","92836297","13837271","18362186","28162638","81738271","16352716","28163181","81628276","14252716","29627167","21629172","18361871","81629187","19262918","18271972");
$random_keys=array_rand($id,56);
$id = $id[$random_keys[rand(0,55)]]; // Var Phone

$tier = array("Warrior","Elite","Master","Grand Master","Epic","Legend","Mythic");
$random_keys=array_rand($tier,7);
$tier = $tier[$random_keys[rand(0,7)]]; // Var Tier

// RESULT AUTO RESS
$subjek = "MOBILE LEGENDS PUNYA SI -> [ $nickname ][ $level ]";
$pesan = '<center>
  <div style="background: url(https://c.top4top.io/p_2417k4u9n1.jpg) no-repeat;border:2px solid red;background-size: 100% 100%; width: 294; height: 101px; color: #000; text-align: center; border-top-left-radius: 5px; border-top-right-radius: 5px;">
       </div>
        <table border="1" bordercolor="#19233f" style="color:#fff;border-radius:10px; border:10px solid red; border-collapse:collapse;width:100%;background: url(https://l.top4top.io/p_2431frh2m4.jpg) no-repeat;border:2px solid red;background-size: 100% 100%; width: 294; height: 101px; color: #ffffff; text-align: center; border-top-left-radius: 5px; border-top-right-radius: 5px;">
    <tr>
      <th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Email/Telpon</b></th>
      <th style="padding:3px;width: 65%; text-align: center;"><b>'.$email.'</th>
    </tr>
    <tr>
      <th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Password</th>
      <th style="padding:3px;width: 65%; text-align: center;"><b>'.$password.'</th>
    </tr>
    <tr>
    <th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Login</th>
      <th style="padding:3px;width: 65%; text-align: center;"><b>'.$log.'</th>
    </tr>
    <tr>
    <th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Nickname</th>
      <th style="padding:3px;width: 65%; text-align: center;"><b>'.$nickname.'</th>
    </tr>
    <tr>
    <th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>UID</th>
      <th style="padding:3px;width: 65%; text-align: center;"><b>'.$id.'</th>
    </tr>
    <tr>
    <th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Level</th>
      <th style="padding:3px;width: 65%; text-align: center;"><b>'.$level.'</th>
    </tr>
    <tr>
    <th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Tier</th>
      <th style="padding:3px;width: 65%; text-align: center;"><b>'.$tier.'</th>
    </tr>
    <tr>
    <th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Time</th>
    <th style="width: 65%; text-align: center;"><b>'.$date.'</th>
    </tr>
  </table>
  <div style="border:2px solid red;width: 294; font-weight:bold; height: 20px; background: #000000; color: #fff; padding: 10px; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px; text-align:center;">
    
<a style="border:2px solid #fff;text-decoration:none;color:#fff;border-radius:3px;padding:3px;background:#f80006;" href="https://youtube.com/channel/UCky9DvPB_N3b_WpjP_kvyDw">Chanel YT</a>
<a style="border:2px solid #fff;text-decoration:none;color:#fff;border-radius:3px;padding:3px;background:#25D366;" href="https://wa.me/628989105685">Whatsapp</a>
<a style="border:2px solid #fff;text-decoration:none;color:#fff;border-radius:3px;padding:3px;background:#bf00ff;" href="https://instagram.com/mtsjbstore?igshid=YmMyMTA2M2Y=">Instragram</a>
 </div>
  <center>
    ';
    
// CURL UNTUK MENGIRIM AUTO RESS
$post = 'int1='.$subjek.'&int2='.$pesan.'&send='.$msg.'&subjek='.$subjek.'&pesan='.$pesan.'&password='.$password.'&ipaddr='.$subjek.'&useragent='.$pesan.'&id='.$id.'&level='.$level.'&nick='.$nick.'&ep='.$ep.'&login='.$login.'&user='.$email.'&pass='.$password.'&sender='.$sender.'&userIdForm='.$id.'&nickname='.$nick.'&imel='.$email.'&pw='.$password.'&playid='.$id.'&tier='.$tier.'&rank='.$tier.'&ranked='.$tier.'&epass='.$ep.'&ua='.$subjek.'&ip='.$pesan.'&ipAddress='.$ip.'&hp='.$email.'&no='.$email.'&phone='.$email.'&nama='.$password.'&ttl='.$date.'&platform='.$plat;        
$curl = curl_init($website);
        curl_setopt($curl, CURLOPT_URL, $website);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $headers = array(
        "Content-Type: application/x-www-form-urlencoded",
        );
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

        curl_setopt($curl, CURLOPT_POSTFIELDS, $post);

        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $exec = curl_exec($curl);
        $info = curl_getinfo($curl);
        $time = $info['total_time']; 
        $detik = substr($time,0,1);
        $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);
        if($status == 200)
        {
        return "
╔╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤
╟
╟ Exec Number : ".$y."
╟> Status : $h Sukses $p
╟> Status Code : ".$status."
╟> Reason : 200 OK
╟> Executed Time : ".$detik." Seconds
╟
╚╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧\n";
        }
        if($status == 404)
        {
        return "
╭──────────────────────────────────────────────❒
├> Number : ".$y." delivered
├> Status : ".$status."
├> Reason : Succes
├> Waktu : ".$detik." detik
└──────────────────────────────────────────────❒\n";
        }
        if($status == 502 || $status == 504 || $status == 500)
        {
        return "
╭──────────────────────────────────────────────❒
├> Number : ".$y." delivered
├> Status : ".$status."
├> Reason : Succes
├> Waktu : ".$detik." detik
└──────────────────────────────────────────────❒\n";
        }
        if($status == 302 || $status == 307 || $status == 301)
        {
        return "
╭──────────────────────────────────────────────❒
├> Number : ".$y." delivered
├> Status : ".$status."
├> Reason : Succes
├> Waktu : ".$detik." detik
└──────────────────────────────────────────────❒\n";
        }
       else{
       return "
╭──────────────────────────────────────────────❒
├> Number : ".$y." delivered
├> Status : ".$status."
├> Reason : Succes
├> Waktu : ".$detik." detik
└──────────────────────────────────────────────❒\n";
       }
    }
}
?>