@php
$type = get_sub_field( 'eden_map_type' );
@endphp


<section class="block-map">
  @if( 'google' == $type )
    {!! get_sub_field('eden_google_map') !!}
  @endif
</section>