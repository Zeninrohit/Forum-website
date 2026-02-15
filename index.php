<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Idiscuss - A modern forum platform for developers to discuss, learn, and grow together">
    <title>Idiscuss - Modern Developer Forum</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS with unique class names -->
      <link href="assest/style.css" rel="stylesheet">
    <link href="assest/main.css" rel="stylesheet">
</head>
<body>

<?php include("assest/_header.php"); ?>
   
    <!-- Hero Section with unique classes -->
    <section class="landing-hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="landing-hero-content">
                        <span class="landing-hero-badge">
                            <i class="bi bi-stars"></i> Welcome to the Community
                        </span>
                        <h1 class="landing-hero-title">
                            Connect, Learn & Grow with Developers Worldwide
                        </h1>
                        <p class="landing-hero-subtitle">
                            Join thousands of developers in discussions about Python, PHP, Ruby, and more. Share knowledge, solve problems, and build amazing things together.
                        </p>
                        <div class="landing-hero-buttons">
                            <a href="index.php" class="landing-btn-primary">
                                <i class="bi bi-box-arrow-in-right"></i> Get Started Free
                            </a>
                            <a href="#categories" class="landing-btn-secondary">
                                <i class="bi bi-grid-3x3-gap"></i> Explore Categories
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="landing-hero-image text-center">
                        <img src="https://illustrations.popsy.co/amber/web-design.svg" alt="Developer Community" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section with unique classes -->
    <section class="landing-stats-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="landing-stat-item">
                        <div class="landing-stat-icon-box">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <div class="landing-stat-value">10K+</div>
                        <div class="landing-stat-description">Active Members</div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="landing-stat-item">
                        <div class="landing-stat-icon-box">
                            <i class="bi bi-chat-dots-fill"></i>
                        </div>
                        <div class="landing-stat-value">50K+</div>
                        <div class="landing-stat-description">Discussions</div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="landing-stat-item">
                        <div class="landing-stat-icon-box">
                            <i class="bi bi-award-fill"></i>
                        </div>
                        <div class="landing-stat-value">25K+</div>
                        <div class="landing-stat-description">Solutions Found</div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="landing-stat-item">
                        <div class="landing-stat-icon-box">
                            <i class="bi bi-globe"></i>
                        </div>
                        <div class="landing-stat-value">120+</div>
                        <div class="landing-stat-description">Countries</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section with unique classes -->
    <section class="landing-features-wrapper" id="features">
        <div class="container">
            <div class="landing-section-heading">
                <span class="landing-section-label">
                    <i class="bi bi-lightning-fill"></i> Why Choose Us
                </span>
                <h2 class="landing-section-main-title">Everything You Need in One Place</h2>
                <p class="landing-section-description">
                    Powerful features designed to make your developer journey smoother and more productive
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="landing-feature-box">
                        <div class="landing-feature-icon-wrapper">
                            <i class="bi bi-rocket-takeoff-fill"></i>
                        </div>
                        <h4 class="landing-feature-heading">Fast & Reliable</h4>
                        <p class="landing-feature-text">Lightning-fast responses and 99.9% uptime. Get answers when you need them with our optimized platform built for speed.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="landing-feature-box">
                        <div class="landing-feature-icon-wrapper">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <h4 class="landing-feature-heading">Safe & Secure</h4>
                        <p class="landing-feature-text">Your data is protected with enterprise-grade security. We take privacy seriously and ensure all discussions are secure.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="landing-feature-box">
                        <div class="landing-feature-icon-wrapper">
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <h4 class="landing-feature-heading">Expert Community</h4>
                        <p class="landing-feature-text">Learn from industry experts and experienced developers. Quality answers from people who actually know what they're talking about.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="landing-feature-box">
                        <div class="landing-feature-icon-wrapper">
                            <i class="bi bi-search"></i>
                        </div>
                        <h4 class="landing-feature-heading">Smart Search</h4>
                        <p class="landing-feature-text">Find exactly what you're looking for with our intelligent search engine. No more endless scrolling through irrelevant results.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="landing-feature-box">
                        <div class="landing-feature-icon-wrapper">
                            <i class="bi bi-bell-fill"></i>
                        </div>
                        <h4 class="landing-feature-heading">Real-time Notifications</h4>
                        <p class="landing-feature-text">Stay updated with instant notifications. Never miss important replies or updates to your discussions.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="landing-feature-box">
                        <div class="landing-feature-icon-wrapper">
                            <i class="bi bi-phone"></i>
                        </div>
                        <h4 class="landing-feature-heading">Mobile Friendly</h4>
                        <p class="landing-feature-text">Access the forum anywhere, anytime. Fully responsive design that works perfectly on all devices.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section with unique classes -->
    <section class="landing-categories-wrapper" id="categories">
        <div class="container">
            <div class="landing-section-heading">
                <span class="landing-section-label">
                    <i class="bi bi-grid-fill"></i> Popular Topics
                </span>
                <h2 class="landing-section-main-title">Explore Discussion Categories</h2>
                <p class="landing-section-description">
                    Join conversations in your favorite programming languages and technologies
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="landing-category-box">
                        <div class="landing-category-emoji">🐍</div>
                        <h5 class="landing-category-name">Python</h5>
                        <p class="landing-category-info">Discuss Python programming, frameworks like Django, Flask, and data science libraries.</p>
                        <span class="landing-category-count">12.5K threads</span>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="landing-category-box">
                        <div class="landing-category-emoji">🐘</div>
                        <h5 class="landing-category-name">PHP</h5>
                        <p class="landing-category-info">Laravel, WordPress, Symfony and everything PHP. From basics to advanced development.</p>
                        <span class="landing-category-count">8.3K threads</span>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="landing-category-box">
                        <div class="landing-category-emoji">💎</div>
                        <h5 class="landing-category-name">Ruby</h5>
                        <p class="landing-category-info">Ruby on Rails, gems, and Ruby programming. Join the elegant Ruby community.</p>
                        <span class="landing-category-count">5.7K threads</span>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="landing-category-box">
                        <div class="landing-category-emoji">⚛️</div>
                        <h5 class="landing-category-name">JavaScript</h5>
                        <p class="landing-category-info">React, Vue, Node.js, and modern JavaScript frameworks and libraries.</p>
                        <span class="landing-category-count">15.2K threads</span>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="landing-category-box">
                        <div class="landing-category-emoji">☕</div>
                        <h5 class="landing-category-name">Java</h5>
                        <p class="landing-category-info">Spring Boot, Android development, and enterprise Java applications.</p>
                        <span class="landing-category-count">9.8K threads</span>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="landing-category-box">
                        <div class="landing-category-emoji">🔷</div>
                        <h5 class="landing-category-name">Go</h5>
                        <p class="landing-category-info">Golang discussions, microservices, and concurrent programming.</p>
                        <span class="landing-category-count">4.5K threads</span>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5">
                <a href="index.php" class="landing-btn-primary">
                    View All Categories <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- CTA Section with unique classes -->
    <section class="landing-cta-wrapper">
        <div class="container">
            <div class="landing-cta-inner">
                <h2 class="landing-cta-title">Ready to Join Our Community?</h2>
                <p class="landing-cta-message">Start discussing, learning, and growing with thousands of developers today. It's completely free!</p>
                <div class="landing-hero-buttons justify-content-center">
                    <a href="index.php" class="landing-btn-primary">
                        <i class="bi bi-person-plus-fill"></i> Create Free Account
                    </a>
                    <a href="contact.html" class="landing-btn-secondary">
                        <i class="bi bi-envelope"></i> Contact Us
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer with unique classes -->
    <footer class="landing-footer-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="landing-footer-brand-text">
                        <i class="bi bi-chat-square-dots-fill"></i> Idiscuss
                    </div>
                    <p>A modern platform for developers to connect, learn, and grow together. Join our thriving community today.</p>
                    <div class="landing-social-icons">
                        <a href="#" class="landing-social-item">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="#" class="landing-social-item">
                            <i class="bi bi-twitter"></i>
                        </a>
                        <a href="#" class="landing-social-item">
                            <i class="bi bi-linkedin"></i>
                        </a>
                        <a href="#" class="landing-social-item">
                            <i class="bi bi-github"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 mb-4">
                    <h5 class="landing-footer-heading">Product</h5>
                    <ul class="landing-footer-menu">
                        <li><a href="#features">Features</a></li>
                        <li><a href="#categories">Categories</a></li>
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-4 mb-4">
                    <h5 class="landing-footer-heading">Company</h5>
                    <ul class="landing-footer-menu">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-4 mb-4">
                    <h5 class="landing-footer-heading">Resources</h5>
                    <ul class="landing-footer-menu">
                        <li><a href="#">Documentation</a></li>
                        <li><a href="#">Tutorials</a></li>
                        <li><a href="#">Community</a></li>
                        <li><a href="#">Support</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-4 mb-4">
                    <h5 class="landing-footer-heading">Legal</h5>
                    <ul class="landing-footer-menu">
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Cookie Policy</a></li>
                        <li><a href="#">Guidelines</a></li>
                    </ul>
                </div>
            </div>

            <div class="landing-footer-bottom-section">
                <p>&copy; 2024 Idiscuss Forum. All rights reserved. Made with <i class="bi bi-heart-fill text-danger"></i> by developers, for developers.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Login Modal -->
    <?php include("assest/loginmodel.php"); ?>
    
    <!-- Signup Modal -->
    <?php include("assest/signupmodel.php"); ?>

    <!-- Smooth Scroll Script -->
    <script>
        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.landing-navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('navbar-scrolled');
            } else {
                navbar.classList.remove('navbar-scrolled');
            }
        });
    </script>
</body>
</html>