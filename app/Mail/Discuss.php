<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Discuss extends Mailable
{
    use SerializesModels;
    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = (object)$data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $email = $this
            ->to(['soshudenbook@gmail.com', 'rivkin@rkmag.com'])
            ->subject('Предмет на обсуждение')
            ->view('mail.discuss');

        if ($this->data->attach) {
            foreach ($this->data->attach as $file) {
                $email->attach($file->getRealPath(), [
                    'as' => $file->getClientOriginalName(),
                    'mime' => $file->getMimeType(),
                ]);
                /*$email->attachData($file->getRealPath(), $file->getClientOriginalName(), ['mime' => $file->getMimeType()]);*/
            }
        }

        return $email;
    }
}
