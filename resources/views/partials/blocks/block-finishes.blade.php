@php
  $background = get_sub_field( 'eden_background_picker' );
  // $padding = get_sub_field( 'eden_padding_picker' );

  $title = get_sub_field( 'eden_block_title' );
  $finishes = get_sub_field( 'eden_finishes_repeater' );
@endphp

<section class="block-finishes bg-{{ $background }} py-5 text-{{ $alignment }}@if($paddingExtra) padding-{{ $padding }}-extra @endif">
  <div class="container clearfix container-fluid-md-down">
    <div class="row">
      <div class="col-sm-12">
        <div class="container">
          <div class="eden-copy-sm">
            @if( $title )
              <h3 class="text-center">{{ $title }}</h3>
              <div class="hr-sm"></div>
            @endif

            @if( $finishes )
              @php $finishesModals = array(); @endphp
              <div class="row">
                @foreach( $finishes as $finish )
                  @php
                    $image = $finish['eden_finishes_image'];
                    $heading = $finish['eden_finishes_heading'];
                    $description = $finish['eden_finishes_description'];
                    $hasButton = $finish['eden_finishes_has_button'];
                  @endphp
                  <div class="col-md-6">
                    @if( $image )<img src="{{ $image[ 'sizes' ][ 'portrait_large' ] }}">@endif
                    @if( $heading )<h4 class="pt-4">{{ $heading }}</h4>@endif
                    @if( $description )<p>{{ $description }}</p>@endif

                    @if( $image )
                      
                      @php
                        $uniqueId = $finish['eden_finishes_unique_id'];
                        $imageUrl = $image[ 'url' ];
                        $finishesModals[] = array( 
                          'type' => 'image',
                          'id'  => $uniqueId,
                          'url' => $imageUrl,
                        );
                      @endphp
                      
                      <div class="my-4">
                       @php $buttonText = $finish[ 'eden_finishes_button_text' ]; @endphp
                        <a id="" data-toggle="modal" data-target="#modal-{{ $uniqueId }}" class="btn btn-outline" href="#">{{ $buttonText }}</a>
                      </div>
                    @endif
                  </div>
                @endforeach
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

@if( !empty( $finishesModals ) )
  @foreach( $finishesModals as $modal )

     <div class="modal fade modal-{{ $modal['type'] }}" id="modal-{{ $modal['id'] }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">Close</button>
          <div class="modal-body">
            


            <div class="reveal-overlay" style="display: block;">
              <div class="reveal" id="floorplan-modal" data-reveal="88ckrs-reveal" role="dialog" aria-hidden="false" data-yeti-box="floorplan-modal" data-resize="floorplan-modal" tabindex="-1" style="display: block; top: 51px;" data-events="resize">
                  <div class="embed-responsive">
                    <a href="{{ $modal['url'] }}" target="_blank"><img src="{{ $modal['url'] }}" class="img-fluid" style="width: 100%" ></a>
                  </div>
                  
           
            </div></div>

          </div>

        </div>
      </div>
    </div>


  @endforeach
@endif