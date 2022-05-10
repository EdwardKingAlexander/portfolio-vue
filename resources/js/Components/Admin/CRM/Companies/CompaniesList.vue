<template>
    <!--
  This example requires updating your template:
  ```
  <html class="h-full bg-white">
  <body class="h-full">
  ```
-->
    <div class="min-h-full">
        <!-- Page heading -->
        <header class="bg-gray-50 py-8">
            <div
                class="
                    max-w-7xl
                    mx-auto
                    px-4
                    sm:px-6
                    lg:px-8
                    xl:flex xl:items-center xl:justify-between
                "
            >
                <div class="flex-1 min-w-0">
                    <nav class="flex" aria-label="Breadcrumb">
                        <ol role="list" class="flex items-center space-x-4">
                            <li>
                                <div>
                                    <a
                                        :href="
                                            route('admin.crm.companies.index')
                                        "
                                        class="
                                            text-sm
                                            font-medium
                                            text-gray-500
                                            hover:text-gray-700
                                        "
                                        >Companies</a
                                    >
                                </div>
                            </li>
                        </ol>
                    </nav>

                    <button
                        @click="addCompany"
                        class="
                            p-2
                            m-2
                            text-white
                            mt-2
                            text-2xl
                            font-semibold
                            leading-7
                            sm:text-3xl sm:truncate
                            bg-blue-400
                            border-2 border-opacity-50 border-blue-200
                            rounded
                            hover:text-blue-400
                            hover:bg-white
                            hover:border-blue-400
                            hover:font-bold
                        "
                    >
                        Add a New Company
                    </button>
                </div>
                <div>
                    <label
                        for="email"
                        class="block text-sm font-medium text-gray-700"
                        >Search companies</label
                    >
                    <div class="mt-1 flex rounded-md shadow-sm">
                        <div
                            class="
                                relative
                                flex
                                items-stretch
                                flex-grow
                                focus-within:z-10
                            "
                        >
                            <div
                                class="
                                    absolute
                                    inset-y-0
                                    left-0
                                    pl-3
                                    flex
                                    items-center
                                    pointer-events-none
                                "
                            >
                                <!-- Heroicon name: solid/users -->
                                <svg
                                    class="h-5 w-5 text-gray-400"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                    aria-hidden="true"
                                >
                                    <path
                                        d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"
                                    />
                                </svg>
                            </div>
                            <input
                                type="company_name"
                                name="company_name"
                                id="company_name"
                                class="
                                    focus:ring-blue-500 focus:border-blue-500
                                    block
                                    w-full
                                    rounded-none rounded-l-md
                                    pl-10
                                    sm:text-sm
                                    border-gray-300
                                "
                                placeholder="Company Name"
                            />
                        </div>
                        <button
                            type="button"
                            class="
                                -ml-px
                                relative
                                inline-flex
                                items-center
                                space-x-2
                                px-4
                                py-2
                                border border-gray-300
                                text-sm
                                font-medium
                                rounded-r-md
                                text-gray-700
                                bg-gray-50
                                hover:bg-gray-100
                                focus:outline-none
                                focus:ring-1
                                focus:ring-blue-500
                                focus:border-blue-500
                            "
                        >
                            <!-- Heroicon name: solid/sort-ascending -->
                            <svg
                                class="h-5 w-5 text-gray-400"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                aria-hidden="true"
                            >
                                <path
                                    d="M3 3a1 1 0 000 2h11a1 1 0 100-2H3zM3 7a1 1 0 000 2h5a1 1 0 000-2H3zM3 11a1 1 0 100 2h4a1 1 0 100-2H3zM13 16a1 1 0 102 0v-5.586l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 101.414 1.414L13 10.414V16z"
                                />
                            </svg>
                            <span>Sort</span>
                        </button>
                    </div>
                </div>
            </div>
        </header>

        <main class="pt-8 pb-16">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="px-4 sm:px-0">
                    <h2 class="text-lg font-medium text-gray-900">Client List</h2>
                </div>

                <!-- Stacked list -->
                <ul
                    role="list"
                    class="
                        mt-5
                        border-t border-gray-200
                        divide-y divide-gray-200
                        sm:mt-0 sm:border-t-0
                    "
                >
                    <li v-for="company in companies" :key="company.id">
                        <div class="group block">
                            <div
                                class="
                                    flex
                                    items-center
                                    py-5
                                    px-4
                                    sm:py-6 sm:px-0
                                "
                            >
                                <div class="min-w-0 flex-1 flex items-center">
                                    <div
                                        class="
                                            min-w-0
                                            flex-1
                                            px-4
                                            md:grid md:grid-cols-2 md:gap-4
                                        "
                                    >
                                        <div>
                                            <p
                                                class="
                                                    text-lg
                                                    font-bold
                                                    text-purple-600
                                                    pb-3
                                                "
                                            >
                                                <a
                                                    :href="
                                                        route(
                                                            'admin.crm.companies.show',
                                                            company.slug
                                                        )
                                                    "
                                                    >{{
                                                        company.company_name
                                                    }}: </a
                                                >
                                                
                                                
                                            </p>

                                            <p
                                                class="
                                                    text-lg
                                                    font-bold
                                                    text-blue-400
                                                    pb-3
                                                "
                                            >
                                                <a
                                                    :href="
                                                       company.url    
                                                    "
                                                    >{{
                                                        company.url
                                                    }}: </a
                                                >
                                                
                                                
                                            </p>
                                            <p  class="
                                                    text-sm
                                                    font-semibold
                                                    text-blue-600
                                                ">
                                                <a 
                                                    :href="`tel:${company.phone}`">
                                                    {{ company.phone }}
                                                    </a>
                                            </p>
                                            <p
                                                class="
                                                    mt-2
                                                    flex
                                                    items-center
                                                    text-sm text-gray-500
                                                "
                                            >
                                                <!-- Heroicon name: solid/mail -->
                                                <svg
                                                    class="
                                                        flex-shrink-0
                                                        mr-1.5
                                                        h-5
                                                        w-5
                                                        text-gray-400
                                                    "
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20"
                                                    fill="currentColor"
                                                    aria-hidden="true"
                                                >
                                                    <path
                                                        d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"
                                                    />
                                                    <path
                                                        d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"
                                                    />
                                                </svg>
                                                <span>
                                                    <a
                                                        :href="`mailto:${company.email_address}`"
                                                        >{{
                                                            company.email_address
                                                        }}</a
                                                    >
                                                </span>
                                            </p>
                                        </div>
                                        <div class="hidden md:block">
                                            <div>
                                                <p
                                                    class="
                                                        text-sm text-gray-900
                                                    "
                                                >
                                                    Last Contacted on:
                                                    <time
                                                        datetime="2020-07-01T15:34:56"
                                                        >{{
                                                            company.last_contact
                                                        }}</time
                                                    >
                                                </p>
                                                <p
                                                    v-if="company.is_customer"
                                                    class="
                                                        mt-2
                                                        flex
                                                        items-center
                                                        text-sm text-gray-500
                                                    "
                                                >
                                                    <!-- Heroicon name: solid/check-circle -->
                                                    <svg
                                                        class="
                                                            flex-shrink-0
                                                            mr-1.5
                                                            h-5
                                                            w-5
                                                            text-green-400
                                                        "
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 20 20"
                                                        fill="currentColor"
                                                        aria-hidden="true"
                                                    >
                                                        <path
                                                            fill-rule="evenodd"
                                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                            clip-rule="evenodd"
                                                        />
                                                    </svg>
                                                    Currently, a customer
                                                </p>
                                                <p
                                                    v-else
                                                    class="
                                                        mt-2
                                                        flex
                                                        items-center
                                                        text-sm text-gray-500
                                                    "
                                                >
                                                    <svg
                                                        class="
                                                            flex-shrink-0
                                                            mr-1.5
                                                            h-5
                                                            w-5
                                                            text-red-400
                                                        "
                                                        fill="none"
                                                        stroke="currentColor"
                                                        viewBox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <path
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"
                                                        ></path>
                                                    </svg>
                                                    Not currently, a customer
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <!-- Heroicon name: solid/chevron-right -->
                                    <svg
                                        class="
                                            h-5
                                            w-5
                                            text-gray-400
                                            group-hover:text-gray-700
                                        "
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20"
                                        fill="currentColor"
                                        aria-hidden="true"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd"
                                        />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- More candidates... -->
                </ul>

                <!-- Pagination -->
                <nav
                    class="
                        border-t border-gray-200
                        px-4
                        flex
                        items-center
                        justify-between
                        sm:px-0
                    "
                    aria-label="Pagination"
                >
                    <div class="-mt-px w-0 flex-1 flex">
                        <a
                            href="#"
                            class="
                                border-t-2 border-transparent
                                pt-4
                                pr-1
                                inline-flex
                                items-center
                                text-sm
                                font-medium
                                text-gray-500
                                hover:text-gray-700 hover:border-gray-200
                            "
                        >
                            <!-- Heroicon name: solid/arrow-narrow-left -->
                            <svg
                                class="mr-3 h-5 w-5 text-gray-400"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                aria-hidden="true"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                            Previous
                        </a>
                    </div>
                    <div class="hidden md:-mt-px md:flex">
                        <a
                            href="#"
                            class="
                                border-transparent
                                text-gray-500
                                hover:text-gray-700 hover:border-gray-200
                                border-t-2
                                pt-4
                                px-4
                                inline-flex
                                items-center
                                text-sm
                                font-medium
                            "
                        >
                            1
                        </a>
                        <!-- Current: "border-purple-500 text-purple-600", Default: "border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-200" -->
                        <a
                            href="#"
                            class="
                                border-purple-500
                                text-purple-600
                                border-t-2
                                pt-4
                                px-4
                                inline-flex
                                items-center
                                text-sm
                                font-medium
                            "
                            aria-current="page"
                        >
                            2
                        </a>
                        <a
                            href="#"
                            class="
                                border-transparent
                                text-gray-500
                                hover:text-gray-700 hover:border-gray-200
                                border-t-2
                                pt-4
                                px-4
                                inline-flex
                                items-center
                                text-sm
                                font-medium
                            "
                        >
                            3
                        </a>
                        <a
                            href="#"
                            class="
                                border-transparent
                                text-gray-500
                                hover:text-gray-700 hover:border-gray-200
                                border-t-2
                                pt-4
                                px-4
                                inline-flex
                                items-center
                                text-sm
                                font-medium
                            "
                        >
                            4
                        </a>
                        <a
                            href="#"
                            class="
                                border-transparent
                                text-gray-500
                                hover:text-gray-700 hover:border-gray-200
                                border-t-2
                                pt-4
                                px-4
                                inline-flex
                                items-center
                                text-sm
                                font-medium
                            "
                        >
                            5
                        </a>
                        <a
                            href="#"
                            class="
                                border-transparent
                                text-gray-500
                                hover:text-gray-700 hover:border-gray-200
                                border-t-2
                                pt-4
                                px-4
                                inline-flex
                                items-center
                                text-sm
                                font-medium
                            "
                        >
                            6
                        </a>
                    </div>
                    <div class="-mt-px w-0 flex-1 flex justify-end">
                        <a
                            href="#"
                            class="
                                border-t-2 border-transparent
                                pt-4
                                pl-1
                                inline-flex
                                items-center
                                text-sm
                                font-medium
                                text-gray-500
                                hover:text-gray-700 hover:border-gray-200
                            "
                        >
                            Next
                            <!-- Heroicon name: solid/arrow-narrow-right -->
                            <svg
                                class="ml-3 h-5 w-5 text-gray-400"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                aria-hidden="true"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                        </a>
                    </div>
                </nav>
            </div>
        </main>
    </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";

export default {
    components: {
        Link,
    },
    props: {
        companies: Object,
    },
    methods: {
        addCompany() {
            this.$inertia.get("/admin/crm/companies/create");
        },
    },
};
</script>
