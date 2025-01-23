<!--navbar-->
<section id="topbar">
    <!--topbar-->
    <nav>
        <form action="#">
        </form>
        <li class="nav-item">
            <button id="darkModeToggle" class="btn btn-link">
                <i class="fas fa-moon"></i> <!-- Initial Icon will be moon, will update with javascript-->
            </button>
        </li>
        <div class="profile">
            <img src="./assets/image/profile.png" alt="">
            <ul class="profile-link">
                <li><a href="admin_profile.php"><i class='bx bxs-user-circle icon'></i>Profile</a></li>
                <li><a href="admin_settings.php"><i class='bx bx-cog icon'></i>Settings</a></li>
                <li><a href="/logout.php"><i class='bx bx-log-out icon'></i>Logout</a></li>
            </ul>
        </div>
    </nav>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const darkModeToggle = document.getElementById('darkModeToggle');
        const body = document.body;
        const darkModeIcon = darkModeToggle.querySelector('i');

        const storedTheme = localStorage.getItem('theme');
            if (storedTheme) {
                body.classList.toggle('dark-theme-variables', storedTheme === 'dark');
                darkModeIcon.classList.toggle('fa-sun', storedTheme === 'dark');
                 darkModeIcon.classList.toggle('fa-moon', storedTheme !== 'dark');
            }
        darkModeToggle.addEventListener('click', function() {
            body.classList.toggle('dark-theme-variables');
            const isDarkMode = body.classList.contains('dark-theme-variables');
             darkModeIcon.classList.toggle('fa-sun', isDarkMode);
                darkModeIcon.classList.toggle('fa-moon', !isDarkMode);
           localStorage.setItem('theme', isDarkMode ? 'dark' : 'light');
         });
           const profileButton = document.querySelector('#topbar .profile'); 
           const profileDropdown = document.querySelector('#topbar .profile .profile-link');
           profileButton.addEventListener('click', function() {
               profileDropdown.classList.toggle('show');
          })
         
        document.addEventListener('click', function(event) {
          if (!profileButton.contains(event.target)) {
              profileDropdown.classList.remove('show');
           }
        });

    });
</script>
    <!--end topbar-->

    <!--end main-->
    <!--</section>-->

    <!--end navbar-->