<?php
$host = "localhost";
$user = "root";      
$pass = "";           
$db   = "portofolio_angie";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$result_profile = $conn->query("SELECT * FROM profile LIMIT 1");
$profile = $result_profile->fetch_assoc();

$result_tags = $conn->query("SELECT * FROM tags");
$tags = [];
while($row = $result_tags->fetch_assoc()) {
    $tags[] = $row['tag_name'];
}

$result_skills = $conn->query("SELECT * FROM skills");
$skills = [];
while($row = $result_skills->fetch_assoc()) {
    $skills[] = $row;
}

$result_certs = $conn->query("SELECT * FROM certificates");
$certificates = [];
while($row = $result_certs->fetch_assoc()) {
    $certificates[] = $row;
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio - <?php echo $profile['name']; ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</head>

<body>

<div id="app">

    <nav class="navbar navbar-expand-lg navbar-light py-4">
        <div class="container">

            <a class="navbar-brand fw-bold fs-3" href="#">ANGIE.</a>

            <button class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">

                    <li class="nav-item">
                        <a class="nav-link mx-3 active-link" href="#">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link mx-3" href="#about">About Me</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link mx-3" href="#certificates">Certificates</a>
                    </li>

                    <li class="nav-item ms-lg-4">
                        <a class="btn btn-navy px-4 py-2 rounded-pill shadow-sm" href="#">
                            Contact
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>


    <header id="home" class="hero-section py-5">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="pe-lg-5 text-start">

                        <h2 class="fw-bold mb-1 display-5">
                            Hi, I'm <span class="text-navy">{{ name }}</span>
                        </h2>

                        <h3 class="text-muted fw-normal mb-4 fs-2">
                            {{ role }}
                        </h3>

                        <p class="text-secondary mb-5 lh-lg fs-5">
                            {{ bioShort }}
                        </p>

                        <div class="d-flex gap-3 mb-5">
                            <button class="btn btn-navy px-4 py-3 shadow-sm">
                                Contact Me
                            </button>
                            <button class="btn btn-cv px-4 py-3 shadow-sm">
                                Download CV
                            </button>
                        </div>

                        <div class="d-flex flex-wrap gap-2">
                            <span v-for="tag in tags"
                                  :key="tag"
                                  class="badge-tag shadow-sm">
                                {{ tag }}
                            </span>
                        </div>

                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="hero-bg-wrapper">
                        <div class="hero-bg-card shadow-lg text-center">

                            <div class="profile-circle shadow-inner">
                                <img src="assets/fotopdhnobg.png"
                                     alt="Profile"
                                     class="img-fluid profile-img-circle">
                            </div>

                            <div class="mt-4 profile-label">
                                <h2 class="fw-bold mb-0">{{ name }}</h2>
                                <hr class="short-line mx-auto">
                                <p class="text-uppercase tracking-wider text-muted small">
                                    {{ role }}
                                </p>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </header>


    <section id="about" class="py-5 section-margin">
        <div class="container">
            <div class="row g-5 align-items-center">

                <div class="col-lg-6">
                    <h2 class="fw-bold mb-2">About Me</h2>
                    <p class="text-muted mb-4 fs-5">Let me introduce myself</p>
                    <p class="text-secondary lh-lg fs-5">
                        {{ bioFull }}
                    </p>
                </div>

                <div class="col-lg-6">
                    <div class="skill-card p-5 shadow-sm bg-white border-0">

                        <h4 class="fw-bold mb-4">Skills</h4>

                        <div v-for="skill in skills"
                             :key="skill.name"
                             class="mb-4">

                            <div class="d-flex justify-content-between mb-2 fw-bold">
                                <span>{{ skill.name }}</span>
                                <span>{{ skill.level }}%</span>
                            </div>

                            <div class="progress rounded-pill" style="height: 12px;">
                                <div class="progress-bar rounded-pill"
                                     :style="{ width: skill.level + '%', backgroundColor: skill.color }">
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="certificates" class="py-5 section-margin">
        <div class="container text-center">

            <h2 class="fw-bold mb-2">Certificates</h2>
            <p class="text-muted mb-5">
                Recognition of my professional journey
            </p>

            <div class="row g-4 text-start">

                <div class="col-md-6 col-lg-4"
                     v-for="cert in certificates"
                     :key="cert.title">

                    <div class="card certificate-card border-0 shadow-sm h-100 overflow-hidden">

                        <img :src="'assets/' + cert.image"
                             class="card-img-top cert-img"
                             :alt="cert.title">

                        <div class="card-body p-4 text-center">
                            <h5 class="fw-bold mb-1 fs-6">{{ cert.title }}</h5>
                            <p class="text-muted small mb-0">{{ cert.issuer }}</p>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>


    <footer class="py-5 mt-5 border-top text-center text-muted">
        <p>© 2026 {{ name }}. Built with Bootstrap 5 & Vue JS</p>
    </footer>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
const { createApp } = Vue;
createApp({
    data() {
        return {
            name: <?php echo json_encode($profile['name']); ?>,
            role: <?php echo json_encode($profile['role']); ?>,
            bioShort: <?php echo json_encode($profile['bio_short']); ?>,
            bioFull: <?php echo json_encode($profile['bio_full']); ?>,
            tags: <?php echo json_encode($tags); ?>,
            skills: <?php echo json_encode($skills); ?>,
            certificates: <?php echo json_encode($certificates); ?>
        };
    }
}).mount('#app');
</script>
</body>
</html>