<main>

   
    <aside class="sidebar" data-sidebar>

      <div class="sidebar-info">

        <figure class="avatar-box">
          <img src="../assets/images/photo_2025-05-26_08-43-51.jpg" alt="Richard hanrick" width="80">
        </figure>

        <div class="info-content">
          <h1 class="name" title="Richard hanrick">Nhean Panha</h1>

          <p class="title">
            <span id="role-slider">Software Developer</span>
          </p>
        </div>

        <button class="info_more-btn" data-sidebar-btn>
          <span>Show Contacts</span>

          <ion-icon name="chevron-down"></ion-icon>
        </button>

      </div>

      <div class="sidebar-info_more">

        <div class="separator"></div>

        <ul class="contacts-list">

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="mail-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Email</p>

              <a href="mailto:richard@example.com" class="contact-link">nheanpanha12629@gmail.com</a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="phone-portrait-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Phone</p>

              <a href="tel:+12133522795" class="contact-link">+(855) 978 211 204</a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="calendar-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Birthday</p>

              <time datetime="1982-06-23">November 02, 2004</time>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="location-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Location</p>

              <address>Tekleum 11, 10100 Phnom Penh, Cambodia</address>
            </div>

          </li>

        </ul>

        <div class="separator"></div>

        <ul class="social-list">

          <li class="social-item">
            <a href="https://www.facebook.com/share/16s6v1t3U3/?mibextid=wwXIfr" class="social-link" target="_blank" rel="noopener" style="display: flex; align-items: center; justify-content: center; background: #1877F3; border-radius: 50%; width: 36px; height: 36px; margin-right: 8px; transition: box-shadow 0.2s; box-shadow: 0 2px 8px rgba(24,119,243,0.10);">
              <ion-icon name="logo-facebook" style="color: #fff; font-size: 22px;"></ion-icon>
            </a>
          </li>

          <li class="social-item">
            <a href="https://www.linkedin.com/in/nhean-panha-11420b345/" class="social-link" target="_blank" rel="noopener" style="display: flex; align-items: center; justify-content: center; background: #0077B5; border-radius: 50%; width: 36px; height: 36px; margin-right: 8px; transition: box-shadow 0.2s; box-shadow: 0 2px 8px rgba(0,119,181,0.10);">
              <ion-icon name="logo-linkedin" style="color: #fff; font-size: 22px;"></ion-icon>
            </a>
          </li>

          <li class="social-item">
            <a href="https://t.me/Nhean_PanhaA" class="social-link" target="_blank" rel="noopener" style="display: flex; align-items: center; justify-content: center; background: #229ED9; border-radius: 50%; width: 36px; height: 36px; transition: box-shadow 0.2s; box-shadow: 0 2px 8px rgba(34,158,217,0.10);">
              <img src="../../assets/images/telegram.jpg" alt="Telegram" style="width: 22px; height: 22px; display: block;" />
            </a>
          </li>

        </ul>

      </div>

    </aside>





    

    <div class="main-content">

      <!--
        - #NAVBAR
      -->

      <?php
$currentPage = basename($_SERVER['REQUEST_URI']);
?>

<nav class="navbar">

  <ul class="navbar-list">

    <li class="navbar-item">
      <a href="/" class="navbar-link <?php echo $currentPage == '' ? 'active' : ''; ?>" data-nav-link>About</a>
    </li>

    <li class="navbar-item">
      <a href="/resume" class="navbar-link <?php echo $currentPage == 'resume' ? 'active' : ''; ?>" data-nav-link>Resume</a>
    </li>

    <li class="navbar-item">
      <a href="/project" class="navbar-link <?php echo $currentPage == 'project' ? 'active' : ''; ?>" data-nav-link>Projects</a>
    </li>

    <li class="navbar-item">
      <a href="/contact" class="navbar-link <?php echo $currentPage == 'contact' ? 'active' : ''; ?>" data-nav-link>Contact</a>
    </li>

  </ul>

</nav>

<script>
// Simple role slider for sidebar title
const roles = ["Software Developer", "Frontend Developer", "Backend Developer", "UX & UI", "QA Tester"];
let roleIndex = 0;
setInterval(() => {
  roleIndex = (roleIndex + 1) % roles.length;
  document.getElementById("role-slider").textContent = roles[roleIndex];
}, 2000);
</script>


