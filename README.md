# Escapeshellcommand
It's dangerous to trust user input , especially when you are using system() call.
Developers in order to automate the task instead of writing code everytime , they prefer OS shell command for utilizing
services such as time , date , whois information , etc.

This gives attacker's chance to inject code in shell of OS .
Attacker's can terminate the command using ; or | (pipe) [in linux ] and && [in windows]

In php we can either disable the system call in php.ini configuration file , 
or if developers needs it then he can filter user input before passing argument to shell .
There is command call escapeshellcmd() in php which doesn't allow arbitary shell commands to get executed ..
