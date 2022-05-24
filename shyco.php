<?php
#:@sh_yc 
#:@shyco1
ob_start();
define('5367438147:AAEFBmlD3ZdkAGsKGll5wIgsEKhzItyenMk');
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$filterlist = file_get_contents("data/$chat_id/filter.txt");
$name = $message->from->first_name;
$fwd = $message->forward_from_chat->id;
$new_member = $update->message->new_chat_member; 
$left = $update->message->left_chat_member; 
$textmsg = $message->text;
$message_id = $message->message_id;
$userrr = "test_shyco_php_bot";
$text = $message->text;
$rep = $message->reply_to_message; 
$rep_msg = $rep->message_id; 
$get = file_get_contents('file.txt');
$ex = explode("\n", $get);
$count = count($ex);
$type = $update->message->chat->type;
$re = $update->message->reply_to_message;
$re_id = $update->message->reply_to_message->from->id;
$re_user = $update->message->reply_to_message->from->username;
$user_id = $update->message->from->id;
$re_name = $update->message->reply_to_message->from->first_name;
$re_msgid = $update->message->reply_to_message->message_id;
$name = $message->from->first_name;
$username = $message->from->username;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->message->message_id;
$id = $message->from->id;

 if($text == '/start'){ 
bot('sendphoto',[
'chat_id'=>$chat_id,
photo =>"https://t.me/shecoxx/5",
'caption'=>'ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
🎤╖ أهلآ بك عزيزي أنا بوت تيست
⚙️╢ وظيفتي حماية المجموعات
✅╢ لتفعيل البوت عليك اتباع مايلي 
🔘╢ أضِف البوت إلى مجموعتك
⚡️╢ ارفعهُ » مشرف
⬆️╜ سيتم ترقيتك مالك في البوت
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــ', 
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'ᴅᴇᴠ ɴᴀᴍᴇ','url'=>'https://telegram.me/jankees7'],['text'=>'sᴏᴜʀᴄᴇ ᴊᴀɴᴋᴇᴇs','url'=>'https://telegram.me/janke3s']],
[['text'=>'أضف البوت لمجموعتك ➕','url'=>'https://telegram.me/Snsbndjdbd_bot?startgroup=start']],
]])]);}

if($text == 'بوت'){ 
bot('sendphoto',[
'chat_id'=>$chat_id,
photo =>"https://t.me/janke3s/1222",
'text'=>' اسمي $namebot 🌚♥️ ',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'أضف البوت لمجموعتك ➕','url'=>'https://telegram.me/Snsbndjdbd_bot?startgroup=start']],
]])]);}

if($text == 'سورس'){ 
bot('sendphoto',[
'chat_id'=>$chat_id,
photo =>"https://t.me/janke3s/1222",
'caption'=>'⧾ ‹ ᴡᴇʟᴄᴏᴍᴇ ᴛᴏ sᴏᴜʀᴄᴇ ᴊᴀɴᴋᴇᴇs ›

⧾ ғɪʟᴇs [‹ ɢʀᴜᴘ ›](t.me/SH_YC)

⧾ ᴛᴡᴀsʟ [‹ ᴅᴇᴠ ᴊᴀɴᴋᴇᴇs ›](t.me/jankees7)

⧾ ᴄʜᴀɴɴᴇʟ [‹ ᴛᴇᴀᴍ ᴊᴀɴᴋᴇᴇs ›](t.me/janke3s)', 
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'أضف البوت لمجموعتك ➕','url'=>'https://telegram.me/Snsbndjdbd_bot?startgroup=start']],
]])]);}

$shyco = 5396185830;
$message = $update->message;
$id = $message->from->id;
$name = $message->from->first_name;
$user = $message->from->username; 
$ng = $message->chat->title;
if($text == "مبرمج السورس" or $text == "شيكو") {
bot('sendphoto',[
'chat_id'=>$chat_id, 
photo =>"https://t.me/shyco1",
'caption'=>'
‹ معلومات المبرمج شيكو ›
',
'reply_to_message_id'=>$message->message_id,
]);
bot('sendphoto',[
'chat_id'=>$shyco,
'text'=>"- 
مرحباآ عزيزي {المبرمج شيكو} هناك شخص يحتاج الي المساعده 🙋‍♂️

» - اسم المجموعة ؛  { $ng }

» - ايدي المجموعة ؛  { $chat_id }

» - اسم الشخص ؛  { $name }

» - معرف الشخص ؛  { @$user }

» - ايدي الشخص ؛  { $id }

- 🔺┇محتوى الرسالة 📝📡

$text
",
]);
}