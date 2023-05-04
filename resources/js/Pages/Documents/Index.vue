<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, useForm, Link } from "@inertiajs/vue3";
import { ref } from "vue";
import dayjs from 'dayjs'
import relativeTime from 'dayjs/plugin/relativeTime'

dayjs.extend(relativeTime)

defineProps({ documents: Object });

let form = useForm({
  title: null,
  document: null,
});

const progress_indicator = ref()

const submit = (e) => {
    const data = new FormData(e.target)

    form.document = data.get('document')

    form.post(route('documents.store'), {
        onProgress: (e) => {
            progress_indicator.value.style.width = e.percentage + '%'
        },
        onSuccess: (e) => {
            location.reload()
        }
    })
};
</script>

<template>
  <Head title="Documents" />

  <AuthenticatedLayout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Documents
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <!-- upload a new document -->
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <p class="pt-6 px-6 text-gray-800">Upload a new document.</p>

          <div class="lg:px-6 py-5">
            <form
              @submit.prevent="submit"
              class="w-full flex justify-start items-center lg:space-x-7"
            >
              <div class="lg:w-1/3">
                <label for="title" class="block text-xs text-gray-500"
                  >Document Title</label
                >

                <input
                  type="text"
                  placeholder="My Document Title"
                  v-model="form.title"
                  class="mt-2 block w-full placeholder-gray-400/70 rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40"
                />

                <p class="mt-3 text-xs text-red-400" v-if="form.errors.title">
                  {{ form.errors.title }}
                </p>
              </div>

              <div class="lg:w-1/3">
                <label for="document" class="block text-xs text-gray-500"
                  >Document</label
                >

                <input
                  type="file"
                  accept=".pdf"
                  name="document"
                  class="block w-full px-3 py-2 mt-2 text-sm text-gray-600 bg-white border border-gray-200 rounded-lg file:bg-gray-200 file:text-gray-700 file:text-sm file:px-4 file:py-1 file:border-none file:rounded-full placeholder-gray-400/70 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40"
                />

                <p class="mt-3 text-xs text-red-400" v-if="form.errors.document">
                  {{ form.errors.document }}
                </p>
              </div>

              <button
                type="submit"
                :disabled="form.processing"
                class="bg-blue-500 px-5 py-2.5 lg:mt-5 rounded-md text-white text-sm uppercase hover:bg-blue-600 disabled:bg-gray-500 transition-colors"
              >
                Upload
              </button>
            </form>
          </div>

          <!-- progress indicator -->
          <div class="w-full -mb-2">
            <!-- indicator -->
            <div class="w-0 h-3 bg-green-500 rounded-full transition-all" ref="progress_indicator"></div>
          </div>
        </div>

        <!-- show present documents -->
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-10 p-3">
          <table class="w-full">
            <thead>
                <tr class="text-sm text-gray-500 font-medium tracking-wider">
                    <td class="p-4">Document Title</td>
                    <td class="p-4">Uploaded By</td>
                    <td class="p-4">Uploaded</td>
                    <td class="p-4">Actions</td>
                </tr>
            </thead>

            <tbody>
                <tr v-for="(document, index) in documents.data" :key="index" class="text-sm text-gray-600 tracking-wide border-t">
                    <td class="px-4 py-2.5">{{ document.title }}</td>
                    <td class="px-4 py-2.5">{{ document.user.name }}</td>
                    <td class="px-4 py-2.5">{{ dayjs(document.created_at).fromNow() }}</td>
                    <td class="px-4 py-2.5">
                      <Link :href="route('documents.destroy', document)" method="delete" class="text-gray-500 hover:text-gray-600 transition-colors">
                        <i class="fa-solid fa-trash text-xs mr-1"></i>
                        Delete
                      </Link>
                    </td>
                </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </AuthenticatedLayout>
</template>
