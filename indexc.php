<?php
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

echo $url["host"].'<br>';
echo $username = $url["user"].'<br>';
echo $password = $url["pass"].'<br>';
 echo  $db = substr($url["path"], 1).'<br>';;

?>