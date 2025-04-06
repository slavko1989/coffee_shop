<template>
    <div class="max-w-4xl p-6 mx-auto mt-10 bg-white rounded-lg shadow-md">
      <h2 class="mb-4 text-2xl font-semibold text-gray-800">Create New Product</h2>
      <form @submit.prevent="submitForm" method="POST" action="{{ route('create_product') }}">
        <!-- CSRF Token -->
        <input type="hidden" name="_token" :value="csrfToken">

        <div class="space-y-4">
          <!-- Product Name -->
          <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Product Name</label>
            <input
              v-model="newProduct.name"
              type="text"
              name="name"
              id="name"
              placeholder="Product Name"
              class="block w-full px-4 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
              required
            />
          </div>

          <!-- Category ID -->
          <div>
          <label for="category_id" class="block text-sm font-medium text-gray-700">Category</label>
          <select
            v-model="newProduct.category_id"
            name="category_id"
            id="category_id"
            class="block w-full px-4 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
            required
          >
            <option value="" disabled selected>Select a Category</option>
            <!-- Loop through categories and display them -->
            <option v-for="category in category" :key="category.id" :value="category.id">
              {{ category.name }}
            </option>
          </select>
        </div>


          <!-- Price -->
          <div>
            <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
            <input
              v-model="newProduct.price"
              type="number"
              name="price"
              id="price"
              placeholder="Price"
              class="block w-full px-4 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
              required
            />
          </div>

          <!-- Description -->
          <div>
            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
            <textarea
              v-model="newProduct.description"
              name="description"
              id="description"
              placeholder="Description"
              rows="4"
              class="block w-full px-4 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
              required
            ></textarea>
          </div>

          <!-- Cost Price -->
          <div>
            <label for="cost_price" class="block text-sm font-medium text-gray-700">Cost Price</label>
            <input
              v-model="newProduct.cost_price"
              type="number"
              name="cost_price"
              id="cost_price"
              placeholder="Cost Price"
              class="block w-full px-4 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
              required
            />
          </div>

          <!-- Submit Button -->
          <div>
            <button
              type="submit"
              class="w-full px-4 py-2 mt-4 font-semibold text-white bg-indigo-600 rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
            >
              Add Product
            </button>
          </div>
        </div>
      </form>
    </div>
  </template>

<script>
export default {
  props: ['category'], // Categories passed from Laravel Blade view
  data() {
    return {
      newProduct: {
        name: '',
        category_id: '',
        price: '',
        description: '',
        cost_price: '',

      },
      csrfToken: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
    };
  },
  methods: {
    async submitForm() {
      try {
        const response = await fetch("{{ route('create_product') }}", {
          method: "POST",
          headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': this.csrfToken
          },
          body: JSON.stringify(this.newProduct) // sending the form data
        });

        const data = await response.json();

        if (data.success) {
          // Handle successful submission
          alert('Product added successfully');
          this.newProduct = {}; // Clear the form
        } else {
          // Handle errors if any
          alert('Something went wrong, please try again');
        }
      } catch (error) {
        console.error('Error:', error);
        alert('There was an error while submitting the form');
      }
    }
  }
}
</script>
