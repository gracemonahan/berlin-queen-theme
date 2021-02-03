<footer class="content-info bg-green-100">
  <div class="container">
    @if (has_nav_menu('footer_navigation'))
    {!! wp_nav_menu(['theme_location' => 'footer-navigation', 'menu_class' => 'text-red-300', 'echo' => false]) !!}
    @endif
  </div>
</footer>
