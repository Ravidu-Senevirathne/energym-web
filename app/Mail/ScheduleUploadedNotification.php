<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;


class ScheduleUploadedNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $schedule;

    /**
     * Create a new message instance.
     *
     * @param mixed $schedule The schedule data
     */
    public function __construct($schedule)
    {
        $this->schedule = $schedule;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('New Schedule Uploaded')
                    ->view('emails.schedule_uploaded')
                    ->with([
                            'title' => $this->schedule->title,
                            'description' => $this->schedule->description,
                            'start_time' => $this->schedule->start_time,
                            'end_time' => $this->schedule->end_time,
                            'schedule' => $this->schedule,
                    ]);
    }
}


class ScheduleUploadedNotification extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct()
    {
        $this->schedule = $schedule;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Schedule Uploaded Notification',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'view.name',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }

}


