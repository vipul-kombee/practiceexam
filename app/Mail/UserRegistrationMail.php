<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\User;

class UserRegistrationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $pdfPath;

    public function __construct(User $user, $pdfPath)
    {
        $this->user = $user;
        $this->pdfPath = $pdfPath;
    }

    public function build()
    {
        return $this->subject('Your Registration Details')
                    ->view('emails.registration')
                    ->attach($this->pdfPath, [
                        'as' => 'User_Registration_Details.pdf',
                        'mime' => 'application/pdf',
                    ]);
    }
}
