<!DOCTYPE html>
<html lang="en" dir="rtl">
{{--{{dd($article)}}--}}

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @yield("title")
    <link rel="icon" type="image/x-icon" href="{{asset("Images/svg.blade.php/favicon.png")}}" />
    <link rel="stylesheet" href="{{ asset("styles/app.css") }}">
    <link rel="stylesheet" href="{{asset("styles/swiper.css")}}"/>
    @yield("extra__css")

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

@include('partials.header')

    <main class="child:mt-14">
        <!-- CATEGORIES -->


        @yield("section_1")
        @yield("section_2")
        <!-- Latest Products -->
        @yield("section_3")
        <!-- Best-selling products -->
        @yield("section_4")

        <!-- BANNERS -->
        @yield("section_5")
        @yield("section_6")

        <!--  Offer Box -->

        <!-- ARTICLES -->
    </main>
@include('partials.footer')

    <!-- OVERLAY -->
    <div class="overlay hidden fixed w-full h-full top-0 left-0 right-0 bg-black/40 z-40 transition-all duration-300">
    </div>

    <!-- ==========================  APP JS ============================= -->
    <script src="{{asset("scripts/App.js")}}"></script>
    <script src="{{asset("scripts/Timer.js")}}"></script>
    <!-- ==========================  SLIDER APP ============================= -->
    <script src="{{asset("scripts/swiper.js")}}"></script>
    <!-- ==========================  SLIDER APP ============================= -->
    <script src="{{asset("scripts/Slider.js")}}"></script>
    @yield("extra__js")

</body>

</html>
