TODO:

reate and record a video of you presenting the initial setup of:

A database
A user
A site to connect to the database
Named <your-name>3.1.mp4

Your video recording. – Your face must be shown as well as the presentation created, both on the screen at the same time.

Use handbrake (handbrake.fr) to optimise your video 720p very fast preset videos should be under 50Mb, and no longer than 10 minutes. Use OBS (https://obsproject.com/) to record your screen and web camera



Details
Create the database: ictdbs507_31

Create a table in the database called: onepiece, fields id (int-primary key, auto increment),name(varchar 200),crew(varchar 200)

Create an index.php and functions.php to show connection to the database. Echo to the index page the status of your database connection. 

Create a simple design for the site. Ensure your design is about the One piece Anime (Animated or Live action)

Use MySQLi 



Submission – a zip file named <your name>-3.1.zip

Containing:

Your Video

Your website

Your sql dump

------------------------------------------------------------

# How to use


requirements: 

* docker
* docker-compose


start: 

1. docker-compose up
2. access database with some client UI with this URL: 
   ``` sql
    mysql://root:qwer1234!@localhost:3306
   ```
3. access browser on http://localhost:8080.

4. copy and paste the dump.sql on database executer.

5. refresh browser on http://localhost:8080.