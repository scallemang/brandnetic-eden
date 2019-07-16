@php
  $background = get_sub_field( 'eden_background_picker' );
  // $padding = get_sub_field( 'eden_padding_picker' );

  $title = get_sub_field( 'eden_block_title' );
  $finishes = get_sub_field( 'eden_finishes_repeater' );
@endphp

<section class="block-finishes bg-{{ $background }} py-5 text-{{ $alignment }}@if($paddingExtra) padding-{{ $padding }}-extra @endif">
  <div class="container clearfix container-fluid-md-down">
    <div class="row">
      <div class="col-sm-12">
        <div class="container">
          <div class="eden-copy-sm">
            @if( $title )
              <h3 class="text-center">{{ $title }}</h3>
              <div class="hr-sm"></div>
            @endif

            @foreach( $finishes as $finish )
              @php
                $image = $finish['eden_finishes_image'];
                $heading = $finish['eden_finishes_heading'];
                $description = $finish['eden_finishes_description'];
                $hasButton = $finish['eden_finishes_has_button'];
              @endphp
              <div class="col-md-6">
               @if( $image )<img src="{{ $image[ 'sizes' ][ 'portrait_large' ] }}">@endif
               @if( $heading )<h4 class="pt-4">{{ $heading }}</h4>@endif
               @if( $description )<p>{{ $description }}</p>@endif

               @if( $hasButton )
                <div class="my-4">
                @if( $finish[ 'eden_finishes_button' ][ 'eden_button_text' ] && $finish[ 'eden_finishes_button' ]['eden_button_link'] )
                    <a id="" class="btn btn-outline" href="{{ $finish[ 'eden_finishes_button' ]['eden_button_link'] }}">{{ $finish[ 'eden_finishes_button' ]['eden_button_text'] }}</a>
                @endif
                </div>
              @endif
              </div>
            @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>