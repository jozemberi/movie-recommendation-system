{extends file='2_content_box_layout.tpl'}

{block name='language'} {config_load file='lang/hr/doc.conf'} {/block}

{block name='left-content-box'}
    <h1>Dokumentacija</h1>
    <div style="text-align: justify;font-size: 110%;">
        <footer class='sub-info'>
            Korištene tehnologije: HTML5 | CSS | PHP | Smarty | JavaScript | jQuery | JSON
        </footer>

        <h2>Arhitektura sustava</h2>

        Grafički prikaz arhitektura sustava može se vidjeti na sljedećoj slici:
        <br><br>

        <img src='img/arhitecture.png' alt='Arhitektura sustava' style="width: 100%;">


        <h2>Baza podataka</h2>
        <p>
            Baza podataka koja se koristi za ispis informacija o filmu 
            implementirana je kao <b>JSON datoteka</b> na temelju datoteke 
            <i>movies.csv</i>.
        </p>
        <p>
            Osim <b>id</b>-a i <b>naziva filma</b> baza podataka
            sadrži <b>dodatne podatke o filmu</b> koji su dohvaćeni sa 
            <a href='http://www.omdbapi.com' target='_blank'>
                http://www.omdbapi.com.
            </a>
            Za dohvaćanje dodatnih podataka o filmovima i generiranje spomenute JSON 
            datoteke izradio sam skriptu <i>'generateMoviesInfoJson.php'</i> koja se nalazi u 
            <i>'./misc'</i> folderu projekta.
        </p>
        <p>
            JSON datoteka koja se koristi kao baza nalazi se u <i>'./data'</i> folderu.
            Naziv datoteke je <i>'movies_info.json'</i>.
        </p>
        <p>
            Osim <i>'movies_info.json'</i> sustav koristi još i 
            <i>'./data/movies_array.php'</i> te <i>'./js/movies-autocomplete.js'</i>.
            Radi se o datotekama koje sadrže parove <i>id filma</i> => <i>naziv filma</i>.
        </p>
        <p>
            Prva se koristi kod slučaja da u <i>'movies_info.json'</i> 
            nema informacije o filmu (jer servis koji je korišten za dohvaćanje dodatnih 
            informacija o filmu nema informacije za 95 filmova iz <i>movies.csv</i> datoteke).
            Druga se koristi za autocomplete funkcionalnost kod pretrage.
        </p>

        <h2>Sustav za preporuke</h2>
        <p>
            Sustav za preporučivanje filmova implementirao sam koristeći 
            se algoritmom za 
            <a href='http://en.wikipedia.org/wiki/Euclidean_distance' target='_blank'>
                Euklidsku udaljenost (eng. Euclidean Distance)</a>.
        </p>

        <p>
            Algoritam za Euklidsku udaljenost mjeri udaljenost između dvije točke. 
            U kontekstu kolaborativnog filtriranja udaljenost između dva korisnika ili proizvoda.
        </p>

        <p>
            Razlozi zbog kojih sam se odlučio za korištenje algoritma za Euklidsku udaljenost
            su jednostavnost samog algoritma (pa time i implementacije) te činjenica da 
            daje dosta dobre rezultate na temelju podataka koji su gusti ili kontinuirani 
            (eng. dense or continuous). Kako se u datoteci <i>'prefs.csv'</i> nalazi 100.000
            ocjena od strane 943 korisnika za bazu od 1.682 filma algoritam za Euklidsku udaljenost
            bi trebao dati dosta dobre rezultate. 
        </p>

        <p>
            Sukladno prethodno napisanom, model za preporuke načinjen je na temelju svih podataka 
            iz datoteke <i>'prefs.csv'</i>. 
        </p>
        
        <p>
            Otvaranjem nekog filma sustav sprema otvoreni film kao film koji se korisniku sviđa
            (bilježi da ga je korisnik ocijenio ocjenom 5).
        </p>

        <h4>User based collaboration filtering</h4>

        <p>
            Model je pohranjen u <i>'./data/user_centric_recommendations_model.json'</i>.
            Izgeneriran je na način da sam sortirao <i>'prefs.csv'</i> po prvom (userID) stupcu
            te zatim učitao tu datoteku u <i>'./misc/generateUserCentricRecommendationsJson.php'</i>.
            Podaci ne moraju biti sortirani po nekom određenom redu, važno je samo da su vrijednosti
            userID jedna do druge jer se na temelju istog userID-a radi ključ 
            polja kojem se zatim dodaju parovi <i>movieID</i> => <i>rating</i> za sve sljedeće retke koji 
            imaju isti userID.
        </p>
        <p>
            Model generiran na prethodno opisani način u prvi plan stavlja korisnika 
            pa zatim filmove koje je ocjenio. Koristi se na <i>'index.php'</i> stranici za 
            preporuke filmova na temelju svih prethodno pogledanih (otvorenih) filmova.
            Koji su filmovi (u trenutnoj sesiji) otvarani može se vidjeti pritiskom na 
            gumb &hearts; koji se nalazi u desnom footeru apliakcije.
            Ocjene sličnosti (preporuke) su od &#9733; &#9733; &#9733; &#9733; &#9733; do 
            &#9733;&#9734;&#9734;&#9734;&#9734;.
        </p>

        <h4>Item based collaboration filtering</h4>
        <p>
            Na konkretnoj stranici nekog filma preporuke se kreiraju <b>samo</b>
            na temelju <b>tog</b> filma.
            Dakle, u okviru za preporuke su prikazani filmovi koji su slični tom otvorenom filmu.
            Ocjena preporuke (sličnosti) iskazuju se postotkom.
        </p>
        <p>
            Za generiranje preporuka na temelju jednog filma također se koristi 
            algoritma za Euklidsku udaljenost. Razlika je što se tu koristi nešto drugačiji model.
            Naime, na temelju <i>'./data/user_centric_recommendations_model.json'</i> <br>sam sa
            <i>'./misc/transformUserCentricJsonToMovieCentricJson.php'</i> <br>kreirao 
            <i>'./data/movie_centric_recommendations_model.json'</i> <br>kod kojeg je 
            <b>film u prvom planu</b>.
            Tako da film sadrži informacije o tome koje su mu ocjene dali korisnici.
        </p>
        
        <h4>Razlika između 2 implementirana sustava za preporuke</h4>
        <p>
            Razliku između ova dva sustava najbrže se može objasniti na primjeru 
            nekog konkertnog filma (koji nema previše preporuka).
            Uzmimo stoga za primjer film pod nazivom: <b>'Further Gesture, A'</b> 
            čiji je id <b>1671</b>.
        </p>
        <p>
            Otvaranjem ovog filma nakon pokretanja aplikacije (kad u sesiji nema drugih dodanih filmova)
            rezultirat će (između ostalog) preporukom <b>5</b> filmova kojima je sličnost s ovim filmom <b>100%</b>.
            Jedan od tih filmova je <b>'Fallen'</b> (čiji je id 350).
        </p>
        <p>
            No, povratkom na početnu stranicu (bez otvaranja ijedng drugog filma) <b>'Fallen'</b>
            se neće naći među preporukama sa <b>5 zvjezdica</b>. Štoviše, odlaskom 
            na zadnju stranicu preporuka 
            može se vidjeti da <b>'Fallen'</b> i ostali filmovi koji su sa filmom 
            <b>'Further Gesture, A'</b> imali
            <b>100% sličnost</b> imaju samo jednu zvjezdicu. 
            Razlog tome je što je film <b>'Further Gesture, A'</b>
            ocjenio <b>samo jedan korisnik</b> (id je 787) i to <b>ocjenom 1</b>. 
            Sustav za preporuku filmova otvaranjem filma <b>'Further Gesture, A'</b>
            je stoga preporučio 
            (okarakterizirao kao 100% slični filmovi)
            ostale filmove koje je taj korisnik ocjenio sa <b>ocjenom 1</b>.
        </p>
        
        <p>
            Sustav za preporuke kod otvaranja početne stranice (prikaza svih filmova)
            preporuča na temelju otvaranih filmova. Kako je samo film <b>'Further Gesture, A'</b>
            otvaran, sustav preporuča filmove koji su se svidjeli korisniku (id <b>787</b>)
            s ocjenama koje im je on dao.
        </p>
        
        <p>
            Sa više otvaranih filmova i više korisnika koji su otvorenom filmu dali neku ocjenu
            stvari naravno nisu više ovako jednostavne.
        </p>
        
        <p>
            Ovim primjerom sam, nadam se, pojasnio razliku između 2 
            implementirana sustava za preporuke te sam koncept na čemu temelje svoje ocjene.
        </p>

        <h4>Testiranje sustava za preporuke</h4>
        <p>
            Da algoritam za preporuke zaista radi dobro odnosno preporuča filmove 
            na temelju određenog modela lakše (brže) je uočiti pokretanjem
            aplikacije sa manjim modelom. Ja sam testirao sa zaista malim.
            Radi se o modelu koji sadrži 10 korisnika i ukupno 17 ocjena za 
            (po id-u filma prvih) 10 filmova. CSV datoteka modela nalazi se u folderu
            <i>./data</i> pod nazivom <i>'prefs_sorted_test.csv'</i>.
            <br>
            Za testiranje sustava s tim modelom treba u <i>'index.php'</i> i 
            <i>'movie.php'</i>
            <b> odkomentirati 6. </b> i <b>zakomentirati 7.</b> liniju koda.
            <br>
            Za učitavanje vlastitog testnog modela modificirajte datoteku
            <i>'./data/prefs_sorted_test.csv'</i> da odgovara vašem modelu te zatim 
            kliknite na ova dva linka:<br>
            <b>Prvo ovaj:</b>
            <a href="./misc/generateUserCentricRecommendationsJson.php" target="_blank">
                Generiranje testnog modela usmjerenog na korisnike</a>.<br>
            <b>Zatim na ovaj:</b>
            <a href="./misc/transformUserCentricJsonToMovieCentricJson.php" target="_blank">
                Transformacija generiranog testnog modela u model usmjeren na filmove</a>
            .<br>

            Vaš testni model će nakon toga biti učitan pa možete testirati korišteni algoritam za preporuke
            i na Vašem modelu.
            <br>

        </p>

        <h2>Dodatne funkcionalnosti</h2>

        <ul>
            <li>Responzivan dizajn - aplikacija je prilagođena i mobilnim uređajima</li>
            <li>Autocompleate funkcionalnost kod pretrage</li>
            <li>Mogućnost promjene jezika aplikacije (te lako dodavanje novih)</li>
            <li>Straničenje preporuka</li>
            <li>Mogućnost provjere ispravnosti HTML i CSS koda otvorene web stranice</li>
            <li>Pretraga je riješena na način da se uvijek pokuša pronaći traženi 
                film i prikazati neke korisne informacije o njemu i ako nije u bazi aplikacije</li>
            <li>Prikaz filmova koji Vam se sviđaju (otvaranih) - u svrhu lakšeg 
                testiranja sustava za preporuke (u desnom footeru aplikacije)</li>
            <li>Dodatan sustav za preporuke koji preporuča filmove samo na temelju otvorenog filma</li>
        </ul>

    </div>
{/block}

{block name='right-content-box'}
    <h1>Korišteni resursi</h1>
    <hr>
    <a href='http://www.smarty.net/download' target='_blank'>
        Smarty-3.1.13</a> za odvajanje logičkog dijela sustava od prezentacijskog.
    <br><hr>
    <a href='https://www.youtube.com/watch?v=eOG90Q8EfRo' target='_blank'>
        Create a Responsive Website Using HTML5 and CSS3</a> 
    tutorial na temu HTML5, CSS3 - responzivni dizajn.
    <br><hr>
    <a href='http://designshack.net/articles/javascript/create-a-simple-autocomplete-with-html5-jquery/' target='_blank'>
        Create a Simple Autocomplete With HTML5 & jQuery</a> 
    tutorial na temu autocomplete-a koristeći jQuery.
    <br><hr>
    <a href='http://all-free-download.com/free-vector/vector-clip-art/movie_tape_icon_144163.html' target='_blank'>
        Free movie tape icon</a> korištena kao logo web mjesta.
    <br><hr>

    <a href='http://it-ride.blogspot.com/2009/08/pagination-with-smarty.html' target='_blank'>
        Smarty template za straničenje</a> koji sam prilagodio potrebama aplikacije.
    <br><hr>
    <a href='http://dia-installer.de/index.html.en' target='_blank'>
        Dia Diagram Editor</a> korišten je za izradu grafičkog prikaza arhitekture.
    <br><hr>
{/block}

{block name='footer'}
    <div id="page-footer-box">
        <div id="footer-content-box">
            <div id="footer-content-box-left">
                <p style="text-align: center;">
                    Copyright &copy;
                    <a href='https://github.com/jozemberi' target='_blank'>
                        Josip Žemberi
                    </a>  2014 | 

                    <a href='http://www.best.hr/code-challenge/v4.0/' target='_blank'>
                        BEST Code Challenge 4.0
                    </a>

                </p>

            </div>
            <div id="footer-lang-box">
                <p style="text-align: center;">
                    HR | <span style='color: lightgray'>EN</span>

                    |
                    <a href='http://validator.w3.org/check?uri=referer' target='_blank'>
                        HTML5
                    </a> |
                    <a href='http://jigsaw.w3.org/css-validator/check/referer' target='_blank'>
                        CSS </a> | 
                    <a href='doc.php' target='_blank'> doc</a>
                </p>
            </div> 
        </div>
    </div>
{/block}



