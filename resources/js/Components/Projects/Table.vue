<template>
<div class="flex flex-col">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
      <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                Project Name
              </th>
              <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                Client Name
              </th>
              <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                Status
              </th>

            </tr>
          </thead>

          <tbody class="bg-white divide-y divide-gray-200">

            <tr v-for="project in this.projects" :key="project.id">
              <td class="px-6 py-4 flex-wrap">
                <div class="flex  flex-wrap items-center">
                  <div class="ml-4">
                    <div class="text-sm font-medium text-gray-900 underline">
                      <Link :href="route('admin.projects.show', {id: project.id})" class="p-2 rounded hover:bg-blue-400 hover:text-white">{{ project.project_name }}</Link>
                    </div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 flex-wrap">
                <div class="text-sm text-gray-900">{{project.customer_id ? 'Customer Name' : 'No customer assigned to this project' }}</div>
              </td>
              <td class="px-6 py-4 flex-wrap">
                
                <span :class="project.completed ? 'text-green-800 bg-green-100 inline-flex px-2 text-xs font-semibold leading-5 rounded-full' : 'text-red-800 bg-red-100 inline-flex px-2 text-xs font-semibold leading-5 rounded-full'">
                 <button @click="toggleComplete(project.id, project.completed)"> {{project.completed ? 'Completed' : 'In Progress'}} </button>
                </span>
              </td>
              
            </tr>

            <!-- More people... -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';

export default {
    components: {
        Link
    },
    data() {
        return {
            open: false,
            form: {
              id: null,
              completed: null
            }
        }
    },
    props: {
      projects: Object
    },
    methods: {
      toggleComplete(id, status) {
        this.form.completed = !status;
        this.form.id = id;
        console.log(`Project ${id}, statsus: ${status}`);
          this.$inertia.patch(`/admin/projects/${id}`, this.form);
      }
    }
    
}
</script>