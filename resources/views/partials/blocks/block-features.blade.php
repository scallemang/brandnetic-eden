@if( have_rows('eden_features_repeater') )
  <section class="block-features bg-floral">
    @while( have_rows('eden_features_repeater') ) @php the_row(); @endphp
      @php
        $background = get_sub_field( 'eden_background_picker' );
        $title = get_sub_field( 'eden_block_header' );
        $content = get_sub_field( 'eden_block_copy' );
        $hasButton = get_sub_field( 'eden_block_has_button' );
        $image = get_sub_field( 'eden_block_image' );
        $oddOrEven = get_row_index() % 2 != 0 ? 'odd' : 'even'; 
      @endphp
      <div class="container grid-row grid-row-{{ $oddOrEven}}">
        @if( $title || $content )
          <div class="content bg-{{ $background }}">

            @if( $title )<h3>{{ $title }}</h3>@endif

            @if( $content )<p>{!! $content !!}</p>@endif

            @if( $hasButton )
              <div class="pt-4">
                @if( get_sub_field( 'eden_block_button_group' )[ 'eden_button_text' ] && get_sub_field( 'eden_block_button_group' )['eden_button_link'] )
                    <a id="" class="btn btn-outline" href="{{ get_sub_field( 'eden_block_button_group' )['eden_button_link'] }}">{{ get_sub_field( 'eden_block_button_group' )['eden_button_text'] }}</a>
                @endif
              </div>
            @endif

          </div>
        @endif

        @if( $image )
          <div class="img" style="background-image:url('{{ $image['sizes']['large'] }}'); background-size:cover;">
            {{-- <img src="{{ $image['sizes']['landscape_hero_medium'] }}" alt="{{ $image['alt'] }}" class="img-fluid d-block d-lg-none">
            <img src="{{ $image['sizes']['large'] }}" alt="{{ $image['alt'] }}" class="img-fluid d-none d-lg-block"> --}}
          </div>
        @endif
      </div>

    @endwhile
  </section>
@endif