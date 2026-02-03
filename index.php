<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ervie Obedencio</title>

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Gravitas+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>

<body>
    
<!-- SIDEBAR -->
<aside class="sidebar">
    <h2 class="logo">Ervie<span></h2>

    <nav>
        <ul>
            <li><a href="#" onclick="showSection('home')">Home</a></li>  
            <li><a href="#" onclick="showSection('about')">About</a></li>   
            <li><a href="#" onclick="showSection('contact')">Contact</a></li>  
        </ul>
    </nav>
</aside>


<!-- MAIN CONTENT -->
<main class="content">

    <!-- HOME -->
    <section id="home" class="page active">

    <!-- BACKGROUND DESIGN -->
    <div class="background-image">
        <!-- 👉 Put your design image here -->
        <img src="images/background.png" alt="Background Design">
    </div>

    <div class="hero">

        <div class="hero-text">
            <h1>Hello, I’m <span>Ervie</span><br>Obedencio</h1>
            <p>
                I am a passionate aspiring developer focused on building clean, minimal,
                and user-friendly digital interfaces.
            </p>
            <button>View Projects</button>
        </div>

        <div class="hero-image">
            <img src="images/profile.jpg" alt="Profile Picture">
        </div>

    </div>

</section>

    <!-- ABOUT -->
    <section id="about" class="page">

    <div class="background-image">
        <!-- 👉 Put your design image here -->
        <img src="images/background.png" alt="Background Design">
    </div>


        <h1>About Me</h1>
        <p>
            I am 20 years old and I'm currently a 3rd Year IT student from USTP.
            I enjoy creating minimalist interfaces and experimenting with new upcoming technologies.
        </p>


    </section>


    <!-- CONTACT -->
    <section id="contact" class="page">

    <div class="background-image">
        <!-- 👉 Put your design image here -->
        <img src="images/background.png" alt="Background Design">
    </div>

        <h1>Contact</h1>
        <p>Email: obedencioervie@gmail.com</p>
        <p>Facebook: Ervie Obedencio</p>
        <p>GitHub: github.com/ervie</p>
    </section>

</main>


<!-- JAVASCRIPT -->
<script>
function showSection(sectionId) {
    let sections = document.querySelectorAll('.page');
    sections.forEach(section => section.classList.remove('active'));
    document.getElementById(sectionId).classList.add('active');
}
</script>

</body>
</html>
