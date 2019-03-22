<section class="page-hero"> 
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-lg-4">
        @if( get_field( 'hero__title' ) )<h1>{{ get_field( 'hero__title' ) }}</h1>@endif
      </div>
      <div class="col-sm-12 col-lg-8">
        @if( get_field( 'hero__image' ) )
          @php $image = get_field( 'hero__image' ); @endphp
          <img src="{{ $image['sizes']['large'] }}" alt="{{ $image['alt'] }}" class="img-fluid">
        @endif
      </div>
    </div>
    <div class="row bg-primary">
      <div class="col-sm-6">
        @if( get_field( 'hero__copy' ) ){!! get_field( 'hero__copy' ) !!}@endif
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 text-center">
        @if( get_field( 'hero__subtitle' ) )<h3>{{ get_field( 'hero__subtitle' ) }}</h3>@endif
      </div>
    </div>
  </div>
</section>