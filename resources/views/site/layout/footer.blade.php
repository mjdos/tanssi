        <!--Footer area-->
        @php
        $usuario = Session::get('usuario');
        @endphp
        <footer class="footer footer-margin">
            <div class="footer-wrapper container">

                <div class="footer-content">
                    <div class="footer-row flex-space-between align-items-center">
                        <div class="logo">
                            <a class="logo-link" href="01-home-ds.html">
                                <div class="logo-img"><img src="{{ url('assets/img/logo.png') }}" alt="logo"></div>
                                <div class="logo-text">CriptoMeta</div>
                            </a>
                        </div>
                    </div>
                    <br>
                    <div class="widget-content flex-space-between">
                        <div class="is-two-col-element">

                            <ul class="footer-menu">
                                <li class="menu-item"><a class="menu-link" href="{{route('home')}}">Home</a></li>
                            </ul>
                            <ul class="footer-menu">
                                <li class="menu-item"><a class="menu-link" href="{{route('home')}}">Market Place</a></li>
                            </ul>
                            <ul class="footer-menu">
                                <li class="menu-item"><a class="menu-link" href="{{route('nft.criar')}}">Create NFT</a></li>
                            </ul>

                        </div>
                    </div>
                    <br>
                    <div class="widget-content flex-space-between">
                        <ul class="social-icons-list">
                            <li class="social-icon"><a href="#"><svg class="crumina-icon">
                                        <use xlink:href="#facebook-icon"></use>
                                    </svg></a></li>
                            <li class="social-icon"><a href="#"><svg class="crumina-icon">
                                        <use xlink:href="#twitter-icon"></use>
                                    </svg></a></li>
                            <li class="social-icon"><a href="#"><svg class="crumina-icon">
                                        <use xlink:href="#instagram-icon"></use>
                                    </svg></a></li>
                            <li class="social-icon"><a href="#"><svg class="crumina-icon">
                                        <use xlink:href="#twitch-icon"></use>
                                    </svg></a></li>
                            <li class="social-icon"><a href="#"><svg class="crumina-icon">
                                        <use xlink:href="#discord-icon"></use>
                                    </svg></a></li>
                        </ul>
                    </div>
                </div>
                <!--  footer content -->
                <!--  copyright section -->
                <div class="footer-copyright flex-space-between">
                    <span class="copyright-text">
                        CriptoMeta 2024 - All Rights Reserved
                    </span>
                </div>
                <!--  copyright section -->
            </div>
        </footer>
        <!--Footer area-->
        </div>

        <script defer src="{{ url('assets/js/waves.min.js')}}"></script>
        <script defer src="{{ url('assets/js/swiper-bundle.min.js')}}"></script>
        <script defer src="{{ url('assets/js/main.js')}}"></script>
        <script defer src="{{ url('assets/js/svg-loader.js')}}"></script>
        <script defer src="{{ url('assets/js/nice-select2.js')}}"></script>
        <script defer src="{{ url('assets/js/countdown.js')}}"></script>

        </body>

        </html>
