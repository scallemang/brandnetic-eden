@php
$title = get_sub_field( 'eden_block_title' );
$args = array(
  'posts_per_page' => 2,
  'post_type' => 'post',
);

$recent = new WP_Query( $args );

@endphp

@if( $recent->have_posts())
<section class="block-recent-posts py-lg-5 pt-5" @if( $image ) style="background-image: url('{{ $image['url'] }}'); background-size: cover; background-position: center;" @endif> 
    <div class="container {{-- container-fluid-md-down --}}">
      <div class="row">
        <div class="col-lg-8 mx-lg-auto">
         @if( $title )
            <h2 class="text-center">{{ $title }}</h2>
            <div class="hr-sm"></div>
          @endif

          <div class="row">
            @while($recent->have_posts()) @php $recent->the_post() @endphp
              <div class="col-md-6">
                @include('partials.components.card')
              </div>
            @endwhile
          </div>
        </div>
      </div>
    </div>
</section>
@endif
@php wp_reset_postdata(); @endphp