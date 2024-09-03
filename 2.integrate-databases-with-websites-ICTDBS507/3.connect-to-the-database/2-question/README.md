TODO:

Create and record a video of you presenting the creation of a users table with 5 entries and them being displayed to a website. 

Describe the database table in phpMyAdmin and the code used to retrieve the information.

Create an MP4 named <your-name>3.2.mp4

Your video recording. – Your face must be shown as well as the presentation created, both on the screen at the same time.

Use handbrake (handbrake.fr) to optimise your video 720p very fast preset videos should be under 50Mb, and no longer than 10 minutes. Use OBS (https://obsproject.com/) to record your screen and web camera



Details:
Create the database: ictdbs507_32
Create a users’ table with:

6 fields (id, firstname, lastname, email, address, phone)
5 completed records 
Using MySQLi, read those 5 records to the screen. 

Create an index.php and functions.php. Echo to the database content to the index page.

Create a simple design for the site.

Use MySQLi 



Submission – a zip file named <your name>-3.2x.zip

Containing:

Your video

Your website

SQL dump

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