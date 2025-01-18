<x-layout title='Info IA' theme='dark'>
    <x-navigation>
        <x-nav-link url='/'>Home</x-nav-link>
        <x-nav-link url='/posts'>Notícias</x-nav-link>
        <x-nav-link url='/eventos'>Eventos</x-nav-link>
        <x-nav-link url='/livros'>Livros</x-nav-link>
    </x-navigation>

    @foreach ($posts->chunk(3) as $chunk)
        <x-posts>
            @foreach ($chunk as $post)
                <x-post title='{{ $post->title }}' url='{{ $post->url }}' img='{{ Storage::url($post->img_path) }}'>
                    {{ $post->description }}
                </x-post>
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