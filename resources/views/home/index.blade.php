@extends('app')
@section('content')
    <!-- Navbar -->
    
    <nav class="navbar navbar-expand-lg navbar-light bg-lg" style="background-color: #e3f2fd; border-radius: 5px;">
        <a style="padding-left:20px" class="navbar-brand" href="/request/about">Axborot texnalogiyalari kafedrasi</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-iten dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="">
                        O'quv yuklamalar
                    </a>
                        
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="http://localhost/www/sss_con.php">Fakultet talabalar ma'lumotlari</a></li>
                        <li><a class="dropdown-item" href="http://localhost/third%20table/index.php">Barcha yunalish o'quv rejalari</a></li>
                        <li><a class="dropdown-item" href="http://localhost/second%20table/index.php">Kafedra fanlarini kafedra nomi bo'yicha saralash </a></li>
                    </ul>

                   
                </li>
                <li class="nav-iten dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="">
                        Categories
                    </a>
                    
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{route('request.sciense')}}">Ilmiy ishlar</a></li>
                        <li><a class="dropdown-item" href="{{route('home.teacher')}}">Kafedra o'qituvchilari ma'lumotlari</a></li>
                        <li><a class="dropdown-item" href="{{route('news')}}">Yangilik qo'shish</a></li>
                    </ul>

                   
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('request.main')}}">Kafedra o'qituvchilari ro'yxati</a>
                </li>
                
                <!-- <li class="nav-item">
                    <a class="nav-link" href="{{route('request.sciense')}}">Ilmiy ishlar</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="{{route('companies.create')}}">Ariza qoldirish</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Hero section -->
    

    <!-- About section -->
    <br>

    <br>
    <section class="about" style="border: 1px solid #ccc;border-radius: 5px;">
        <div class="container" style="padding: 10px;">
            <div class="row">
                <div class="col-md-6">
                    <img src="https://s3.amazonaws.com/msoe/files/callouts/wide_sml_computer-science-landing-page.jpg" alt="About Us" class="img-fluid" style="border-radius: 10px;">
                </div>
                <div class="col-md-6">
                    <br>
                    <h2>About Us</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mollis felis vel enim iaculis
                        hendrerit. Sed vel faucibus est. Curabitur pellentesque eros sit amet massa porta, nec varius
                        magna posuere.</p>
                    <p>Etiam ut suscipit ex, non elementum lectus. In eget cursus eros, at fermentum metus. Integer
                        tincidunt est vel neque volutpat, at feugiat lectus maximus.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services section -->
    <section class="services">
        <div class="container">
            <br>
            <h2 class="text-center">Our Services</h2>
            <br>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://www.dhl.com/content/dam/dhl/global/delivered/images/social-share-1200x630/d128-dl-bytes-on-the-brain.jpg" alt="Service 1" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Suniy intellekt</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://www.dbta.com/Images/Default.aspx?ImageID=19031" alt="Service 2" class="card-img-top" style="height: 185px;">
                        <div class="card-body">
                            <h5 class="card-title">Ma'lumotlar bazasi</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://uploads-ssl.webflow.com/61eeba8765031c95bb83b2ea/61fbec562cf81f62a255f192_61eeb99a54a67e18ce19d47c_0_nyBFE8lLgr8ePAJ_%20(1).jpeg" alt="Service 3" class="card-img-top" style="height: 185px;">
                        <div class="card-body">
                            <h5 class="card-title">Machine learning</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <section class="hero" style="border: 1px solid #ccc;border-radius: 5px;">
        <div class="container" style="padding: 10px;">
        
        <h1 class="text-center mb-3">Yangiliklar</h1>
            <div class="row">
                <div class="col-md-6">
                    <h1>{{$newss->title}}</h1>
                    <p>{{$newss->content}}</p>
                    <!-- <a href="#" class="btn btn-primary">Learn More</a> -->
                </div>
                <div class="col-md-6">
                    
                    @if ($newss->rasm)
                        <img src="{{ asset('storage/' . $newss->rasm) }}" alt="" class="img-fluid rounded float-end w-200 h-200" style="border-radius: 10px;  ">
                    @else
                        <p>No image available</p>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!-- Contact section -->
    <!-- <br>
    <section class="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <div class="row">
                <div class="col-md-6">
                    <form>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" rows="5" placeholder="Your Message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <h5>Contact Information</h5>
                    <p><strong>Address:</strong> 123 Main St, City, Country</p>
                    <p><strong>Email:</strong> info@example.com</p>
                    <p><strong>Phone:</strong> +123 456 789</p>
                </div>
            </div>
        </div>
    </section> -->
    <br>
    <br>
    <!-- Footer section -->
    <footer class="footer">
        <div class="container text-center">
            <p>&copy; 2023 IT Department. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
@endsection