<section class="page-hero"> 
  <div class="bg-floral">
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
    </div>
  </div>
  <div class="bg-secondary ">
    <div class="container clearfix">
      <div class="row hero__copy">
        <div class="col-sm-6 bg-primary">
          @if( get_field( 'hero__copy' ) ){!! get_field( 'hero__copy' ) !!}@endif
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row bg-secondary">
        <div class="col-sm-12 text-center">
          @if( get_field( 'hero__subtitle' ) )<h3>{{ get_field( 'hero__subtitle' ) }}</h3>@endif
        </div>
      </div>
    </div>
  </div>
</section>