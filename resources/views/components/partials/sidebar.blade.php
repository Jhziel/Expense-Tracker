<x-sidebar-link href="/" :active="request()->is('/')">Dashboard</x-sidebar-link>
<x-sidebar-link href="/budgets" :active="request()->is('budgets')">Budget</x-sidebar-link>
<x-sidebar-link href="/expenses" :active="request()->is('expenses')">Expenses</x-sidebar-link>
