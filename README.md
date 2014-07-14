cron-job-twitter
================

This is a simple php script to tweet on twitter using Cron Job


1. You should have an app created with Twitter ., if not, go to http://dev.twitter.com. Create a new app.
2. In cron.php page, copy and place the Consumer Key, Consumer Secret, Access Token and Access Secret from the Application.
3. Now you've everything that needed to be running for the php code and all you need more is to set a cron job command at your server to run the php script.
4. Goto your server (hosting provider cpanel) and check for something like "Cron Jobs".
5. Add a New Cron Job, with the common settings like specify the time intervals and route the cron.php page on your server to the command.

  For Example: php /home/username/public_html/folder/cron.php
