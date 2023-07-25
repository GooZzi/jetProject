$body = file_get_contents('php://input'); 
$arr = json_decode($body, true); 
 
include_once ('telegramgclass.php');   

$tg = new tg('bot6365069296:AAFIUYKuOr1OPg3datUM6prHNUD6u03V2sg');

$chat_id = $arr['message']['chat']['id'];
$userTgId = $arr['message']['from']['id'];
$text = $arr['message']['text'];
$coord1 = $arr['message']['location']['latitude'];
$coord2 = $arr['message']['location']['longitude'];

$tg->send($chat_id, "Нас не догонят!");
