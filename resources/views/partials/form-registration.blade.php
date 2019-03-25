{{-- <article @php post_class() @endphp>
  <header>
    <h2 class="entry-title"><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h2>
    @include('partials/entry-meta')
  </header>
  <div class="entry-summary">
    @php the_excerpt() @endphp
  </div>
</article>
 --}}
<script>
var register = function(jQuery) {
  jQuery.ajax({
    type: "POST",
    url: 'partials/lasso/signup.php',
    data: {
      firstName: document.getElementById('first_name').value,
      lastName: document.getElementById('last_name').value,
      email: document.getElementById('email').value,
      phone: document.getElementById('phone').value,
      //address: document.getElementById('address').value,
      city: document.getElementById('city').value,
      //province: document.getElementById('province').value,
      //postal: document.getElementById('postal').value,
      //country: document.getElementById('country').value
    },
    success: function(arguments){
      console.log(arguments);
    }
  });
};
</script>
<div class="registration bg-floral">
  <div class="container container-fluid-md-down bg-white">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-10 offset-md-1 px-2 py-5">
          <div class="row">
            <div class="col-md-8 col-lg-12">
              @if( get_field( 'registration__form_header' ) )<h2 class="eden-display-1 pb-4">{{ get_field( 'registration__form_header' ) }}</h2>@endif
              <p class="color-primary"><strong>Fields Required*</strong></p>
            </div>
          </div>
          @if( get_field( 'registration__cf7_shortcode') )@php print do_shortcode( get_field( 'registration__cf7_shortcode' ) ); @endphp@endif
        </div>
      </div>
    </div>
  </div>
</div>