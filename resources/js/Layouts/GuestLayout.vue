<template>
  <main>
    <!-- navigation -->
    <section class="fixed top-0 left-0 z-50 w-full border-b bg-white">
      <div class="max-w-7xl mx-auto flex justify-between items-center px-4 lg:px-0 py-5">
        <!-- brand -->
        <div>
          <Link :href="route('site.index')">
          <h3 class="font-bold text-lg text-gray-800">Fight Aids Malawi</h3>
          </Link>
        </div>

        <!-- nav items -->
        <ul class="lg:flex space-x-5 text-base hidden">
          <li v-for="(nav_item, index) in nav_items" :key="index">
            <Link v-if="!nav_item.group" :href="route(nav_item.route)"
              class="text-gray-500 tracking-wider hover:text-gray-800" :class="{
                'font-medium text-gray-900': route().current(nav_item.route),
              }">{{ nav_item.name }}</Link>

            <Dropdown v-else>
              <template #trigger>
                <div class="text-gray-500 tracking-wider hover:text-gray-800 space-x-2 cursor-pointer" :class="{
                  'font-medium text-gray-900': route().current('site.programmes') || route().current('site.gbv') || route().current('site.hiv.programme'),
                }">
                  <span cl>{{ nav_item.name }}</span>
                  <i class="fa-solid fa-chevron-down text-xs"></i>
                </div>
              </template>

              <template #content>
                <div>
                  <DropdownLink v-for="(item, index) in nav_item.routes" :key="index" :href="route(item.route)">{{
                    item.name }}</DropdownLink>
                </div>
              </template>
            </Dropdown>
          </li>
        </ul>

        <!-- Hamburger -->
        <div class="-mr-2 flex items-center sm:hidden">
          <button @click="showingNavigationDropdown = !showingNavigationDropdown"
            class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
              <path :class="{
                hidden: showingNavigationDropdown,
                'inline-flex': !showingNavigationDropdown,
              }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
              <path :class="{
                hidden: !showingNavigationDropdown,
                'inline-flex': showingNavigationDropdown,
              }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>

      <!-- Responsive Navigation Menu -->
      <div :class="{
        block: showingNavigationDropdown,
        hidden: !showingNavigationDropdown,
      }" class="sm:hidden">
        <div v-for="(nav_item, index) in nav_items" :key="index" class="px-4 py-2">
          <Link v-if="!nav_item.group" :href="route(nav_item.route)" class="text-gray-500 hover:text-gray-800" :class="{
            'font-medium text-gray-900': route().current(nav_item.route),
          }">{{ nav_item.name }}</Link>

          <Dropdown v-else>
            <template #trigger>
              <div class="text-gray-500 tracking-wider hover:text-gray-800 space-x-2 cursor-pointer flex justify-between" :class="{
                'font-medium text-gray-900': route().current('site.programmes') || route().current('site.gbv') || route().current('site.hiv.programme'),
              }">
                <span cl>{{ nav_item.name }}</span>
                <i class="fa-solid fa-chevron-down text-xs"></i>
              </div>
            </template>

            <template #content>
              <div>
                <DropdownLink v-for="(item, index) in nav_item.routes" :key="index" :href="route(item.route)">{{
                  item.name }}</DropdownLink>
              </div>
            </template>
          </Dropdown>
        </div>
      </div>
    </section>

    <!-- page content -->
    <section class="w-full min-h-screen">
      <slot></slot>
    </section>

    <!-- footer -->
    <section class="w-full bg-gray-50">
      <div
        class="w-full lg:max-w-7xl mx-auto flex flex-col justify-center space-y-8 lg:space-y-0 lg:flex-row lg:justify-between items-center py-8 text-center lg:text-left tracking-wider">
        <div class="w-full lg:w-1/3">
          <h4 class="font-medium">Quick Links</h4>

          <br>
          <p class="text-sm text-gray-500 hover:text-gray-800 transition-colors">
            <Link href="/#">Back to top</Link>
          </p>
          <p class="text-sm text-gray-500 hover:text-gray-800 transition-colors mt-0.5">
            <Link :href="route('site.programmes')">Programmes</Link>
          </p>
          <p class="text-sm text-gray-500 hover:text-gray-800 transition-colors mt-0.5">
            <Link :href="route('site.gbv')">GBV</Link>
          </p>
        </div>

        <div class="w-full lg:w-1/3">
          <h4 class="font-medium">About Us</h4>

          <br>
          <p class="text-sm text-gray-500 hover:text-gray-800 transition-colors">
            <Link :href="route('site.about')">Organisation</Link>
          </p>
          <p class="text-sm text-gray-500 hover:text-gray-800 transition-colors mt-0.5">
            <Link :href="route('site.about')">Vision and Mission</Link>
          </p>
          <p class="text-sm text-gray-500 hover:text-gray-800 transition-colors mt-0.5">
            <Link :href="route('site.policies')">Policies</Link>
          </p>
        </div>

        <div class="w-full lg:w-1/3">
          <h4 class="font-medium">Contacts Us</h4>

          <br>
          <p class="text-sm text-gray-500 hover:text-gray-800 transition-colors">
            The Secretariat, Fight Aids Malawi
          </p>
          <p class="text-sm text-gray-500 hover:text-gray-800 transition-colors mt-0.5">
            Lilongwe 3, Malawi
          </p>
          <p class="text-sm text-gray-500 hover:text-gray-800 transition-colors mt-0.5">
            <a href="mailto:info@fammalawi.org">info@fammalawi.org</a>
          </p>
        </div>

        <div class="w-full lg:w-1/3">
          <br>
          <p class="text-sm mt-5 text-gray-500">Fight Aids Malawi &copy; {{ (new Date()).getFullYear() }}</p>
        </div>
      </div>
    </section>
  </main>
</template>

<script setup>
import Dropdown from "@/Components/Dropdown.vue";
import DropdownLink from "@/Components/DropdownLink.vue";
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
    group: true,
    routes: [
      {
        name: 'FAM Programmes',
        route: 'site.programmes'
      },
      {
        name: 'FAM VAWG Response',
        route: 'site.gbv'
      },
      {
        name: 'Paediatric HIV Progra...',
        route: 'site.hiv.programme'
      }
    ]
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
