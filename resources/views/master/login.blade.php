<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> صفحه ورود | کافئین</title>
    <!-- ==========================  FAVICON ============================= -->
    <link rel="icon" type="image/x-icon" href="../../../public/Images/svg/favicon.png" />
    <!-- ==========================  STYLE APP ============================= -->
    <link rel="stylesheet" href="{{ asset("styles/app.css") }}">
    <!-- ==========================  DARK MODE SCRPT ============================= -->
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



<main class="container flex items-center flex-col justify-center mt-8">
    <div class="max-w-lg w-full shadow">
        <div class="bg-white dark:bg-zinc-700 rounded-lg overflow-hidden">
            <div class="p-3 lg:p-8">
                <h2 class="text-center text-xl lg:text-3xl font-DanaMedium">
                    خوش آمدید
                </h2>
                <p class="mt-2 lg:mt-4 text-center text-gray-400">ورود به حساب کاربری
                </p>
                <form method="post" action="{{ route("login") }}" class="mt-8 space-y-6">
                    @csrf
                    <div class="flex w-full items-center bg-gray-100 dark:bg-zinc-500/30 rounded-lg  px-3">
                        <input placeholder="ایمیل یا نام کاربری" class="appearance-none bg-transparent w-full py-3 "
                               required="" autocomplete="email" type="email" />
                        <svg class="h-5 w-5 text-gray-500 dark:text-gray-200">
                            <use href="#envelope"></use>
                        </svg>
                    </div>
                    <div class="flex w-full items-center bg-gray-100 dark:bg-zinc-500/30 rounded-lg  px-3">
                        <input placeholder="رمز عبور" class="appearance-none bg-transparent w-full py-3" required=""
                               autocomplete="password" type="password" />
                        <svg class="h-5 w-5 text-gray-500 dark:text-gray-200">
                            <use href="#lock"></use>
                        </svg>
                    </div>


                    <div class="flex items-center justify-between mt-4">
                        <div class="text-sm">
                            <a class="font-medium text-green-500 hover:text-green-600" href="#">
                                فراموشی رمز عبور
                            </a>
                        </div>
                    </div>
                    <div>
                        <button
                            class="group transition-colors relative w-full flex justify-center py-3 px-4 border border-transparent font-DanaMedium rounded-lg text-white bg-green-500 hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500"
                            type="submit">
                            وارد شوید
                        </button>
                    </div>
                </form>
            </div>
            <div class="px-8 py-4 text-center">
                <span class="text-gray-400">حساب کاربری ندارید؟ </span>
                <a class="font-medium text-green-500 hover:text-green-400" href="{{route("register")}}">ثبت نام کنید</a>
            </div>
        </div>
    </div>

</main>


<footer class="relative mt-14  text-gray-300 bg-zinc-800 pt-8">
    <div class="container">
        <!-- EMAIL BOX -->
        <div
            class="mb-12 flex border-b pb-8 border-white/10 flex-col-reverse sm:flex-row gap-y-5 items-center sm:items-end justify-between">
            <div class="flex gap-y-2 flex-col">
                <h2 class="font-DanaDemiBold">از جدیدترین تخفیف ها با خبر شوید</h2>
                <div class="bg-zinc-600 p-1 rounded-lg w-72 lg:w-[350px] flex items-center justify-between">
                    <input type="text" class="bg-transparent text-gray-200 px-2" placeholder="ایمل یا شماره تلفن" />
                    <button class="px-4 py-1 bg-green-500 rounded-lg font-DanaMedium">
                        ثبت
                    </button>
                </div>
            </div>
            <!-- GO TO TOP BTN -->
            <a href="#"
               class="flex items-center gap-x-2 text-sm p-2 cursor-pointer rounded-lg border-2 border-gray-200">
                بازگشت به بالا
                <svg class="w-5 h-5 rotate-180">
                    <use href="#arrow-down-circle"></use>
                </svg>
            </a>
        </div>

        <div class="flex mt-8 items-center justify-between flex-col lg:flex-row gap-y-10 lg:gap-x-20 flex-wrap">
            <div class="flex flex-col gap-y-2 w-full lg:w-[30%]">
                <!-- LOGO -->
                <a href="index.html" class="text-green-500 transition-colors w-fit block">
                    <p class="font-MorabbaBold text-3xl">کافئین</p>
                    <p class="tracking-tighter">حس نو با قهوه...</p>
                </a>
                <!-- ABOUTE -->
                <p class="leading-8">
                    در فروشگاه آنلاین ما، بهترین دانه‌های قهوه از سراسر جهان را با
                    کیفیت بالا و طعمی بی‌نظیر برای شما فراهم آورده‌ایم. با انتخاب
                    محصولات ما، لذت یک فنجان قهوه عالی را در خانه تجربه کنید.
                </p>
            </div>

            <div class="flex flex-col gap-y-2 w-full lg:w-auto">
                <h2 class="font-DanaDemiBold text-lg mb-3">- دسترسی سریع</h2>
                <div class="flex gap-x-10 child:space-y-2">
                    <ul class="child-hover:text-green-500 child:transition-all">
                        <li>
                            <a href="index.html">صفحه اصلی</a>
                        </li>
                        <li>
                            <a href="shop.html">فروشگاه</a>
                        </li>
                        <li>
                            <a href="contact-us.html">تماس با ما </a>
                        </li>
                        <li>
                            <a href="questions.html">سوالات متداول </a>
                        </li>
                    </ul>
                    <ul class="child-hover:text-green-500 child:transition-colors">
                        <li>
                            <a href="login.html"> ثبت نام | ورود </a>
                        </li>
                        <li>
                            <a href="articles.html">وبلاگ</a>
                        </li>
                        <li>
                            <a href="">شرایط و قوانین</a>
                        </li>
                        <li>
                            <a href="">حریم خصوصی </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="flex flex-col gap-y-5 w-full lg:w-auto">
                <h2 class="font-DanaDemiBold text-lg">- تماس با ما</h2>
                <div
                    class="flex items-center gap-x-1 lg:gap-x-2 hover:text-green-500 transition-colors cursor-pointer">
                    <svg class="w-5 h-5">
                        <use href="#map"></use>
                    </svg>
                    <p class="line-clamp-1">
                        بلوار آزادی، خیابان استاد معین، کوچه گلستان، پلاک ۱۰
                    </p>
                </div>

                <div
                    class="flex lg:items-center flex-col gap-y-2 lg:flex-row gap-x-5 child:cursor-pointer child-hover:text-green-500 child:transition-colors">
                        <span class="flex items-start gap-x-2">
                            <svg class="w-5 h-5">
                                <use href="#envelope"></use>
                            </svg>
                            <p>coffein@info.com</p>
                        </span>

                    <span class="flex items-start gap-x-2">
                            <svg class="w-5 h-5">
                                <use href="#phone"></use>
                            </svg>
                            <p>0923-122-3311</p>
                            <p class="mr-2">0926-002-2737</p>
                        </span>
                </div>

                <div class="flex items-start justify-start gap-x-10">
                    <button class="flex items-center gap-x-2">
                        <p dir="ltr">@coffeepages</p>
                        <img src="../../../public/Images/svg/instagram.png" class="w-6 h-6" alt="instagram" />
                    </button>
                    <button class="flex items-center gap-x-2">
                        <p dir="ltr">@coffeepages</p>
                        <img src="../../../public/Images/svg/telegram.png" class="w-6 h-6" alt="instagram" />
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- COPY RIGTH -->
    <div class="bg-zinc-900">
        <div class="container  mt-12 py-2 flex flex-col lg:flex-row gap-y-2 lg:items-center lg:justify-between">
            <p class="text-sm lg:text-base">
                تمام حقوق این سایت متعلق به
                <a href="index.html" class="text-green-500 font-DanaMedium">کافئین</a>
                میباشد
            </p>
            <p class="text-sm">Copyright © 2024 Coffee. All rights reserved.</p>
        </div>
    </div>
</footer>

<!-- OVERLAY -->
<div class="overlay hidden fixed w-full h-full top-0 left-0 right-0 bg-black/40 z-40 transition-all duration-300">
</div>

<!-- ==========================  APP JS ============================= -->
<script src="../../../public/scripts/App.js"></script>
</body>

</html>
