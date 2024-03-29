<script>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import { Link } from "@inertiajs/vue3";

export default {
  layout: GuestLayout,
  components: { Link },
};
</script>

<script setup>
const indicators = [
  {
    name: "Volunteers",
    value: 200,
  },
  {
    name: "communities",
    value: 150,
  },
  {
    name: "Beneficiaries",
    value: 8_000,
  },
];
</script>

<template>
  <section class="w-full h-screen flex flex-col justify-between">
    <!-- hero section -->
    <div class="flex-1 flex flex-col lg:flex-row justify-center lg:justify-between items-center">
      <div class="w-full lg:w-1/2 px-5 lg:pl-80 lg:pr-24 text-center lg:text-left">
        <h2 class="font-semibold text-4xl lg:text-5xl text-gray-800">
          A Healthy And Developed Malawi
        </h2>
        <p class="mt-5 text-gray-600 text-base lg:text-lg">
          Where Sexual And Gender-Based Violence Against Women And Girls Is
          Eradicated And Where HIV Transmission Is Wiped Out.
        </p>

        <div class="mt-12">
          <Link :href="route('site.programmes')"
            class="bg-sky-500 hover:bg-sky-600 transition-colors text-sm block lg:inline px-5 py-4 text-white tracking-wider rounded-sm shadow-sm">
          Check Out Our Work
          <i class="fa-solid fa-arrow-right text-xs ml-2"></i>
          </Link>
        </div>
      </div>

      <div class="w-full lg:w-1/2 order-first lg:order-2 mb-5 lg:mb-0">
        <img src="@/assets/images/d33579d2-a7e5-4683-97d5-d15c57011731.png" alt="" />
      </div>
    </div>

    <!-- loyalty -->
    <div class="max-w-7xl mx-auto flex justify-between items-center"></div>
  </section>

  <!-- loyalty -->
  <section class="w-full bg-gray-100">
    <div
      class="w-full lg:max-w-7xl mx-auto px-4 lg:px-0 py-8 flex flex-col space-y-5 lg:flex-row justify-center lg:justify-between items-center">
      <div class="w-full lg:w-1/4">
        <p class="text-2xl font-light text-gray-600 text-center lg:text-left">
          Saving Lives & Building Families Since 2009
        </p>
      </div>

      <div
        class="w-full px-5 lg:px-0 lg:w-1/2 flex flex-col space-y-6 lg:space-y-0 lg:flex-row justify-center lg:justify-between items-center">
        <div class="w-full lg:w-auto text-center bg-gray-200 p-7 rounded" v-for="(indicator, i) in indicators" :key="i">
          <h3 class="font-bold text-2xl text-sky-700">
            {{ indicator.value }}+
          </h3>
          <p class="text-sm text-gray-500 tracking-wider uppercase mt-1">
            {{ indicator.name }}
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- about introduction -->
  <section class="w-full">
    <div class="max-w-7xl mx-auto py-48">
      <div class="flex justify-start items-center space-x-4 px-5 lg:px-0">
        <div class="w-10 h-1.5 bg-orange-500"></div>
        <h4 class="font-bold text-2xl text-gray-700 capitalize">Who are we?</h4>
      </div>

      <div class="flex flex-col lg:flex-row justify-center lg:justify-between px-5 lg:px-0 items-center mt-12">
        <div class="flex-1 lg:pr-8 text-center lg:text-left">
          <p>
            <b>Fight AIDS Malawi (FAM)</b> is a national based community-based organization founded in 2009. <b>FAM’s</b> mandate is to
            expand access to HIV prevention and treatment services for women, children and girls.
          </p>

          <p class="mt-5">
            <b>Fight AIDS Malawi</b> envisions a society where women, children and girls access timely and quality HIV
            and SRHR information, services and resources.
          </p>

          <div class="mt-8">
            <Link :href="route('site.about')"
              class="text-sky-500 hover:text-sky-600 tracking-wider transition-colors text-sm uppercase">Know More About
            Us
            <i class="fa-solid fa-arrow-right text-xs ml-2"></i></Link>
          </div>
        </div>

        <div class="flex-1 order-first lg:order-2 mb-8">
          <img src="@/assets/images/f7fe9b71-8e62-421c-a593-c501467f674d.png" alt="" />
        </div>
      </div>
    </div>
  </section>

  <!-- parallax -->
  <section class="parallax">
    <div class="w-full h-full bg-black bg-opacity-60 backdrop-blur text-white flex items-center">
      <div class="max-w-7xl mx-auto text-center px-4 lg:px-0 py-10">
        <hp class="text-2xl lg:text-4xl font-light">
          See How We Are Contributing In The Fight Against
        </hp>

        <h3 class="mt-2 text-3xl lg:text-4xl">Gender Based Violence</h3>

        <div class="mt-5">
          <Link :href="route('site.gbv')"
            class="text-gray-200 text-sm hover:text-white transition-colors tracking-widest">Read How We Address VAWG
          <i class="fa-solid fa-arrow-right text-xs ml-2"></i></Link>
        </div>
      </div>
    </div>
  </section>

  <!-- programmes introduction -->
  <section class="w-full">
    <div class="max-w-7xl mx-auto py-48">
      <div class="flex justify-start items-center space-x-4 px-5 lg:px-0">
        <div class="w-10 h-1.5 bg-orange-500"></div>
        <h4 class="font-bold text-2xl text-gray-700 capitalize">What do we do?</h4>
      </div>
      <div class="flex flex-col lg:flex-row justify-center lg:justify-between px-5 lg:px-0 items-center mt-12">
        <div class="flex-1 mb-8">
          <img src="@/assets/images/SAM_0835.jpg" alt="" />
        </div>

        <div class="flex-1 lg:pl-8 text-left">
          <p>
            <b>Fight AIDS Malawi</b> programming fall under the following.
          </p>

          <ol class="mt-5 pl-4 text-gray-500 list-decimal">
            <li>SRHR and Safe Abortion Access Expansion</li>
            <li>HIV prevention and linking to access to HIV Services</li>
            <li>Community Engagement on Sexual Gender Based Violence</li>
            <li>Advocacy</li>
          </ol>

          <div class="mt-8">
            <Link :href="route('site.programmes')"
              class="text-sky-500 hover:text-sky-600 tracking-wider transition-colors text-sm uppercase">More On Our Work
            <i class="fa-solid fa-arrow-right text-xs ml-2"></i></Link>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
</script>

<style scoped>
.parallax {
  width: 100%;
  height: 400px;
  background-image: url(/images/parallax.png);
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
}
</style>