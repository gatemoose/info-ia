<header class='container-fluid'>
    <section>
        {{ $slot }}
    </section>
    <h6>
        {{ $title ?? 'undefined' }}
    </h6>
    <div class='grid'>
        <small>
            <strong>
                Autor:
            </strong>
        </small>
        <small style='text-align: right;'>
            <strong>
                Publicado em:
            </strong>
        </small>
    </div>
    <div class='grid'>
        <small>
            {{ $author ?? 'undefined' }}
        </small>
        <small style='text-align: right;'>
            {{ $date ?? 'undefined' }}
        </small>
    </div>
</header>