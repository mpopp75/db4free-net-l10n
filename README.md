Following the 2014 update of the db4free.net site and service there is now an easy way how you can translate the db4free.net website to more languages.

All the texts of the website are up on [GitHub](https://github.com/). You can fork the repository, apply your translations and send us a pull request so your translations can be integrated into the website.

## How does it work?

First you need to sign up for a GitHub account unless you already have one. Fork the repository at

[https://github.com/mpopp75/db4free-net-l10n](https://github.com/mpopp75/db4free-net-l10n)

 so you have an identical copy of the translation repository in your account. Now you can clone your repository to create a copy on your system. The git command for this is:

`git clone git@github.com:[Your_GitHub_username]/db4free-net-l10n.git`

We recommend you to create a separate branch for your translations, like so:

`git checkout -b mytranslations`

If there is no directory for the language which you want to apply translations to, make a copy of the "en" directory and name it according to [ISO 639-1 language codes](http://en.wikipedia.org/wiki/List_of_ISO_639-1_codes).

In the files inside this directory, replace the English texts with texts of the new language. Please be careful not to change the ID. For example replace:

`'h1' => 'Welcome to db4free.net',`

by

`'h1' => 'Bienvenido a db4free.net',`

If a text is the same in English and the language you are translating to, you may delete the line or simply leave it.

When your translations are finished, commit and push them to your GitHub repository. Switch to your new branch on GitHub and click "New Pull Request". Enter a short description what your translations are, any difficulties you faced or what you may not have been able to finish etc. and send off the Pull Request.

If you like to contribute but you need further assistance before you can get started, please [Open a Ticket at GitHub](https://github.com/mpopp75/db4free-net-l10n/issues).