<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to My Blog</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Styles -->
    <style>
        .blog-hero {
            background-image: url('https://via.placeholder.com/1920x600'); /* Replace with your blog hero image */
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-900 dark:bg-gray-900 dark:text-gray-100">
    <!-- Header -->
    <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6 not-has-[nav]:hidden mx-auto">
        @if (Route::has('login'))
            <nav class="flex items-center justify-end gap-4">
                <a
    href="{{ route('login') }}"
    class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal"
>
    Log in
</a>
    
                @if (Route::has('register'))
                    <a
                        href="{{ route('register') }}"
                        class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal"
                    >
                        Register
                    </a>
                @endif
            </nav>
        @endif
    </header>
    
    <!-- Hero Section -->
    <section class="blog-hero h-96 flex items-center justify-center">
        <div class="text-center">
            <h1 class="text-5xl font-bold text-white">Welcome to My Blog</h1>
            <p class="mt-4 text-xl text-white">Discover amazing stories and insights.</p>
            <a href="#" class="mt-6 inline-block bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700">Get Started</a>
        </div>
    </section>

    <!-- Blog Posts Section -->
    <section class="container mx-auto px-6 py-12">
        <h2 class="text-3xl font-bold text-center mb-8">Latest Posts</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Post 1 -->
            <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg overflow-hidden">
                <img src="https://via.placeholder.com/400x200" alt="Post 1" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Post Title 1</h3>
                    <p class="text-gray-600 dark:text-gray-300">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="#" class="mt-4 inline-block text-blue-600 hover:text-blue-700">Read More</a>
                </div>
            </div>

            <!-- Post 2 -->
            <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg overflow-hidden">
                <img src="https://via.placeholder.com/400x200" alt="Post 2" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Post Title 2</h3>
                    <p class="text-gray-600 dark:text-gray-300">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="#" class="mt-4 inline-block text-blue-600 hover:text-blue-700">Read More</a>
                </div>
            </div>

            <!-- Post 3 -->
            <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg overflow-hidden">
                <img src="https://via.placeholder.com/400x200" alt="Post 3" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Post Title 3</h3>
                    <p class="text-gray-600 dark:text-gray-300">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="#" class="mt-4 inline-block text-blue-600 hover:text-blue-700">Read More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white dark:bg-gray-800 shadow mt-12">
        <div class="container mx-auto px-6 py-8">
            <div class="text-center">
                <p class="text-gray-600 dark:text-gray-300">© 2023 My Blog. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>