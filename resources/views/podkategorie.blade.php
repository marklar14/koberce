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

  <header class="podkategorie">
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

  </div>
  </header>

@yield('content')




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
