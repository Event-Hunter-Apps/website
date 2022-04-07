<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Event Hunter</title>
    <link rel="stylesheet" href="./assets/css/landing.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins'>
    <link rel="stylesheet" href="./assets/css/style_dito.css">

    <!-- batas -->
    <link rel="stylesheet" href="./assets/css/style_dito.css">

    <style type="text/css">
        .autohide {
            position: fixed;
            top: 0;
            right: 0;
            left: 0;
            width: 100%;
            z-index: 1030;
        }

        .scrolled-down {
            transform: translateY(-100%);
            transition: all 0.3s ease-in-out;
        }

        .scrolled-up {
            transform: translateY(0);
            transition: all 0.3s ease-in-out;
        }
    </style>
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function() {
            el_autohide = document.querySelector(".autohide");

            // add padding-top to bady (if necessary)
            navbar_height = document.querySelector(".navbar").offsetHeight;
            document.body.style.paddingTop = navbar_height + "px";

            if (el_autohide) {
                var last_scroll_top = 0;
                window.addEventListener("scroll", function() {
                    let scroll_top = window.scrollY;
                    if (scroll_top < last_scroll_top) {
                        el_autohide.classList.remove("scrolled-down");
                        el_autohide.classList.add("scrolled-up");
                    } else {
                        el_autohide.classList.remove("scrolled-up");
                        el_autohide.classList.add("scrolled-down");
                    }
                    last_scroll_top = scroll_top;
                });
                // window.addEventListener
            }
            // if
        });
        // DOMContentLoaded  end
    </script>

</head>

<body>
    @include('template.navbar')
    @yield('body')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/961ee325af.js" crossorigin="anonymous"></script>
</body>

</html>