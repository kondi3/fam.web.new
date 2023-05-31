<script>
import GuestLayout from '@/Layouts/GuestLayout.vue';

export default {
    layout: GuestLayout
}
</script>

<script setup>
import { defineProps } from 'vue';
import { filesize } from 'filesize'
import { Link } from '@inertiajs/vue3';

defineProps({documents: Object})
</script>

<template>
  <section class="w-full lg:min-h-screen flex flex-col justify-center items-center">
    <div class="max-w-7xl mx-auto text-center mt-36 lg:mt-0 px-5 lg:px-0">
        <p class="lg:w-1/2 mx-auto text-gray-500 tracking-wider">
            To better serve our purpose, we put in place policies that guides us to achieve
            our vision. In the table below you can access our policies.
        </p>

        <div class="mt-10 w-full border rounded-md px-4">
            <table class="w-full text-left">
                <thead>
                    <tr class="text-sm text-gray-500 tracking-wider">
                        <td class="py-4 w-1/2">Document Title</td>
                        <td class="py-4">Size</td>
                        <td class="py-4">Actions</td>
                    </tr>
                </thead>

                <tbody>
                    <tr v-for="(document, index) in documents.data" :key="index" class="text-sm text-gray-700 tracking-wide border-t">
                        <td class=" py-4">{{ document.title }}</td>
                        <td class=" py-4">{{ filesize(document.size) }}</td>
                        <td class=" py-4 flex justify-start space-x-10">
                            <a :href="route('documents.view', document)" target="__blank" class="text-gray-500 hover:text-gray-800 transition-colors">
                                <i class="fa-solid fa-eye"></i>
                                View in browser
                            </a>
                            <a :href="route('documents.download', document)" class="text-gray-500 hover:text-gray-800 transition-colors">
                                <i class="fa-solid fa-download"></i>
                                Download
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
  </section>
</template>

<style>

</style>