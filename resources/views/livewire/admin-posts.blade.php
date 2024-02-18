<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-800 leading-tight">
        {{ __('Admin Panel') }}
    </h2>
</x-slot>
@if(count($post) >= 0)
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-400 dark:text-gray-900">
            <tr>
                <th scope="col" class="px-6 py-3">
                    id
                </th>
                <th scope="col" class="px-6 py-3">
                    title
                </th>
                <th scope="col" class="px-6 py-3">
                    Created at
                </th>
              
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($post as $posts)
            <tr class="bg-white border-b dark:bg-gray-400 dark:border-gray-500">
                <th scope="row" class="px-6 py-4 font-mediumtext-gray-900 whitespace-nowrap dark:text-white">
                    {{$index}}
                </th>
                <td class="px-6 py-4">
                    <div class="max w-80 break-words dark:text-gray-900">

                    {{-- {{$posts->title}} --}}
                    <a href="/post/{{$posts->id}}" >{{$posts->title}} 
                </td>
                <td class="px-6 py-4">
                    <div class="max w-80 break-words dark:text-gray-900">

                    {{$posts->created_at}}
                </td>
               
                <td class="px-6 py-4 dark:text-gray-900">

                    <button  wire:click="deletePost({{$posts->id}})" wire:confirm="Are you sure you want to delete this post?" >
                    <div class="cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 013.878.512.75.75 0 11-.256 1.478l-.209-.035-1.005 13.07a3 3 0 01-2.991 2.77H8.084a3 3 0 01-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 01-.256-1.478A48.567 48.567 0 017.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 013.369 0c1.603.051 2.815 1.387 2.815 2.951zm-6.136-1.452a51.196 51.196 0 013.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 00-6 0v-.113c0-.794.609-1.428 1.364-1.452zm-.355 5.945a.75.75 0 10-1.5.058l.347 9a.75.75 0 101.499-.058l-.346-9zm5.48.058a.75.75 0 10-1.498-.058l-.347 9a.75.75 0 001.5.058l.345-9z" clip-rule="evenodd" />
                      </svg>
                    </div>
                    </button>
                </td>
            </tr>
            @php    
                $index++;
             @endphp   
           
         @endforeach
        </tbody>
    </table>
<div>
    @else
    <div class="px-1 py-0">
        <div class="max-w-7xl mx-auto sm:px-26 lg:px-0">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">      
                    No Posts To Display
                </div>
            </div>
        </div>
    </div>
@endif
