<?php
 
 
 $socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
    //if(!is_resource($socket)) onSocketFailure("Failed to create socket");
 //  85.215.233.204
socket_connect($socket, "85.215.233.204", 1994)
        or onSocketFailure("Failed to connect to chat.stackoverflow.com:6667", $socket);
 

 
 socket_write($socket, ":Haidra:j@uhsq65:GET:PROFIT"  );
 
 $line = socket_read($socket, 1024);
 echo $line ;

 
?>