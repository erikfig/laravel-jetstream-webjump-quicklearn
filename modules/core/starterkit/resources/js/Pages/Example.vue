<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Test') }}
            </h2>
        </template>

        <v-card>
            <v-table :head="head" :body="body" >
                <template v-slot:field-action="props">
                    <v-button size="min" @click.native="execute(props.fields)">ver</v-button>
                </template>
            </v-table>
        </v-card>

        <v-card padding>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic neque sunt consectetur cupiditate id praesentium nisi aut vero, sequi autem aperiam accusantium itaque pariatur quaerat doloribus, enim maxime maiores iusto?</p>
        </v-card>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout';
    import VButton from '@/Components/Button';
    import VCard from '@/Components/Card';
    import VTable from '@/Components/Table';

    export default {
        components: {
            AppLayout,
            VButton,
            VCard,
            VTable,
        },
        data() {
            return {
                head: [
                    {
                        field: 'id',
                        label: '#',
                    },
                    {
                        field: 'name',
                        label: this.__('Name'),
                    },
                    {
                        field: 'action',
                        label: '',
                        classBody: 'text-right',
                    },
                ],
                body: [
                    {
                        id: 1,
                        name: 'Erik',
                    },
                    {
                        id: 2,
                        name: 'Erik 2',
                    },
                    {
                        id: 3,
                        name: 'Erik 3',
                    },
                ],
            };
        },
        methods: {
            execute(fields) {
                console.log('object :>> ', fields);
            }
        },
    };
</script>

<style lang="scss" scoped>

</style>