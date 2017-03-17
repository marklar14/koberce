
  @extends('podkategorie')

  @section('content')
  <section class="content2">
  <div class="hlavni">
       @include('partials.categories2')
        <div class="clear"></div>
        @include('partials.filtr')
<div class="clear"></div>
       @include('partials.products')
<div class="clear"></div>

    </div>
    <div class="prava">
       @include('partials.menu')
       @include('partials.categories')
    </div>
  </section>
  @endsection