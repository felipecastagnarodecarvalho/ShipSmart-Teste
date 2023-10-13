<!-- resources/js/views/Home.vue -->
<template>
    <div class="flex justify-center items-center h-screen">
        <Card>
            <!-- Card content -->
            <h1 class="text-3xl font-semibold mb-4">Welcome to My Vue Card!</h1>
            <p class="text-gray-600">Thanks for seeing this!</p>
        </Card>
    </div>
</template>

<script>
import Card from "./Card.Vue";

export default {
    components: {
        Card,
    },
};
</script>
