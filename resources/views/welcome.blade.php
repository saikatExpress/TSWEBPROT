<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shakawat H. Saikat | Full Stack Developer</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <!-- Dark/Light Mode Toggle -->
    <div class="theme-switch">
        <i class="fas fa-moon"></i>
    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#" style="font-weight:bold;">
                Saikat
                <span style="color:yellow; font-weight: bold;">
                    Dev
                </span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#home">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">
                            About
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#skills">
                            Skills
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projects">
                            Projects
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonials">
                            Clients
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">
                            Contact
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="hero-title">Hi, I'm <span>Shakawat H. Saikat</span></h1>
                    <h2 class="hero-subtitle">Full Stack Web Developer</h2>
                    <p class="hero-text">I build scalable web applications with PHP, Python, JavaScript & modern
                        frameworks.</p>
                    <div class="hero-buttons">
                        <a href="#projects" class="btn btn-primary me-2">View My Work</a>
                        <a href="#contact" class="btn btn-outline-light">Hire Me</a>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="{{ asset('assets/img/logo.jpeg') }}" alt="Shakawat H. Saikat" class="img-fluid hero-img">
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section about-section">
        <div class="container">
            <div class="section-title">
                <h2>About <span>Me</span></h2>
                <p>Professional Background & Experience</p>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <img src="assets/img/logo.jpeg" alt="About Saikat" class="img-fluid rounded">
                </div>
                <div class="col-lg-6">
                    <h3>Full Stack Developer (4+ Years Experience)</h3>
                    <p>I specialize in building <strong>E-commerce, POS, Accounting Software, and Custom Web
                            Applications</strong> using PHP (Laravel, CodeIgniter), JavaScript (Vue.js, jQuery), Python
                        (Django), and MySQL.</p>
                    <div class="info-list">
                        <ul>
                            <li><strong>Name:</strong> Shakawat Hosen Saikat</li>
                            <li><strong>Experience:</strong> 4+ Years</li>
                            <li><strong>Email:</strong> saikat@example.com</li>
                            <li><strong>Freelance:</strong> Available</li>
                        </ul>
                    </div>
                    <a href="#" class="btn btn-primary mt-3">Download CV</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="section skills-section bg-light">
        <div class="container">
            <div class="section-title">
                <h2>My <span>Skills</span></h2>
                <p>Technologies I Work With</p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="skill-item">
                        <h4>PHP (Laravel, CodeIgniter)</h4>
                        <div class="progress">
                            <div class="progress-bar" style="width: 90%">90%</div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <h4>JavaScript (Vue.js, jQuery)</h4>
                        <div class="progress">
                            <div class="progress-bar" style="width: 85%">85%</div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <h4>Python (Django)</h4>
                        <div class="progress">
                            <div class="progress-bar" style="width: 80%">80%</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="skill-item">
                        <h4>MySQL & Database Design</h4>
                        <div class="progress">
                            <div class="progress-bar" style="width: 88%">88%</div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <h4>HTML5, CSS3, Bootstrap</h4>
                        <div class="progress">
                            <div class="progress-bar" style="width: 95%">95%</div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <h4>API Development (REST)</h4>
                        <div class="progress">
                            <div class="progress-bar" style="width: 85%">85%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="section projects-section">
        <div class="container">
            <div class="section-title">
                <h2>My <span>Projects</span></h2>
                <p>Some of My Completed Works</p>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="project-card">
                        <img src="{{ asset('assets/img/Capture.PNG') }}" alt="E-commerce Project" class="img-fluid">
                        <div class="project-overlay">
                            <h4>E-commerce Platform</h4>
                            <p>Built with Laravel & Vue.js</p>
                            <a href="#" class="btn btn-sm btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="project-card">
                        <img src="{{ asset('assets/img/school.PNG') }}" alt="POS System" class="img-fluid">
                        <div class="project-overlay">
                            <h4>POS Software</h4>
                            <p>Built with CodeIgniter & jQuery</p>
                            <a href="#" class="btn btn-sm btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="project-card">
                        <img src="{{ asset('assets/img/accounting.PNG') }}" alt="Accounting Software" class="img-fluid">
                        <div class="project-overlay">
                            <h4>Accounting System</h4>
                            <p>Built with Django & MySQL</p>
                            <a href="#" class="btn btn-sm btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="{{ route('all.projects') }}" class="btn btn-outline-primary">View All Projects</a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="section testimonials-section bg-light">
        <div class="container">
            <div class="section-title">
                <h2>Client <span>Testimonials</span></h2>
                <p>What My Clients Say</p>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="testimonial-card">
                        <div class="client-img">
                            <img src="{{ asset('assets/img/farid.jpeg') }}" alt="Client">
                        </div>
                        <p>"Saikat developed our Stock Market system efficiently. Highly recommended!"</p>
                        <h5>Farid Uddin Mahmud</h5>
                        <span>CEO, ANC Securities Ltd</span>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="testimonial-card">
                        <div class="client-img">
                            <img src="{{ asset('assets/img/farid.jpeg') }}" alt="Client">
                        </div>
                        <p>"Great work on our e-commerce store. Fast and reliable."</p>
                        <h5>Md.Nazmul Hossain</h5>
                        <span>Founder, Siraj Pigeon Racing Club</span>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="testimonial-card">
                        <div class="client-img">
                            <img src="{{ asset('assets/img/farid.jpeg') }}" alt="Client">
                        </div>
                        <p>"Excellent agro farm software. Delivered on time."</p>
                        <h5>Palash Shah</h5>
                        <span>Finance Manager</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section contact-section">
        <div class="container">
            <div class="section-title">
                <h2>Get In <span>Touch</span></h2>
                <p>Available for Freelance Work</p>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <form id="contactForm">
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Your Name" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Your Email" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Subject">
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" rows="5" placeholder="Your Message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
                <div class="col-lg-6">
                    <div class="contact-info">
                        <h4>Contact Info</h4>
                        <ul>
                            <li><i class="fas fa-map-marker-alt"></i> Dhaka, Bangladesh</li>
                            <li><i class="fas fa-envelope"></i> saikat@example.com</li>
                            <li><i class="fas fa-phone"></i> +880 1XXX XXXXXX</li>
                        </ul>
                        <div class="social-links mt-4">
                            <a href="#"><i class="fab fa-github"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer bg-dark text-white text-center py-4">
        <div class="container">
            <p>&copy; 2023 Shakawat H. Saikat. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Custom JS -->
    <script src="{{ asset('assets/js/style.js') }}"></script>
</body>

</html>
