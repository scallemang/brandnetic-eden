<footer class="content-info eden-copy-sm">
  <div class="container-fluid">
		<div class="col-md-11 offset-md-1  offset-lg-0 col-lg-6 col-xl-5">
  			<h4>Another Fortune Marketing Project</h4>
        <p class="t-uppercase mb-0">EDEN Property Specialists</p>
  			<div class="row">
          <div class="col-eden col-eden-md-7 col-eden-lg-5">
            <p><a href="tel:250.317.7879">250-317-7879</a><br>
            <a href="mailto:edenkelowna@fortunemarketing.ca">edenkelowna@fortunemarketing.ca</a></p>
          </div>
          <div class="v-line"></div>
          <div class="col-eden col-eden-md-5 col-eden-lg-4">
            <p>970 Highway 33<br>Kelowna, BC</p>
          </div>
          <div class="col-sm-12">
            <div class="social-icons">
              <ul>
                @if( get_field( 'social__facebook', 'option' ) )<li><a href="{{ get_field( 'social__facebook', 'option' ) }}" target="_blank"><img src="@asset('images/Facebookeden_logo.png')" alt=" logo"></a></li>@endif
                @if( get_field( 'social__twitter', 'option' ) )<li><a href="{{ get_field( 'social__twitter', 'option' ) }}" target="_blank"><img src="@asset('images/Twittereden_logo.png')" alt=" logo"></a></li>@endif
                @if( get_field( 'social__instagram', 'option' ) )<li><a href="{{ get_field( 'social__instagram', 'option' ) }}" target="_blank"><img src="@asset('images/Instagrameden_logo.png')" alt=" logo"></a></li>@endif
              </ul>
            </div>
          </div>
    		</div>
      </div>
      <div class="col-md-11 offset-md-1 offset-lg-0 col-lg-4 col-xl-5">
        <div class="partner-logos">
          <ul>
            <li><a href="http://edenkelowna.com"><img src="@asset('images/Asset_7Eden.svg')" alt="Eden logo"></a></li>
            <li><a href="https://fortunemarketing.ca" target="_blank"><img src="@asset('images/Asset_8Eden.svg')" alt="Fortune Marketing logo"></a></li>
            <li><a href="https://ecora.ca/" target="_blank"><img src="@asset('images/Asset_9Eden.svg')" alt="Ecora logo"></a></li>
            <li><a href="https://www.kcc.net/" target="_blank"><img src="@asset('images/Asset_10Eden.svg')" alt="Kelowna Christian Centre logo"></a></li>
          </ul>
        </div>
        <p class="mb-5">© Fortune Marketing {{ get_the_date('Y') }}<br>
        All Rights Reserved</p>
        @if( get_field( 'site__fine_print', 'option' ) )<p class="fine-print t-condensed">{{ get_field( 'site__fine_print', 'option' ) }}</p>@endif
      </div>
		</div>
	</div>
    {{-- @php dynamic_sidebar('sidebar-footer') @endphp --}}

</footer>
