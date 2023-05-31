<template>
  <main>
    <div class="max-w-7xl mx-auto" style="padding: 86px 12px">
      <div
        class="flex justify-center lg:justify-start items-center space-x-4 lg:px-0 mb-5"
      >
        <div class="w-10 h-1.5 bg-orange-500"></div>
        <h4 class="font-bold text-2xl text-gray-700 capitalize">
          Our Programmes
        </h4>
      </div>
      <p class="text-gray-600">
        <b>Fight Aids Malawi</b> programming fall under the following:
      </p>

      <ol class="mt-5 pl-10 text-gray-600 list-decimal">
        <li>SRHR and Safe Abortion Access Expansion</li>
        <li>HIV prevention and linking to access to HIV Services</li>
        <li>Community Engagement on Sexual Gender Based Violence</li>
        <li>Advocacy:</li>
      </ol>

      <p class="text-gray-600 mt-5 font-medium">
        Advocacy streams:
      </p>

      <ol class="mt-5 pl-10 text-gray-600 list-disc text-sm">
        <li>Women rights to SRHR, HIV services, property rights</li>
        <li>Legal reforms on SRHR and Abortion laws and policies, community, local and national level advocacy, issues based, evidence informed and guided</li>
        <li>Local funding to SRHR activities, CDF engagement</li>
        <li>Addressing stigma and discrimination, attitudes, practices</li>
      </ol>

      <!-- accordion -->
      <div class="accordion mt-14" role="tablist" id="accordion-1">
        <div class="accordion-item" style="border-radius: 0">
          <h2 class="accordion-header" role="tab">
            <button
              class="accordion-button collapsed"
              data-bs-toggle="collapse"
              data-bs-target="#accordion-1 .item-1"
              aria-expanded="false"
              aria-controls="accordion-1 .item-1"
              @click="toggleExpansion"
            >
              FAM SRHR PROGRAMME<br />
            </button>
          </h2>
          <div
            class="accordion-collapse hidden item-1"
            role="tabpanel"
            data-bs-parent="#accordion-1"
          >
            <div class="accordion-body">
              <p class="mb-0">
                In rural villages of Lilongwe, religious and cultural beliefs
                perpetuate and sustain stigma surrounding abortion issues.
                Structural barriers like poverty, distance to health facilities
                and lack of capacity to provide safe abortion services in health
                facilities prevent women and girls from accessing safe abortion
                services and correct SRHR information.<br />
              </p>
              <p class="mb-0" style="margin-top: 9px">
                As a result, poor women and girls resort to clandestine and
                unsafe abortion methods from traditional healers, untrained
                personnel or by self-inducing abortion using unsafe methods. 60%
                of these result in complications that require medical treatment
                in health facilities, and between 6-18% of these result in
                maternal deaths.<br />
              </p>
              <p class="mb-0" style="margin-top: 9px">
                This innovation expands and decentralizes access to safe
                abortion services and SRHR information to women and girls living
                in rural Lilongwe. Several approaches are being used to achieve
                change including the establishment of an Online Abortion
                Interactive Forum, conducting outreach clinics, community and
                school-based education initiatives and capacity building of
                rural health facilities. Fight AIDS Malawi plans to use the
                evidence generated from the project to advocate for increased
                resource allocation from the Constituency Development Fund
                (CDF), a decentralized fund to facilitate constituency level
                development projects, for SRHR and safe abortion projects.<br />
              </p>
              <h4 style="margin-top: 20px; margin-bottom: 20px">
                Programme Objectives<br />
              </h4>
              <p class="mb-0" style="margin-top: 9px">
                1. 25% increase in available safe abortion services (including
                MVA, MA pre-and-post abortion counseling, harm reduction, and
                post abortion care) for 4,500 adolescents and girls and 4,600
                women, as determined by a pre/post test evaluation. <br />
              </p>
              <p class="mb-0" style="margin-top: 9px">
                2. 15% decrease in the levels of stigma around safe abortion and
                SRHR issues at community, school and health facility levels
                compared to baseline data, as measured by an SRHR and abortion
                stigma measurement tool which evaluates people attitudes and
                practices towards abortion issues.<br />
              </p>
              <p class="mb-0" style="margin-top: 9px">
                3. 5% increase in resource allocation from the Constituency
                Development Fund (CDF) from 2% to 7% for SRHR and safe abortion
                services.<br />
              </p>
              <h4 style="margin-top: 20px; margin-bottom: 20px">
                Programme Achievements<br />
              </h4>
              <p class="lead mb-0" style="margin-top: 9px">
                1. Online Abortion Interactive Forum<br />
              </p>
              <p class="mb-0" style="margin-top: 9px">
                An interactive online forum is being accessible through mobile
                phones, has been established to enable young women and girls to
                access non-judgmental information on safe abortion and SRHR, as
                well as an index of existing facilities. Focal persons from
                established Village Safe Abortion Forums, have been trained to
                manage the online platform.<br />
              </p>
              <p class="lead mb-0" style="margin-top: 9px">
                2. Outreach Safe Abortion Clinics<br />
              </p>
              <p class="mb-0" style="margin-top: 9px">
                Health workers, nurses and peer counselors have been trained to
                provide safe abortion/SRHR information and services and harm
                reduction counseling in 96 rural villages and 15 schools.
                Women/girls seeking Manual Vacuum Aspiration or Post-Abortion
                Care services have been referred to local health facilities.<br />
              </p>
              <p class="lead mb-0" style="margin-top: 9px">
                3. Community Education Initiatives<br />
              </p>
              <p class="mb-0" style="margin-top: 9px">
                50 Village Safe Abortion Forums (comprised of community health
                workers), and 15 school-based Girls’ SRHR Circles (comprised of
                girls, young people, teachers and community health workers) have
                been established to address abortion related stigma and ensure
                sustained access to SRHR, sexuality education and safe abortion
                information in villages and schools.<br />
              </p>
              <p class="lead mb-0" style="margin-top: 9px">
                4. Improving Capacity of Rural Health Facilities<br />
              </p>
              <p class="mb-0" style="margin-top: 9px">
                Together with facility-based health worker training, 10 rural
                health facilities have been equipped with abortion service
                equipment (such as Gynecological Beds and MVA sets). Health
                facility-based data collectors and Health Facility Advisory
                Committees have also been trained to better monitor the
                availability of abortion resources in rural health facilities to
                strengthen supply chain management.<br />
              </p>
            </div>
          </div>
        </div>
        <div class="accordion-item" style="border-radius: 0">
          <h2 class="accordion-header" role="tab">
            <button
              class="accordion-button collapsed"
              data-bs-toggle="collapse"
              data-bs-target="#accordion-1 .item-2"
              aria-expanded="false"
              aria-controls="accordion-1 .item-2"
              @click="toggleExpansion"
            >
              STOP HIV PROGRAMME<br />
            </button>
          </h2>
          <div
            class="accordion-collapse hidden item-2"
            role="tabpanel"
            data-bs-parent="#accordion-1"
          >
            <div class="accordion-body">
              <p class="mb-0">
                In 2020, Ministry of Health (MoH) estimated that 92% of
                HIV-positive pregnant women were initiated on ART in Lilongwe
                and 74% were retained in HIV care at 12 months postpartum. Data
                shows that high attrition in PMTCT programs is more of Loss to
                Follow-Up (LTFU) than of mortality. Children born to women
                living with HIV and their mothers are missing out on life-saving
                treatment as they are not systematically monitored and followed
                up during the postpartum period.<br />
              </p>
              <p class="mb-0" style="margin-top: 9px">
                STOP-HIV is a scale up of an existing Positive Action funded
                project for improving access to quality and early linkage to
                treatment for children aged 0 -14 years through quality HIV
                services. STOP-HIV is designed to increase HIV case finding and
                treatment and provide support to children and ALHIV aged 0-14
                years.<br />
              </p>
              <p class="mb-0" style="margin-top: 9px">
                STOP-HIV adopts an integrated approach forimproving access to
                quality and early linkage to treatment for children aged 0 -14
                years. To ensure sustained community managed HIV care beyond
                three years, Mentor Mothers will provide Home-Based psychosocial
                support to ALHIV and WLHIV. Community Health Workers (CHWs) and
                Health Surveillance Assistants (HSAs) will be trained to conduct
                community and family-based HIV index testing, risk assessments
                for poor adherence and mental health and disclosure support for
                children and ALHIV.<br />
              </p>
              <p class="mb-0" style="margin-top: 9px">
                STOP-HIV integrates several components for achieving outcomes.
                These are capacity building for ALHIV mental health and
                disclosure support, social economic protection and support for
                children and ALHIV aged 0-14 years. Addressing COVID-19 economic
                impacts on households that are supporting children and ALHIV,
                health facility support, strengthening Community Clinic
                Collaboration (C3) methodologies and community mobilisation.<br />
              </p>
              <h4 style="margin-top: 20px; margin-bottom: 20px">
                Expected Outcomes<br />
              </h4>
              <p class="mb-0" style="margin-top: 9px">
                1. Improved access to quality and early linkage to AIDS
                treatment for children and ALHIV aged 0-4 years.<br />
              </p>
              <p class="mb-0" style="margin-top: 9px">
                2. Improved ART adherence, increased uptake of PMTCT among
                pregnant women.<br />
              </p>
              <p class="mb-0" style="margin-top: 9px">
                3. Increased uptake of Early Infant Diagnosis (EID) for exposed
                infants.<br />
              </p>
              <p class="mb-0" style="margin-top: 9px">
                4. Reduced LTFU of women on PMTCT.<br />
              </p>
              <h4 style="margin-top: 20px; margin-bottom: 20px">
                Project Objectives<br />
              </h4>
              <p class="mb-0" style="margin-top: 9px">
                1. To increase access to Early Infant Diagnosis (EID) by 20%
                from 64% to 84% for increased HIV case finding for 3,
                000children and adolescents aged 0-14 years in Lilongwe by July,
                2024.<br />
              </p>
              <p class="mb-0" style="margin-top: 9px">
                2. To increased timely AIDS treatment by 20% from 52% to 72% for
                3, 000 children and adolescents aged 0-14 years in Lilongwe by
                July, 2024.<br />
              </p>
              <p class="mb-0" style="margin-top: 9px">
                3. To reduce Loss to Follow Up (LTFU) by 26% from 36% to 10% for
                increased treatment and support for 2, 000HIV positive women in
                Lilongwe by July, 2024.<br />
              </p>
              <p class="mb-0" style="margin-top: 9px">
                4. To improve household incomes from less than a Dollar a day to
                15 Dollars a day for 900WLHIV for increased support to 920
                children and adolescents living with HIV aged 0-14in Lilongwe by
                July, 2024.<br />
              </p>
            </div>
          </div>
        </div>
        <div class="accordion-item" style="border-radius: 0">
          <h2 class="accordion-header" role="tab">
            <button
              class="accordion-button collapsed"
              data-bs-toggle="collapse"
              data-bs-target="#accordion-1 .item-3"
              aria-expanded="false"
              aria-controls="accordion-1 .item-3"
              @click="toggleExpansion"
            >
              HIV PREVENTION<br />
            </button>
          </h2>
          <div
            class="accordion-collapse hidden item-3"
            role="tabpanel"
            data-bs-parent="#accordion-1"
          >
            <div class="accordion-body">
              <p class="mb-0">
                Despite significant efforts, there is no effective vaccine
                against HIV. The only way to prevent infection by the virus is
                to avoid behaviors that put you at risk, such as sharing needles
                or having unprotected sex. In this context, unprotected sex
                means sex without a barrier such as a condom. Because condoms
                break, even they are not perfect protection. Many people
                infected with HIV don‘t have any symptoms. There is no way to
                know with certainty whether a sexual partner is infected.<br />
              </p>
              <h4 style="margin-top: 20px; margin-bottom: 20px">
                Prevention Strategies<br />
              </h4>
              <p class="mb-0" style="margin-top: 9px">
                1. Abstain from sex. This obviously has limited appeal, but it
                absolutely protects against HIV transmission by this route.<br />
              </p>
              <p class="mb-0" style="margin-top: 9px">
                2. Have sex with a single partner who is uninfected. Mutual
                monogamy between uninfected partners eliminates the risk of
                sexual transmission of HIV.<br />
              </p>
              <p class="mb-0" style="margin-top: 9px">
                3. Use a condom in other situations. Condoms offer some
                protection if used properly and consistently. Occasionally, they
                may break or leak. Only condoms made of latex should be used.
                Only water-based lubricants should be used with latex
                condoms.<br />
              </p>
              <p class="mb-0" style="margin-top: 9px">
                4. Do not share needles or inject illicit drugs<br />
              </p>
              <p class="mb-0" style="margin-top: 9px">
                5. If you work in a health-care field, follow recommended
                guidelines for protecting yourself against needle sticks and
                exposure to contaminated fluids.<br />
              </p>
              <p class="mb-0" style="margin-top: 9px">
                6. If you have engaged in risky behaviors, get tested to see if
                you have HIV.<br />
              </p>
              <p class="mb-0" style="margin-top: 9px">
                7. The risk of HIV transmission from a pregnant woman to her
                baby is significantly reduced if the mother takes medications
                during pregnancy, labor, and delivery and her baby takes
                medications for the first six weeks of life. Even shorter
                courses of treatment are effective, though not as optimal. The
                key is to get tested for HIV as early as possible in pregnancy.
                In consultation with their physician, many women opt to avoid
                breastfeeding to minimize the risk of transmission after the
                baby is born.<br />
              </p>
            </div>
          </div>
        </div>
        <div class="accordion-item" style="border-radius: 0">
          <h2 class="accordion-header" role="tab">
            <button
              class="accordion-button collapsed"
              data-bs-toggle="collapse"
              data-bs-target="#accordion-1 .item-4"
              aria-expanded="false"
              aria-controls="accordion-1 .item-4"
              @click="toggleExpansion"
            >
              FIGHTING HIV/AIDS BY ADDRESSING STIGMA AND COMBATING
              DISCRIMINATION<br />
            </button>
          </h2>
          <div
            class="accordion-collapse hidden item-4"
            role="tabpanel"
            data-bs-parent="#accordion-1"
          >
            <div class="accordion-body">
              <p class="mb-0">
                AIDS-related stigma and discrimination refers to prejudice,
                negative attitudes, abuse and maltreatment directed at people
                living with HIV and AIDS. The consequences of stigma and
                discrimination are wide-ranging: being shunned by family, peers
                and the wider community, poor treatment in healthcare and
                education settings, an erosion and denial of human rights and
                dignity, psychological damage, and a negative effect on the
                success of HIV testing and treatment.<br />
              </p>
              <p class="mb-0" style="margin-top: 10px">
                AIDS stigma and discrimination exist worldwide, although they
                manifest themselves differently across countries, communities,
                religious groups and individuals. They occur alongside other
                forms of stigma and discrimination, such as racism, stigma based
                on physical appearance, homophobia or misogyny and can be
                directed towards those involved in what are considered socially
                unacceptable activities such as prostitution or drug use.<br />
              </p>
              <p class="mb-0" style="margin-top: 10px">
                Stigma not only makes it more difficult for people trying to
                come to terms with HIV and manage their illness on a personal
                level, but it also interferes with attempts to fight the AIDS
                epidemic as a whole. On a national level, the stigma associated
                with HIV can deter governments from taking fast, effective
                action against the epidemic, whilst on a personal level it can
                make individuals reluctant to access HIV testing, treatment and
                care.<br />
              </p>
            </div>
          </div>
        </div>
        <div class="accordion-item" style="border-radius: 0">
          <h2 class="accordion-header" role="tab">
            <button
              class="accordion-button collapsed"
              data-bs-toggle="collapse"
              data-bs-target="#accordion-1 .item-5"
              aria-expanded="false"
              aria-controls="accordion-1 .item-5"
              @click="toggleExpansion"
            >
              FIGHTING HIV/ AIDS AT THE COMMUNITY LEVEL<br />
            </button>
          </h2>
          <div
            class="accordion-collapse hidden item-5"
            role="tabpanel"
            data-bs-parent="#accordion-1"
          >
            <div class="accordion-body">
              <p class="mb-0">
                Community level stigma and discrimination towards people living
                with HIV is found all over the world. A community‘s reaction to
                somebody living with HIV can have a huge effect on that person‘s
                life. If the reaction is hostile a person may be discriminated
                against and may be forced to leave their home, or change their
                daily activities such as shopping, socializing or schooling.<br />
              </p>
              <p class="mb-0" style="margin-top: 10px">
                Community-level stigma and discrimination can manifest as
                ostracism, rejection and verbal and physical abuse. It has even
                extended to murder. AIDS related murders have been reported in
                countries as diverse as Brazil, Colombia, Ethiopia, India, South
                Africa and Thailand.<br />
              </p>
              <p class="mb-0" style="margin-top: 10px">
                In December 1998, Gugu Dhlamini was stoned and beaten to death
                by neighbors in her township near Durban, South Africa, after
                speaking openly on World AIDS Day about her HIV status. It is
                therefore not surprising that 79 percent of people living with
                HIV who participated in a global study, feared social
                discrimination following their status disclosure.<br />
              </p>
            </div>
          </div>
        </div>
        <div class="accordion-item" style="border-radius: 0">
          <h2 class="accordion-header" role="tab">
            <button
              class="accordion-button collapsed"
              data-bs-toggle="collapse"
              data-bs-target="#accordion-1 .item-6"
              aria-expanded="false"
              aria-controls="accordion-1 .item-6"
              @click="toggleExpansion"
            >
              FIGHT HIV/AIDS AT THE FAMILY LEVEL<br />
            </button>
          </h2>
          <div
            class="accordion-collapse hidden item-6"
            role="tabpanel"
            data-bs-parent="#accordion-1"
          >
            <div class="accordion-body">
              <p class="mb-0">
                In the majority of developing countries families are the primary
                caregivers when somebody falls ill. There is clear evidence that
                families play an important role in providing support and care
                for people living with HIV and AIDS. However, not all family
                responses are supportive. HIV positive members of the family can
                find themselves stigmatized and discriminated against within the
                home. There is concern that women and non-heterosexual family
                members are more likely than children and men to be
                mistreated.<br />
              </p>
              <p class="mb-0" style="margin-top: 10px">
                A Dutch survey of people living with HIV found that stigma in
                family settings – in particular avoidance, exaggerated kindness
                and being told to conceal one‘s status – was a significant
                predictor of psychological distress. This was believed to be due
                to the absence of unconditional love and support, which families
                are expected to provide. Furthermore, people living with HIV are
                often worried about losing family and friends if they disclose
                their status. As a global study illustrated, 35 percent of those
                interviewed cited this as a concern surrounding disclosure.<br />
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</template>

<script setup>
import { onMounted } from "vue"

const toggleExpansion = (e) => {
  const el = e.target
  let attr = el.attributes['data-bs-target']

  if (attr) {
    attr = attr.value

    let class_name = attr.split(' ')[1].replace('.', '')

    let child = document.getElementsByClassName(class_name)[0]

    if (child.classList.contains('hidden')) {
      child.classList.remove('hidden')
    } else {
      child.classList.add('hidden')
    }
  }
}
</script>

<style scoped>
.accordion {
  border: 1px solid gainsboro;
  border-radius: .25em;
}

.accordion .accordion-item {
  border-bottom: 1px solid gainsboro;
  padding: .8em;
}

.accordion-header {
  font-weight: bold;
}

.accordion-button {
  display: block;
  width: 100%;
  text-align: left;
}

.accordion-body {
  margin-top: 1em;
}
</style>