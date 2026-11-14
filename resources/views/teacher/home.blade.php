<x-layout>
    <div>
        <h1>Hey {{ Auth::user()->name }}, You're the {{ Auth::user()->role }}</h1>
    </div>
</x-layout>
