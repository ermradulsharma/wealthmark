<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Ratchet\MessageComponentInterface;

use Ratchet\ConnectionInterface;

use App\Models\User;

use App\Models\Chat;

use App\Models\Order;

use Session;

use Auth;

class SocketController extends Controller implements MessageComponentInterface
{
    protected $clients;

    public function __construct()
    {
        $this->clients = new \SplObjectStorage;
    }

    public function onOpen(ConnectionInterface $conn)
    {
        // echo "Client connected " . $conn->resourceId . " \n";
        $this->clients->attach($conn);

        $querystring = $conn->httpRequest->getUri()->getQuery();

        parse_str($querystring, $queryarray);

        if (isset($queryarray['token'])) {
            User::where('user_name', $queryarray['token'])->update(['online_status' => '1']);

            $user_id = User::select('id')->where('user_name', $queryarray['token'])->get();
            //print_r($user_id);
            $data['id'] = $user_id[0]->id;

            // if($data['online_status']==1){
            //     $data['online_status'] = 'Online';
            // }

            // if($data['online_status']==0){
            //     $data['online_status'] = 'Offline';
            // }
            $data['online_status'] = 'Online';

            foreach ($this->clients as $client) {
                if ($client->resourceId != $conn->resourceId) {
                    $client->send(json_encode($data));
                }
            }

            //print_r($this->clients);

        }
    }

    public function onMessage(ConnectionInterface $conn, $msg)
    {
        if (preg_match('~[^\x20-\x7E\t\r\n]~', $msg) > 0) {
            //receiver image in binary string message

            $image_name = time() . '.jpg';

            file_put_contents(public_path('images/') . $image_name, $msg);

            $send_data['image_link'] = $image_name;

            foreach ($this->clients as $client) {
                if ($client->resourceId == $conn->resourceId) {
                    $client->send(json_encode($send_data));
                }
            }
        }


        $data = json_decode($msg);

        if (isset($data->type)) {

            if ($data->type == 'request_load_unconnected_user') {

                $user_data = User::select('id', 'first_name', 'online_status', 'avatar')->where('id', '!=', $data->from_user_id)->first();
                //print_r($user_data);
                //$sub_data = array();

                // foreach($user_data as $row)
                // {
                $sub_data = array(
                    'name'      =>  $user_data->first_name,
                    'id'        =>  $user_data->id,
                    'status'    =>  $user_data->online_status,
                    'user_image' =>  $user_data->avatar
                );
                // print_r($sub_data);
                // }

                //$sender_connection_id = User::select('connection_id')->where('id', $data->from_user_id)->get();

                //$send_data['data'] = $sub_data;

                //$send_data['response_load_unconnected_user'] = true;

                foreach ($this->clients as $client) {
                    //if($client->resourceId == $sender_connection_id[0]->connection_id)
                    //{
                    $client->send(json_encode($sub_data));
                    //}
                }
            }

            // if($data->type == 'request_search_user')
            // {
            //     $user_data = User::select('id', 'first_name', 'online_status', 'avatar')
            //                         ->where('id', '!=', $data->from_user_id)
            //                         ->where('first_name', 'like', '%'.$data->search_query.'%')
            //                         ->orderBy('first_name', 'ASC')
            //                         ->get();

            //     $sub_data = array();

            //     foreach($user_data as $row)
            //     {

            //         $chat_request = Order::select('id')
            //                         ->where(function($query) use ($data, $row){
            //                             $query->where('buyer_id', $data->from_user_id)->where('to_user_id', $row->id);
            //                         })
            //                         ->orWhere(function($query) use ($data, $row){
            //                             $query->where('seller_id', $row->id)->where('to_user_id', $data->from_user_id);
            //                         })->get();

            //         /*
            //         SELECT id FROM chat_request
            //         WHERE (from_user_id = $data->from_user_id AND to_user_id = $row->id)
            //         OR (from_user_id = $row->id AND to_user_id = $data->from_user_id)
            //         */

            //         if($chat_request->count() == 0)
            //         {
            //             $sub_data[] = array(
            //                 'name'  =>  $row['first_name'],
            //                 'id'    =>  $row['id'],
            //                 'status'=>  $row['online_status'],
            //                 'user_image' => $row['avatar']
            //             );
            //         }


            //     }

            //     //$sender_connection_id = User::select('connection_id')->where('id', $data->from_user_id)->get();

            //     $send_data['data'] = $sub_data;

            //     $send_data['response_search_user'] = true;

            //     foreach($this->clients as $client)
            //     {
            //       // if($client->resourceId == $sender_connection_id[0]->connection_id)
            //         //{
            //             $client->send(json_encode($send_data));
            //         //}
            //     }
            // }

            // if($data->type == 'request_chat_user')
            // {
            //     $chat_request = new Chat_request;

            //     $chat_request->from_user_id = $data->from_user_id;

            //     $chat_request->to_user_id = $data->to_user_id;

            //     $chat_request->status = 'Pending';

            //     $chat_request->save();

            //     $sender_connection_id = User::select('id')->where('id', $data->from_user_id)->get();

            //     $receiver_connection_id = User::select('id')->where('id', $data->to_user_id)->get();

            //     foreach($this->clients as $client)
            //     {
            //         //if($client->resourceId == $sender_connection_id[0]->connection_id)
            //         //{
            //             $send_data['response_from_user_chat_request'] = true;

            //             $client->send(json_encode($send_data));
            //       // }

            //       // if($client->resourceId == $receiver_connection_id[0]->connection_id)
            //       // {
            //             $send_data['user_id'] = $data->to_user_id;

            //             $send_data['response_to_user_chat_request'] = true;

            //             $client->send(json_encode($send_data));
            //       // }
            //     }
            // }

            // if($data->type == 'request_load_unread_notification')
            // {
            //     $notification_data = Order::select('id', 'buyer_id', 'seller_id')
            //                             //->where('status', '!=', 'Approve')
            //                             ->where(function($query) use ($data){
            //                                 $query->where('buyer_id', $data->user_id)->orWhere('seller_id', $data->user_id);
            //                             })->orderBy('id', 'ASC')->get();

            //     /*
            //     SELECT id, from_user_id, to_user_id, status FROM chat_requests
            //     WHERE status != 'Approve'
            //     AND (from_user_id = $data->user_id OR to_user_id = $data->user_id)
            //     ORDER BY id ASC
            //     */

            //     $sub_data = array();

            //     foreach($notification_data as $row)
            //     {
            //         $user_id = '';

            //         $notification_type = '';

            //         if($row->from_user_id == $data->user_id)
            //         {
            //             $user_id = $row->to_user_id;

            //             $notification_type = 'Send Request';
            //         }
            //         else
            //         {
            //             $user_id = $row->from_user_id;

            //             $notification_type = 'Receive Request';
            //         }

            //         $user_data = User::select('first_name', 'avatar')->where('id', $user_id)->first();

            //         $sub_data[] = array(
            //             'id'            =>  $row->id,
            //             'from_user_id'  =>  $row->buyer_id,
            //             'to_user_id'    =>  $row->seller_id,
            //             'name'          =>  $user_data->first_name,
            //             'notification_type' =>  $notification_type,
            //             'status'           =>   $row->status,
            //             'user_image'    =>  $user_data->avatar
            //         );
            //     }

            //     //$sender_connection_id = User::select('connection_id')->where('id', $data->user_id)->get();

            //     foreach($this->clients as $client)
            //     {
            //         //if($client->resourceId == $sender_connection_id[0]->connection_id)
            //         //{
            //             $send_data['response_load_notification'] = true;

            //             $send_data['data'] = $sub_data;

            //             $client->send(json_encode($send_data));
            //         //}
            //     }
            // }

            // if($data->type == 'request_process_chat_request')
            // {
            //     Order::where('id', $data->chat_request_id)->update(['status' => $data->action]);

            //     $sender_connection_id = User::select('connection_id')->where('id', $data->from_user_id)->get();

            //     $receiver_connection_id = User::select('connection_id')->where('id', $data->to_user_id)->get();

            //     foreach($this->clients as $client)
            //     {
            //         $send_data['response_process_chat_request'] = true;

            //         if($client->resourceId == $sender_connection_id[0]->connection_id)
            //         {
            //             $send_data['user_id'] = $data->from_user_id;
            //         }

            //         if($client->resourceId == $receiver_connection_id[0]->connection_id)
            //         {
            //             $send_data['user_id'] = $data->to_user_id;
            //         }

            //         $client->send(json_encode($send_data));
            //     }
            // }

            if ($data->type == 'request_connected_chat_user') {
                //echo $data->from_user_id;
                //print_r($data->from_user_id);
                //print_r($data);
                //session_start();
                //print_r(Session::get('orderid'));
                $condition_1 = ['seller_id' => $data->from_user_id, 'buyer_id' => $data->from_user_id];
                // $condition_1 = ['seller_id' => $data->from_user_id, 'buyer_id' => $data->from_user_id];
                //print_r($condition_1);

                $user_id_row = Order::select('*')
                    ->orWhere($condition_1)
                    ->where('id', $data->order_id)
                    ->first();
                //print_r($user_id_row);
                //print_r($user_id_row->buyer_id);
                /*
                SELECT from_user id, to_user_id FROM chat_requests
                WHERE (from_user_id = $data->from_user_id OR to_user_id = $data->from_user_id)
                AND status = 'Approve'
                */

                $sub_data = array();

                //foreach($user_id_data as $user_id_row)
                //{
                $user_id = '';

                if ($user_id_row->from_user_id != $data->from_user_id) {
                    $user_id = $user_id_row->buyer_id;
                    //echo"different login user";
                } else {
                    $user_id = $user_id_row->seller_id;
                    // echo"same login user";
                }

                // if($data->user_type=="buyer"){
                //     $user_data = User::select('id', 'first_name', 'nick_name', 'country_flag', 'government_id_verified', 'avatar', 'online_status', 'updated_at')->where('id', $user_id_row->seller_id)->first();
                // }

                // if($data->user_type=="seller"){
                $user_data = User::select('id', 'first_name', 'nick_name', 'country_flag', 'government_id_verified', 'avatar', 'online_status', 'updated_at')->where('id', $user_id)->first();
                //}

                //print_r($user_data);
                // if(date('Y-m-d') == date('Y-m-d', strtotime($user_data->updated_at)))
                // {
                //     $last_seen = 'Last Seen At ' . date('H:i', strtotime($user_data->updated_at));
                // }
                // else
                // {
                //     $last_seen = 'Last Seen At ' . date('d/m/Y H:i', strtotime($user_data->updated_at));
                // }

                $sub_data = array(
                    'id'    =>  $user_data->id,
                    'name'  =>  $user_data->first_name,
                    'user_image'    =>  $user_data->avatar,
                    'user_status'   =>  $user_data->online_status,
                    'last_seen'     =>  date('d-m-Y h:i:s'),
                    'nick_name'     =>  $user_data->nick_name,
                    'country_flag'  =>  $user_data->country_flag,
                    'government_id_verified'  =>  $user_data->government_id_verified,
                );

                //print_r($sub_data);
                //}

                //$sender_connection_id = User::select('connection_id')->where('id', $data->from_user_id)->get();

                foreach ($this->clients as $client) {
                    //if($client->resourceId == $sender_connection_id[0]->connection_id)
                    //{
                    $send_data['response_connected_chat_user'] = true;

                    $send_data['data'] = $sub_data;

                    $send_data['order_data'] = $user_id_row;

                    $client->send(json_encode($send_data));
                    //}
                }
            }

            if ($data->type == 'request_send_message') {
                //save chat message in mysql

                //print_r($data);

                // chat_message_id
                // to_user_id
                // from_user_id
                // order_id
                // chat_message
                // status
                // created_at
                // updated_at


                $chat = new Chat;

                $chat->from_user_id = $data->from_user_id;

                $chat->to_user_id = $data->to_user_id;

                $chat->chat_message = $data->message;

                $chat->order_id = $data->order_id;

                $chat->status = '0';

                $chat->save();

                $chat_message_id = $chat->id;
                //print_r($chat->id);
                // $receiver_connection_id = User::select('connection_id')->where('id', $data->to_user_id)->get();

                // $sender_connection_id = User::select('connection_id')->where('id', $data->from_user_id)->get();

                foreach ($this->clients as $client) {
                    //if($client->resourceId == $receiver_connection_id[0]->connection_id || $client->resourceId == $sender_connection_id[0]->connection_id)
                    //{
                    $send_data['chat_message_id'] = $chat_message_id;

                    $send_data['message'] = $data->message;

                    $send_data['from_user_id'] = $data->from_user_id;

                    $send_data['to_user_id'] = $data->to_user_id;

                    //if($client->resourceId == $receiver_connection_id[0]->connection_id)
                    //{
                    Chat::where('chat_message_id', $chat_message_id)->update(['status' => '1']);

                    $send_data['status'] = '1';
                    //}
                    //else
                    //{
                    //$send_data['message_status'] = 'Not Send';
                    //}

                    $client->send(json_encode($send_data));
                    //}
                }
            }

            if ($data->type == 'request_chat_history') {
                //print_r($data);
                $chat_data = Chat::select('chat_message_id', 'from_user_id', 'to_user_id', 'chat_message', 'status')
                    ->where(function ($query) use ($data) {
                        $query->where('from_user_id', $data->from_user_id)->where('to_user_id', $data->to_user_id)->where('order_id', $data->order_id);
                    })
                    ->orWhere(function ($query) use ($data) {
                        $query->where('from_user_id', $data->to_user_id)->where('to_user_id', $data->from_user_id)->where('order_id', $data->order_id);
                    })->orderBy('chat_message_id', 'ASC')->get();
                /*
                SELECT id, from_user_id, to_user_id, chat_message, message status
                FROM chats
                WHERE (from_user_id = $data->from_user_id AND to_user_id = $data->to_user_id)
                OR (from_user_id = $data->to_user_id AND to_user_id = $data->from_user_id)
                ORDER BY id ASC
                */
                //print_r($chat_data);
                $send_data['chat_history'] = $chat_data;

                //$receiver_connection_id = User::select('connection_id')->where('id', $data->from_user_id)->get();

                foreach ($this->clients as $client) {
                    //if($client->resourceId == $receiver_connection_id[0]->connection_id)
                    //{
                    $client->send(json_encode($send_data));
                    //}
                }
            }

            // if($data->type == 'update_chat_status')
            // {
            //     //update chat status
            //     //print_r($data);
            //     Chat::where('chat_message_id', $data->chat_message_id)->update(['status' => 1]);

            //     //$sender_connection_id = User::select('connection_id')->where('id', $data->from_user_id)->get();

            //     foreach($this->clients as $client)
            //     {
            //         //if($client->resourceId == $sender_connection_id[0]->connection_id)
            //         //{
            //             $send_data['update_message_status'] = $data->chat_message_status;

            //             $send_data['chat_message_id'] = $data->chat_message_id;

            //             $client->send(json_encode($send_data));
            //         //}
            //     }
            // }

            // if($data->type == 'check_unread_message')
            // {
            //     $chat_data = Chat::select('chat_message_id', 'from_user_id', 'to_user_id')->where('status', '!=', '1')->where('from_user_id', $data->to_user_id)->get();

            //     /*
            //     SELECT id, from_user_id, to_user_id FROM chats
            //     WHERE message_status != 'Read'
            //     AND from_user_id = $data->to_user_id
            //     */

            //     // $sender_connection_id = User::select('connection_id')->where('id', $data->from_user_id)->get(); //send number of unread message

            //     // $receiver_connection_id = User::select('connection_id')->where('id', $data->to_user_id)->get(); //send message read status

            //     foreach($chat_data as $row)
            //     {
            //         Chat::where('chat_message_id', $row->chat_message_id)->update(['status' => '0']);

            //         foreach($this->clients as $client)
            //         {
            //             //if($client->resourceId == $sender_connection_id[0]->connection_id)
            //             //{
            //                 $send_data['count_unread_message'] = 1;

            //                 $send_data['chat_message_id'] = $row->chat_message_id;

            //                 $send_data['from_user_id'] = $row->from_user_id;
            //             //}

            //             //if($client->resourceId == $receiver_connection_id[0]->connection_id)
            //             //{
            //                 $send_data['update_message_status'] = '0';

            //                 $send_data['chat_message_id'] = $row->chat_message_id;

            //                 $send_data['unread_msg'] = 1;

            //                 $send_data['from_user_id'] = $row->from_user_id;
            //             //}

            //             $client->send(json_encode($send_data));
            //         }
            //     }
            // }
        }
    }

    public function onClose(ConnectionInterface $conn)
    {
        $this->clients->detach($conn);

        $querystring = $conn->httpRequest->getUri()->getQuery();

        parse_str($querystring, $queryarray);

        if (isset($queryarray['token'])) {
            User::where('token', $queryarray['token'])->update(['connection_id' => 0, 'user_status' => 'Offline']);

            $user_id = User::select('id', 'updated_at')->where('token', $queryarray['token'])->get();

            $data['id'] = $user_id[0]->id;

            $data['status'] = 'Offline';

            $updated_at = $user_id[0]->updated_at;

            if (date('Y-m-d') == date('Y-m-d', strtotime($updated_at))) //Same Date, so display only Time
            {
                $data['last_seen'] = 'Last Seen at ' . date('H:i');
            } else {
                $data['last_seen'] = 'Last Seen at ' . date('d/m/Y H:i');
            }

            foreach ($this->clients as $client) {
                if ($client->resourceId != $conn->resourceId) {
                    $client->send(json_encode($data));
                }
            }
        }
    }

    public function onError(ConnectionInterface $conn, \Exception $e)
    {
        echo "An error has occurred: {$e->getMessage()} \n";

        $conn->close();
    }
}
