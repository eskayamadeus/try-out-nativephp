<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Native\Laravel\Facades\Notification;

class NotificationButtonController extends Controller
{
    public function __invoke()
    {
        Notification::title('Hello from NativePHP')
            ->message('This is a detail message coming from your Laravel app.')
            ->show();
    }
}
