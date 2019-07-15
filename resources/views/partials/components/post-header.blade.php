@php
  // $background = get_sub_field( 'eden_background_picker' );
  $background = 'turquoise-light';
  // $padding = get_sub_field( 'eden_padding_picker' );
  $padding = 'large';
  //$alignment = get_sub_field( 'eden_text_alignment_picker' );
  $alignment = 'center';
  // $paddingExtra = get_sub_field( 'eden_extra_padding-bottom' );

  // $title = get_sub_field( 'eden_block_title' );
  $title = get_the_title();
  // $content = get_sub_field( 'eden_block_wysiwyg' );
  // $hasButton = get_sub_field( 'eden_block_has_button' );
  $date = get_the_date( 'F, j Y' );

@endphp

<section class="block-wysiwyg bg-{{ $background }} padding-{{ $padding }} text-{{ $alignment }}">
  <div class="container clearfix container-fluid-md-down">
    <div class="row">
      <div class="col-sm-12 col-lg-10 mx-lg-auto">
        <div class="container">
          <div class="eden-copy-sm">
              <p>{{ $date }}</p>
              <div class="hr-sm"></div>
              <h2>{{ $title }}</h2>

            </div>
        </div>
      </div>
    </div>
  </div>
</section>