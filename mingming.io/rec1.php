<video id="video" autoplay="" loop="" controls="" muted=""></video>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="https://www.webrtc-experiment.com/RecordRTC.js"> </script>
  <script src="https://webrtc.github.io/adapter/adapter-latest.js"></script>
<script type="text/javascript">
   var recorder;
   var video = document.getElementById('video');
   AdapterJS.webRTCReady(function(isUsingPlugin) {
        navigator.getUserMedia  = navigator.getUserMedia ||
            navigator.webkitGetUserMedia ||
            navigator.mozGetUserMedia ||
            navigator.msGetUserMedia;

    navigator.getUserMedia({ audio: true, video: true }, function(stream) {
        //console.log("hai");
        video.src = URL.createObjectURL(stream);

        video.width = 320;
        video.height = 240;

        var options = {
            type: 'video',
            video: {
                width: 320,
                height: 240
            },
            canvas: {
                width: 320,
                height: 240
            }
        };

        recorder = window.RecordRTC(stream, options);
        //console.log(recorder);
        recorder.startRecording();
    });
   });
</script>







