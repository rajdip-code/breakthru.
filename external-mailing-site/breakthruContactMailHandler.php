<?php
$email = urldecode((isset($_GET['email']))?(trim($_GET['email'])):'');
$name = urldecode((isset($_GET['name']))?(trim($_GET['name'])):'');
$phone = urldecode((isset($_GET['phone']))?(trim($_GET['phone'])):'');
$query = urldecode((isset($_GET['query']))?(trim($_GET['query'])):'');

if(!empty($email)&&!empty($name)&&!empty($phone)&&!empty($query)){

    //email to client from admin
    $to = 'rajdipsaha.kv@gmail.com';
    $subject = "Contact Us - Request";
    $txt = '
    <div dir="ltr">
    <div dir="ltr">
        <div dir="ltr">
        <div dir="ltr">
            <div dir="ltr">
            <table id="gmail-mainStructure" style="background-color: #ffffff;" border="0" width="100%" cellspacing="0" cellpadding="0">
                <tbody>
                <tr>
                    <td class="gmail-container" style="background: linear-gradient(to right, #485563, #29323c); background-size: cover; background-position: 50% 100%; background-repeat: no-repeat;" align="center" valign="top">
                    <table class="gmail-container" style="min-width: 600px; margin: 0px auto; padding-left: 20px; padding-right: 20px;" border="0" width="600" cellspacing="0" cellpadding="0" align="center">
                        <tbody>
                        <tr>
                            <td valign="top">
                            <table class="gmail-full-width" style="margin: 0px auto;" border="0" width="560" cellspacing="0" cellpadding="0" align="center">
                                <tbody>
                                <tr>
                                    <td valign="top">
                                    <table border="0" width="100%" cellspacing="0" cellpadding="0" align="center">
                                        <tbody>
                                        <tr>
                                            <td valign="top">
                                            <table border="0" width="100%" cellspacing="0" cellpadding="0" align="center">
                                                <tbody>
                                                <tr>
                                                    <td valign="top" height="30">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td valign="top">
                                                    <table border="0" width="100%" cellspacing="0" cellpadding="0" align="center">
                                                        <tbody>
                                                        <tr>
                                                            <td style="padding-left: 20px; padding-right: 20px;" valign="top">
                                                            <table border="0" width="100%" cellspacing="0" cellpadding="0" align="center">
                                                                <tbody>
                                                                <tr>
                                                                    <td style="font-size: 30px; color: #ffffff; font-weight: normal; text-align: center; font-family: Roboto, Arial, Helvetica, sans-serif; word-break: break-word;" align="center">'.$name.'</td>
                                                                </tr>
                                                                <tr>
                                                                    <td valign="top" height="10">&nbsp;</td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top" height="50">&nbsp;</td>
                                </tr>
                                </tbody>
                            </table>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    </td>
                </tr>
                <tr>
                    <td class="gmail-container" style="background-color: #f7f7f7;" align="center" valign="top">
                    <table class="gmail-container" style="background-color: #f7f7f7; min-width: 600px; margin: 0px auto; padding-left: 20px; padding-right: 20px;" border="0" width="600" cellspacing="0" cellpadding="0" align="center">
                        <tbody>
                        <tr>
                            <td valign="top">
                            <table class="gmail-full-width" style="margin: 0px auto;" border="0" width="560" cellspacing="0" cellpadding="0" align="center">
                                <tbody>
                                <tr>
                                    <td valign="top" height="50">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                    <table border="0" width="100%" cellspacing="0" cellpadding="0" align="center">
                                        <tbody>
                                        <tr>
                                            <td>
                                            <p>Name: '.$name.'</p>
                                            <p>Email: '.$email.'</p>
                                            <p>Phone: '.$phone.'</p>
                                            <p>Message: '.$query.'</p>
                                            <p>
                                                <br>
                                            </p>
                                            <p>From,</p>
                                            <p>Contact Us Form - breakthru.site</p>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top" height="40">&nbsp;</td>
                                </tr>
                                </tbody>
                            </table>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    </td>
                </tr>
                </tbody>
            </table>
            <br>
            </div>
        </div>
        </div>
    </div>
    </div>

    ';

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: '. $email. "\r\n";

    mail($to,$subject,$txt,$headers);

    //email to client from admin
    $to = $email;
    $subject = "We've got your message!";
    $txt = '
    <div dir="ltr">
    <div dir="ltr">
        <div dir="ltr">
        <div dir="ltr">
            <div dir="ltr">
            <table id="gmail-mainStructure" style="background-color: #ffffff;" border="0" width="100%" cellspacing="0" cellpadding="0">
                <tbody>
                <tr>
                <td class="gmail-container" style="background: linear-gradient(to right, #485563, #29323c); background-size: cover; background-position: 50% 100%; background-repeat: no-repeat;" align="center" valign="top">
                    <table class="gmail-container" style="min-width: 600px; margin: 0px auto; padding-left: 20px; padding-right: 20px;" border="0" width="600" cellspacing="0" cellpadding="0" align="center">
                        <tbody>
                        <tr>
                            <td valign="top">
                            <table class="gmail-full-width" style="margin: 0px auto;" border="0" width="560" cellspacing="0" cellpadding="0" align="center">
                                <tbody>
                                <tr>
                                    <td valign="top">
                                    <table border="0" width="100%" cellspacing="0" cellpadding="0" align="center">
                                        <tbody>
                                        <tr>
                                            <td valign="top">
                                            <table border="0" width="100%" cellspacing="0" cellpadding="0" align="center">
                                                <tbody>
                                                <tr>
                                                    <td valign="top" height="30">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td valign="top">
                                                    <table border="0" width="100%" cellspacing="0" cellpadding="0" align="center">
                                                        <tbody>
                                                        <tr>
                                                            <td style="padding-left: 20px; padding-right: 20px;" valign="top">
                                                            <table border="0" width="100%" cellspacing="0" cellpadding="0" align="center">
                                                                <tbody>
                                                                <tr>
                                                                    <td style="font-size: 30px; color: #ffffff; font-weight: normal; text-align: center; font-family: Roboto, Arial, Helvetica, sans-serif; word-break: break-word;" align="center">breakthru.</td>
                                                                </tr>
                                                                <tr>
                                                                    <td valign="top" height="10">&nbsp;</td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top" height="50">&nbsp;</td>
                                </tr>
                                </tbody>
                            </table>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    </td>
                </tr>
                <tr>
                    <td class="gmail-container" style="background-color: #f7f7f7;" align="center" valign="top">
                    <table class="gmail-container" style="background-color: #f7f7f7; min-width: 600px; margin: 0px auto; padding-left: 20px; padding-right: 20px;" border="0" width="600" cellspacing="0" cellpadding="0" align="center">
                        <tbody>
                        <tr>
                            <td valign="top">
                            <table class="gmail-full-width" style="margin: 0px auto;" border="0" width="560" cellspacing="0" cellpadding="0" align="center">
                                <tbody>
                                <tr>
                                    <td valign="top" height="50">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                    <table border="0" width="100%" cellspacing="0" cellpadding="0" align="center">
                                        <tbody>
                                        <tr>
                                            <td>
                                            <p>Hi '.$name.',</p>
                                            <p>We have got your message.&nbsp;</p>
                                            <p>Our team of highly trained code-ninjas will get back to you ASAP.</p>
                                            <p>Meanwhile, you can write us on hello@breakthru.site for any additional queries.</p>
                                            <p>
                                                <br>
                                            </p>
                                            <p>Cheers,</p>
                                            <p>Team breakthru.</p>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top" height="40">&nbsp;</td>
                                </tr>
                                </tbody>
                            </table>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    </td>
                </tr>
                </tbody>
            </table>
            <br>
            </div>
        </div>
        </div>
    </div>
    </div>

    ';

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: hello@breakthru.site' . "\r\n";

    mail($to,$subject,$txt,$headers);
    echo 'Sent';
    } else {
        echo 'Not Sent';
    }


?>