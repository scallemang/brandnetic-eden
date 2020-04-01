@php
  $background = get_sub_field( 'eden_background_picker' );
  $padding = get_sub_field( 'eden_padding_picker' );
  $alignment = get_sub_field( 'eden_text_alignment_picker' );
  $paddingExtra = get_sub_field( 'eden_extra_padding-bottom' );
  $sectionId = get_sub_field( 'eden_section_id' );

  $title = get_sub_field( 'eden_block_title' );
  $content = get_sub_field( 'eden_block_wysiwyg' );
  $hasButton = get_sub_field( 'eden_block_has_button' );

@endphp

<section @if($sectionId)id="{{ $sectionId }}"@endif class="block-cta bg-{{ $background }} padding-{{ $padding }} text-{{ $alignment }}@if($paddingExtra) padding-{{ $padding }}-extra @endif">
  <div class="container clearfix container-fluid-md-down">
    <div class="row">
      <div class="col-sm-12 col-lg-10 mx-lg-auto">
        <div class="container">
          <div class="eden-copy-sm">
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

            @if( $hasButton )
              @php $buttons = get_sub_field( 'eden_button_repeater' ); @endphp
              <div class="container mt-5 cta-buttons">
                @foreach( $buttons as $button )
                  <a id="" class="btn btn-outline my-2" href="#{{ $button[ 'eden_cta_linked_id'] }}">{{ $button['eden_cta_button_text'] }}</a>
                @endforeach
              </div>
            @endif

            </div>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-pattern"></div>
</section>