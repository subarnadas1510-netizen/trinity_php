<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Trinity Hospital</title>

  <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">

  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f9ff;
      color: #263238;
    }

    .navbar-hospital {
      background-color: #1565c0;
    }

    .hero {
      background: linear-gradient(
        rgba(30,136,229,0.85),
        rgba(30,136,229,0.85)
      );
      color: #ffffff;
      padding: 110px 0;
    }

    .hero h1 {
      font-size: 46px;
      font-weight: bold;
    }

    .section-title {
      color: #1565c0;
      font-weight: bold;
      margin-bottom: 40px;
    }

    .service-box {
      background: #ffffff;
      padding: 30px;
      border-radius: 8px;
      border-top: 4px solid #1e88e5;
      box-shadow: 0 4px 12px rgba(0,0,0,0.08);
      transition: transform 0.3s;
      height: 100%;
    }

    .service-box:hover {
      transform: translateY(-6px);
    }

    .why-section {
      background-color: #ffffff;
      padding: 70px 0;
    }

    .why-title {
      color: #1565c0;
      font-weight: bold;
      margin-bottom: 20px;
    }

    .stats-box {
      padding: 25px;
      background: #f4f9ff;
      border-radius: 8px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.05);
      margin-bottom: 30px;
      transition: 0.3s;
    }

    .stats-box:hover {
      transform: translateY(-5px);
    }

    .stats-number {
      font-size: 28px;
      font-weight: bold;
      color: #1e88e5;
    }

    .cta {
      background-color: #1e88e5;
      color: #ffffff;
      padding: 55px 0;
      text-align: center;
    }

    footer {
      background-color: #0d47a1;
      color: #ffffff;
      padding: 20px 0;
    }

    .admin-btn {
      background-color: #28a745;
      color: #ffffff;
      padding: 10px 22px;
      border-radius: 6px;
      font-weight: bold;
      transition: 0.3s;
    }

    .admin-btn:hover {
      background-color: #218838;
      color: #ffffff;
      text-decoration: none;
    }
  </style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-hospital px-4">
  <a class="navbar-brand" href="#">
    <svg width="90" height="90" viewBox="0 0 120 120">
      <circle cx="60" cy="60" r="56" fill="#ffffff" stroke="#1e88e5" stroke-width="4"/>
      <rect x="54" y="40" width="12" height="40" rx="3" fill="#1e88e5"/>
      <rect x="40" y="54" width="40" height="12" rx="3" fill="#1e88e5"/>
      <text x="60" y="108" text-anchor="middle"
            font-size="12" font-weight="bold"
            fill="#1565c0">
        TRINITY
      </text>
    </svg>
  </a>

  <div class="ml-auto">
    <a href="admin_login.php" class="admin-btn">
      Admin Panel
    </a>
  </div>
</nav>

<!-- BOOK APPOINTMENT -->
<section class="hero">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <h1>Consult Our Trusted Surgeons, Book an Appointment</h1>
        <p class="lead mt-3">
          The best of modern healthcare to ensure you stay healthy, always.
        </p>
        <a href="entry_form1.php" class="btn btn-light btn-lg mt-4">
          Book Appointment
        </a>
      </div>

      <div class="col-md-6 text-center">
        <img src="https://cdn.apollohospitals.com/campaign/chennai/images/hero-right.webp"
             class="img-fluid" style="max-height:420px;">
      </div>
    </div>
  </div>
</section>

<!-- DEPARTMENTS -->
<section class="py-5">
  <div class="container">
    <h2 class="text-center section-title">Our Departments</h2>

    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="service-box text-center">
          <h4>Cardiology</h4>
          <p>Advanced cardiac care and diagnostics.</p>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="service-box text-center">
          <h4>Neurology</h4>
          <p>Specialized treatment for brain and nervous disorders.</p>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="service-box text-center">
          <h4>Orthopedics</h4>
          <p>Expert bone and joint treatment solutions.</p>
        </div>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-md-4 mb-4">
        <div class="service-box text-center">
          <h4>Pediatrics</h4>
          <p>Comprehensive child healthcare services.</p>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="service-box text-center">
          <h4>General Medicine</h4>
          <p>Complete care for everyday medical needs.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- WHY CHOOSE TRINITY -->
<section class="why-section">
  <div class="container text-center">
    <h2 class="why-title">Why Choose Trinity Healthcare?</h2>
    <p class="mb-5">
      Established in 2022, Trinity Healthcare has a strong presence across the healthcare ecosystem.
      From routine wellness & preventive healthcare to innovative life-saving treatments and
      diagnostic services, Trinity Hospitals has touched more than 200 million lives
      from over 120 countries.
    </p>

    <div class="row">
      <div class="col-md-4 col-sm-6">
        <div class="stats-box">
          <div class="stats-number">73+</div>
          <p>Largest private healthcare network of Hospitals</p>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="stats-box">
          <div class="stats-number">400+</div>
          <p>Largest private network of clinics across India</p>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="stats-box">
          <div class="stats-number">1000+</div>
          <p>Diagnostic centres across India</p>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="stats-box">
          <div class="stats-number">5000+</div>
          <p>Pharmacies</p>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="stats-box">
          <div class="stats-number">10000+</div>
          <p>Pin codes served across India</p>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="stats-box">
          <div class="stats-number">11000+</div>
          <p>Doctors</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- GET APPOINTMENT -->
<section class="cta">
  <div class="container">
    <h2>Need Immediate Medical Assistance?</h2>
    <p>Call our emergency line or book an appointment online.</p>
    <a href="entry_form1.php" class="btn btn-light btn-lg">
      Get Appointment
    </a>
  </div>
</section>

<!-- FOOTER -->
<footer>
  <div class="container text-center">
    <p>© Copyright 2026. Trinity Hospitals Group. All Rights Reserved.</p>
  </div>
</footer>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"></script>

</body>
</html>
