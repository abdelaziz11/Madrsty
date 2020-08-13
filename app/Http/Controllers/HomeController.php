<?php

namespace App\Http\Controllers;

use Event;
use App\Model\Student;
use Illuminate\Http\Request;
use App\Events\NewNotificationEvent;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function fire_event()
    {
        $user = Student::find(1);
        event(new NewNotificationEvent($user, 'Hello world'));

    }
}
