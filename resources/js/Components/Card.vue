<template>
    <div class="my-2">
        <div class="py-2 align-middle inline-block min-w-full">
            <div :class="`shadow overflow-hidden border-b border-gray-200 sm:rounded-lg bg-white${padding ? ' p-6': ''}`">
                <slot></slot>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            padding: {
                type: Boolean,
                default: false,
            },
        },
    }
</script>

<style lang="scss" scoped>

</style>