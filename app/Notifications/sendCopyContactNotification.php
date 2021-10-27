<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\HtmlString;

class sendCopyContactNotification extends Notification
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
            ->subject('Copy of your completed contact form.')
            ->greeting('Hello ' . $this->data->firstname . '!')
            ->line('We hereby send you a copy of your completed contact form on the Restaurant George Zuilen website.')
            ->line('The information below is given:')
            ->line(new HtmlString('<strong>E-mail:</strong><br/>' . $this->data->email))
            ->line(new HtmlString('<strong>Phone number:</strong><br/>' . $this->data->phone_number))
            ->line(new HtmlString('<strong>Subject:</strong><br/>' . $this->data->subject))
            ->line(new HtmlString('<strong>Message:</strong><br/>' . $this->data->text))
            ->action('Reserve a table in our restaurant', route('index'));
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
            'data' => $this->data->contact->email,
        ];
    }
}
