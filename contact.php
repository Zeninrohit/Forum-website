
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Idiscuss Forum</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
<?php include("assest/_header.php"); ?>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: #f8f9fd;
            min-height: 100vh;
        }

    

        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 5rem 0 3rem;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -10%;
            width: 500px;
            height: 500px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            filter: blur(80px);
            animation: float 20s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translate(0, 0); }
            50% { transform: translate(30px, -30px); }
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 900;
            margin-bottom: 1rem;
            letter-spacing: -1px;
        }

        .hero-subtitle {
            font-size: 1.25rem;
            opacity: 0.95;
        }

        /* Contact Section */
        .contact-section {
            padding: 4rem 0;
        }

        /* Contact Cards */
        .contact-card {
            background: white;
            border-radius: 20px;
            padding: 2.5rem;
            text-align: center;
            transition: all 0.3s ease;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
            border: 1px solid #e8ecf4;
            height: 100%;
        }

        .contact-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 35px rgba(102, 126, 234, 0.2);
            border-color: #667eea;
        }

        .contact-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            font-size: 2rem;
            color: white;
            transition: all 0.3s ease;
        }

        .contact-card:hover .contact-icon {
            transform: scale(1.1) rotate(5deg);
        }

        .contact-card h5 {
            font-size: 1.25rem;
            font-weight: 700;
            color: #2d3748;
            margin-bottom: 0.75rem;
        }

        .contact-card p {
            color: #718096;
            margin-bottom: 0;
            font-size: 0.95rem;
        }

        .contact-card a {
            color: #667eea;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .contact-card a:hover {
            color: #764ba2;
        }

        /* Contact Form */
        .contact-form-section {
            background: white;
            border-radius: 24px;
            padding: 3rem;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
            border: 1px solid #e8ecf4;
        }

        .section-title {
            font-size: 2rem;
            font-weight: 800;
            color: #2d3748;
            margin-bottom: 0.5rem;
        }

        .section-subtitle {
            color: #718096;
            margin-bottom: 2rem;
        }

        .form-label {
            font-weight: 600;
            color: #2d3748;
            margin-bottom: 0.5rem;
        }

        .form-control {
            border-radius: 12px;
            border: 2px solid #e2e8f0;
            padding: 0.875rem 1.25rem;
            transition: all 0.3s ease;
            font-family: 'Poppins', sans-serif;
        }

        .form-control:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.1);
            outline: none;
        }

        textarea.form-control {
            min-height: 150px;
            resize: vertical;
        }

        .btn-submit {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            border-radius: 50px;
            padding: 1rem 3rem;
            font-weight: 700;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
        }

        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
        }

        /* Map Section */
        .map-section {
            background: white;
            border-radius: 24px;
            padding: 2rem;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
            border: 1px solid #e8ecf4;
        }

        .map-container {
            border-radius: 16px;
            overflow: hidden;
            height: 400px;
            background: #e8ecf4;
        }

        .map-container iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        /* Footer */
        .footer {
            background: #1a1d2e;
            color: rgba(255, 255, 255, 0.8);
            padding: 2rem 0;
            margin-top: 4rem;
        }

        .footer p {
            margin: 0;
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .contact-card {
            animation: fadeInUp 0.6s ease-out backwards;
        }

        .contact-card:nth-child(1) { animation-delay: 0.1s; }
        .contact-card:nth-child(2) { animation-delay: 0.2s; }
        .contact-card:nth-child(3) { animation-delay: 0.3s; }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }

            .hero-subtitle {
                font-size: 1.1rem;
            }

            .contact-form-section {
                padding: 2rem;
            }

            .btn-submit {
                width: 100%;
            }
        }
    </style>
</head>
<body>

    <!-- Navigation -->


    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-content text-center">
                <h1 class="hero-title">Get in Touch</h1>
                <p class="hero-subtitle">We'd love to hear from you. Send us a message and we'll respond as soon as possible.</p>
            </div>
        </div>
    </section>

    <!-- Contact Cards -->
    <section class="contact-section">
        <div class="container">
            <div class="row g-4 mb-5">
                <!-- Email Card -->
                <div class="col-md-4">
                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="bi bi-envelope-fill"></i>
                        </div>
                        <h5>Email Us</h5>
                        <p>Have a question?<br>Drop us an email</p>
                        <a href="mailto:support@idiscuss.com">support@idiscuss.com</a>
                    </div>
                </div>

                <!-- Phone Card -->
                <div class="col-md-4">
                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="bi bi-telephone-fill"></i>
                        </div>
                        <h5>Call Us</h5>
                        <p>Mon-Fri from 8am to 6pm</p>
                        <a href="tel:+1234567890">+1 (234) 567-890</a>
                    </div>
                </div>

                <!-- Location Card -->
                <div class="col-md-4">
                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <h5>Visit Us</h5>
                        <p>Come say hello at our office</p>
                        <a href="#map">123 Forum Street<br>Tech City, TC 12345</a>
                    </div>
                </div>
            </div>

            <!-- Contact Form & Map -->
            <div class="row g-4">
                <!-- Contact Form -->
                <div class="col-lg-6">
                    <div class="contact-form-section">
                        <h2 class="section-title">Send us a Message</h2>
                        <p class="section-subtitle">Fill out the form below and we'll get back to you shortly.</p>
                        
                        <form action="#" method="POST">
                            <div class="mb-3">
                                <label for="name" class="form-label">
                                    <i class="bi bi-person"></i> Your Name
                                </label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="John Doe" required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">
                                    <i class="bi bi-envelope"></i> Your Email
                                </label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="john@example.com" required>
                            </div>

                            <div class="mb-3">
                                <label for="subject" class="form-label">
                                    <i class="bi bi-tag"></i> Subject
                                </label>
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="How can we help?" required>
                            </div>

                            <div class="mb-4">
                                <label for="message" class="form-label">
                                    <i class="bi bi-chat-left-text"></i> Message
                                </label>
                                <textarea class="form-control" id="message" name="message" placeholder="Tell us more about your inquiry..." required></textarea>
                            </div>

                            <button type="submit" class="btn btn-submit">
                                <i class="bi bi-send-fill"></i> Send Message
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Map -->
                <div class="col-lg-6" id="map">
                    <div class="map-section">
                        <h2 class="section-title mb-3">Find Us</h2>
                        <div class="map-container">
                            <!-- Replace with your actual Google Maps embed -->
                            <iframe 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.681138843553!2d-73.98784368459395!3d40.74844097932847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259a9b3117469%3A0xd134e199a405a163!2sEmpire%20State%20Building!5e0!3m2!1sen!2sus!4v1234567890123!5m2!1sen!2sus" 
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; 2024 Idiscuss Forum. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="#" class="text-white-50 me-3">Privacy Policy</a>
                    <a href="#" class="text-white-50">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
