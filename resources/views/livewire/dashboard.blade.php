  <div>
    @if(auth()->user())
  <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-800 leading-tight">
            {{ __('Latest Blog Posts') }}
        </h2>
    </x-slot>

@foreach($post as $posts)
    <div class=" py-3">
        <div class="max-w-5xl sm:px-40 lg:px-30 ">
            <div class="bg-white dark:bg-gray-400 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-900 flex justify-between items-start flex-col">
                    <a href="/post/{{$posts->id}}">{{$posts->title}}</a>
                    <div class="mt-4">
                        <span class="text-xs dark:text-gray-100">Published On {{$posts->created_at}}</span><br>
                        <span class="text-xs dark:text-gray-100">Published By {{$posts->user_name}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
@else
<div class="flex justify-center py-60 ">
    <B>BLOGSYNCC IS A PLATFORM WHERE YOU CAN CREATE YOUR OWN BLOG POSTS AND SHARE IT WITH OTHER USERS AND VIEW OTHER USERS BLOG POSTS.<br>
        <a class="dark:text-blue-800" href='/login' LOG IN>LOG IN </a> TO THE APPLICATION TO GET STARTED.</B>
</div>
@endif
</div>