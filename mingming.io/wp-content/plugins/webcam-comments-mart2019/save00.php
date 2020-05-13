<?php
// upload directory
$filePath = '../../uploads/' . $_POST['video-filename'];

// path to ~/tmp directory
$tempName = $_FILES['video-blob']['tmp_name'];

// move file from ~/tmp to "uploads" directory
if (!move_uploaded_file($tempName, $filePath)) {
    // failure report
    echo 'Problem saving file: '.$tempName.'Maybe you need to set "post_max_size" to at least 100 MB
You need to set "upload_max_filesize" to at least 100 MB
You need to set "max_input_time" to at least 10800 (or at least 2-3 minutes)';
    die();
}

// success report
echo 'success';
?>