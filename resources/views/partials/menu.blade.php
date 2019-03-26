<header class="menu">
  <div class="container">
    {{-- <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a> --}}
    {{-- <nav class="nav-primary"> --}}
    <nav class="row flex-nowrap justify-content-between align-items-center navbar-light">

      <button class="menu-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="menu-toggler-icon"></span>
      </button>

      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
      {{-- <button type="button" class="btn btn-outline-primary px-4">Menu</button> --}}
      @if( get_field( 'site__alt_logo', 'option' ) ) 
		@php $image = get_field( 'site__alt_logo', 'option' ); @endphp
		<a class="navbar-brand mx-auto" href="#"><div id="logo">
			<img src="{{ $image['sizes']['large'] }}" alt="{{ $image['alt'] }}" class="img-fluid site-logo">
		</div></a>
      @endif
    </nav>
  </div>
  <div class="full-menu">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <ul>
            <li class="t-condensed t-uppercase"><a href="#">Register</a></li>
            <li class="t-condensed t-uppercase"><a href="#">Location</a></li>
            <li class="t-condensed t-uppercase"><a href="#">Floorplans</a></li>
            <li class="t-condensed t-uppercase"><a href="#">Design & Features</a></li>
            <li class="t-condensed t-uppercase"><a href="#">Amenities</a></li>
            <li class="t-condensed t-uppercase"><a href="#">Team</a></li>
          </ul>
        </div>
        <div class="col-lg-4">
          <div class="row">
            <div class="col-xl-6">
              <p class="t-condensed t-uppercase">905 Badke Rroad<br>
              Kelowna, BC V1X 5Z5</p>
            </div>
            <div class="col-xl-6">
              <p class="t-condensed t-uppercase">250-317-9947<br>
              <a href="eden@fortunemarketing.ca">eden@fortunemarketing.ca</a></p>
            </div>
          </div>
        </div>
  </div>
</header>