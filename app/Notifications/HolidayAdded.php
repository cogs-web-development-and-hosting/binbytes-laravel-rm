<?php

namespace App\Notifications;

use App\Holiday;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class HolidayAdded extends Notification
{
    use Queueable, SerializesModels, Broadcaster;

    /**
     * @var Holiday
     */
    protected $holiday;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Holiday $holiday)
    {
        $this->holiday = $holiday;
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $url = url('/holidays/'.$this->holiday->id);

        return (new MailMessage)
            ->subject('Holiday Alert')
            ->markdown('mail.holiday.added', [
                'holiday' => $this->holiday,
                'url'=> $url,
            ]);
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
            'id' => $this->holiday->id,
            'title' => $this->holiday->title,
            'description' => $this->holiday->description,
            'start_date'=> $this->holiday->start_date->toDateString(),
            'end_date' => $this->holiday->end_date->toDateString(),
        ];
    }
}
