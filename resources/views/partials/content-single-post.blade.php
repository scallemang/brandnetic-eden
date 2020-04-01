<article @php post_class() @endphp>
  @include('partials.components.post-hero')
  <header class="post-header">
    @include('partials.components.post-header')
  </header>
  <div class="container">
    <div class="row">
      <div class="col-xl-8 mx-xl-auto">
        <div class="entry-content">
          @php the_content() @endphp
          <button type="button" onclick="history.back();" class="btn btn-outline mt-4"> Back </button>
        </div>
      </div>
    </div>
  </div>

  {{-- <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer> --}}
</article>
