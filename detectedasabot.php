<html>
<head>
<title>botdetected!</title>
</head>
<body>
<?php
function getUserIpAddr(){
if(!empty($_SERVER[HTTP_CLIENT_IP])){
  $ip = $_SERVER['HTTP_CLIENT_IP'];
  }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR']}}{
  $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
  }else{
  $ip = $_SERVER['REMOTE_ADDR'];
  }
  $ip;
 }
 
 $ip = getUserIpAddr();
 
 $infowaktu = getdate();
 $date = $infowaktu['mday'];
 $month = $infowaktu['mon'];
 $year = $infowaktu['year'];
 $hour = $infowaktu['hours'];
 $min = $infowaktu['minutes'];
 $sec = $infowaktu['seconds'];
 $current_date = $date . '/' . $month . '/' . $year . ',' . $hour . ':' . $min . ':' . $sec;
 
 $accessinfo = 'accessdate(servertime):' . $current_date . ' ' . 'ip_address:' . $ip;
 $file_handle = fopen('var/www/bawagn/log/botlog.txt', 'a+');
 fwrite($file_handle, 'Bot terdeteksi di website' . '[' . $accessinfo . ']');
 fclose($file_handle);
 sleep(1)
 header("Location: http://52.163.155.1/");
 exit();
?>
</body>
</html>
