<a id="download">Download
<button id="stop">Stop
<script>
  let shouldStop = false;
  let stopped = false;
  const downloadLink = document.getElementById('download');
  const stopButton = document.getElementById('stop');

  stopButton.addEventListener('click', function() {
    shouldStop = true;
  })

  var handleSuccess = function(stream) {
    const options = {mimeType: 'video/webm'};
    const recordedChunks = [];
    const mediaRecorder = new MediaRecorder(stream, options);

    mediaRecorder.addEventListener('dataavailable', function(e) {
      if (e.data.size > 0) {
        recordedChunks.push(e.data);
      }

      if(shouldStop === true && stopped === false) {
        mediaRecorder.stop();
        stopped = true;
      }
    });

    mediaRecorder.addEventListener('stop', function() {
      downloadLink.href = URL.createObjectURL(new Blob(recordedChunks));
      downloadLink.download = 'acetest.webm';
    });

    mediaRecorder.start();
  };

  navigator.mediaDevices.getUserMedia({ audio: true, video: true })
      .then(handleSuccess);

</script>



<p><video id="video" autoplay width=320/><p>
<p><button onclick="startFunction()">Grab video & start recording</button></p>
<p><button onclick="download()">Download! (and stop video)</button></p>
<script>
const constraints = { "video": { width: { max: 320 } }, "audio" : true };

var theStream;
var theRecorder;
var recordedChunks = [];

function startFunction() {
  navigator.mediaDevices.getUserMedia(constraints)
      .then(gotMedia)
      .catch(e => { console.error('getUserMedia() failed: ' + e); });
}

function gotMedia(stream) {
  theStream = stream;
  var video = document.querySelector('video');
  video.srcObject = stream;
  try {
    recorder = new MediaRecorder(stream, {mimeType : "video/webm"});
  } catch (e) {
    console.error('Exception while creating MediaRecorder: ' + e);
    return;
  }
  
  theRecorder = recorder;
  recorder.ondataavailable = 
      (event) => { recordedChunks.push(event.data); };
  recorder.start(100);
}

// From @samdutton's "Record Audio and Video with MediaRecorder"
// https://developers.google.com/web/updates/2016/01/mediarecorder
function download() {
  theRecorder.stop();
  theStream.getTracks().forEach(track => { track.stop(); });

  var blob = new Blob(recordedChunks, {type: "video/webm"});
  var url =  URL.createObjectURL(blob);
  var a = document.createElement("a");
  document.body.appendChild(a);
  a.style = "display: none";
  a.href = url;
  a.download = 'test.webm';
  a.click();
  // setTimeout() here is needed for Firefox.
  setTimeout(function() { URL.revokeObjectURL(url); }, 100); 
}






var video = document.querySelector("#cameraVideo");
var mode = "rear";
var mediaRecorder;
var chunks = [];
if (navigator.mediaDevices.getUserMedia) {
    navigator.mediaDevices.getUserMedia({video: { facingMode: "environment" } }).then(function (stream) {
                video.srcObject = stream;
                mediaRecorder = new MediaRecorder(stream);
    }).catch(function (err0r) {
                alert("Something went wrong!");
    });
}
$(".camera").find(".take").on("touchstart mousedown", function() {
    mediaRecorder.start();
    mediaRecorder.ondataavailable = function(ev) {
        chunks.push(ev.data);
    }
});
$(".camera").find(".take").on("touchend mouseup", function() {
    mediaRecorder.stop();
    mediaRecorder.onstop = (ev)=>{
    var blob = new Blob(chunks, { 'type' : 'video/mp4' });
    chunks = [];
    var videoURL = webkitURL.createObjectURL(blob);
    if(video.srcObject) video.srcObject.getTracks().forEach(t => t.stop());
        var reader = new FileReader();
        reader.readAsDataURL(blob); 
        reader.onloadend = function() {
            document.getElementById("savevideo").src = reader.result;
            document.getElementById("savevideo").play();                
        }
    }
});

</script>
<video autoplay="true" id="cameraVideo" playsinline webkit-playsinline>






