@php
  $background = get_sub_field( 'eden_background_picker' );
  $padding = get_sub_field( 'eden_padding_picker' );
  $alignment = get_sub_field( 'eden_text_alignment_picker' );
  $paddingExtra = get_sub_field( 'eden_extra_padding-bottom' );
  $sectionId = get_sub_field( 'eden_section_id' );

  $title = get_sub_field( 'eden_block_title' );
  $number = get_sub_field('columns__number');
  $contentOne = get_sub_field( 'eden_column_one' );
  $contentTwo = get_sub_field( 'eden_column_two' );
  $contentThree = get_sub_field( 'eden_column_three' );

  switch( $number ) {
    case 'three':
      $cols = 'col-lg-4';
      break;
    case 'two':
    default:
      $cols = 'col-lg-6';
      break;
  }

@endphp

<section @if($sectionId)id="{{ $sectionId }}"@endif class="block-wysiwyg-columns bg-{{ $background }} padding-{{ $padding }} text-{{ $alignment }}@if($paddingExtra) padding-{{ $padding }}-extra @endif">
  <div class="container clearfix container-fluid-md-down">
    <div class="row">
      <div class="col-sm-12 col-lg-10 mx-md-auto">
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
                <div class="content {{ $cols }}">
                  {!! $contentOne !!}
                </div>
              @endif
              @if( $contentTwo )
                <div class="content {{ $cols }}">
                  {!! $contentTwo !!}
                </div>
              @endif
              @if( $contentThree && 'three' == $number )
                <div class="content {{ $cols }}">
                  {!! $contentThree !!}
                </div>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-pattern"></div>
</section>