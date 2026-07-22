<?php
$page_css = '../assets/css/dashboard.css';
include '../includes/header.php';
?>

<div class="dashboard-layout">

    <!-- =============================================
         SIDEBAR
         Fixed left panel. Contains patient avatar,
         name, and all navigation links for the
         patient portal. Active link is highlighted.
    ============================================= -->
    <aside class="sidebar" id="sidebar">

        <div class="sidebar__profile">
            <div class="sidebar__avatar">JD</div>
            <p class="sidebar__name">John Doe</p>
            <p class="sidebar__role">Patient</p>
        </div>

        <nav class="sidebar__nav" aria-label="Patient navigation">
            <ul>
                <li>
                    <a href="dashboard.php" class="sidebar__link sidebar__link--active">
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
                    <a href="profile.php" class="sidebar__link">
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
         Everything to the right of the sidebar.
         Scrolls independently from the sidebar.
    ============================================= -->
    <main class="dashboard-main">

        <!-- Page heading -->
        <div class="dashboard-header">
            <div>
                <h1 class="dashboard-title">Welcome back, John 👋</h1>
                <p class="dashboard-subtitle">Here is a summary of your health activity.</p>
            </div>
            <a href="book-appointment.php" class="btn btn-primary">+ Book Appointment</a>
        </div>

        <!-- =============================================
             STAT CARDS
             Four summary numbers at the top of the page.
             Gives the patient a quick health overview.
        ============================================= -->
        <section class="dash-stats" aria-label="Summary statistics">
            <div class="dash-stat-card">
                <div class="dash-stat-card__icon dash-stat-card__icon--blue">📅</div>
                <div>
                    <p class="dash-stat-card__value">3</p>
                    <p class="dash-stat-card__label">Upcoming Appointments</p>
                </div>
            </div>
            <div class="dash-stat-card">
                <div class="dash-stat-card__icon dash-stat-card__icon--green">🩺</div>
                <div>
                    <p class="dash-stat-card__value">8</p>
                    <p class="dash-stat-card__label">Past Diagnoses</p>
                </div>
            </div>
            <div class="dash-stat-card">
                <div class="dash-stat-card__icon dash-stat-card__icon--teal">👨‍⚕️</div>
                <div>
                    <p class="dash-stat-card__value">2</p>
                    <p class="dash-stat-card__label">Favourite Doctors</p>
                </div>
            </div>
            <div class="dash-stat-card">
                <div class="dash-stat-card__icon dash-stat-card__icon--orange">📋</div>
                <div>
                    <p class="dash-stat-card__value">5</p>
                    <p class="dash-stat-card__label">Medical Records</p>
                </div>
            </div>
        </section>

        <!-- =============================================
             UPCOMING APPOINTMENTS + QUICK ACTIONS
             Two-column row. Left shows next scheduled
             appointments. Right has shortcut buttons.
        ============================================= -->
        <div class="dash-row">

            <!-- Upcoming Appointments -->
            <section class="card dash-card" aria-label="Upcoming appointments">
                <div class="dash-card__header">
                    <h2 class="dash-card__title">Upcoming Appointments</h2>
                    <a href="appointments.php" class="dash-card__link">View all</a>
                </div>

                <ul class="appointment-list">

                    <li class="appointment-item">
                        <div class="appointment-item__date">
                            <span class="appointment-item__day">28</span>
                            <span class="appointment-item__month">Jul</span>
                        </div>
                        <div class="appointment-item__info">
                            <p class="appointment-item__doctor">Dr. Mina Ashraf</p>
                            <p class="appointment-item__dept">Cardiology</p>
                        </div>
                        <span class="badge badge--confirmed">Confirmed</span>
                    </li>

                    <li class="appointment-item">
                        <div class="appointment-item__date">
                            <span class="appointment-item__day">02</span>
                            <span class="appointment-item__month">Aug</span>
                        </div>
                        <div class="appointment-item__info">
                            <p class="appointment-item__doctor">Dr. Demiana Frances</p>
                            <p class="appointment-item__dept">Dermatology</p>
                        </div>
                        <span class="badge badge--pending">Pending</span>
                    </li>

                    <li class="appointment-item">
                        <div class="appointment-item__date">
                            <span class="appointment-item__day">10</span>
                            <span class="appointment-item__month">Aug</span>
                        </div>
                        <div class="appointment-item__info">
                            <p class="appointment-item__doctor">Dr. Medo Samy</p>
                            <p class="appointment-item__dept">Pediatrics</p>
                        </div>
                        <span class="badge badge--confirmed">Confirmed</span>
                    </li>

                </ul>
            </section>

            <!-- Quick Actions -->
            <section class="card dash-card" aria-label="Quick actions">
                <div class="dash-card__header">
                    <h2 class="dash-card__title">Quick Actions</h2>
                </div>

                <div class="quick-actions">
                    <a href="book-appointment.php" class="quick-action-btn">
                        <span class="quick-action-btn__icon">📅</span>
                        <span>Book Appointment</span>
                    </a>
                    <a href="doctors.php" class="quick-action-btn">
                        <span class="quick-action-btn__icon">👨‍⚕️</span>
                        <span>Find a Doctor</span>
                    </a>
                    <a href="medical-history.php" class="quick-action-btn">
                        <span class="quick-action-btn__icon">📋</span>
                        <span>Medical History</span>
                    </a>
                    <a href="diagnosis-history.php" class="quick-action-btn">
                        <span class="quick-action-btn__icon">🩺</span>
                        <span>Diagnosis History</span>
                    </a>
                    <a href="profile.php" class="quick-action-btn">
                        <span class="quick-action-btn__icon">👤</span>
                        <span>Edit Profile</span>
                    </a>
                    <a href="favourite-doctors.php" class="quick-action-btn">
                        <span class="quick-action-btn__icon">⭐</span>
                        <span>Favourites</span>
                    </a>
                </div>
            </section>

        </div>

        <!-- =============================================
             RECENT DIAGNOSES
             Full-width table showing the patient's most
             recent diagnoses with doctor and date info.
        ============================================= -->
        <section class="card dash-card" aria-label="Recent diagnoses">
            <div class="dash-card__header">
                <h2 class="dash-card__title">Recent Diagnoses</h2>
                <a href="diagnosis-history.php" class="dash-card__link">View all</a>
            </div>

            <div class="table-wrapper">
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Doctor</th>
                            <th>Department</th>
                            <th>Diagnosis</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>15 Jul 2026</td>
                            <td>Dr. Mina Ashraf</td>
                            <td>Cardiology</td>
                            <td>Hypertension Stage 1</td>
                            <td><span class="badge badge--confirmed">Treated</span></td>
                        </tr>
                        <tr>
                            <td>02 Jun 2026</td>
                            <td>Dr. Demiana Frances</td>
                            <td>Dermatology</td>
                            <td>Eczema (mild)</td>
                            <td><span class="badge badge--pending">Ongoing</span></td>
                        </tr>
                        <tr>
                            <td>18 Apr 2026</td>
                            <td>Dr. Medo Samy</td>
                            <td>Pediatrics</td>
                            <td>Seasonal Allergy</td>
                            <td><span class="badge badge--confirmed">Treated</span></td>
                        </tr>
                        <tr>
                            <td>05 Mar 2026</td>
                            <td>Dr. Mario Ashraf</td>
                            <td>Neurology</td>
                            <td>Tension Headache</td>
                            <td><span class="badge badge--confirmed">Treated</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

    </main>
</div>

<?php include '../includes/footer.php'; ?>
