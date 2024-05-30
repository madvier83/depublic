<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
    </style>

    <title>{{ $title }}</title>
</head>

<body class="bg-gray-300 min-h-screen">
    {{ $slot }}


    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>

</html>
