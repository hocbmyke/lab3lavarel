
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Додайте посилання на ваш файл стилів -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>
    <div class="navbar">
        <a href="/">Головна</a>
        <a href="/products">Перейти на вкладку з товарами</a>
        <a href="/clients">Перейти на вкладку з користувачами</a>
    </div>

    <div class="container">
        <!-- Вставте сюди зміст вміст 'content' -->
        @yield('content')
    </div>

    <!-- Додайте посилання на ваш файл скриптів, якщо необхідно -->
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>
