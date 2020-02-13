<?php

namespace App\Notifications;

use http\Url;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class AuthorPostApprove extends Notification implements ShouldQueue
{
    use Queueable;
    public $post;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($post)
    {
        $this->post = $post;
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
                    ->subject('Your Post Success Fully Apporoved')
                    ->greeting('Hellow, '.$this->post->user->name . '!')
                    ->line('Your Post Success fully approved')
                    ->line('Pos Title', url(route('author.post.show', $this->post->id)))
                    ->line('The introduction to the notification.')
                    ->action('View', url(route('author.post.show', $this->post->id )))
                    ->line('Thank you for using our application!');
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
