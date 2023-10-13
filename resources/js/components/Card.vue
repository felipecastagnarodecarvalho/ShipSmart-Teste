<!-- resources/js/components/Card.vue -->
<template>
    <div class="bg-white rounded-lg shadow-md p-4">
        <!-- Card content goes here -->
        <slot></slot>
    </div>
</template>

<script>
export default {
    name: "Card",
};
</script>
