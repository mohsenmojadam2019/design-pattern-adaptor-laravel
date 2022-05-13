<?php

namespace App\Http\Controllers;
use App\Adapters\Email\EmailClientInterface;
use Illuminate\Routing\Controller as BaseController;

class MainController extends BaseController
{
    public function mail(EmailClientInterface $emailAdapter)
    {
        $emailAdapter->send(
            'username@emailservice.com',
            'Hi! Thanks for signing up!',
            'Here is your verification code 12345'
        );

        dd('Email sent!');
    }

}
