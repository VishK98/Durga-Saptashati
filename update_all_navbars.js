// Node.js script to update navbar in all HTML files
const fs = require("fs");
const path = require("path");

// New navbar HTML structure
const newNavbarHTML = `        <!-- Nav Bar Start -->
        <nav class="navbar navbar-expand-lg navbar-modern p-lg-2">
            <div class="container-fluid">
                <a href="index.html" class="navbar-brand">
                    <img src="https://www.saptashati.org/images/logo-wide.png" alt="Durga Saptashati Foundation">
                </a>
                
                <!-- Modern Hamburger Menu -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <!-- Mobile Menu Header -->
                    <div class="mobile-menu-header d-lg-none">
                        <img src="https://www.saptashati.org/images/logo-wide.png" alt="Durga Saptashati Foundation" class="mobile-menu-logo">
                    </div>
                    <!-- Mobile Close Button -->
                    <button class="mobile-close d-lg-none" onclick="closeMobileMenu()">
                        <i class="fas fa-times"></i>
                    </button>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="index.html" class="nav-link">
                                <i class="fas fa-home nav-icon"></i> Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="about.html" class="nav-link">
                                <i class="fas fa-users nav-icon"></i> About
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="event.html" class="nav-link">
                                <i class="fas fa-calendar-alt nav-icon"></i> Events
                            </a>
                        </li>
                        
                        <!-- Our Causes Dropdown -->
                        <li class="nav-item dropdown mega-dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="causeDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-hands-helping nav-icon"></i> Our Causes
                            </a>
                            <div class="dropdown-menu mega-dropdown-menu" aria-labelledby="causeDropdown">
                                <div class="mega-dropdown-content">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <h6 class="dropdown-header">Empowerment Programs</h6>
                                            <a class="dropdown-item" href="#">
                                                <i class="fas fa-venus"></i> Women's Empowerment
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <i class="fas fa-graduation-cap"></i> Education for Every Kids
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <i class="fas fa-briefcase"></i> Livelihood
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <i class="fas fa-utensils"></i> No People Hungry
                                            </a>
                                        </div>
                                        <div class="col-lg-6">
                                            <h6 class="dropdown-header">Special Events</h6>
                                            <a class="dropdown-item" href="#">
                                                <i class="fas fa-om"></i> Yoga Day
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <i class="fas fa-female"></i> International Women's Day
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <i class="fas fa-palette"></i> Painting Competition
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <i class="fas fa-theater-masks"></i> Cultural Programme
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-chart-line nav-icon"></i> Investor
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-images nav-icon"></i> Gallery
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="blog.html" class="nav-link">
                                <i class="fas fa-blog nav-icon"></i> Blog
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="contact.html" class="nav-link">
                                <i class="fas fa-envelope nav-icon"></i> Contact Us
                            </a>
                        </li>
                        
                        <!-- Join Us Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="joinDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-hand-holding-heart nav-icon"></i> Join Us
                            </a>
                            <div class="dropdown-menu dropdown-menu-right join-dropdown" aria-labelledby="joinDropdown">
                                <a class="dropdown-item" href="volunteer.html">
                                    <i class="fas fa-user-plus"></i>
                                    <div>
                                        <strong>Volunteer Application</strong>
                                        <small>Join our team of volunteers</small>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-id-card"></i>
                                    <div>
                                        <strong>Membership Form</strong>
                                        <small>Become a member</small>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="donate.html">
                                    <i class="fas fa-donate"></i>
                                    <div>
                                        <strong>Donation Form</strong>
                                        <small>Support our cause</small>
                                    </div>
                                </a>
                            </div>
                        </li>
                    </ul>
                    
                    <!-- CTA Button -->
                    <a href="donate.html" class="btn rally-btn ml-3">
                        <span class="btn-text">Make a Difference</span>
                        <span class="btn-icon"><i class="fas fa-heart"></i></span>
                    </a>
                </div>
            </div>
        </nav>
        <!-- Nav Bar End -->`;

// List of HTML files to update (excluding index.html which is already done)
const filesToUpdate = [
  "about.html",
  "blog.html",
  "causes.html",
  "contact.html",
  "donate.html",
  "event.html",
  "service.html",
  "single.html",
  "team.html",
  "volunteer.html",
];

// Function to update navbar in a file
function updateNavbar(fileName, currentPage) {
  const filePath = path.join(__dirname, fileName);

  try {
    // Read the file
    let content = fs.readFileSync(filePath, "utf8");

    // Update navbar - find and replace the navbar section
    const navbarStartPattern = /<!-- Nav Bar Start -->/;
    const navbarEndPattern = /<!-- Nav Bar End -->/;

    const startIndex = content.search(navbarStartPattern);
    const endIndex = content.search(navbarEndPattern);

    if (startIndex !== -1 && endIndex !== -1) {
      // Get content before and after navbar
      const beforeNavbar = content.substring(0, startIndex);
      const afterNavbar = content.substring(
        endIndex + "<!-- Nav Bar End -->".length
      );

      // Update the active link based on current page
      let updatedNavbar = newNavbarHTML;

      // Remove active class from all links
      updatedNavbar = updatedNavbar.replace(
        /class="nav-link active"/g,
        'class="nav-link"'
      );

      // Add active class to current page
      const pageMap = {
        "about.html": "About",
        "blog.html": "Blog",
        "causes.html": "Our Causes",
        "contact.html": "Contact Us",
        "donate.html": "Join Us",
        "event.html": "Events",
        "service.html": "Our Causes",
        "single.html": "Blog",
        "team.html": "About",
        "volunteer.html": "Join Us",
      };

      const activeItem = pageMap[fileName];
      if (activeItem) {
        const linkPattern = new RegExp(
          `(<a href="${fileName.replace(
            "causes.html",
            "#"
          )}"[^>]*class="nav-link)(")`
        );
        updatedNavbar = updatedNavbar.replace(linkPattern, "$1 active$2");
      }

      // Combine everything
      content = beforeNavbar + updatedNavbar + afterNavbar;

      // Add CSS links if not present
      if (!content.includes("navbar-modern.css")) {
        content = content.replace(
          '<link href="css/style.css" rel="stylesheet">',
          '<link href="css/style.css" rel="stylesheet">\n        <link href="css/navbar-modern.css" rel="stylesheet">'
        );
      }

      if (!content.includes("full-width-fixes.css")) {
        content = content.replace(
          '<link href="css/navbar-modern.css" rel="stylesheet">',
          '<link href="css/navbar-modern.css" rel="stylesheet">\n        <link href="css/full-width-fixes.css" rel="stylesheet">'
        );
      }

      if (!content.includes("mobile-fix.css")) {
        content = content.replace(
          '<link href="css/full-width-fixes.css" rel="stylesheet">',
          '<link href="css/full-width-fixes.css" rel="stylesheet">\n        <link href="css/mobile-fix.css" rel="stylesheet">'
        );
      }

      // Add JS file if not present
      if (!content.includes("navbar-modern.js")) {
        content = content.replace(
          '<script src="js/main.js"></script>',
          '<script src="js/main.js"></script>\n        <script src="js/navbar-modern.js"></script>'
        );
      }

      // Write the updated content back
      fs.writeFileSync(filePath, content, "utf8");
      console.log(`✓ Updated ${fileName}`);
    } else {
      console.log(`✗ Could not find navbar markers in ${fileName}`);
    }
  } catch (error) {
    console.error(`✗ Error updating ${fileName}:`, error.message);
  }
}

// Update all files
console.log("Updating navbar in all HTML files...\n");
filesToUpdate.forEach((file) => {
  updateNavbar(file, file);
});
console.log("\nNavbar update complete!");
