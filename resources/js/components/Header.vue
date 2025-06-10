<script setup lang="ts"></script>

<template>
    <header class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">

                <!-- Left: Logo & Menu -->
                <div class="flex items-center space-x-6">
                    <a href="#" class="text-xl font-bold text-gray-800">MyBrand</a>
                    <nav class="hidden md:flex space-x-4 text-gray-600 font-medium">
                        <a href="#" class="hover:text-gray-900">Home</a>
                        <a href="#" class="hover:text-gray-900">About</a>
                        <a href="#" class="hover:text-gray-900">Services</a>
                        <a href="#" class="hover:text-gray-900">Contact</a>
                    </nav>
                </div>

                <!-- Center: Search Bar -->
                <div class="flex-1 mx-6 hidden md:flex">
                    <input type="text" placeholder="Search..."
                        class="w-full px-4 py-2 border rounded-full border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                </div>

                <!-- Right: Button -->
                <div class="flex items-center space-x-4">
                    <button class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-full transition">
                        Sign In
                    </button>
                </div>

            </div>
        </div>
    </header>

</template>
