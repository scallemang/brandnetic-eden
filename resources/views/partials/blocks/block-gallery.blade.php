@php
  $background = get_sub_field( 'eden_background_picker' );
  $padding = get_sub_field( 'eden_padding_picker' );
  // $alignment = get_sub_field( 'eden_text_alignment_picker' );
  // $paddingExtra = get_sub_field( 'eden_extra_padding-bottom' );

  // $title = get_sub_field( 'eden_block_title' );
  // $content = get_sub_field( 'eden_block_wysiwyg' );
  // $hasButton = get_sub_field( 'eden_block_has_button' );

@endphp

<section class="block-gallery padding-{{ $padding }} text-center bg-{{ $background }}"> 
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
        $columns = get_sub_field( 'eden_columns_clone' )[ 'eden_columns_picker' ];
        switch( $columns ) {
          case 'one':
            $colClass = 'col-lg-8 mx-lg-auto';
            break;
          case 'four':
            $colClass = 'col-lg-3';
            break;
          default:
            $colClass = 'col-lg-4';
            break;
        }
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
        <div class="row pt-5 gallery-row">
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
            <div class="{{ $colClass }} col-img">
              <a href="#" @if( 'file' == $linkType ) data-toggle="modal" data-target="#modal-{{ $uniqueId }}" @else href="{{ $linkUrl }}" @endif ><img src="{{ $image['sizes']['medium'] }}" alt="{{ $image['alt'] }}" class="img-fluid"></a>
            </div>
            @if( 'file' == $linkType )
              @php 
                $modals[] = array( 
                  'id'  => $uniqueId,
                  'url' => $linkUrl,
                );
              @endphp
            @endif
          @endforeach
        </div>
      @endif
      {{-- Modals --}}
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
        $gridImages = get_sub_field( 'eden_wp_grid_gallery' );
        $gridStyle = get_sub_field( 'eden_grid_style' );
    
        $imgLg = 'grid_lg';
        $imgSm = 'grid_sm';
    
        $i = 0;
        $cols = 0;
      @endphp
      @if( $title )
        <h2>{{ $title }}</h2>
        @if( $gridImages )
        <div class="row grid-row pt-5 {{ $gridStyle }}">
          @foreach( $gridImages as $k => $gridImage )

            @if( 'style-1' == $gridStyle )
              @php $imgMd = 'grid_md'; $loop = 4; @endphp
              @if( $i == 0 || $i == 1 || $i == 2)
                @php $size = $imgMd; $cols += 4 @endphp
              @elseif( $i == 3 )
                @php $size = $imgLg; $cols += 9 @endphp
              @elseif( $i == 4 )
                @php $size = $imgSm; $cols += 3 @endphp
              @endif

            @elseif( 'style-2' == $gridStyle )
              @php $imgMd = 'grid_squarish'; $loop = 3; @endphp
              @if( $i == 0 || $i == 1 )
                @php $size = $imgMd; $cols += 6 @endphp
              @elseif( $i == 2 )
                @php $size = $imgLg; $cols += 9 @endphp
              @elseif( $i == 3 )
                @php $size = $imgSm; $cols += 3 @endphp
              @endif
            @endif

            <div class="col-img @if( 'grid_squarish' == $size ) grid_md @else {{ $size }} @endif">
              <img src="{{ $gridImage[ 'sizes' ][ $size ] }}" class="img">
              @if( $i < $loop )
                @php $i++; @endphp
              @else
                @php $i = 0; @endphp
              @endif
            </div>
          @if( $cols >= 12 && $k + 1 < count( $gridImages ) )
          </div>
          <div class="row grid-row {{ $gridStyle }}">
          @php $cols = 0; @endphp
          @endif
            
          @endforeach
        </div>
      @endif
      @endif
    </div>
  @endif
  {{-- End of Grid --}}
</section>

@if( !empty( $modals ) )
  @foreach( $modals as $modal )
    <div class="modal fade" id="modal-{{ $modal['id'] }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            


            <div class="reveal-overlay" style="display: block;">
              <div class="reveal" id="floorplan-modal" data-reveal="88ckrs-reveal" role="dialog" aria-hidden="false" data-yeti-box="floorplan-modal" data-resize="floorplan-modal" tabindex="-1" style="display: block; top: 51px;" data-events="resize">
                  <div class="embed-responsive" style="padding-bottom:110%">
                    <object id="pdf-viewer" data="{{ $modal['url'] }}" type="application/pdf" width="100%" height="100%" internalinstanceid="6"></object>
                  </div>
                  <div class="pdf-button">
                    <a target="_blank" class="js-pdf-btn button" href="{{ $modal }}">Download PDF</a>
                  </div>
            <button class="close-button" data-close="" aria-label="Close modal" type="button">
            <span aria-hidden="true">×</span>
            </button>
            </div></div>





          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
  @endforeach
@endif