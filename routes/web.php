<?php

use App\Events\MyEvent;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ChatController;
use Illuminate\Http\Request;
use Pusher\Pusher;
use Pusher\PushNotifications\PushNotifications;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Chat.chat_messages');
});


Route::get('/login', function () {
    return view('Auth.login');
});


Route::get('/register', function () {
    return view('Auth.register');
});

// {{route()}}

//Route::get('chat/{userid}/{chatid}/{recieverid}',[ChatController::class,'showChat']);
Route::get('/chat-users',[ChatController::class,'userList']);
Route::post('/get-chat-messages',[ChatController::class,'getChatMessages'])->name('get-chat-messages');
Route::post('/create-chat',[ChatController::class,'startChat'])->name('create-chat');
Route::post('/sendMessage', [ChatController::class, 'sendMessage'])->name('sendMessage');
Route::post('/validate-login',[LoginController::class, 'login'])->name('validate-login');
Route::post('/get-all-chat-sender-chat-id',[ChatController::class, 'getPusherData'])->name('get-all-chat-sender-chat-id');


Route::post('/pusher-auth', function (Request $request) {
    // return $request->all();
    if(\Auth::check()){
        $app_key = "3a374406587fcdab3724";
        $app_secret= "5ae250859c1f22e0cd84";
        $app_id = "1187038";
        // $socket_id = "1937.2846318";
        // $channel_id = "private-notification-channel";

        $pusher = new Pusher($app_key,$app_secret,$app_id);
        $auth = $pusher->socket_auth($request->channel_name,$request->socket_id);
        return $auth;
    }else{
        return "UnAuthorized";
    }
});


Route::get('/trigger-event', function (Request $request) {
    // return $request->all();
      $k = broadcast(new MyEvent('hello world',10,2,1,"<div>html</div>","a"));
    dd($k);
});

// Route::get('/trigger-event', function (Request $request) {
//     // return $request->all();
//     //   broadcast(new MyEvent('hello world',10,2,1));
//     $url = "https://4d13f65e-184c-42b7-ae8c-12043b1f7a74.pushnotifications.pusher.com/publish_api/v1/instances/4d13f65e-184c-42b7-ae8c-12043b1f7a74/publishes";

//     $curl = curl_init($url);
//     curl_setopt($curl, CURLOPT_URL, $url);
//     curl_setopt($curl, CURLOPT_POST, true);
//     curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

//     $headers = array(
//     "Content-Type: application/json",
//     "Authorization: Bearer 9781BAD3915E3FAA60796FCEEEE3B80207E03E6FEA81951971230CF436E00BEC",
//     );
//     curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

//     $data = '{"interests":["hello"],"web":{"notification":{"title":"Hello","body":"Hello, world!"}}}';

//     curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//     //for debug only!
//     curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
//     curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

//     $resp = curl_exec($curl);
//     curl_close($curl);
// });




Route::get('/pusher/beams-auth', function (Request $request) {


    $beamsClient = new PushNotifications(array(
        "instanceId" => "4d13f65e-184c-42b7-ae8c-12043b1f7a74",
        "secretKey" => "9781BAD3915E3FAA60796FCEEEE3B80207E03E6FEA81951971230CF436E00BEC",
    ));


    $userID = $request->user()->id; // If you use a different auth system, do your checks here
    $userIDInQueryParam = $request->input('user_id');

    if ($userID != $userIDInQueryParam) {
        return response('Inconsistent request', 401);
    } else {
        $beamsToken = $beamsClient->generateToken(strval($userID));
        return response()->json($beamsToken);
    }

});


// Route::prefix('admin')->group(function () {
//     Route::get('users', function () {
//         // Matches The "/admin/users" URL
//         return "here";
//     })->name("admin:user");
// });
