<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\HtmlString;

class sendLessonPackageNotification extends Notification
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
     * @param mixed $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param mixed $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('A lesson package has been chosen.')
            ->greeting('Hello Team George Zuilen!')
            ->line('Dear User')
            ->line('A teaching package has just been chosen on our website and that goes under the following package of data.')
            ->line('The information below is given:')
            ->line(new HtmlString('<strong>Package name:</strong>' /* . hier gaat de backage naam plaats vinden */))
            ->line(new HtmlString('<strong>Description:</strong> ' /* . hier gaat description plaats vinden */))
            ->line(new HtmlString('<strong>Number of evenings of the chef lessons:</strong> ' /* . hier gaat de backage chef vinden */))
            ->line(new HtmlString('<strong>Number of evenings of the bartender lessons:</strong> ' /* . hier gaat de bartender plaats vinden */))
            ->line(new HtmlString('<strong>Number of evenings of the waiter lessons:</strong><br/>' /* . hier gaat de waiter plaats vinden */))
            ->line('The course package details can also be found in your personal area of Restaurant George Marina.')
            ->action('You have a lesson package', 'subscribe');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'data' => $this->data->user->email,
        ];
    }
}
