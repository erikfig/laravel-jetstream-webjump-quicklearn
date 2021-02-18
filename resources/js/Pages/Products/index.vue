<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Products') }}
            </h2>
        </template>

        <v-card>
          <v-table :head="head" :body="body" />
        </v-card>
    </app-layout>
</template>

<script>
import VCard from '@/Components/Card';
import VTable from '@/Components/Table';
import AppLayout from '@/Layouts/AppLayout';

export default {
  props: ['products'],
  components: {
    AppLayout,
    VCard,
    VTable,
  },
  data() {
    const { __ } = this;

    return {
      head: [
        {
          field: 'id',
          label: '#'
        },
        {
          field: 'title',
          label: __('Title')
        },
        {
          field: 'price',
          label: __('Price')
        },
      ],
      body: this.products,
    };
  },
};
</script>
