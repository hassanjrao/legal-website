<?php

namespace App\Notifications;

use App\Models\ContactUsUser;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ContactUsNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public ContactUsUser $contactUsUser;
    public function __construct(ContactUsUser $contactUsUser)
    {
        $this->contactUsUser = $contactUsUser;
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
            ->subject('Contact Us Form Submitted')
            ->line('Name: ' . $this->contactUsUser->name)
            ->line('Email: ' . $this->contactUsUser->email)
            ->line('Subject: ' . $this->contactUsUser->subject)
            ->line('Message: ' . $this->contactUsUser->message);
            // ->action('Notification Action', route('admin.contact-us.index'));
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
