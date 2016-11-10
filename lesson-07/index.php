<?php

$a = 1;
$b = 2;

$c = sum($a, $b);

var_dump($c);




function sum($a, $b)
{
    return $a + $b;
}

// debuger 
/*Even lisener je javva script , on click on nesto da su eventi java scripta 
 * View sorce prikazuje sa servera , word pres što je php pljunio van , ako zelimo dodati dugme tu ćemo vidjeti , a nećemo vidjeti u view sortu
 * ovdje vidimo rezultat nakon java scripta u view sorsu nećemo vidjeti scrpit npr java script
 * console.log(); java script debuging , vard_dump() , rezultati na console
 * console debuger za java script , 
 * source sto je ucitano na siteu , vecinom trackig skripte , google analitics vidimo koji browser i tko je kontaktirao npr inchoo
 * preko cega dolaze do nase stranice , trecking i reklame , google analitics , gmail da mogu reklame posluzivati
 * Break point tu pauziraj izvršavanje , zelim gledati što se dešava , treba za angularjs,
 * network što je vrati server , što manje filea što učitavamo to je bolje , što manje css i html to će browser brže učitati
 * Sprite - model 2d slike , da sšrite ima kao jednu sliku sve naslaže i umjesto puno slika napravimo jednu sliku
 * to treba da smanjite broj requestova , request košta , 
 * jquery , boostrap , sve se murge u jedan veliki file , 
 * paket - header , body struktura http , 
 * apache na njemu vrtimo , php 5.4.45 da se vrti , 
 * request headers ono što je browser poslao kad je rekao daj
 * disable cache bitno , 
 * timeline kako se java script učitao , koliko je procesor jebao i ostalo
 * razlikuje po cookieu tj po broju cookia , 
 * aplication local stoarag , za java script , kad ima neki pop up da spremi u local storage , a ne u cookie
 * site koji je na https ništa što se učita s http-a , da je jedna slika u source u povučeno preko http-a , browser popiztdio
 * dvije slike nisu kriptirane , kad stavite u https sve mora biti s hattpsa , priječava in the midle attack , 
 * kad smo otvorili s https-a možemo se spojiti na inchoo , ali treba key,
 * gzip incho stranica je zipana , smanji java script od mb za pola , gzip gasi na jpeg jer je već kompresirano , gzip pali da bude brže slike nemoj jer trošiš procesor bezveze
 * java script i css se gzipaju , u htacces upali gzip on je brži za pola
 * https://xdebug.org/download.php , phpinfo bot paste , [xdebug]
zend_extension="C:\xampp\php\ext\php_xdebug.dll"
xdebug.remote_enable = 1
 * step info ce otici na funkciju
 * step over ide na iduću liniju koda
 * breakpoint stani ovdje
 * call stack put kako je tu došao i pozvao start , brupall , wordpess , laravel , 
 * https://www.opensource-osijek.org/wordpress/
 * osobna galerija , porfolio , freelance site galerija , 
 * log in - naša galerija , forma za upload slika system , fotka mora biti resize , ime fotki , apply filter , objavljujemo fotku
 * private , public , ako si loginan onda 
 * phpmysql , laravel , koji god framework , rowback , mvc , sistem templeata , combozer za slike , compozer preko compozer intro
 * instagram je u lifeboxu , za slike , implement komentari , file ce trebati asset tablicu , kao što smo radili
 * kad je file uploudan 
 * wireframing - kostur skica kako bi izgledala stranica , hedar , footer , 
 * upload public fotke , load mode , pluginacija 1,2,3 , login samo za nas , login page , lightbox gdje ce biti slika title , share facebook , share google , share twiter, coments submit form gdje se submita , 
 * forma za ulogirane upload slike , nime , private ili public , ako kliknem filter da se vidi što treba biti.
 * pictures _id
 * comments/id/picture_id/content/ strani ključ , provjera unikatnosti , id unikatnost.
 * bvujnovac@gmail.com
 * mail
 * 
 */