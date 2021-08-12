<!-- ========== Start Scroll To Top ========== -->

<a href="#" class="scroll-top">
    <span><i class="fa fa-arrow-up"></i></span>
</a>

<!-- ========== End Scroll To Top ========== -->

<!-- ========== Start Footer ========== -->

<div class="footer text-center">
    <div class="footer-info">
        <div class="container">
            <p class="copyright">
                copyright &copy; 2020 FusionBlog, All Right Reserved
            </p>
            <div class="textwidget custom-html-widget">
                <ul class="social-icons-menu list-unstyled">
                    @foreach($socialNetworks as $social)
                        <li><a href="{{$social['social_network_url']}}" target="_blank"><i class="{{$social['social_network_icon']}}"></i></a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- ========== End Footer ========== -->

<!-- ========== Js ========== -->

<!-- jQuery -->
<script src="{{ asset('front') }}/js/jquery-3.2.1.min.js"></script>
<!-- Bootstrap Js -->
<script src="{{ asset('front') }}/js/bootstrap.min.js"></script>
<!-- Slick Js -->
<script src="{{ asset('front') }}/js/slick.min.js"></script>
<!-- Main Js -->
<script src="{{ asset('front') }}/js/main.js"></script>
</body>
</html>
