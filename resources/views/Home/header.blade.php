<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <img  style="height: 70px; width:200px;" src="Home/assets/images/logo.png">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                        <li class="scroll-to-section"><a href="about.html">About Us</a></li>
                        <li class="scroll-to-section"><a href="{{ route('link.product') }}" >Products</a></li>
                        <li class="scroll-to-section"><a href="contact.html">Contact Us</a></li>
                        
                       
                        <li class="submenu">
                            <a href="{{ route('login') }}">Login</a>
                            <ul>
                                <li><a href="{{ route('register') }}" >Sign in</a></li>
                                
                            </ul>
                        </li>
                      
                    </ul>        
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>