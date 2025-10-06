
    <!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>کافئین | مقالات</title>
    <!-- ==========================  FAVICON ============================= -->

{{--    <link rel="icon" type="image/x-icon" href="{{asset("Images/svg/favicon.png")}}" />--}}
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

    <!-- ALERT TOP -->
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
                    <a href="articles.html">مقالات</a>
                </li>
            </ul>
        </section>

        <div class="flex flex-col lg:flex-row gap-4">
            <!-- SIDE FILTER BOX -->
            <div
                class="lg:sticky top-5 h-fit lg:w-1/4 flex flex-col gap-y-4 items-center shadow rounded-lg p-4 dark:bg-zinc-700 bg-white">
                <!-- TITLE -->
                <div class="flex items-center justify-between w-full">
                    <span class="flex items-center gap-x-1">
                        <svg class="w-5 h-5">
                            <use href="#filter"></use>
                        </svg>
                        <p class="font-DanaMedium ">فیلتر ها</p>
                    </span>
                    <p class="text-green-500">حدف همه</p>
                </div>
                <!-- accordion -->
                <div class="mt-6 w-full dark:bg-zinc-600 cursor-pointer shadow  rounded-lg">
                    <div class="accordion-header p-3 flex items-center justify-between">
                        <p class="font-DanaMedium">دسته بندی </p>
                        <svg class="w-4 h-4">
                            <use href="#chevron-left"></use>
                        </svg>
                    </div>
                    <ul
                        class="accordion-content hidden py-2 mx-2 child:dark:text-gray-200 child:text-gray-600 child:flex items-center child:gap-x-2 child:py-1 child:px-2 child:rounded space-y-2">
                        <li>
                            <label class="cl-checkbox">
                                <input checked="" type="checkbox">
                                <span></span>
                            </label>
                            <p> قهوه</p>
                        </li>
                        <li>
                            <label class="cl-checkbox">
                                <input type="checkbox">
                                <span></span>
                            </label>
                            <p> دانه قهوه</p>
                        </li>
                        <li>
                            <label class="cl-checkbox">
                                <input type="checkbox">
                                <span></span>
                            </label>
                            <p>قهوه ساز</p>
                        </li>
                    </ul>
                </div>

                <div class="w-full dark:bg-zinc-600 cursor-pointer shadow  rounded-lg">
                    <div class="accordion-header p-3 flex items-center justify-between">
                        <p class="font-DanaMedium">تاریخ انتشار</p>
                        <svg class="w-4 h-4">
                            <use href="#chevron-left"></use>
                        </svg>
                    </div>
                    <ul
                        class="accordion-content hidden py-2 mx-2 child:dark:text-gray-200 child:text-gray-600 child:flex items-center child:gap-x-2 child:py-1 child:px-2 child:rounded space-y-2">
                        <li>
                            <label class="cl-checkbox">
                                <input type="checkbox">
                                <span></span>
                            </label>
                            <p>امروز</p>
                        </li>
                        <li>
                            <label class="cl-checkbox">
                                <input type="checkbox">
                                <span></span>
                            </label>
                            <p>دیروز</p>
                        </li>
                    </ul>
                </div>
                <!-- CHECK BOX -->
                <div
                    class="flex my-2 w-full flex-col h-auto gap-y-5 child:flex child:items-center child:justify-between child:font-DanaMedium">
                    <div class="">
                        <p>داغ ترین</p>
                        <label class="switch">
                            <input type="checkbox">
                            <span class="slider"></span>
                        </label>
                    </div>
                    <div class="">
                        <p>بروز ترین </p>
                        <label class="switch">
                            <input type="checkbox">
                            <span class="slider"></span>
                        </label>
                    </div>
                </div>
            </div>
            <!-- FILTER BOXES & articleSeeder -->
            <div class="lg:w-3/4">
                <!-- TOP FILTER BOX -->
                <div
                    class="dark:bg-zinc-700 bg-white flex flex-wrap items-center justify-start sm:gap-x-8 py-2 px-2 sm:px-4 shadow rounded-lg sm:h-16">
                    <div class="flex items-center gap-x-2">
                        <svg class="w-5 h-5">
                            <use href="#sort-list"></use>
                        </svg>
                        <h2 class="font-DanaDemiBold">مرتب سازی بر اساس :</h2>
                    </div>
                    <ul
                        class="flex items-center  gap-x-2 lg:gap-x-5 child:transition-all child:cursor-pointer child-hover:bg-gray-300/30 child:rounded-lg child:px-1 child:py-1 child:text-sm sm:child:text-base">
                        <li class="text-green-500">محبوب ترین</li>
                        <li>جدید ترین</li>
                        <li>پربازدید ترین</li>
                    </ul>
                </div>
                <!-- articleSeeder -->
                <div
                    class="mt-4 grid grid-cols-1 xs:grid-cols-2 md:grid-cols-3 xl:grid-cols-3  gap-6 sm:gap-8 child-hover:-translate-y-2 child:duration-300
                    child:bg-white child:dark:bg-zinc-700  child:rounded-lg child:p-2 child:cursor-pointer child:shadow ">
                    <!-- ITEM -->
                    @foreach($articles as $article)

                    <div class="group">
                        <div class="relative overflow-hidden rounded-lg">
                            <img src="{{asset($article->img_slider)}}"
                                class="h-[180px] w-full object-cover rounded-bl-3xl rounded-tr-3xl" alt="" />
                            <div
                                class="absolute opacity-0 left-0 top-0 bottom-0 right-0 bg-black/60 flex items-center justify-center group-hover:opacity-100 duration-300 transition-all rounded-bl-3xl rounded-tr-3xl">
                                <a href="article-details.html"
                                    class="flex items-center px-2 py-1 gap-x-1 font-DanaMedium rounded-lg border-2 border-white text-white">
                                    <p>ادامه مطالب</p>
                                    <svg class="w-4 h-4">
                                        <use href="#chevron-left"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="flex flex-col gap-y-1 my-2 px-1">
                            <h2 class="font-DanaDemiBold">{{$article->title}}</h2>
                            <p class="line-clamp-2 text-sm text-gray-400">
                                {{$article->body}}
                            </p>
                        </div>
                        <span class="flex w-full h-1 py-1 border-t border-gray-100 dark:border-white/10"></span>
                        <div class="flex items-center justify-between text-sm px-1">
                            <span class="flex items-center gap-x-1 text-gray-400">
                                <svg class="w-4 h-4">
                                    <use href="#calendar"></use>
                                </svg>
                                <p class="mt-1">1403/5/1</p>
                            </span>
                            <span class="flex items-start gap-x-1 text-gray-400">
                                <p class="font-DanaDemiBold">120</p>
                                <svg class="w-4 h-4">
                                    <use href="#eye"></use>
                                </svg>
                            </span>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- PAGINATION -->
                <div class="mt-10 w-full flex items-center justify-center">
                    <ul
                        class="flex items-center gap-x-3 child:flex child:items-center child:justify-center child:w-8 child:h-8 child:cursor-pointer child:shadow child:rounded-lg child:transition-all child:duration-300">
                        <li class="bg-white dark:bg-zinc-700 hover:bg-green-500 hover:text-white">
                            <svg class="w-5 h-5">
                                <use href="#chevron-right"></use>
                            </svg>
                        </li>
                        <li class="text-white bg-green-500">
                            <a href="#">
                                1
                            </a>
                        </li>
                        <li class="bg-white dark:bg-zinc-700 hover:bg-green-500 hover:text-white">
                            <a href="#">
                                2
                            </a>
                        </li>
                        <li class="bg-white dark:bg-zinc-700 hover:bg-green-500 hover:text-white">
                            <a href="#">
                                ...
                            </a>
                        </li>
                        <li class="bg-white dark:bg-zinc-700 hover:bg-green-500 hover:text-white">
                            <svg class="w-5 h-5">
                                <use href="#chevron-left"></use>
                            </svg>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </main>


    @include('partials.footer')
    <!-- OVERLAY -->
    <div class="overlay hidden fixed w-full h-full top-0 left-0 right-0 bg-black/40 z-40 transition-all duration-300">
    </div>



    <!-- ==========================  APP JS ============================= -->
        <script src="../../../public/scripts/App.js"></script>
</body>

</html>
