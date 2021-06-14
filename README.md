# SuperCrypto
Free crypto currency website, a-ads support and more. Make extra money using this or just collect user data as email, wallet, IP or if you want to add more go a head and do that.

# How to setup?
To setup SuperCrypto you will need PHP, SQL, PHPMYADMIN and so on the basic stuff, I will leave a link here of how to install all those: 

Ubuntu 18.04:
https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-ubuntu-18-04
https://www.digitalocean.com/community/tutorials/how-to-install-and-secure-phpmyadmin-on-ubuntu-18-04

Ubuntu 16.04:
https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu-16-04
https://www.digitalocean.com/community/tutorials/how-to-install-and-secure-phpmyadmin-on-ubuntu-16-04

What then? Well you need to create database "lazycrypto" to your phpmyadmin account.
```
CREATE DATABASE supercrypto;
```
Then table 
```
CREATE TABLE users (
    ID int(11),
    email	varchar(255),
    wallet	varchar(255),
    rip	varchar(48)	
); 
```

Goto /config/Config.php and enter your database credientals and host, host should be localhost as default if you're hosting the site from same server/pc.

And now you're ready to go!
You can create a-ads account at https://a-ads.com/ or use some other advertising media.
