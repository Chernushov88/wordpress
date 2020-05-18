<?
$fil='https://mingming.io/wp-content/mp4/2020-05/14/63281179.mp4';
echo $fi=str_replace('https://mingming.io','',$fil);
$post = [
    'target' => 'MP4',
    'file' => $fil,
    'filelocation'   => 'online',
	'type_converter'=>'video'
];
$ch = curl_init('https://www3.online-converting.ru/fconvert.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
$response = curl_exec($ch);
$tt=json_decode($response );
$ip=$tt->id;
curl_close($ch);

    $url = 'http://www3.online-converting.ru/upload/'.$ip.'/';
    $path = $_SERVER['DOCUMENT_ROOT'] . $fi;
    file_put_contents($path, file_get_contents($url));

?>
<a href="http://www3.online-converting.ru/upload/<?=$ip?>/">скачать</a>

