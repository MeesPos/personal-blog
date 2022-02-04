<template>
    <Head :title="title" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ title }}
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <slot />
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>

<script>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated";
import {Head} from "@inertiajs/inertia-vue3";

export default {
    name: "DashboardBody",
    components: {
        BreezeAuthenticatedLayout,
        Head,
    },
    props: {
        title: {
            type: String,
            required: true
        }
    }
}
</script>
