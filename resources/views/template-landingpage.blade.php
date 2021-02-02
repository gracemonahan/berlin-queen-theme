{{--
  Template Name: Landing Page
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    <!-- jumbotron section with podcast title and cover image -->
    <div class="grid grid-cols-2 gap-6">
      <div class="border-8 border-black">
        <h1 class="p-8">A podcast by womxn,<br> for womxn.</h1>
        <h1 class="p-8">made in berlin.<br>about berlin.</h1>
      </div>
      <div class="border">
        <img src="@asset('images/simona-microphone.jpg')" alt="">
      </div>

    </div>
    <!-- listen section with links to spotify etc  -->
    <div class="border w-full grid grid-cols-3 gap-6 justify-around content-between">
      <!-- podcasts icon -->
      <div class="border justify-center flex-row flex">
        <a href="https://podcasts.apple.com/us/podcast/criminal/id809264944?mt=2" target="none">
          <span data-v-5dbac560="" class="w-10 h-10 flex inline-flex bg-black justify-center items-center">
            <svg class="w-6 h-6 fill-current text-white bg-black" width="27" height="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 146.97 161.62">
              <path fill="currentColor" d="M91,118.77c-.54,6.41-1.58,14.95-2.93,23.65a89.89,89.89,0,0,1-2.45,11.93c-1.16,3.88-5.46,7.27-12.2,7.27s-11-3.4-12.2-7.27a90.58,90.58,0,0,1-2.45-11.93c-1.35-8.71-2.39-17.25-2.93-23.65-.57-6.72-.87-10.93-.34-15.81a9.62,9.62,0,0,1,2.77-6c3.14-3.31,8.64-5.43,15.15-5.43s12,2.13,15.15,5.43a9.58,9.58,0,0,1,2.78,6C91.9,107.85,91.61,112.06,91,118.77ZM46.25,102.54a3,3,0,0,1,1,2.39,68.67,68.67,0,0,0,.08,8.4,1,1,0,0,1-1.5.86,49.23,49.23,0,1,1,55.41,0,1,1,0,0,1-1.51-.86,72.44,72.44,0,0,0,.08-8.39,3.07,3.07,0,0,1,1-2.39,39.83,39.83,0,1,0-54.49,0Zm44.34-35A17.11,17.11,0,1,1,73.48,50.38,17.1,17.1,0,0,1,90.59,67.49Zm7.22,75.33a1,1,0,0,1-1.31-1.07c.38-2.51.74-5,1.06-7.52a2.51,2.51,0,0,1,1.48-2,64.08,64.08,0,1,0-51.13,0,2.51,2.51,0,0,1,1.48,2c.33,2.49.68,5,1.06,7.53a1,1,0,0,1-1.31,1.07,73.5,73.5,0,1,1,48.65,0Z">
              </path>
            </svg>
          </span>
        </a>
      </div>
      
      <!-- shopify icon -->
      <div class="border justify-center flex-row flex">
        <a href="https://podcasts.apple.com/us/podcast/criminal/id809264944?mt=2" target="none">
          <span class="w-10 h-10 flex inline-flex bg-black justify-center items-center">
            <svg class="w-6 h-6 fill-current text-white bg-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
              <path fill="currentColor" d="M248 8C111.1 8 0 119.1 0 256s111.1 248 248 248 248-111.1 248-248S384.9 8 248 8zm100.7 364.9c-4.2 0-6.8-1.3-10.7-3.6-62.4-37.6-135-39.2-206.7-24.5-3.9 1-9 2.6-11.9 2.6-9.7 0-15.8-7.7-15.8-15.8 0-10.3 6.1-15.2 13.6-16.8 81.9-18.1 165.6-16.5 237 26.2 6.1 3.9 9.7 7.4 9.7 16.5s-7.1 15.4-15.2 15.4zm26.9-65.6c-5.2 0-8.7-2.3-12.3-4.2-62.5-37-155.7-51.9-238.6-29.4-4.8 1.3-7.4 2.6-11.9 2.6-10.7 0-19.4-8.7-19.4-19.4s5.2-17.8 15.5-20.7c27.8-7.8 56.2-13.6 97.8-13.6 64.9 0 127.6 16.1 177 45.5 8.1 4.8 11.3 11 11.3 19.7-.1 10.8-8.5 19.5-19.4 19.5zm31-76.2c-5.2 0-8.4-1.3-12.9-3.9-71.2-42.5-198.5-52.7-280.9-29.7-3.6 1-8.1 2.6-12.9 2.6-13.2 0-23.3-10.3-23.3-23.6 0-13.6 8.4-21.3 17.4-23.9 35.2-10.3 74.6-15.2 117.5-15.2 73 0 149.5 15.2 205.4 47.8 7.8 4.5 12.9 10.7 12.9 22.6 0 13.6-11 23.3-23.2 23.3z"></path>
            </svg>        
          </span>
        </a>
      </div>
      
      <!-- podcasts icon -->
      <div class="border justify-center flex-row flex">
        <a href="https://podcasts.apple.com/us/podcast/criminal/id809264944?mt=2" target="none">
          <span data-v-5dbac560="" class="w-10 h-10 flex inline-flex text-white bg-black justify-center items-center">        
            <svg class="w-9 h-9 fill-current text-white bg-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><g data-name="anchor fm media social"><path d="M14,15H10.72A2,2,0,0,0,9,14a2,2,0,0,0,0,4,2,2,0,0,0,1.72-1H14a1,1,0,0,0,0-2Z"/><path d="M16.5,20.33a5,5,0,0,0,0-8.66,1,1,0,0,0-1,1.73,3,3,0,0,1,0,5.2A1,1,0,0,0,15.14,20a1,1,0,0,0,.86.5A1,1,0,0,0,16.5,20.33Z"/><path d="M17.43,23.23a8,8,0,0,0,0-14.46,1,1,0,0,0-.86,1.81,6,6,0,0,1,0,10.84A1,1,0,0,0,17,23.33,1.08,1.08,0,0,0,17.43,23.23Z"/><path d="M18.4,5.92a1,1,0,1,0-.8,1.83,9,9,0,0,1,0,16.5,1,1,0,0,0-.52,1.32,1,1,0,0,0,.92.6,1,1,0,0,0,.4-.09,11,11,0,0,0,0-20.16Z"/></g>
            </svg>
          </span>
        </a>
      </div>
      <!-- end crid columns -->
    </div>
    @include('partials.content-page')
  @endwhile
@endsection
