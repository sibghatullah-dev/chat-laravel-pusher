

var pusher = new Pusher('3a374406587fcdab3724', {
    cluster: 'us3',
    encrypted: true,
    authEndpoint: '/pusher-auth', // just a helper method to create a link
    auth: {
        headers: {
            'X-CSRF-Token':  $('meta[name="csrf-token"]').attr('content') // CSRF token
        }
    }
});


window.addEventListener('beforeunload', function (e) {
    e.preventDefault();
    e.returnValue = '';
    pusher.unsubscribe('private-channel_test_'+userid);
    console.log("blur");
});




$(document).ready(function(){
    Pusher.logToConsole = true;
    var channel = pusher.subscribe('private-channel_test_'+userid);
    // console.log('notification-channel_'+userid+'_'+chat_id);
    channel.bind('my-event', function(data) {
        alert(JSON.stringify(data));
        var t_chat_id = $('#chat_id-d').val();

        if(t_chat_id == data.id){
            $("#test").append(data.message_html);
        }

        $("#ChatClass_"+data.id).remove();
        var chat_box = "<a class='contact-item d-block' href='javascript:;' id='ChatClass_"+data.id+"' onclick='getChat("+data.id+")'><div class='media d-flex align-items-center'><div class='image-mt'><div class='image'><img class='img-fluid' src='img/chat-img-3.png'></div></div><div class='media-body'><div class='d-flex'><div class='left-side'><h6 class='text-truncate mb-0'>"+data.sender_name+"</h6><div class='user-title'><h3 class='sub-tittle-chat text-truncate'>Product Name here</h3><p class='mb-0 text-truncate'>Lorem Ipsum Dolar Sit Ame...</p></div></div><div class='right-side'><i class='fas fa-times-circle'></i><small class='price'>AED 200</small><small class='time'>9 min ago</small></div></div></div></div></a>"
        $("#chatbox").prepend(chat_box);

     //Snackbar.show({text: data.message});

    });
});







var chat_id_custom = 0;

 $(document).ready(function(){

    /**
     *
     * Search Box
     *
     */


    // $("#myInput").on("keyup", function() {
    //     var value = $(this).val().toLowerCase();
    //     $("#chatbox text-truncate").filter(function() {
    //      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    //     });
    // });




    $("#main-d").hide();
    $("#sendMessage-d").on("submit", function(event){
        //Code: Action (like ajax...)
        // alert("here");
        event.preventDefault();
        let formdata = $(this).serialize();
        //e.preventDefault();
        // $("#message_body").val('');
        $.ajax({
            type: "POST",
            url: send_Message_d,
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: formdata,
            success: function(result){
                if(result.success == true){
                    //var message = "<div class='message me'><div class='text-main me'><div class='text-group me'><div class='text me'><p>"+result.data.message_body+"</p></div></div></div></div>";
                    var message = "<div class='sender-msg media d-flex'><div class='user-profile-ha-ctm d-flex align-items-center justify-content-center'><img src='img/user-profile-1.jpg' class='img-fluid' alt='Sender Image'></div><div><div class='media-body Oswald-Light'><div class='small-message smallmessage font-light font-16'><div class='single-msg'><span>"+result.data.message_body+"</span></div></div><div><span class='send-time OpenSans-Regular text-left'>8 min ago</span></div></div></div></div>"

                    $("#test").append(message);
                    //$("#message_body").attr('value', '');
                    $("#message_body").val('');
                }
          }});
      })

 });


 function getChat(chat_id){
    // e.preventDefault();
    // alert(chat_id);
    // $("#").on("click", function(event){
    //     alert(chat_id);
    // });
    // $("contacts-area.active").removeClass('active');
   $("#main-d").show();
    $("#test").empty();
    $('#name_of_reciever').empty();
    $("reciever_userid-d").val("");
    $("sender_id-d").val("");
    $("chat_id-d").val("");
    var data = { 'chat_id':chat_id};
    $.ajax({
        type: "POST",
        url: get_chat_messages_d,
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data: data,
        success: function(result){
            // console.log(result);
            $.each(result.data.messages, function(k, v) {
                /// do stuff
                // console.log(v);
                // $("#addActiveClass_"+chat_id).addClass('active');
                if(v.sender_user_id == userid){
                    // var message = "<div class='message me'><div class='text-main me'><div class='text-group me'><div class='text me'><p>"+v.message_body+"</p></div></div></div></div>";
                  var message = "<div class='sender-msg media d-flex'><div class='user-profile-ha-ctm d-flex align-items-center justify-content-center'><img src='img/user-profile-1.jpg' class='img-fluid' alt='Sender Image'></div><div><div class='media-body Oswald-Light'><div class='small-message smallmessage font-light font-16'><div class='single-msg'><span>"+v.message_body+"</span></div></div><div><span class='send-time OpenSans-Regular text-left'>8 min ago</span></div></div></div></div>"
                }else{
                    // var message = "<div class='message'><img class='avatar-md' src='dist/img/avatars/avatar-female-5.jpg'><div class='text-main'><div class='text-group'><div class='text'><p>"+v.message_body+"</p></div></div></div></div>";
                    var message =  "<div class='received-message-ctm d-flex'><div><div class='my-msg Oswald-Light'><span>"+v.message_body+"</span></div><div><span class='received-time OpenSans-Regular font-16 text-right'>8 min ago</span></div></div><div class='user-profile-ha-ctm-right d-flex align-items-center justify-content-center'><img src='img/user-profile-1.jpg' class='img-fluid' alt='Sender Image'></div></div>"
                }

                if(v.reciever.id == userid){
                    $('#name_of_reciever').html(v.sender.name);
                }else{
                    $('#name_of_reciever').html(v.reciever.name);
                }
                $("#test").append(message);
                if(v.reciever.id == userid){
                    $("#reciever_userid-d").prop('value', v.sender.id);
                }else{
                    $("#reciever_userid-d").prop('value', v.reciever.id);
                }

                //after appending set value to the send button of hidden inputs
            });


            console.log(result.data.chat.user_reciever_id);

            $("#sender_id-d").val(userid);
            $("#chat_id-d").val(chat_id);
      }
    });
 }



 //now add search function of jquery

//  function createChat(reciever_user_id){
//     // alert(reciever_user_id);
//     $("#main-d").show();
//     $("#test").empty();
//     $('#name_of_reciever').empty();
//     $("reciever_userid-d").val("");
//     $("sender_id-d").val("");
//     $("chat_id-d").val("");
//     //var data = { 'chat_id':chat_id};

//     var data = {
//         "reciever_user_id" : reciever_user_id
//     }
//     $.ajax({
//         type: "POST",
//         url: create_chat_d,
//         headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
//         data: data,
//         success: function(result){
//             $.each(result.data.messages, function(k, v) {
//                 /// do stuff
//                 // console.log(v);
//                 if(v.sender_user_id == userid){
//                     var message = "<div class='message me'><div class='text-main me'><div class='text-group me'><div class='text me'><p>"+v.message_body+"</p></div></div></div></div>";
//                 }else{
//                     var message = "<div class='message'><div class='text-main'><div class='text-group'><div class='text'><p>"+v.message_body+"</p></div></div></div></div>";
//                 }

//                 if(v.reciever.id == userid){
//                     $('#name_of_reciever').html(v.sender.name);
//                 }else{
//                     $('#name_of_reciever').html(v.reciever.name);
//                 }
//                 $("#test").append(message);
//                 // alert(reciever_user_id);



//                 //after appending set value to the send button of hidden inputs
//             });
//             $("#reciever_userid-d").val(reciever_user_id);
//             if(result.data.messages){
//                 $("#chat_id-d").val(result.data.chat.id);
//                  chat_id = result.data.chat.id;
//                 console.log(userid + " " +chat_id);

//             }
//             console.log(reciever_user_id);

//             $("#sender_id-d").val(userid);

//         }
//     });
//  }


  // Enable pusher logging - don't include this in production
