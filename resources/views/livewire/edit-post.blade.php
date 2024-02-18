
<div class="py-12">
    <div class="max-w-9xl mx-auto sm:px-6 lg:px-118">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                   
                    <form wire:submit="updatePost">
                      
                        <div class="mb-4">
                          <label for="title" class="block text-gray-700 font-bold mb-2" >Title:</label>
                          
                          <input type="text"  wire:model="title" class="w-full px-31 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500 text-black" placeholder="Enter title" required>
                          @error('title') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-4">
                          <label for="body" class="block text-gray-700 font-bold mb-2">Text:</label>
                          <textarea wire:model="body" rows="20" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500 text-black" placeholder="Enter Text" required></textarea>
                        </div>
                        <button type="submit" class="bg-indigo-500 text-white px-4 py-2 rounded-md hover:bg-indigo-600">Submit</button>
                      </form>
                      
            </div>
        </div>
    </div>
</div>