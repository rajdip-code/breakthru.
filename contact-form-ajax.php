<?php
//Include database file
require_once 'dbconfig.php';

//loading the variable


$name = ucwords(strtolower(urldecode((isset($_POST['name']))?(trim($_POST['name'])):'')));
$email = strtolower(urldecode((isset($_POST['email']))?(trim($_POST['email'])):''));
$phone = urldecode((isset($_POST['phone']))?(trim($_POST['phone'])):'');
$query = ucfirst(urldecode((isset($_POST['project']))?(trim($_POST['project'])):''));


//Verify the reCaptcha
//require_once "reCaptcha.php";
/*
if (isset($_POST['g-recaptcha-response'])) {

  //get verify response data
  $remoteip = $_SERVER['REMOTE_ADDR'];
  $verifyCaptchaResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.'&response='.$_POST['g-recaptcha-response'].'&remoteip='.$remoteip);
  $responseCaptchaData = json_decode($verifyCaptchaResponse);
  if(!($responseCaptchaData->success)) {
    //BOT Detected! - redirect to bot page!
    echo '
    <div class="topcorner alert alert-danger ">
    Our system couldn\'t verify you\'re not a bot!
    </div>';
    exit();
  }
} else {
    echo '
    <div class="topcorner alert alert-danger ">
    Our system couldn\'t verify you\'re not a bot!
    </div>';
    exit();
}

*/

//if any of the required field is missing, redirect back to login
if (empty($email) || empty($query) || empty($phone) || empty($name)) {
    echo 'Nice Try, But I\'m invincible. Re-enter details.
    <a href="#" class="btn w-inline-block">
        <div class="btn-label" id="form-status">Send</div>
        <div class="btn-hover blue"></div>
    </a>';
    exit();
} else if(strlen($email)>200 || strlen($phone)>15 || strlen($name)>200 || strlen($query)>2000){
    echo 'Message too long! Try shrinking it down.
    <a href="#" class="btn w-inline-block">
        <div class="btn-label" id="form-status">Send</div>
        <div class="btn-hover blue"></div>
    </a>';
    exit();
}else if (!validateEmail($email)){
    echo 'Gotcha! Enter valid email only.
    <a href="#" class="btn w-inline-block">
        <div class="btn-label" id="form-status">Send</div>
        <div class="btn-hover blue"></div>
    </a>';
    exit();
} else {
    //echo '
    //        <div class="topcorner alert alert-success">
    //            <strong>Got it!</strong> We\'ll get back to you ASAP!
    //        </div>
    //        ';
    file_get_contents('https://recessional-extenua.000webhostapp.com/breakthruContactMailHandler.php?name='.urlencode($name).'&email='.urlencode($email).'&phone='.urlencode($phone).'&query='.urlencode($query));    
    //email to admin team
    /*
    $to = "rajdipsaha.kv@gmail.com";
    $subject = 'QUERY: '.$query;
    $txt = 'Name: '.$name.'\n Message: '.$query.'\n\n Generated from Contact us form of breakthru.site';
    $headers = "From: $email" . "\r\n" .
    'CC: noreply@'.$_SERVER['SERVER_NAME'].'.com';
    mail($to,$subject,$txt,$headers);

    //email to subscriber
    $to = $email;
    $subject = "We've got your email!";
    $txt = "Hi!\n\n We have recieved your email and our team will get back to you ASAP. \n\n Cheers,\nTeam Team breakthru.\n\nContact us at: +913346034550 \n Mail us at: contact@rjinfocom.com";
    $headers = 'From: info@'.$_SERVER['SERVER_NAME'].'.com' . "\r\n" .
    'CC: noreply@'.$_SERVER['SERVER_NAME'].'.com';
    mail($to,$subject,$txt,$headers);
    */
    
    //sql entry to database
    $sql = "INSERT INTO contact_us (name, email, phone, query) VALUES (?, ?, ?, ?)";
    if($stmt = $mysqli->prepare($sql)){
        $stmt->bind_param("ssss", $name, $email, $phone, $query);
        if(!$stmt->execute()){
            echo 'Something went wrong! Try again.
            <a href="#" class="btn w-inline-block">
                <div class="btn-label" id="form-status">Send</div>
                <div class="btn-hover blue"></div>
            </a>';
            exit();
        }else{
            echo 'We will get back to you ASAP! <img style="height: 20px;width: 20px;" src="assets/double-tick.png">';
            exit();
        }
    } else {
        echo '
        Something went wrong! Try again.
            <a href="#" class="btn w-inline-block">
                <div class="btn-label" id="form-status">Send</div>
                <div class="btn-hover blue"></div>
            </a>';
        exit();
    }
    exit();
}


function validateEmail($valemail){
    if (!filter_var($valemail, FILTER_VALIDATE_EMAIL)) {
        return false;
    } else {
        if(strlen($valemail)>200){
            return false;
        }
        else {
            return true;
        }
    }
}

?>