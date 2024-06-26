<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-...." crossorigin="anonymous" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Montserrat&family=Nunito&family=Poppins:wght@300;400&family=Roboto+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Libre+Baskerville&family=Montserrat&family=Playfair+Display&family=Roboto+Slab&family=Roboto:wght@300;400&family=Sacramento&family=Satisfy&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Aleo&family=Lato&family=Montserrat&family=Nunito&family=Poppins:wght@300;400&family=Roboto+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Nastaliq+Urdu:wght@400..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&family=Varela+Round&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Bodoni:ital,wght@0,400..700;1,400..700&family=Play:wght@400;700&family=Varela+Round&display=swap" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/arial-mt" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @include('includes.head')
    <script>
        $(document).ready(function () {
            // Function to move Menu 2 items based on screen size
            function moveMenu2Items() {
                var screenWidth = $(window).width();
                var dynamicMenuItemsContainer = $('.dynamic-menu-items');
                dynamicMenuItemsContainer.empty();

                if (screenWidth <= 767) {
                    // Move Menu 2 items to Menu 1
                    dynamicMenuItemsContainer.append($('.sidebar-content').html());

                } else {
                    // Remove Menu 2 items from Menu 1
                    $('.dynamic-menu-items').empty();
                }
            }

            // Initial check on document ready
            moveMenu2Items();

            // Check on window resize
            $(window).resize(function () {
                moveMenu2Items();
            });
        });
    </script>
</head>
<body>

@include('includes.header')
@include('pages.popup')

<div class="floating-tab">
    <p>Get in Touch</p>
</div>
<a href="#" class="whatsapp" data-toggle="modal" data-target="#contactModal" data-placement="top" title="Connect via Whatsapp">
    <i class="bi bi-whatsapp"></i>
</a>


<div class="above-hello main-content">
    <div class="row justify-content-center">
        <div class="col-md-3">
            @include('includes.sidebar')
        </div>
        <div class="hello col-md-5">
            @yield('content')
        </div>
    </div>
</div>

<footer class="row justify-content-center">
    @include('includes.footer')
</footer>

</body>
</html>
