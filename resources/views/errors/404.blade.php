<x-layout title='Erro 404' theme='dark'>
    <x-navigation>
        <x-nav-link url='/'>Home</x-nav-link>
        <x-nav-link url='/posts'>Notícias</x-nav-link>
        <x-nav-link url='/eventos'>Eventos</x-nav-link>
        <x-nav-link url='/livros'>Livros</x-nav-link>
    </x-navigation>

    <main class='grid container'>
        <div>
            <h1>
                Erro 404
            </h1>
            <p>
                Página não encontrada.
            </p>
        </div>
        <img src="{{ asset('ai-banner.wepb') }}" alt="A imagem  também tá dando erro!">
    </main>

    <x-footer>
        <x-nav-link url='/'>Home</x-nav-link>
        <x-nav-link url='/posts'>Notícias</x-nav-link>
        <x-nav-link url='/eventos'>Eventos</x-nav-link>
        <x-nav-link url='/livros'>Livros</x-nav-link>
    </x-footer>
</x-layout>