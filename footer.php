<div class="footer-bottom">
    <div class="container">
        <div class="row">
            <div class="copyright">
                <p>&copy; <?php echo date('Y'); ?> Copyright - Developed By <a href="https://github.com/Hoho-san" target="_blank" style="text-decoration: none; font-weight:bold; color: red;">Hoho-san</a> </p>
            </div>
        </div>
    </div>
</div>

<script src="https://unpkg.com/typed.js@2.0.132/dist/typed.umd.js"></script>
<script src="assets/script/script.js"></script>
<script src="assets/script/typed.js"></script>
<script src="assets/script/particles.js"></script>
<script src="assets/script/app.js"></script>

 <script
            src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous"
        ></script>

        <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
        <script>
            $(".portfolio-item").isotope({
                // options
                itemSelector: ".item",
                layoutMode: "fitRows",
            });
            $(".portfolio-menu ul li").click(function () {
                $(".portfolio-menu ul li").removeClass("active");
                $(this).addClass("active");

                var selector = $(this).attr("data-filter");
                $(".portfolio-item").isotope({
                    filter: selector,
                });
                return false;
            });
        </script>

        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>

</body>

</html>