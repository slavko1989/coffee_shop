<template>
    <div>

      <main class="flex-1 p-6">
        <!-- If products exist, render the grid -->
        <div v-if="categories.length" class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
          <div class="flex flex-col items-center p-6 bg-white rounded-lg shadow-lg" v-for="category in categories" :key="category.id">
            <!-- Product Name -->
            <p class="text-lg font-bold text-gray-800">{{ category.name }}</p>
        </div>

        </div>

        <!-- If no products, display a message -->
        <div v-else class="text-center">No categories are available.</div>
      </main>
    </div>
  </template>

  <script>
  export default {
    props: {
        categories: Array
    }
  };
  </script>
