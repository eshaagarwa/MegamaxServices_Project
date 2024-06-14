<?php

echo '<nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
    <a href="index.html" class="navbar-brand p-0">
        <h1 class="m-0"><img src="img/logo.png" alt=""></h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="index.php" class="nav-item nav-link active">Home</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">About</a>
                 <div class="dropdown-menu m-0">
                    <a href="about.php" class="dropdown-item">About us</a>
                    <a href="leader.php" class="dropdown-item">Leadership</a>
                    <a href="team.php" class="dropdown-item">Our Partners</a>
                    <a href="testimonial.php" class="dropdown-item">Awards</a>
                    
                </div> 
            </div>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                 <div class="dropdown-menu m-0">
                    <a href="service.php" class="dropdown-item">Offerings</a>
                    
                    <a href="price.php" class="dropdown-item">Success  Stories</a>
                    
                </div> 
            </div>

            
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Insight</a>
                 <div class="dropdown-menu m-0">
                    <a href="blog.html" class="dropdown-item">Blogs</a>
                    <a href="feature.html" class="dropdown-item">News</a>
                </div> 
            </div>
            <a href="Career.php" class="nav-item nav-link">Careers</a>
            <a href="contact.php" class="nav-item nav-link">Contact</a>
        </div>
        <butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal"
            data-bs-target="#searchModal"></button>
        <a href="quote.php" class="btn btn-primary py-2 px-4 ms-3">Get a quote</a>
    </div>
</nav>';
