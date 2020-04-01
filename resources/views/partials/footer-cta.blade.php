@php
  $title = get_field( 'eden_footer_cta_header', 'option' );
  $content = get_field( 'eden_footer_cta_content', 'option' );
  $hasButton = get_field( 'eden_footer_cta_has_button', 'option' );
  $buttonUrl = $hasButton ? get_field( 'eden_button_group_clone', 'option' )['eden_button_link'] : null;
  $buttonText = $hasButton ? get_field( 'eden_button_group_clone', 'option' )['eden_button_text'] : null;
@endphp
<section class="footer__cta bg-primary-light py-5 text-center">
  <div class="container">
  	<div class="row">
  		<div class="col-md-12 mx-lg-auto">
        @if( $title )<h3>{{ $title }}</h3>@endif

        @if( $title && $content )
          <div class="hr-sm"></div>
        @endif

        @if( $content ){!! $content !!}@endif

        @if( $hasButton )
          <div class="pt-4">
            @if( $buttonUrl && $buttonText )
                <a id="" class="btn btn-outline" href="{{ $buttonUrl }}">{{ $buttonText }}</a>
            @endif
          </div>
        @endif
      </div>
		</div>
	</div>

</footer>
