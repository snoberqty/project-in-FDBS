<?php 
session_start();

  include("connection.php");
  include("functions.php");

  $user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
  <title>Life</title>
</head>
<style>
  body{
    background-image: url('two.jpg');
    background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover; 
      }
    
</style>
<body>

  <img src="drei.jpg" width="200" height="200" />
 

  
  <h1>JOHN ANDREI MANALO</h1>
  <h1>ALAMAT NG PINYA</h1>

<div style="color: black;">
  <br>
  Hello, <?php echo $user_data['user_name']; ?>   <br> Noong unang panahon ay my mag inang naninirahan sa lib-lib na lugar sa laguna. Ang mag inang si aling Rosa at Pinang, si Pinang ang ka isa isang anak ni aling Rosa kaya mahal na mahal niya ito at lahat ng hilingin ni Pinang ay ibinibigay ni aling Rosa.
  Wala nang mhihiling pa si Pinang sa pag aarugang ibinibigay ng kanyang ina na si aling Rosa. Halos lahat ng kailangan niya'y nakahanda na sa araw-araw at walang oras na hindi siya inaasikaso ni aling Rosa. At dahil sa mahal na mahal siya ng kanyang nina ay minabuti nitong turuan si Pinang ng mga gawaing bahay upang bata palang ay matuto na siya. Ngunit laging kinakatwiran ni Pinang na alam na nya ang mga gawaing bahay, Kaya't pinabayaan nalang niya si Pinang. Isang araw umuwi si Pinang galing sa palaruan at inabutan nya ang kanyang ina na nag lilinis ng bahay.</br>
  <br>Pinang anak tulungan mo nga ako maglinis ng bahay at para lang sumasama ang aking katawan" sambit ni aling Rosa."Pero inay pagod din ako galing sa laruan" agad na sagot ni Pinang at sabay talikod sa ina at dumeretso sa kanyang silid.</br>
  <br>Kaya ala ng nagawa si aling Rosa kundi ipag patuloy ang paglilinis ng bahay, at si Pinang naman ay sa sobrang pagod sa paglalaro ay nakatulog sa kanyang higaan. Nang magising si Pinang ay magtatakip silim na kaya agad siyang lumabas ng silid upang hanapin si aling Rosa, ngunit wala ito sa sala pati narin sa kusina kaya nagtuloy si Pinang sa silid ng kanyang ina at doon niya natagpuan si aling Rosa na nakahiga sa kanyang papag. lumapit si Pinang upang gisingin ang kanyang ina upang itanong kung ano ang kanilang hapunan.
  Ngunit sa pag sayad ng kanyang palad sa braso ni aling Rosa ay bigla syang nagulat dahil sa sobrang init ng kanyang ina.</br>
  <br>Inay.. inay.. ang sbi ni Pinang" agad namang nagising si aling Rosa.
  "Anak mataas ang lagnat ko at masakit ang aking katawan, maaari mo ba akong ipag- lugaw" sambit ni aling Rosa. At mabilis namang sumunod si pinang at nag salang siya ng lugaw, ngunit sa kanyang pag lalaro ay nakalimutan na niya na my lugaw siyang niluluto, Kaya nanikit ito sa palayok at nasunog. Nag Pasensya nalang si aling Rosa, napagsilbihan naman siya kahit papaano ng kanyang anak.</br>
  <br>Umabot ng matagal ang sakit ni aling Rosa kaya napilitan si pinang na gumawa ng mga gawaing bahay. Isang araw sa kanyang pagluluto hindi niya makita ang posporo kaya itinanong niya ky aling Rosa kung nasaan ito. Nang sumunod na araw naman ay sandok naman ang kanyang hinahanap sa kanyang ina. At halos araw araw ay wala siyang ginawa kundi tanungin si aling Rosa sa mga bagay na hindi pa niya sinusubukang hanapin ng mabuti. Kaya nayamot si aling Rosa sa kakatanong ni pinang, kaya't na wika niya na. "Naku Pinang, sanay magkaroon ka ng maraming mata at nang makita mo ang lahat ng mga bagay at hindi ka tanong ng tanong sa akin." Dahil alam niyang galit ang kanyang ina ay dinalang umimik si Pinang at naisip din niya na my pag kakamali siya, kaya nag paalam na siya sa kanyang ina upang hanapin ang sandok.
  gunit kinagabihan ay tinatawag ni aling Rosa si Pinang ngunit walang sumasagot, kaya napilitan siyang bumangon at nag handa ng pagkain. </br>
  <br>Pagkaraan ng ilang araw ay magaling na si aling Rosa subalit ganundin katagal nawawala si Pinang. Kaya agad itong pumunta sa mga kalaro ni pinang at pati sa mga kapit bahay ay ipinag tanong niya ito. subalit walang makapag sabi o makapag turo kung nasaan si Pinang. At malungkot siyang umuwi patungo sa kanilang tahanan ng matanaw niya ang isang napakagandang halaman na noon lamang niya nakita ang ganung klaseng halaman.Kayat inalagaan niya ito ng mabuti tulad ng pag aaruga at pag aalala sa anak niyang si pinang. At hindi nagtagal ay lumaki ang halaman at nag bunga ito, na ikinagulat ni aling Rosa nang makita niya ang hugis nito, ay mistulang ulo ng tao na napapalibutan ng maraming mata.</br>
  <br>Biglang naalala ni aling Rosa ang huli niyang sinambit sa kanyang anak na si Pinang, na sana'y magkaroon ito ng maraming mata para makita ang kanyang mga hinahanap. At sabay ang pag agos ng napakaraming luha sa kanyang mga mata, at laking pagsisi niya dahil sa tumalab ky Pinang ang kanyang mga winika. Kaya lalo niyang inalagaang mabuti ang halamang ito at tinawag niyang Pinang. At sa haba ng panahon at sa pagsalin-salin ng mga kawikaan itoy tinawag na "PINYA"</br></div>





  </body>
  </html>
  <a href="logout.php">
  <button>LOGOUT</button>
</a>
