 <?php
  

function send_LINE($msg){
 $access_token = 'AmhOo6K9lNMcSn6rRhj8dwAe/ZO+hrF09hSUsayIxZr2kuVwJJ/qDK+wzP9DrMfRnD5YamgaXXwgUAvIoP2Fmuj5zPgvjfidZu9vRbBcleCtdDtlzYPsHa7X7b+2LQuqrhvFENCG3lsHcl/ym29uiAdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U2872871a6f0c52cf748a1bd5c9f7e940',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
