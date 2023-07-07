<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chat\ChatMessages;
use App\Models\Chat\ChatModel;
use Hash;
use App\Models\User;
use App\Events\MyEvent;
use Illuminate\Support\Facades\Broadcast;
use Pusher\PushNotifications\PushNotifications;

class ChatController extends Controller
{
    public function showChat(Request $request,$userid,$chatid,$recieverid)
    {
        # code...
        // $Chats = ChatModel::with('sender')->with('reciever')->get();
        //dd($Chats);

        // User::create([
        //     'name' => 'test4',
        //     'email' => 'test4@gmail.com',
        //     'password' => bcrypt('test3'),
        // ]);


        $messages = ChatMessages::where('Chat_id',$chatid)->get();
        return view('Chat.chat_messages', ["sender_id" => $userid, "chatid" => $chatid, "messages" => $messages, "recieverid" => $recieverid]);
    }

    public function sendMessage(Request $request)
    {
        # code...
        // return $request->all();
        $chat = ChatModel::where('id',$request->chat_id)->first();
        if($chat == null){
            $chatCreated = ChatModel::create([
                'parent_user_id' => \Auth::id(),
                'user_sender_id' => \Auth::id(),
                'user_reciever_id' => $request->reciever_userid,
            ]);

            $check =ChatMessages::create(
                [
                    'Chat_id' => $chatCreated->id,
                    'sender_user_id' => $request->sender_id,
                    'reciever_user_id' => $request->reciever_userid,
                    'message_body' => $request->message_body,
                ]
            );


            $html_message = "";

            // event(new MyEvent('hello world'));
            // event(new MyEvent($request->message_body,$request->chat_id,));


            /**
             *
             * Send Notifications using pusher sdk
             *
             */


            $sender_name = User::where('id',\Auth::id())->first();


            broadcast(new MyEvent($request->message_body,$request->chat_id,\Auth::id(),$request->reciever_userid, $html_message,$sender_name->name));
            /**
             *
             *
             * Send Notification using sdk install
             */



            // $beamsClient = new PushNotifications(array(
            //     "instanceId" => "4d13f65e-184c-42b7-ae8c-12043b1f7a74",
            //     "secretKey" => "9781BAD3915E3FAA60796FCEEEE3B80207E03E6FEA81951971230CF436E00BEC",
            // ));


            // $publishResponse = $beamsClient->publishToUsers(
            //     array($request->reciever_userid),
            //     array(
            //       "web" => array(
            //         "notification" => array(
            //           "title" => "You Recieved a Message From ".$sender_name->name,
            //           "body" => $request->message_body,
            //         )
            //       )
            //   ));




             /**
              * Send using curl command
              *
              */


            // $url = "https://4d13f65e-184c-42b7-ae8c-12043b1f7a74.pushnotifications.pusher.com/publish_api/v1/instances/4d13f65e-184c-42b7-ae8c-12043b1f7a74/publishes";

            // $curl = curl_init($url);
            // curl_setopt($curl, CURLOPT_URL, $url);
            // curl_setopt($curl, CURLOPT_POST, true);
            // curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

            // $headers = array(
            // "Content-Type: application/json",
            // "Authorization: Bearer 9781BAD3915E3FAA60796FCEEEE3B80207E03E6FEA81951971230CF436E00BEC",
            // );
            // curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

            // $data = '{"interests":["hello"],"web":{"notification":{"title":"Generic Chat","body":"'.$request->message_body.'"}}}';

            // curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

            // //for debug only!
            // curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
            // curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

            // $resp = curl_exec($curl);
            // curl_close($curl);





            if($check){
                return sendExternalSuccess("Message Sent Successfully", $check);
            }else{
                return sendExternalError("Something went wrong", $check);
            }
        }else{
            $check =ChatMessages::create(
                [
                    'Chat_id' => $request->chat_id,
                    'sender_user_id' => $request->sender_id,
                    'reciever_user_id' => $request->reciever_userid,
                    'message_body' => $request->message_body,
                ]
            );


            /*
                Get Sender name from sender id
            */

            $sender_name = User::where('id',$request->sender_id)->first();

            /**
             *
             *
             * Send Notification using sdk install
             */



            // $beamsClient = new PushNotifications(array(
            //     "instanceId" => "4d13f65e-184c-42b7-ae8c-12043b1f7a74",
            //     "secretKey" => "9781BAD3915E3FAA60796FCEEEE3B80207E03E6FEA81951971230CF436E00BEC",
            // ));


            // $publishResponse = $beamsClient->publishToUsers(
            //     array($request->reciever_userid),
            //     array(
            //       "web" => array(
            //         "notification" => array(
            //           "title" => "You Recieved a Message From ".$sender_name->name,
            //           "body" => $request->message_body,
            //         )
            //       )
            //   ));


            /**
             *
             *Send notification using curl
             */
            // $url = "https://4d13f65e-184c-42b7-ae8c-12043b1f7a74.pushnotifications.pusher.com/publish_api/v1/instances/4d13f65e-184c-42b7-ae8c-12043b1f7a74/publishes";

            // $curl = curl_init($url);
            // curl_setopt($curl, CURLOPT_URL, $url);
            // curl_setopt($curl, CURLOPT_POST, true);
            // curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

            // $headers = array(
            // "Content-Type: application/json",
            // "Authorization: Bearer 9781BAD3915E3FAA60796FCEEEE3B80207E03E6FEA81951971230CF436E00BEC",
            // );
            // curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

            // $data = '{"interests":["hello"],"web":{"notification":{"title":"Generic Chat","body":"'.$request->message_body.'"}}}';

            // curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

            // //for debug only!
            // curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
            // curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

            // $resp = curl_exec($curl);
            // curl_close($curl);

            // event(new MyEvent('hello world'));

            $html_message = "<div class='received-message-ctm d-flex'><div><div class='my-msg Oswald-Light'><span>".$request->message_body."</span></div><div><span class='received-time OpenSans-Regular font-16 text-right'>8 min ago</span></div></div><div class='user-profile-ha-ctm-right d-flex align-items-center justify-content-center'><img src='img/user-profile-1.jpg' class='img-fluid' alt='Sender Image'></div></div>";

            // event(new MyEvent('hello world'));
            // event(new MyEvent($request->message_body,$request->chat_id,));
            broadcast(new MyEvent($request->message_body,$request->chat_id,\Auth::id(),$request->reciever_userid, $html_message,$sender_name->name));
            // broadcast(new MyEvent('hello world',10,2,1,"<div>html</div>"));


            if($check){
                return sendExternalSuccess("Message Sent Successfully", $check);
            }else{
                return sendExternalError("Something went wrong", $check);
            }
        }

    }


    // public function userList(Request $request)
    // {
    //     # code...
    //     $user = User::where('id','!=',\Auth::id())->get();
    //     $chats = ChatModel::where('user_sender_id',\Auth::id())->orwhere('user_reciever_id',\Auth::id())->with('sender')->with('reciever')->get();
    //     return view('Chat.user_list', ["users" => $user, "chats" => $chats]);
    // }

    public function userList(Request $request)
    {
        # code...
        $user = User::where('id','!=',\Auth::id())->get();
        $chats = ChatModel::where('user_sender_id',\Auth::id())->orwhere('user_reciever_id',\Auth::id())->with('sender')->with('reciever')->latest()->get();
        return view('Chat.chat_messages', ["users" => $user, "chats" => $chats]);
    }



    public function getChatMessages(Request $request)
    {
        # code...
        // return $request->all();
        if($request->chat_id == null){
            return sendExternalError("Please Select Chat_Id");
        }

        $chat = ChatModel::where('id',$request->chat_id)->first();
        //get chat messages

        $messages = ChatMessages::where('Chat_id',$request->chat_id)->with('sender')->with('reciever')->get();

        if($messages){
            return sendExternalSuccess("You Chat messages are here", ["messages" => $messages,"chat" => $chat]);
        }else{
            return sendExternalError("Something went wrong");
        }
    }


    public function startChat(Request $request)
    {
        # code...
        // return $request->all();

        //check already chat exists

        $chats_first = ChatModel::where('user_sender_id',\Auth::id())->where('user_reciever_id',$request->reciever_user_id)->with('sender')->with('reciever')->first();
        $chats_second = ChatModel::where('user_reciever_id',\Auth::id())->where('user_sender_id',$request->reciever_user_id)->with('sender')->with('reciever')->first();

        if($chats_first == null){
            $final_chat = $chats_second;
        }else{
            $final_chat = $chats_first;
        }


        if($final_chat !=null){
            $messages = ChatMessages::where('Chat_id',$final_chat->id)->with('sender')->with('reciever')->get();
            if($messages!=null){
                return sendExternalSuccess("You Chat messages are here", ["messages" => $messages,"chat" => $final_chat]);
            }else{
                return sendExternalError("Something went wrong");
            }
        }else{
            // $chatCreated = ChatModel::create([
            //     'parent_user_id' => \Auth::id(),
            //     'user_sender_id' => \Auth::id(),
            //     'user_reciever_id' => $request->reciever_user_id,
            // ]);

            // if($chatCreated !=null){

            //     return sendExternalSuccess("New Chat Created Successfully");
            // }

            return sendExternalSuccess("No record found");

        }
        //return $final_chat;
    }

    public function getPusherData(Request $request)
    {
        # code...
        if($request->user_id == null){
            return sendExternalError("Please Enter User Id");
        }
        $chats_first = ChatModel::where('user_sender_id',\Auth::id())->get('id');
        $chats_second = ChatModel::where('user_reciever_id',\Auth::id())->get('id');
        $test = $chats_first->merge($chats_second);
        //$merge_object = (object) array_merge((array) $chats_second, (array) $chats_first);
        return sendExternalSuccess('Your Chats are here',$test);
    }

}
