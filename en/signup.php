<?php
/*
Section: signup
Language: English
*/

$translations = array(
    'h1' => 'Signup',

    'mysql-db-name' => 'MySQL database name',

    'mysql-user-name' => 'MySQL username',

    'mysql-user-password' => 'MySQL user password',

    'mysql-user-password-verification' => 'MySQL user password verification',

    'email-address' => 'Email address',

    'agree-conditions' => 'I have read the <a href="conditions.php">conditions of use</a> and I agree with them.',

    'ph1' => '4-16 chars., no upper-case, 1st must be char.',

    'ph2' => 'Min. 6 chars.',

    'ph3' => 'Enter your email address',

    // only difference explanation-5.7 vs. explanation-8.0 is the version number in the URL
    'explanation-5.7' => 'Database user and database name may contain lower case letters, numbers and the underscore and must be between 4 and 16 characters long. You must not use <a href="https://dev.mysql.com/doc/refman/5.7/en/reserved-words.html">reserved words</a>!',

    'explanation-8.0' => 'Database user and database name may contain lower case letters, numbers and the underscore and must be between 4 and 16 characters long. You must not use <a href="https://dev.mysql.com/doc/refman/8.0/en/reserved-words.html">reserved words</a>!',

    'maintenance-notice' => 'Due to database maintenance, no registrations are currently possible.',

    'agm-p1' => 'By registering for a db4free.net account you agree that:',

    'agm-li1' => 'db4free.net is a testing environment',

    'agm-li2' => 'db4free.net is not suitable for production',

    'agm-li3' => 'if you decide to use your db4free.net database in production despite the warnings, you do that at your own risk (very frequent backups are highly recommended)',

    'agm-li4' => 'data loss and outages can happen at any time (any complaints about that will likely be ignored)',

    'agm-li5' => 'the db4free.net team is not granting any warranty or liability of any kind',

    'agm-li6' => 'the db4free.net team reserves the right to delete databases and/or accounts at any time without notice',

    'agm-li7' => 'it is up to you to get the latest information from <a href="/twitter.php">Twitter</a> and the <a href="/blog.php">db4free.net blog</a>',

    'agm-li8' => 'db4free.net provides only a MySQL database, but no web space (there is nowhere to upload any files)',

    'agm-p2' => 'Further:',

    'agm-li9' => 'db4free.net is a service for testing, not for hosting. Databases that store more than 200 MB data will be cleared at irregular intervals without notification',

    'agm-li10' => 'Please remove data which you no longer need, or <a href="/delete-account.php">delete your no longer needed account</a>. This makes it easier to recover if a server crash occurs.',

    'signup-error1' => 'You have to agree with the conditions of use!',

    'signup-error2' => 'Error registering the data for your MySQL database!',

    'signup-error3' => 'Error sending the confirmation email!',

    'signup-success' => 'Thank you for your registration! You will receive an email to confirm the registration.',
);
?>