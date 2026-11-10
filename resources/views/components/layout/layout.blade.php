<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Idea</title>

    <script>
        if (
            localStorage.getItem('theme') === 'dark' ||
            (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)
        ) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>

<body class="bg-background text-foreground mx-auto container">
    <x-layout.nav />
    <main class="mx-auto w-2xs sm:w-xl md:w-2xl lg:w-4xl">
        {{ $slot }}

    </main>
    @session('success')
        <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show" x-transition.opacity.duration.300ms
            class="bg-primary absolute px-4 py-3 bottom-4 right-4 border rounded-lg text-primary-foreground">
            {{ $value }}</div>
    @endsession


</body>

</html>
