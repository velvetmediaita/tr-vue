<template>
    <div class="    mt-8 flex flex-col mx-8">
        <div>
            <h3 class="text-2xl mb-4">Products</h3>
        </div>

        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Quantity
                    </th>
                    <th scope="col" class="relative px-6 py-3">
                        <span class="sr-only">Action</span>
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <tr v-for="product in products">
                    <td class="px-6 py-4 whitespace-nowrap">
                        {{ product.quantity }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        {{ product.name }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                        <a href="#" class="text-indigo-600 hover:text-indigo-900 px-8 py-2 border rounded-md" @click="product.quantity += 1">+</a>
                        <a href="#" class="text-indigo-600 hover:text-indigo-900 px-8 py-2 border rounded-md" @click="product.quantity -= 1">-</a>
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3">
                       Total count: {{ countProducts }} 
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</template>

<script>
    export default {
        name: 'ProductTable',

        data: function() {
            return {
                products: [
                    {'name': 'Mouse', 'quantity': 1},
                    {'name': 'Tastiera', 'quantity': 1},
                    {'name': 'Monitor', 'quantity': 2},
                    {'name': 'Mouse', 'quantity': 1},
                    {'name': 'Mouse', 'quantity': 1},
                ],
            }
        },

        computed: {
            countProducts: function() {
                return this.products.reduce((sum, product) => {
                    return sum + product.quantity
                }, 0)
            }
        },

        // methods: {
        //     increment: function (product) {
        //         product.quantity += 1;
        //     },
        //     decrement: function (product) {
        //         data -= 1;
        //     }
        // }
    }

</script>

<style scoped>
    
</style>
