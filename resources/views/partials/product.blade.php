
  @extends('podkategorie')

  @section('content')
  <section class="content2">
  <div class="hlavni">
@include('partials.detail')
    </div>
    <div class="prava">
       @include('partials.menu')
       @include('partials.categories')
    </div>
  </section>
  @endsection