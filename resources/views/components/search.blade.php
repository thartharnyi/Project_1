<x-layout>
    <form action="/" method="GET">
            <input type="text" placeholder="search here...." name="search" value="{{ request('search') }}">
            <button type="submit">Search</button>
        </form>
</x-layout>