<x-layout>
    <x-slot:heading>Expenses</x-slot:heading>
    <div class="bg-white rounded-xl shadow-sm border border-gray-200 mb-8">
        <div class="px-6 py-4 border-b border-gray-200">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-lg font-semibold text-gray-900">Your All Expenses</h3>
                    <p class="text-gray-600 text-sm">Latest customer orders and transactions</p>
                </div>
                <div class="flex space-x-3">
                    <button
                        class="px-4 py-2 text-gray-600 border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors">
                        <i class="fas fa-download mr-2"></i>Export
                    </button>
                    <a href="/expenses/create"
                        class="px-4 py-2 bg-cordes-blue text-white rounded-lg hover:bg-cordes-dark transition-colors">
                        <i class="fas fa-plus mr-2"></i>Add Expenses
                    </a>
                </div>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Source</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Amount</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Date</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($expenses as $expense)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <img src="https://www.investopedia.com/thmb/NSwuyMYGVWCHVIi1AEoaPkdmMD0=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/Brand-loyalty_final-8ad57b86183e42348e18bc306c87778e.png"
                                        alt="Customer" class="w-8 h-8 rounded-full mr-3">
                                    <div>
                                        <div class="text-sm font-medium text-gray-900">{{ $expense->name }}</div>

                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                {{ $expense->amount }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $expense->created_at->format('F d, Y') }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex space-x-2">
                                    <button class="text-cordes-blue hover:text-cordes-dark">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <a href="/expenses/{{ $expense->id }}/edit"
                                        class="text-gray-600 hover:text-gray-900">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <button class="text-red-600 hover:text-red-900">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>

        </div>
    </div>
    <div class="mt-4">
        {{ $expenses->links() }}
    </div>


</x-layout>
