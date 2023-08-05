<?php
    include_once 'header.php';
?>
    <main>
        <div class="container">
            <header
                class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
                <div class="col-md-3 mb-2 mb-md-0">
                    <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="#0b5ed7"
                            class="bi bi-android2" viewBox="0 0 16 16">
                            <path
                                d="m10.213 1.471.691-1.26c.046-.083.03-.147-.048-.192-.085-.038-.15-.019-.195.058l-.7 1.27A4.832 4.832 0 0 0 8.005.941c-.688 0-1.34.135-1.956.404l-.7-1.27C5.303 0 5.239-.018 5.154.02c-.078.046-.094.11-.049.193l.691 1.259a4.25 4.25 0 0 0-1.673 1.476A3.697 3.697 0 0 0 3.5 5.02h9c0-.75-.208-1.44-.623-2.072a4.266 4.266 0 0 0-1.664-1.476ZM6.22 3.303a.367.367 0 0 1-.267.11.35.35 0 0 1-.263-.11.366.366 0 0 1-.107-.264.37.37 0 0 1 .107-.265.351.351 0 0 1 .263-.11c.103 0 .193.037.267.11a.36.36 0 0 1 .112.265.36.36 0 0 1-.112.264Zm4.101 0a.351.351 0 0 1-.262.11.366.366 0 0 1-.268-.11.358.358 0 0 1-.112-.264c0-.103.037-.191.112-.265a.367.367 0 0 1 .268-.11c.104 0 .19.037.262.11a.367.367 0 0 1 .107.265c0 .102-.035.19-.107.264ZM3.5 11.77c0 .294.104.544.311.75.208.204.46.307.76.307h.758l.01 2.182c0 .276.097.51.292.703a.961.961 0 0 0 .7.288.973.973 0 0 0 .71-.288.95.95 0 0 0 .292-.703v-2.182h1.343v2.182c0 .276.097.51.292.703a.972.972 0 0 0 .71.288.973.973 0 0 0 .71-.288.95.95 0 0 0 .292-.703v-2.182h.76c.291 0 .54-.103.749-.308.207-.205.311-.455.311-.75V5.365h-9v6.404Zm10.495-6.587a.983.983 0 0 0-.702.278.91.91 0 0 0-.293.685v4.063c0 .271.098.501.293.69a.97.97 0 0 0 .702.284c.28 0 .517-.095.712-.284a.924.924 0 0 0 .293-.69V6.146a.91.91 0 0 0-.293-.685.995.995 0 0 0-.712-.278Zm-12.702.283a.985.985 0 0 1 .712-.283c.273 0 .507.094.702.283a.913.913 0 0 1 .293.68v4.063a.932.932 0 0 1-.288.69.97.97 0 0 1-.707.284.986.986 0 0 1-.712-.284.924.924 0 0 1-.293-.69V6.146c0-.264.098-.491.293-.68Z" />
                        </svg>
                    </a>
                </div>
                <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2 link-secondary">Home</a></li>
                    <li><a href="#" class="nav-link px-2">Features</a></li>
                    <li><a href="#" class="nav-link px-2">Pricing</a></li>
                    <li><a href="#" class="nav-link px-2">FAQs</a></li>
                    <li><a href="#" class="nav-link px-2">About</a></li>
                </ul>

                <div class="col-md-3 text-end">
                    <button type="button" class="btn btn-outline-primary me-2">Login</button>
                    <button type="button" class="btn btn-primary">Sign-up</button>
                </div>
        </div>
    </main>

    <!-- <div id="header-holder">
    <div class="cloud-bg"></div>
    <nav id="nav" class="navbar navbar-full">
        <div class="container-fluid">
            <div class="container container-nav">
                <div class="row">
                    <div class="col-md-12">
                        <div class="navbar-header">
                            <button aria-expanded="false" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="index.html"><img src="images/logo.svg" alt="Hustbee"></a>
                        </div>
                        <div style="height: 1px;" role="main" aria-expanded="false" class="navbar-collapse collapse navbar-collapse-centered" id="bs">
                            <ul class="nav navbar-nav navbar-nav-centered">
                                <li class="nav-item"><a class="nav-link" href="home-light.html">Light Header</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Hosting Services</a>
                                    <div class="dropdown-menu custom-dropdown-menu">
                                        <div class="dropdown-items-holder">
                                            <div class="items-with-icon">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-6">
                                                        <a href="webhosting.html" class="link-with-icon">
                                                            <span class="icon"><img src="images/server1.svg" alt=""></span>
                                                            <span class="text">Web Hosting</span>
                                                        </a>
                                                        <a href="cloudhosting.html" class="link-with-icon">
                                                            <span class="icon"><img src="images/server2.svg" alt=""></span>
                                                            <span class="text">Cloud Hosting</span>
                                                        </a>
                                                        <a href="vpshosting.html" class="link-with-icon">
                                                            <span class="icon"><img src="images/server3.svg" alt=""></span>
                                                            <span class="text">VPS Hosting</span>
                                                        </a>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6">
                                                        <a href="wordpresshosting.html" class="link-with-icon">
                                                            <span class="icon"><img src="images/server4.svg" alt=""></span>
                                                            <span class="text">Wordpress Hosting</span>
                                                        </a>
                                                        <a href="dedicatedhosting.html" class="link-with-icon">
                                                            <span class="icon"><img src="images/server5.svg" alt=""></span>
                                                            <span class="text">Dedicated Hosting</span>
                                                        </a>
                                                        <a href="domains.html" class="link-with-icon">
                                                            <span class="icon"><img src="images/server6.svg" alt=""></span>
                                                            <span class="text">Domain Names</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="items">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-6">
                                                        <a href="#" class="link">Hustbee Features</a>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6">
                                                        <a href="#" class="link">Website builder</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="domains.html">Domains</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Support</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="about.html">About</a></li>
                                        <li><a class="dropdown-item" href="blog.html">Blog</a></li>
                                        <li><a class="dropdown-item" href="privacy.html">Privacy</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right other-navbar">
                                <li class="nav-item">
                                    <a class="nav-link btn-client-area" href="login.html"><img src="images/lock.svg" alt="">Client Area</a>
                                    <div class="chat-info"><i class="hstb hstb-right-arrow"></i>Chat Available</div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn-chat" href="#"><i class="hstb hstb-chat"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div id="top-content" class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="main-slider slick-initialized slick-slider slick-dotted"><div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 4560px;"><div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" role="tabpanel" id="slick-slide00" style="width: 1140px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;" aria-describedby="slick-slide-control00"><div><div class="slide" style="width: 100%; display: inline-block;">
                            <div class="row rtl-row">
                                <div class="col-sm-5">
                                    <div class="img-holder">
                                        <img src="images/slide-img1.png" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="b-text">Outstanding Web<br>Hosting for you.</div>
                                    <div class="m-text">Starting at only <span class="bold">$2.38/mo*</span></div>
                                    <a href="#" class="hbtn hbtn-primary hbtn-lg" tabindex="0">Hosting Services</a>
                                </div>
                            </div>
                        </div></div></div><div class="slick-slide" data-slick-index="1" aria-hidden="true" role="tabpanel" id="slick-slide01" style="width: 1140px; position: relative; left: -1140px; top: 0px; z-index: 998; opacity: 0; transition: opacity 1000ms ease 0s;" aria-describedby="slick-slide-control01" tabindex="-1"><div><div class="slide" style="width: 100%; display: inline-block;">
                            <div class="row rtl-row">
                                <div class="col-sm-5">
                                    <div class="img-holder">
                                        <img src="images/slide-img2.png" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="b-text">Create your first<br>website today.</div>
                                    <div class="m-text">Starting at only <span class="bold">$2.38/mo*</span></div>
                                    <a href="#" class="hbtn hbtn-primary hbtn-lg" tabindex="-1">Create now</a>
                                </div>
                            </div>
                        </div></div></div><div class="slick-slide" data-slick-index="2" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide02" style="width: 1140px; position: relative; left: -2280px; top: 0px; z-index: 998; opacity: 0;" aria-describedby="slick-slide-control02"><div><div class="slide" style="width: 100%; display: inline-block;">
                            <div class="row rtl-row">
                                <div class="col-sm-5">
                                    <div class="img-holder">
                                        <img src="images/slide-img3.png" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="b-text">Build your site<br>with page builder</div>
                                    <div class="m-text">Starting at only <span class="bold">$2.38/mo*</span></div>
                                    <a href="#" class="hbtn hbtn-primary hbtn-lg" tabindex="-1">Learn more</a>
                                </div>
                            </div>
                        </div></div></div><div class="slick-slide" data-slick-index="3" aria-hidden="true" role="tabpanel" id="slick-slide03" style="width: 1140px; position: relative; left: -3420px; top: 0px; z-index: 998; opacity: 0; transition: opacity 1000ms ease 0s;" aria-describedby="slick-slide-control03" tabindex="-1"><div><div class="slide" style="width: 100%; display: inline-block;">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="main-domain-search-holder">
                                        <div class="b-text">Simple, affordable<br>Web Hosting</div>
                                        <form>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="input-items">
                                                        <input type="text" class="form-control domain-input" name="domain" placeholder="My domain name" autocapitalize="none" tabindex="-1">
                                                        <span class="input-items-btn">
                                                            <input type="submit" class="btn search" value="Search" tabindex="-1">
                                                            <input type="submit" name="transfer" class="btn transfer" value="Transfer" tabindex="-1">
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="m-text">Starting at only <span class="bold">$2.38/mo*</span></div>
                                    </div>
                                </div>
                            </div>
                        </div></div></div></div></div><ul class="slick-dots" style="" role="tablist"><li class="slick-active" role="presentation"><button type="button" role="tab" id="slick-slide-control00" aria-controls="slick-slide00" aria-label="1 of 4" tabindex="0" aria-selected="true">1</button></li><li role="presentation" class=""><button type="button" role="tab" id="slick-slide-control01" aria-controls="slick-slide01" aria-label="2 of 4" tabindex="-1">2</button></li><li role="presentation"><button type="button" role="tab" id="slick-slide-control02" aria-controls="slick-slide02" aria-label="3 of 4" tabindex="-1">3</button></li><li role="presentation" class=""><button type="button" role="tab" id="slick-slide-control03" aria-controls="slick-slide03" aria-label="4 of 4" tabindex="-1">4</button></li></ul></div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<?php
    include_once 'footer.php';
?>