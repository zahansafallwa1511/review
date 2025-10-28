<script setup lang="ts">
    import Header from "@/components/Header.vue";
    import Footer from "@/components/Footer.vue";
</script>

<template>
    <Header />
    <div class="mx-auto bg-[#EFF3F6] pb-20">
        <slot />
    </div>
    <Footer />
</template>
