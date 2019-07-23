<? 
// ----------------------------конфигурация-------------------------- // 
 
$adminemail="m.perekhid@gmail.com";  // e-mail админа 
$headers = "Content-type: text/html; charset=windows-1251\r\n";
 
$date=date("d.m.y"); // число.месяц.год 
 
$time=date("H:i"); // часы:минуты:секунды 
 
$backurl="http://perekhid.te.ua";  // На какую страничку переходит после отправки письма 
 
//---------------------------------------------------------------------- // 
 
  
 
// Принимаем данные с формы 
 
$przv=$_POST['przv']; 
 
$name=$_POST['name']; 

$tele=$_POST['tele'];
 
$email=$_POST['email']; 
 
$gromd=$_POST['gromd']; 

$age=$_POST['age'];

$soc=$_POST['soc'];

$contry=$_POST['contry'];

$child=$_POST['child'];

$zvernen=$_POST['zvernen'];

$leng=$_POST['leng'];

$leng1=$_POST['leng1'];

$ang1=$_POST['ang1'];

$ang2=$_POST['ang2'];

$ang3=$_POST['ang3'];

$ang4=$_POST['ang4'];

$fran1=$_POST['fran1'];

$fran2=$_POST['fran2'];

$fran3=$_POST['fran3'];

$fran4=$_POST['fran4'];

$zaklad=$_POST['zaklad'];

$data_vstp=$_POST['data_vstp'];

$data_zak=$_POST['data_zak'];

$fach=$_POST['fach'];

$kvalif=$_POST['kvalif'];

$robota_kanada=$_POST['robota_kanada'];

$robota_ukraine=$_POST['robota_ukraine'];

$kan_prop=$_POST['kan_prop'];

$rod_kanad=$_POST['rod_kanad'];


$przv_dru=$_POST['przv_dru']; 
 
$name_dru=$_POST['name_dru']; 
 
$email_dru=$_POST['email_dru']; 
 
$gromd_dru=$_POST['gromd_dru']; 

$age_dru=$_POST['age_dru'];

$contry_dru=$_POST['contry_dru'];

$zvernen_dru=$_POST['zvernen_dru'];

$leng_dru=$_POST['leng_dru'];

$leng1_dru=$_POST['leng1_dru'];

$ang_dru=$_POST['ang_dru'];

$ang1_dru=$_POST['ang1_dru'];

$ang2_dru=$_POST['ang2_dru'];

$ang3_dru=$_POST['ang3_dru'];

$ang4_dru=$_POST['ang4_dru'];

$fran1_dru=$_POST['fran1_dru'];

$fran2_dru=$_POST['fran2_dru'];

$fran3_dru=$_POST['fran3_dru'];

$fran4_dru=$_POST['fran4_dru'];

$zaklad_dru=$_POST['zaklad_dru'];

$data_vstp_dru=$_POST['data_vstp_dru'];

$data_zak_dru=$_POST['data_zak_dru'];

$fach_dru=$_POST['fach_dru'];

$kvalif_dru=$_POST['kvalif_dru'];

$robota_kanada_dru=$_POST['robota_kanada_dru'];

$robota_ukraine_dru=$_POST['robota_ukraine_dru'];

$kan_prop_dru=$_POST['kan_prop_dru'];

$rod_kanad_dru=$_POST['rod_kanad_dru'];






 
  
 
// Проверяем валидность e-mail 
 
if (!preg_match("|^([a-z0-9_\.\-]{1,20})@([a-z0-9\.\-]{1,20})\.([a-z]{2,4})|is", 
strtolower($email))) 
 
 { 
 
  echo 
"<center>Вернитесь <a 
href='javascript:history.back(1)'><B>назад</B></a>. Вы 
указали неверные данные!"; 
 
  } 
 
 else 
 
 { 
 
 
$msg=" 
 
<p><h2>Контактна інформація:</h2></p> 

<p>Прізвище: $przv</p>

<p>Ім`я: $name</p> 
  
<p>Телефон: $tele</p> 
  
<p>E-mail: $email</p> 
 
<p>Громадянство: $gromd</p> 

<p><h2>Персональна інформація:</h2></p> 

<p>Вік: $age</p> 

<p>Соціальний статус: $soc</p> 

<p>Країна постійного проживання: $contry</p>

<p>Наявність дітей, їх вік: $child</p> 
 
<p><h3>Попередні звернення до посольства Канади:</h3></p> 

<p>info: $zvernen</p> 

<p><h2>Володіння мовами:</h2></p>

<p>Мови: $leng,$leng1</p> 

<p>Рівень англійська: $ang1$ang2,$ang3,$ang4</p> 

<p>Рівень французька: $fran1,$fran2,$fran3,$fran4</p> 


<p><h2>Освіта:</h2></p>


<p>Навчальний заклад: $zaklad</p> 

<p>Дата вступу: $data_vstp</p> 

<p>Дата закінчення: $data_zak</p> 

<p>Фах: $fach</p> 

<p>Кваліфікація: $kvalif</p> 

<p><h2>Робота:</h2></p>

<p><b>Канада:</b> $robota_kanada</p> 

<p><b>Україна (інші країни) за останні 10 років:</b> $robota_ukraine</p> 

<p>Родичі в канаді: $rod_kanad</p> 



<p><h2>Дані Дружини:</h2></p>




<p>Прізвище: $przv_dru</p>

<p>Ім`я: $name_dru</p> 
  
<p>E-mail: $email_dru</p> 
 
<p>Громадянство: $gromd_dru</p> 

<p>Вік: $age_dru</p> 

<p>Країна постійного проживання: $contry_dru</p>

<p><h3>Попередні звернення до посольства Канади:</h3></p> 

<p>info: $zvernen_dru</p> 

<p><h2>Володіння мовами:</h2></p>

<p>Мови: $leng_dru,$leng1_dru</p> 

<p>Рівень англійська: $ang1_dru,$ang2_dru,$ang3_dru,$ang4_dru</p> 

<p>Рівень французька: $fran1_dru,$fran2_dru,$fran3_dru,$fran4_dru</p> 

<p><h2>Освіта:</h2></p>


<p>Навчальний заклад: $zaklad_dru</p> 

<p>Дата вступу: $data_vstp_dru</p> 

<p>Дата закінчення: $data_zak_dru</p> 

<p>Фах: $fach_dru</p> 

<p>Кваліфікація: $kvalif_dru</p> 

<p><h2>Робота:</h2></p>

<p><b>Канада:</b> $robota_kanada_dru</p> 

<p><b>Україна (інші країни) за останні 10 років:</b> $robota_ukraine_dru</p> 

<p>Родичі в канаді: $rod_kanad_dru</p> 



 
"; 
 
  
 
 // Отправляем письмо админу  
 
mail("$adminemail", "$date $time Анкета Канада від $name,$przv", "$msg",$headers); 
 
  
 
// Сохраняем в базу данных 
 
$f = fopen("message.txt", "a+"); 
 
fwrite($f," \n $date $time Сообщение от $name"); 
 
fwrite($f,"\n $msg "); 
 
fwrite($f,"\n ---------------"); 
 
fclose($f); 
 
  
 
// Выводим сообщение пользователю 
 
print "<script language='Javascript'><!-- 
function reload() {location = \"$backurl\"}; setTimeout('reload()', 6000); 
//--></script> 
 

 
<p>Анкета відправлена! Зачекайте, зараз Ви будете перенаправлені на головнку сторінку...</p>


$msg
"
 
;  
exit; 
 
 } 
 
?>