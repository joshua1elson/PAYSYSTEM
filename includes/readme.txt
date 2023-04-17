This file holds information on what to do before you run the program
I am making the website work as though it is running on a live server.
On a local computer, you would have to create what we call a virtual host.
With the virtual host, you can shriek where any website you visit should be directed to

Creating a virtual host with Xammp
----------------------------------
1. Naviage into your xampp directory. (By default, it is stored directly on your local disk C)
2. Open the xampp folder and add this to the path in the file explorer address bar
    /apache/conf/extra/httpd-vhosts.conf
    This should open the virtual host file for your file
3. In the file, copy and paste these two virtual sites to your machine
   --start of code
   <VirtualHost *:80>
        DocumentRoot "C:/xampp/htdocs/"
        ServerName localhost
        ServerAlias "localhost"
    </VirtualHost>

    <VirtualHost *:80>
        DocumentRoot "C:/xampp/htdocs/paysystem/"
        ServerName paysystem.local
        ServerAlias "www.paysystem.local"
        ErrorLog "logs/paysystem.local"
    </VirtualHost>
   --end of code

   NB: In the document root of the paysystem above, change paysystem to the name of the directory in which your files are stored
4. After you have successfully, done this, hit windows key + r to open the run command
5. Type this path inside it "C:/WINDOWS/System32/drivers/etc"
6. In the directory that will be opened, create a backup of your hosts file in the same directory, thus just copy and paste it in the same directory
   [for security reasons and unforseen crushes]
7. Open the hosts file with your vscode editor to edit it direclty from there. Else you would have to copy it on your desktop and open with notepad
8. Add the line below to it [without the hyphen], and save
   - 127.0.0.1 paysystem.local
9. Restart your xampp apache server (thus if it is already started, stop and start again). You can now access the site using this url
   "paysystem.local" only on your computer

Why do this?
------------
The relevance of this is to help you work the software in production ready form. That way, you can easily migrate
your work to the server and make necessary changes to your server locally first, without having to stress yourself
of directory changes to suit development and server everytime.