<section class="page-hero"> 
  <div class="bg-floral py-lg-5 pt-5">
    <div class="container pt-lg-5 container-fluid-md-down">
      <div class="row row-hero">
        <div class="col-sm-8 offset-sm-2 col-md-6 offset-md-3 offset-lg-0 col-lg-5 col-xl-4 p-lg-4 mb-5 mb-lg-0">
          @if( get_field( 'hero__title' ) || get_field( 'hero__subtitle' ) )<div class="container">@if( get_field( 'hero__title' ) )<h1 class="eden-display-1">{{ get_field( 'hero__title' ) }}</h1>@endif @if( get_field( 'hero__subtitle' ) )<h3 class="eden-display-3">{{ get_field( 'hero__subtitle' ) }}</h3>@endif</div>@endif
        </div>
        <div class="col-sm-12 col-lg-7 col-xl-8 px-sm-0">
          @if( get_field( 'hero__image' ) )
            @php $image = get_field( 'hero__image' ); @endphp
            {{-- <pre>@php print_r( $image ); @endphp</pre> --}}
            <img src="{{ $image['sizes']['landscape_hero_medium'] }}" alt="{{ $image['alt'] }}" class="img-fluid d-block d-lg-none">
            <img src="{{ $image['sizes']['large'] }}" alt="{{ $image['alt'] }}" class="img-fluid d-none d-lg-block">
          @endif
        </div>
      </div>
    </div>
    <div class="bg-pattern"></div>
  </div>
  <div class="bg-secondary ">
    <div class="container clearfix container-fluid-md-down">
      <div class="row hero__copy">
        @if( get_field( 'hero__copy' ) )
          <div class="col-lg-8 col-xl-8 bg-primary col-padded-xl">
            <div class="container">
              <div class="eden-copy-sm">{!! get_field( 'hero__copy' ) !!}</div>
            </div>
          </div>
        @endif
      </div>
    </div>
    <div class="container">
      <div class="row bg-secondary row-cta">
        <div class="col-sm-12 text-center">
          @if( get_field( 'hero__cta' ) )<h2 class="eden-display-1">{!! get_field( 'hero__cta' ) !!}</h2>@endif
        </div>
      </div>
    </div>
  </div>
</section>