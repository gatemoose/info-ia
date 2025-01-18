<!DOCTYPE html>
<html lang="pt_BR" data-theme="{{ $theme ?? 'light' }}"> <!-- light || dark -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        {{ $title ?? 'undefined' }}
    </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
</head>
<body>
    
{{ $slot }}

</body>
</html>