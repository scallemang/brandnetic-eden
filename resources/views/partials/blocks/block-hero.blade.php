@if( get_sub_field( 'eden_block_image' ) )
  @php $image = get_sub_field( 'eden_block_image' ); @endphp
@endif
<section class="block-hero py-lg-5 pt-5" @if( $image ) style="background-image: url('{{ $image['url'] }}'); background-size: cover; background-position: center;" @endif> 
    <div class="container pb-lg-5 {{-- container-fluid-md-down --}}">
      <div class="row row-hero">
        <div class="col-sm-8 offset-sm-2 col-md-6 offset-md-3 offset-lg-0 col-lg-5 col-xl-4">
          @if( get_sub_field( 'eden_block_heading' ) || get_sub_field( 'eden_block_subheading' ) )<div class="container">@if( get_sub_field( 'eden_block_heading' ) )<h1 class="eden-display-1">{{ get_sub_field( 'eden_block_heading' ) }}</h1>@endif @if( get_sub_field( 'eden_block_subheading' ) )<h3 class="eden-display-3 mt-4">{{ get_sub_field( 'eden_block_subheading' ) }}</h3>@endif</div>@endif
        
          @if( get_sub_field( 'eden_block_has_button' ) )
            <div class="container my-4">
            @if( get_sub_field( 'eden_block_button_group' )[ 'eden_button_text' ] && get_sub_field( 'eden_block_button_group' )['eden_button_link'] )
              <a id="" class="btn btn-primary" href="{{ get_sub_field( 'eden_block_button_group' )['eden_button_link'] }}">{{ get_sub_field( 'eden_block_button_group' )['eden_button_text'] }}</a>
            @endif
            </div>
          @endif
        </div>
      </div>
    </div>
</section>