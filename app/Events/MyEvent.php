<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class MyEvent implements ShouldBroadcast
{
  use Dispatchable, InteractsWithSockets, SerializesModels;

    //   public $message;

    //   public function __construct($message)
    //   {
    //       $this->message = $message;
    //   }

    //   public function broadcastOn()
    //   {
    //       return ['my-channel'];
    //   }

    //   public function broadcastAs()
    //   {
    //       return 'my-event';
    //   }



    public $message;
    public $id;
    public $sender_id;
    public $reciever_id;
    public $message_html;
    public $sender_name;
    public $product_name;
    public $product_price;
    public function __construct(
        $message,
        $chat_id,
        $sender_id,
        $reciever_id,
        $html,
        $sender_name,
        $product_name="",
        $product_price=""
        )
    {
        $this->message = $message;
        $this->id = $chat_id;
        $this->sender_id = $sender_id;
        $this->reciever_id = $reciever_id;
        $this->message_html = $html;
        $this->sender_name = $sender_name;
        $this->product_name = $product_name;
        $this->product_price = $product_price;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        //We have created names of channel on basis of user's id who
        //will receive data from this class.
        //See frontend pusher code to see how we have used this channel
        //for intended user.
        // return new PrivateChannel('notification-channel_'.$this->for_user_id.'_'.$this->id);

        return new PrivateChannel('channel_test_'.$this->reciever_id);
    }


    public function broadcastAs()
    {
        return 'my-event';
    }

}
