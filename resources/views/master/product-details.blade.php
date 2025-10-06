<!doctype html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>کافئین | جزییات محصول</title>
    <!-- ==========================  FAVICON ============================= -->
    <link rel="icon" type="image/x-icon" href="{{asset("Images/svg.blade.php/favicon.png")}}" />
    <link rel="stylesheet" href="{{ asset("styles/app.css") }}">
    <link rel="stylesheet" href="{{asset("styles/swiper.css")}}"/>
    @yield("extra__css")

    <!-- ==========================  DARK MODE SCRPT ============================= -->
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

<body
    class="font-Dana bg-[#f3f4f6] text-zinc-900 dark:bg-zinc-900 dark:text-white overflow-x-hidden transition-all"
>
@include('partials.svg')


<!-- ALERT TOP -->
@include('partials.alter_top')


@include('partials.nav')


<main class="container child:mt-8">
    <!-- Breadcrumbs -->
    <section>
        <ul
            class="flex items-center gap-x-2 text-gray-400 text-sm lg:text-base"
        >
            <li class="flex items-center gap-x-2">
                <a href="index.html">صفحه اصلی</a>
                <svg class="w-4 h-4">
                    <use href="#chevron-left"></use>
                </svg>
            </li>
            <li class="flex items-center gap-x-2">
                <a href="index.html"> فروشگاه</a>
                <svg class="w-4 h-4">
                    <use href="#chevron-left"></use>
                </svg>
            </li>
            <li class="flex items-center gap-x-2">
                <a href="shop.html">جزییات محصول</a>
            </li>
        </ul>
    </section>
    <!-- PRODUCT DETAILS SECTION -->
    <section
        class="flex flex-col lg:flex-row items-start gap-4 child:rounded-lg child:bg-white child:dark:bg-zinc-700 child:shadow child:p-4"
    >
        <!-- IMAGE & INFO BOX Container -->
        <div class="w-full lg:w-3/4 flex flex-col gap-y-8">
            <!-- IMAGE & INFO BOX -->
            <div class="flex flex-col lg:flex-row gap-5">
                <!-- SLIDER & ACTION BTN  -->
                <div class="flex lg:w-96 flex-col gap-y-4">
                    <!-- ACTION BTN -->
                    <div class="flex items-center gap-x-3 mr-2">
                        <div class="tooltip">
                            <button
                                class="rounded-full p-1.5 border-2 border-gray-200 dark:border-white/20"
                            >
                                <svg class="w-5 h-5">
                                    <use href="#share"></use>
                                </svg>
                            </button>
                            <div
                                class="tooltiptext duration-300 transition-all text-xs bg-zinc-700 dark:bg-zinc-500 text-white dark:to-zinc-700 after:border-t-zinc-700 after:dark:border-t-zinc-500"
                            >
                                اشتراک گذاری
                            </div>
                        </div>
                        <div class="tooltip">
                            <button
                                class="rounded-full p-1.5 border-2 border-gray-200 dark:border-white/20"
                            >
                                <svg class="w-5 h-5">
                                    <use href="#heart"></use>
                                </svg>
                            </button>
                            <div
                                class="tooltiptext duration-300 transition-all text-xs bg-zinc-700 dark:bg-zinc-500 text-white dark:to-zinc-700 after:border-t-zinc-700 after:dark:border-t-zinc-500"
                            >
                                افزودن به علاقمندی
                            </div>
                        </div>
                        <div class="tooltip">
                            <button
                                class="rounded-full p-1.5 border-2 border-gray-200 dark:border-white/20"
                            >
                                <svg class="w-5 h-5">
                                    <use href="#arrows-up-down"></use>
                                </svg>
                            </button>
                            <div
                                class="tooltiptext duration-300 transition-all text-xs bg-zinc-700 dark:bg-zinc-500 text-white dark:to-zinc-700 after:border-t-zinc-700 after:dark:border-t-zinc-500"
                            >
                                مقایسه
                            </div>
                        </div>
                    </div>
                    <!-- SLIDER -->
                    <div
                        class="swiper mt-2 w-full porduct-details-slider rounded-lg"
                    >
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img
                                    src="../../../public/Images/products/p-5.webp"
                                    class="rounded-lg shadow w-full object-cover lg:w-96 lg:h-fit"
                                    alt=""
                                />
                            </div>
                            <div class="swiper-slide">
                                <img
                                    src="../../../public/Images/products/p-2.webp"
                                    class="rounded-lg shadow w-full object-cover lg:w-96 lg:h-fit"
                                    alt=""
                                />
                            </div>
                            <div class="swiper-slide">
                                <img
                                    src="../../../public/Images/products/p-1.webp"
                                    class="rounded-lg shadow w-full object-cover lg:w-96 lg:h-fit"
                                    alt=""
                                />
                            </div>
                            <div class="swiper-slide">
                                <img
                                    src="../../../public/Images/products/p-4.webp"
                                    class="rounded-lg shadow w-full object-cover lg:w-96 lg:h-fit"
                                    alt=""
                                />
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <!-- INFO (TITLE , NAME , ...) -->
                <div class="flex flex-col gap-y-4 w-full">
                    <!-- NAME -->
                    <div
                        class="flex items-start justify-between border-b border-b-gray-200 py-2"
                    >
                        <div class="flex flex-col gap-y-1">
                            <p class="text-sm text-gray-400">
                                ESPRESSO BEANS GIORNO
                            </p>
                            <h3 class="text-2xl font-MorabbaMedium">
                                دانه قهوه اسپرسو جیورنو
                            </h3>
                        </div>
                        <div class="flex gap-x-1">
                            <p class="font-DanaMedium mt-0.5">5.0</p>
                            <svg class="w-5 h-5 text-yellow-400">
                                <use href="#star"></use>
                            </svg>
                        </div>
                    </div>
                    <div class="flex gap-x-1 text-gray-400">
                        <svg class="w-5 h-5">
                            <use href="#list-bullet"></use>
                        </svg>
                        <p>دسته‌بندی : دانه اسپرسو</p>
                    </div>
                    <p class="mt-2 font-DanaMedium">
                        ویژگی های محصول :
                    </p>
                    <div
                        class="grid grid-cols-12 gap-4 child:col-span-12 xl:child:col-span-6 child:dark:bg-zinc-800 child:bg-gray-100 child:h-12 child:rounded-lg child:text-sm child:flex child:items-center child:justify-center"
                    >
                        <div>
                            <p class="text-zinc-600 dark:text-gray-400">
                                گونه : 50% عربیکا و 50% ربوستا
                            </p>
                        </div>
                        <div>
                            <p class="text-zinc-600 dark:text-gray-400">
                                میزان کافئین : متوسط
                            </p>
                        </div>
                        <div>
                            <p class="text-zinc-600 dark:text-gray-400">
                                خاستگاه : آمریکای مرکزی و آسیای
                            </p>
                        </div>
                        <div>
                            <p class="text-zinc-600 dark:text-gray-400">
                                مواد تشکیل‌دهنده : دانه اسپرسو
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="lg:mr-2 grid grid-cols-12 child:col-span-6 xl:child:col-span-3 gap-x-1 gap-y-2 lg:gap-4 child:border child:text-gray-400 child:dark:border-white/20 child:border-gray-200 child:rounded-lg child:h-12 child:p-2 child:flex child:items-center child:gap-x-1 lg:child:gap-x-2 child:text-sm lg:text-base"
            >
						<span>
							<svg class="w-4 h-4 lg:w-6 lg:h-6">
								<use href="#arrow-path-rounded-square"></use>
							</svg>
							<p>ضمانت بازگشت کالا</p>
						</span>
                <span>
							<svg class="w-4 h-4 lg:w-6 lg:h-6">
								<use href="#check-badge"></use>
							</svg>
							<p>تضمین اصالت کالا</p>
						</span>
                <span>
							<svg class="w-4 h-4 lg:w-6 lg:h-6">
								<use href="#calender-day"></use>
							</svg>
							<p>پشتیبانی کل هفته</p>
						</span>
                <span>
							<svg class="w-4 h-4 lg:w-6 lg:h-6">
								<use href="#truke"></use>
							</svg>
							<p>ارسال به سراسر ایران</p>
						</span>
            </div>
            <div class="lg:mr-2">
                <h2 class="font-MorabbaMedium text-2xl pb-1 mb-2">
                    معرفی محصول
                </h2>
                <p class="leading-10 text-gray-600 dark:text-gray-300">
                    دانه قهوه جیورنو یکی از انواع قهوه اسپرسو بن‌مانو
                    است که از ترکیب مساوی دو گونه قهوه عربیکا و ربوستا
                    با درجه برشته‌کاری مدیوم دارک تهیه شده است. میزان
                    کافئین جیورنو متوسط رو به بالا با طعم‌یاد شکلاتی
                    است. به‌طور معمول، خریداران دانه قهوه مصرف‌‌کنندگان
                    قهوه اسپرسو هستند. اما دانه قهوه جیورنو را می‌توان
                    به سایز پودر قهوه ترک، فرانسه و اسپرسو آسیاب کرد و
                    با دم‌افزارهای جذوه، فرنچ پرس، موکاپات یا اسپرسوساز
                    برقی قهوه تهیه کرد.
                </p>
            </div>
        </div>
        <!-- PRICE & ADD TO CART BOX -->
        <div
            class="w-full lg:w-1/4 lg:sticky top-5 flex flex-col gap-y-6"
        >
            <!-- PRICE -->
            <div class="flex items-center gap-x-1">
                <p class="text-2xl font-DanaDemiBold">163,000</p>
                <p class="">تومان</p>
            </div>

            <button
                class="w-full flex items-center justify-between gap-x-1 rounded-lg border border-gray-200 dark:border-white/20 py-2 px-3"
            >
                <svg class="w-6 h-6 increment text-green-600">
                    <use href="#plus"></use>
                </svg>
                <input
                    type="number"
                    name="customInput"
                    id="customInput"
                    min="1"
                    max="20"
                    value="1"
                    class="custom-input mr-4 text-lg bg-transparent"
                />
                <svg class="w-6 h-6 decrement text-red-500">
                    <use href="#minus"></use>
                </svg>
            </button>

            <button
                class="w-full flex items-center gap-x-1 justify-between dark:bg-zinc-800 dark:text-gray-400 bg-gray-100 transition-all rounded-lg py-2 px-2 xl:px-3 font-DanaMedium text-sm xl:text-base"
            >
                <p>مجموع خرید :</p>
                <p>163,000 تومان</p>
            </button>

            <button
                class="w-full flex items-center gap-x-1 justify-center bg-green-500 text-white hover:bg-green-600 transition-all rounded-lg shadow py-2"
            >
                افزودن به سبد خرید
                <svg class="w-5 h-5">
                    <use href="#shopping-bag"></use>
                </svg>
            </button>

            <div
                class="text-sm text-gray-400 flex xl:items-center gap-x-1"
            >
                <svg class="w-5 h-5">
                    <use href="#info"></use>
                </svg>
                <p>ارسال رایگان برای خریدهای بالای 400 هزار تومان</p>
            </div>
        </div>
    </section>

    <!-- COMMENTS -->
    <section
        class="w-full rounded-lg bg-white dark:bg-zinc-700 shadow p-5"
    >
        <div class="flex items-center gap-x-2 mb-6">
            <h2 class="font-MorabbaMedium text-2xl">دیدگاه ها</h2>
            <p class="text-sm text-blue-500">(28 دیدگاه)</p>
        </div>

        <div class="flex flex-col lg:flex-row items-start gap-10">
            <!-- SUBMIT COMMENT -->
            <div class="lg:w-1/4 flex flex-col w-full">
                <p class="font-DanaMedium text-lg mb-2">ثبت دیدگاه</p>
                <input
                    type="text"
                    placeholder="عنوان"
                    class="tailwind-input"
                />

                <p class="text-gray-500 dark:text-white text-sm mb-4">
                    این محصول را به دیگران پیشنهاد :
                </p>
                <div
                    class="grid grid-cols-12 child:col-span-6 gap-4 child:w-full child:flex child:items-center child:justify-center child:gap-x-2 child:rounded-lg child:shadow child:py-2 mb-5 child:font-DanaMedium child:duration-300 child:transition-all"
                >
                    <button
                        class="text-green-600 ring-transparent ring-1 focus:ring-green-600 dark:ring-white/20 dark:focus:ring-green-600"
                    >
                        <svg class="w-5 h-5">
                            <use href="#hand-up"></use>
                        </svg>
                        میکنم
                    </button>
                    <button
                        class="text-red-500 ring-transparent ring-1 focus:ring-[#EF4343] dark:ring-white/20 dark:focus:ring-[#EF4343]"
                    >
                        <svg class="w-5 h-5">
                            <use href="#hand-down"></use>
                        </svg>
                        نمیکنم
                    </button>
                </div>
                <textarea
                    class="h-24 tailwind-input"
                    placeholder="متن دیدگاه"
                ></textarea>
                <button
                    class="rounded-lg p-2 bg-green-500 hover:bg-green-600 text-white transition-all"
                >
                    ثبت
                </button>
            </div>

            <!-- ALL COMMENTS -->
            <ul class="lg:w-3/4 flex flex-col gap-y-2 child:w-full">
                <!-- COMMENT ITEMS -->
                <li
                    class="child:flex py-4 border-b border-gray-200 child:border-white/20"
                >
                    <!-- TITLE -->
                    <div class="flex items-center gap-x-2">
                        <h2 class="font-DanaMedium text-lg mb-1">
                            عطر و طعم قهوه عالی
                        </h2>
                        <span
                            class="px-2 py-1 mb-2 rounded-lg bg-green-500 text-white text-xs"
                        >خریدار</span
                        >
                    </div>
                    <!-- COOMENT TEXT -->
                    <div class="flex-col">
                        <h2
                            class="flex items-center gap-x-1 text-green-500 mb-4"
                        >
                            <svg class="w-4 h-4">
                                <use href="#hand-up"></use>
                            </svg>
                            پیشنهاد میشود
                        </h2>
                        <p
                            class="text-gray-500 dark:text-gray-200 mb-2 line-clamp-2"
                        >
                            عالی از هر لحاظ به شدت خریدش رو توصیه میکنم
                            کیفیت محصول خوب بود بسته بندی عالی بود
                        </p>
                    </div>
                    <!-- COMMENT FOOTER -->
                    <div
                        class="mt-2 lg:mt-0 flex-col lg:flex-row gap-y-2 lg:items-center justify-between"
                    >
                        <div
                            class="flex items-center gap-x-4 text-gray-400 text-sm"
                        >
                            <p>11 بهمن 1402</p>
                            <p>امیررضا کریمی</p>
                        </div>
                        <div
                            class="flex items-center gap-x-2 flex-wrap mt-2"
                        >
                            <p class="text-gray-400 text-sm">
                                آیا این دیدگاه برایتان مفید بود؟
                            </p>
                            <div
                                class="flex items-center gap-x-2 child:flex child:items-center child:gap-x-1 child:rounded-lg child:p-2 child:font-DanaMedium child:duration-300 child:transition-all child:text-sm"
                            >
                                <button
                                    class="text-green-600 ring-transparent ring-1 focus:ring-green-600 dark:focus:ring-green-600"
                                >
                                    78
                                    <svg class="w-4 h-4">
                                        <use href="#hand-up"></use>
                                    </svg>
                                </button>
                                <button
                                    class="text-red-500 ring-transparent ring-1 focus:ring-[#EF4343] dark:focus:ring-[#EF4343]"
                                >
                                    25
                                    <svg class="w-4 h-4">
                                        <use href="#hand-down"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- COMMENT ITEMS -->
                <li
                    class="child:flex py-4 border-b border-gray-200 child:border-white/20"
                >
                    <!-- TITLE -->
                    <div class="flex items-center gap-x-2">
                        <h2 class="font-DanaMedium text-lg mb-1">
                            بسته بندی خوب نبود
                        </h2>
                        <span
                            class="px-2 py-1 mb-2 rounded-lg bg-green-500 text-white text-xs"
                        >خریدار</span
                        >
                    </div>
                    <!-- COOMENT TEXT -->
                    <div class="flex-col">
                        <h2
                            class="flex items-center gap-x-1 text-red-500 mb-4"
                        >
                            <svg class="w-4 h-4">
                                <use href="#hand-down"></use>
                            </svg>
                            پیشنهاد نمیشود
                        </h2>
                        <p
                            class="text-gray-500 dark:text-gray-200 mb-2"
                        >
                            بسته بندی محصول ایراد داشت.
                        </p>
                    </div>
                    <!-- COMMENT FOOTER -->
                    <div
                        class="mt-2 lg:mt-0 flex-col lg:flex-row gap-y-2 lg:items-center justify-between"
                    >
                        <div
                            class="flex items-center gap-x-4 text-gray-400 text-sm"
                        >
                            <p>12 بهمن 1402</p>
                            <p>علی محمدی</p>
                        </div>
                        <div
                            class="flex items-center gap-x-2 flex-wrap mt-2"
                        >
                            <p class="text-gray-400 text-sm">
                                آیا این دیدگاه برایتان مفید بود؟
                            </p>
                            <div
                                class="flex items-center gap-x-2 child:flex child:items-center child:gap-x-1 child:rounded-lg child:p-2 child:font-DanaMedium child:duration-300 child:transition-all child:text-sm"
                            >
                                <button
                                    class="text-green-600 ring-transparent ring-1 focus:ring-green-600 dark:focus:ring-green-600"
                                >
                                    4
                                    <svg class="w-4 h-4">
                                        <use href="#hand-up"></use>
                                    </svg>
                                </button>
                                <button
                                    class="text-red-500 ring-transparent ring-1 focus:ring-[#EF4343] dark:focus:ring-[#EF4343]"
                                >
                                    15
                                    <svg class="w-4 h-4">
                                        <use href="#hand-down"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- COMMENT ITEMS -->
                <li
                    class="child:flex py-4 border-b border-gray-200 child:border-white/20"
                >
                    <!-- TITLE -->
                    <div class="flex items-center gap-x-2">
                        <h2 class="font-DanaMedium text-lg mb-1">
                            برشته و تازه بود
                        </h2>
                        <span
                            class="px-2 py-1 mb-2 rounded-lg bg-green-500 text-white text-xs"
                        >خریدار</span
                        >
                    </div>
                    <!-- COOMENT TEXT -->
                    <div class="flex-col">
                        <h2
                            class="flex items-center gap-x-1 text-green-500 mb-4"
                        >
                            <svg class="w-4 h-4">
                                <use href="#hand-up"></use>
                            </svg>
                            پیشنهاد میشود
                        </h2>
                        <p
                            class="text-gray-500 dark:text-gray-200 mb-2"
                        >
                            کیفیت محصول عالیه
                        </p>
                    </div>
                    <!-- COMMENT FOOTER -->
                    <div
                        class="mt-2 lg:mt-0 flex-col lg:flex-row gap-y-2 lg:items-center justify-between"
                    >
                        <div
                            class="flex items-center gap-x-4 text-gray-400 text-sm"
                        >
                            <p>1 بهمن 1402</p>
                            <p>محمد صفدری</p>
                        </div>
                        <div
                            class="flex items-center gap-x-2 flex-wrap mt-2"
                        >
                            <p class="text-gray-400 text-sm">
                                آیا این دیدگاه برایتان مفید بود؟
                            </p>
                            <div
                                class="flex items-center gap-x-2 child:flex child:items-center child:gap-x-1 child:rounded-lg child:p-2 child:font-DanaMedium child:duration-300 child:transition-all child:text-sm"
                            >
                                <button
                                    class="text-green-600 ring-transparent ring-1 focus:ring-green-600 dark:focus:ring-green-600"
                                >
                                    7
                                    <svg class="w-4 h-4">
                                        <use href="#hand-up"></use>
                                    </svg>
                                </button>
                                <button
                                    class="text-red-500 ring-transparent ring-1 focus:ring-[#EF4343] dark:focus:ring-[#EF4343]"
                                >
                                    5
                                    <svg class="w-4 h-4">
                                        <use href="#hand-down"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- HIDDEN COMMENTS -->
                <!-- COMMENT ITEMS -->
                <li
                    class="hidden-comment-item hidden child:flex py-4 border-b border-gray-200 child:border-white/20"
                >
                    <!-- TITLE -->
                    <div class="flex items-center gap-x-2">
                        <h2 class="font-DanaMedium text-lg mb-1">
                            عطر و طعم قهوه عالی
                        </h2>
                        <span
                            class="px-2 py-1 mb-2 rounded-lg bg-green-500 text-white text-xs"
                        >خریدار</span
                        >
                    </div>
                    <!-- COOMENT TEXT -->
                    <div class="flex-col">
                        <h2
                            class="flex items-center gap-x-1 text-green-500 mb-4"
                        >
                            <svg class="w-4 h-4">
                                <use href="#hand-up"></use>
                            </svg>
                            پیشنهاد میشود
                        </h2>
                        <p
                            class="text-gray-500 dark:text-gray-200 mb-2 line-clamp-2"
                        >
                            عالی از هر لحاظ به شدت خریدش رو توصیه میکنم
                            کیفیت محصول خوب بود بسته بندی عالی بود
                        </p>
                    </div>
                    <!-- COMMENT FOOTER -->
                    <div
                        class="mt-2 lg:mt-0 flex-col lg:flex-row gap-y-2 lg:items-center justify-between"
                    >
                        <div
                            class="flex items-center gap-x-4 text-gray-400 text-sm"
                        >
                            <p>11 بهمن 1402</p>
                            <p>امیررضا کریمی</p>
                        </div>
                        <div
                            class="flex items-center gap-x-2 flex-wrap mt-2"
                        >
                            <p class="text-gray-400 text-sm">
                                آیا این دیدگاه برایتان مفید بود؟
                            </p>
                            <div
                                class="flex items-center gap-x-2 child:flex child:items-center child:gap-x-1 child:rounded-lg child:p-2 child:font-DanaMedium child:duration-300 child:transition-all child:text-sm"
                            >
                                <button
                                    class="text-green-600 ring-transparent ring-1 focus:ring-green-600 dark:focus:ring-green-600"
                                >
                                    78
                                    <svg class="w-4 h-4">
                                        <use href="#hand-up"></use>
                                    </svg>
                                </button>
                                <button
                                    class="text-red-500 ring-transparent ring-1 focus:ring-[#EF4343] dark:focus:ring-[#EF4343]"
                                >
                                    25
                                    <svg class="w-4 h-4">
                                        <use href="#hand-down"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- COMMENT ITEMS -->
                <li
                    class="hidden-comment-item hidden child:flex py-4 border-b border-gray-200 child:border-white/20"
                >
                    <!-- TITLE -->
                    <div class="flex items-center gap-x-2">
                        <h2 class="font-DanaMedium text-lg mb-1">
                            بسته بندی خوب نبود
                        </h2>
                        <span
                            class="px-2 py-1 mb-2 rounded-lg bg-green-500 text-white text-xs"
                        >خریدار</span
                        >
                    </div>
                    <!-- COOMENT TEXT -->
                    <div class="flex-col">
                        <h2
                            class="flex items-center gap-x-1 text-red-500 mb-4"
                        >
                            <svg class="w-4 h-4">
                                <use href="#hand-down"></use>
                            </svg>
                            پیشنهاد نمیشود
                        </h2>
                        <p
                            class="text-gray-500 dark:text-gray-200 mb-2"
                        >
                            بسته بندی محصول ایراد داشت.
                        </p>
                    </div>
                    <!-- COMMENT FOOTER -->
                    <div
                        class="mt-2 lg:mt-0 flex-col lg:flex-row gap-y-2 lg:items-center justify-between"
                    >
                        <div
                            class="flex items-center gap-x-4 text-gray-400 text-sm"
                        >
                            <p>12 بهمن 1402</p>
                            <p>علی محمدی</p>
                        </div>
                        <div
                            class="flex items-center gap-x-2 flex-wrap mt-2"
                        >
                            <p class="text-gray-400 text-sm">
                                آیا این دیدگاه برایتان مفید بود؟
                            </p>
                            <div
                                class="flex items-center gap-x-2 child:flex child:items-center child:gap-x-1 child:rounded-lg child:p-2 child:font-DanaMedium child:duration-300 child:transition-all child:text-sm"
                            >
                                <button
                                    class="text-green-600 ring-transparent ring-1 focus:ring-green-600 dark:focus:ring-green-600"
                                >
                                    4
                                    <svg class="w-4 h-4">
                                        <use href="#hand-up"></use>
                                    </svg>
                                </button>
                                <button
                                    class="text-red-500 ring-transparent ring-1 focus:ring-[#EF4343] dark:focus:ring-[#EF4343]"
                                >
                                    15
                                    <svg class="w-4 h-4">
                                        <use href="#hand-down"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- COMMENT ITEMS -->
                <li
                    class="hidden-comment-item hidden child:flex py-4 border-b border-gray-200 child:border-white/20"
                >
                    <!-- TITLE -->
                    <div class="flex items-center gap-x-2">
                        <h2 class="font-DanaMedium text-lg mb-1">
                            برشته و تازه بود
                        </h2>
                        <span
                            class="px-2 py-1 mb-2 rounded-lg bg-green-500 text-white text-xs"
                        >خریدار</span
                        >
                    </div>
                    <!-- COOMENT TEXT -->
                    <div class="flex-col">
                        <h2
                            class="flex items-center gap-x-1 text-green-500 mb-4"
                        >
                            <svg class="w-4 h-4">
                                <use href="#hand-up"></use>
                            </svg>
                            پیشنهاد میشود
                        </h2>
                        <p
                            class="text-gray-500 dark:text-gray-200 mb-2"
                        >
                            کیفیت محصول عالیه
                        </p>
                    </div>
                    <!-- COMMENT FOOTER -->
                    <div
                        class="mt-2 lg:mt-0 flex-col lg:flex-row gap-y-2 lg:items-center justify-between"
                    >
                        <div
                            class="flex items-center gap-x-4 text-gray-400 text-sm"
                        >
                            <p>1 بهمن 1402</p>
                            <p>محمد صفدری</p>
                        </div>
                        <div
                            class="flex items-center gap-x-2 flex-wrap mt-2"
                        >
                            <p class="text-gray-400 text-sm">
                                آیا این دیدگاه برایتان مفید بود؟
                            </p>
                            <div
                                class="flex items-center gap-x-2 child:flex child:items-center child:gap-x-1 child:rounded-lg child:p-2 child:font-DanaMedium child:duration-300 child:transition-all child:text-sm"
                            >
                                <button
                                    class="text-green-600 ring-transparent ring-1 focus:ring-green-600 dark:focus:ring-green-600"
                                >
                                    7
                                    <svg class="w-4 h-4">
                                        <use href="#hand-up"></use>
                                    </svg>
                                </button>
                                <button
                                    class="text-red-500 ring-transparent ring-1 focus:ring-[#EF4343] dark:focus:ring-[#EF4343]"
                                >
                                    5
                                    <svg class="w-4 h-4">
                                        <use href="#hand-down"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </li>
                <button
                    class="more-comment-btn w-full flex items-center justify-center gap-x-1 my-4 text-green-600 font-DanaMedium"
                >
                    <p class="more-comment-text">مشاهده بیشتر</p>
                    <svg class="w-4 h-4 more-comment-icon">
                        <use href="#chevron-down"></use>
                    </svg>
                </button>
            </ul>
        </div>
    </section>
    <!--  Products slider -->
    <section class="mt-10
">        <!-- TITLE -->
        <div class="flex items-center justify-between mb-12">
            <div class="flex flex-col gap-y-2">
                <h2 class="font-MorabbaMedium text-xl lg:text-3xl">
                    محصولات پر فروش
                </h2>
            </div>
            <div
                class="flex items-center gap-x-2 child:p-2 child:bg-white child:dark:bg-zinc-700 child:shadow child:rounded-full">
                <button class="prev-slide-best ">
                    <svg class="w-4 h-4">
                        <use href="#chevron-right"></use>
                    </svg>
                </button>
                <button class="next-slide-best ">
                    <svg class="w-4 h-4">
                        <use href="#chevron-left"></use>
                    </svg>
                </button>
            </div>

        </div>
        <!-- SLIDER  -->
        <div class="swiper BestSelling rounded-lg" dir="rtl">
            <div
                class="swiper-wrapper rounded-lg mb-2 child:cursor-pointer child:overflow-hidden child:rounded-lg child:bg-white child:dark:bg-zinc-700 child:shadow child:w-64 child:relative">
                <!-- PRODUCT ITEM -->

                @foreach($products as $product)
                    <div class="swiper-slide group">
                        <!-- PRODUCT IMGAE -->
                        <img src="{{asset("$product->images")}}" alt="product-1"
                             class="group-hover:scale-105 duration-300 w-32 h-32 lg:w-48 lg:h-48 mx-auto mb-3" />
                        <!-- PRODUCT MAIN -->
                        <div class="px-2 lg:px-4 mb-3">
                            <a href="product-details.html"
                               class="line-clamp-2 font-DanaMedium mb-2 text-sm lg:text-base">
                                {{$product->product_title}}                            </a>
                            <div class="flex items-center gap-x-1 lg:gap-x-3">
                                <p class="font-Dana" style="color: forestgreen"> {{$product->product_price}}</p>
                            </div>

                        </div>
                        <!-- PRODUCT FOOTER -->
                        <div class="flex items-center justify-between px-2 lg:px-4 mb-3">
                            <div class="flex items-center gap-x-2 child:transition-all child:duration-300">
                                <span
                                    class="rounded-full p-2 dark:bg-zinc-800 dark:hover:bg-green-500 bg-gray-100 hover:bg-green-600 hover:text-white">
                                    <svg class="w-4 h-4">
                                        <use href="#shopping-cart"></use>
                                    </svg>
                                </span>
                                <span class="hover:text-green-600">
                                    <svg class="w-4 h-4">
                                        <use href="#heart"></use>
                                    </svg>
                                </span>
                            </div>
                            <div class="flex items-center">
                                <svg class="w-4 h-4 text-gray-300">
                                    <use href="#star"></use>
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400">
                                    <use href="#star"></use>
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400">
                                    <use href="#star"></use>
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400">
                                    <use href="#star"></use>
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400">
                                    <use href="#star"></use>
                                </svg>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </section>

</main>

<footer class="relative mt-14 lg:mt-32 text-gray-300 bg-zinc-800 pt-8">
    <div class="container">
        <!-- EMAIL BOX -->
        <div
            class="mb-12 flex border-b pb-8 border-white/10 flex-col-reverse sm:flex-row gap-y-5 items-center sm:items-end justify-between"
        >
            <div class="flex gap-y-2 flex-col">
                <h2 class="font-DanaDemiBold">
                    از جدیدترین تخفیف ها با خبر شوید
                </h2>
                <div
                    class="bg-zinc-600 p-1 rounded-lg w-72 lg:w-[350px] flex items-center justify-between"
                >
                    <input
                        type="text"
                        class="bg-transparent text-gray-200 px-2"
                        placeholder="ایمل یا شماره تلفن"
                    />
                    <button
                        class="px-4 py-1 bg-green-500 rounded-lg font-DanaMedium"
                    >
                        ثبت
                    </button>
                </div>
            </div>
            <!-- GO TO TOP BTN -->
            <a
                href="#"
                class="flex items-center gap-x-2 text-sm p-2 cursor-pointer rounded-lg border-2 border-gray-200"
            >
                بازگشت به بالا
                <svg class="w-5 h-5 rotate-180">
                    <use href="#arrow-down-circle"></use>
                </svg>
            </a>
        </div>

        <div
            class="flex mt-8 items-center justify-between flex-col lg:flex-row gap-y-10 lg:gap-x-20 flex-wrap"
        >
            <div class="flex flex-col gap-y-2 w-full lg:w-[30%]">
                <!-- LOGO -->
                <a
                    href="index.html"
                    class="text-green-500 transition-colors w-fit block"
                >
                    <p class="font-MorabbaBold text-3xl">کافئین</p>
                    <p class="tracking-tighter">حس نو با قهوه...</p>
                </a>
                <!-- ABOUTE -->
                <p class="leading-8">
                    در فروشگاه آنلاین ما، بهترین دانه‌های قهوه از سراسر
                    جهان را با کیفیت بالا و طعمی بی‌نظیر برای شما فراهم
                    آورده‌ایم. با انتخاب محصولات ما، لذت یک فنجان قهوه
                    عالی را در خانه تجربه کنید.
                </p>
            </div>

            <div class="flex flex-col gap-y-2 w-full lg:w-auto">
                <h2 class="font-DanaDemiBold text-lg mb-3">
                    - دسترسی سریع
                </h2>
                <div class="flex gap-x-10 child:space-y-2">
                    <ul
                        class="child-hover:text-green-500 child:transition-all"
                    >
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
                    <ul
                        class="child-hover:text-green-500 child:transition-colors"
                    >
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
                    class="flex items-center gap-x-1 lg:gap-x-2 hover:text-green-500 transition-colors cursor-pointer"
                >
                    <svg class="w-5 h-5">
                        <use href="#map"></use>
                    </svg>
                    <p class="line-clamp-1">
                        بلوار آزادی، خیابان استاد معین، کوچه گلستان،
                        پلاک ۱۰
                    </p>
                </div>

                <div
                    class="flex lg:items-center flex-col gap-y-2 lg:flex-row gap-x-5 child:cursor-pointer child-hover:text-green-500 child:transition-colors"
                >
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
                        <img
                            src="../../../public/Images/svg/instagram.png"
                            class="w-6 h-6"
                            alt="instagram"
                        />
                    </button>
                    <button class="flex items-center gap-x-2">
                        <p dir="ltr">@coffeepages</p>
                        <img
                            src="../../../public/Images/svg/telegram.png"
                            class="w-6 h-6"
                            alt="instagram"
                        />
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- COPY RIGTH -->
    <div class="bg-zinc-900">
        <div
            class="container mt-12 py-2 flex flex-col lg:flex-row gap-y-2 lg:items-center lg:justify-between"
        >
            <p class="text-sm lg:text-base">
                تمام حقوق این سایت متعلق به
                <a
                    href="index.html"
                    class="text-green-500 font-DanaMedium"
                >کافئین</a
                >
                میباشد
            </p>
            <p class="text-sm">
                Copyright © 2024 Coffee. All rights reserved.
            </p>
        </div>
    </div>
</footer>

<!-- OVERLAY -->
<div
    class="overlay hidden fixed w-full h-full top-0 left-0 right-0 bg-black/40 z-40 transition-all duration-300"
></div>
<script src="{{asset("scripts/App.js")}}"></script>
<script src="{{asset("scripts/Timer.js")}}"></script>
<!-- ==========================  SLIDER APP ============================= -->
<script src="{{asset("scripts/swiper.js")}}"></script>
<!-- ==========================  SLIDER APP ============================= -->
<script src="{{asset("scripts/Slider.js")}}"></script>
@yield("extra__js")
</body>
</html>
