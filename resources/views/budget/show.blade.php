<x-layout>
    <div class="relative overflow-x-auto bg-neutral-primary shadow-xs rounded-base border border-default">
        <table class="w-full text-sm text-left rtl:text-right text-body">
            <thead class="text-sm text-body border-b border-default">
                <tr>
                    <th scope="col" class="px-6 py-3 bg-neutral-secondary-soft font-medium">
                        Source
                    </th>
                    <th scope="col" class="px-6 py-3 bg-neutral-secondary-soft font-medium">
                        Owner
                    </th>
                    <th scope="col" class="px-6 py-3 font-medium">
                        Amount
                    </th>
                    <th scope="col" class="px-6 py-3 bg-neutral-secondary-soft font-medium">
                        Action
                    </th>

                </tr>
            </thead>
            <tbody>

                <tr class="border-b border-default">
                    <td scope="row"
                        class="px-6 py-4 font-medium text-heading whitespace-nowrap bg-neutral-secondary-soft">
                        {{ $budget->source }}
                    </td>
                    <td scope="row"
                        class="px-6 py-4 font-medium text-heading whitespace-nowrap bg-neutral-secondary-soft">
                        {{ $budget->user->name }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $budget->amount }}
                    </td>
                    <td class="px-6 py-4 bg-neutral-secondary-soft">
                        <a href="/budget/{{ $budget['id'] }}" class="bg-blue-500 py-2 px-2 text-white">Edit</a>
                    </td>

                </tr>

            </tbody>
        </table>
    </div>
</x-layout>
