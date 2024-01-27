# PHP-Pingback-Collaborator
I have noticed lately on 2 programs that Burpsuites Collaborator URL is basically banned or rather if oastify is in the url in the request and its a instant 403, but not with your own URLs/IPs.
You can ofcourse use your own IP and open a port but i rather have a server to check for potential pingbacks. basically you send your domain, domain.com/stored.php to target in parameter, header, cookie whatever.
and then you can read pingbacks on your domain on path /obfuscateddir/pingbacks.html (output) or you can just have pingbacks.html in root directory but web-crawelers and spiders will probably find it.

Its nothing fancy but working decent, i recommend a hosting provider if you ever need it.

![alt text](https://github.com/a6thmfsin/PHP-Pingback-Collaborator/blob/main/pingbackout.png)
