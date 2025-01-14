<main class="flex-1 p-6">
    <!-- Product Grid -->
    <div class="grid grid-cols-4 gap-6">
    @foreach($products as $p)
      <div class="p-4 text-center bg-white rounded shadow">
        <p class="font-bold">{{ $p->name }}</p>
        <p class="text-sm text-gray-500">{{ $p->price }}$</p>
        <p class="text-sm text-gray-500">{{ $p->description }}</p>
      </div>
    @endforeach
    </div>



    <!-- Pagination -->
    <div class="flex items-center justify-center mt-8 space-x-2">
      <button class="px-4 py-2 text-black bg-gray-300 rounded hover:bg-gray-400">Previous</button>
      <button class="px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-600">1</button>
      <button class="px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-600">2</button>
      <button class="px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-600">3</button>
      <button class="px-4 py-2 text-black bg-gray-300 rounded hover:bg-gray-400">Next</button>
    </div>
  </main>
