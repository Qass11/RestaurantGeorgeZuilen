<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\HtmlString;

class sendContactNotification extends Notification
{
    use Queueable;

    private $data;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($data, $email)
    {
        $this->data = $data;
        $this->email = $email;
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
        $notifiable->email = $this->email;

        return (new MailMessage)
            ->subject('A contact form has been filled in.')
            ->greeting('Hello Team George Zuilen!')
            ->line('A contact form has just been filled out on the website, we hereby notify you that you should contact ' . $this->data->firstname . ' within 2 business days.')
            ->line('The information below is given:')
            ->line(new HtmlString('<strong>Firstname:</strong><br/>' . $this->data->firstname))
            ->line(new HtmlString('<strong>Lastname:</strong><br/>' . $this->data->lastname))
            ->line(new HtmlString('<strong>E-mail:</strong><br/>' . $this->data->email))
            ->line(new HtmlString('<strong>Phone number:</strong><br/>' . $this->data->phone_number))
            ->line(new HtmlString('<strong>Subject:</strong><br/>' . $this->data->subject))
            ->line(new HtmlString('<strong>Message:</strong><br/>' . $this->data->text))
            ->line('The contact form can also be found in your personal area of Restaurant George Marina.');
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
