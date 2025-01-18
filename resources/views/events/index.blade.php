<x-layout title='Eventos' theme='dark'>
    <x-navigation>
        <x-nav-link url='/'>Home</x-nav-link>
        <x-nav-link url='/posts'>Notícias</x-nav-link>
        <x-nav-link url='/eventos'>Eventos</x-nav-link>
        <x-nav-link url='/livros'>Livros</x-nav-link>
    </x-navigation>

    @foreach ($events->chunk(2) as $chunk)
        <x-posts>
            @foreach ($chunk as $event)
                <x-event title='{{ $event->title }}' date='{{ $event->event_date }}' url='{{ $event->event_url }}'>
                    <img src="{{ Storage::url($event->img_path) }}" alt="{{ $event->title }}" width='100%' height='100%'>
                </x-event>
            @endforeach
        </x-posts>
    @endforeach

    <x-footer>
        <x-nav-link url='/'>Home</x-nav-link>
        <x-nav-link url='/posts'>Notícias</x-nav-link>
        <x-nav-link url='/eventos'>Eventos</x-nav-link>
        <x-nav-link url='/livros'>Livros</x-nav-link>
    </x-footer>

</x-layout>