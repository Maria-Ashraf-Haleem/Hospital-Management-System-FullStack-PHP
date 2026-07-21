<?php
$page_css = '../assets/css/contact.css';
include '../includes/header.php';
?>

<section class="hero">
    <div class="container hero__inner">
        <div class="hero__text">
            <span class="hero__eyebrow">Contact Us</span>
            <h1 class="hero__title">We're Here to Help</h1>
            <p class="hero__subtitle">
                Reach out with any questions about appointments, departments,
                or general inquiries. Our team will get back to you shortly.
            </p>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <h2 class="section-heading section-heading--center">Contact Information</h2>
        <p class="section-subtext">Multiple ways to reach our hospital.</p>

        <div class="departments-grid">
            <div class="card department-card">
                <div class="department-card__icon">📍</div>
                <h3>Address</h3>
                <p>123 Wellness Street, Asyut, Egypt</p>
            </div>
            <div class="card department-card">
                <div class="department-card__icon">📞</div>
                <h3>Phone</h3>
                <p>+20 123 456 7890</p>
            </div>
            <div class="card department-card">
                <div class="department-card__icon">✉️</div>
                <h3>Email</h3>
                <p>support@hms-hospital.com</p>
            </div>
            <div class="card department-card">
                <div class="department-card__icon">🕒</div>
                <h3>Working Hours</h3>
                <p>Sat - Thu, 8:00 AM - 8:00 PM</p>
            </div>
        </div>
    </div>
</section>

<section class="section section--muted">
    <div class="container">
        <h2 class="section-heading section-heading--center">Send Us a Message</h2>
        <p class="section-subtext">Fill out the form and our team will respond soon.</p>

        <div class="card contact-form-card">
            <form action="#" method="post">
                <div class="form-row">
                    <div class="form-group">
                        <label for="contact-name">Full Name</label>
                        <input type="text" id="contact-name" name="full_name" placeholder="Enter your full name">
                    </div>
                    <div class="form-group">
                        <label for="contact-email">Email Address</label>
                        <input type="email" id="contact-email" name="email" placeholder="Enter your email">
                    </div>
                </div>

                <div class="form-group">
                    <label for="contact-subject">Subject</label>
                    <input type="text" id="contact-subject" name="subject" placeholder="What is this regarding?">
                </div>

                <div class="form-group">
                    <label for="contact-message">Message</label>
                    <textarea id="contact-message" name="message" placeholder="Write your message here"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <h2 class="section-heading section-heading--center">Find Us</h2>
        <p class="section-subtext">Visit us at our main hospital location.</p>

        <div class="map-placeholder">
            <span class="map-placeholder__icon">🗺️</span>
            <p>Map will be displayed here</p>
            <p class="map-placeholder__address">123 Wellness Street, Asyut, Egypt</p>
        </div>
    </div>
</section>

<section class="section section--muted">
    <div class="container">
        <h2 class="section-heading section-heading--center">Frequently Asked Questions</h2>
        <p class="section-subtext">Quick answers to common questions.</p>

        <div class="faq-list">
            <details class="faq-item">
                <summary>What are your visiting hours?</summary>
                <p>General visiting hours are from 10:00 AM to 6:00 PM daily, except during medical procedures.</p>
            </details>
            <details class="faq-item">
                <summary>Do you accept walk-in patients?</summary>
                <p>Yes, walk-ins are welcome for general consultations, though booking an appointment is recommended.</p>
            </details>
            <details class="faq-item">
                <summary>Which insurance providers do you accept?</summary>
                <p>We accept most major insurance providers. Please contact our billing office to confirm your plan.</p>
            </details>
            <details class="faq-item">
                <summary>How do I book an appointment online?</summary>
                <p>Visit our Appointments page, select a department and doctor, then choose your preferred date and time.</p>
            </details>
        </div>
    </div>
</section>

<section class="emergency-banner">
    <div class="container emergency-banner__inner">
        <h2>Medical Emergency?</h2>
        <p>Call our emergency line immediately for urgent care.</p>
        <a href="tel:+201234567890" class="btn btn-danger">Call Now: +20 123 456 7890</a>
    </div>
</section>

<?php include '../includes/footer.php'; ?>