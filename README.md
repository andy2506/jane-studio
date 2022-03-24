# Getting Started
Clone the branch to your local machine. On your terminal use the following command to clone;<br>
git clone https://github.com/andy2506/jane-studio.git<br>

Make sure the directory is on the right path, i.e C:\wamp64\www\jane-studio<br>

Import the database janestudio_db.sql to your local database (mysql)<br><br>

Add the host on your hosts;<br>
127.0.0.1 jane-studio.local<br>
127.0.0.1 www.jane-studio.local<br>

And add the virtual host configuration to your virtual hosts;<br>
<br><VirtualHost *:80>
<br>	DocumentRoot "${INSTALL_DIR}/www/jane-studio"
<br>	ServerName jane-studio.local
<br>	ServerAlias www.jane-studio.local
<br>\</VirtualHost>

Restart your apache server, then on your browser go to;<br>
jane-studio.local

