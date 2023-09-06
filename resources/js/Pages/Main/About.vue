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
    <div class="flex-1 flex flex-col lg:flex-row justify-center lg:justify-between items-center">
      <div class="w-full lg:w-1/2 px-5 lg:pl-80 lg:pr-24 text-center lg:text-justify">
        <div class="flex items-center justify-center lg:justify-start">
          <div class="w-10 h-1.5 bg-orange-500 mr-3"></div>
          <h2 class="font-semibold text-3xl lg:text-5xl text-gray-800">
            Who We Are!
          </h2>
        </div>
        <p class="mt-5 text-gray-600 text-base">
          <b>Fight AIDS Malawi (FAM)</b> is a national based community-based organization founded in 2009. <b>FAM’s</b>
          mandate is to
          expand access to HIV prevention and treatment services for women, children and girls.
        </p>

        <p class="mt-5 text-gray-600 text-base">
          In <b>FAM</b> community-based paediatric HIV interventions, Community Health Workers (CHW) form a crucial link
          at all
          four stages of HIV care for children: Find, test, start and stay. CHW are crucial in each stage of HIV care to
          ensure children get the care they need.
        </p>

        <p class="mt-5 text-gray-600 text-base">
          In <b>FAM</b> community-led programming, CHW comprise of Volunteers, Community Educators, Peer Educators, Mother
          Mentors and Health Surveillance Assistants, (HSAs). Through CHW, <b>FAM</b> projects empower women and girls to
          exercise their Sexual Reproductive Health and Rights (SRHR).
        </p>

        <p class="mt-5 text-gray-600 text-base">
          Through effective sub-granting and capacity building of smaller community-based organisations, <b>FAM</b>
          projects
          impact communities and individuals hit hardest by HIV. <b>FAM</b> integrates innovation in its projects to
          address
          structural barriers that prevent women, girls and children from accessing HIV and SRHR services.
        </p>
      </div>

      <div class="w-full lg:w-1/2 order-first lg:order-2 mb-5 lg:mb-0">
        <img src="@/assets/images/f7fe9b71-8e62-421c-a593-c501467f674d.png" alt="" />
      </div>
    </div>
  </section>

  <!-- vision and mission -->
  <section class="w-full bg-gray-100">
    <div
      class="w-full lg:max-w-7xl mx-auto px-4 lg:px-0 py-10 flex flex-col space-y-5 lg:flex-row justify-center lg:justify-between lg:space-x-10 items-center">
      <div class="w-full lg:w-1/4">
        <p class="text-2xl font-light text-gray-600 text-center lg:text-left">
          Saving Lives & Building Families Since 2009
        </p>
      </div>

      <div
        class="w-full px-5 lg:px-0 lg:w-2/3 flex flex-col space-y-6 lg:space-y-0 lg:space-x-4 lg:flex-row justify-center lg:justify-between items-center">
        <div class="">
          <div class="flex justify-center lg:justify-start items-center space-x-4 px-5 lg:px-0">
            <div class="w-10 h-1.5 bg-orange-500"></div>
            <h4 class="font-bold text-2xl text-gray-700 capitalize">
              Our Vision
            </h4>
          </div>

          <p class="mt-4 text-sm text-center lg:text-left text-gray-600">
            Fight AIDS Malawi’s vision is to see a society where women, children and girls access timely and quality HIV
            and SRHR information, services and resources.
          </p>
        </div>

        <div class="">
          <div class="flex justify-center lg:justify-start items-center space-x-4 px-5 lg:px-0">
            <div class="w-10 h-1.5 bg-orange-500"></div>
            <h4 class="font-bold text-2xl text-gray-700 capitalize">
              Our Mission
            </h4>
          </div>

          <p class="mt-4 text-sm text-center lg:text-left text-gray-600">
            The Mission of Fight AIDS Malawi is to address structural barriers that perpetuate inequality and prevent
            women, children and girls from accessing HIV and SRHR information, services and resources.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- <section class="w-full">
    <div class="max-w-5xl mx-auto py-40 px-4 text-center">
      <div class="flex-1">
        <p class="text-gray-600 text-base">
          <b>Fight AIDS Malawi</b> is a Non-Governmental Organization (NGO)
          established to address the structural and gender inequalities that
          prevent women and girls from accessing HIV and Sexual Reproductive
          Health and Rights <b>(SRHR)</b> information, services and resources.
        </p>

        <p class="text-gray-600 text-base mt-5">
          <b>Fight AIDS Malawi</b> was first registered under the
          Non-Governmental Organizations Act, Chapter 5:05. Under this law,
          <b>Fight AIDS Malawi</b> was registered as a Local Non-Governmental
          Organization to operate mainly at local and district levels in central
          Malawi.
        </p>
      </div>

      <div class="flex-1 mt-5 lg:mt-0">
        <p class="text-gray-600 text-base">
          In 2022, <b>Fight AIDS Malawi</b> has been reregistered due to the new
          law that came into effect in Malawi. <b>Fight AIDS Malawi</b> has,
          under this law, been registered as a National Level Non- Governmental
          Organization with mandate to operate anywhere within the borders of
          Malawi.
        </p>

        <p class="text-gray-600 text-base mt-5">
          The Non-Governmental Organisations (Amendment) Act, 2022 (No.9 of
          2022) has amended the Non-Governmental Organisations Act, 2000 (Cap.
          5:05 of the Laws of Malawi). <b>Fight AIDS Malawi</b> is an
          acknowledged leader in the advocacy for improved access to
          reproductive rights education and services and promotion of HIV
          prevention and services.
        </p>
      </div>
    </div>
  </section> -->

  <!-- <section class="w-full">
    <div class="flex justify-center items-center space-x-4 px-5 lg:px-0 mt-10">
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
        discrimination themselves established a small Charity, now named
        <b>FAM</b>
        with the intention of improving the quality of living within their own
        community.
      </p>

      <p class="flex-1">
        During its humble first period of existence, <b>FAM</b> programmes and
        all of its activities were exclusively financed by these courageous
        individuals and its few members. <b>​FAM</b> has since grown
        substantially in size with the assistance of around 200 volunteers
        across <b>Malawi</b> and beyond.
      </p>

      <p class="flex-1">
        It maintains close relationships with various schools, colleges,
        professional development/training institutions, political stakeholders,
        other NGOs and representatives of various communities across
        <b>Malawi</b>.
      </p>
    </div>
  </section> -->

  <section class="w-full my-40">
    <div class="max-w-7xl mx-auto flex justify-start items-center space-x-4 px-5 lg:px-0 mb-28">
      <div class="w-10 h-1.5 bg-orange-500"></div>
      <h4 class="font-bold text-2xl text-gray-700 capitalize">
        Our Objectives
      </h4>
    </div>

    <div
      class="w-full lg:max-w-7xl mx-auto flex flex-col space-y-16 lg:space-y-0 lg:flex-row lg:justify-center lg:space-x-5 px-5 lg:px-0 items-start mt-12">
      <div class="flex-1">
        <div>
          <span class="bg-sky-200 text-gray-600 px-5 py-3.5 rounded-full">
            1
          </span>
        </div>
        <p class="mt-8">
          To expand access to HIV testing and treatment for marginalized women and their infants.
        </p>
      </div>

      <div class="flex-1">
        <div>
          <span class="bg-sky-200 text-gray-600 px-5 py-3.5 rounded-full">
            2
          </span>
        </div>
        <p class="mt-8">
          To support HIV treatment and care and address stigma and discrimination for marginalized women, girls and
          children.
        </p>
      </div>

      <div class="flex-1">
        <div>
          <span class="bg-sky-200 text-gray-600 px-5 py-3.5 rounded-full">
            3
          </span>
        </div>
        <p class="mt-8">
          To empower women and girls with Sexual Reproductive Health and Rights (SRHR) information and services.
        </p>
      </div>

      <!-- <div class="flex-1">
        <div>
          <span class="bg-sky-200 text-gray-600 px-5 py-3.5 rounded-full">
            4
          </span>
        </div>
        <p class="mt-8">
          To reduce stigma and discrimination against women, girls and young
          people living with HIV and AIDS.
        </p>
      </div> -->
    </div>
  </section>

  <section class="w-full bg-gray-100 py-14">
    <div class="max-w-7xl mx-auto flex justify-start items-center space-x-4 px-5 lg:px-0 mb-12">
      <div class="w-10 h-1.5 bg-orange-500"></div>
      <h4 class="font-bold text-2xl text-gray-700 capitalize">Our Approach</h4>
    </div>

    <div class="max-w-7xl mx-auto text-gray-600 px-5 lg:px-0">
      <h4 class="font-medium mb-5 text-gray-800">Life Cycle Approach (LiCA)</h4>
      <div class="flex flex-col justify-start space-y-5 lg:space-y-0 lg:flex-row lg:space-x-5 text-justify">
        <p class="flex-1">
          Fight AIDS Malawi uses LiCA for mpowering communities to find and support pregnant women and children living
          with HIV. FAM conducts evidence-based mapping of individual challenges per phase, assess relevant and unique
          needs in HIV prevention and treatment.
        </p>

        <p class="flex-1">
          FAM works with CHW and partners to deliver innovative approaches for empowering women, children and girls to
          prevent themselves from HIV infection or to adhere to or remain on HIV treatment.
        </p>
      </div>
    </div>
  </section>

  <section class="w-full py-14">
    <!-- <div
      class="max-w-7xl mx-auto flex justify-start items-center space-x-4 px-5 lg:px-0 mb-12"
    >
      <div class="w-10 h-1.5 bg-orange-500"></div>
      <h4 class="font-bold text-2xl text-gray-700 capitalize">Our Approach</h4>
    </div> -->

    <div class="max-w-7xl mx-auto text-gray-600 px-5 lg:px-0">
      <h4 class="font-medium mb-5 text-gray-800">Creative Collaboration Approach (CreCA).</h4>
      <div class="grid grid-cols-2 gap-x-5 gap-y-4 text-justify">
        <p class="">
          CreCA creates and strengthens effective links among communities, Health Facilities and government authorities.
          In CreCA inspired programming, CHW forms the core of HIV services delivery.
        </p>

        <p class="">
          CreCA connects and links CHW with Home-Based Caregivers, Community-Based Health Care Services and Health
          Facility Services. CHW are the linking pin between children and their caregivers or pregnant or lactating
          women, Health Facilities, Key Community Members, and Local Government.
        </p>

        <p class="">
          The CHW model is critical to finding, HIV testing and starting treatment and staying in care for children and
          women. This ensures that children live healthily with HIV and pregnant women give birth to HIV-free babies.
        </p>
      </div>
    </div>
  </section>

  <!-- <section class="w-full pb-14">
    <div class="max-w-7xl mx-auto text-gray-600 px-5 lg:px-0">
      <h4 class="font-medium mb-5 text-gray-800">
        The principles guiding FAM Work
      </h4>
      <div class="">
        <p class="w-2/3 mt-5">
          FAM project design and implementation is underpinned some principles
          which are of fundamental importance in applying a human rights-based
          approach in practice. These are:
        </p>

        <ol class="mt-5 pl-10 list-decimal">
          <li>Participation</li>
          <li>Feminist approach to project design</li>
          <li>Accountability</li>
          <li>Non-discrimination and equality</li>
          <li>Empowerment and</li>
          <li>Legality</li>
        </ol>
      </div>
    </div>
  </section> -->

  <section class="w-full pb-14 mt-10">
    <div class="max-w-7xl mx-auto flex justify-start items-center space-x-4 px-5 lg:px-0 mb-8">
      <div class="w-10 h-1.5 bg-orange-500"></div>
      <h4 class="font-bold text-2xl text-gray-700 capitalize">
        Our Governance
      </h4>
    </div>

    <div class="max-w-7xl mx-auto px-5 lg:px-0">
      <p class="w-2/3 text-gray-600">
        Fight AIDS Malawi is governed by a Board of Trustees which provides strategic direction and oversight to the
        Management. The Management is led by an Executive Director and has 18 staff members. The Management is supported
        by a dedicated network of 420 Community Health Workers and Volunteers.
      </p>

      <!-- <ol class="mt-5 pl-10 list-decimal text-gray-600">
        <li>The Governance and Procedures Policy</li>
        <li>The Financial Policy</li>
        <li>The Anti-Corruption Policy</li>
        <li>The Data Policy</li>
        <li>The Whistle Blowing Policy</li>
        <li>The Equal Employment and Opportunities Policy</li>
        <li>The Gender Equality Policy</li>
        <li>Safe Guarding Vulnerable Adults Policy</li>
        <li>The staff Code of Conduct</li>
        <li>The Risk Register Policy</li>
        <li>The Strategic Plan</li>
      </ol> -->

      <!-- <div class="mt-8">
        <Link :href="route('site.policies')"
          class="text-sky-500 hover:text-sky-600 tracking-wider transition-colors text-sm uppercase">More On Our Policies
        <i class="fa-solid fa-arrow-right text-xs ml-2"></i></Link>
      </div> -->
    </div>
  </section>

  <!-- parallax -->
  <section class="parallax my-24">
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