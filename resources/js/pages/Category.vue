<template>
    <AppLayout>
    <div class="max-w-4xl mx-auto py-10 px-4 space-y-8">

        <!-- Category Title -->
        <h1 class="text-3xl font-bold text-gray-800">{{ category.name }} Reviews</h1>

        <!-- Review List -->
        <div class="space-y-4">
            <div
                v-for="review in reviews.data"
                :key="review.id"
                class="p-5 bg-white border rounded-lg shadow hover:shadow-md transition"
            >
                <h2 class="text-xl font-semibold">{{ review.short_review }}</h2>
                <p class="text-gray-600 text-sm mb-2">{{ review.summary }}</p>
                <div class="text-yellow-500 flex gap-1">
                    <span v-for="n in review.rating" :key="n">★</span>
                </div>
                <p class="text-xs text-gray-400 mt-1">Reviewed on {{ formatDate(review.created_at) }}</p>
            </div>
        </div>

        <!-- Pagination -->
        <div class="flex justify-center items-center gap-4 mt-6">
            <button
                :disabled="!reviews.prev_page_url"
                @click="goTo(reviews.prev_page_url)"
                class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300 disabled:opacity-50"
            >
                Previous
            </button>

            <button
                :disabled="!reviews.next_page_url"
                @click="goTo(reviews.next_page_url)"
                class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300 disabled:opacity-50"
            >
                Next
            </button>
        </div>

    </div>
    </AppLayout>
</template>

<script setup>
import { router } from '@inertiajs/vue3'
import AppLayout from "@/layouts/AppLayout.vue";

const props = defineProps({
    category: Object,
    reviews: Object
})

function goTo(url) {
    router.visit(url, {
        preserveScroll: true,
        preserveState: true,
    });
}

function formatDate(dateStr) {
    return new Date(dateStr).toLocaleDateString("en-US", {
        year: "numeric",
        month: "short",
        day: "numeric",
    });
}
</script>

<style scoped>
</style>
