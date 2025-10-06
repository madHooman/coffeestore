<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>کافئین | درباره ما </title>


    <link rel="icon" type="image/x-icon" href="{{asset("Images/svg.blade.php/favicon.png")}}" />
    <link rel="stylesheet" href="{{ asset("styles/app.css") }}">
    <link rel="stylesheet" href="{{asset("styles/swiper.css")}}" />
    <script type="text/javascript">
        if (
            localStorage.theme === 'dark' ||
            (!('theme' in localStorage) &&
                window.matchMedia('(prefers-color-scheme: dark)').matches)
        ) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
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
                <a href="#"> درباره ما</a>
            </li>
        </ul>
    </section>

    <!-- aboute us -->
    <section class="w-full  flex flex-col lg:flex-row gap-4 p-5 rounded-lg shadow bg-white dark:bg-zinc-700">
        <div class=" w-full lg:w-2/4">
            <!-- LOGO -->
            <a href="index.html" class="text-green-500 transition-colors w-fit block">
                <p class="font-MorabbaBold text-3xl">کافئین</p>
                <p class="tracking-tighter">حس نو با قهوه...</p>
            </a>

            <p class="mt-3 leading-10 text-gray-600 dark:text-gray-300">
                خوش آمدید به کافیین، مقصد نهایی شما برای تجربه‌ای بی‌نظیر از قهوه‌های باکیفیت و طعم‌های فوق‌العاده!
                در کافیین، ما به عشق و هنر تهیه قهوه اعتقاد داریم و تلاش می‌کنیم تا هر فنجان قهوه‌ای که به دست شما
                می‌رسد، تجربه‌ای لذت‌بخش و خاطره‌انگیز باشد.
            </p>
            <h2 class="mt-3 font-DanaMedium text-xl"> خدمات ما</h2>
            <ul class="mt-3 text-gray-600 dark:text-gray-300 space-y-2 child:flex child:items-center child:gap-x-2">
                <li>
                    <span class="w-3 h-3 rounded-full bg-green-500 hidden lg:flex"></span>
                    <p>قهوه‌های تخصصی: مجموعه‌ای از قهوه‌های برشت و دم‌کرده با طعم‌ها و عطرهای منحصر به فرد.</p>
                </li>
                <li>
                    <span class="w-3 h-3 rounded-full bg-green-500 hidden lg:flex"></span>
                    <p>محیط دلپذیر: طراحی مدرن و راحت برای تجربه‌ای لذت‌بخش از زمان خود. </p>
                </li>
                <li>
                    <span class="w-3 h-3 rounded-full bg-green-500 hidden lg:flex"></span>
                    <p>سرویس حرفه‌ای: تیم ما متعهد است تا بهترین تجربه ممکن را برای شما فراهم کند. </p>
                </li>
            </ul>
            <h2 class="mt-3 font-DanaMedium text-xl">
                چشم‌انداز ما
            </h2>
            <p class="mt-3 leading-10 text-gray-600 dark:text-gray-300">
                در کافیین، ما به آینده‌ای روشن برای صنعت قهوه چشم دوخته‌ایم و در تلاش هستیم تا با نوآوری‌های مستمر و
                تعهد به کیفیت، به عنوان یکی از بهترین مقصدهای قهوه در منطقه شناخته شویم. هدف ما این است که با ارائه
                قهوه‌ای با کیفیت و خدمات استثنایی، لحظات خاصی را برای شما خلق کنیم
            </p>

            <div class="flex items-center gap-x-4 text-gray-600 dark:text-gray-300 mt-3">
                    <span class="flex items-center gap-x-2">
                        <p>coffeepages</p>
                        <img class="w-5 h-5" src="{{asset("Images/svg.blade.php/instagram.png")}}" alt="instagram">
                    </span>
                <span class="flex items-center gap-x-2">
                        <p>coffeepages</p>
                        <img class="w-5 h-5" src="{{asset("Images/svg.blade.php/telegram.png")}}" alt="telegram">
                    </span>
            </div>
        </div>
        <div class="flex justify-end  w-full lg:w-2/4">

            <img class="rounded-lg  lg:h-[35rem]" src="{{asset("Images/abouteus.png")}}"  alt="">
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
