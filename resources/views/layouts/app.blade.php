<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Centered - Inline-logo</title>
    <link href="/static_files/css/tailwind-output.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>

<body>
    <nav class="bg-[#DB3748]">
        <div class="flex flex-wrap items-center justify-between md:justify-center">
            <div class="p-4 text-2xl font-bold text-white uppercase md:hidden">Brand</div>
            <div class="p-4 md:hidden">
                <img id="menu-button"
                    class="h-6 transition-opacity duration-500 ease-in-out cursor-pointer hover:opacity-[0.5]"
                    src="/static_files/svgs/bars-solid.svg" alt="list icon">
            </div>
            <div class="hidden md:block" id="menu">
                <ul class="w-screen md:flex md:w-auto items-center">
                    <li class="p-3 text-lg text-white"><a href="/home">Accueil</a></li>
                    <li class="p-3 text-lg text-red-300 hover:text-white"><a href="/consoles_salons">Consoles de salons</a></li>
                    <li class="p-3 text-lg text-red-300 hover:text-white"><a
                            href="/consoles_portables">Consoles portables</a>
                    </li>
                    <li class="p-3 text-lg text-red-300 hover:text-white"><a href="#">A propos</a></li>
                    <li id="drp-btn" class="text-red-300 hover:text-white">
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

@yield('content')

    <script src="/static_files/js/nav.js"></script>
</body>

</html>
