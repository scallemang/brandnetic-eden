@php
  // $background = get_sub_field( 'eden_background_picker' );
  $padding = get_sub_field( 'eden_padding_picker' );
  // $alignment = get_sub_field( 'eden_text_alignment_picker' );
  // $paddingExtra = get_sub_field( 'eden_extra_padding-bottom' );

  // $title = get_sub_field( 'eden_block_title' );
  // $content = get_sub_field( 'eden_block_wysiwyg' );
  // $hasButton = get_sub_field( 'eden_block_has_button' );

@endphp

<section class="block-gallery padding-{{ $padding }} text-center"> 
  @php
    $type = get_sub_field( 'eden_gallery_type' );
  @endphp
  {{-- Start of WP --}}
  @if( 'wp' == $type )
    <div class="container">
      @php
        $title = get_sub_field( 'eden_block_title' );
        $content = get_sub_field( 'eden_block_intro' );
        $galleryRows = get_sub_field( 'eden_wp_gallery_repeater' );
        $modals = array();
      @endphp
      @if( $title )
        <h2>{{ $title }}</h2>
      @endif

      @if( $title && $content )
        <div class="hr-sm"></div>
      @endif

      @if( $content )
        <div class="content">
          {!! $content !!}
        </div>
      @endif

      {{-- Gallery --}}
      @if( $galleryRows )
        <div class="row">
          @foreach( $galleryRows as $galleryRow )
            @php  
              $image = $galleryRow[ 'eden_image_picker' ];
              $linkGroup = $galleryRow[ 'eden_image_link' ];
              $uniqueId = $linkGroup[ 'eden_unique_id' ];
              $linkType = $linkGroup[ 'eden_link_picker' ];
              switch ( $linkType ) {
                case 'file':
                  $file = $linkGroup[ 'eden_file_upload' ];
                  $linkUrl = $file[ 'url' ];
                  $linkTarget = '';
                  break;
                case 'internal':
                  $linkUrl = $linkGroup[ 'eden_internal_page' ];
                  $linkTarget = '';
                  break;
                case 'external':
                  $linkUrl = $linkGroup[ 'eden_external_site' ];
                  $linkTarget = '_blank';
                  break;
                case 'id':
                  $linkUrl = $linkGroup[ 'eden_unique_id' ];
                  $linkTarget = '';
                  break;
                default:
                  $linkUrl = '#';
                  $linkTarget = '';
                  break;
              }
            @endphp
            <div class="col-lg-3">
              <a @if( 'file' == $linkType ) data-file="{{ $linkUrl }}" @else href="{{ $linkUrl }}" @endif ><img src="{{ $image['sizes']['medium'] }}" alt="{{ $image['alt'] }}" class="img-fluid"></a>
            </div>
            @if( 'file' == $linkType )
              @php $modals[ $uniqueId ] = $linkUrl @endphp
            @endif
          @endforeach
        </div>
      @endif
      {{-- Modals --}}
      @if( !empty( $modals ) )
        
      @endif
    {{-- End of WP --}}
    </div>
  @endif

  {{-- Start of IG --}}
  @if( 'instagram' == $type )
    @php
      $code = get_sub_field( 'eden_instagram_carousel' )[ 'eden_instagram_shortcode' ];
      print do_shortcode( $code );
    @endphp
  {{-- End of IG --}}
  @endif

  {{-- Start of Grid --}}
  @if( 'grid' == $type )
    <div class="container">
      @php
        $title = get_sub_field( 'eden_block_title' );
        $content = get_sub_field( 'eden_block_intro' );
        $galleryRows = get_sub_field( 'eden_wp_gallery_repeater' );
      @endphp
      @if( $title )
        <h2>{{ $title }}</h2>
      @endif
    </div>
  @endif
  {{-- End of Grid --}}
</section>