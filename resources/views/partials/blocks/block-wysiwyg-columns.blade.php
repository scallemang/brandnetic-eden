@php
  $background = get_sub_field( 'eden_background_picker' );
  $padding = get_sub_field( 'eden_padding_picker' );
  $alignment = get_sub_field( 'eden_text_alignment_picker' );
  $paddingExtra = get_sub_field( 'eden_extra_padding-bottom' );

  $title = get_sub_field( 'eden_block_title' );
  $contentOne = get_sub_field( 'eden_column_one' );
  $contentTwo = get_sub_field( 'eden_column_two' );

@endphp

<section class="block-wysiwyg-columns bg-{{ $background }} padding-{{ $padding }} text-{{ $alignment }}@if($paddingExtra) padding-{{ $padding }}-extra @endif">
  <div class="container clearfix container-fluid-md-down">
    <div class="row">
      <div class="col-sm-12">
        <div class="container">
          <div class="eden-copy-sm">
            @if( $title )
              <h3 class="text-center">{{ $title }}</h3>
            @endif

            @if( $title && ( $contentOne || $contentTwo ) )
              <div class="hr-sm"></div>
            @endif
            <div class="row">
              @if( $contentOne )
                <div class="content col-lg-6">
                  {!! $contentOne !!}
                </div>
              @endif
              @if( $contentTwo )
                <div class="content col-lg-6">
                  {!! $contentTwo !!}
                </div>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>