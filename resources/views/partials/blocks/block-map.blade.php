@php
$type = get_sub_field( 'eden_map_type' );
$sectionId = get_sub_field( 'eden_section_id' );
@endphp


<section @if($sectionId)id="{{ $sectionId }}"@endif class="block-map">
  @if( 'google' == $type )
    {!! get_sub_field('eden_google_map') !!}
  @endif
</section>