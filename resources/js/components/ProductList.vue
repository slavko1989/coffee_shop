<template>
    <div>
      
      <main class="flex-1 p-6">
        <!-- If products exist, render the grid -->
        <div v-if="products.length" class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
          <div class="flex flex-col items-center p-6 bg-white rounded-lg shadow-lg" v-for="product in products" :key="product.id">
            <!-- Product Name -->
            <p class="text-lg font-bold text-gray-800">{{ product.name }}</p>

            <!-- Product Description -->
            <p class="mt-2 text-sm text-gray-500">{{ product.description }}</p>

            <!-- Product Price -->
            <p class="mt-4 text-lg font-semibold text-green-600">{{ product.price }} €</p>
          </div>
        </div>

        <!-- If no products, display a message -->
        <div v-else class="text-center">No products available.</div>
      </main>
    </div>
  </template>

  <script>
  export default {
    props: {
      products: Array
    }
  };
  </script>
