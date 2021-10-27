<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\HtmlString;

class sendActivationNotification extends Notification
{
    use Queueable;

    private $data;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
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
            ->subject('Created an account at Restaurant George Zuilen.')
            ->greeting('Hello ' . $this->data->firstname . '!')
            ->line('You have just successfully completed a registration at Restaurant George Zuilen using the information below:')
            ->line(new HtmlString('<strong>Firstname:</strong><br/>' . $this->data->firstname))
            ->line(new HtmlString('<strong>Lastname:</strong><br/>' . $this->data->lastname))
            ->line(new HtmlString('<strong>E-mail:</strong><br/>' . $this->data->email))
            ->Line('In order to use your account, you need to activate your account and complete your data, you do this by pressing the button below.')
            ->action('Activate and complete account', route('createActivate', $this->data->activation_token));
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
            'data' => $this->data->user->email,
        ];
    }
}
