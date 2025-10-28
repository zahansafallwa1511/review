<template>
    <footer class="bg-black text-[#1C1C1C] text-gray-200">
        <div class="max-w-7xl mx-auto px-4 py-12 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-10">
            <!-- Column 1 -->
            <div>
                <h3 class="text-2xl font-semibold mb-8">Company</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-blue-600 hover:underline text-sm transition">About Us</a></li>
                    <li><a href="#" class="hover:text-blue-600 hover:underline text-sm transition">Careers</a></li>
                    <li><a href="#" class="hover:text-blue-600 hover:underline text-sm transition">Press</a></li>
                </ul>
            </div>

            <!-- Column 2 -->
            <div>
                <h3 class="text-2xl font-semibold mb-8">Support</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-blue-600 hover:underline text-sm transition">Help Center</a></li>
                    <li><a href="#" class="hover:text-blue-600 hover:underline text-sm transition">Contact Us</a></li>
                    <li><a href="#" class="hover:text-blue-600 hover:underline text-sm transition">Report a Problem</a></li>
                </ul>
            </div>

            <!-- Column 3 -->
            <div>
                <h3 class="text-2xl font-semibold mb-8">Legal</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-blue-600 hover:underline text-sm transition">Privacy Policy</a></li>
                    <li><a href="#" class="hover:text-blue-600 hover:underline text-sm transition">Terms of Service</a></li>
                    <li><a href="#" class="hover:text-blue-600 hover:underline text-sm transition">Cookie Policy</a></li>
                </ul>
            </div>

            <div>
                <h3 class="text-2xl font-semibold mb-8">Disclaimer</h3>
                <p class="text-sm">If you think any review is biased please reach to us on +8801966217741</p>
            </div>
        </div>
        <hr>
        <div class="py-4 text-center text-sm text-gray-200">
            &copy; {{ new Date().getFullYear() }} ReviewPro. All rights reserved.
        </div>
    </footer>
</template>

<script>
export default {
    name: "Footer"
};
</script>

<style scoped>
/* Optional: Add smooth link underline effect */
a {
    text-underline-offset: 2px;
}
</style>
