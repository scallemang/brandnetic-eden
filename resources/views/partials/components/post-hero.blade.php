@if( get_the_post_thumbnail_url( get_the_ID(), 'full' ) )
  @php $image = get_the_post_thumbnail_url( get_the_ID(), 'full' ); @endphp
@endif
<section class="post-hero" @if( $image ) style="background-image: url('{{ $image }}'); background-size: cover; background-position: center; height: 66vh; min-height: 100px; max-height: 400px;" @endif> 

</section>