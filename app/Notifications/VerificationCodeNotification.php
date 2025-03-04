<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class VerificationCodeNotification extends Notification
{
    use Queueable;
    protected $verificationCode;

    public function __construct($verificationCode)
    {
        $this->verificationCode = $verificationCode;
    }

    public function via($notifiable)
    {
        return ['mail']; //確保email是啟用的通道 ['sms'] 可以用簡訊
    }

    public function toMail($notifiable)
    {
      

        return (new MailMessage)
            ->subject('您的註冊驗證碼')
            ->line('您好！您的註冊驗證碼如下：')
            ->line('**' . $this->verificationCode . '**') // 加強顯示
            ->line('請在 10 分鐘內輸入驗證碼，若您沒有請求此驗證碼，請忽略此郵件。')
            ->line('謝謝您的使用！');
    }
}
