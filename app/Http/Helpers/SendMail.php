<?php
namespace App\Http\Helpers;

use Swift_Attachment;
use Swift_Mailer;
use Swift_SendmailTransport;
use Swift_SmtpTransport;
use Swift_Message;

class SendMail
{
    /**
     * @param string $to
     * @param string $subject
     * @param string $body
     * @param string $attachment
     * @return int
     */
    public static function fire($to, $subject, $body, $attachment)
    {
        //set Transport
        $hostname = config('global.MAIL_HOST');
        $port = config('global.MAIL_PORT');
        $encription = config('global.MAIL_ENCRYPTION');
        $username = config('global.MAIL_USERNAME');
        $password = config('global.MAIL_PASSWORD');
        $name = config('app.name');

        try{
           
            $transport = (new Swift_SmtpTransport($hostname, $port))
            ->setUsername($username)
            ->setPassword($password);

            $mailer = new Swift_Mailer($transport);

            $message = (new Swift_Message($subject))
            ->setFrom(['info@example.com' => $name])
            ->setTo($to)
            ->setBody($body,'text/html'); 

            $result = $mailer->send($message); #Send Mail

        }catch(\Swift_TransportException $e){
            $response = $e->getMessage() ;
            echo '<pre>';
            print_r($response);
            exit();
        }
        return $result;
    }

}