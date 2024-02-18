
@if(count($post) > 0)
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-800 leading-tight">
        {{ __('My Posts') }}
    </h2>
</x-slot>
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
                <td class="px-6 py-4 dark:text-gray-900">
                    <div class="max w-80 break-words dark:text-gray-900">
                    {{-- {{$posts->title}} --}}
                    <a href="/post/{{$posts->id}}" >{{$posts->title}} 
                </td>
                <td class="px-6 py-4 dark:text-gray-900">
                    {{$posts->created_at}}
                </td>
               
                <td class="px-6 py-4 dark:text-gray-900">
                    {{-- <button onclick="Livewire.dispatch('openModal', { component: 'edit-post',  arguments: { post: {{ $posts->id }} }})"> --}}
                        <button wire:click="$dispatch('openModal', { component: 'edit-post', arguments: { post: '{{ $posts->id }}' }})">
                    <div  class="cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 24" fill="currentColor" class="w-6 h-6">
                        <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                        <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                      </svg>
                    </div>
                    </button>
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
    <div class="px-1 py-12">
        <div class="max-w-7xl mx-auto sm:px-26 lg:px-80">
            <div class="bg-white dark:bg-gray-400 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex p-6 text-gray-400 dark:text-gray-100 justify-center">      
                    No Posts To Display
                </div>
            </div>
        </div>
    </div>
@endif
