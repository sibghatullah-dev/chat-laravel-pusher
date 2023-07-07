
 $(document).ready(function(){
    $("#login-d").on("submit", function(event){
        //Code: Action (like ajax...)
        event.preventDefault();
        // alert("here");
        let formdata = $(this).serialize();

        $.ajax({
            type: "POST",
            url: "http://127.0.0.1:8000/validate-login",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: formdata,
            success: function(result){
                if(result.success == true){

                    // const beamsClient = new PusherPushNotifications.Client({
                    //     instanceId: '4d13f65e-184c-42b7-ae8c-12043b1f7a74',
                    //   });

                    // const beamsTokenProvider = new PusherPushNotifications.TokenProvider({
                    //     url: '/pusher/beams-auth',
                    //   });


                    //   console.log(beamsTokenProvider);

                    //   beamsClient
                    //     .start()
                    //     .then(() => beamsClient.setUserId(userid, beamsTokenProvider))
                    //     .catch(console.error);
                    location.href = "http://127.0.0.1:8000/chat-users";
                }
          }});
      })

 });
