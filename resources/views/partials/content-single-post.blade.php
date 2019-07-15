<article @php post_class() @endphp>
  @include('partials.components.post-hero')
  <header>
    @include('partials.components.post-header')
  </header>
  <div class="entry-content container">
    @php the_content() @endphp
  </div>
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
</article>
