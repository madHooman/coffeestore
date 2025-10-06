<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>کافئین | پنل کاربری </title>

{{--    <link rel="icon" type="image/x-icon" href="{{asset("Images/svg/user.png")}}" />--}}
    <link rel="stylesheet" href="{{ asset("styles/app.css") }}">
    <link rel="stylesheet" href="{{asset("styles/swiper.css")}}"/>
    <script type="text/javascript">
        if (
            localStorage.theme === "dark" ||
            (!("theme" in localStorage) &&
                window.matchMedia("(prefers-color-scheme: dark)").matches)
        ) {
            document.documentElement.classList.add("dark");
        } else {
            document.documentElement.classList.remove("dark");
        }
    </script>
</head>

<body class="font-Dana bg-[#f3f4f6] text-zinc-900 dark:bg-zinc-900 dark:text-white overflow-x-hidden transition-all">
    <!-- ALL ICONS -->
    <svg class="hidden">
        <symbol id="moon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth="{1.5}"
            stroke="currentColor">
            <path strokeLinecap="round" strokeLinejoin="round"
                d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z" />
        </symbol>
        <symbol id="sun" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
        </symbol>
        <symbol id="edit" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
        </symbol>
        <symbol id="squares" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
        </symbol>
        <symbol id="shopping-bag" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
        </symbol>
        <symbol id="heart" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
        </symbol>
        <symbol id="map" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
        </symbol>
        <symbol id="bell" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
        </symbol>
        <symbol id="cog" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
        </symbol>
        <symbol id="home" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
        </symbol>
        <symbol id="arrow-left-start-on-rectangle" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
        </symbol>
        <symbol id="calendar" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
        </symbol>
        <symbol id="chevron-left" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
        </symbol>
        <symbol id="bars" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M12 17.25h8.25" />
        </symbol>
        <symbol id="close" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
        </symbol>
        <symbol id="check" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
        </symbol>
        <symbol id="ellipsis" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
        </symbol>
        <symbol id="x-close" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
        </symbol>
        <symbol id="wallet" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M21 12a2.25 2.25 0 0 0-2.25-2.25H15a3 3 0 1 1-6 0H5.25A2.25 2.25 0 0 0 3 12m18 0v6a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 18v-6m18 0V9M3 12V9m18 0a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 9m18 0V6a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 6v3" />
        </symbol>
        <symbol id="clock" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
        </symbol>
        <symbol id="ticket" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M16.5 6v.75m0 3v.75m0 3v.75m0 3V18m-9-5.25h5.25M7.5 15h3M3.375 5.25c-.621 0-1.125.504-1.125 1.125v3.026a2.999 2.999 0 0 1 0 5.198v3.026c0 .621.504 1.125 1.125 1.125h17.25c.621 0 1.125-.504 1.125-1.125v-3.026a2.999 2.999 0 0 1 0-5.198V6.375c0-.621-.504-1.125-1.125-1.125H3.375Z" />
        </symbol>
        <symbol id="arrow-left" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
        </symbol>

    </svg>

    <!-- panel -->
    <main>
        <!--  PANLE -->
        <section class="flex flex-col xl:h-screen items-start lg:flex-row">
            <!-- SIDEBAR DESKTOP -->
            <div class="sticky top-5 h-full hidden lg:block lg:w-1/4  xl:w-1/5 rounded-l-lg p-4 shadow bg-white dark:bg-zinc-700">
                <!-- NAME AND AVATAR  -->
                <div class="flex items-center justify-between border-b border-gray-200 dark:border-white/20 py-3">
                    <div class="flex items-center gap-x-3">
                        <img src="{{asset("Images/svg/user.png")}}" class="w-12 h-12 ring-2 ring-gray-400/20 rounded-full"
                             alt="AVATAR">
                        <span class="felx flex-col gap-y-2">
                            <p class="font-DanaMedium text-lg">پارسا وصالی</p>
                            <p class="text-gray-400">09100000001</p>
                        </span>
                    </div>
                    <span>
                        <svg class="w-6 h-6 cursor-pointer text-green-500">
                            <use href="#edit"></use>
                        </svg>
                    </span>
                </div>
                <!-- MENU -->
                <ul
                    class="relative mt-4 space-y-2 child:duration-300 child:transition-all child:py-3  child:px-2 child:flex child:gap-x-2 text-lg child:cursor-pointer child:rounded-lg">
                    <li class="bg-green-500/10 text-green-500">
                        <svg class="w-6 h-6 ">
                            <use href="#squares"></use>
                        </svg>
                        <a href="dashboard.html">داشبورد</a>
                    </li>
                    <li class="hover:bg-zinc-100 dark:hover:bg-zinc-600">
                        <svg class="w-6 h-6 ">
                            <use href="#shopping-bag"></use>
                        </svg>
                        <a href="dashboard-orders.html">
                            سفارش ها
                        </a>
                    </li>
                    <li class="hover:bg-zinc-100 dark:hover:bg-zinc-600">
                        <svg class="w-6 h-6 ">
                            <use href="#heart"></use>
                        </svg>
                        <a href="dashboard-favorite.html">علاقه‌مندی ها</a>
                    </li>
                    <li class="hover:bg-zinc-100 dark:hover:bg-zinc-600">
                        <svg class="w-6 h-6 ">
                            <use href="#map"></use>
                        </svg>
                        <a href="dashboard-address.html">آدرس ها</a>
                    </li>
                    <li class="hover:bg-zinc-100 dark:hover:bg-zinc-600">
                        <svg class="w-6 h-6 ">
                            <use href="#bell"></use>
                        </svg>
                        <a href="dashboard-messages.html">پیام ها</a>
                    </li>
                    <li class="hover:bg-zinc-100 dark:hover:bg-zinc-600">
                        <svg class="w-6 h-6 ">
                            <use href="#cog"></use>
                        </svg>
                        <a href="dashboard-account.html">اطلاعات حساب </a>
                    </li>
                    <li class="text-red-400 hover:bg-red-500/20">
                        <svg class="w-6 h-6 ">
                            <use href="#arrow-left-start-on-rectangle"></use>
                        </svg>
                        <a href="index.html">خروج از حساب </a>
                    </li>
                </ul>
            </div>
            <!-- SDEBAR MOBILE -->
            <div
                class="sidebar-mobile flex flex-col lg:hidden fixed -right-64 top-0 bottom-0 w-64 bg-white dark:bg-zinc-700 z-50 shadow transition-all duration-300 px-4">
                <!-- NAME AND AVATAR  -->
                <div class="flex items-center justify-between border-b border-gray-200 dark:border-white/20 py-3">
                    <div class="flex items-center gap-x-3">
                        <img src="../../../public/Images/svg/user.png" class="w-10 h-10 ring-2 ring-gray-400/20 rounded-full"
                             alt="AVATAR">
                        <span class="felx flex-col gap-y-2">
                            <p class="font-DanaMedium">پارسا وصالی</p>
                            <p class="text-gray-400 text-sm">09100000001</p>
                        </span>
                    </div>
                    <span class="close-sidebar-btn">
                        <svg class="w-5 h-6 cursor-pointer">
                            <use href="#close"></use>
                        </svg>
                    </span>
                </div>
                <!-- MENU -->
                <ul
                    class="relative mt-4 space-y-2 child:duration-300 child:transition-all child:p-2 child:flex child:items-center child:gap-x-2  child:cursor-pointer child:rounded-lg">
                    <li class="bg-green-500/10 text-green-500">
                        <svg class="w-5 h-5 ">
                            <use href="#squares"></use>
                        </svg>
                        <a href="dashboard.html">داشبورد</a>
                    </li>
                    <li class="hover:bg-zinc-100 dark:hover:bg-zinc-600">
                        <svg class="w-5 h-5 ">
                            <use href="#shopping-bag"></use>
                        </svg>
                        <a href="dashboard-orders.html">
                            سفارش ها
                        </a>
                    </li>
                    <li class="hover:bg-zinc-100 dark:hover:bg-zinc-600">
                        <svg class="w-5 h-5 ">
                            <use href="#heart"></use>
                        </svg>
                        <a href="dashboard-favorite.html">علاقه‌مندی ها</a>
                    </li>
                    <li class="hover:bg-zinc-100 dark:hover:bg-zinc-600">
                        <svg class="w-5 h-5 ">
                            <use href="#map"></use>
                        </svg>
                        <a href="dashboard-address.html">آدرس ها</a>
                    </li>
                    <li class="hover:bg-zinc-100 dark:hover:bg-zinc-600">
                        <svg class="w-5 h-5 ">
                            <use href="#bell"></use>
                        </svg>
                        <a href="dashboard-messages.html">پیام ها</a>
                    </li>
                    <li class="hover:bg-zinc-100 dark:hover:bg-zinc-600">
                        <svg class="w-5 h-5 ">
                            <use href="#cog"></use>
                        </svg>
                        <a href="dashboard-account.html">اطلاعات حساب </a>
                    </li>
                    <li class="hover:bg-zinc-100 dark:hover:bg-zinc-600">
                        <svg class="w-5 h-5 ">
                            <use href="#home"></use>
                        </svg>
                        <a href="index.html"> صفحه اصلی</a>
                    </li>
                    <li class="text-red-500 hover:bg-red-500/20">
                        <svg class="w-5 h-5 ">
                            <use href="#arrow-left-start-on-rectangle"></use>
                        </svg>
                        <a href="index.html">خروج از حساب </a>
                    </li>
                </ul>
            </div>

            <!-- MAIN  -->
            <div class="lg:w-3/4 xl:w-4/5 lg:m-5 w-full">
                <!-- NAVBAR -->
                <div class=" bg-white dark:bg-zinc-700 p-5 lg:rounded-lg shadow flex items-center justify-between">
                    <p class="font-DanaMedium text-lg hidden lg:block"> پارسا وصالی عزیز؛ خوش اومدی 🙌 </p>
                    <button class="open-sidebar-btn flex lg:hidden items-center gap-x-1">
                        <svg class="w-6 h-6">
                            <use href="#bars"></use>
                        </svg>
                        داشبورد
                    </button>
                    <div class="flex items-center gap-x-3">
                        <button class="relative flex items-center justify-end notif-toggle-btn">
                            <svg class="w-6 h-6">
                                <use href="#bell" />
                            </svg>
                            <!-- BADGE -->
                            <span
                                class="absolute -top-1.5 -right-2 w-4 h-4 text-[10px] flex items-center justify-center bg-red-500 text-white rounded-full">2</span>
                            <!-- NOTIFICATION BOX -->
                            <div
                                class="notif-box absolute -left-7 z-40 dark:border-none border border-gray-100 w-72 p-4 bg-white text-zinc-900 dark:text-white  hidden top-8 transition-all delay-100 dark:bg-zinc-800 rounded shadow child:transition-all">
                                <span class="justify-between flex items-center border-b border-gray-200 pb-2">
                                    <p> اعلان ها</p>
                                    <p class="text-green-500 flex text-sm items-center gap-x-0.5">
                                        همه
                                        <svg class="w-3 h-3">
                                            <use href="#chevron-left"></use>
                                        </svg>
                                    </p>
                                </span>
                                <ul
                                    class="mt-4 child:flex child:items-center child:gap-x-1 child:w-full child:rounded-lg child:bg-zinc-100 child:p-2 space-y-3 dark:child:bg-zinc-700">
                                    <li>
                                        <svg class="w-5 h-5 text-green-500 ">
                                            <use href="#check"></use>
                                        </svg>
                                        <p class="font-Dan aMedium text-green-500">پرداخت شده</p>
                                    </li>
                                    <li>
                                        <svg class="w-5 h-5 text-red-500 ">
                                            <use href="#x-close"></use>
                                        </svg>
                                        <p class="font-Dan aMedium text-red-500">پرداخت لغو شد</p>
                                    </li>
                                </ul>
                            </div>
                        </button>
                        <!-- TOGGLE BTN -->
                        <button class="toggle-theme">
                            <svg class="inline-block dark:hidden w-6 h-6">
                                <use href="#moon" />
                            </svg>
                            <svg class="hidden dark:inline w-6 h-6">
                                <use href="#sun" />
                            </svg>
                        </button>
                        <a href="index.html" class="hidden lg:flex items-center gap-x-0.5 text-green-500">
                            صفحه اصلی
                            <svg class="w-4 h-4">
                                <use href="#chevron-left"></use>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="m-5 lg:m-0">
                    <p class="font-DanaMedium block lg:hidden"> پارسا وصالی عزیز؛ خوش اومدی 🙌 </p>
                    <div class="grid grid-cols-12 gap-6 lg:gap-12 mt-6">
                        <div class="col-span-12 xl:col-span-5">
                            <p class="text-lg">اطلاعات سفارش ها :</p>
                            <div
                                class="bg-white shadow child:flex child:items-center child:gap-x-2 mt-4 px-4 py-7 dark:bg-zinc-700 rounded-lg flex flex-col">
                                <span>
                                    <svg class="w-5 h-5 mb-1">
                                        <use href="#shopping-bag"></use>
                                    </svg>
                                    <p>
                                        تعداد کل سفارش ها : <span class="font-DanaMedium text-blue-500">10 <span
                                                class="text-sm">عدد</span></span>
                                    </p>
                                </span>
                                <span class="border-t-2 border-dashed border-gray-200 dark:border-white/20 my-5"></span>
                                <span>
                                    <svg class="w-5 h-5 mb-1">
                                        <use href="#wallet"></use>
                                    </svg>
                                    <p>
                                        جمع کل سفارش ها : <span class="font-DanaMedium text-green-500">1,300,000 <span
                                                class="text-sm">تومان</span></span>
                                    </p>
                                </span>
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-7">
                            <p class="text-lg">جزییات سفارش ها :</p>
                            <div
                                class="w-full grid grid-cols-12 child:col-span-12 child:sm:col-span-6 child:md:col-span-4 gap-5 child:p-2 mt-4 child:rounded-lg child:flex child:gap-x-4 child:items-center child:text-white">
                                <div class="bg-amber-500">
                                    <span class="bg-white/20 w-12 h-12 rounded-lg flex items-center justify-center">
                                        <svg class="w-6 h-6">
                                            <use href="#check"></use>
                                        </svg>
                                    </span>
                                    <span>
                                        <p>تکمیل شده </p>
                                        <p>10</p>
                                    </span>
                                </div>
                                <div class="bg-sky-500">
                                    <span class="bg-white/20 w-12 h-12 rounded-lg flex items-center justify-center">
                                        <svg class="w-6 h-6">
                                            <use href="#ellipsis"></use>
                                        </svg>
                                    </span>
                                    <span>
                                        <p>در انتظار بررسی </p>
                                        <p>6</p>
                                    </span>
                                </div>
                                <div class="bg-rose-500">
                                    <span class="bg-white/20 w-12 h-12 rounded-lg flex items-center justify-center">
                                        <svg class="w-6 h-6">
                                            <use href="#x-close"></use>
                                        </svg>
                                    </span>
                                    <span>
                                        <p>لغو شده</p>
                                        <p>4</p>
                                    </span>
                                </div>
                                <div class="bg-violet-500">
                                    <span class="bg-white/20 w-12 h-12 rounded-lg flex items-center justify-center">
                                        <svg class="w-6 h-6">
                                            <use href="#wallet"></use>
                                        </svg>
                                    </span>
                                    <span>
                                        <p>منتظر پرداخت</p>
                                        <p>2</p>
                                    </span>
                                </div>
                                <div class="bg-emerald-500">
                                    <span class="bg-white/20 w-12 h-12 rounded-lg flex items-center justify-center">
                                        <svg class="w-6 h-6">
                                            <use href="#clock"></use>
                                        </svg>
                                    </span>
                                    <span>
                                        <p>در حال انجام</p>
                                        <p>0</p>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-5">
                            <p class="text-lg"> تیکت های شما :</p>
                            <div
                                class="bg-white shadow child:flex child:items-center child:gap-x-2 mt-4 px-4 py-7 dark:bg-zinc-700 rounded-lg flex flex-col">
                                <span>
                                    <svg class="w-5 h-5 mb-1">
                                        <use href="#ticket"></use>
                                    </svg>
                                    <p>
                                        تعداد کل تیکت ها : <span class="font-DanaMedium text-blue-500">5
                                        </span>
                                    </p>
                                </span>
                                <span class="border-t-2 border-dashed border-gray-200 dark:border-white/20 my-5"></span>
                                <span>
                                    <svg class="w-5 h-5 mb-1">
                                        <use href="#check"></use>
                                    </svg>
                                    <p>
                                        تیکت های بسته شده : <span class="font-DanaMedium text-green-500">4 </span>
                                    </p>
                                </span>
                            </div>
                            <div class="mt-4 grid grid-cols-12 gap-4 child:bg-white child:dark:bg-zinc-700">
                                <div class="col-span-12 shadow sm:col-span-8 p-2  rounded-lg flex gap-x-4 items-center">
                                    <span class="bg-green-500/20 w-12 h-12 rounded-lg flex items-center justify-center">
                                        <svg class="w-6 h-6 text-green-500">
                                            <use href="#map"></use>
                                        </svg>
                                    </span>
                                    <a href="dashboard-address.html" class="flex w-[75%] justify-between items-center gap-x-2">
                                        <p>آدرس های من</p>
                                        <svg class="w-5 h-5">
                                            <use href="#arrow-left"></use>
                                        </svg>
                                    </a>
                                </div>
                                <div class=" shadow justify-start col-span-6 sm:col-span-2 p-2  rounded-lg flex gap-x-4 items-center sm:justify-center">
                                    <a href="dashboard-account.html" class="bg-green-500/20 w-12 h-12 rounded-lg flex items-center justify-center">
                                        <svg class="w-6 h-6 text-green-500">
                                            <use href="#cog"></use>
                                        </svg>
                                    </a>
                                    <p class="block sm:hidden">تنطیمات</p>
                                </div>
                                <div class=" shadow justify-start col-span-6 sm:col-span-2 p-2  rounded-lg flex gap-x-4 items-center sm:justify-center">
                                    <a href="index.html" class="bg-green-500/20 w-12 h-12 rounded-lg flex items-center justify-center">
                                        <svg class="w-6 h-6 text-green-500">
                                            <use href="#arrow-left-start-on-rectangle"></use>
                                        </svg>
                                    </a>
                                    <p class="block sm:hidden">خروج</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-7">
                            <p class="text-lg"> سفارش های اخیر من :</p>
                            <div class="relative mt-4 overflow-x-auto shadow rounded-lg">
                                <table class="w-full text-sm text-right text-gray-500 dark:text-gray-400">
                                    <thead
                                        class="text-xs text-gray-700  bg-gray-50 dark:bg-zinc-700 dark:text-gray-200">
                                        <tr>
                                            <th scope="col" class="px-6 py-3.5">
                                                نام محصول
                                            </th>
                                            <th scope="col" class="px-6 py-3.5">
                                                تاریخ
                                            </th>
                                            <th scope="col" class="px-6 py-3.5">
                                                قیمت
                                            </th>
                                            <th scope="col" class="px-6 py-3.5">
                                                وضعیت
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr
                                            class="bg-white border-b dark:bg-zinc-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-zinc-600">
                                            <th scope="row"
                                                class="px-6 py-5 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                قهوه 200 گرمی بن مانو
                                            </th>
                                            <td class="px-6 py-5">
                                                1402/11/11
                                            </td>
                                            <td class="px-6 py-5">
                                                42,000 تومان
                                            </td>
                                            <td class="px-6 py-5 text-red-500">
                                                لغو شده
                                            </td>
                                        </tr>
                                        <tr
                                            class="bg-white border-b dark:bg-zinc-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-zinc-600">
                                            <th scope="row"
                                                class="px-6 py-5 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                قهوه 200 گرمی بن مانو
                                            </th>
                                            <td class="px-6 py-5">
                                                1402/11/11
                                            </td>
                                            <td class="px-6 py-5">
                                                660,000 تومان
                                            </td>
                                            <td class="px-6 py-5 text-yellow-500">
                                                درانتظار پرداخت
                                            </td>
                                        </tr>
                                        <tr
                                            class="bg-white border-b dark:bg-zinc-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-zinc-600">
                                            <th scope="row"
                                                class="px-6 py-5 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                قهوه 200 گرمی بن مانو
                                            </th>
                                            <td class="px-6 py-5">
                                                1402/11/11
                                            </td>
                                            <td class="px-6 py-5">
                                                742,000 تومان
                                            </td>
                                            <td class="px-6 py-5 text-green-500">
                                                پرداخت شده
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>



    <!-- OVERLAY -->
    <div class="overlay hidden fixed w-full h-full top-0 left-0 right-0 bg-black/40 z-40 transition-all duration-300">
    </div>

    <!-- ==========================  APP JS ============================= -->
    <script src="../../../public/scripts/Panel.js"></script>
</body>

</html>
