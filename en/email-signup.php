<?php
/*
Section: email-signup
Language: English
*/

$translations = array(
    /*
     Differences email-5.7-intro vs. email-8.0-intro:
     * Version 5.7 <-> Version 8.0
     * Port 3306 <-> Port 3307
     * Version 8.0 removes "(which is the default port for MySQL)"
     */
    'email-5.7-intro' => 'Thank you for registering your database account {$user} with db4free.net.

After confirming the link below, you have access to db4free.net\'s MySQL 5.7 database server. The host name to access the server is db4free.net and the port is 3306 (which is the default port for MySQL). You can use phpMyAdmin on our website to log in to the server.',

    'email-8.0-intro' => 'Thank you for registering your database account {$user} with db4free.net.

After confirming the link below, you have access to db4free.net\'s MySQL 8.0 database server. The host name to access the server is db4free.net and the port is 3307. You can use phpMyAdmin on our website to log in to the server.',

    'email-common' => 'Please use the following link to finish the registration process within the next 14 days. By clicking this link you confirm (again) that you understand that:

* db4free.net is a testing environment
* db4free.net is not suitable for production
* if you decide to use your db4free.net database in production despite the warnings, you do that at your own risk (very frequent backups are highly recommended)
* data loss and outages can happen at any time (any complaints about that will likely be ignored)
* the db4free.net team is not granting any warranty or liability of any kind
* the db4free.net team reserves the right to delete databases and/or accounts at any time without notice
* it is up to you to get the latest information from Twitter (https://twitter.com/db4free_net) and the db4free.net blog (https://www.mpopp.net/category/db4free/)
* db4free.net provides only a MySQL database, but no web space (there is nowhere to upload any files)

Further:

* db4free.net is a service for testing, not for hosting. Databases that store more than 200 MB data will be cleared at irregular intervals without notification
* Please remove data which you no longer need, or delete your no longer needed account (https://www.db4free.net/delete-account.php). This makes it easier to recover if a server crash occurs.

{$mailLink}

Can you help translating the db4free.net website? Please go to https://www.db4free.net/translate.php

If it was not you who has registered a database account on the db4free.net website, please ignore this email!

We hope you enjoy working with your database!

The db4free.net team
https://www.db4free.net',
);
?>