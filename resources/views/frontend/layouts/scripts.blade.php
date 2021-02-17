<script src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<!-- Bootstrap bundle -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.bundle.min.js"
  integrity="sha384-CS0nxkpPy+xUkNGhObAISrkg/xjb3USVCwy+0/NMzd5VxgY4CMCyTkItmy5n0voC" crossorigin="anonymous"></script>

<!-- Sweet Alert -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"
  integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA=="
  crossorigin="anonymous"></script>

<script
  src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-rwdImageMaps/1.6/jquery.rwdImageMaps.min.js" integrity="sha512-eZB7hQa0bRlrKMQ2njpP0d/Klu6o30Gsr8e5FUCjUT3fSlnVkm/1J14n58BuwgaMuObrGb7SvUfQuF8qFsPU4g==" crossorigin="anonymous"></script>
<script src="{{ asset('js/front.js') }}"></script>

<script>
  $(document).ready(function () {
        // $("#sidebar").mCustomScrollbar({
        //     theme: "minimal"
        // });

        $('#dismiss, .overlay').on('click', function () {
            // hide sidebar
            $('.menu-sidebar').removeClass('active');
            // hide overlay
            $('.overlay').removeClass('active');
        });

        $('#sidebarCollapse').on('click', function () {
            // open sidebar
            $('#sidebar').addClass('active');
            // fade in the overlay
            $('.overlay').addClass('active');
            $('.collapse.in').toggleClass('in');
            $('a[aria-expanded=true]').attr('aria-expanded', 'false');
        });

        $('#sideProductosCollapse').on('click', function () {
            // open sidebar
            $('#sidebar-productos').addClass('active');
        });

        $('#dismissProductos').on('click', function () {
            // hide sidebar
            $('#sidebar-productos').removeClass('active');
        });


    });
</script>