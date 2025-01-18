<x-layout title='Info IA' theme='dark'>

    <x-navigation>
        <x-nav-link url='/'>Home</x-nav-link>
        <x-nav-link url='/posts'>Notícias</x-nav-link>
        <x-nav-link url='/eventos'>Eventos</x-nav-link>
        <x-nav-link url='/livros'>Livros</x-nav-link>
    </x-navigation>

    <section class='container-fluid'>
        <center>
            <img src="img/ai-banner.webp" alt="Banner" height='100%' width='100%'>
        </center>
    </section>

    <x-section title='Notícias'>
        @foreach ($posts->chunk(3) as $chunk)
            <x-posts>
                @foreach ($chunk as $post)
                    <x-post title='{{ $post->title }}' url='{{ $post->url }}' img='{{ Storage::url($post->img_path) }}'>
                        {{ $post->description }}
                    </x-post>
                @endforeach
            </x-posts>
        @endforeach
    </x-section>

    <x-section title='Eventos'>
        <x-posts>
            @foreach ($events as $event)
                <x-event title='{{ $event->title }}' url='{{ $event->event_url }}' date='{{ $event->event_date }}'>
                    <center>
                        <img src="{{ Storage::url($event->img_path) }}" alt="{{ $event->title }}" width='1200px' height='900px'>
                    </center>
                </x-event>
            @endforeach
        </x-posts>
    </x-section>

    <x-section title='Livros'>
        <div class='grid container-fluid'>
            <div class='container'>
                Mergulhe no fascinante mundo da inteligência artificial! Descubra como essa tecnologia transforma nossa sociedade, revoluciona indústrias e molda o futuro. Com insights acessíveis e exemplos práticos, este livro é perfeito para iniciantes e entusiastas. Amplie seu conhecimento e esteja preparado para entender o impacto da IA na sua vida. Não perca essa oportunidade de aprender sobre o futuro hoje!
                
                Descubra os conceitos fundamentais da inteligência artificial, os avanços que já moldam nossa realidade e os dilemas éticos que acompanham essa revolução. Este livro oferece uma visão clara e instigante, ideal para quem quer entender como a IA transforma o presente e o futuro. Uma leitura essencial para curiosos e visionários!
            </div>
            <header class='grid'>
                @foreach ($books as $book)
                    <img src="{{ Storage::url($book->img_path) }}" alt="{{ $book->title }}" height='600px' width='400px'>
                @endforeach
            </header>
        </div>
    </x-section>

    <x-footer>
        <x-nav-link url='/'>Home</x-nav-link>
        <x-nav-link url='/posts'>Notícias</x-nav-link>
        <x-nav-link url='/eventos'>Eventos</x-nav-link>
        <x-nav-link url='/livros'>Livros</x-nav-link>
    </x-footer>

</x-layout>