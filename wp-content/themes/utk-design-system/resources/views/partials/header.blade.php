@include('partials.campus')
<header class="banner">
  <div class="container">
    <div class="brand">
      <a class="logo" href="https://www.utk.edu">
        @include('partials.logo')
      </a>
      <a class="unit" href="{{ home_url('/') }}">
        {{ get_bloginfo('name', 'display') }}
      </a>
    </div>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div>
</header>
