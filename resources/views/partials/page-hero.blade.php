<section class="page-hero"> 
  <div class="bg-floral py-lg-5 pt-5">
    <div class="container py-lg-5 container-fluid-md-down">
      <div class="row">
        <div class="col-sm-8 offset-sm-2 col-md-6 offset-md-3 offset-lg-0 col-lg-5 p-lg-4 mb-5 mb-lg-0">
          @if( get_field( 'hero__title' ) )<div class="container"><h1 class="eden-display-1">{{ get_field( 'hero__title' ) }}</h1></div>@endif
        </div>
        <div class="col-sm-12 col-lg-7 px-sm-0">
          @if( get_field( 'hero__image' ) )
            @php $image = get_field( 'hero__image' ); @endphp
            <img src="{{ $image['sizes']['large'] }}" alt="{{ $image['alt'] }}" class="img-fluid">
          @endif
        </div>
      </div>
    </div>
  </div>
  <div class="bg-secondary ">
    <div class="container clearfix container-fluid-md-down">
      <div class="row hero__copy">
        <div class="col-lg-6 bg-primary col-padded-xl">
          <div class="container">
            @if( get_field( 'hero__copy' ) )<div class="eden-copy-sm">{!! get_field( 'hero__copy' ) !!}</div>@endif
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row bg-secondary row-cta">
        <div class="col-sm-12 text-center">
          @if( get_field( 'hero__subtitle' ) )<p class="eden-copy-lg t-uppercase"><strong>{!! get_field( 'hero__subtitle' ) !!}</strong></p>@endif
        </div>
      </div>
    </div>
  </div>
</section>