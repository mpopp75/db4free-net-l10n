<?php
/*
Section: email-signup
Language: Serbian
*/

$translations = array(
    /*
     Differences email-5.7-intro vs. email-8.0-intro:
     * Version 5.7 <-> Version 8.0
     * Port 3306 <-> Port 3307
     * Version 8.0 removes "(which is the default port for MySQL)"
     */
    'email-5.7-intro' => 'Hvala vam na registraciji vašeg profila za bazu podataka {$user} na db4free.net.

Posle potvrđivanja klikom na link ispod, dobićete pristup na db4free.net MySQL 5.7 serveru. Host ime za pristup serveru je db4free.net i port je 3306 (što je podrazumevani port za MySQL). Možete koristiti phpMyAdmin na našem web sajtu da se ulogujete na server.',

    'email-8.0-intro' => 'Hvala vam na registraciji vašeg profila za bazu podataka {$user} na db4free.net.

Posle potvrđivanja klikom na link ispod, dobićete pristup na db4free.net MySQL 8.0 serveru. Host ime za pristup serveru je db4free.net i port je 3307. Možete koristiti phpMyAdmin na našem web sajtu da se ulogujete na server.',

    'email-common' => 'Kliknite na link da bi završili proces registraciji u narednih 14 dana. Klikom na ovaj link potvrđujete (ponovo) da se slažete sa:

* db4free.net je okruženje za testiranje
* db4free.net nije odgovarajuć za produkciju
* Ako odlučite da koristite vašu db4free.net bazu podataka u produkciji uprkos upozorenjima, radite to na sopstveni rizik (veoma česti backup je preporučljiv)
* izgubljeni podaci i prekidi rada se mogu desiti u bilo koje vreme (bilo kakvi prijave oko ovoga će verovatno biti ignorisane)
* db4free.net tim ne daje bilo kakve garancije ili odgovornosti bilo koje vrste
* db4free.net tim zadržava pravo da obriše bazu podataka i/ili profil u bilo kom vremenu bez najave
* Na vama je da pratite poslednje informacije na Twitter-u (https://twitter.com/db4free_net) i db4free.net blogu (https://www.mpopp.net/category/db4free/)
* db4free.net pruža samo MySQL bazu podataka, ali ne web prostor (nemate nigde da uploadujete fajlove)

Dalje:

* db4free.net je servis za testiranje, ne za hostovanje. Baze podataka koje čuvaju preko 200 MB podataka će biti obrisane u nepravilnim intervalima bez obaveštenja.
* Molimo vas obrišite podatke koji vam više nisu potrebni ili obrišite vaš profil koji vam više nije potreban (https://www.db4free.net/delete-account.php). Ovo omogućava lakši oporavak ako se desi pad servera.

{$mailLink}

Možete pomoći da se prevede db4free.net? Posetite https://www.db4free.net/translate.php

Ako niste vi registrovani profil za bazu podataka na db4free.net sajtu, ignorišite ovaj email!

Nadamo se da uživate radeći sa vašom bazom podataka!

Vaš db4free.net tim
https://www.db4free.net',
);
?>