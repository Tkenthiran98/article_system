<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Article Publishing System</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Styles -->
    <style>
        body {
            font-family: 'Figtree', ui-sans-serif, system-ui, sans-serif;
            line-height: 1.5;
            background-color: #f9fafb;
            color: #1a202c;
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Ensure minimum viewport height */
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        header {
            background-color: #ffffff;
            padding: 20px 0;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .logo {
            display: inline-block;
            font-size: 1.5rem;
            font-weight: bold;
            color: #ff2d20;
        }

        .main-content {
            flex: 1; /* Fill remaining vertical space */
            padding: 20px 0;
        }

        footer {
            background-color: #1a202c;
            color: #ffffff;
            padding: 20px 0;
            text-align: center;
            width: 100%;
            flex-shrink: 0; /* Prevent footer from shrinking */
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">Article Publishing System</div>
            @if (Route::has('login'))
                <nav class="ml-auto">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="btn btn-link text-black transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-link text-black transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-link text-black transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </div>
    </header>

    <div class="main-content">
   
    </div>

    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 Article Publishing System. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS and dependencies (jQuery and Popper.js) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
