<template>
    <div>
        <div class="min-h-screen bg-gray-100">
            <nav
                :class="
                    dark.enabled
                        ? `${dark.backgroundColor} ${dark.textColor} ${dark.borderColor}`
                        : 'bg-white border-b border-gray-100'
                "
            >
                <!-- Primary Navigation Menu -->
                <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16">
                        <div class="flex">
                            <!-- Logo -->
                            <div class="flex items-center flex-shrink-0">
                                <Link href="/">
                                    <BreezeApplicationLogo
                                        class="block w-auto h-9"
                                    />
                                </Link>
                            </div>

                            <!-- Navigation Links -->
                            <div
                                class="
                                    hidden
                                    space-x-8
                                    sm:-my-px sm:ml-10 sm:flex
                                "
                            >
                                <BreezeNavLink
                                    :darkMode="dark.enabled"
                                    :href="route('admin.dashboard')"
                                    :active="route().current('admin.dashboard')"
                                >
                                    Dashboard
                                </BreezeNavLink>

                                <BreezeNavLink
                                    :darkMode="dark.enabled"
                                    :href="route('admin.projects.index')"
                                    :active="
                                        $page.url.startsWith('/admin/projects')
                                    "
                                >
                                    Project Manager
                                </BreezeNavLink>

                                <BreezeNavLink
                                    :darkMode="dark.enabled"
                                    :href="route('admin.crm.index')"
                                    :active="
                                        $page.url.startsWith('/admin/crm')
                                    "
                                >
                                    CRM
                                </BreezeNavLink>

                                 <BreezeNavLink
                                    :darkMode="dark.enabled"
                                    
                                    :active="
                                        $page.url.startsWith('/admin/inventory')
                                    "
                                >
                                    Inventory
                                </BreezeNavLink>

                                
                                
                            </div>
                        </div>

                        <div class="hidden sm:flex sm:items-center sm:ml-6">
                            <!-- Settings Dropdown -->
                            <div class="relative ml-3">
                                <BreezeDropdown
                                    :darkMode="dark.enabled"
                                    align="right"
                                    width="48"
                                >
                                    <template #trigger>
                                        <span class="inline-flex rounded-md">
                                            <button
                                                type="button"
                                                :class="
                                                    `
                                                    ${
                                                        dark.enabled
                                                            ? dark.darkButton
                                                            : dark.lightButton
                                                    }` +
                                                    styles.desktop.base.button
                                                "
                                            >
                                                {{ $page.props.auth.user.name }}

                                                <svg
                                                    class="ml-2 -mr-0.5 h-4 w-4"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20"
                                                    fill="currentColor"
                                                >
                                                    <path
                                                        fill-rule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                        clip-rule="evenodd"
                                                    />
                                                </svg>
                                            </button>
                                        </span>
                                    </template>

                                    <!-- 

    Dropdown Desktop
 -->

                                    <template #content>
                                        <button
                                            :class="
                                                `${dark.enabled ? '' : ''} ` +
                                                styles.desktop.base.dropdownLink
                                            "
                                            @click.prevent="toggleDarkMode"
                                        >
                                            {{
                                                dark.enabled
                                                    ? "Toggle Light Mode"
                                                    : "Toggle Dark Mode"
                                            }}
                                        </button>
                                        <BreezeDropdownLink
                                            :href="route('logout')"
                                            method="post"
                                            as="button"
                                        >
                                            Log Out
                                        </BreezeDropdownLink>
                                    </template>
                                </BreezeDropdown>
                            </div>
                        </div>

                        <!-- 

                            Mobile Navigation Menu
                         -->

                        <!-- Hamburger -->
                        <div class="flex items-center -mr-2 sm:hidden">
                            <button
                                @click="
                                    showingNavigationDropdown =
                                        !showingNavigationDropdown
                                "
                                class="
                                    inline-flex
                                    items-center
                                    justify-center
                                    p-2
                                    text-gray-400
                                    transition
                                    duration-150
                                    ease-in-out
                                    rounded-md
                                    hover:text-gray-500 hover:bg-gray-100
                                    focus:outline-none
                                    focus:bg-gray-100
                                    focus:text-gray-500
                                "
                            >
                                <svg
                                    class="w-6 h-6"
                                    stroke="currentColor"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        :class="{
                                            hidden: showingNavigationDropdown,
                                            'inline-flex':
                                                !showingNavigationDropdown,
                                        }"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16"
                                    />
                                    <path
                                        :class="{
                                            hidden: !showingNavigationDropdown,
                                            'inline-flex':
                                                showingNavigationDropdown,
                                        }"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"
                                    />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Responsive Navigation Menu -->
                <div
                    :class="{
                        block: showingNavigationDropdown,
                        hidden: !showingNavigationDropdown,
                    }"
                    class="sm:hidden"
                >
                    <div class="pt-2 pb-3 space-y-1">
                        <BreezeResponsiveNavLink
                            :href="route('admin.dashboard')"
                            :active="route().current('admin.dashboard')"
                        >
                            Dashboard
                        </BreezeResponsiveNavLink>

                        <BreezeResponsiveNavLink
                            :href="route('admin.projects.index')"
                            :active="$page.url.startsWith('/admin/projects')"
                        >
                            Projects
                        </BreezeResponsiveNavLink>

                        <BreezeResponsiveNavLink
                            :href="route('admin.crm.index')"
                            :active="$page.url.startsWith('/admin/crm')"
                        >
                            CRM
                        </BreezeResponsiveNavLink>
                    </div>

                    <!-- Responsive Settings Options -->
                    <div class="pt-4 pb-1 border-t border-gray-200">
                        <div class="px-4">
                            <div class="text-base font-medium text-gray-800">
                                {{ $page.props.auth.user.name }}
                            </div>
                            <div class="text-sm font-medium text-gray-500">
                                {{ $page.props.auth.user.email }}
                            </div>
                        </div>

                        <div class="mt-3 space-y-1">
                            <BreezeResponsiveNavLink
                                :href="route('logout')"
                                method="post"
                                as="button"
                            >
                                Log Out
                            </BreezeResponsiveNavLink>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Page Heading -->
            <header
                :darkMode="dark.enabledTwo"
                :class="dark.enabled ? 'bg-gray-700' : 'bg-white' + ' shadow'"
                v-if="$slots.header"
            >
                <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <slot name="header" />
                </div>
            </header>

            <!-- Page Content -->
            <main>
                <slot />
            </main>
        </div>
    </div>
</template>

<script>
import BreezeApplicationLogo from "@/Components/ApplicationLogo.vue";
import BreezeDropdown from "@/Components/Dropdown.vue";
import BreezeDropdownLink from "@/Components/DropdownLink.vue";
import BreezeNavLink from "@/Components/NavLink.vue";
import BreezeResponsiveNavLink from "@/Components/ResponsiveNavLink.vue";
import { Link } from "@inertiajs/inertia-vue3";

export default {
    components: {
        BreezeApplicationLogo,
        BreezeDropdown,
        BreezeDropdownLink,
        BreezeNavLink,
        BreezeResponsiveNavLink,
        Link,
    },
    data() {
        return {
            showingNavigationDropdown: false,

            dark: {
                enabled: JSON.parse(localStorage.getItem("darkMode")),
                enabledTwo: true,
                backgroundColor: "bg-gray-800",
                textColor: "text-white",
                borderColor: " border-white",
                lightButton: `bg-white text-gray-500 hover:text-gray-700 `,
                darkButton: `bg-gray-800 text-white hover:bg-white hover:text-gray-700`,
            },
            styles: {
                desktop: {
                    base: {
                        button: " inline-flex items-center px-3 py-2 text-sm font-medium leading-4 transition duration-150 ease-in-out border border-transparent rounded-md focus:outline-none",
                        dropdownLink:
                            " block w-full px-4 py-2 text-left text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out",
                    },
                },
                mobile: {
                    base: {
                        dropdownLink: "",
                    },
                },
            },
        };
    },
    methods: {
        toggleDarkMode() {
            this.dark.enabled = !this.dark.enabled;
            localStorage.setItem("darkMode", this.dark.enabled);
        },
    },
    beforeCreate() {
        if (localStorage.getItem("darkMode") === null) {
            localStorage.setItem("darkMode", "false");
        } else {
            localStorage.getItem("darkMode");
        }
    },
};
</script>
