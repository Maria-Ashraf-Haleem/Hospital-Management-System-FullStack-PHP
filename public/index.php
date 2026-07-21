<?php
$page_css = '../assets/css/home.css';
include '../includes/header.php';
?>

<section class="hero">
    <div class="container hero__inner">
        <div class="hero__text">
            <span class="hero__eyebrow">Your Health, Our Priority</span>
            <h1 class="hero__title">Compassionate Care, Advanced Medicine</h1>
            <p class="hero__subtitle">
                From routine checkups to specialized treatment, our team is here
                to support you and your family at every step of your health journey.
            </p>
            <div class="hero__actions">
                <a href="book-appointment.php" class="btn btn-primary">Book an Appointment</a>
                <a href="#about" class="btn btn-secondary">Learn More</a>
            </div>
        </div>
        <div class="hero__visual">
            <div class="hero__badge">HMS</div>
        </div>
    </div>
</section>

<section class="section" id="about">
    <div class="container about-preview">
        <div class="about-preview__text">
            <h2 class="section-heading">About Our Hospital</h2>
            <p>
                For over 15 years, Hospital Management System has provided reliable,
                patient-first healthcare across a wide range of specialties. Our doctors,
                nurses, and staff work together to make sure every patient receives
                accurate diagnoses and personalized treatment plans.
            </p>
            <a href="about.php" class="btn btn-secondary">More About Us</a>
        </div>
        <div class="about-preview__facts">
            <div class="about-fact">
                <span class="about-fact__value">15+</span>
                <span class="about-fact__label">Years of Service</span>
            </div>
            <div class="about-fact">
                <span class="about-fact__value">40+</span>
                <span class="about-fact__label">Expert Doctors</span>
            </div>
        </div>
    </div>
</section>

<section class="section section--muted">
    <div class="container">
        <h2 class="section-heading section-heading--center">Our Departments</h2>
        <p class="section-subtext">Specialized care across every stage of life.</p>

        <div class="departments-grid">
            <div class="card department-card">
                <div class="department-card__icon">🫀</div>
                <h3>Cardiology</h3>
                <p>Diagnosis and treatment of heart and blood vessel conditions.</p>
                <a href="#">View Department</a>
            </div>
            <div class="card department-card">
                <div class="department-card__icon">🧠</div>
                <h3>Neurology</h3>
                <p>Care for conditions affecting the brain, spine, and nerves.</p>
                <a href="#">View Department</a>
            </div>
            <div class="card department-card">
                <div class="department-card__icon">🧒</div>
                <h3>Pediatrics</h3>
                <p>Comprehensive health care for infants, children, and teens.</p>
                <a href="#">View Department</a>
            </div>
            <div class="card department-card">
                <div class="department-card__icon">🦴</div>
                <h3>Orthopedics</h3>
                <p>Treatment for bones, joints, muscles, and ligaments.</p>
                <a href="#">View Department</a>
            </div>
            <div class="card department-card">
                <div class="department-card__icon">🩹</div>
                <h3>Dermatology</h3>
                <p>Skin, hair, and nail care from experienced specialists.</p>
                <a href="#">View Department</a>
            </div>
            <div class="card department-card">
                <div class="department-card__icon">🩻</div>
                <h3>Radiology</h3>
                <p>Advanced imaging for accurate diagnosis and monitoring.</p>
                <a href="#">View Department</a>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <h2 class="section-heading section-heading--center">Featured Doctors</h2>
        <p class="section-subtext">Meet a few of the specialists who care for our patients.</p>

        <div class="doctors-grid">
            <div class="card doctor-card">
                <div class="doctor-card__avatar">MA</div>
                <h3>Dr. Mina Ashraf</h3>
                <p class="doctor-card__specialty">Cardiology</p>
            </div>
            <div class="card doctor-card">
                <div class="doctor-card__avatar">MA</div>
                <h3>Dr. Mario Ashraf</h3>
                <p class="doctor-card__specialty">Neurology</p>
            </div>
            <div class="card doctor-card">
                <div class="doctor-card__avatar">DF</div>
                <h3>Dr. Demiana Frances</h3>
                <p class="doctor-card__specialty">Dermatology</p>
            </div>
            <div class="card doctor-card">
                <div class="doctor-card__avatar">MS</div>
                <h3>Dr. Medo Samy</h3>
                <p class="doctor-card__specialty">Pediatrics</p>
            </div>
        </div>
    </div>
</section>

<section class="section section--muted">
    <div class="container">
        <h2 class="section-heading section-heading--center">Why Choose Us</h2>

        <div class="why-grid">
            <div class="why-item">
                <span class="why-item__icon">✓</span>
                <div>
                    <h4>Expert Doctors</h4>
                    <p>Board-certified specialists across every major department.</p>
                </div>
            </div>
            <div class="why-item">
                <span class="why-item__icon">✓</span>
                <div>
                    <h4>24/7 Emergency Care</h4>
                    <p>Our emergency team is available around the clock.</p>
                </div>
            </div>
            <div class="why-item">
                <span class="why-item__icon">✓</span>
                <div>
                    <h4>Modern Equipment</h4>
                    <p>Advanced diagnostic and treatment technology.</p>
                </div>
            </div>
            <div class="why-item">
                <span class="why-item__icon">✓</span>
                <div>
                    <h4>Easy Online Booking</h4>
                    <p>Schedule appointments in minutes, from any device.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card">
                <p class="stat-card__value">25,000+</p>
                <p class="stat-card__label">Patients Served</p>
            </div>
            <div class="stat-card">
                <p class="stat-card__value">40+</p>
                <p class="stat-card__label">Expert Doctors</p>
            </div>
            <div class="stat-card">
                <p class="stat-card__value">12</p>
                <p class="stat-card__label">Departments</p>
            </div>
            <div class="stat-card">
                <p class="stat-card__value">15+</p>
                <p class="stat-card__label">Years of Experience</p>
            </div>
        </div>
    </div>
</section>

<section class="cta-banner">
    <div class="container cta-banner__inner">
        <h2>Ready to take the next step in your health?</h2>
        <p>Book an appointment with one of our specialists today.</p>
        <a href="book-appointment.php" class="btn btn-primary">Book an Appointment Now</a>
    </div>
</section>

<?php include '../includes/footer.php'; ?>