<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="d84Cv9QHNqb2VeZyxLzXebtaSQWkaap8aVEd9zVoK6w" />
    <meta name="description" content="{!! $meta_description !!}">
    <meta name="keywords" content="{!! $meta_keywords !!}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta property="og:title" content="{!! $og_title or $title  !!}">
        <meta property="og:description" content="{!! $og_description or $title !!}">
        <meta property="og:image" content="{!! $og_image or Request::url().'/images/logo.png' !!}">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>{!! $title !!}</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
            <script>
            // rename myToken as you like
            window.myToken =  <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
            </script>
  </head>

  <body>

  <header class="main">
  <div class="hlavicka css3-shadow3">
  <div class="logo">
  <a href=""><img src="images/logo.png" alt=""/></a>
  </div>
  <div class="odkazy">
   <ul>
       <li><a href="">Sortiment</a></li>
       <li><a href="">Prodejna</a></li>
       <li><a href="">Služby</a></li>
       <li><a href="">Realizace</a></li>
       <li><a href="">Kontakt</a></li>
       </ul>
  </div>
  <div class="nadpis">
  <h1>
  Koberce Praha - Kusové koberce Praha - Vinylové podlahy Praha - PVC podlahy Praha</h1>
  </div>
  </div>
  <div class="sloupec">
  <div class="top">
  <div class="radek">
  <input type="text" name="search" placeholder="Hledat..."/> <button><i class="fa fa-search" aria-hidden="true"></i></button>
  </div>
  </div>
  <div class="menu">
  <div class="resp2">
        <ul><li>
          <a href="">Menu</a>
        </li></ul>
  </div>
  <ul class="hlavni">
  <li class="kat">
  <a href="">Sortiment <span class="cara2"></span></a>
  <div class="podkategorie">
  <div class="sloupec">
  <h2>Sortiment</h2>
  <ul>
  <li>
    <a href="">Koberce v metráži</a>
  </li>
    <li>
      <a href="">Luxusní koberce v metráži</a>
    </li>
      <li>
        <a href="">Vlněné koberce v metráži</a>
      </li>
          <li>
            <a href="">Zátěžové koberce v metráži obyčejné</a>
          </li>
                    <li>
                      <a href="">Zátěžové koberce hotelové - kancelářské</a>
                    </li>
             <li>
              <a href="">Kobercové čtverce - objektové</a>
        </li>
                     <li>
                    <a href="">Venkovní koberce</a>
                        </li>
                             <li>
                        <a href="">Podkladové a výstavářské koberce</a>
                         </li>
      <li><a href="">Čistící zóny - rohožky</a></li>

  </ul>
 <h2><a href="">Kusové koberce</a></h2>
   <ul>
      <li>
        <a href="">Moderní</a>
      </li>
   <li>
     <a href="">Klasické</a>
   </li>
     <li>
       <a href="">Dětské</a>
     </li>
</ul>

  </div>
  <div class="sloupec">
   <h2><a href="">Kusové koberce luxusní</a></h2>
   <ul>
      <li><a href="">Ligne pure</a></li>
      <li><a href="">Osta  </a></li>
       <li><a href="">Arte espina</a></li>
        <li><a href="">Stepevi</a></li>
   </ul>

   <ul>
      <li><a href="">Běhouny</a></li>
      <li><a href="">Nášlapy na schody a rohožky</a></li>
      <li><a href="">Pvc Podlahy</a></li>
      <li><a href="">Vinylové podlahy</a></li>
      <li><a href="">Lepidla - stěrky - příslušenství</a></li>
      <li><a href="">Soklové lišty</a></li>
      <li><a href="">Přechodové lišty</a></li>
            <li><a href="">Bytové Pvc podlahy</a></li>
                  <li><a href="">Lepené vinylové podlahy</a></li>
   </ul>


  </div>

  </div>
  </li>
    <li>
    <a href="">Prodejna <span class="cara2"></span></a>
    </li>
      <li>
      <a href="">Služby <span class="cara2"></span></a>
      </li>
        <li>
        <a href="">Poptávka <span class="cara2"></span></a>
        </li>
             <li>
                <a href="">Kontakt <span class="cara2"></span></a>
                </li>
  </ul>
  </div>
  </div>
  </header>
  <section class="content">
  <div class="boxes">
  <div class="radek">


  <a href="" class="kategorie">
  <div class="box">
    <div class="hover obr1">
    <div class="vice">
   <button>Více</button>
    </div>
    </div>
  <h1>Testovací kategorie</h1>
       <div class="top"></div>
  </div>
  </a>
  <a href="" class="kategorie">
  <div class="box">
    <div class="hover obr1">
    <div class="vice">
   <button>Více</button>
    </div>
    </div>
  <h1>Testovací kategorie</h1>
       <div class="top"></div>
  </div>
  </a>
  <a href="" class="kategorie">
  <div class="box">
    <div class="hover obr1">
    <div class="vice">
   <button>Více</button>
    </div>
    </div>
  <h1>Testovací kategorie</h1>
       <div class="top"></div>
  </div>
  </a>
  <a href="" class="kategorie">
  <div class="box">
    <div class="hover obr1">
    <div class="vice">
   <button>Více</button>
    </div>
    </div>
  <h1>Testovací kategorie</h1>
     <div class="top"></div>
  </div>
  </a>
    </div>
    </div>

  <div class="bannery">
  <div class="banner">
  <a href="">
  <img src="images/banner1.jpg" alt=""/>
  </a>
  </div>
    <div class="banner">
    <a href="">
    <img src="images/banner1.jpg" alt=""/>
    </a>
    </div>
  </div>

  <div class="nabidka">
  <h1>NABÍDKA KUSOVÝCH KOBERCŮ JE NAŠÍ OPRAVDOVOU CHLOUBOU!</h1>
  <div class="leva">
<h1>2 500 kusů koberců</h1>
<p>Nabízíme více než 2.500 kusů pověšených na stojanech pro komfortní výběr
    a další nespočet kusových koberců volně ložených ve velikostech od M až po XXL
    a to ve více než třech tisícovkách designů. Běhouny do bytových i komerčních
    prostor nabízíme samozřejmě také.</p>
    <ul><li>
    koberce metráž </li>
   <li> koberce kusové a běhouny</li>
   <li> koberce metráž luxusní a vlněné</li>
    <li>zátěžové koberce</li>
   </ul>
  </div>
    <div class="prava">
  <h1>150 druhů linolea</h1>
  <p>v šířce od 1,5m do 5m. Další produkty lze vybírat ze vzorníku. Vinylové podlahy nabízíme
      rovněž. Plovoucí podlahy jsou zastoupeny renomovanými značkami Krono Originál,
      Kronotex, M Floor, Balterio, Tarkett. Tyto produkty skvěle imitují jak dřevo, tak i
     kámen či dlažbu.</p>
      <ul>
          <li>PVC podlahy linoleum matroleum</li>
          <li>plovoucí podlahy</li>
          <li>vinylové podlahy</li>
          <li>lepidla a stěrkový materiál</li>
     </ul>
    </div>

  </div>
  </section>

  <footer class="row2">
  <div class="leva column">
<div class="radek">
<div class="obr">
<i class="fa fa-phone" aria-hidden="true"></i>
</div>
<p>
+420 722 200 200
</p>
</div>
<div class="radek">
<div class="obr">
<i class="fa fa-envelope" aria-hidden="true"></i>
</div>
<p>
info@on-lineobchody.cz
</p>
</div>
<div class="radek">
<div class="obr">
<i class="fa fa-clock-o" aria-hidden="true"></i>
</div>
<p>
Po - Pá 6:30 - 19:00 hod <br />
So - Ne 7:30 - 17:00 hod
</p>
</div>

<div class="socials">
<a href=""><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
<a href=""><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
</div>
  </div>
  <div class="stred column">
  <div class="mapa">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2560.5457944453633!2d14.31951871571794!3d50.076067379425496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470bbe31d8b73da9%3A0x100c0d6d54bff396!2sKarlovarsk%C3%A1+3%2F6%2C+163+00+Praha+17-%C5%98epy!5e0!3m2!1scs!2scz!4v1487102797984" width="70%" height="400" frameborder="0" style="border:0; margin-left: auto; margin-right: auto;" allowfullscreen></iframe>
  </div>
  <h2>Karlovarská 660/117,
      Praha 6 - Řepy</h2>
  </div>

  <div class="prava column">
  <ul>
       <li><a href="">Sortiment</a></li>
       <li><a href="">Prodejna</a></li>
       <li><a href="">Služby</a></li>
       <li><a href="">Realizace</a></li>
       <li><a href="">Kontakt</a></li>

  </ul>

  <p class="ktdesign">
  <strong>
  Ktdesign 2017
  </strong>
  </p>
  </div>
  </footer>

    <script src="{{ asset('js/app.js') }}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="{{ asset('js/app.js') }}"></script>
    <![endif]-->
  </body>
  </html>
