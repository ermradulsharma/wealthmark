<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use Illuminate\Http\Request;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Chat $chat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chat $chat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Chat $chat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chat $chat)
    {
        //
    }



    public function webmenu()
    {
        if (Auth::check()) {
            $userId = Auth::user()->id;
        } else {
            $userId = 0;
        }

        $notification = Notification::where('read_at', null)->where('deleted_at', null)->where('notifiable_id', $userId)->get();
        $count_allnotification = $notification->count();
        $all_latest_notification = Notification::where('deleted_at', '=', null)->where('notifiable_id', $userId)->orderBy('id', 'DESC')->latest('created_at')->take(5)->get();

        return view('template.web_menu', ['notification' => $notification, 'count_allnotification' => $count_allnotification, 'all_latest_notification' => $all_latest_notification]);
    }

    public function check_user_online()
    {

        $status = '';
        $current_timestamp = strtotime(date("Y-m-d h:i:s") . '- 05 second');
        $current_timestamp = date('Y-m-d h:i:s', Auth::user()->id);
        $user_last_activity = User::where('id', Auth::user()->id)->first();
        if ($user_last_activity->last_activity_status > $current_timestamp) {
            $status = 'Online';
        } else {
            $status = 'Offline';
        }
        return $status;
    }

    function get_time_ago($time)
    {
        $time_difference = time() - $time;

        if ($time_difference < 1) {
            return 'less than 1 second ago';
        }
        $condition = array(
            12 * 30 * 24 * 60 * 60   => 'year',
            30 * 24 * 60 * 60        => 'month',
            24 * 60 * 60             => 'day',
            60 * 60                  => 'hour',
            60                       => 'minute',
            1                        => 'second'
        );


        foreach ($condition as $secs => $str) {
            $d = $time_difference / $secs;

            if ($d >= 1) {
                $t = round($d);
                return 'about ' . $t . ' ' . $str . ($t > 1 ? 's' : '') . ' ago';
            }
        }
    }
}
