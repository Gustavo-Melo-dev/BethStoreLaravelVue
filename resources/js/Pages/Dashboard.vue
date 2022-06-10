<script>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Jetstream/Welcome.vue';

export default {
    components: {
        AppLayout,
        Welcome,
    },
    props: {
        message: String
    }
}
</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="flex justify-center">
                        <div v-if="$page.props.flash.message" class="bg-green-500 text-green-800">
                            {{ $page.props.flash.message }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
