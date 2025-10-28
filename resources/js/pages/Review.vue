<script setup lang="ts">
import AppLayout from "@/layouts/AppLayout.vue";

// Define props to receive data from the controller
interface Props {
    review: {
        id: number;
        short_review: string;
        detail_review: string;
        review_meta: any;
        created_at: string;
        entity: {
            id: number;
            name: string;
            rating: number;
            image: string;
            category: {
                name: string;
            };
            tags: Array<{
                id: number;
                name: string;
            }>;
        };
        reviewer: {
            id: number;
            name: string;
        };
    };
}

const props = defineProps<Props>();

// Helper function to format date
const formatDate = (dateString: string) => {
    return new Date(dateString).toLocaleDateString('en-US', {
        year: 'numeric',
        month: 'long',
        day: 'numeric'
    });
};

// Helper function to get rating from review_meta or entity
const getRating = () => {
    if (props.review.review_meta?.rating) {
        return props.review.review_meta.rating;
    }
    return props.review.entity.rating || 0;
};

</script>

<template>
    <AppLayout>
        <div class="max-w-5xl mx-auto px-4 py-8">
  <!-- Product Info -->
  <div class="flex flex-col md:flex-row gap-8">
    <!-- Image -->
    <div class="w-full md:w-1/3">
      <img
        src="https://d2v5dzhdg4zhx3.cloudfront.net/web-assets/images/storypages/primary/ProductShowcasesampleimages/JPEG/Product+Showcase-1.jpg"
        alt="Product Image"
        class="rounded-xl shadow-md w-full"
      />
    </div>

    <!-- Details -->
    <div class="w-full md:w-2/3 space-y-4">
      <h1 class="text-3xl font-bold text-gray-800">{{ review.entity.name }}</h1>

      <div class="text-sm text-gray-500">Category: <span class="font-medium text-blue-600">{{ review.entity.category.name }}</span></div>
      <!-- Date of Review -->
      <div class="text-xs text-gray-400">Reviewed on: May 29, 2025</div>

      <!-- Tags -->
      <div class="flex flex-wrap gap-2">
        <span 
            v-for="tag in review.entity.tags" 
            :key="tag.id"
            class="bg-gray-100 text-sm text-gray-700 px-3 py-1 rounded-full"
        >
            {{ tag.name }}
        </span>
        <span class="bg-gray-100 text-sm text-gray-700 px-3 py-1 border-1 border-black rounded-full">Smartphone</span>
        <span class="bg-gray-100 text-sm text-gray-700 px-3 py-1 border-1 border-black rounded-full">Android</span>
        <span class="bg-gray-100 text-sm text-gray-700 px-3 py-1 border-1 border-black rounded-full">5G</span>
      </div>

      <!-- Rating -->
      <div class="flex items-center gap-1">
        <template v-for="i in 5" :key="i">
            <svg
                v-if="i <= getRating()"
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
        <span class="text-sm text-gray-600 ml-2">{{ getRating() }}</span>
      </div>

      <!-- Short Description -->
      <p class="text-gray-700">
        {{ review.short_review }}
      </p>


    </div>
  </div>

  <!-- Divider -->
  <div class="border-t my-8"></div>

  <!-- Detailed Description -->
  <div class="space-y-4">
    <h2 class="text-2xl font-semibold text-gray-800">Detailed Review</h2>
    <p class="text-gray-700">
      {{ review.detail_review }}
    </p>
  </div>

  <!-- Review Metadata -->
  <div v-if="review.review_meta && Object.keys(review.review_meta).length > 0" class="mt-8">
  <h2 class="text-xl font-semibold text-gray-800 mb-4">Detailed Ratings</h2>
  <div class="bg-gray-50 rounded-lg p-4">
    <div v-for="(value, key) in review.review_meta" :key="key" class="mb-4">
      <span class="font-medium text-gray-700">{{ key }}:</span>
      <div class="inline-flex items-center ml-2">
        <!-- Stars -->
        <svg
          v-for="n in 5"
          :key="n"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 24 24"
          fill="currentColor"
          class="w-5 h-5"
          :class="[
            n <= Number(value)
              ? Number(value) >= 4
                ? 'text-green-500'
                : Number(value) >= 3
                  ? 'text-yellow-500'
                  : 'text-red-500'
              : 'text-gray-300'
          ]"
        >
          <path
            d="M12 .587l3.668 7.568L24 9.75l-6 5.847 1.417 8.269L12 19.896l-7.417 3.97L6 15.597 0 9.75l8.332-1.595z"
          />
        </svg>
        <!-- Numeric rating (optional) -->
        <span class="ml-2 text-sm text-gray-600">({{ value }}/5)</span>
      </div>
    </div>
  </div>
</div>

</div>

    </AppLayout>
</template>
