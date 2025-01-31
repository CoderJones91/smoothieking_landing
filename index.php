<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="/dist/js/index.js"></script>
    <link rel="shortcut icon" href="/dist/img/sklogo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
    <link rel="stylesheet" href="dist/css/main.css">
    <title>Smoothie King | Welcome</title>
</head>
<body>
    <script>document.body.className += ' fade-out';</script>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
        <a class="navbar-brand" href="#"><img src="/dist/img/smoothie-king-logo-527064604D-seeklogo.com.png" alt="sk logo"></a>  
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>  
        <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                    <a href="#about" class="nav-link">About</a>
            </li>
            <li class="nav-item">
                    <a href="#contact" class="nav-link">Contact</a>
            </li>
        </ul>
    </div>
    </div>
    </nav>
    <!--Hero Section-->
    <header id="hero-section">
        <div class="dark-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center">
                        <h1 class="text-uppercase">Get The Best Smoothies <span class="in-town">In Town</span></h1>
                        <a href="#about" class="btn learn-more px-4 py-2">Learn More</a>
                    </div>
                </div>
            </div>
        </div>

         <!--Subscription Form-->
    <div id="sub" class="subscribe pt-4 pb-5">
            <div class="container">
                <form method="POST" action="/mail.php">
                    <h2 class="text-center display-6 pb-4">Subscribe To <span class="news">Our Newsletter</span></h2>
                    <div class="row">
                    <div class="col lg-4">
                        <input type="text" name="Name" class="form-control bg-transparent" placeholder="Name"></input>
                    </div>
                    <div class="col lg-4">
                        <input type="text" name="Email" class="form-control bg-transparent" placeholder="Email"></input>
                    </div>
                    <div class="col-lg-2">
                        <button class="btn btn-block btn-sub"><i class="fa fa-paper-plane"></i> Subscribe</button>
                    </div>
                    </form>
    
                    </div>
                </div>
            </div>
        </div>

    </header>
    
    <!--About-->
    <section id="about">
        <div class="container">
            <h2 class="text-center text-uppercase mb-4">Our <span class="story">Story</span></h2>
            <p class="text-center">We believe each day is filled with promise and possibility. And our purpose is to help you get the most out of it. That’s why each of our ingredients is chosen carefully, and every one of our blends is crafted masterfully. So you can be your best self, live your best life, and rule the day. Our mission is to make healthy easier, and the company’s nutritionist-designed, superfood-centric menu does exactly that by offering a daily source of plant-based nutrition packed with natural and quick energy.</p>
            <div class="features">
                <h3 class="text-center text-uppercase mt-5">Featured <span class="smoothies">Smoothies</span></h3>
                <div class="images">
                    <div class="feats">
                    <img class="green" src="/dist/img/green-422995_640.jpg" alt="">
                    <h4 class="stype text-center mt-3 mb-2">Green Machine</h4>
                </div>
                <div class="feats">
                    <img class="green" src="/dist/img/strawberry-smoothie-1418212_640.jpg" alt="">
                    <h4 class="stype text-center mt-3 mb-2">Strawberry Sunrise</h4>
                </div>
                <div class="feats">
                    <img class="green" src="/dist/img/smoothie-790711_640.jpg" alt="">
                    <h4 class="stype text-center mt-3">Mango Tango</h4>
                </div>
                <//div>
                
            </div>
        </div>
    </section>

    <!--Contact-->
    <section id="contact">
        <div class="dark-overlay">
        <div class="container">
            <h2 class="text-center text-uppercase mb-5">Get In Touch <span class="with-us">With Us</span></h2> 
            <div class="contacts">
            <div class="address text-center">
                    <h2>Address</h2>
                    <p>123 Smoothie Ln,<br>
                    Colorado Springs, CO 80907</p>
                </div>

            <div class="email text-center">
                <h2>Email</h2>
                <a href="mailto: info@smoothieking.com">info@smoothieking.com</a>
            </div>  
        
            
            <div class="social text-center">
                <h2>Social</h2>
                <div class="icons">
                <a href="javascript:void(0)"><i class="fab fa-twitter fa-2x"></i></a>
                <a href="javascript:void(0)"><i class="fab fa-instagram fa-2x"></i></a>
                <a href="javascript:void(0)"><i class="fab fa-facebook fa-2x"></i></a>
            </div>
            </div>
        </div>
        </div>
        </div>
    </div>
    </section>
    

    <!--Footer-->
    <footer id="footer" class="p-2">
        <div class="container">
        <p class="text-center lign-middle">Copyright &copy 2019-2025 | By <a href="https://acoderjones.world">aCoder Jones</p></a>
    </div>
    </footer>
</body>
</html>