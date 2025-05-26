<style>
  
</style>
<main>

   
    <aside class="sidebar" data-sidebar>

      <div class="sidebar-info">

        <figure class="avatar-box">
          <img src="../assets/images/photo_2025-05-26_08-43-51.jpg" alt="Richard hanrick" width="80">
        </figure>

        <div class="info-content">
          <h1 class="name" title="Richard hanrick">Nhean Panha</h1>

          <p class="title">Web developer</p>
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
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li class="social-item">
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li class="social-item">
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

        </ul>

      </div>

    </aside>





    

    <div class="main-content">

      <!--
        - #NAVBAR
      -->

      <nav class="navbar">
  <ul class="navbar-list">
    <li class="navbar-item"><a href="/"><button class="navbar-link" data-nav-link>About</button></a></li>
    <li class="navbar-item"><a href="/resume"><button class="navbar-link" data-nav-link>Resume</button></a></li>
    <li class="navbar-item"><a href="/project"><button class="navbar-link" data-nav-link>Projects</button></a></li>
    <li class="navbar-item"><a href="/contact"><button class="navbar-link" data-nav-link>Contact</button></a></li>
  </ul>
</nav>
<script>
  const currentPath = window.location.pathname;
  const navLinks = document.querySelectorAll('.navbar-link');

  navLinks.forEach(link => {
    const href = link.closest('a').getAttribute('href');

    if (currentPath === href || (currentPath === '/' && href === '/')) {
      link.classList.add('active');
    } else {
      link.classList.remove('active');
    }
  });
</script>

<style>
  .navbar-link {
  background: none;
  border: none;
  color: #444;
  font-weight: 500;
  cursor: pointer;
  padding: 10px 20px;
  transition: color 0.3s ease;
}

.navbar-link:hover {
  color:rgb(229, 156, 11);
}

.navbar-link.active {
color:rgb(229, 156, 11);  font-weight: bold;
  border-bottom: 2px solid orange;
}

</style>



 