<x-layout>
    <x-slot:heading>Expenses</x-slot:heading>
    <form action="/expenses/{{ $expense->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="my-2">
            <label for="source">Name of Expense:</label>
            <input class="border border-gray-400 rounded-2xl py-2 px-2" type="text" name="name" id="name"
                value="{{ $expense->name }}">

            <x-input-error :messages="$errors->get('name')" />
        </div>

        <div class="my-2">
            <label for="amount">Amount:</label>
            <input class="border border-gray-400 rounded-2xl py-2 px-2" type="text" name="amount" id="amount"
                value="{{ $expense->amount }}">

            <x-input-error :messages="$errors->get('amount')" />
        </div>
        <button type="submit" class="py-2 px-2 bg-green-500 text-white cursor-pointer">Submit</button>
    </form>
</x-layout>
