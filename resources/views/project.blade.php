<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>All Projects | Shakawat H. Saikat</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            padding-top: 70px;
            background-color: #f8f9fa;
        }

        .project-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.15);
            transition: all 0.3s ease;
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#" style="font-weight:bold;">
                Saikat <span style="color:yellow; font-weight:bold;">Dev</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{ route('all.projects') }}">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="#testimonials">Clients</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Banner -->
    <section class="py-5 bg-dark text-white text-center">
        <div class="container">
            <h1 class="display-4">All Projects</h1>
            <p class="lead">A showcase of my professional work and web development projects</p>
        </div>
    </section>

    <!-- Projects Grid -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <!-- E-commerce Website -->
                <div class="col-md-4">
                    <div class="card project-card h-100">
                        <div class="card-body">
                            <i class="fas fa-shopping-cart fa-2x text-primary mb-3"></i>
                            <h5 class="card-title">E-commerce Website</h5>
                            <p class="card-text">A full-featured online store built with Laravel and Bootstrap.</p>
                            <a href="#" class="btn btn-outline-primary btn-sm">View Project</a>
                        </div>
                    </div>
                </div>
                <!-- Business Dashboard -->
                <div class="col-md-4">
                    <div class="card project-card h-100">
                        <div class="card-body">
                            <i class="fas fa-chart-line fa-2x text-success mb-3"></i>
                            <h5 class="card-title">Business Dashboard</h5>
                            <p class="card-text">Custom analytics dashboard built with Laravel and jQuery.</p>
                            <a href="https://onnotomo.org" class="btn btn-outline-primary btn-sm" target="_blank">
                                View Project
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Bakery Software -->
                <div class="col-md-4">
                    <div class="card project-card h-100">
                        <div class="card-body">
                            <i class="fas fa-bread-slice fa-2x text-warning mb-3"></i>
                            <h5 class="card-title">Bakery Software</h5>
                            <p class="card-text">A system to manage sales, purchases, and production.</p>
                            <a href="https://yummi.alibricks.xyz/access/users/login"
                                class="btn btn-outline-primary btn-sm" target="_blank">
                                View Project
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Poultry Farm Management System -->
                <div class="col-md-4">
                    <div class="card project-card h-100">
                        <div class="card-body">
                            <i class="fas fa-drumstick-bite fa-2x text-success mb-3"></i>
                            <h5 class="card-title">Poultry Farm Management</h5>
                            <p class="card-text">Manage sales, purchases, and production for poultry farms.</p>
                            <a href="http://new.nipunpoultry.xyz/access/users/login"
                                class="btn btn-outline-primary btn-sm" target="_blank">
                                View Project
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Foot Wear Management System -->
                <div class="col-md-4">
                    <div class="card project-card h-100">
                        <div class="card-body">
                            <i class="fas fa-shoe-prints fa-2x text-danger mb-3"></i>
                            <h5 class="card-title">Footwear Management</h5>
                            <p class="card-text">A system to manage footwear sales and production.</p>
                            <a href="http://speedofootwear.xyz/access/users/login"
                                class="btn btn-outline-primary btn-sm" target="_blank">
                                View Project
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Tiles Management System -->
                <div class="col-md-4">
                    <div class="card project-card h-100">
                        <div class="card-body">
                            <i class="fas fa-th-large fa-2x text-info mb-3"></i>
                            <h5 class="card-title">Tiles Management</h5>
                            <p class="card-text">Manage tile sales, inventory, and production.</p>
                            <a href="http://tilesplaza.smrtbd.com/access/users/login"
                                class="btn btn-outline-primary btn-sm" target="_blank">
                                View Project
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Mobile Shop System -->
                <div class="col-md-4">
                    <div class="card project-card h-100">
                        <div class="card-body">
                            <i class="fas fa-mobile-alt fa-2x text-primary mb-3"></i>
                            <h5 class="card-title">Mobile Shop System</h5>
                            <p class="card-text">Mobile sales and purchase management system.</p>
                            <a href="http://5sgadget.shop/access/users/login" class="btn btn-outline-primary btn-sm"
                                target="_blank">
                                View Project
                            </a>
                        </div>
                    </div>
                </div>
                <!-- School Management System 1 -->
                <div class="col-md-4">
                    <div class="card project-card h-100">
                        <div class="card-body">
                            <i class="fas fa-school fa-2x text-warning mb-3"></i>
                            <h5 class="card-title">School Management</h5>
                            <p class="card-text">Educational platform with course management and quizzes.</p>
                            <a href="https://ishwarganj.smrtbd.com/" class="btn btn-outline-primary btn-sm"
                                target="_blank">
                                View Project
                            </a>
                        </div>
                    </div>
                </div>
                <!-- School Management System 2 -->
                <div class="col-md-4">
                    <div class="card project-card h-100">
                        <div class="card-body">
                            <i class="fas fa-chalkboard-teacher fa-2x text-info mb-3"></i>
                            <h5 class="card-title">School Management</h5>
                            <p class="card-text">Educational website with student management features.</p>
                            <a href="http://benimadhobgps.org/" class="btn btn-outline-primary btn-sm" target="_blank">
                                View Project
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Rice Mill Management System -->
                <div class="col-md-4">
                    <div class="card project-card h-100">
                        <div class="card-body">
                            <i class="fas fa-warehouse fa-2x text-success mb-3"></i>
                            <h5 class="card-title">Rice Mill Management</h5>
                            <p class="card-text">Manage rice mill production, purchases, and sales.</p>
                            <a href="http://jisanautoricemill.xyz/access/users/login"
                                class="btn btn-outline-primary btn-sm" target="_blank">
                                View Project
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Samity Website -->
                <div class="col-md-4">
                    <div class="card project-card h-100">
                        <div class="card-body">
                            <i class="fas fa-users fa-2x text-secondary mb-3"></i>
                            <h5 class="card-title">Samity Website</h5>
                            <p class="card-text">Professional website for samity branding and services.</p>
                            <a href="https://anandaelectronics.xyz/access/users/login"
                                class="btn btn-outline-primary btn-sm" target="_blank">
                                View Project
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        &copy; 2025 Shakawat H. Saikat. All rights reserved.
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
