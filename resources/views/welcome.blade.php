<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DATABASE PROJECT</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite('resources/css/app.css')

</head>

<body class="min-h-screen bg-gradient-to-tr from-gray-950 from-60% to-gray-800">
    <div>
        <nav class="bg-white dark:bg-transparent border-gray-500">
            <div class="px-8 mx-auto max-w-8xl">
                <div class="flex items-center justify-between h-16">
                    <div class="w-full justify-between flex items-center">
                        <a class="flex-shrink-0 text-white font-bold" href="/">
                            DATABASE PROJECT
                        </a>
                        <div class="hidden md:block">
                            <div class="flex flex-row items-baseline ml-10 space-x-4">
                                <a class="text-gray-300  hover:text-gray-800 hover:scale-105 dark:hover:text-white px-3 py-2 rounded-md text-sm font-medium"
                                    href="/penduduk">
                                    KEPENDUDUKAN
                                </a>
                                <a class="text-gray-300  hover:text-gray-800 hover:scale-105 dark:hover:text-white px-3 py-2 rounded-md text-sm font-medium"
                                    href="/kelahiran">
                                    ADMINISTRASI
                                </a>
                                <a class="text-gray-300  hover:text-gray-800 hover:scale-105 dark:hover:text-white px-3 py-2 rounded-md text-sm font-medium"
                                    href="/perkawinan">
                                    PENDATAAN
                                </a>
                                <a class="text-gray-300  hover:text-gray-800 hover:scale-105 dark:hover:text-white px-3 py-2 rounded-md text-sm font-medium"
                                    href="/#">
                                    INFORMASI
                                </a>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
        </nav>
    </div>
    <div class=" mt-16 flex flex-col justify-center items-center">
        <div class=" h-80 flex flex-col w-4/5 items-center justify-center space-y-3">
            <h1 class=" text-white font-bold text-center text-7xl">DATABASE PROJECT</h1>
            <h2 class="text-white font-semibold text-center text-3xl">RESIDENT IN INDONESIA</h2>
            <p class="text-gray-500 text-center text-xl mt-10">Offers a comprehensive and detailed population table
                encompassing both Indonesian citizens and foreign residents within the diverse demographic landscape of
                Indonesia.</p>
        </div>
        <a href="/penduduk"
            class="px-6 py-2 rounded-md bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2">Get
            Started</a>
    </div>
</body>

</html>
