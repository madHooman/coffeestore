@extends("master.main")

@section("section_1")
    <h2 class="font-MorabbaMedium text-xl lg:text-3xl">

    </h2>
    <section class="container">
        <!-- TITLE -->
        <a href="shop.html" class="flex items-center justify-center">
                <span class="cursor-pointer transition-colors gap-x-2 flex items-center justify-center">
                    <h2 class="text-xl lg:text-3xl font-MorabbaMedium">
                        محبوب ترین دسته ها

                    </h2>
                    <svg class="w-8 h-8">
                        <use href="#arrow-down-circle"></use>
                    </svg>
                </span>
        </a>
        <!-- ITEMS -->

        <div
            class="flex items-center justify-evenly lg:justify-between flex-wrap mt-10 child:mb-8 gap-x-8 child:flex child:items-center child:flex-col child-hover:-translate-y-5 child:duration-300 child:cursor-pointer child:gap-y-2.5">


            @foreach($categories->slice(0,5) as $category)
                <a href={{route("shop")}}>
                    <img src="{{asset($category->images)}}"
                         class="w-[100px] h-[100px] lg:w-[200px] lg:h-[200px] object-cover" alt="category1" />
                    <p class="font-DanaMedium text-sm lg:text-lg line-clamp-1">
                        {{$category->productTitle}}
                    </p>
                </a>
            @endforeach

        </div>
    </section>
@endsection

@section("section_2")
    <section class="container">
        <!-- TITLE -->
        <div class="flex items-center justify-between mb-12">
            <div class="flex flex-col gap-y-2">
                <h2 class="font-MorabbaMedium text-xl lg:text-3xl">
                    جدیدترین محصولات
                </h2>
            </div>
            <div
                class="flex items-center gap-x-2 child:p-2 child:bg-white child:dark:bg-zinc-700 child:shadow child:rounded-full">
                <button class="prev-slide ">
                    <svg class="w-4 h-4">
                        <use href="#chevron-right"></use>
                    </svg>
                </button>
                <button class="next-slide ">
                    <svg class="w-4 h-4">
                        <use href="#chevron-left"></use>
                    </svg>
                </button>
            </div>
        </div>
        <!-- SLIDER  -->
        <div class="swiper LatestProducts rounded-lg" dir="rtl">
            <div
                class="swiper-wrapper rounded-lg mb-2 child:cursor-pointer child:overflow-hidden child:rounded-lg child:bg-white child:dark:bg-zinc-700 child:shadow child:w-64  child:relative">


                <!-- PRODUCT ITEM -->
                @foreach($products as $product)
                    <div class="swiper-slide group">
                        <!-- PRODUCT IMGAE -->
                        <img src="{{asset("$product->images")}}" alt="product-1"
                             class="group-hover:scale-105 duration-300 w-32 h-32 lg:w-48 lg:h-48 mx-auto mb-3" />
                        <!-- PRODUCT MAIN -->
                        <div class="px-2 lg:px-4 mb-3">

                            <a href="{{route('productDetails')}}"
                               class="line-clamp-2 font-DanaMedium mb-2 text-sm lg:text-base">
                                {{$product->product_title}}
                            </a>
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
    <section class="container">
        <!-- TITLE -->
        <div class="flex items-center justify-between mb-12">
            <div class="flex flex-col gap-y-2">
                <h2 class="font-MorabbaMedium text-xl lg:text-3xl">
                    محصولات پر فروش
                </h2>
            </div>
            <div
                class="flex items-center gap-x-2 child:p-2 child:bg-white child:dark:bg-zinc-700 child:shadow child:rounded-full">
                <button class="prev-slide ">
                    <svg class="w-4 h-4">
                        <use href="#chevron-right"></use>
                    </svg>
                </button>
                <button class="next-slide ">
                    <svg class="w-4 h-4">
                        <use href="#chevron-left"></use>
                    </svg>
                </button>
            </div>
        </div>
        <!-- SLIDER  -->
        <div class="swiper LatestProducts rounded-lg" dir="rtl">
            <div
                class="swiper-wrapper rounded-lg mb-2 child:cursor-pointer child:overflow-hidden child:rounded-lg child:bg-white child:dark:bg-zinc-700 child:shadow child:w-64  child:relative">


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
@endsection

@section("section_4")

    <section class="container">
        <div
            class="flex flex-col lg:flex-row gap-y-4 items-center justify-between gap-x-10 child:rounded-lg child:text-white child:w-full child:h-48 child:lg:h-60 child:flex  child:pr-12 child:justify-center child:flex-col child:gap-y-4 child:cursor-pointer    ">
            @php $index = 0; @endphp
            @foreach($categories as $category)
                @if($index == 5 || $index == 6)
                    <a href="shop.html" class="banner group child:duration-300"
                       style="background-image: url('{{ asset($category->images) }}');">
                        <h2 class="font-MorabbaMedium text-xl lg:text-3xl group-hover:mr-5">
                            {{ ($category->productTitle)}}</h2>
                    </a>
                @endif
                @php $index++; @endphp
            @endforeach
        </div>
    </section>
@endsection


@section("section_5")
    <section class="container">
        <!-- ITEMS SLIDER -->
        <div
            class="flex flex-col overflow-hidden lg:flex-row items-center lg:gap-x-10 bg-white dark:bg-zinc-700 rounded-lg shadow p-5">
            <!-- TIMER & TITLE -->
            <div class="lg:h-full flex flex-col justify-evenly gap-y-2 mb-3 lg:mb-0">
                <!-- TITLE -->
                <div class="flex justify-between flex-col gap-y-3 font-MorabbaMedium">
                    <p class="text-base lg:text-lg">پیشنهاد های</p>
                    <h2 class="text-2xl lg:text-4xl text-green-500">شگفت انگیز</h2>

                    <a href="shop.html"
                       class="hidden lg:flex items-center justify-center gap-x-1 w-32 rounded-lg px-2 py-1 text-white bg-green-500 dark:bg-green-600 hover:bg-green-600 transition-colors">
                        مشاهده همه
                        <svg class="w-4 h-4">
                            <use href="#chevron-left"></use>
                        </svg>
                    </a>
                </div>
                <!-- TIMER -->
                <div class="flex flex-col justify-center">
                    <h2 class="font-DanaMedium text-lg mr-2 hidden lg:flex">
                        فقط تا :
                    </h2>
                    <div
                        class="mt-2 flex items-center gap-x-2 child:flex child:flex-col child:items-center child:justify-evenly child:shadow child:rounded-lg">
                        <div class="w-16 h-[70px] px-2 bg-white dark:bg-zinc-500">
                            <h2 class="font-MorabbaMedium dark:text-white text-rose-400">
                                ثانیه
                            </h2>
                            <p class="font-DanaDemiBold seconds"></p>
                        </div>
                        <div class="w-16 h-[70px] px-2 bg-white dark:bg-zinc-500">
                            <h2 class="font-MorabbaMedium dark:text-white text-rose-400">
                                دقیقه
                            </h2>
                            <p class="font-DanaDemiBold minutes"></p>
                        </div>
                        <div class="w-16 h-[70px] px-2 bg-white dark:bg-zinc-500">
                            <h2 class="font-MorabbaMedium dark:text-white text-rose-400">
                                ساعت
                            </h2>
                            <p class="font-DanaDemiBold hours"></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper offerSlider w-full mt-2 rounded-lg" dir="rtl">
                <div class="swiper-wrapper rounded-lg mb-2 child:cursor-pointer child:overflow-hidden child:rounded-lg child:bg-white child:dark:bg-zinc-600 child:shadow child:w-64 child:relative">

                    @foreach($products as $product)
                        <div class="swiper-slide group">
                            <!-- PRODUCT IMAGE -->
                            <img src="{{asset($product->images)}}" alt="product"
                                 class="group-hover:scale-105 duration-300 w-32 h-32 lg:w-48 lg:h-48 mx-auto mb-3" />
                            <!-- PRODUCT MAIN -->
                            <div class="px-2 lg:px-4 mb-3">
                                <a href="product-details.html"
                                   class="line-clamp-2 font-DanaMedium mb-2 text-sm lg:text-base">
                                    {{$product->product_title}}
                                </a>
                                <div class="flex items-center gap-x-1 lg:gap-x-3">
                                    <p class="font-Dana" style="color: forestgreen">
                                        {{$product->product_price}}
                                    </p>
                                </div>
                            </div>
                            <!-- PRODUCT FOOTER -->
                            <div class="flex items-center justify-between px-2 lg:px-4 mb-3">
                                <div class="flex items-center gap-x-2 child:transition-all child:duration-300">
                        <span class="rounded-full p-2 dark:bg-zinc-800 dark:hover:bg-green-500 bg-gray-100 hover:bg-green-600 hover:text-white">
                            <svg class="w-4 h-4"><use href="#shopping-cart"></use></svg>
                        </span>
                                    <span class="hover:text-green-600">
                            <svg class="w-4 h-4"><use href="#heart"></use></svg>
                        </span>
                                </div>
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 text-yellow-400"><use href="#star"></use></svg>
                                    <svg class="w-4 h-4 text-yellow-400"><use href="#star"></use></svg>
                                    <svg class="w-4 h-4 text-yellow-400"><use href="#star"></use></svg>
                                    <svg class="w-4 h-4 text-yellow-400"><use href="#star"></use></svg>
                                    <svg class="w-4 h-4 text-yellow-400"><use href="#star"></use></svg>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

        </div>
    </section>
@endsection
@section("section_6")
    <section class="container">
        <!-- TITLE -->
        <div class="flex items-center justify-between mb-12">
            <div class="flex flex-col gap-y-2">
                <h2 class="font-MorabbaMedium text-xl lg:text-3xl">
                    مطالب خواندنی
                </h2>
            </div>
            <a href="articles.html"
               class="flex items-center px-2 py-1 rounded-lg gap-x-2 text-green-500 hover:ml-2 duration-300 transition-all">
                مشاهده همه
                <svg class="w-4 h-4">
                    <use href="#chevron-left"></use>
                </svg>
            </a>
        </div>

        <div class="flex items-center justify-center lg:justify-between flex-wrap gap-4 child-hover:-translate-y-2 child:duration-300
                child:bg-white child:dark:bg-zinc-700  child:w-[90%] child:sm:w-56 child:lg:w-72 child:rounded-lg child:p-2 child:cursor-pointer child:shadow
                ">


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
                            <p class="font-DanaDemiBold">555</p>
                            <svg class="w-4 h-4">
                                <use href="#eye"></use>
                            </svg>
                        </span>
                    </div>


                </div>

            @endforeach


        </div>

        <!-- ITEM -->
    </section>
@endsection

