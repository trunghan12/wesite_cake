<?php 
   
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require('../vendor/autoload.php');
    require '../vendor/phpmailer/phpmailer/src/Exception.php';
    require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
    require '../vendor/phpmailer/phpmailer/src/SMTP.php';
    require '../vendor/phpmailer/phpmailer/src/OAuth.php';
    require '../vendor/phpmailer/phpmailer/src/POP3.php';

    class Mail{
        public function sendMail(){
            
            $mail = new PHPMailer(true);
            try {
                //Server settings
                // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'hanb1909912@student.ctu.edu.vn';                     //SMTP username
                $mail->Password   = 'bdaqfyvoacvcqgpm';                               //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
            
                //Recipients
                $mail->setFrom('hanb1909912@student.ctu.edu.vn', 'Mailer');
                $mail->addAddress('myb1910105@student.ctu.edu.vn', 'Joe User');     //Add a recipient
                $mail->addAddress('hanb1909912@student.ctu.edu.vn', 'Joe User');
                // $mail->addAddress('ellen@example.com');               //Name is optional
                // $mail->addReplyTo('info@example.com', 'Information');
                // $mail->addCC('cc@example.com');
                // $mail->addBCC('bcc@example.com');
            
                //Attachments
                // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
                // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
            
                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'Here is the subject';
                $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            
                $mail->send();
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        }

        public function contact_sendMail($full_name,$email,$content){
            $mail = new PHPMailer(true);
            $mail->CharSet = 'UTF-8'; 
            try {
                //Server settings
                // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'hanb1909912@student.ctu.edu.vn';                     //SMTP username
                $mail->Password   = 'jqbwnmwkhfndmoxt';                               //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
            
                //Recipients
                $mail->setFrom($email, $full_name);
                $mail->addAddress('hanb1909912@student.ctu.edu.vn','Mailer');     //Add a recipient
                // $mail->addAddress('ellen@example.com');               //Name is optional
                // $mail->addReplyTo('info@example.com', 'Information');
                // $mail->addCC('cc@example.com');
                // $mail->addBCC('bcc@example.com');
            
                //Attachments
                // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
                // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
            
                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'Email thắc mắc của bạn '.$full_name;
                $mail->Body    = $content;
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            
                $mail->send();
                echo 'Message has been sent';
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        }

        public function sendMail_Order($order_info){
            $mail = new PHPMailer(true);
            $mail->CharSet = 'UTF-8'; 
            try {
                
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'hanb1909912@student.ctu.edu.vn';                     //SMTP username
                $mail->Password   = 'jqbwnmwkhfndmoxt';                               //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
                //Recipients
                $mail->setFrom('hanb1909912@student.ctu.edu.vn', 'Mailer');
                $mail->addAddress($order_info['email'], $order_info['full_name']);     //Add a recipient
                
                
                //Content
               
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'Hóa đơn của bạn '.$order_info['full_name'];
                $mail->Body    = '<!DOCTYPE html>
                <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <title>Document</title>
                    </head>
                    <body>
                        <table border="0" cellpadding="0" cellspacing="0" style="width:750px;margin:40px auto;padding:0">
                            <colgroup>
                                <col style="width:100%">
                            </colgroup>
                            <tbody>
                                <tr style="margin:0;padding:0">
                                    <td style="margin:0;padding:0">
                                        <table border="0" cellpadding="0" cellspacing="0"
                                            style="width:100%;margin:0;padding:0;table-layout:fixed">
                                            <colgroup>
                                                <col style="width:100%">
                                            </colgroup>
                                            <tbody>
                                                <tr style="margin:0;padding:0">
                                                    <td style="width:100%;height:13px;margin:0;padding:0;font-size:0;line-height:0"> <img
                                                        src="https://ci5.googleusercontent.com/proxy/x2xeRM7-0xRn7SKnsyV91dgYiRMjNnkc5mmEUpsLwnEckncNQKZcxJlmOQ2d86slTEFYGc8_FJvPgXRGnJaNSYro5oEfU9ETds47TYiLkQ=s0-d-e1-ft#http://www.lottecinemavn.com/LCHS/Image/Mail/bg_mail_top.gif"
                                                        alt="" class="CToWUd" data-bit="iit"> </td>
                                                </tr>
                                                <tr style="margin:0;padding:0">
                                                    <td
                                                        style="width:100%;height:auto;margin:0;padding:20px 30px 27px;background:url(https://ci6.googleusercontent.com/proxy/5QylrUPNxHbZAWzWplpnumcOqKk_ymglu6gfZIzYT9SBY5CYGKeqAse0YuWH1cFKTDCMDB6d8eNKfpjNJGtJJYdY9tcHHzxh7RRsdSzk2Qg=s0-d-e1-ft#http://www.lottecinemavn.com/LCHS/Image/Mail/bg_mail_body.gif) repeat-y">
                                                        <table border="0" cellpadding="0" cellspacing="0"
                                                            style="width:100%;margin:0;padding:0">
                                                            <colgroup>
                                                                <col style="width:100%">
                                                            </colgroup>
                                                            <tbody>
                                                                <tr style="margin:0;padding:0">
                                                                    <td style="margin:0;padding:0 0 24px;border-bottom:2px solid #b49763">
                                                                        <a href="http://localhost/composer1">SHOP NỘI THẤT</a> 
                                                                    </td>
                                                                </tr>
                                                                <tr style="margin:0;padding:0">
                                                                    <td style="height:20px;margin:0;padding:0;font-size:0">&nbsp;</td>
                                                                </tr>
                                                                <tr style="margin:0;padding:0">
                                                                    <td style="height:8px;margin:0;padding:0;font-size:0;line-height:0">
                                                                        <img src="https://ci6.googleusercontent.com/proxy/LC-a-7ewqb4i75Z23Fq9tE9qAgm0ut85QiqjWGJmtGqERhIadexei4GtYPt7zy1bscZ6ewjd5nNEMTuCcH8w2kTfsvY7ilGF1eg9-kOSS7j5DA=s0-d-e1-ft#http://www.lottecinemavn.com/LCHS/Image/Mail/bg_content_top.gif"
                                                                            alt="" class="CToWUd" data-bit="iit"> 
                                                                    </td>
                                                                </tr>
                                                                <tr style="margin:0;padding:0">
                                                                    <td
                                                                        style="margin:0;padding:15px 0 20px;border-left:1px solid #cdc197;border-right:1px solid #cdc197;background:#efebdb;font-size:14px;font-family:Arial,Helvetica,sans-serif;color:#1d1b1c;line-height:22px;text-align:center">
                                                                        Chúc mừng bạn<strong
                                                                            style="margin:0;padding:0;font-size:16px;font-weight:bold"><?php echo $order_info["full_name"] ?></strong>. Bạn đã đặt hàng thành công
                                                                    </td>
                                                                </tr>
                                                                <tr style="margin:0;padding:0">
                                                                    <td style="height:8px;margin:0;padding:0;font-size:0;line-height:0">
                                                                        <img src="https://ci6.googleusercontent.com/proxy/l3oIAZAGfemIg1ur_1ApmifKxEDmMUTA5Va1YiFbffC8Zrh7qnAmfqANIUBLk9pxSA8RKE-5DMv4Ibsz_CCh6F1wkO3idsrRA-H4MUtuUunKHx-rSA=s0-d-e1-ft#http://www.lottecinemavn.com/LCHS/Image/Mail/bg_content_bottom.gif"
                                                                            alt="" class="CToWUd" data-bit="iit"> 
                                                                    </td>
                                                                </tr>
                                                                <tr style="margin:0;padding:0">
                                                                    <td style="height:33px;margin:0;padding:0;font-size:0">&nbsp;</td>
                                                                </tr>
                                                                <tr style="margin:0;padding:0">
                                                                    <td
                                                                        style="padding:30px 0 50px;margin:0;vertical-align:top;text-align:center">
                                                                        <div style="text-align:center"> <a
                                                                            href="http://transmail.ftrans01.com/LNQWOPRYJCT?id=62279=d0QFCQcKAFILSgVUUlJTBgYADwQGXwVUVFFWAFNQVQoMWwQNUwsCXQUDAlEBUgQGClVLCB0EAAkAVVMCAHZER0FcUFdFFlERRxhSBRdNE1tPAAFTUVEGAwBSUAoFBgYABQ9JUUVMQl8dGUMTAw0WWFJYW0sCEkNRXxZSAxtVWF4bdHtoZndiN2t8dDVdCgFJRQI=&amp;fl=XExBSQsXHRJFQRkNDRcRUFBYWQAJB0deHwYNXxp6dHtnF3ZWX0xXC0ZFGCwbTiZcXVRaBEsrSB1yDAxXWFcZUkdITRoBCA=="
                                                                            target="_blank"
                                                                            data-saferedirecturl="https://www.google.com/url?q=http://transmail.ftrans01.com/LNQWOPRYJCT?id%3D62279%3Dd0QFCQcKAFILSgVUUlJTBgYADwQGXwVUVFFWAFNQVQoMWwQNUwsCXQUDAlEBUgQGClVLCB0EAAkAVVMCAHZER0FcUFdFFlERRxhSBRdNE1tPAAFTUVEGAwBSUAoFBgYABQ9JUUVMQl8dGUMTAw0WWFJYW0sCEkNRXxZSAxtVWF4bdHtoZndiN2t8dDVdCgFJRQI%3D%26fl%3DXExBSQsXHRJFQRkNDRcRUFBYWQAJB0deHwYNXxp6dHtnF3ZWX0xXC0ZFGCwbTiZcXVRaBEsrSB1yDAxXWFcZUkdITRoBCA%3D%3D&amp;source=gmail&amp;ust=1666497733670000&amp;usg=AOvVaw0swp5BBXABNY4ZoDRd4gcs">
                                                                            <a href="http://localhost/composer1/index.php?url=History_Order" class="m_5519974867742442351link_button" style="text-decoration: none; padding: 20px; background: #efebdb;;
                                                                            font-size: 20px; border-radius: 20px; color: #000;font-weight: 700;
                                                                            ">Kiểm tra lịch sử đặt trước</button></a> 
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr style="margin:0;padding:0">
                                                    <td style="width:100%;height:33px;margin:0;padding:0"> <img
                                                        src="https://ci4.googleusercontent.com/proxy/poT1MMRiQ3gdJsfThuI886IxF7nI33NbCAeuD10ofsKaMrsA_fSLWZEYjUajTaMEA8_DcnFeYLQ5FGxMWBYawl93ZLTIj5X7tcc1HoEqFrV2aw=s0-d-e1-ft#http://www.lottecinemavn.com/LCHS/Image/Mail/bg_mail_bottom.gif"
                                                        alt="" class="CToWUd" data-bit="iit"> </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </body>
                </html>';
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            
                $mail->send();
                echo 'Message has been sent';
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        }
    }
?>