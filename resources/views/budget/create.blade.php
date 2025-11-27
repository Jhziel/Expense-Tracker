<x-layout>
    <form action="/budgets" method="POST">
        @csrf
        <div class="my-2">
            <label for="source">Source of Budget:</label>
            <input class="border border-gray-400 rounded-2xl py-2 px-2" type="text" name="source" id="source">
        </div>

        <div class="my-2">
            <label for="amount">Amount:</label>
            <input class="border border-gray-400 rounded-2xl py-2 px-2" type="text" name="amount" id="amount">
        </div>
        <button type="submit" class="py-2 px-2 bg-green-500 text-white cursor-pointer">Submit</button>
    </form>
</x-layout>
