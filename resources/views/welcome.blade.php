<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>

    <button class="btn btn-primary">
        Test
    </button>
    <p class="text-primary">est</p>

    <script src="{{ mix('js/app.js') }}"></script>

</body>

</html>
