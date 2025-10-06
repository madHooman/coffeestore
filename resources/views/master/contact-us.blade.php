<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>کافئین | تماس با ما </title>

    <link rel="icon" type="image/x-icon" href="{{asset("Images/svg.blade.php/favicon.png")}}" />
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
    <!-- ALL ICONS  -->
    @include('partials.svg')


    @include('partials.alter_top')


    @include('partials.nav')


    <main class="container child:mt-8">
        <!-- Breadcrumbs -->
        <section>
            <ul class="flex items-center gap-x-2 text-gray-400 text-sm lg:text-base">
                <li class="flex items-center gap-x-2">
                    <a href="index.html">صفحه اصلی</a>
                    <svg class="w-4 h-4">
                        <use href="#chevron-left"></use>
                    </svg>
                </li>
                <li class="flex items-center gap-x-2">
                    <a href="#"> تماس با ما</a>
                </li>
            </ul>
        </section>
        <!-- CONTACT US -->
        <section class="w-full p-5 rounded-lg shadow bg-white dark:bg-zinc-700">
            <h2 class="font-MorabbaMedium text-xl flex w-fit border-b-2 border-green-500 pb-1">تماس با ما</h2>
            <p class="text-gray-500 dark:text-gray-200 font-DanaMedium mt-4 mb-8 text-sm lg:text-base">
                قبل از مطرح کردن هر گونه سوال بخش <a class="text-green-500" href="index.html">سوالات متداول</a>
                را مطالعه نمایید
            </p>

            <div class="flex flex-col lg:flex-row items-start gap-x-8">
                <div class="w-full lg:w-3/4">
                    <form class="w-full grid grid-cols-12 gap-4">
                        <input type="text" placeholder="شماره موبایل" class="tailwind-input col-span-6">
                        <input type="text" placeholder="عنوان" class="tailwind-input col-span-6">
                        <input type="text" placeholder="ایمیل" class="tailwind-input col-span-12 ">
                        <textarea class="tailwind-input col-span-12 h-24" placeholder="متن دیدگاه"></textarea>
                        <button
                            class="mx-auto rounded-lg col-span-12 w-32 p-2 bg-green-500 hover:bg-green-600 text-white transition-all">
                            ارسال پیام
                        </button>
                    </form>
                </div>
                <ul class="w-full lg:w-2/4 space-y-4 lg:space-y-8 mt-5 lg:mt-0">
                    <li>
                        <span class="flex items-center gap-x-2 font-DanaMedium dark:text-gray-200 text-gray-500">
                            <svg class="w-4 h-4 mb-1">
                                <use href="#envelope"></use>
                            </svg>
                            آدرس ایمیل :
                        </span>
                        <p class="text-lg  text-green-500 mt-1.5">
                            coffein@info.com
                        </p>
                    </li>
                    <li>
                        <span class="flex items-center gap-x-2 font-DanaMedium dark:text-gray-200 text-gray-500">
                            <svg class="w-5 h-5 mb-1">
                                <use href="#phone"></use>
                            </svg>
                            تلفن :
                        </span>
                        <p class="text-lg  text-green-500 mt-1.5">
                            0926-002-2737
                        </p>
                    </li>
                    <li>
                        <span class="flex items-center gap-x-2 font-DanaMedium dark:text-gray-200 text-gray-500">
                            <svg class="w-5 h-5 mb-1">
                                <use href="#map"></use>
                            </svg>
                            آدرس :
                        </span>
                        <p class="text-green-500 mt-1.5">
                            بلوار آزادی، خیابان استاد معین، کوچه گلستان، پلاک ۱۰
                        </p>
                    </li>
                </ul>
            </div>
        </section>
    </main>

    @include('partials.footer')


    <!-- OVERLAY -->
    <div class="overlay hidden fixed w-full h-full top-0 left-0 right-0 bg-black/40 z-40 transition-all duration-300">
    </div>



    <!-- ==========================  APP JS ============================= -->
    <script src="../../../public/scripts/App.js"></script>
</body>

</html>
