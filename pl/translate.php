<?php
/*
Section: translate
Language: English
*/

$translations = array(
    'h1' => 'Translations',

    'l10ncredits' => 'Many thanks to the translation contributors',

    'l10ncreditsclick' => 'Click to view list',

    'p1a' => 'Following the 2014 update of the db4free.net site and service there is now an easy way how you can translate the db4free.net website to more languages.',

    'p1b' => 'All the texts of the website are up on <a href="https://github.com/">GitHub</a>. You can fork the repository, apply your translations and send us a pull request so your translations can be integrated into the website.',

    'h2' => 'How does it work?',

    'p2a' => 'First you need to sign up for a GitHub account unless you already have one. Fork the repository at ',

    'p2b' => '<a href="https://github.com/mpopp75/db4free-net-l10n">https://github.com/mpopp75/db4free-net-l10n</a>',

    'p2c' => ' so you have an identical copy of the translation repository in your account. Now you can clone your repository to create a copy on your system. The git command for this is:',

    'p2d' => 'git clone git@github.com:[Your_GitHub_username]/db4free-net-l10n.git',

    'p2e' => 'We recommend you to create a separate branch for your translations, like so:',

    'p2f' => 'git checkout -b mytranslations',

    'p2g' => 'If there is no directory for the language which you want to apply translations to, make a copy of the "en" directory and name it according to <a href="http://en.wikipedia.org/wiki/List_of_ISO_639-1_codes">ISO 639-1 language codes</a>.',

    'p2h' => 'In the files inside this directory, replace the English texts with texts of the new language. Please be careful not to change the ID. For example replace:',

    'p2i' => '\'h1\' => \'Welcome to db4free.net\',',

    'p2j' => 'by',

    'p2k' => '\'h1\' => \'Bienvenido a db4free.net\',',

    'p2l' => 'If a text is the same in English and the language you are translating to, you may delete the line or simply leave it.',

    'p2m' => 'When your translations are finished, commit and push them to your GitHub repository. Switch to your new branch on GitHub and click "New Pull Request". Enter a short description what your translations are, any difficulties you faced or what you may not have been able to finish etc. and send off the Pull Request.',

    'p2n' => 'If you like to contribute but you need further assistance before you can get started, please <a href="https://github.com/mpopp75/db4free-net-l10n/issues">Open a Ticket at GitHub</a>.',
);
?>