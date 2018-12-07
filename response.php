<?php
session_start();
$dbname = 'ebook';
$dbuser = 'root';
$dbpwd = '';
$dbhost = 'localhost';
 
 
$facebook_app_id = "149062709125328";
$app_secret = "4f6c635577373479da369084559b3479";
 
 
$mysqli = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
 
 
if (mysqli_connect_errno()) {
  printf("Connect failed: %s\n", mysqli_connect_error());
  exit();
}
 
 
if(isset($_POST['login'])){
  $login_via = $_POST['login_via'];
  $code = $_POST['code'];
 
 
  /* Get Account data via Graph */
  $graph_url = "https://graph.accountkit.com/v1.0/access_token?grant_type=authorization_code&code=".$code."&access_token=AA|".$facebook_app_id."|".$app_secret;
  $result = json_decode(file_get_contents($graph_url), true);
  if($result['id']){
    $account_id = $result['id'];
    $account_url = "https://graph.accountkit.com/v1.0/me/?access_token=".$result['access_token'];
    $account_data = json_decode(hitCurl($account_url), true);
    if(isset($account_data['phone'])){
      $country_code = '+'.$account_data['phone']['country_prefix'];
      $mobile = $account_data['phone']['national_number'];
    } 
    if($login_via == 1){
      $q = "SELECT * FROM `users`'";
    } 
    $rs = $mysqli->query($q);
    $row_count = $rs->num_rows;
    if($row_count)
    {
      $user = $rs->fetch_assoc();
      if($user['name'])
        $_SESSION['username'] = $user['name'];
      elseif($user['mobile'])
            $_SESSION['username'] = $user['mobile'];
      
    } else {
      $q1 = "INSERT INTO `ebook`.`sms_regis` (`id`, `account_id`) VALUES (NULL,'".@$account_id."')";
      $row1 = $mysqli->query($q1);
      if($row1){
        $msg = "You are successfully registered & logged In. Please complete your profile. Id: ".$mysqli->insert_id;
        if($login_via == 1){
              $_SESSION['username'] = $mobile;
        }      
      } else {
            $msg = 'Error : ('. $mysqli->errno .') '. $mysqli->error;
      }
      $_SESSION['message'] = $msg;
    }
  } else {
    $_SESSION['message'] = "Some error. Try Again!";
  }
  /**/
 
 
  header('Location: index.php');
  exit(0);
}
 
 
function hitCurl($url){
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_HEADER, 0);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $result = curl_exec($ch);
  curl_close($ch);
  return $result;
}
?>