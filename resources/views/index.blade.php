<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - Craftivo Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <link href="assets/css/modern-custom.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Craftivo
  * Template URL: https://bootstrapmade.com/craftivo-bootstrap-portfolio-template/
  * Updated: Oct 04 2025 with Bootstrap v5.3.8
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center">
        <!-- <img src="assets/img/logo.webp" alt=""> -->
        <h1 class="sitename text-accent mb-0">Hassan<span class="text-white">.</span></h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#resume">Resume</a></li>
          <li><a href="#services">Projects</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list text-white"></i>
      </nav>

      <a class="btn-accent d-none d-md-inline-block" href="#contact">Join us</a>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero-wrapper">
      <div class="hero-bg-gradient"></div>
      <div class="hero-bg-gradient-2"></div>

      <div class="container">
        <div class="row align-items-center gy-5">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            {{-- <div class="hero-badge">
              Laravel Developer • Web Developer • AI Research Enthusiast
            </div> --}}
            <h1 class="hero-title">Building Modern Web Experiences with Laravel & AI</h1>
            <p class="hero-description">
              I specialize in engineering robust backend architectures and crafting premium, interactive frontend interfaces. Turning complex problems into elegant digital solutions.
            </p>
            <div class="d-flex flex-wrap gap-3 mb-5">
              <a href="https://linkedin.com/" target="_blank" class="btn-accent"><i class="bi bi-linkedin me-2"></i>LinkedIn</a>
              <a href="https://wa.me/923009703798" target="_blank" class="btn-outline-accent"><i class="bi bi-whatsapp me-2"></i>WhatsApp</a>
            </div>
            <div class="social-links d-flex gap-3">
              <a href="#" class="text-secondary hover-accent fs-4"><i class="bi bi-github"></i></a>
              <a href="#" class="text-secondary hover-accent fs-4"><i class="bi bi-linkedin"></i></a>
              <a href="#" class="text-secondary hover-accent fs-4"><i class="bi bi-twitter-x"></i></a>
            </div>
          </div>

          <div class="col-lg-6 text-center" data-aos="zoom-in" data-aos-delay="200">
            <div class="profile-img-container">
              <div class="profile-img-inner">
                <img src="assets/img/profile/my-profile.png" alt="M Hassan Abbas" class="img-fluid">
              </div>
              <div class="status-dot" title="Available for work"></div>
            </div>
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">
      <div class="container section-title" data-aos="fade-up">
        <span class="section-tag">About Me</span>
        <h2 class="text-white">Discover Who I Am</h2>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-5 align-items-center">

          <div class="col-lg-5" data-aos="fade-right" data-aos-delay="150">
            <div class="glass-card p-4">
              <div class="profile-avatar mb-4 text-center">
                <img src="assets/img/profile/my-profile.png" class="img-fluid rounded-circle shadow-lg profile-avatar-img" alt="M Hassan Abbas">
              </div>
              <h3 class="text-center text-white mb-1">M Hassan Abbas</h3>
              <p class="text-center text-accent mb-4">Senior Laravel Developer</p>

              <div class="row g-3 text-center">
                <div class="col-6">
                  <div class="stat-card glass-panel p-3">
                    <div class="stat-value">20+</div>
                    <div class="stat-label">Projects</div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="stat-card glass-panel p-3">
                    <div class="stat-value">5+</div>
                    <div class="stat-label">Years Exp.</div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="stat-card glass-panel p-3">
                    <div class="stat-value">100%</div>
                    <div class="stat-label">Client Satisfaction</div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-7" data-aos="fade-left" data-aos-delay="200">
            <div class="content-wrapper ps-lg-4">
              <h2 class="mb-4 text-white">Transforming Ideas into Digital Reality</h2>
              <p class="mb-4 text-secondary">
                My core expertise includes Laravel, PHP, MySQL, JavaScript, Bootstrap, RESTful APIs, MVC architecture, database design, authentication, and backend development. I have hands-on experience developing Laravel-based web applications and admin dashboards using Filament, including CRUD operations, resource management, data tables, forms, filters, relationships, role-based access control, and dashboard analytics.
              </p>
              <p class="mb-5 text-secondary">
                On the frontend, I build responsive and interactive user interfaces using Bootstrap, JavaScript, HTML5, and CSS3, with a strong focus on usability, performance, and clean UI architecture. I also work with ASP.NET desktop applications, contributing to application development, backend logic, database integration, and business-process automation.
              </p>

              <div class="row g-4 details-grid">
                <div class="col-md-6 d-flex align-items-start gap-3">
                  <i class="bi bi-mortarboard fs-3 text-accent"></i>
                  <div>
                    <span class="d-block text-secondary small">Degree</span>
                    <strong class="text-white">Master of Science</strong>
                  </div>
                </div>
                <div class="col-md-6 d-flex align-items-start gap-3">
                  <i class="bi bi-geo-alt fs-3 text-accent"></i>
                  <div>
                    <span class="d-block text-secondary small">Location</span>
                    <strong class="text-white">Lahore, Pakistan</strong>
                  </div>
                </div>
                <div class="col-md-6 d-flex align-items-start gap-3">
                  <i class="bi bi-envelope fs-3 text-accent"></i>
                  <div>
                    <span class="d-block text-secondary small">Email</span>
                    <strong class="text-white">hassan.abbas2233@gmail.com</strong>
                  </div>
                </div>
                <div class="col-md-6 d-flex align-items-start gap-3">
                  <i class="bi bi-calendar-check fs-3 text-accent"></i>
                  <div>
                    <span class="d-block text-secondary small">Availability</span>
                    <strong class="text-white">Open to Work</strong>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section><!-- /About Section -->

    <!-- Skills Section -->
    <section id="skills" class="skills section">
      <div class="container section-title" data-aos="fade-up">
        <span class="section-tag">Core Skills</span>
        <h2 class="text-white">Technical Proficiency</h2>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row g-4 justify-content-center">

          <!-- Bootstrap -->
          <div class="col-lg-3 col-md-6 col-sm-6" data-aos="fade-up" data-aos-delay="100">
            <div class="modern-skill-card">
              <div class="skill-icon-wrapper">
                <i class="bi bi-bootstrap"></i>
              </div>
              <h3 class="skill-title">Bootstrap</h3>
              <p class="skill-desc">Responsive UI & Layouts</p>
              <div class="skill-level">
                <span class="dot active"></span>
                <span class="dot active"></span>
                <span class="dot active"></span>
                <span class="dot active"></span>
                <span class="dot active"></span>
              </div>
            </div>
          </div>

          <!-- JavaScript -->
          <div class="col-lg-3 col-md-6 col-sm-6" data-aos="fade-up" data-aos-delay="200">
            <div class="modern-skill-card">
              <div class="skill-icon-wrapper">
                <i class="bi bi-filetype-js"></i>
              </div>
              <h3 class="skill-title">JavaScript</h3>
              <p class="skill-desc">Dynamic Interactions</p>
              <div class="skill-level">
                <span class="dot active"></span>
                <span class="dot active"></span>
                <span class="dot active"></span>
                <span class="dot active"></span>
                <span class="dot"></span>
              </div>
            </div>
          </div>

          <!-- Laravel & PHP -->
          <div class="col-lg-3 col-md-6 col-sm-6" data-aos="fade-up" data-aos-delay="300">
            <div class="modern-skill-card">
              <div class="skill-icon-wrapper">
                <i class="bi bi-braces"></i>
              </div>
              <h3 class="skill-title">Laravel & PHP</h3>
              <p class="skill-desc">Backend Architecture</p>
              <div class="skill-level">
                <span class="dot active"></span>
                <span class="dot active"></span>
                <span class="dot active"></span>
                <span class="dot active"></span>
                <span class="dot"></span>
              </div>
            </div>
          </div>

          <!-- MySQL -->
          <div class="col-lg-3 col-md-6 col-sm-6" data-aos="fade-up" data-aos-delay="400">
            <div class="modern-skill-card">
              <div class="skill-icon-wrapper">
                <i class="bi bi-database"></i>
              </div>
              <h3 class="skill-title">MySQL</h3>
              <p class="skill-desc">Database Design</p>
              <div class="skill-level">
                <span class="dot active"></span>
                <span class="dot active"></span>
                <span class="dot active"></span>
                <span class="dot active"></span>
                <span class="dot"></span>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section><!-- /Skills Section -->



    <!-- Resume Section -->
    <section id="resume" class="resume section">
      <div class="container section-title" data-aos="fade-up">
        <span class="section-tag">Resume</span>
        <h2 class="text-white">Professional Journey</h2>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-5">

          <div class="col-lg-6">
            <h3 class="text-white mb-4"><i class="bi bi-briefcase text-accent me-2"></i> Experience</h3>
            <div class="modern-timeline">

              <div class="timeline-item" data-aos="fade-up">
                <div class="timeline-dot"></div>
                <div class="timeline-date">2023 - Present</div>
                <h4 class="timeline-title">Senior Laravel Developer</h4>
                <div class="timeline-subtitle">Tritec Kodes</div>
                <div class="glass-card p-3 mt-3">
                  <p class="text-secondary mb-0 small">Working across Laravel/PHP web applications, Filament-based admin dashboards, RESTful APIs, and scalable backend architecture.</p>
                </div>
              </div>
              <div class="timeline-item" data-aos="fade-up" data-aos-delay="100">
                <div class="timeline-dot"></div>
                <div class="timeline-date">2023</div>
                <h4 class="timeline-title">Junior Developer and Content Creator</h4>
                <div class="timeline-subtitle">Dev & Design</div>
                <div class="glass-card p-3 mt-3">
                  <p class="text-secondary mb-0 small">Contributed to  content creation, and real-time applications.</p>
                </div>
              </div>

              <div class="timeline-item" data-aos="fade-up" data-aos-delay="100">
                <div class="timeline-dot"></div>
                <div class="timeline-date">2022 - 2023</div>
                <h4 class="timeline-title">Intern</h4>
                <div class="timeline-subtitle">Flattechs (Pvt.) Ltd.</div>
                <div class="glass-card p-3 mt-3">
                  <p class="text-secondary mb-0 small">Highly motivated intern with hands-on experience in Laravel and PHP backend development.
  Learned the fundamentals of Laravel, MVC architecture, database integration, CRUD operations,
  and basic web application development while gaining practical experience in a professional environment.</p>
                </div>
              </div>

            </div>
          </div>

          <div class="col-lg-6">
            <h3 class="text-white mb-4"><i class="bi bi-mortarboard text-accent me-2"></i> Education & Capabilities</h3>
            <div class="modern-timeline">

              <div class="timeline-item" data-aos="fade-up">
                <div class="timeline-dot"></div>
                <div class="timeline-date">2014 - 2016</div>
                <h4 class="timeline-title">MSc</h4>
                <div class="timeline-subtitle">CEET, University of the Punjab, Lahore</div>
                <div class="glass-card p-3 mt-3 d-flex align-items-center gap-2">
                  <i class="bi bi-award text-accent fs-4"></i>
                  <span class="text-white">CGPA: 3.52/4.0</span>
                </div>
              </div>

              <div class="timeline-item" data-aos="fade-up" data-aos-delay="100">
                <div class="timeline-dot"></div>
                <div class="timeline-date">2009 - 2013</div>
                <h4 class="timeline-title">Bachelor of Science</h4>
                <div class="timeline-subtitle">IAM, Bahauddin Zakariya University, Multan</div>
              </div>

              <div class="timeline-item" data-aos="fade-up" data-aos-delay="200">
                <div class="timeline-dot"></div>
                <div class="timeline-date">2020 - 2026</div>
                <h4 class="timeline-title">Core Capabilities</h4>
                <div class="timeline-subtitle">Continuous Learning</div>
                <div class="glass-card p-3 mt-3">
                  <ul class="list-unstyled text-secondary small mb-0">
                    <li class="mb-2"><i class="bi bi-check2 text-accent me-2"></i>eCommerce & POS Solutions</li>
                    <li class="mb-2"><i class="bi bi-check2 text-accent me-2"></i>AI Integration & Automation</li>
                    <li><i class="bi bi-check2 text-accent me-2"></i>Real-Time Application Development</li>
                  </ul>
                </div>
              </div>

            </div>
          </div>

        </div>
      </div>
    </section><!-- /Resume Section -->

    <!-- Services Section (Projects) -->
    <section id="services" class="services section">
      <div class="container section-title" data-aos="fade-up">
        <span class="section-tag">Showcase</span>
        <h2 class="text-white">Featured Projects</h2>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">

          <div class="col-lg-6 col-md-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="project-card glass-card">
              <div class="project-img">
                <img src="{{ asset('assets/img/portfolio/portfolio-1.png') }}" alt="Real-Time Chat Application" class="img-fluid" onerror="this.src='https://images.unsplash.com/photo-1611162617474-5b21e879e113?auto=format&fit=crop&w=800&q=80'">
                <div class="project-overlay">
                  <a href="#" class="btn-accent rounded-circle p-3 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;"><i class="bi bi-link-45deg fs-4"></i></a>
                </div>
              </div>
              <div class="project-content">
                <h4 class="text-white mb-2">Real-Time Chat Application</h4>
                <p class="text-secondary small mb-3">A real-time chat application built for seamless and instant communication. Simple, fast and secure.</p>
                <div class="tech-stack">
                  <span class="tech-badge">Laravel</span>
                  <span class="tech-badge">PHP</span>
                  <span class="tech-badge">Pusher</span>
                  <span class="tech-badge">Bootstrap</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="project-card glass-card">
              <div class="project-img">
                <img src="{{ asset('assets/img/portfolio/portfolio-2.png') }}" alt="Filament Admin Dashboard" class="img-fluid" onerror="this.src='https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=800&q=80'">
                <div class="project-overlay">
                  <a href="#" class="btn-accent rounded-circle p-3 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;"><i class="bi bi-link-45deg fs-4"></i></a>
                </div>
              </div>
              <div class="project-content">
                <h4 class="text-white mb-2">Filament Admin Dashboard</h4>
                <p class="text-secondary small mb-3">A comprehensive admin dashboard featuring real-time analytics, inventory intelligence, and AI-assisted insights.</p>
                <div class="tech-stack">
                  <span class="tech-badge">Laravel</span>
                  <span class="tech-badge">Filament</span>
                  <span class="tech-badge">MySQL</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="project-card glass-card">
              <div class="project-img">
                <img src="{{ asset('assets/img/portfolio/portfolio-3.jpg') }}" alt="Aero POS System" class="img-fluid" onerror="this.src='https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?auto=format&fit=crop&w=800&q=80'">
                <div class="project-overlay">
                  <a href="#" class="btn-accent rounded-circle p-3 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;"><i class="bi bi-link-45deg fs-4"></i></a>
                </div>
              </div>
              <div class="project-content">
                <h4 class="text-white mb-2">Aero POS System</h4>
                <p class="text-secondary small mb-3">A modern, intelligent and integrated Point of Sale system tailored for Auto Parts businesses with real-time analytics.</p>
                <div class="tech-stack">
                  <span class="tech-badge">Laravel</span>
                  <span class="tech-badge">jQuery</span>
                  <span class="tech-badge">REST API</span>
                  <span class="tech-badge">Bootstrap</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6" data-aos="zoom-in" data-aos-delay="400">
            <div class="project-card glass-card">
              <div class="project-img">
                <img src="{{ asset('assets/img/portfolio/portfolio-4.png') }}" alt="Aero POS API Audit" class="img-fluid" onerror="this.src='https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?auto=format&fit=crop&w=800&q=80'">
                <div class="project-overlay">
                  <a href="#" class="btn-accent rounded-circle p-3 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;"><i class="bi bi-link-45deg fs-4"></i></a>
                </div>
              </div>
              <div class="project-content">
                <h4 class="text-white mb-2">Aero POS API Audit</h4>
                <p class="text-secondary small mb-3">API Audit suite integrated with Aero POS to track system activities, automated zakat calculation, and logical defects.</p>
                <div class="tech-stack">
                  <span class="tech-badge">Laravel</span>
                  <span class="tech-badge">PHP</span>
                  <span class="tech-badge">MySQL</span>
                  <span class="tech-badge">REST API</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row mt-5">
          <div class="col-12" data-aos="fade-up" data-aos-delay="200">
            <div class="glass-card p-5 text-center">
              <h3 class="text-white mb-3">Ready to build something amazing?</h3>
              <p class="text-secondary mb-4 max-w-2xl mx-auto">Partner with me to engineer scalable, high-performance web applications tailored specifically to your business needs.</p>
              <a href="#contact" class="btn-accent">Start Your Project</a>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Services Section -->

    <!-- Portfolio Section -->
    {{-- <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span class="subtitle">Core Skills</span>
        <h2>Skills</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam</p>
      </div>
      <!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="200">
            <li data-filter="*" class="filter-active">All Work</li>
            <li data-filter=".filter-creative">Creative</li>
            <li data-filter=".filter-digital">Digital</li>
            <li data-filter=".filter-strategy">Strategy</li>
            <li data-filter=".filter-development">Development</li>
          </ul>

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="300">
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-creative">
              <div class="portfolio-card">
                <div class="portfolio-image-container">
                  <img src="assets/img/portfolio/portfolio-1.webp" alt="Creative Project" class="img-fluid" loading="lazy">
                  <div class="portfolio-overlay">
                    <div class="portfolio-info">
                      <span class="project-category">Creative Design</span>
                      <h4>Visual Identity System</h4>
                    </div>
                    <div class="portfolio-actions">
                      <a href="assets/img/portfolio/portfolio-1.webp" class="glightbox portfolio-link">
                        <i class="bi bi-plus-lg"></i>
                      </a>
                      <a href="#" class="portfolio-details">
                        <i class="bi bi-arrow-right"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="portfolio-meta">
                  <div class="project-tags">
                    <span class="tag">Branding</span>
                    <span class="tag">Identity</span>
                  </div>
                  <div class="project-year">2024</div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-digital">
              <div class="portfolio-card">
                <div class="portfolio-image-container">
                  <img src="assets/img/portfolio/portfolio-2.webp" alt="Digital Project" class="img-fluid" loading="lazy">
                  <div class="portfolio-overlay">
                    <div class="portfolio-info">
                      <span class="project-category">Digital Experience</span>
                      <h4>Interactive Web Platform</h4>
                    </div>
                    <div class="portfolio-actions">
                      <a href="assets/img/portfolio/portfolio-2.webp" class="glightbox portfolio-link">
                        <i class="bi bi-plus-lg"></i>
                      </a>
                      <a href="#" class="portfolio-details">
                        <i class="bi bi-arrow-right"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="portfolio-meta">
                  <div class="project-tags">
                    <span class="tag">Web Design</span>
                    <span class="tag">Development</span>
                  </div>
                  <div class="project-year">2024</div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-strategy">
              <div class="portfolio-card">
                <div class="portfolio-image-container">
                  <img src="assets/img/portfolio/portfolio-3.webp" alt="Strategy Project" class="img-fluid" loading="lazy">
                  <div class="portfolio-overlay">
                    <div class="portfolio-info">
                      <span class="project-category">Brand Strategy</span>
                      <h4>Market Positioning</h4>
                    </div>
                    <div class="portfolio-actions">
                      <a href="assets/img/portfolio/portfolio-3.webp" class="glightbox portfolio-link">
                        <i class="bi bi-plus-lg"></i>
                      </a>
                      <a href="#" class="portfolio-details">
                        <i class="bi bi-arrow-right"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="portfolio-meta">
                  <div class="project-tags">
                    <span class="tag">Strategy</span>
                    <span class="tag">Consulting</span>
                  </div>
                  <div class="project-year">2023</div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-development">
              <div class="portfolio-card">
                <div class="portfolio-image-container">
                  <img src="assets/img/portfolio/portfolio-4.webp" alt="Development Project" class="img-fluid" loading="lazy">
                  <div class="portfolio-overlay">
                    <div class="portfolio-info">
                      <span class="project-category">Full Stack</span>
                      <h4>Custom Application</h4>
                    </div>
                    <div class="portfolio-actions">
                      <a href="assets/img/portfolio/portfolio-4.webp" class="glightbox portfolio-link">
                        <i class="bi bi-plus-lg"></i>
                      </a>
                      <a href="#" class="portfolio-details">
                        <i class="bi bi-arrow-right"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="portfolio-meta">
                  <div class="project-tags">
                    <span class="tag">React</span>
                    <span class="tag">Node.js</span>
                  </div>
                  <div class="project-year">2024</div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-creative">
              <div class="portfolio-card">
                <div class="portfolio-image-container">
                  <img src="assets/img/portfolio/portfolio-5.webp" alt="Creative Project" class="img-fluid" loading="lazy">
                  <div class="portfolio-overlay">
                    <div class="portfolio-info">
                      <span class="project-category">Art Direction</span>
                      <h4>Campaign Design</h4>
                    </div>
                    <div class="portfolio-actions">
                      <a href="assets/img/portfolio/portfolio-5.webp" class="glightbox portfolio-link">
                        <i class="bi bi-plus-lg"></i>
                      </a>
                      <a href="#" class="portfolio-details">
                        <i class="bi bi-arrow-right"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="portfolio-meta">
                  <div class="project-tags">
                    <span class="tag">Creative</span>
                    <span class="tag">Campaign</span>
                  </div>
                  <div class="project-year">2024</div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-digital">
              <div class="portfolio-card">
                <div class="portfolio-image-container">
                  <img src="assets/img/portfolio/portfolio-6.webp" alt="Digital Project" class="img-fluid" loading="lazy">
                  <div class="portfolio-overlay">
                    <div class="portfolio-info">
                      <span class="project-category">Digital Product</span>
                      <h4>Mobile Experience</h4>
                    </div>
                    <div class="portfolio-actions">
                      <a href="assets/img/portfolio/portfolio-6.webp" class="glightbox portfolio-link">
                        <i class="bi bi-plus-lg"></i>
                      </a>
                      <a href="#" class="portfolio-details">
                        <i class="bi bi-arrow-right"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="portfolio-meta">
                  <div class="project-tags">
                    <span class="tag">Mobile</span>
                    <span class="tag">UI/UX</span>
                  </div>
                  <div class="project-year">2023</div>
                </div>
              </div>
            </div>
          </div>

        </div>

        <div class="portfolio-bottom" data-aos="fade-up" data-aos-delay="400">
          <div class="row align-items-center">
            <div class="col-lg-8">
              <h3>Like what you see?</h3>
              <p>Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
              <a href="#contact" class="btn btn-accent">Let's Work Together</a>
            </div>
          </div>
        </div>

      </div>

     </section>  --}}
    <!-- /Portfolio Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">
      <div class="container section-title" data-aos="fade-up">
        <span class="section-tag">Contact</span>
        <h2 class="text-white">Let's Discuss Your Project</h2>
      </div>

      <div class="container">
        <div class="row gy-5">

          <div class="col-lg-5">
            <div class="glass-card p-4 h-100 d-flex flex-column justify-content-center">
              <h3 class="text-white mb-4">Get In Touch</h3>
              <p class="text-secondary mb-5">Whether you have a project in mind, need technical consultation, or just want to connect—feel free to reach out.</p>

              <div class="d-flex align-items-center mb-4">
                <div class="bg-accent bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                  <i class="bi bi-geo-alt text-accent fs-4"></i>
                </div>
                <div>
                  <h5 class="text-white mb-1">Location</h5>
                  <p class="text-secondary mb-0">Sargodha, Pakistan</p>
                </div>
              </div>

              <div class="d-flex align-items-center mb-4">
                <div class="bg-accent bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                  <i class="bi bi-telephone text-accent fs-4"></i>
                </div>
                <div>
                  <h5 class="text-white mb-1">Phone</h5>
                  <p class="text-secondary mb-0">+92 (300) 970-3798</p>
                </div>
              </div>

              <div class="d-flex align-items-center mb-4">
                <div class="bg-accent bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                  <i class="bi bi-envelope text-accent fs-4"></i>
                </div>
                <div>
                  <h5 class="text-white mb-1">Email</h5>
                  <p class="text-secondary mb-0">hassan.abbas2233@gmail.com</p>
                </div>
              </div>

            </div>
          </div>

          <div class="col-lg-7">
            <div class="glass-card p-4 p-md-5">
              <form action="forms/contact.php" method="post" class="php-email-form modern-form">
                <div class="row gy-4">

                  <div class="col-md-6">
                    <label class="text-secondary small mb-2">Your Name</label>
                    <input type="text" name="name" class="form-control" placeholder="John Doe" required>
                  </div>

                  <div class="col-md-6">
                    <label class="text-secondary small mb-2">Your Email</label>
                    <input type="email" class="form-control" name="email" placeholder="john@example.com" required>
                  </div>

                  <div class="col-md-12">
                    <label class="text-secondary small mb-2">Subject</label>
                    <input type="text" class="form-control" name="subject" placeholder="Project Inquiry" required>
                  </div>

                  <div class="col-md-12">
                    <label class="text-secondary small mb-2">Message</label>
                    <textarea class="form-control" name="message" rows="5" placeholder="How can I help you?" required></textarea>
                  </div>

                  <div class="col-md-12 text-center mt-4">
                    <div class="loading text-accent mb-2" style="display: none;">Sending...</div>
                    <div class="error-message text-danger mb-2" style="display: none;"></div>
                    <div class="sent-message text-success mb-2" style="display: none;">Your message has been sent. Thank you!</div>
                    <button type="submit" class="btn-accent w-100">Send Message</button>
                  </div>

                </div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer border-top border-secondary py-5 mt-5">
    <div class="container text-center">
      <a href="/" class="logo d-inline-flex align-items-center mb-4 text-decoration-none">
        <h2 class="sitename text-white fw-bold mb-0">Hassan<span class="text-accent">.</span></h2>
      </a>
      <p class="text-secondary mb-4 mx-auto" style="max-width: 500px;">Engineering modern digital experiences with Laravel & AI.</p>

      <div class="social-links d-flex justify-content-center gap-3 mb-4">
        <a href="#" class="text-secondary hover-accent fs-4"><i class="bi bi-github"></i></a>
        <a href="#" class="text-secondary hover-accent fs-4"><i class="bi bi-linkedin"></i></a>
        <a href="#" class="text-secondary hover-accent fs-4"><i class="bi bi-twitter-x"></i></a>
      </div>

      <div class="text-secondary small">
        <p class="mb-1">&copy; 2026 M Hassan Abbas. All Rights Reserved.</p>
        <p class="mb-0 text-muted">Built with Laravel & Modern UI</p>
      </div>
    </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
