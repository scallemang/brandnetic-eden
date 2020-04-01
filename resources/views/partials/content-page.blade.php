{{-- @php the_content() @endphp --}}
{{-- {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!} --}}

@if( have_rows('eden_flexcontent') )
    @while ( have_rows('eden_flexcontent') ) @php the_row() @endphp

      @if( get_row_layout() == 'eden_hero' )
      	@include('partials.blocks.block-hero')

      @elseif( get_row_layout() == 'eden_wysiwyg' )
      	@include('partials.blocks.block-wysiwyg')

      @elseif( get_row_layout() == 'eden_cta' )
        @include('partials.blocks.block-cta')

      @elseif( get_row_layout() == 'eden_features' )
      	@include('partials.blocks.block-features')

      @elseif( get_row_layout() == 'eden_gallery' )
      	@include('partials.blocks.block-gallery')

	  @elseif( get_row_layout() == 'eden_code' )
      	{!! get_sub_field( 'eden__code_block' ) !!}

      @elseif( get_row_layout() == 'eden_recent_posts' )
      	@include('partials.blocks.block-recent-posts')

      @elseif( get_row_layout() == 'eden_map' )
      	@include('partials.blocks.block-map')

      @elseif( get_row_layout() == 'eden_divider' )
        @include('partials.blocks.block-divider')

      @elseif( get_row_layout() == 'eden_finishes' )
        @include('partials.blocks.block-finishes')

      @elseif( get_row_layout() == 'eden_wysiwyg_columns' )
        @include('partials.blocks.block-wysiwyg-columns')

      @endif

    @endwhile
@else
    {{-- no layouts found --}}

@endif