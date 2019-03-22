<header class="banner">
  <div class="container">
    {{-- <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a> --}}
    {{-- <nav class="nav-primary"> --}}
    <nav class="row flex-nowrap justify-content-between align-items-center">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
      @if( get_field( 'site__logo', 'option' ) ) 
		@php $image = get_field( 'site__logo', 'option' ); @endphp
		<a class="navbar-brand mx-auto" href="#"><div id="logo">
			<img src="{{ $image['sizes']['large'] }}" alt="{{ $image['alt'] }}" class="img-fluid site-logo">
		</div></a>
      @endif
    </nav>
  </div>
</header>
