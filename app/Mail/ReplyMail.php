<?php

namespace App\Mail;
use App\Models\Enquiry;	

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReplyMail extends Mailable
{
    use Queueable, SerializesModels;

    public $enquiryReply;



    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Enquiry $enquiryReply)
    {
        // dd("singh");
        // dd($enquiryReply);
        $this->enquiryReply = $enquiryReply;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
 
    {
        // dd($this->enquiryReply['subject']);
        return $this->subject('Contact US - '. $this->enquiryReply['subject'])->view('email.replymail');
        // return $this->subject('Contact Message')->view('email.contactmail');
    }
}
