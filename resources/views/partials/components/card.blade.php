@php
  $title = $title ? $title : get_the_title();
  $cardContent = $cardContent ? $cardContent : get_the_excerpt();
@endphp

<div class="card">
  <p><strong>{{ get_the_date( 'F, j Y' ) }}</strong></p>
  @php
    $image = get_the_post_thumbnail_url( get_the_ID(), 'card_image' );
  @endphp
  @if( $image )
    <img src="{{ $image }}" class="img-fluid mb-4">
  @endif
	<h1 class="card__title">{{ $title }}</h1>
	<div class="mb-5">{{ $cardContent }}</div>
  <div class="mt-auto">
    <a id="" class="btn btn-outline" href="{{ get_the_permalink() }}">Keep Reading</a>
  </div>
</div>