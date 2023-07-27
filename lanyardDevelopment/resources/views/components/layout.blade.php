<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Lanyard Development</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Montserrat -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite(['resources/css/app.css','resources/js/app.js'])
    <style>
        .slideshow {
            display: flex;
            overflow: hidden;
            max-width: 600px; /* Set the desired width of your slideshow */
            margin: 0 auto;
        }

        .slide {
            flex-shrink: 0;
            width: 100%;
            transition: opacity 0.3s;
            display: none;
        }

        .slide img {
            width: 100%;
            height: auto;
        }

        .thumbnails {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }

        .thumbnails img {
            width: 100px; /* Set the desired width of your thumbnails */
            height: auto;
            margin: 0 5px;
            cursor: pointer;
            opacity: 0.7;
            transition: opacity 0.3s;
        }

        .thumbnails img.active {
            opacity: 1;
        }
    </style>
    <script>
        function slideshow() {
            return {
                slides: [
                    { image: '/img/204.jpg', title: 'Slide 1' },
                    { image: '/img/204.jpg', title: 'Slide 2' },
                    { image: '/img/204.jpg', title: 'Slide 3' },
                    // Add more slides here
                ],
                currentIndex: 0,
                init() {
                    // Auto-advance slides every 5 seconds (adjust as needed)
                    setInterval(() => {
                        this.nextSlide();
                    }, 2000);
                },
                prevSlide() {
                    this.currentIndex = (this.currentIndex - 1 + this.slides.length) % this.slides.length;
                },
                nextSlide() {
                    this.currentIndex = (this.currentIndex + 1) % this.slides.length;
                },
                goToSlide(index) {
                    this.currentIndex = index;
                },
            };
        }

    </script>
</head>
<body class="antialiased">
    <x-header></x-header>
    {{$slot}}
    <x-footer></x-footer>
</body>
</html>
