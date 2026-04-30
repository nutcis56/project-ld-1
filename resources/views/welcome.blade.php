<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Nutchapon - Web Developer Portfolio</title>

  <link rel="stylesheet" href="{{asset('css/style.css')}}" />

  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500;600;700;800&display=swap"
    rel="stylesheet"
  />
</head>

<body>

  <!-- Navbar -->
  <header class="navbar" id="navbar">
    <div class="container nav-container">
      <a href="#home" class="logo">
        <span class="logo-icon">N</span>
        <span>Nutchapon</span>
      </a>

      <nav class="nav-menu" id="navMenu">
        <a href="#home" class="active">Home</a>
        <a href="#about">About</a>
        <a href="#skills">Skills</a>
        <a href="#projects">Projects</a>
        <a href="#contact">Contact</a>
      </nav>

      <a href="#contact" class="nav-btn">Let's Talk</a>

      <button class="hamburger" id="hamburger" aria-label="Toggle menu">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>
  </header>

  <!-- Hero -->
  <section class="hero" id="home">
    <div class="container hero-container">

      <div class="hero-content reveal">
        <div class="badge">
          <span>👋</span>
          Welcome to my portfolio
        </div>

        <h1>
          Hi, I'm Nutchapon —
          <span>Web Developer</span>
        </h1>

        <p>
          I build modern, fast and responsive websites and web applications
          that deliver great user experiences.
        </p>

        <div class="hero-actions">
          <a href="#projects" class="btn btn-primary">
            View Projects
            <span>→</span>
          </a>

          <a href="#contact" class="btn btn-secondary">
            Contact Me
            <span>✉</span>
          </a>
        </div>

        <div class="social-links">
          <a href="#" aria-label="GitHub">⌘</a>
          <a href="#" aria-label="LinkedIn">in</a>
          <a href="#" aria-label="Twitter">𝕏</a>
          <a href="#" aria-label="Code">&lt;/&gt;</a>
        </div>
      </div>

      <div class="hero-visual reveal">
        <div class="floating-tag tag-code">&lt;/&gt;</div>
        <div class="floating-tag tag-terminal">&gt;_</div>
        <div class="floating-tag tag-brace">{ }</div>

        <div class="browser-card code-card">
          <div class="browser-dots">
            <span></span>
            <span></span>
            <span></span>
          </div>

          <div class="code-layout">
            <div class="code-sidebar">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <span></span>
            </div>

            <div class="code-lines">
              <span class="line blue"></span>
              <span class="line short"></span>
              <span class="line yellow"></span>
              <span class="line red"></span>
              <span class="line green"></span>
              <span class="line blue long"></span>
              <span class="line purple"></span>
              <span class="line short yellow"></span>
            </div>
          </div>
        </div>

        <div class="browser-card preview-card">
          <div class="preview-image">
            <span>▵</span>
          </div>

          <div class="preview-lines">
            <span></span>
            <span></span>
            <span></span>
          </div>

          <div class="mini-chart">
            <svg viewBox="0 0 180 80" preserveAspectRatio="none">
              <path d="M5 60 C30 20, 50 70, 75 45 C105 15, 120 55, 150 28 C165 15, 170 12, 178 10" />
            </svg>
          </div>
        </div>

        <div class="hero-bg-circle"></div>
        <div class="dots-pattern"></div>
      </div>
    </div>

    <a href="#about" class="scroll-down">
      <span>Scroll down</span>
      <b>⌄</b>
    </a>
  </section>

  <!-- About + Skills -->
  <section class="profile-section" id="about">
    <div class="container profile-grid">

      <!-- About -->
      <div class="glass-card about-card reveal">
        <div class="section-title small">
          <span>👤</span>
          <h2>About Me</h2>
        </div>

        <div class="about-body">
          <div class="avatar">
            <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=400&q=80" alt="Profile image">
          </div>

          <div class="about-text">
            <p>
              I'm a passionate web developer who loves turning ideas into real,
              functional and beautiful web experiences.
            </p>
            <p>
              I enjoy building clean, efficient and scalable solutions with
              modern technologies.
            </p>
          </div>
        </div>

        <div class="stats">
          <div>
            <strong>2+</strong>
            <span>Years Experience</span>
          </div>
          <div>
            <strong>15+</strong>
            <span>Projects Completed</span>
          </div>
          <div>
            <strong>10+</strong>
            <span>Happy Clients</span>
          </div>
        </div>
      </div>

      <!-- Skills -->
      <div class="glass-card skills-card reveal" id="skills">
        <div class="section-title small">
          <span>&lt;&gt;</span>
          <h2>My Skills</h2>
        </div>

        <div class="skills-grid">
          <div class="skill-item">
            <div class="skill-icon html">HTML</div>
            <span>HTML</span>
          </div>

          <div class="skill-item">
            <div class="skill-icon css">CSS</div>
            <span>CSS</span>
          </div>

          <div class="skill-item">
            <div class="skill-icon js">JS</div>
            <span>JavaScript</span>
          </div>

          <div class="skill-item">
            <div class="skill-icon laravel">L</div>
            <span>Laravel</span>
          </div>

          <div class="skill-item">
            <div class="skill-icon php">php</div>
            <span>PHP</span>
          </div>

          <div class="skill-item">
            <div class="skill-icon mysql">🐬</div>
            <span>MySQL</span>
          </div>

          <div class="skill-item wide">
            <div class="skill-icon responsive">▣</div>
            <span>Responsive Design</span>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- Projects -->
  <section class="projects" id="projects">
    <div class="container">

      <div class="section-heading reveal">
        <span class="dot-label">Featured Projects</span>
        <h2>Some Things I've Built</h2>
        <p>A selection of projects that I'm proud of.</p>
      </div>

      <div class="project-grid">

        <article class="project-card reveal">
          <div class="project-preview dashboard-preview">
            <div class="side-menu"></div>
            <div class="preview-content">
              <div class="chart-bars">
                <span style="height: 45%"></span>
                <span style="height: 70%"></span>
                <span style="height: 55%"></span>
                <span style="height: 85%"></span>
                <span style="height: 62%"></span>
              </div>
              <div class="preview-row"></div>
              <div class="preview-row short"></div>
            </div>
          </div>

          <h3>Analytics Dashboard</h3>
          <p>A responsive admin dashboard with charts, widgets and user management.</p>

          <div class="project-footer">
            <div class="tags">
              <span>Laravel</span>
              <span>MySQL</span>
              <span>Chart.js</span>
            </div>
            <a href="#">View Project →</a>
          </div>
        </article>

        <article class="project-card reveal">
          <div class="project-preview shop-preview">
            <div class="shop-header"></div>
            <div class="products">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>

          <h3>E-Commerce Website</h3>
          <p>Full-featured online store with cart, checkout and payment integration.</p>

          <div class="project-footer">
            <div class="tags">
              <span>Laravel</span>
              <span>PHP</span>
              <span>MySQL</span>
            </div>
            <a href="#">View Project →</a>
          </div>
        </article>

        <article class="project-card reveal">
          <div class="project-preview portfolio-preview">
            <div>
              <h4>Hello, I'm</h4>
              <h5>Creative Developer</h5>
              <button>View Work</button>
            </div>
            <div class="person-placeholder"></div>
          </div>

          <h3>Personal Portfolio</h3>
          <p>Minimal and modern portfolio website to showcase work and skills.</p>

          <div class="project-footer">
            <div class="tags">
              <span>HTML</span>
              <span>CSS</span>
              <span>JavaScript</span>
            </div>
            <a href="#">View Project →</a>
          </div>
        </article>

      </div>
    </div>
  </section>

  <!-- Contact CTA -->
  <section class="contact-cta" id="contact">
    <div class="container">
      <div class="cta-card reveal">
        <div class="cta-icon">✈</div>

        <div class="cta-text">
          <span>Let's Work Together</span>
          <h2>Have a project in mind?</h2>
          <p>
            I'm available for freelance work and open to exciting opportunities.
            Let's build something amazing together.
          </p>
        </div>

        <div class="cta-actions">
          <a href="mailto:your-email@example.com" class="btn btn-primary">
            Contact Me
            <span>✉</span>
          </a>

          <a href="#" class="btn btn-secondary">
            Download Resume
            <span>↓</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container footer-container">
      <p>© 2026 Nutchapon. All rights reserved.</p>

      <div>
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#projects">Projects</a>
      </div>
    </div>
  </footer>

  <script src="{{asset('js/script.js')}}"></script>
</body>
</html>