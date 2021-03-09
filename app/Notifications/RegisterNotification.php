<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class RegisterNotification extends Notification
{
    use Queueable;

    public $emailData;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->emailData = $data;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject("Registration successful")
            ->greeting('Welcome!'. $notifiable->username)
            ->line("Dear ". $notifiable->full_name. ' we are pleased to have you as a member of stockmutualinvest platform')
            ->line("Welcome to stockmutualinvest trading platform, your trade manager will guide you through this investment.")
            ->line("You can ask questions through the live chat on the website.")
            ->line("You can visit your dashboard to view more")
            ->action('Link To Dashboard', url('/dashboard'))
            ->line('Thank you for trading!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
