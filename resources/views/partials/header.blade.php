<header class="banner">
  <div class="container">
    {{-- <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a> --}}
    {{-- <nav class="nav-primary"> --}}
    <nav class="row flex-nowrap justify-content-between align-items-center navbar-light">

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
      {{-- <button type="button" class="btn btn-outline-primary px-4">Menu</button> --}}
      @if( get_field( 'site__logo', 'option' ) ) 
		@php $image = get_field( 'site__logo', 'option' ); @endphp
		<a class="navbar-brand mx-auto" href="#"><div id="logo">
			<img src="{{ $image['sizes']['large'] }}" alt="{{ $image['alt'] }}" class="img-fluid site-logo">
		</div></a>
      @endif
      <div class="contact">
        <button type="button" class="btn btn-outline-primary d-none d-md-block">Register</button>
        <a class="tel t-condensed d-none d-lg-block">250-317-9947</a>
      </div>
    </nav>
  </div>
</header>
@include('partials.menu')