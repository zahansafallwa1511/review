<script setup lang="ts">
import AppLayout from "@/layouts/AppLayout.vue";
</script>

<template>
    <AppLayout>
        <div class="max-w-5xl mx-auto px-4 py-8">
  <!-- Product Info -->
  <div class="flex flex-col md:flex-row gap-8">
    <!-- Image -->
    <div class="w-full md:w-1/3">
      <img
        src="https://via.placeholder.com/400x400"
        alt="Product Image"
        class="rounded-xl shadow-md w-full"
      />
    </div>

    <!-- Details -->
    <div class="w-full md:w-2/3 space-y-4">
      <h1 class="text-3xl font-bold text-gray-800">Product Title Here</h1>

      <div class="text-sm text-gray-500">Category: <span class="font-medium text-blue-600">Electronics</span></div>

      <!-- Tags -->
      <div class="flex flex-wrap gap-2">
        <span class="bg-gray-100 text-sm text-gray-700 px-3 py-1 rounded-full">Smartphone</span>
        <span class="bg-gray-100 text-sm text-gray-700 px-3 py-1 rounded-full">Android</span>
        <span class="bg-gray-100 text-sm text-gray-700 px-3 py-1 rounded-full">5G</span>
      </div>

      <!-- Rating -->
      <div class="flex items-center gap-1">
        <template v-for="i in 5" :key="i">
          <svg
            v-if="i <= 4"
            class="w-5 h-5 text-yellow-400"
            fill="currentColor"
            viewBox="0 0 20 20"
          >
            <path
              d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.285 3.94h4.144c.969 0 1.371 1.24.588 1.81l-3.356 2.44 1.285 3.94c.3.921-.755 1.688-1.538 1.118l-3.356-2.44-3.356 2.44c-.783.57-1.838-.197-1.538-1.118l1.285-3.94-3.356-2.44c-.783-.57-.38-1.81.588-1.81h4.144l1.285-3.94z"
            />
          </svg>
          <svg
            v-else
            class="w-5 h-5 text-gray-300"
            fill="currentColor"
            viewBox="0 0 20 20"
          >
            <path
              d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.285 3.94h4.144c.969 0 1.371 1.24.588 1.81l-3.356 2.44 1.285 3.94c.3.921-.755 1.688-1.538 1.118l-3.356-2.44-3.356 2.44c-.783.57-1.838-.197-1.538-1.118l1.285-3.94-3.356-2.44c-.783-.57-.38-1.81.588-1.81h4.144l1.285-3.94z"
            />
          </svg>
        </template>
        <span class="text-sm text-gray-600 ml-2">(4.0/5)</span>
      </div>

      <!-- Short Description -->
      <p class="text-gray-700">
        This is a short description of the product. It highlights the most important features in a concise way.
      </p>

      <!-- Date of Review -->
      <div class="text-xs text-gray-400">Reviewed on: May 29, 2025</div>
    </div>
  </div>

  <!-- Divider -->
  <div class="border-t my-8"></div>

  <!-- Detailed Description -->
  <div class="space-y-4">
    <h2 class="text-2xl font-semibold text-gray-800">Detailed Review</h2>
    <p class="text-gray-700">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque euismod, nisi eu consectetur consectetur, nisl nisl aliquet nisl, euismod aliquam nisl nunc eu nisl.
    </p>
    <p class="text-gray-700">
      Sed euismod, nunc sit amet aliquet congue, nunc nisl aliquam nisl, euismod aliquam nunc nunc eu nunc. Curabitur nec nisl nec nunc aliquam aliquam.
    </p>
  </div>

  <!-- Related Products -->
  <div class="mt-12">
    <h2 class="text-xl font-semibold text-gray-800 mb-4">Related Products</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
      <div class="border rounded-lg p-4 shadow-sm hover:shadow-md transition">
        <img src="https://via.placeholder.com/300x200" alt="Related 1" class="rounded mb-2" />
        <h3 class="text-lg font-semibold text-gray-700">Related Product 1</h3>
        <p class="text-sm text-gray-500">Category: Accessories</p>
      </div>
      <div class="border rounded-lg p-4 shadow-sm hover:shadow-md transition">
        <img src="https://via.placeholder.com/300x200" alt="Related 2" class="rounded mb-2" />
        <h3 class="text-lg font-semibold text-gray-700">Related Product 2</h3>
        <p class="text-sm text-gray-500">Category: Gadgets</p>
      </div>
      <div class="border rounded-lg p-4 shadow-sm hover:shadow-md transition">
        <img src="https://via.placeholder.com/300x200" alt="Related 3" class="rounded mb-2" />
        <h3 class="text-lg font-semibold text-gray-700">Related Product 3</h3>
        <p class="text-sm text-gray-500">Category: Devices</p>
      </div>
    </div>
  </div>
</div>

    </AppLayout>
</template>
