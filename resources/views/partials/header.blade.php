<header class="banner">
  <!-- responsive hamburger navbar. -->
  <nav class="w-full flex flex-wrap items-center justify-between p-5 tracking-wider bg-black text-white fixed shadow-xl">      
    <!-- this site title without microphone logo is only visible on smaller devices -->
    <div class="font-extrabold text-xs md:hidden">{{ $siteName }}</div>
    <!-- this site title & microphone logo are visible after the medium breakpoint -->
    <div class="hidden md:flex">
      <svg class="w-4 fill-current text-red-500" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="microphone-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512" class="svg-inline--fa fa-microphone-alt fa-w-11 fa-3x"><path d="M336 192h-16c-8.84 0-16 7.16-16 16v48c0 74.8-64.49 134.82-140.79 127.38C96.71 376.89 48 317.11 48 250.3V208c0-8.84-7.16-16-16-16H16c-8.84 0-16 7.16-16 16v40.16c0 89.64 63.97 169.55 152 181.69V464H96c-8.84 0-16 7.16-16 16v16c0 8.84 7.16 16 16 16h160c8.84 0 16-7.16 16-16v-16c0-8.84-7.16-16-16-16h-56v-33.77C285.71 418.47 352 344.9 352 256v-48c0-8.84-7.16-16-16-16zM176 352c53.02 0 96-42.98 96-96h-85.33c-5.89 0-10.67-3.58-10.67-8v-16c0-4.42 4.78-8 10.67-8H272v-32h-85.33c-5.89 0-10.67-3.58-10.67-8v-16c0-4.42 4.78-8 10.67-8H272v-32h-85.33c-5.89 0-10.67-3.58-10.67-8v-16c0-4.42 4.78-8 10.67-8H272c0-53.02-42.98-96-96-96S80 42.98 80 96v160c0 53.02 42.98 96 96 96z" class=""></path></svg>
      <div class="font-extrabold md:pl-4">{{ $siteName }}</div>
    </div>

    <!-- hamburger -->
    <div class="flex md:hidden">
      <button id="hamburger" class="focus:outline-none">
        <svg class="toggle block w-4 fill-current text-red-500" aria-hidden="true" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" ><path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z" class=""></path></svg>
        <svg class="toggle hidden w-4 fill-current text-red-500" aria-hidden="true" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" ><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z" class=""></path></svg>
      </button>
    </div>
    
    <!-- actual WP menu -->
    <div class="toggle hidden md:flex w-full md:w-auto text-left uppercase mt-5 md:mt-0 border-t-2 border-white md:border-none"> 
      @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'mt-3 md:mt-0 flex flex-col md:flex-row justify-between', 'echo' => false, 'container' => false]) !!}
      @endif
    </div>
  </nav> 

  <!-- JS for toggling the dropdown menu on mobile -->
  <script>
    document.getElementById("hamburger").onclick = function toggleMenu() {
      const navToggle = document.getElementsByClassName("toggle");
      for (let i = 0; i < navToggle.length; i++) {
        navToggle.item(i).classList.toggle("hidden");
      }
    };
  </script>
</header>
