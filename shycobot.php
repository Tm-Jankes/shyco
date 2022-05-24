<?php
#: @shyco1 
#: @janke3s
ob_start();
define('API_KEY','5391066801:AAF33ymJgxlEl2gyeadtqieibCn4HTZqrDY');
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
@$message = $update->message;
@$from_id = $message->from->id;
@$chat_id = $message->chat->id;
@$message_id = $message->message_id;
@$first_name = $message->from->first_name;
@$last_name = $message->from->last_name;
@$username = $message->from->username;
@$text  = $message->text;
@$firstname = $update->callback_query->from->first_name;
@$usernames = $update->callback_query->from->username;
@$chatid = $update->callback_query->message->chat->id;
@$fromid = $update->callback_query->from->id;
@$membercall = $update->callback_query->id;
@$reply = $update->message->reply_to_message->forward_from->id;
@$data = $update->callback_query->data;
@$messageid = $update->callback_query->message->message_id;
@$tc = $update->message->chat->type;
@$gpname = $update->callback_query->message->chat->title;
@$namegroup = $update->message->chat->title;
@$newchatmemberid = $update->message->new_chat_member->id;
@$newchatmemberu = $update->message->new_chat_member->username;
@$rt = $update->message->reply_to_message;
@$replyid = $update->message->reply_to_message->message_id;
@$tedadmsg = $update->message->message_id;
@$edit = $update->edited_message->text;
@$re_id = $update->message->reply_to_message->from->id;
@$re_user = $update->message->reply_to_message->from->username;
@$re_name = $update->message->reply_to_message->from->first_name;
@$re_msgid = $update->message->reply_to_message->message_id;
@$re_chatid = $update->message->reply_to_message->chat->id;
@$message_edit_id = $update->edited_message->message_id;
@$chat_edit_id = $update->edited_message->chat->id;
@$edit_for_id = $update->edited_message->from->id;
@$edit_chatid = $update->callback_query->edited_message->chat->id;
@$caption = $update->message->caption;
@$statjson = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$from_id),true);
@$status = $statjson['result']['status'];
@$statjsonrt = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$re_id),true);
@$statusrt = $statjsonrt['result']['status'];
@$statjsonq = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chatid&user_id=".$fromid),true);
@$statusq = $statjsonq['result']['status'];
@$info = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_edit_id&user_id=".$edit_for_id),true);
@$you = $info['result']['status'];
@$forchannel = json_decode(file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=@".$channel."&user_id=".$from_id));
@$tch = $forchannel->result->status;
@$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
@$settings2 = json_decode(file_get_contents("data/$chatid.json"),true);
@$editgetsettings = json_decode(file_get_contents("data/$chat_edit_id.json"),true);
@$user = json_decode(file_get_contents("data/user.json"),true);
$gp_get = file_get_contents("Fri3nd_s/groups.txt");
$groups = explode("\n", $gp_get);
$GG1ZZ = file_get_contents("Fri3nd_s/iBadlz.txt");
$pirvate = explode("\n",file_get_contents("Fri3nd_s/pirvate.txt"));
$name = $statjson['result']['user']['first_name'];
$idBot = $idBot;
$infos = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$chat_id&user_id=$idBot"), true);
$bot = $infos['result']['status'];
$can_bot_chang_info = $infos['result']['can_change_info'];
$can_bot_delete =  $infos['result']['can_delete_messages'];
$can_bot_restrict = $infos['result']['can_restrict_members'];
$can_bot_invite = $infos['result']['can_invite_users'];
$can_bot_pin = $infos['result']['can_pin_messages'];
$can_bot_promote = $infos['result']['can_promote_members'];
@$filterget = $settings["filterlist"];
$shyco = 5396185830;
$Dibo = 5378006737;
$oner = 5396185830;5378006737;
$message_id = $message->message_id;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$id = $message->from->id;
$text = $message->text;
$chat_id = $message->chat->id;
$user = $message->from->username;
$name = $message->from->first_name;
$sajad = file_get_contents("shyco.txt");
$ch = file_get_contents("ch.txt");
$tn = file_get_contents("tnb.txt");
$ban = file_get_contents("ban.txt");
$exb = explode("\n",$ban);
$m = explode("\n",file_get_contents("member.txt"));
$m1 = count($m)-1;
$setnamebot = file_get_contents("setname.txt");
$namebot = file_get_contents("namebot.txt");
$message_id = $Message->message_id;
$del = exploda(' ', $text);



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
photo =>"https://t.me/janke3s/1244",
'caption'=>'
*نعم يروحي 🌚🌸*
',
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

⧾ ᴄʜᴀɴɴᴇʟ [‹ ᴛᴇᴀᴍ ᴊᴀɴᴋᴇᴇs ›](t.me/janke3s)
⸺⸺⸺⸺⸺⸺⸺⸺⸺', 
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'أضف البوت لمجموعتك ➕','url'=>'https://telegram.me/Snsbndjdbd_bot?startgroup=start']],
]])]);}

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
bot('sendmessage',[
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

if($text == '/s'){ 
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>"اهلا حبيبي $name📌•
",
'reply_markup'=>json_encode([ 
'keyboard'=>[ 
[['text'=>'✮الحاله - 1'],['text'=>'✮الحاله - 2']],
[['text'=>'✮الحاله - 3'],['text'=>'✮الحاله - 4']],
[['text'=>'✮الحاله - 5'],['text'=>'✮الحاله - 6']],
[['text'=>'✮الحاله - 7'],['text'=>'✮الحاله - 8']],
[['text'=>'✮الحاله - 9'],['text'=>'✮الحاله - 10']],
[['text'=>'✮الحاله - 11'],['text'=>'✮الحاله - 12']],
[['text'=>'✮الحاله - 13'],['text'=>'✮الحاله - 14']],
[['text'=>'✮الحاله - 15'],['text'=>'✮الحاله - 16']],
[['text'=>'✮الحاله - 17'],['text'=>'✮الحاله - 18']],
[['text'=>'✮الحاله - 19'],['text'=>'✮الحاله - 20']],
[['text'=>'✮الحاله - 21'],['text'=>'✮الحاله - 22']],
[['text'=>'✮الحاله - 23'],['text'=>'✮الحاله - 24']],
[['text'=>'✮الحاله - 25'],['text'=>'✮الحاله - 26']],
[['text'=>'✮الحاله - 27'],['text'=>'✮الحاله - 28']],
[['text'=>'✮الحاله - 29'],['text'=>'✮الحاله - 30']],
[['text'=>'حذف الكيبورد ✮']],
] 
]) 
]); 
}

if($text == '/so'){ 
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>"اهلا حبيبي $nameee📌•
",
'reply_markup'=>json_encode([ 
'keyboard'=>[ 
[['text'=>'✮الصوره - 1'],['text'=>'✮الصوره - 2']],
[['text'=>'✮الصوره - 3'],['text'=>'✮الصوره - 4']],
[['text'=>'✮الصوره - 5'],['text'=>'✮الصوره - 6']],
[['text'=>'✮الصوره - 7'],['text'=>'✮الصوره - 8']],
[['text'=>'✮الصوره - 9'],['text'=>'✮الصوره - 10']],
[['text'=>'✮الصوره - 11'],['text'=>'✮الصوره - 12']],
[['text'=>'✮الصوره - 13'],['text'=>'✮الصوره - 14']],
[['text'=>'✮الصوره - 15'],['text'=>'✮الصوره - 16']],
[['text'=>'✮الصوره - 17'],['text'=>'✮الصوره - 18']],
[['text'=>'✮الصوره - 19'],['text'=>'✮الصوره - 20']],
[['text'=>'✮الصوره - 21'],['text'=>'✮الصوره - 22']],
[['text'=>'✮الصوره - 23'],['text'=>'✮الصوره - 24']],
[['text'=>'✮الصوره - 25'],['text'=>'✮الصوره - 26']],
[['text'=>'✮الصوره - 27'],['text'=>'✮الصوره - 28']],
[['text'=>'✮الصوره - 29'],['text'=>'✮الصوره - 30']],
[['text'=>'حذف الكيبورد ✮']],
] 
]) 
]); 
}

if($text == '✮الصوره - 1'){ 
bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"https://t.me/rmxiatshpap/2?single",
'caption'=>"𝐜𝐡 ↝ @janke3s ♡",
'reply_to_message_id'=>$Message->message_id,
 ]);
}

if($text == '✮ الصوره - 2'){ 
bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"https://t.me/rmxiatshpap/3?single",
'caption'=>"𝐜𝐡 ↝ @janke3s ♡",
'reply_to_message_id'=>$Message->message_id,
 ]);
}

if($text == '✮ الصوره - 3'){ 
bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"https://t.me/rmxiatshpap/4?single",
'caption'=>"𝐜𝐡 ↝ @janke3s ♡",
'reply_to_message_id'=>$Message->message_id,
 ]);
}

if($text == '✮ الصوره - 4'){ 
bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"https://t.me/rmxiatshpap/5?single",
'caption'=>"𝐜𝐡 ↝ @janke3s ♡",
'reply_to_message_id'=>$Message->message_id,
 ]);
}

if($text == '✮ الصوره - 5'){ 
bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"https://t.me/rmxiatshpap/6?single",
'caption'=>"𝐜𝐡 ↝ @janke3s ♡",
'reply_to_message_id'=>$Message->message_id,
 ]);
}

if($text == '✮ الصوره - 6'){ 
bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"https://t.me/rmxiatshpap/7?single",
'caption'=>"𝐜𝐡 ↝ @janke3s ♡",
'reply_to_message_id'=>$Message->message_id,
 ]);
}

if($text == '✮ الصوره - 7'){ 
bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"https://t.me/rmxiatshpap/8?single",
'caption'=>"𝐜𝐡 ↝ @janke3s ♡",
'reply_to_message_id'=>$Message->message_id,
 ]);
}

if($text == '✮ الصوره - 8'){ 
bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"https://t.me/rmxiatshpap/9?single",
'caption'=>"𝐜𝐡 ↝ @janke3s ♡",
'reply_to_message_id'=>$Message->message_id,
 ]);
}

if($text == '✮ الصوره - 9'){ 
bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"https://t.me/rmxiatshpap/10?single",
'caption'=>"𝐜𝐡 ↝ @janke3s ♡",
'reply_to_message_id'=>$Message->message_id,
 ]);
}

if($text == '✮ الصوره - 10'){ 
bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"https://t.me/rmxiatshpap/11?single",
'caption'=>"𝐜𝐡 ↝ @janke3s ♡",
'reply_to_message_id'=>$Message->message_id,
 ]);
}

if($text == '✮ الصوره - 11'){ 
bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"https://t.me/rmxiatshpap/12?single",
'caption'=>"𝐜𝐡 ↝ @janke3s ♡",
'reply_to_message_id'=>$Message->message_id,
 ]);
}

if($text == '✮ الصوره - 12'){ 
bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"https://t.me/rmxiatshpap/13?single",
'caption'=>"𝐜𝐡 ↝ @janke3s ♡",
'reply_to_message_id'=>$Message->message_id,
 ]);
}

if($text == '✮ الصوره - 13'){ 
bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"https://t.me/rmxiatshpap/14?single",
'caption'=>"𝐜𝐡 ↝ @janke3s ♡",
'reply_to_message_id'=>$Message->message_id,
 ]);
}

if($text == '✮ الصوره - 14'){ 
bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"https://t.me/rmxiatshpap/15?single",
'caption'=>"𝐜𝐡 ↝ @janke3s ♡",
'reply_to_message_id'=>$Message->message_id,
 ]);
}

if($text == '✮ الصوره - 15'){ 
bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"https://t.me/rmxiatshpap/16?single",
'caption'=>"𝐜𝐡 ↝ @janke3s ♡",
'reply_to_message_id'=>$Message->message_id,
 ]);
}

if($text == '✮ الصوره - 16'){ 
bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"https://t.me/rmxiatshpap/17?single",
'caption'=>"𝐜𝐡 ↝ @janke3s ♡",
'reply_to_message_id'=>$Message->message_id,
 ]);
}

if($text == '✮ الصوره - 17'){ 
bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"https://t.me/rmxiatshpap/18?single",
'caption'=>"𝐜𝐡 ↝ @janke3s ♡",
'reply_to_message_id'=>$Message->message_id,
 ]);
}

if($text == '✮ الصوره - 18'){ 
bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"https://t.me/rmxiatshpap/19?single",
'caption'=>"𝐜𝐡 ↝ @janke3s ♡",
'reply_to_message_id'=>$Message->message_id,
 ]);
}

if($text == '✮ الصوره - 19'){ 
bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"https://t.me/rmxiatshpap/20?single",
'caption'=>"𝐜𝐡 ↝ @janke3s ♡",
'reply_to_message_id'=>$Message->message_id,
 ]);
}

if($text == '✮ الصوره - 20'){ 
bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"https://t.me/rmxiatshpap/21?single",
'caption'=>"𝐜𝐡 ↝ @janke3s ♡",
'reply_to_message_id'=>$Message->message_id,
 ]);
}

if($text == '✮ الصوره - 21'){ 
bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"https://t.me/rmxiatshpap/22?single",
'caption'=>"𝐜𝐡 ↝ @janke3s ♡",
'reply_to_message_id'=>$Message->message_id,
 ]);
}

if($text == '✮ الصوره - 22'){ 
bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"https://t.me/rmxiatshpap/23?single",
'caption'=>"𝐜𝐡 ↝ @janke3s ♡",
'reply_to_message_id'=>$Message->message_id,
 ]);
}

if($text == '✮ الصوره - 23'){ 
bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"https://t.me/rmxiatshpap/24?single",
'caption'=>"𝐜𝐡 ↝ @janke3s ♡",
'reply_to_message_id'=>$Message->message_id,
 ]);
}

if($text == '✮ الصوره - 24'){ 
bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"https://t.me/rmxiatshpap/25?single",
'caption'=>"𝐜𝐡 ↝ @janke3s ♡",
'reply_to_message_id'=>$Message->message_id,
 ]);
}

if($text == '✮ الصوره - 25'){ 
bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"https://t.me/rmxiatshpap/26?single",
'caption'=>"𝐜𝐡 ↝ @janke3s ♡",
'reply_to_message_id'=>$Message->message_id,
 ]);
}

if($text == '✮ الصوره - 26'){ 
bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"https://t.me/rmxiatshpap/27?single",
'caption'=>"𝐜𝐡 ↝ @janke3s ♡",
'reply_to_message_id'=>$Message->message_id,
 ]);
}

if($text == '✮ الصوره - 27'){ 
bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"https://t.me/rmxiatshpap/28?single",
'caption'=>"𝐜𝐡 ↝ @janke3s ♡",
'reply_to_message_id'=>$Message->message_id,
 ]);
}

if($text == '✮ الصوره - 28'){ 
bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"https://t.me/rmxiatshpap/29?single",
'caption'=>"𝐜𝐡 ↝ @janke3s ♡",
'reply_to_message_id'=>$Message->message_id,
 ]);
}

if($text == '✮ الصوره - 29'){ 
bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"https://t.me/rmxiatshpap/30?single",
'caption'=>"𝐜𝐡 ↝ @janke3s ♡",
'reply_to_message_id'=>$Message->message_id,
 ]);
}

if($text == '✮ الصوره - 30'){ 
bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"https://t.me/rmxiatshpap/31?single",
'caption'=>"𝐜𝐡 ↝ @janke3s ♡",
'reply_to_message_id'=>$Message->message_id,
 ]);
}



if($text == '✮الحاله - 1'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/Abdoelmasry0/296?single",
'caption'=>"𝐜𝐡 ↝ @janke3s ♡",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '✮الحاله - 2'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/Abdoelmasry0/297?single",
'caption'=>"𝐜𝐡 ↝ @janke3s ♡",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '✮الحاله - 3'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/Abdoelmasry0/292?single",
'caption'=>"𝐜𝐡 ↝ @janke3s ♡",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '✮الحاله - 4'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/Abdoelmasry0/294?single",
'caption'=>"𝐜𝐡 ↝ @janke3s ♡",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == 'الحاله - 5✮'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/Abdoelmasry0/291?single",
'caption'=>"𝐜𝐡 ↝ @janke3s ♡",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '✮الحاله - 6'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/Abdoelmasry0/293?single",
'caption'=>"𝐜𝐡 ↝ @janke3s ♡",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '✮الحاله - 7'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/Abdoelmasry0/290?single",
'caption'=>"𝐜𝐡 ↝ @janke3s ♡",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '✮الحاله - 8'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/Abdoelmasry0/289?single",
'caption'=>"𝐜𝐡 ↝ @janke3s ♡",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '✮الحاله - 9'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/Abdoelmasry0/288?single",
'caption'=>" 𝐜𝐡 ↝ @janke3s ♡",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '✮الحاله - 10'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/Abdoelmasry0/288?single",
'caption'=>"𝐜𝐡 ↝ @janke3s ♡",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '✮الحاله - 11'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/Abdoelmasry0/288?single",
'caption'=>"𝐜𝐡 ↝ @janke3s ♡",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '✮الحاله - 12'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/Abdoelmasry0/288?single",
'caption'=>"𝐜𝐡 ↝ @janke3s ♡",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '✮الحاله - 13'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/Abdoelmasry0/288?single",
'caption'=>"𝐜𝐡 ↝ @janke3s ♡",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '✮الحاله - 14'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/Abdoelmasry0/288?single",
'caption'=>"𝐜𝐡 ↝ @janke3s ♡",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '✮الحاله - 15'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/Abdoelmasry0/282?single",
'caption'=>"𝐜𝐡 ↝ @janke3s ♡",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '✮الحاله - 16'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/Abdoelmasry0/281?single",
'caption'=>"𝐜𝐡 ↝ @janke3s ♡",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '✮الحاله - 17'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/Abdoelmasry0/280?single",
'caption'=>"𝐜𝐡 ↝ @janke3s ♡",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '✮الحاله - 18'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/Abdoelmasry0/279?single",
'caption'=>"𝐜𝐡 ↝ @janke3s ♡",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '✮الحاله - 19'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/Abdoelmasry0/278?single",
'caption'=>"𝐜𝐡 ↝ @janke3s ♡",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '✮الحاله - 20'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/Abdoelmasry0/277?single",
'caption'=>"𝐜𝐡 ↝ @janke3s ♡",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '✮الحاله - 21'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/Abdoelmasry0/276?single",
'caption'=>"𝐜𝐡 ↝ @janke3s ♡",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '✮الحاله - 22'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/Abdoelmasry0/274?single",
'caption'=>"𝐜𝐡 ↝ @janke3s ♡",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '✮الحاله - 23'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/Abdoelmasry0/272?single",
'caption'=>"𝐜𝐡 ↝ @janke3s ♡",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '✮الحاله - 24'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/Abdoelmasry0/271?single",
'caption'=>"𝐜𝐡 ↝ @janke3s ♡",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '✮الحاله - 25'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/Abdoelmasry0/269?single",
'caption'=>"𝐜𝐡 ↝ @janke3s ♡",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '✮الحاله - 26'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/Abdoelmasry0/265?single",
'caption'=>"𝐜𝐡 ↝ @janke3s ♡",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '✮الحاله - 28'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/Abdoelmasry0/262?single",
'caption'=>"𝐜𝐡 ↝ @janke3s ♡",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '✮الحاله - 29'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/Abdoelmasry0/262?single",
'caption'=>"𝐜𝐡 ↝ @janke3s ♡",
'reply_to_message_id'=>$Message->message_id,
 ]);
}
if($text == '✮الحاله - 30'){ 
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"https://t.me/Abdoelmasry0/262?single",
'caption'=>"𝐜𝐡 ↝ @janke3s ♡",
'reply_to_message_id'=>$Message->message_id,
 ]);
}

$l = json_decode(file_get_contents('l.json'),1);
if(preg_match('/منع /',$text) and $from_id == $oner){
$ex = explode('منع ',$text)[1];
$l[] = $ex;
file_put_contents('l.json',json_encode($l));
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"- تم منع الكلمة : $ex", 
]);
}
if($text == 'الممنوعات' and $from_id == $oner){
$words = '';
$c = 1;
for($i=0; $i<count($l); $i++){
$words .= "- $c : ".$l[$i]."\n";
$c++;
}
if($words != ''){
$words = $words;
}else{
$words = 'لا يوجد';
}
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"- الكلمات الممنوعة :\n$words", 
]);
} 

if($text == 'حذف الكل' and $from_id == $oner){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"- تم حذف جميع الكلمات الممنوعة", 
]);
unlink('l.json');
}
if($text and $from_id != $oner){
for($i=0; $i<count($l); $i++){
if(preg_match("/".$l[$i]."/",$text)){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id,
]);
}}}

if($message and !in_array($id, $m)){
file_put_contents("member.txt", $id."\n",FILE_APPEND);
 }
$j = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$ch&user_id=".$id);
if($message && (strpos($j,'"status":"left"') or strpos($j,'"Bad Request: USER_ID_INVALID"') or strpos($j,'"status":"kicked"'))!== false){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"عذرا عزيزي اشترك بقناة البوت اولا❎
$ch
ثم ارسل /start",
]);return false;}

if($text =="/start"and $tn =="on"and $id !=$shyco){
bot('sendmessage',[
'chat_id'=>$shyco,
'text'=>
"
مرحباً عزيزي {المطور} دخل شخص جديد الي البوت🆕

👨‍💼¦ اسمه » ️ [$name](tg://user?id=$id)

🔱¦ معرفه »  ️[@$user](tg://user?id=$id)

💳¦ ايديه » ️ [$id](tg://user?id=$id)
",
'parse_mode'=>"MarkDown",
]);
}
if($text =='/sh' and $id ==$shyco){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"اهلا بڪ عزيزي اليڪ اوامرڪ⚡📮",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>".•المشترڪين",'callback_data'=>"m1"]],
[['text'=>"•اذاعهہ‌‏ رسـآله📮",'callback_data'=>"send"],['text'=>"•توجہيه رسالهہ‏🔄",'callback_data'=>"forward"]],
[['text'=>"•وضع اشتراك اجباري💢",'callback_data'=>"ach"],['text'=>"•حذف اشتراك اجباري🔱",'callback_data'=>"dch"]],
[['text'=>"•تفعيل التنبيه✔️",'callback_data'=>"ons"],['text'=>"•تعطيل التنبيه❎",'callback_data'=>"ofs"]],
[['text'=>"فتح البوت✅",'callback_data'=>"obot"],['text'=>"ايقاف البوت❌",'callback_data'=>"ofbot"]],
[['text'=>"حظر عضو✅",'callback_data'=>"ban"],['text'=>"الغاء حظر عضو❌",'callback_data'=>"unban"]],
]
])
]);
}

if($data =='back'){
bot('editmessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$update->callback_query->message->message_id,
'text'=>"اهلا بڪ عزيزي اليڪ اوامرڪ⚡📮",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>".•المشترڪين ",'callback_data'=>"m1"]],
[['text'=>"•اذاعهہ‌‏ رسـآله📮",'callback_data'=>"send"],['text'=>"•توجہيه رسالهہ‏🔄",'callback_data'=>"forward"]],
[['text'=>"•وضع اشتراك اجباري💢",'callback_data'=>"ach"],['text'=>"•حذف اشتراك اجباري🔱",'callback_data'=>"dch"]],
[['text'=>"•تفعيل التنبيه✔️",'callback_data'=>"ons"],['text'=>"•تعطيل التنبيه❎",'callback_data'=>"ofs"]],
[['text'=>"فتح البوت✅",'callback_data'=>"obot"],['text'=>"ايقاف البوت❌",'callback_data'=>"ofbot"]],
[['text'=>"حظر عضو✅",'callback_data'=>"ban"],['text'=>"الغاء حظر عضو❌",'callback_data'=>"unban"]],
]
])
]);
unlink("shyco.txt");
}
if($data =="ban"){
bot('editmessagetext',[
'chat_id'=>$chat_id2, 
'message_id'=>$update->callback_query->message->message_id,
'text'=>"حسنا عزيزي ارسل ايدي العضو لاحظره🤩", 
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"الغاء الامر❎",'callback_data'=>"back"]],
]
])
]);
file_put_contents("shyco.txt","ban");
}

if($text and $sajad =="ban" and $id ==$shyco){
file_put_contents("ban.txt",$text."\n",FILE_APPEND);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"تم حظر العضور بنجاح✅",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"العودة🔙",'callback_data'=>"back"]],
]
])
]);
bot('SendMessage',[
'chat_id'=>$text,
'text'=>"تم حظرك من قبل المطور لايمكنك استخدام البوت😒",
]);
}

if($data =="unban"){
bot('editmessagetext',[
'chat_id'=>$chat_id2, 
'message_id'=>$update->callback_query->message->message_id,
'text'=>"حسنا عزيزي ارسل ايدي العضو لالغاء حظره🔱", 
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"الغاء الامر❎",'callback_data'=>"back"]],
]
])
]);
file_put_contents("shyco.txt","unban");
}
if($text and $sajad =="unban" and $id ==$shyco){
$bn = str_replace($text,'',$ban);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"تم الغاء حظر العضور بنجاح✅",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"العودة🔙",'callback_data'=>"back"]],
]
])
]);
file_put_contents("ban.txt",$bn);
unlink("shyco.txt");
bot('SendMessage',[
'chat_id'=>$text,
'text'=>"تم الغاء حظرك من البوت🤩",
]);
}
if($data =="ofbot"){
bot('editmessagetext',[
'chat_id'=>$chat_id2, 
'message_id'=>$update->callback_query->message->message_id,
'text'=>"تم اغلاق البوت✅", 
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"عودة🔙",'callback_data'=>"back"]],
]
])
]);
file_put_contents("bot.txt","off");
}
$obot = file_get_contents("bot.txt");
if($data =="obot"){
bot('editmessagetext',[
'chat_id'=>$chat_id2, 
'message_id'=>$update->callback_query->message->message_id,
'text'=>"تم فتح البوت بنجاح✅",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"عودة🔙",'callback_data'=>"back"]],
]
])
]);
unlink("bot.txt");
}
if($data =="send"){
bot('editmessagetext',[
'chat_id'=>$chat_id2, 
'message_id'=>$update->callback_query->message->message_id,
'text'=>"حسنا عزيزي ارسل رسالتك📮", 
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"الغاء الامر❎",'callback_data'=>"back"]],
]
])
]);
file_put_contents("shyco.txt","send");
} 
if($text and $sajad == "send" and $id == $shyco){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>'-تم النشر بنجاح✔️',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'العوده🔙' ,'callback_data'=>"back"]],
]])
]);
for($i=0;$i<count($m); $i++){
bot('sendMessage', [
'chat_id'=>$m[$i],
'text'=>$text
]);
unlink("shyco.txt");
}
}
if($data =="forward"){
bot('editmessagetext',[
'chat_id'=>$chat_id2, 
'message_id'=>$update->callback_query->message->message_id,
'text'=>"حسنا عزيزي قم بتوجيه الرسالة✅", 
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"الغاء الامر❎",'callback_data'=>"back"]],
]
])
]);
file_put_contents("shyco.txt","forward");
} 
if($text and $sajad == "forward" and $id == $shyco){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>'تم التوجيه بنجاح🔰',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'العوده🔙' ,'callback_data'=>"back"]],
]])
]);
for($i=0;$i<count($m); $i++){
bot('forwardMessage', [
'chat_id'=>$m[$i],
'from_chat_id'=>$id,
'message_id'=>$message->message_id
]);
unlink("shyco.txt");
}
}
if($data =="ach"){
bot('editmessagetext',[
'chat_id'=>$chat_id2, 
'message_id'=>$update->callback_query->message->message_id,
'text'=>"حسنا عزيزي ارسل معرف قناتك 📮
مثل @SHYCO1
", 
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"الغاء الامر❎",'callback_data'=>"back"]],
]
])
]);
file_put_contents("shyco.txt","ch");
} 
if($text and $sajad =="ch" and $id ==$shyco ){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"تم وضع اشتراك اجباري😁", 
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"العودة🔙",'callback_data'=>"back"]],
]
])
]); 
file_put_contents("ch.txt","$text");
unlink("shyco.txt");
} 
if($data == "m1"){ 
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"
عدد المشترڪين هو » $m1 «
        ",
        'show_alert'=>true,
]);
}
if($data =="dch"){
bot('editmessagetext',[
'chat_id'=>$chat_id2, 
'message_id'=>$update->callback_query->message->message_id,
'text'=>"🔰تم حذف القناة بنجاح", 
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"العودة🔙",'callback_data'=>"back"]],
]
])
]); 
unlink("ch.txt");
} 
if($data =="ons"){
bot('editmessagetext',[
'chat_id'=>$chat_id2, 
'message_id'=>$update->callback_query->message->message_id,
'text'=>"
تم تفعيل التنبيه بنجاح✅
", 
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"العودة🔙",'callback_data'=>"back"]],
]
])
]);
file_put_contents("tnb.txt","on");
} 

if($data =="ofs"){
bot('editmessagetext',[
'chat_id'=>$chat_id2, 
'message_id'=>$update->callback_query->message->message_id,
'text'=>"
تم تعطيل التنبيه بنجاح✅
", 
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"العودة🔙",'callback_data'=>"back"]],
]
])
]);
unlink("tnb.txt");
} 

if($message and in_array($id, $exb)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"انت محظور من قبل المطور لايمكنك استخدام البوت📛",
]);return false;}
if($message and $obot =="off" and $id !=$shyco){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"البوت تحت الصيانه تابع قناة البوت لمعرفة متى تنتهي الصيانه📛
@janke3s
",
]);return false;}

