<?php
echo '<head>
<title>Things To Do</title>
</head>
<body>
';
$filename = "/var/www/html/todo";
$list = fopen($filename,"r");
$rlist= fread($list, filesize($filename));
echo $rlist;
fclose($list);
echo'<p>';
$timefile = "/home/jbarshaw/src/webpage/timer/postindex.html";
$timeopen = fopen($timefile,"r");
$timeread = fread($timeopen, filesize($timefile));
echo $timeread;
fclose($timefile);
echo '</html>';
