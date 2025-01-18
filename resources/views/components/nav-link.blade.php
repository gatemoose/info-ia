<li>
    <a href="{{ $url ?? '#' }}" wire:navigate>
        {{ $slot ?? 'undefined' }}
    </a>
</li>