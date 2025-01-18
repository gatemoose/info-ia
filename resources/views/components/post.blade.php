<article>
    <a href="{{ $url ?? '#' }}">
        <section>
            <img src="{{ $img ?? 'img/ai-banner.webp' }}" alt="Post" width="100%" height='100%'>
        </section>
    </a>
    <hgroup>
        <h5>
            {{ $title ?? 'undefined' }}
        </h5>
        <h6>
            {{ $slot ?? 'undefined' }}
        </h6>
    </hgroup>
</article>