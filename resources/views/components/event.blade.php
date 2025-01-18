<header>
    <a href="{{ $url ?? 'google.com' }}">
        <section>
            {{ $slot }}
        </section>
    </a>
    <div class='grid'>
        <h4>
            {{ $title ?? 'undefined' }}
        </h4>
        <p style='text-align: right;'>
            {{ $date ?? '00/00/0000' }}
        </p>
    </div>
</header>