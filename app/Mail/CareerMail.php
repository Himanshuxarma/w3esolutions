<?php

namespace App\Mail;
use App\Models\Career;	

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CareerMail extends Mailable
{
    use Queueable, SerializesModels;

    public $careers;



    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Career $careers)
    {
       
        $this->careers = $careers;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
 
    {
        // dd($this->careers['subject']);
        return $this->subject('Contact US - '. $this->careers['subject'])->view('email.careermail');
        // return $this->subject('Contact Message')->view('email.contactmail');
    }
}
