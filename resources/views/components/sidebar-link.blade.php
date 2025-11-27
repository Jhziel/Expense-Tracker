@props(['active' => false])
<a class="{{ $active ? 'bg-slate-950' : '' }} py-2 px-2 hover:bg-slate-950 text-center text-white block mb-2"
    {{ $attributes }}>
    {{ $slot }}
</a>
