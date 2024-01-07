<x-layout>
        <x-song :songs="$songs" />

        @foreach ($songs as $song)
        <h2>{{ $song->title }}</h2>
        <p>{{ $song->body }}</p>

        <p>Composer - {{ $song->composer }}</p>
        <p>Singer - <a href="songs/{{ $song->singer->name }}">{{ $song->singer->name }}</a></p>
        <p>Categorization - <a href="songs/{{ $song->categorization->slug }}">{{ $song->categorization->slug }}</a></p>
        <p>Published_year - {{ $song->year }}</p>
        @endforeach
        {{ $songs->links() }}
</x-layout>