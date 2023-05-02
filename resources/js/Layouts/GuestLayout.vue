<template>
  <main>
    <!-- navigation -->
    <section class="w-full border-b bg-white">
      <div
        class="max-w-7xl mx-auto flex justify-between items-center px-4 lg:px-0 py-5"
      >
        <!-- brand -->
        <div>
          <Link :href="route('site.index')"
            ><h3 class="font-black text-lg">Fight Aids Malawi</h3></Link
          >
        </div>

        <!-- nav items -->
        <ul class="lg:flex space-x-5 text-base hidden">
          <li v-for="(nav_item, index) in nav_items" :key="index">
            <Link
              :href="route(nav_item.route)"
              class="text-gray-500 hover:text-gray-800"
              :class="{
                'font-bold text-gray-900': route().current(nav_item.route),
              }"
              >{{ nav_item.name }}</Link
            >
          </li>
        </ul>

        <!-- Hamburger -->
        <div class="-mr-2 flex items-center sm:hidden">
          <button
            @click="showingNavigationDropdown = !showingNavigationDropdown"
            class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"
          >
            <svg
              class="h-6 w-6"
              stroke="currentColor"
              fill="none"
              viewBox="0 0 24 24"
            >
              <path
                :class="{
                  hidden: showingNavigationDropdown,
                  'inline-flex': !showingNavigationDropdown,
                }"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M4 6h16M4 12h16M4 18h16"
              />
              <path
                :class="{
                  hidden: !showingNavigationDropdown,
                  'inline-flex': showingNavigationDropdown,
                }"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M6 18L18 6M6 6l12 12"
              />
            </svg>
          </button>
        </div>
      </div>

      <!-- Responsive Navigation Menu -->
      <div
        :class="{
          block: showingNavigationDropdown,
          hidden: !showingNavigationDropdown,
        }"
        class="sm:hidden"
      >
        <div v-for="(nav_item, index) in nav_items" :key="index" class="px-4 py-2">
          <Link
            :href="route(nav_item.route)"
            class="text-gray-500 hover:text-gray-800"
            :class="{
              'font-bold text-gray-900': route().current(nav_item.route),
            }"
            >{{ nav_item.name }}</Link
          >
        </div>
      </div>
    </section>

    <!-- page content -->
    <slot></slot>

    <!-- footer -->
    <section></section>
  </main>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
import { ref } from "vue";

const nav_items = [
  {
    name: "Home",
    route: "site.index",
  },
  {
    name: "About",
    route: "site.about",
  },
  {
    name: "Programmes",
    route: "site.programmes",
  },
  {
    name: "GBV",
    route: "site.gbv",
  },
  {
    name: "Policies",
    route: "site.policies",
  },
  {
    name: "Contacts",
    route: "site.contacts",
  },
];

let showingNavigationDropdown = ref(false);
</script>
