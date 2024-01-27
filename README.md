# PHP-Pingback-Collaborator
PHP Pingback Collaborator with a obfuscated directory for output file.

Basically i have noticed lately on 2 programs that Burpsuites Collaborator URL is basically banned if oastify is in the request and its a instant 403, but not with your own URLs/IPs.
You can ofcourse use your own IP and open a port but like me who have port 1337 forwarded i rather have a server to check for potential pingbacks. basically you send your domain, domain.com/stored.php to target
and then you can read pingbacks on your domain in /obfuscateddir/pingbacks.html (output) or you can just have pingbacks.html in root directory but web-crawelers and spiders will probably find it.

Its nothing fancy but working, all you need is either a hosting site. I use cPanel, or a VPS or you can use your own PC even tho i wouldnt really recommend port forward ports under 1000 so i recommend a webhosting provider.
Currently having a little bit of problems with DNS lookups tho but, maybe ill fix it in the feature. 

![alt text](https://github.com/a6thmfsin/PHP-Pingback-Collaborator/blob/main/pingbackout.png)
