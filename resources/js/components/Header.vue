<template>
    <header class="bg-white shadow-xl px-4 py-3 flex items-center justify-between">
        <!-- Left: Logo and Search -->
        <div class="flex items-center space-x-4 flex-1">
            <!-- Logo -->
            <img src="/logo.svg" alt="Logo" class="h-8 w-auto" />

            <!-- Search Bar -->
            <div class="relative w-full max-w-sm">
                <input
                    v-model="searchQuery"
                    type="text"
                    placeholder="Search..."
                    class="w-full rounded-full py-2 pl-4 pr-12 text-sm bg-[#EFF3F6] placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500"
                />
            </div>
        </div>

        <!-- Right: Icons -->
        <div class="flex items-center space-x-4 text-[#1C1C1C]">
            <BellIcon class="h-6 w-6" />
            <UserIcon class="h-6 w-6" />
            <Cog6ToothIcon class="h-6 w-6" />
        </div>
    </header>
</template>

<script setup>
import { ref } from 'vue'

const searchQuery = ref('')

import { MagnifyingGlassIcon, BellIcon, UserIcon, Cog6ToothIcon } from '@heroicons/vue/24/outline';
</script>
