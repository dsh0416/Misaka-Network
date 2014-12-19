<?php 

$publicKey = "";
$privateKey = "";
$check_key = $_POST['check_key'];
$check_address = $_POST['check_address'];

require_once 'touclick.class.php';

$touclick = new touclick();
$res = $touclick->touclickCheck($publicKey, $privateKey, $check_key, $check_address);

if($res){
	$access_token_renren = "";
	$access_token_weibo = "";
				 $renren = "false";
				 $weibo = "false";
				 $renren = $_POST['renren'];
				 $weibo = $_POST['weibo'];
				 if ($renren != "true" && $weibo != "true"){
				 	header("Location: http://heckpsi.com/ecysd/noplatform.html");
					exit;
				 }
				 if ($_POST['content'] == ""){
				 	header("Location: http://heckpsi.com/ecysd/noword.html");
					exit;
				 }
	  			 $counter=1;
					if(file_exists("mycounter.txt")){
						$fp=fopen("mycounter.txt","r");
						$counter=fgets($fp,9);
						$counter++;
						fclose($fp);
					}
					$fp=fopen("mycounter.txt","w");
					fputs($fp,$counter);
					fclose($fp);
					$send_text = "";
					$emotion = "false";
					$emotion = $_POST['emotion'];
					$emotion_input = "";

					if($emotion == "true"){
						if ($_POST['emotion_input'] == ""){
							$emotion_input = "面无表情";
						}else{
							$emotion_input = $_POST['emotion_input'];
						}
						$send_text = urlencode("#御坂".$counter."号#"."“".$_POST['content']."”御坂御坂".$emotion_input."地说。");
					}else{
						$send_text = urlencode("#御坂".$counter."号#".$_POST['content']);
					}

					$uri = "https://api.renren.com/v2/status/put?access_token=".$access_token_renren."&content=".$send_text;
					$uri_weibo = "https://api.weibo.com/2/statuses/update.json?access_token=".$access_token_weibo."&status=".$send_text;
					//echo $uri;
					if($renren == "true"){
						$ch = curl_init();
						curl_setopt($ch, CURLOPT_URL, $uri);
						curl_setopt($ch, CURLOPT_POST, 1);
						curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
						curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 300);
						curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
						$data = curl_exec($ch);
						curl_close($ch);
					}
					
					if($weibo == "true"){
						$ch2 = curl_init();
						curl_setopt($ch2, CURLOPT_URL, $uri_weibo);
						curl_setopt($ch2, CURLOPT_POST, 1);
						curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
						curl_setopt($ch2, CURLOPT_CONNECTTIMEOUT, 300);
						curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, false);
						$data2 = curl_exec($ch2);
						curl_close($ch2);
					}
					
					/*echo "<br>
					调试信息:<br>";
					echo var_dump($data);
					echo var_dump($data2);
					*/ 

					header("Location: http://heckpsi.com/ecysd/success.html");
					exit;
}else{
        header("Location: http://heckpsi.com/ecysd/fail.html");
		exit;
}
?>