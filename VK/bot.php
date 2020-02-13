<?php
$confirmationToken = '40b2894a';
$secretKey = 'NS5WfsferbS54390seu';
function vk_msg_send($peer_id,$text){
	$request_params = array(
		'message' => $text, 
		'peer_id' => $peer_id, 
		'access_token' => "4d8e25ea2509b4e26552701600f40ba49333ad3c5175c340afbd41dc922c138032eac84c23e6de6121139",
		'v' => '5.87' 
	);
	$get_params = http_build_query($request_params); 
	file_get_contents('https://api.vk.com/method/messages.send?'. $get_params);
}
$data = json_decode(file_get_contents('php://input'));

if(strcmp($data->secret, $secretKey) !== 0 && strcmp($data->type, 'confirmation') !== 0)
    return;

switch ($data->type) {
    case 'confirmation':
        echo $confirmationToken;
        break;	
	case 'message_new':     
		$message_text = $data -> object -> text;
		$chat_id = $data->object->peer_id;
        $chatidwd = $data->object->group_id;
		if ($message_text == "привет"){
			vk_msg_send($chat_id, $output."Привет!!!");
        } else { 
          vk_msg_send($chat_id, "Такой команды не существует"); 
        }    
    		echo('ok');
        break;  
    
    	default:
            echo('ok');
    	break;
}
?>