<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>صفحه ورود | کافئین</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('Images/svg/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('styles/app.css') }}">
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
@include('partials.svg')
@include('partials.alter_top')
@include('partials.nav')

<main class="container flex items-center flex-col justify-center mt-8">
    <div class="max-w-lg w-full shadow">
        <div class="bg-white dark:bg-zinc-700 rounded-lg overflow-hidden">
            <div class="p-3 lg:p-8">
                <h2 class="text-center text-xl lg:text-3xl font-DanaMedium">خوش آمدید</h2>
                <p class="mt-2 lg:mt-4 text-center text-gray-400">ورود به حساب کاربری</p>

                <!-- فرم ورود هماهنگ با Breeze -->
                <form method="POST" action="{{ route('login') }}" class="mt-8 space-y-6">
                    @csrf

                    <!-- ایمیل -->
                    <div class="flex w-full items-center bg-gray-100 dark:bg-zinc-500/30 rounded-lg px-3">
                        <input
                            placeholder="ایمیل یا نام کاربری"
                            class="appearance-none bg-transparent w-full py-3"
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            required
                            autofocus
                            autocomplete="username"
                        />
                        <svg class="h-5 w-5 text-gray-500 dark:text-gray-200">
                            <use href="#envelope"></use>
                        </svg>
                    </div>
                    @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror

                    <!-- پسورد -->
                    <div class="flex w-full items-center bg-gray-100 dark:bg-zinc-500/30 rounded-lg px-3">
                        <input
                            placeholder="رمز عبور"
                            class="appearance-none bg-transparent w-full py-3"
                            type="password"
                            name="password"
                            required
                            autocomplete="current-password"
                        />
                        <svg class="h-5 w-5 text-gray-500 dark:text-gray-200">
                            <use href="#lock"></use>
                        </svg>
                    </div>
                    @error('password')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror

                    <!-- لینک فراموشی -->
                    <div class="flex items-center justify-between mt-4">
                        <div class="text-sm">
                            <a class="font-medium text-green-500 hover:text-green-600"
                               href="{{ route('password.request') }}">
                                فراموشی رمز عبور
                            </a>
                        </div>
                    </div>

                    <!-- دکمه ورود -->
                    <div>
                        <button
                            type="submit"
                            class="group transition-colors relative w-full flex justify-center py-3 px-4 border border-transparent font-DanaMedium rounded-lg text-white bg-green-500 hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                            وارد شوید
                        </button>
                    </div>
                </form>
            </div>

                <div class="px-8 py-4 text-center">
                    <span class="text-gray-400">حساب کاربری ندارید؟ </span>
                    <a class="font-medium text-green-500 hover:text-green-400" href="{{ route('register') }}">
                        ثبت نام کنید
                    </a>
                </div>
        </div>
    </div>
</main>

@include('partials.footer')

<script src="{{ asset('scripts/App.js') }}"></script>
</body>
</html>
