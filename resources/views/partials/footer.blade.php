<footer class="content-info eden-copy-sm">
  <div class="container">
  	<div class="row">
  		<div class="col-md-11 offset-md-1 offset-lg-0 col-lg-8">
  			<h4>Another Fortune Marketing Project</h4>
        <p class="t-uppercase mb-0">EDEN Property Specialists</p>
  			<div class="row">
          <div class="col-eden col-eden-md-6 col-eden-lg-4">
            <p><a href="tel:250.317.7879">250-317-9947</a><br>
            <a href="mailto:eden@fortunemarketing.ca">eden@fortunemarketing.ca</a></p>
          </div>
          <div class="v-line"></div>
          <div class="col-eden col-eden-md-6 col-eden-lg-4">
            <p>Open M-F, 9-5<br>
            305 Lawrence Ave, Kelowna</p>
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
      <div class="col-md-11 offset-md-1 offset-lg-0 col-lg-4">
        <div class="partner-logos">
          <ul>
            <li><a href="https://fortunemarketing.ca" target="_blank"><img src="@asset('images/Asset_1eden_logo.png')" alt="Fortune Marketing logo"></a></li>
            <li><a href="https://ecora.ca/" target="_blank"><img src="@asset('images/Asset_2eden_logo.png')" alt="Ecora logo"></a></li>
            <li><a href="https://www.kcc.net/" target="_blank"><img src="@asset('images/Asset_3eden_logo.png')" alt="Kelowna Christian Centre logo"></a></li>
          </ul>
        </div>
        <p>© Fortune Marketing {{ get_the_date('Y') }}<br>
        All Rights Reserved</p>
      </div>
		</div>
	</div>
    {{-- @php dynamic_sidebar('sidebar-footer') @endphp --}}

</footer>
