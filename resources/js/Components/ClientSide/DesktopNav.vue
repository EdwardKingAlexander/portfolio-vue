<template>
    <div class="pt-6 pb-3 bg-gray-900">
        <nav
            class="relative flex items-center justify-between px-4 mx-auto max-w-7xl sm:px-6"
            aria-label="Global"
        >
            <div class="flex items-center flex-1">
                <div class="flex items-center justify-between w-full md:w-auto">
                    <a href="/">
                        <span class="sr-only">Rocky Mountain Web Design LLC</span>
                        <img
                            class="w-auto h-10 sm:h-10"
                            src="/img/whitelogo.png"
                            alt="Company Logo"
                        />
                    </a>
                    <div class="flex items-center -mr-2 md:hidden">
                        <button
                            @click="toggleMobileNav"
                            type="button"
                            class="inline-flex items-center justify-center p-2 text-gray-400 bg-gray-900 rounded-md hover:bg-gray-800 focus:outline-none focus:ring-2 focus-ring-inset focus:ring-white"
                            aria-expanded="false"
                        >
                            <span class="sr-only">Open main menu</span>
                            <!-- Heroicon name: outline/menu -->
                            <svg
                                class="w-6 h-6"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                aria-hidden="true"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16"
                                />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="hidden space-x-8 md:flex md:ml-10">
                    <a
                        href="#"
                        class="text-base font-medium text-white hover:text-gray-300"
                        >Product</a
                    >

                    <a
                        href="#"
                        class="text-base font-medium text-white hover:text-gray-300"
                        >Services</a
                    >

                    <a
                        href="#"
                        class="text-base font-medium text-white hover:text-gray-300"
                        >Marketplace</a
                    >

                    <a
                        href="#"
                        class="text-base font-medium text-white hover:text-gray-300"
                        >Company</a
                    >
                </div>
            </div>

            <div v-if="canLogin !== isAdmin">
                <Link
                    v-if="$page.props.auth.user"
                    :href="route('dashboard')"
                    class="hidden text-white md:flex md:items-center hover:text-gray-300 md:space-x-6"
                >
                    Dashboard
                </Link>

                <template v-else>
                    <div class="hidden md:flex md:items-center md:space-x-6">
                        <Link
                            :href="route('login')"
                            class="text-base font-medium text-white hover:text-gray-300"
                        >
                            Log in
                        </Link>

                        <Link
                            v-if="canRegister"
                            :href="route('register')"
                            class="inline-flex items-center px-4 py-2 text-base font-medium text-white bg-gray-600 border border-transparent rounded-md hover:bg-gray-700"
                        >
                            Register
                        </Link>
                    </div>
                </template>
            </div>
        </nav>
    </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";

export default {
    components: {
        Link
    },
     props: {
        canLogin: Boolean,
        canRegister: Boolean,
        isAdmin: Boolean
    },
    methods: {
        toggleMobileNav()
        {
            this.$emit('toggleMobileNav');
        }
    }
}
</script>
