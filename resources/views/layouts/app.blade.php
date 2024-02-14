<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>{{ $title ?? env('APP_NAME') }}</title>
</head>

<body class="relative">
    <header class="bg-[#1a202c] text-white">
        <div class="flex items-center justify-between py-2 px-3">
            <button class="md:hidden inline-block">
                <i class="fa-solid fa-bars"></i>
            </button>
            <div class="flex items-center gap-2">
                <img src="{{ asset('assets/images/logo.svg') }}" alt="Logo" class="w-10">
                <span class="text-bold">
                    YouTube
                </span>
            </div>
            {{-- user menu --}}
            <div class="flex items-center gap-4">
                <button>
                    <i class="fa-solid fa-search"></i>
                </button>
                <button>
                    <i class="fa-solid fa-bell"></i>
                </button>
                <button>
                    <i class="fa-solid fa-user"></i>
                </button>
            </div>
        </div>
    </header>
    <aside class="fixed top-[56px] left-0 md:w-[250px] w-full h-full side-bar">
        {{-- <div class="px-3">
            <div class="flex items-center justify-between gap-2">
                <button class="md:hidden inline-block">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <div class="flex items-center gap-2">
                    <img src="{{ asset('assets/images/logo.svg') }}" alt="Logo" class="w-10 h-16">
                    <span class="text-bold">
                        YouTube
                    </span>
                </div>
            </div>
        </div> --}}
        <ul>
            <li>
                <a href="" class="sidebar-link active">
                    <span>
                        <i class="fa-solid fa-home"></i>
                    </span>
                    <span>
                        Home
                    </span>
                </a>
            </li>
            <li>
                <a href="" class="sidebar-link">
                    <i class="fa-solid fa-fire"></i>
                    <span>
                        Shorts
                    </span>
                </a>
            </li>
            <li>
                <a href="" class="sidebar-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M20 8H4V6h16zm-2-6H6v2h12zm4 10v8a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-8a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2m-6 4l-6-3.27v6.53z" />
                    </svg>
                    <span>
                        Subscriptions
                    </span>
                </a>
            </li>
            <li class="w-100 bg-gray-700 h-0.5"></li>
            <li>
                <a href="" class="sidebar-link">
                    <i class="fa-solid fa-play-circle"></i>
                    <span>
                        Library
                    </span>
                </a>
            </li>
            <li>
                <a href="" class="sidebar-link">
                    <i class="fa-solid fa-history"></i>
                    <span>
                        History
                    </span>
                </a>
            </li>
            <li>
                <a href="" class="sidebar-link">
                    <i class="fa-solid fa-play-circle"></i>
                    <span>
                        Your videos
                    </span>
                </a>
            </li>
            <li>
                <a href="" class="sidebar-link">
                    <i class="fa-solid fa-clock"></i>
                    <span>
                        Watch later
                    </span>
                </a>
            </li>
            <li>
                <a href="" class="sidebar-link">
                    <i class="fa-solid fa-thumbs-up"></i>
                    <span>
                        Liked videos
                    </span>
                </a>
            </li>
        </ul>
    </aside>
    <section class="ml-0 md:ml-[255px]">
        {{ $slot }}
    </section>
</body>

</html>
