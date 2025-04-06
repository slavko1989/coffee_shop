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

            <div class="flex space-x-2">
            <button @click="deleteProduct(product.id)" class="px-4 py-2 font-bold text-white bg-red-500 rounded hover:bg-red-700">
              Delete
            </button>
            <button class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">
              Edit
            </button>
          </div>

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
  },
  methods: {
    async deleteProduct(productId) {
      try {
        // Send DELETE request to the Laravel backend
        const response = await fetch(`/products/${productId}`, {
          method: 'DELETE',
          headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
          }
        });

        // Check if the delete was successful
        if (response.ok) {
          // Remove the deleted product from the products array
          this.products = this.products.filter(product => product.id !== productId);
          alert('Product deleted successfully!');
        } else {
          alert('Failed to delete the product.');
        }
      } catch (error) {
        console.error('Error:', error);
        alert('There was an error while deleting the product.');
      }
    }
  }
};
</script>
