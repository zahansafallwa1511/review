<script setup lang="ts">
import AppLayout from "@/layouts/AppLayout.vue";
import { StarIcon, CalendarDaysIcon } from '@heroicons/vue/24/solid' // You must install @heroicons/vue


const featuredReviews = [
    {
        title: "Amazing Sci-fi Book",
        summary: "A futuristic world with stunning plot twists. A futuristic world with stunning plot twists",
        rating: 8,
        date: "2025-07-25",
    },
    {
        title: "Incredible Camera",
        summary: "Captures crystal clear images even in low light. A futuristic world with stunning plot twists",
        rating: 7,
        date: "2025-07-20",
    },
    {
        title: "Budget Headphones",
        summary: "Sound quality exceeds the price point. A futuristic world with stunning plot twists",
        rating: 6,
        date: "2025-07-26",
    },
    {
        title: "Thriller Novel",
        summary: "Edge-of-your-seat suspense from start to finish. A futuristic world with stunning plot twists",
        rating: 5,
        date: "2025-07-22",
    },
    {
        title: "Budget Headphones",
        summary: "Sound quality exceeds the price point. A futuristic world with stunning plot twists",
        rating: 4,
        date: "2025-07-26",
    },
    {
        title: "Thriller Novel",
        summary: "Edge-of-your-seat suspense from start to finish. A futuristic world with stunning plot twists",
        rating: 2,
        date: "2025-07-22",
    },
];

import { computed } from 'vue';

const testimonials = [
    {
        name: 'Zahan Safallwa',
        title: 'Software Developer',
        quote: 'Amazing experience with this tool. It made our',
        avatar: 'https://i.pravatar.cc/100?img=2',
    },
    {
        name: 'Jane Doe',
        title: 'Product Designer',
        quote: 'It’s intuitive, elegant, and very well thought out.',
        avatar: 'https://i.pravatar.cc/100?img=2',
    },
    {
        name: 'John Smith',
        title: 'Startup Founder',
        quote: 'One of the best design decisions we’ve made!',
        avatar: 'https://i.pravatar.cc/100?img=3',
    },
    {
        name: 'Emily Davis',
        title: 'UX Lead',
        quote: 'The attention to detail and UX is just top-notch.',
        avatar: 'https://i.pravatar.cc/100?img=4',
    },
    {
        name: 'Carlos Hernández',
        title: 'DevOps Engineer',
        quote: 'Highly recommend this to any tech team!',
        avatar: 'https://i.pravatar.cc/100?img=5',
    },
    {
        name: 'Zahan Safallwa',
        title: 'Software Developer',
        quote: 'Amazing experience with this tool. It made our',
        avatar: 'https://i.pravatar.cc/100?img=2',
    },
    {
        name: 'Jane Doe',
        title: 'Product Designer',
        quote: 'It’s intuitive, elegant, and very well thought out.',
        avatar: 'https://i.pravatar.cc/100?img=2',
    },
    {
        name: 'John Smith',
        title: 'Startup Founder',
        quote: 'One of the best design decisions we’ve made!',
        avatar: 'https://i.pravatar.cc/100?img=3',
    }
];
</script>

<template>
    <AppLayout>
        <div class="space-y-12 px-4 py-8 max-w-7xl mx-auto">

            <section
                class="w-full h-100 bg-cover bg-center shadow-xl rounded-2xl"
                style="background-image: url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1470&q=80');"
                aria-label="Banner Image"
            >
            </section>

            <section>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
                    <div class="flex items-center p-4 bg-white rounded-lg">
                        <div class="w-12 h-12 bg-blue-200 rounded flex items-center justify-center text-white text-xl">
                            <!-- Icon -->
                            📘
                        </div>
                        <div class="ml-4">
                            <h4 class="text-sm font-semibold text-gray-800">Books</h4>
                            <p class="text-xs text-gray-500">Read and learn</p>
                        </div>
                    </div>

                    <div class="flex items-center p-4 bg-white rounded-lg">
                        <div class="w-12 h-12 bg-red-200 rounded flex items-center justify-center text-white text-xl">
                            🎬
                        </div>
                        <div class="ml-4">
                            <h4 class="text-sm font-semibold text-gray-800">Movies</h4>
                            <p class="text-xs text-gray-500">Watch latest releases</p>
                        </div>
                    </div>

                    <div class="flex items-center p-4 bg-white rounded-lg">
                        <div class="w-12 h-12 bg-green-200 rounded flex items-center justify-center text-white text-xl">
                            💻
                        </div>
                        <div class="ml-4">
                            <h4 class="text-sm font-semibold text-gray-800">Tech</h4>
                            <p class="text-xs text-gray-500">Innovations & gadgets</p>
                        </div>
                    </div>

                    <div class="flex items-center p-4 bg-white rounded-lg">
                        <div class="w-12 h-12 bg-yellow-200 rounded flex items-center justify-center text-white text-xl">
                            ✈️
                        </div>
                        <div class="ml-4">
                            <h4 class="text-sm font-semibold text-gray-800">Travel</h4>
                            <p class="text-xs text-gray-500">Explore the world</p>
                        </div>
                    </div>
                </div>

            </section>

            <!-- Featured Reviews -->
            <section>
                <h2 class="text-2xl font-bold mb-6 text-[#1C1C1C]">Featured Reviews</h2>
                <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 md:grid-cols-3">

                    
                    <div
                        v-for="(review, index) in featuredReviews"
                        :key="'featured-' + index"
                        class="p-5 bg-white rounded-xl shadow-xl hover:shadow-xl transition"
                    >

                        <p class="text-xs text-gray-400 pt-1"> 📅 {{ review.date }}</p>
                        <a :href="'review/1'"><h3 class="text-lg font-semibold text-[#1C1C1C]">{{ review.title }}</h3></a>
                        <p class="text-sm text-[#1C1C1C] pt-2 mt-1 mb-2">{{ review.summary }}</p>

                        <div class="flex items-center gap-1 mb-1 pt-3">
                            <svg
                                v-for="n in 5"
                                :key="n"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor"
                                viewBox="0 0 24 24"
                                class="w-5 h-5"
                                :class="[
                                    n <= review.rating
                                    ? review.rating >= 4
                                        ? 'text-green-500'
                                        : review.rating >= 3
                                        ? 'text-yellow-500'
                                        : 'text-red-500'
                                    : 'text-gray-300'
                                ]"
                            >
                                <path d="M12 .587l3.668 7.568L24 9.75l-6 5.847 1.417 8.269L12 19.896l-7.417 3.97L6 15.597 0 9.75l8.332-1.595z"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Feedbacks -->
            <section>
                <section>
                    <h2 class="text-2xl font-bold mb-6 text-[#1C1C1C]">Feedbacks</h2>
                    <div class="max-w mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                        <div
                            v-for="(testimonial, index) in testimonials"
                            :key="index"
                            class="bg-white rounded-2xl p-6 flex flex-col items-center text-center"
                        >
                            <img
                                :src="testimonial.avatar"
                                class="w-20 h-20 rounded-full border-2 border-blue-200 shadow mb-4"
                                alt="avatar"
                            />
                            <p class="text-gray-700 italic mb-2">“{{ testimonial.quote }}”</p>
                            <h4 class="font-semibold text-gray-900">{{ testimonial.name }}</h4>
                            <span class="text-sm text-gray-500">{{ testimonial.title }}</span>
                        </div>
                    </div>
                </section>

            </section>

        </div>
    </AppLayout>
</template>

<style scoped>
.scrollbar-hide::-webkit-scrollbar {
    display: none;
}
.scrollbar-hide {
    -ms-overflow-style: none;
    scrollbar-width: none;
}
</style>
