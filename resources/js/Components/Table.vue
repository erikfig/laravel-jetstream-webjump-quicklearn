<template>
    <table class="min-w-full table-fixed divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th
                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                    v-for="(h, index) in head" :key="index">{{ h.label }}</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            <tr v-for="(b, index) in body" :key="index" class="bg-white hover:bg-gray-50 transition">
                <td
                    :class="`px-6 py-4 whitespace-nowrap text-sm text-gray-900 ${h.classBody || ''}`"
                    v-for="(h, index) in head" :key="index">
                        <slot :name="`field-${h.field}`" v-bind:fields="b">
                            {{ b[h.field] }}
                        </slot>
                </td>
            </tr>
        </tbody>
    </table>
</template>

<script>
    export default {
        props: [
            'head',
            'body',
        ]
    }
</script>

<style lang="scss" scoped>

</style>