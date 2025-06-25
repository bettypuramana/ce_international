<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<title>CE International</title>-->
    @yield('title')
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/uploads/logos/ce-logo.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/user/style.css') }}" />
    <script src="https://unpkg.com/lucide@latest"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/paper.js/0.12.0/paper-core.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/simplex-noise/2.4.0/simplex-noise.min.js"></script>
    @yield('css')
</head>

<body>
    <header>
        <div class="cursor cursor--small"></div>
        <canvas class="cursor cursor--canvas" resize></canvas>
        <div class="logo">
            <a href="{{ route('user.home') }}"><img src="{{ asset('assets/uploads/logos/ce-logo.png') }}" alt="ce-logo"></a>
        </div>
        <div class="header-center">
            <nav class="navbar">
                <ul class="nav-menu">
                    <li><a href="{{ route('user.home') }}">Home</a></li>
                    <li class="has-dropdown">
                        <a href="{{ route('user.expertise') }}">Expertise ▾</a>
                        <div class="dropdown">
                            <div class="dropdown-item">
                                <img src="{{ asset('assets/uploads/icons2/engineering-icon.png') }}" alt="Icon 1" class="box-icon" />
                                <div class="content">
                                    <h4>ENGINEERING</h4>
                                    <p>Engineering is not merely a discipline; it is the cornerstone that shapes all our
                                        services.</p>
                                </div>
                                <a href="{{ route('user.expertise') }}"><img src="{{ asset('assets/uploads/icons2/mouse-icon.png') }}"
                                        class="icon mouse-icon" /></a>
                            </div>
                            <div class="dropdown-item">
                                <img src="{{ asset('assets/uploads/icons2/engineering-icon.png') }}" alt="Icon 2" class="box-icon" />
                                <div class="content">
                                    <h4>INTEGRATED RESOLUTION SERVICES</h4>
                                    <p>Contracts, Claims, Experts, Arbitrators, and Dispute Management
                                    </p>
                                </div>
                                <a href="#section-integrated"><img src="{{ asset('assets/uploads/icons2/mouse-icon.png') }}"
                                        class="icon mouse-icon" /></a>
                            </div>
                            <div class="dropdown-item">
                                <img src="{{ asset('assets/uploads/icons2/education-icon.png') }}" alt="Icon 3" class="box-icon" />
                                <div class="content">
                                    <h4>EDUCATION</h4>
                                    <p>we believe in the power of knowledge
                                    </p>
                                </div>
                                <a href="#section-education"><img src="{{ asset('assets/uploads/icons2/mouse-icon.png') }}"
                                        class="icon mouse-icon" /></a>
                            </div>
                            <div class="dropdown-item">
                                <img src="{{ asset('assets/uploads/icons2/mining-icon.png') }}" alt="Icon 4" class="box-icon" />
                                <div class="content">
                                    <h4>MINING</h4>
                                    <p>CIN-HOUSE CAPABILITY &
                                        COMPLEMENTARY ALLIANCES
                                    </p>
                                </div>
                                <a href="{{ route('user.mining') }}"><img src="{{ asset('assets/uploads/icons2/mouse-icon.png') }}"
                                        class="icon mouse-icon" /></a>
                            </div>
                            <div class="dropdown-item">
                                <img src="{{ asset('assets/uploads/icons2/defense-icon.png') }}" alt="Icon 5" class="box-icon" />
                                <div class="content">
                                    <h4>DEFENSE</h4>
                                    <p>TRAINING, EQUIPMENT
                                        & CYBER SECURITY
                                    </p>
                                </div>
                                <a href="#section-defense"><img src="{{ asset('assets/uploads/icons2/mouse-icon.png') }}"
                                        class="icon mouse-icon" /></a>
                            </div>
                            <div class="dropdown-item">
                                <img src="{{ asset('assets/uploads/icons2/bpo-icon.png') }}" alt="Icon 6" class="box-icon" />
                                <div class="content">
                                    <h4>BPO</h4>
                                    <p>Business process outsourcing
                                    </p>
                                </div>
                                <a href="#section-bpo"><img src="{{ asset('assets/uploads/icons2/mouse-icon.png') }}"
                                        class="icon mouse-icon" /></a>
                            </div>
                        </div>
                    </li>
                    <li><a href="{{ route('user.careers') }}">Careers</a></li>
                    <li><a href="{{ route('user.contact_us') }}">Contact Us</a></li>
                </ul>
            </nav>
        </div>
        <div class="mobile-menu-toggle">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </header>

        @yield('content')


    <footer class="footer">
        <div class="footer-logo">
            <a href="{{ route('user.home') }}"><img src="{{ asset('assets/uploads/logos/ce-logo-footer.png') }}" alt="ce logo"></a>
        </div>

        <div class="footer-nav">
            <h4>NAVIGATION</h4>
            <ul class="main-links">
                <li><a href="{{ route('user.home') }}">Home</a></li>
                <li><a href="{{ route('user.expertise') }}">Expertise <span class="dot">▾</span></a></li>
                <li><a href="{{ route('user.careers') }}">Careers</a></li>
                <li><a href="{{ route('user.contact_us') }}">Contact Us</a></li>
            </ul>
            <ul class="sub-links">
                <li><a href="{{ route('user.expertise') }}">Engineering</a></li>
                <li>Integrated Resolution Services</li>
                <li>Education</li>
                <li><a href="{{ route('user.mining') }}">Mining</a></li>
                <li>Defense</li>
                <li>BPO</li>
            </ul>
        </div>

        <div class="footer-locations">
            <h4>OUR LOCATIONS</h4>
            <p><strong class="highlight">Doha – Qatar</strong><br>
                11<sup>th</sup> Floor, Al Reem Tower B37, ST 841, Zone 63</p>
            <p><strong class="highlight">Muscat – Oman</strong><br>
                Ghala, Al Fardan Heights Fourth Floor, 424<br>
                P.O. Box: 47, P.C.: 138</p>
        </div>
    </footer>

    <div class="footer-bottom">
        <p class="copyright">All rights reserved | © {{ date('Y') }} CE International</p>
    </div>
    @yield('js')
</body>

</html>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const menuToggle = document.querySelector('.mobile-menu-toggle');
        const nav = document.querySelector('nav');
        const navItems = document.querySelectorAll('nav > ul > li');


        if (menuToggle && nav) {
            menuToggle.addEventListener('click', function () {
                this.classList.toggle('active');
                nav.classList.toggle('active');
            });
        }

        navItems.forEach(item => {
            const dropdown = item.querySelector('.dropdown');
            const link = item.querySelector('a');


            if (window.innerWidth > 768 && dropdown) {
                item.addEventListener('mouseenter', () => {
                    dropdown.style.display = 'grid';
                });

                item.addEventListener('mouseleave', () => {
                    dropdown.style.display = 'none';
                });
            }

            // Mobile click toggle
            if (link && dropdown) {
                link.addEventListener('click', function (e) {
                    if (window.innerWidth <= 768) {
                        e.preventDefault();
                        const isActive = item.classList.contains('active');


                        navItems.forEach(i => {
                            i.classList.remove('active');
                            const d = i.querySelector('.dropdown');
                            if (d) d.style.display = 'none';
                        });


                        if (!isActive) {
                            item.classList.add('active');
                            dropdown.style.display = 'grid';
                        }
                    }
                });
            }
        });

        // Close menu when clicking non-dropdown links (mobile only)
        document.querySelectorAll('nav a').forEach(link => {
            const parent = link.parentElement;
            if (!parent.querySelector('.dropdown')) {
                link.addEventListener('click', () => {
                    if (window.innerWidth <= 768) {
                        if (menuToggle) menuToggle.classList.remove('active');
                        if (nav) nav.classList.remove('active');
                    }
                });
            }
        });
    });
</script>
<!-- <script>

    // CURSOR SCRIPT
    let clientX = 100;
    let clientY = 100;
    const innerCursor = document.querySelector(".cursor--small");

    const initCursor = () => {

        document.addEventListener("mousemove", e => {
            clientX = e.clientX;
            clientY = e.clientY;
        });

        const render = () => {
            innerCursor.style.transform = `translate(${clientX}px, ${clientY}px)`;
            requestAnimationFrame(render);
        };
        requestAnimationFrame(render);
    };

    initCursor();

    let lastX = 0;
    let lastY = 0;
    let isStuck = false;
    let showCursor = false;
    let group, stuckX, stuckY, fillOuterCursor;

    const initCanvas = () => {
        const canvas = document.querySelector(".cursor--canvas");
        const shapeBounds = {
            width: 75,
            height: 75
        };
        paper.setup(canvas);
        const strokeColor = "rgb(230, 214, 26, 1)";
        const strokeWidth = 1;
        const segments = 8;
        const radius = 20;


        const noiseScale = 500;
        const noiseRange = 10;
        let isNoisy = false;


        const polygon = new paper.Path.RegularPolygon(
            new paper.Point(0, 0),
            segments,
            radius
        );
        polygon.strokeColor = strokeColor;
        polygon.strokeWidth = strokeWidth;
        polygon.smooth();
        group = new paper.Group([polygon]);
        group.applyMatrix = false;

        const noiseObjects = polygon.segments.map(() => new SimplexNoise());
        let bigCoordinates = [];


        const lerp = (a, b, n) => {
            return (1 - n) * a + n * b;
        };

        const map = (value, in_min, in_max, out_min, out_max) => {
            return (
                ((value - in_min) * (out_max - out_min)) / (in_max - in_min) + out_min
            );
        };

        paper.view.onFrame = event => {
            lastX = lerp(lastX, clientX, 0.2);
            lastY = lerp(lastY, clientY, 0.2);
            group.position = new paper.Point(lastX, lastY);
        }
    }

    initCanvas();

</script> -->
<script>
    lucide.createIcons();
</script>