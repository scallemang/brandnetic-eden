<header class="banner">
  <div class="container">
    {{-- <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a> --}}
    {{-- <nav class="nav-primary"> --}}
    <nav class="row flex-nowrap justify-content-between align-items-center navbar-light">

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      @if( has_nav_menu( 'header-menu-left' ) )
        @php
          wp_nav_menu( array(
            'menu' => 'header-menu-left', 
            'theme_location' => 'header-menu-left',
            'container_class' => 'eden-menu',
            'walker' => new \App\wp_bootstrap4_navwalker(),
          ) );
        @endphp
      @endif


      @if( get_field( 'site__logo', 'option' ) ) 
    		@php $image = get_field( 'site__logo', 'option' ); @endphp
      		<a class="navbar-brand mx-auto" href="{{ get_home_url() }}"><div id="logo">
      			<img src="{{ $image['sizes']['large'] }}" alt="{{ $image['alt'] }}" class="img-fluid site-logo">
      		</div></a>
      @endif

      @if( has_nav_menu( 'header-menu-right' ) )
        @php
          wp_nav_menu( array(
            'menu' => 'header-menu-right', 
            'theme_location' => 'header-menu-right',
            'container_class' => 'eden-menu',
            'walker' => new \App\wp_bootstrap4_navwalker(),
          ) );
        @endphp
      @endif
      {{-- <div class="contact">
        <button type="button" id="button__register--header" class="btn btn-primary d-none d-md-block">Register</button>
        <a class="tel t-condensed d-none d-lg-block">250-317-7879</a>
      </div> --}}
    </nav>
  </div>
</header>
@include('partials.menu')