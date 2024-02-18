<x-app-layout>
<div class="py-12">
    <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-400 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100 break-words">
              <b> <h1 class="dark:text-gray-900"> Title: </h1></b>
                {{$posts->title}}<br>
              <b> <h1 class="dark:text-gray-900"> Text: </h1></b>

                {{$posts->body}}
            
            </div>
        </div>
    </div>
</div>
</x-app-layout>
