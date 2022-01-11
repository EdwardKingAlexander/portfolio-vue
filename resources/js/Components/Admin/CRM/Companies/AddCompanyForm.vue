<template>
    <div class="p-3 mt-3 mx-auto w-3/4">
        <form @submit.prevent="addCompany" class="space-y-8 divide-y divide-gray-200">
            <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5">
                <div>
                    <div>
                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                            New Company Information
                        </h3>
                    </div>

                    <div class="mt-6 sm:mt-5 space-y-6 sm:space-y-5">
                        
                        <div
                            class="
                                sm:grid
                                sm:grid-cols-3
                                sm:gap-4
                                sm:items-start
                                sm:border-t
                                sm:border-gray-200
                                sm:pt-5
                            "
                        >
                            <label
                                for="company_name"
                                class="
                                    block
                                    text-sm
                                    font-medium
                                    text-gray-700
                                    sm:mt-px sm:pt-2
                                "
                            >
                                Company Name
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <div class="max-w-lg flex rounded-md shadow-sm">
                                    
                                    <input
                                    v-model="form.companyName"
                                        type="text"
                                        name="company_name"
                                        id="company_name"
                                        autocomplete="company_name"
                                        required
                                        class="
                                            flex-1
                                            block
                                            w-full
                                            focus:ring-blue-500
                                            focus:border-blue-500
                                            min-w-0
                                            rounded-none rounded-r-md
                                            sm:text-sm
                                            border-gray-300
                                        "
                                    />
                                </div>
                            </div>
                        </div>

                        <div
                            class="
                                sm:grid
                                sm:grid-cols-3
                                sm:gap-4
                                sm:items-start
                                sm:border-t
                                sm:border-gray-200
                                sm:pt-5
                            "
                        >
                            <label
                                for="about"
                                class="
                                    block
                                    text-sm
                                    font-medium
                                    text-gray-700
                                    sm:mt-px sm:pt-2
                                "
                            >
                                About
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <textarea
                                v-model="form.about"
                                    id="about"
                                    name="about"
                                    rows="3"
                                    class="
                                        max-w-lg
                                        shadow-sm
                                        block
                                        w-full
                                        focus:ring-blue-500
                                        focus:border-blue-500
                                        sm:text-sm
                                        border border-gray-300
                                        rounded-md
                                    "
                                ></textarea>
                                <p class="mt-2 text-sm text-gray-500">
                                    Describe the business, their market, and target customers
                                </p>
                            </div>
                        </div>

                    </div>

                     <div class="mt-6 sm:mt-5 space-y-6 sm:space-y-5">
                        
                        <div
                            class="
                                sm:grid
                                sm:grid-cols-3
                                sm:gap-4
                                sm:items-start
                                sm:border-t
                                sm:border-gray-200
                                sm:pt-5
                            "
                        >
                            <label
                                for="company_name"
                                class="
                                    block
                                    text-sm
                                    font-medium
                                    text-gray-700
                                    sm:mt-px sm:pt-2
                                "
                            >
                                Company URL
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <div class="max-w-lg flex rounded-md shadow-sm">
                                    
                                    <input
                                    v-model="form.url"
                                        type="text"
                                        name="url"
                                        id="url"
                                        autocomplete="url"
                                        class="
                                            flex-1
                                            block
                                            w-full
                                            focus:ring-blue-500
                                            focus:border-blue-500
                                            min-w-0
                                            rounded-none rounded-r-md
                                            sm:text-sm
                                            border-gray-300
                                        "
                                    />
                                </div>
                            </div>
                        </div>

                        

                    </div>
                    
                </div>

                
                 
                    <div class="space-y-6 sm:space-y-5">
                  
                        <div
                            class="
                                sm:grid
                                sm:grid-cols-3
                                sm:gap-4
                                sm:items-start
                                sm:border-t
                                sm:border-gray-200
                                sm:pt-5
                            "
                        >
                            <label
                                for="slug"
                                class="
                                    block
                                    text-sm
                                    font-medium
                                    text-gray-700
                                    sm:mt-px sm:pt-2
                                "
                            >
                                Slug
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <input
                                v-model="form.slug"
                                    type="text"
                                    name="slug"
                                    id="slug"
                                    autocomplete="family-name"
                                    class="
                                        max-w-lg
                                        block
                                        w-full
                                        shadow-sm
                                        focus:ring-blue-500
                                        focus:border-blue-500
                                        sm:max-w-xs sm:text-sm
                                        border-gray-300
                                        rounded-md
                                    "
                                />
                            </div>
                        </div>


                           <div
                            class="
                                sm:grid
                                sm:grid-cols-3
                                sm:gap-4
                                sm:items-start
                                sm:border-t
                                sm:border-gray-200
                                sm:pt-5
                            "
                        >
                            <label
                                for="phone"
                                class="
                                    block
                                    text-sm
                                    font-medium
                                    text-gray-700
                                    sm:mt-px sm:pt-2
                                "
                            >
                                Phone
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <input
                                v-model="form.phone"
                                    type="text"
                                    name="phone"
                                    id="phone"
                                    class="
                                        max-w-lg
                                        block
                                        w-full
                                        shadow-sm
                                        focus:ring-blue-500
                                        focus:border-blue-500
                                        sm:max-w-xs sm:text-sm
                                        border-gray-300
                                        rounded-md
                                    "
                                />
                            </div>
                        </div>

                        <div
                            class="
                                sm:grid
                                sm:grid-cols-3
                                sm:gap-4
                                sm:items-start
                                sm:border-t
                                sm:border-gray-200
                                sm:pt-5
                            "
                        >
                            <label
                                for="phone"
                                class="
                                    block
                                    text-sm
                                    font-medium
                                    text-gray-700
                                    sm:mt-px sm:pt-2
                                "
                            >
                                Fax
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <input
                                v-model="form.fax"
                                    type="text"
                                    name="fax"
                                    id="fax"
                                    class="
                                        max-w-lg
                                        block
                                        w-full
                                        shadow-sm
                                        focus:ring-blue-500
                                        focus:border-blue-500
                                        sm:max-w-xs sm:text-sm
                                        border-gray-300
                                        rounded-md
                                    "
                                />
                            </div>
                        </div>

                        <div
                            class="
                                sm:grid
                                sm:grid-cols-3
                                sm:gap-4
                                sm:items-start
                                sm:border-t
                                sm:border-gray-200
                                sm:pt-5
                            "
                        >
                            <label
                                for="email"
                                class="
                                    block
                                    text-sm
                                    font-medium
                                    text-gray-700
                                    sm:mt-px sm:pt-2
                                "
                            >
                                Email address
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <input
                                v-model="form.emailAddress"
                                    id="email"
                                    name="email"
                                    type="email"
                                    autocomplete="email"
                                    class="
                                        block
                                        max-w-lg
                                        w-full
                                        shadow-sm
                                        focus:ring-blue-500
                                        focus:border-blue-500
                                        sm:text-sm
                                        border-gray-300
                                        rounded-md
                                    "
                                />
                            </div>
                        </div>

                   
                        <div
                            class="
                                sm:grid
                                sm:grid-cols-3
                                sm:gap-4
                                sm:items-start
                                sm:border-t
                                sm:border-gray-200
                                sm:pt-5
                            "
                        >
                            <label
                                for="street-address"
                                class="
                                    block
                                    text-sm
                                    font-medium
                                    text-gray-700
                                    sm:mt-px sm:pt-2
                                "
                            >
                                Street address
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <input
                                v-model="form.streetAddress"
                                    type="text"
                                    name="street-address"
                                    id="street-address"
                                    autocomplete="street-address"
                                    class="
                                        block
                                        max-w-lg
                                        w-full
                                        shadow-sm
                                        focus:ring-blue-500
                                        focus:border-blue-500
                                        sm:text-sm
                                        border-gray-300
                                        rounded-md
                                    "
                                />
                            </div>
                        </div>

                          <div
                            class="
                                sm:grid
                                sm:grid-cols-3
                                sm:gap-4
                                sm:items-start
                                sm:border-t
                                sm:border-gray-200
                                sm:pt-5
                            "
                        >
                            <label
                                for="phone"
                                class="
                                    block
                                    text-sm
                                    font-medium
                                    text-gray-700
                                    sm:mt-px sm:pt-2
                                "
                            >
                                Bill To Address
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <input
                                v-model="form.billToAddress"
                                    type="text"
                                    name="bill-to-address"
                                    id="bill-to-address"
                                    class="
                                        max-w-lg
                                        block
                                        w-full
                                        shadow-sm
                                        focus:ring-blue-500
                                        focus:border-blue-500
                                        sm:max-w-xs sm:text-sm
                                        border-gray-300
                                        rounded-md
                                    "
                                />
                            </div>
                        </div>

                        <div
                            class="
                                sm:grid
                                sm:grid-cols-3
                                sm:gap-4
                                sm:items-start
                                sm:border-t
                                sm:border-gray-200
                                sm:pt-5
                            "
                        >
                            <label
                                for="city"
                                class="
                                    block
                                    text-sm
                                    font-medium
                                    text-gray-700
                                    sm:mt-px sm:pt-2
                                "
                            >
                                City
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <input
                                v-model="form.city"
                                    type="text"
                                    name="city"
                                    id="city"
                                    autocomplete="address-level2"
                                    class="
                                        max-w-lg
                                        block
                                        w-full
                                        shadow-sm
                                        focus:ring-blue-500
                                        focus:border-blue-500
                                        sm:max-w-xs sm:text-sm
                                        border-gray-300
                                        rounded-md
                                    "
                                />
                            </div>
                        </div>

                        <div
                            class="
                                sm:grid
                                sm:grid-cols-3
                                sm:gap-4
                                sm:items-start
                                sm:border-t
                                sm:border-gray-200
                                sm:pt-5
                            "
                        >
                            <label
                                for="region"
                                class="
                                    block
                                    text-sm
                                    font-medium
                                    text-gray-700
                                    sm:mt-px sm:pt-2
                                "
                            >
                                State
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <input
                                v-model="form.state"
                                    type="text"
                                    name="region"
                                    id="region"
                                    autocomplete="address-level1"
                                    class="
                                        max-w-lg
                                        block
                                        w-full
                                        shadow-sm
                                        focus:ring-blue-500
                                        focus:border-blue-500
                                        sm:max-w-xs sm:text-sm
                                        border-gray-300
                                        rounded-md
                                    "
                                />
                            </div>
                        </div>

                        <div
                            class="
                                sm:grid
                                sm:grid-cols-3
                                sm:gap-4
                                sm:items-start
                                sm:border-t
                                sm:border-gray-200
                                sm:pt-5
                            "
                        >
                            <label
                                for="postal-code"
                                class="
                                    block
                                    text-sm
                                    font-medium
                                    text-gray-700
                                    sm:mt-px sm:pt-2
                                "
                            >
                                ZIP / Postal code
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <input
                                    v-model="form.zipCode"
                                    type="text"
                                    name="postal-code"
                                    id="postal-code"
                                    autocomplete="postal-code"
                                    class="
                                        max-w-lg
                                        block
                                        w-full
                                        shadow-sm
                                        focus:ring-blue-500
                                        focus:border-blue-500
                                        sm:max-w-xs sm:text-sm
                                        border-gray-300
                                        rounded-md
                                    "
                                />
                            </div>
                        </div>
                    </div>
              

                <div
                    class="
                        divide-y divide-gray-200
                        pt-8
                        space-y-6
                        sm:pt-10 sm:space-y-5
                    "
                >
                    
             
                </div>
            </div>

            <div class="pt-5">
                <div class="flex justify-end">
                    <button
                        type="button"
                        class="
                            bg-white
                            py-2
                            px-4
                            border border-gray-300
                            rounded-md
                            shadow-sm
                            text-sm
                            font-medium
                            text-gray-700
                            hover:bg-gray-50
                            focus:outline-none
                            focus:ring-2
                            focus:ring-offset-2
                            focus:ring-blue-500
                        "
                    >
                        Cancel
                    </button>
                    <button
                        type="submit"
                        class="
                            ml-3
                            inline-flex
                            justify-center
                            py-2
                            px-4
                            border border-transparent
                            shadow-sm
                            text-sm
                            font-medium
                            rounded-md
                            text-white
                            bg-blue-600
                            hover:bg-blue-700
                            focus:outline-none
                            focus:ring-2
                            focus:ring-offset-2
                            focus:ring-blue-500
                        "
                    >
                        Add New Company
                    </button>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
export default {
    data() {
        return {
            form: {
                companyName: null,
                about: null,
                slug: null,
                is_customer: null,
                last_contact: null,
                streetAddress: null,
                city: null,
                state: null,
                zipCode: null,
                emailAddress: null,
                url: null,
                phone: null,
                fax: null,
                billToAddress: null
            }
        }
    },
    methods: {
        addCompany() {
            this.$inertia.post('/admin/crm/companies', this.form);
        }
    }
}
</script>