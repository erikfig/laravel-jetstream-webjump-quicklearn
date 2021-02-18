<template>
    <button :type="type" :class="`inline-flex items-center bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray transition ease-in-out duration-150 ${sizeClass}`">
        <slot></slot>
    </button>
</template>

<script>
    export default {
        props: {
            type: {
                type: String,
                default: 'submit',
            },
            size: {
                type: String,
                default: 'medium',
            },
        },
        data() {
            return {
                sizeClass: 'px-4 py-2'
            }
        },
        mounted() {
            switch (this.size) {
                case 'min':
                    this.sizeClass = 'px-2 py-1';
                    break;
                case 'max':
                    this.sizeClass = 'px-6 py-3';
                    break;
            }
        },
    }
</script>
