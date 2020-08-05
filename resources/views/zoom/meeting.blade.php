<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Join Zoom Meeting</title>
        <meta charset="utf-8" />
        <link type="text/css" rel="stylesheet" href="https://source.zoom.us/1.7.2/css/bootstrap.css" />
        <link type="text/css" rel="stylesheet" href="https://source.zoom.us/1.7.2/css/react-select.css"/>
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    </head>


<body class="ReactModal__Body--open">


    <input type="hidden" id="user_name" value="{{ Auth::User()->name }}">
    <input type="text" id="meeting_id" value="{{ $meeting_id }}">
    <input type="hidden" id="meeting_password" value="{{ $meeting_password }}">


    <div id="zmmtg-root"></div>
    <div id="aria-notify-area"></div>
      <!-- import ZoomMtg dependencies -->
      <script src="https://source.zoom.us/1.7.9/lib/vendor/react.min.js"></script>
      <script src="https://source.zoom.us/1.7.9/lib/vendor/react-dom.min.js"></script>
      <script src="https://source.zoom.us/1.7.9/lib/vendor/redux.min.js"></script>
      <script src="https://source.zoom.us/1.7.9/lib/vendor/redux-thunk.min.js"></script>
      <script src="https://source.zoom.us/1.7.9/lib/vendor/jquery.min.js"></script>
      <script src="https://source.zoom.us/1.7.9/lib/vendor/lodash.min.js"></script>
  
      <!-- import ZoomMtg -->
      <script src="https://source.zoom.us/zoom-meeting-1.7.9.min.js"></script>
      


    <script type="text/javascript">

    $(document).ready(function(){
        ZoomMtg.setZoomJSLib('https://dmogdx0jrul3u.cloudfront.net/1.7.9/lib', '/av'); 
        ZoomMtg.preLoadWasm();
        ZoomMtg.prepareJssdk();

        const zoomMeeting = document.getElementById("zmmtg-root");
        const user_name = document.getElementById("user_name");
        const meeting_id = document.getElementById("meeting_id");
        const meeting_password = document.getElementById("meeting_password");

        const signature = ZoomMtg.generateSignature({
            meetingNumber: meeting_id.value,
            apiKey: 'aei7SOvRStmKoWHIXUaN1Q',
            apiSecret: 'jhDCXURIT2aC8QymaUlzrDd0dTarlPQkRyi6',
            role: 1,
            success: function (res) {
            console.log(res.result);
            },
        });
        ZoomMtg.init({
            leaveUrl: 'http://www.zoom.us',
            isSupportAV: true,
            success: function (res) {
                ZoomMtg.join(
                    {
                        meetingNumber: meeting_id.value,
                        userName: user_name.value,
                        signature: signature,
                        apiKey: 'aei7SOvRStmKoWHIXUaN1Q',
                        passWord: meeting_password.value,
                        success: function(res){

                            $('#nav-tool').hide();
                            console.log('join meeting success');
                        },
                        error: function(res) {
                            console.log(res);
                        }
                    }
                );
            },
            error: function(res) {

                console.log(res);
            }
        }); 
        });


        


    </script>



    
</body>
</html>