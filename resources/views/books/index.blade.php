<x-layout title='Livros' theme='dark'>
    <x-navigation>
        <x-nav-link url='/'>Home</x-nav-link>
        <x-nav-link url='/posts'>Notícias</x-nav-link>
        <x-nav-link url='/eventos'>Eventos</x-nav-link>
        <x-nav-link url='/livros'>Livros</x-nav-link>
    </x-navigation>

    @foreach($books->chunk(4) as $chunk)
        <x-posts>
            @foreach($chunk as $book)
                <x-book title='{{ $book->title }}' date='{{ $book->published_at }}' author='{{ $book->author }}'>
                    <img src="{{ Storage::url($book->img_path) }}" alt="">
                </x-book>
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