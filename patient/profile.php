<?php
// Load both the dashboard layout/sidebar CSS and the profile-specific CSS
$page_css  = '../assets/css/dashboard.css';
$page_css2 = '../assets/css/profile.css';
include '../includes/header.php';
?>

<div class="dashboard-layout">

    <!-- =============================================
         SIDEBAR — identical to dashboard.php.
         Only the active link changes: profile.php
         is now highlighted with --active.
    ============================================= -->
    <aside class="sidebar">

        <div class="sidebar__profile">
            <div class="sidebar__avatar">JD</div>
            <p class="sidebar__name">John Doe</p>
            <p class="sidebar__role">Patient</p>
        </div>

        <nav class="sidebar__nav" aria-label="Patient navigation">
            <ul>
                <li>
                    <a href="dashboard.php" class="sidebar__link">
                        <span class="sidebar__icon">🏠</span> Dashboard
                    </a>
                </li>
                <li>
                    <a href="appointments.php" class="sidebar__link">
                        <span class="sidebar__icon">📅</span> Appointments
                    </a>
                </li>
                <li>
                    <a href="book-appointment.php" class="sidebar__link">
                        <span class="sidebar__icon">➕</span> Book Appointment
                    </a>
                </li>
                <li>
                    <a href="doctors.php" class="sidebar__link">
                        <span class="sidebar__icon">👨‍⚕️</span> Doctors
                    </a>
                </li>
                <li>
                    <a href="diagnosis-history.php" class="sidebar__link">
                        <span class="sidebar__icon">🩺</span> Diagnosis History
                    </a>
                </li>
                <li>
                    <a href="medical-history.php" class="sidebar__link">
                        <span class="sidebar__icon">📋</span> Medical History
                    </a>
                </li>
                <li>
                    <a href="favourite-doctors.php" class="sidebar__link">
                        <span class="sidebar__icon">⭐</span> Favourite Doctors
                    </a>
                </li>
                <li>
                    <a href="profile.php" class="sidebar__link sidebar__link--active">
                        <span class="sidebar__icon">👤</span> My Profile
                    </a>
                </li>
                <li class="sidebar__divider"></li>
                <li>
                    <a href="../auth/logout.php" class="sidebar__link sidebar__link--logout">
                        <span class="sidebar__icon">🚪</span> Logout
                    </a>
                </li>
            </ul>
        </nav>

    </aside>

    <!-- =============================================
         MAIN CONTENT
    ============================================= -->
    <main class="dashboard-main">

        <!-- Page heading + Edit button -->
        <div class="dashboard-header">
            <div>
                <h1 class="dashboard-title">My Profile</h1>
                <p class="dashboard-subtitle">View and manage your personal information.</p>
            </div>
            <a href="edit-profile.php" class="btn btn-primary">✏️ Edit Profile</a>
        </div>

        <!-- =============================================
             PROFILE HEADER CARD
             Large banner-style card at the top.
             Shows the patient avatar, full name,
             member-since date, and a quick status badge.
        ============================================= -->
        <section class="card profile-header" aria-label="Profile header">

            <div class="profile-header__avatar">JD</div>

            <div class="profile-header__info">
                <h2 class="profile-header__name">John Doe</h2>
                <p class="profile-header__meta">Patient &nbsp;·&nbsp; Member since January 2024</p>
                <span class="badge badge--confirmed">Active</span>
            </div>

            <a href="edit-profile.php" class="btn btn-secondary profile-header__edit">✏️ Edit Profile</a>

        </section>

        <!-- =============================================
             INFO GRID
             Two-column grid for the detail cards below
             the profile header. Each card is a section.
             Stacks to one column on smaller screens.
        ============================================= -->
        <div class="profile-grid">

            <!-- =========================================
                 PERSONAL INFORMATION
                 Core identity fields: name, DOB, gender,
                 blood type. Read-only display.
            ========================================= -->
            <section class="card profile-card" aria-label="Personal information">

                <div class="profile-card__header">
                    <span class="profile-card__icon">👤</span>
                    <h2 class="profile-card__title">Personal Information</h2>
                </div>

                <dl class="profile-fields">
                    <div class="profile-field">
                        <dt class="profile-field__label">Full Name</dt>
                        <dd class="profile-field__value">John Doe</dd>
                    </div>
                    <div class="profile-field">
                        <dt class="profile-field__label">Date of Birth</dt>
                        <dd class="profile-field__value">14 March 1990</dd>
                    </div>
                    <div class="profile-field">
                        <dt class="profile-field__label">Age</dt>
                        <dd class="profile-field__value">36 years</dd>
                    </div>
                    <div class="profile-field">
                        <dt class="profile-field__label">Gender</dt>
                        <dd class="profile-field__value">Male</dd>
                    </div>
                    <div class="profile-field">
                        <dt class="profile-field__label">Blood Type</dt>
                        <dd class="profile-field__value">
                            <span class="blood-type-badge">O+</span>
                        </dd>
                    </div>
                    <div class="profile-field">
                        <dt class="profile-field__label">Nationality</dt>
                        <dd class="profile-field__value">Egyptian</dd>
                    </div>
                </dl>

            </section>

            <!-- =========================================
                 CONTACT INFORMATION
                 How to reach this patient: email, phone,
                 address. Will be used by the system later.
            ========================================= -->
            <section class="card profile-card" aria-label="Contact information">

                <div class="profile-card__header">
                    <span class="profile-card__icon">📞</span>
                    <h2 class="profile-card__title">Contact Information</h2>
                </div>

                <dl class="profile-fields">
                    <div class="profile-field">
                        <dt class="profile-field__label">Email Address</dt>
                        <dd class="profile-field__value">john.doe@email.com</dd>
                    </div>
                    <div class="profile-field">
                        <dt class="profile-field__label">Phone Number</dt>
                        <dd class="profile-field__value">+20 100 123 4567</dd>
                    </div>
                    <div class="profile-field">
                        <dt class="profile-field__label">City</dt>
                        <dd class="profile-field__value">Cairo</dd>
                    </div>
                    <div class="profile-field">
                        <dt class="profile-field__label">Address</dt>
                        <dd class="profile-field__value">12 Nile Street, Maadi, Cairo</dd>
                    </div>
                </dl>

            </section>

            <!-- =========================================
                 EMERGENCY CONTACT
                 Person to call if the patient cannot
                 speak for themselves. Separate card to
                 make it stand out clearly.
            ========================================= -->
            <section class="card profile-card profile-card--alert" aria-label="Emergency contact">

                <div class="profile-card__header">
                    <span class="profile-card__icon">🚨</span>
                    <h2 class="profile-card__title">Emergency Contact</h2>
                </div>

                <dl class="profile-fields">
                    <div class="profile-field">
                        <dt class="profile-field__label">Contact Name</dt>
                        <dd class="profile-field__value">Jane Doe</dd>
                    </div>
                    <div class="profile-field">
                        <dt class="profile-field__label">Relationship</dt>
                        <dd class="profile-field__value">Spouse</dd>
                    </div>
                    <div class="profile-field">
                        <dt class="profile-field__label">Phone Number</dt>
                        <dd class="profile-field__value">+20 101 987 6543</dd>
                    </div>
                </dl>

            </section>

            <!-- =========================================
                 BASIC MEDICAL INFORMATION
                 High-level health snapshot: known
                 conditions, allergies, current medications.
                 Critical for doctors reviewing the patient.
            ========================================= -->
            <section class="card profile-card" aria-label="Basic medical information">

                <div class="profile-card__header">
                    <span class="profile-card__icon">🩺</span>
                    <h2 class="profile-card__title">Basic Medical Information</h2>
                </div>

                <dl class="profile-fields">
                    <div class="profile-field">
                        <dt class="profile-field__label">Known Conditions</dt>
                        <dd class="profile-field__value">
                            <span class="info-tag">Hypertension</span>
                            <span class="info-tag">Mild Eczema</span>
                        </dd>
                    </div>
                    <div class="profile-field">
                        <dt class="profile-field__label">Allergies</dt>
                        <dd class="profile-field__value">
                            <span class="info-tag info-tag--danger">Penicillin</span>
                            <span class="info-tag info-tag--danger">Pollen</span>
                        </dd>
                    </div>
                    <div class="profile-field">
                        <dt class="profile-field__label">Current Medications</dt>
                        <dd class="profile-field__value">
                            <span class="info-tag">Lisinopril 10mg</span>
                        </dd>
                    </div>
                    <div class="profile-field">
                        <dt class="profile-field__label">Height</dt>
                        <dd class="profile-field__value">178 cm</dd>
                    </div>
                    <div class="profile-field">
                        <dt class="profile-field__label">Weight</dt>
                        <dd class="profile-field__value">82 kg</dd>
                    </div>
                    <div class="profile-field">
                        <dt class="profile-field__label">BMI</dt>
                        <dd class="profile-field__value">25.9 <span class="profile-field__note">(Normal)</span></dd>
                    </div>
                </dl>

            </section>

        </div><!-- /.profile-grid -->

    </main>
</div>

<?php include '../includes/footer.php'; ?>
