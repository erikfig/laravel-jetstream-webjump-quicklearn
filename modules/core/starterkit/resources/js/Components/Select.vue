<template>
    <select class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" :value="value" @input="$emit('input', $event.target.value)" ref="input">
        <option v-for="option of options" :value="option.key" :key="option.key">{{ option.value }}</option>
    </select>
</template>

<script>
    export default {
        props: ['value', 'options'],

        methods: {
            focus() {
                this.$refs.input.focus()
            }
        }
    }
</script>

