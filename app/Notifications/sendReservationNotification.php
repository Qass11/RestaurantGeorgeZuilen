<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\HtmlString;

class sendReservationNotification extends Notification
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
            ->subject('Confirmation of your reservation at George Zuilen')
            ->greeting('Hello ' . $this->data->firstname . ' ' . $this->data->lastname .'!')
            ->line('You have just successfully made a reservation at Restaurant George Zuilen! The information below is given:')
            ->line(new HtmlString('<strong>Date:</strong> ' . $this->data->date))
            ->line(new HtmlString('<strong>Time:</strong> ' . $this->data->time))
            ->line(new HtmlString('<strong>Type:</strong> ' . $this->data->type))
            ->line(new HtmlString('<strong>Persons:</strong> ' . $this->data->persons))
            ->line(new HtmlString('<strong>Email:</strong> ' . $this->data->email))
            ->line(new HtmlString('<strong>Phone:</strong> ' . $this->data->phone_number))
            ->line(new HtmlString('<strong>Comments:</strong> ' . $this->data->comments))
            ->line('We look forward to seeing you soon at our restaurant!');
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
            'data' => $this->data->reservation->email,
        ];
    }
}
