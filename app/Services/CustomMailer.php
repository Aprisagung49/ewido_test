<?php

namespace App\Services;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class CustomMailer
{
    /**
     * Kirim email menggunakan PHPMailer via SMTP tanpa autentikasi
     *
     * @param string $to       Email tujuan
     * @param string $subject  Subject email
     * @param string $body     Isi email (HTML)
     * @param string $from     Email pengirim (default)
     * @param string $fromName Nama pengirim (default)
     * @param string|null $replyToEmail Email untuk reply-to (optional)
     * @param string|null $replyToName  Nama untuk reply-to (optional)
     *
     * @return bool
     */
    public static function send(
        string $to,
        string $subject,
        string $body,
        string $from = 'recruitment@ewindo.com',
        string $fromName = 'AdminHRDPTEWINDO',
        ?string $replyToEmail = null,
        ?string $replyToName = null
    ): bool {
        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->SMTPAuth = false;  // tanpa login
            $mail->Host = 'goldenhawk.ewindo.com';
            $mail->Port = 25;

            $mail->setFrom($from, $fromName);
            $mail->addAddress($to);

            if ($replyToEmail) {
                $mail->addReplyTo($replyToEmail, $replyToName ?: '');
            }

            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = $body;

            return $mail->send();
        } catch (Exception $e) {
            // Bisa ditambah log error di sini jika perlu
            return false;
        }
    }
}
