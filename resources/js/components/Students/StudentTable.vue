<template>

    <div class="flex flex-col">
        <!-- filter -->
        <div class="mx-8 flex justify-between">
            <div class="flex gap-2 items-center">
                <h1>Filter:</h1>
                <select v-model="gradeId" class="rounded-md p-1 text-center bg-gray-300" name="filter" id="">
                    <option value="">NONE</option>
                    <option v-for="data in gradeIdList" :key="data.id" :value="data.id">{{data.name}}</option>
                </select>
            </div>
            <div class="flex gap-2 items-center">
                <label for="code">Serach By Code:</label>
                <input type="text" v-model="code" class="p-1 border-black bg-gray-300 rounded-md" placeholder="1234">
            </div>
        </div>
        <!-- table -->
        <div  class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div v-if="meta.total >= 1" class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table class="min-w-full">
                        <thead class="border-b">
                            <tr>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    #
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    Name
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    Age
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    School
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    Code
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b" v-for="data in students" :key="data.id">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{data.id}}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{data.name}}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{data.age}}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{data.school}}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{data.code}}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    <div class="flex gap-5">
                                        <a href="#"
                                            class=" text-blue-600 hover:text-blue-900 font-bold shadow-lg">Details</a>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="text-center " v-else>
                <h1>There is no data to show</h1>
            </div>
        </div>
    </div>
    <!-- pagination -->
    <div class="flex items-center justify-between border-t border-gray-200 bg-white px-4 py-3 sm:px-6">
        <div class="flex flex-1 justify-between sm:hidden">
            <a href="#"
                class="relative inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Previous</a>
            <a href="#"
                class="relative ml-3 inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Next</a>
        </div>
        <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
            <div>
                <p class="text-sm text-gray-700">
                    Showing
                    <span class="font-medium">{{students.length}}</span>
                    to
                    <span class="font-medium">{{meta.per_page}}</span>
                    of
                    <span class="font-medium">{{meta.total}}</span>
                    results
                </p>
            </div>
            <div>
                <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">
                    <a href="#" v-show="links.prev != null" @click="currentPage-=1"
                        class="relative inline-flex items-center rounded-l-md border border-gray-300 bg-white px-2 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">

                        <span class="sr-only">Previous</span>
                        <!-- Heroicon name: mini/chevron-left -->
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <!-- Current: "z-10 bg-indigo-50 border-indigo-500 text-indigo-600", Default: "bg-white border-gray-300 text-gray-500 hover:bg-gray-50" -->
                    <a href="#" aria-current="page"
                        class="relative  z-10 inline-flex pag items-center border bg-indigo-50 px-4 py-2 text-sm font-medium text-indigo-600 focus:z-20"
                        v-for="pages in meta.last_page" :key="pages.id" :value="pages"
                        :class=" pages === meta.current_page ? 'border-indigo-500': ''"
                        @click="currentPage = pages">{{pages}}</a>
                    <!-- <a href="#"
                        class="relative inline-flex items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">2</a> -->
                    <a href="#" v-show="links.next != null" @click="currentPage+=1"
                        class="relative disabled inline-flex items-center rounded-r-md border border-gray-300 bg-white px-2 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">
                        <span class="sr-only">Next</span>
                        <!-- Heroicon name: mini/chevron-right -->
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </nav>
            </div>
        </div>
    </div>

</template>

<script>
import axios from 'axios';

export default {
    name: "StudentTable",
    data() {
        return {
            students: {},
            meta: {},
            links: {},
            currentPage: 1,
            gradeIdList:{},
            gradeId: '',
            code:''
        }
    },
    watch: {
        currentPage(newVal) {
            this.getStudents(newVal)
        },
        gradeId(){
            this.getStudents()
        },
        code(){
            this.getStudents()
        }
    },
    methods: {
        async getStudents(page = '') {
            let result = await axios.get('api/students/all?page=' + page + '&grade_id=' + this.gradeId + '&code=' + this.code);
            this.students = result.data.data
            this.meta = result.data.meta
            this.links = result.data.links
            console.log(result.data)
        },
       async getGradeIds(){
            let result = await axios.get('api/grades/id')
            this.gradeIdList = result.data.data
        }
    },
    computed: {

    },
    mounted() {
        this.getStudents();
        this.getGradeIds();
    }
}
</script>
