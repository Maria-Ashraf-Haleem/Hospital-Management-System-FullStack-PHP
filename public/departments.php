<?php
include '../includes/header.php';
?>

<section class="hero">
    <div class="container hero__inner">
        <div class="hero__text">
            <span class="hero__eyebrow">Departments</span>
            <h1 class="hero__title">Our Medical Departments</h1>
            <p class="hero__subtitle">
                Browse our specialties below to find the right department
                and doctor for your health needs.
            </p>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">

        <form class="search-bar" action="#" method="get">
            <input type="text" name="search" placeholder="Search departments (e.g. Cardiology)">
            <button type="submit" class="btn btn-primary">Search</button>
        </form>

        <div class="departments-grid">
            <div class="card department-card">
                <div class="department-card__icon">🫀</div>
                <h3>Cardiology</h3>
                <p>Diagnosis and treatment of heart and blood vessel conditions.</p>
                <a href="doctors.php?dept=cardiology" class="btn btn-secondary">View Doctors</a>
            </div>
            <div class="card department-card">
                <div class="department-card__icon">🧠</div>
                <h3>Neurology</h3>
                <p>Care for conditions affecting the brain, spine, and nerves.</p>
                <a href="doctors.php?dept=neurology" class="btn btn-secondary">View Doctors</a>
            </div>
            <div class="card department-card">
                <div class="department-card__icon">🧒</div>
                <h3>Pediatrics</h3>
                <p>Comprehensive health care for infants, children, and teens.</p>
                <a href="doctors.php?dept=pediatrics" class="btn btn-secondary">View Doctors</a>
            </div>
            <div class="card department-card">
                <div class="department-card__icon">🦴</div>
                <h3>Orthopedics</h3>
                <p>Treatment for bones, joints, muscles, and ligaments.</p>
                <a href="doctors.php?dept=orthopedics" class="btn btn-secondary">View Doctors</a>
            </div>
            <div class="card department-card">
                <div class="department-card__icon">🩹</div>
                <h3>Dermatology</h3>
                <p>Skin, hair, and nail care from experienced specialists.</p>
                <a href="doctors.php?dept=dermatology" class="btn btn-secondary">View Doctors</a>
            </div>
            <div class="card department-card">
                <div class="department-card__icon">🩻</div>
                <h3>Radiology</h3>
                <p>Advanced imaging for accurate diagnosis and monitoring.</p>
                <a href="doctors.php?dept=radiology" class="btn btn-secondary">View Doctors</a>
            </div>
            <div class="card department-card">
                <div class="department-card__icon">🎗️</div>
                <h3>Oncology</h3>
                <p>Cancer screening, diagnosis, and personalized treatment plans.</p>
                <a href="doctors.php?dept=oncology" class="btn btn-secondary">View Doctors</a>
            </div>
            <div class="card department-card">
                <div class="department-card__icon">👶</div>
                <h3>Gynecology</h3>
                <p>Women's health care from routine checkups to specialized care.</p>
                <a href="doctors.php?dept=gynecology" class="btn btn-secondary">View Doctors</a>
            </div>
            <div class="card department-card">
                <div class="department-card__icon">👂</div>
                <h3>ENT</h3>
                <p>Treatment for ear, nose, and throat conditions.</p>
                <a href="doctors.php?dept=ent" class="btn btn-secondary">View Doctors</a>
            </div>
            <div class="card department-card">
                <div class="department-card__icon">🧬</div>
                <h3>General Surgery</h3>
                <p>Surgical care for a wide range of medical conditions.</p>
                <a href="doctors.php?dept=general-surgery" class="btn btn-secondary">View Doctors</a>
            </div>
        </div>

    </div>
</section>

<section class="section section--muted">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card">
                <p class="stat-card__value">12</p>
                <p class="stat-card__label">Departments</p>
            </div>
            <div class="stat-card">
                <p class="stat-card__value">40+</p>
                <p class="stat-card__label">Specialists</p>
            </div>
            <div class="stat-card">
                <p class="stat-card__value">15 min</p>
                <p class="stat-card__label">Average Wait Time</p>
            </div>
            <div class="stat-card">
                <p class="stat-card__value">98%</p>
                <p class="stat-card__label">Patient Satisfaction</p>
            </div>
        </div>
    </div>
</section>

<section class="cta-banner">
    <div class="container cta-banner__inner">
        <h2>Not sure which department you need?</h2>
        <p>Book an appointment and our team will guide you to the right specialist.</p>
        <a href="book-appointment.php" class="btn btn-primary">Book an Appointment</a>
    </div>
</section>

<?php include '../includes/footer.php'; ?>