<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/css/style.css'])

        <title>Olgun Portfolio</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else

        @endif
    </head>
    
<body>
    <header class="hero">
        <nav class="nav">
            <div class="nav-content">
                <div class="logo">OH</div>
                <ul class="nav-links">
                    <li><a href="{{route('about')}}">About</a></li>
                    <li><a href="{{route('project')}}">Project</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
        </nav>
        
        <div class="hero-content">
            <h1>Olgun Hristov</h1>
            <p class="subtitle">Full-Stack Developer</p>
            <div class="social-links">
                <a href="#" class="social-link">GitHub</a>
                <a href="#" class="social-link">LinkedIn</a>
                <a href="#" class="social-link">Email</a>
            </div>
        </div>
    </header>

   

    <section id="projects" class="projects">
        <div class="container">
            <h2>Featured Projects</h2>
            <div class="project-grid">
                <div class="project-card">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&q=80&w=500" alt="Project 1">
                    <h3>E-Commerce Platform</h3>
                    <p>A full-featured online shopping platform with secure payments and inventory management.</p>
                    <a href="#" class="project-link">View Project</a>
                </div>
                <div class="project-card">
                    <img src="https://images.unsplash.com/photo-1555421689-491a97ff2040?auto=format&fit=crop&q=80&w=500" alt="Project 2">
                    <h3>Task Manager App</h3>
                    <p>A productivity app helping teams organize and track their projects efficiently.</p>
                    <a href="#" class="project-link">View Project</a>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="contact">
        <div class="container">
            <h2>Get In Touch</h2>
            <p class="contact-text">I'm always open to new opportunities and interesting projects.</p>
            <a href="mailto:hello@johndoe.com" class="contact-button">Say Hello</a>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 John Doe. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
