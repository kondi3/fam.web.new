<script>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import { Link } from "@inertiajs/vue3";

export default {
  layout: GuestLayout,
  components: { Link },
};
</script>

<template>
  <section class="w-full h-screen flex flex-col justify-between">
    <!-- hero section -->
    <div
      class="flex-1 flex flex-col lg:flex-row justify-center lg:justify-between items-center"
    >
      <div
        class="w-full lg:w-1/2 px-5 lg:pl-80 lg:pr-24 text-center lg:text-left"
      >
        <div class="flex items-center justify-center lg:justify-start">
          <div class="w-10 h-1.5 bg-orange-500 mr-3"></div>
          <h2 class="font-semibold text-3xl lg:text-5xl text-gray-800">
            Who We Are!
          </h2>
        </div>
        <p class="mt-5 text-gray-600 text-base">
          <b>Fight AIDS Malawi (FAM)</b> is a is a women’s rights organization
          with a deliberate mandate to promote women and girls’ rights living
          with and affected by <b>HIV/AIDS</b>. <b>FAM</b> is a
          <b>Women Rights Organization (WRO)</b> focused on advancing the rights
          and dignity of women and girls living with <b>HIV/AIDS</b> against
          <b>sexual and gender-based violence, stigma and discrimination</b>.
        </p>

        <p class="mt-5 text-gray-600 text-base">
          <b>FAM</b> work involves promotion of rights and equality for
          marginalized groups who are made more vulnerable to
          <b>HIV</b> infection due to <b>sexual and gender-based violence</b>,
          social isolation and neglect which they endure. These marginalized
          groups whom <b>FAM</b> serve are women, girls living with disability,
          female sex workers and LBTI young women and girls.
        </p>
      </div>

      <div class="w-full lg:w-1/2 order-first lg:order-2 mb-5 lg:mb-0">
        <img
          src="@/assets/images/f7fe9b71-8e62-421c-a593-c501467f674d.png"
          alt=""
        />
      </div>
    </div>

    <!-- loyalty -->
    <div class="max-w-7xl mx-auto flex justify-between items-center"></div>
  </section>

  <!-- vision and mission -->
  <section class="w-full bg-gray-100">
    <div
      class="w-full lg:max-w-7xl mx-auto px-4 lg:px-0 py-10 flex flex-col space-y-5 lg:flex-row justify-center lg:justify-between lg:space-x-10 items-center"
    >
      <div class="w-full lg:w-1/4">
        <p class="text-2xl font-light text-gray-600 text-center lg:text-left">
          Saving Lives & Building Families Since 2008
        </p>
      </div>

      <div
        class="w-full px-5 lg:px-0 lg:w-2/3 flex flex-col space-y-6 lg:space-y-0 lg:space-x-4 lg:flex-row justify-center lg:justify-between items-center"
      >
        <div class="">
          <div class="flex justify-center lg:justify-start items-center space-x-4 px-5 lg:px-0">
            <div class="w-10 h-1.5 bg-orange-500"></div>
            <h4 class="font-bold text-2xl text-gray-700 capitalize">
              Our Vision
            </h4>
          </div>

          <p class="mt-4 text-sm text-center lg:text-left">
            FAM visions a society where sexual and gender-based violence against
            women and girls is eradicated and where HIV transmission is wiped
            out.
          </p>
        </div>

        <div class="">
          <div class="flex justify-center lg:justify-start items-center space-x-4 px-5 lg:px-0">
            <div class="w-10 h-1.5 bg-orange-500"></div>
            <h4 class="font-bold text-2xl text-gray-700 capitalize">
              Our Mission
            </h4>
          </div>

          <p class="mt-4 text-sm text-center lg:text-left">
            The Mission of FAM is to ensure protection and empowerment for
            vulnerable social groups made more vulnerable by HIV and AIDS and
            Poverty.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- strategic goal -->
  <section class="w-full">
    <div class="max-w-7xl mx-auto py-40 text-center">
      <div class="flex justify-center items-center space-x-4 px-5 lg:px-0">
        <div class="w-10 h-1.5 bg-orange-500"></div>
        <h4 class="font-bold text-2xl text-gray-700 capitalize">
          Our Strategic Goal
        </h4>
      </div>

      <div
        class="w-full lg:max-w-3xl mx-auto flex flex-col lg:justify-center space-y-5 px-5 lg:px-0 items-start mt-12"
      >
        <p class="flex-1">
          People living with <b>HIV/AIDS</b> having lived through stigma and
          discrimination themselves established a small Charity, now named <b>FAM</b>
          with the intention of improving the quality of living within their own
          community.
        </p>

        <p class="flex-1">
          During its humble first period of existence, <b>FAM</b> programmes and all of
          its activities were exclusively financed by these courageous
          individuals and its few members. <b>​FAM</b> has since grown substantially in
          size with the assistance of around 200 volunteers across <b>Malawi</b> and
          beyond.
        </p>

        <p class="flex-1">
          It maintains close relationships with various schools, colleges,
          professional development/training institutions, political
          stakeholders, other NGOs and representatives of various communities
          across <b>Malawi</b>.
        </p>
      </div>
    </div>
  </section>

  <!-- parallax -->
  <section class="parallax">
    <div
      class="w-full h-full bg-black bg-opacity-60 backdrop-blur text-white flex items-center"
    >
      <div class="max-w-7xl mx-auto text-center px-4 lg:px-0 py-10">
        <hp class="text-2xl lg:text-4xl font-light">
          See How We Are Contributing In The Fight Against
        </hp>

        <h3 class="mt-2 text-3xl lg:text-4xl">Gender Based Violence</h3>

        <div class="mt-5">
          <Link
            :href="route('site.gbv')"
            class="text-gray-200 text-sm hover:text-white transition-colors tracking-widest"
            >Read How We Address VAWG
            <i class="fa-solid fa-arrow-right text-xs ml-2"></i
          ></Link>
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
  background-image: url(/images/5c4b8a2b-9740-44e2-960f-8048b704675c.jpg);
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
}
</style>