<section class="blog py-5">
  @php
    global $paged;
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;       
  @endphp
  @if(1 == $paged)

    @php
      $args = array(
        'posts_per_page' => 1,
        'post_type' => 'post',
        'in_category' => 'featured',
      );
      $featured = new WP_Query( $args );
    @endphp

    @if( $featured->have_posts())
    <section class="featured-post pb-5">
      <div class="container {{-- container-fluid-md-down --}}">
        <h3 class="text-center">Featured Post</h3>
        <div class="hr-sm"></div>
        <div class="row">
          <div class="col-lg-8 mx-lg-auto">
            <div class="row">
              @while($featured->have_posts()) @php $featured->the_post() @endphp
                <div class="col-sm-12">
                  @include('partials.components.card-large')
                </div>
              @endwhile
            </div>
          </div>
        </div>
      </div>
    </section>
    @endif
    
    @php wp_reset_query(); @endphp

  @endif
    
  @php
    $args = array(
        'posts_per_page' => 2,
        'post_type' => 'post',
        'paged' => $paged,
      );
      $posts = new WP_Query( $args );
  @endphp
    
  @if( $posts->have_posts())
  <section class="posts">
    <div class="container {{-- container-fluid-md-down --}}">
      <div class="row">
        <div class="col-lg-8 mx-lg-auto">
          <div class="row pb-5">
            @while($posts->have_posts()) @php $posts->the_post() @endphp
              <div class="col-md-6 pb-5">
                @include('partials.components.card')
              </div>
            @endwhile
          </div>
          @php wp_pagenavi( array( 'query' => $posts ) ); @endphp
        </div>
      </div>
    </div>
  </section>
  @endif

</section>