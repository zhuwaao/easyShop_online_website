<style>
    

/*---------------------------------------
  CUSTOM PROPERTIES ( VARIABLES )             
-----------------------------------------*/
:root {
  --white-color:                  azure;
  --primary-color:                #5d52ba;
  --secondary-color:              #0dcaf0;
  --section-bg-color:             #f0f8ff;
  --custom-btn-bg-color:          #f65129;
  --social-icon-link-bg-color:    #7f73eb;
  --dark-color:                   #000000;
  --p-color:                      #717275;
  --border-color:                 #e9eaeb;

  --body-font-family:             'League Spartan', sans-serif;

  --h1-font-size:                 62px;
  --h2-font-size:                 48px;
  --h3-font-size:                 36px;
  --h4-font-size:                 32px;
  --h5-font-size:                 24px;
  --h6-font-size:                 22px;
  --p-font-size:                  20px;
  --btn-font-size:                16px;
  --copyright-font-size:          14px;

  --border-radius-large:          100px;
  --border-radius-medium:         30px;
  --border-radius-small:          50px;

  --font-weight-thin:             100;
  --font-weight-light:            300;
  --font-weight-normal:           400;
  --font-weight-semibold:         600;
  --font-weight-bold:             700;
}

body {
  background-color: var(--white-color);
  font-family: var(--body-font-family); 
  
}


/*---------------------------------------
  TYPOGRAPHY               
-----------------------------------------*/
h1,
h2,
h3,
h4,
h5,
h6 {
  color: var(--dark-color);
  font-weight: var(--font-weight-semibold);
  letter-spacing: -0.5px;
}

h1,
h2 {
  letter-spacing: -1.5px;
}

h1 {
  font-size: var(--h1-font-size);
  line-height: normal;
  font-weight: var(--font-weight-bold);
}

h2 {
  font-size: var(--h2-font-size);
}

h3 {
  font-size: var(--h3-font-size);
}

h4 {
  font-size: var(--h4-font-size);
}

h5 {
  font-size: var(--h5-font-size);
}

h6 {
  font-size: var(--h6-font-size);
}

p {
  color: var(--p-color);
  font-size: var(--p-font-size);
  font-weight: var(--font-weight-light);
}

ul li {
  color: var(--p-color);
  font-size: var(--p-font-size);
  font-weight: var(--font-weight-light);
}

a, 
button {
  touch-action: manipulation;
  transition: all 0.3s;
}

a {
  color: var(--primary-color);
  text-decoration: none;
}

a:hover {
  color: var(--custom-btn-bg-color);
}

b,
strong {
  font-weight: var(--font-weight-bold);
}


/*---------------------------------------
  SECTION               
-----------------------------------------*/
.section-padding {
  padding-top: 100px;
  padding-bottom: 100px;
}

.section-bg {
  background: var(--section-bg-color);
}

.section-overlay {
  background: rgba(0, 0, 0, 0.85);
  background-color: rgba(0, 128, 0, 0.6);
  opacity: 0.85;
  position: absolute;
  top: 0;
  left: 0;
  pointer-events: none;
  width: 100%;
  height: 100%;
}

.section-overlay + .container {
  position: relative;
}

.back-top-icon {
  background: var(--secondary-color);
  width: 65px;
  color: var(--white-color);
  font-size: var(--h4-font-size);
  position: absolute;
  top: 0;
  bottom: 0;
  right: 0;
  transition: all 0.5s;
}

.back-top-icon:hover {
  background: var(--custom-btn-bg-color);
  color: var(--white-color);
}

.custom-block {
  background: var(--primary-color);
  border-top: 20px solid var(--secondary-color);
  border-radius: var(--border-radius-medium);
  position: relative;
  overflow: hidden;
  padding: 30px 50px;
}

.custom-icon {
  color: var(--primary-color);
}

.instagram-block {
  position: relative;
  height: 100%;
}

.instagram-block-text {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

nav[aria-label="breadcrumb"] {
  background: var(--white-color);
  border-radius: var(--border-radius-large);
  display: inline-block;
  padding: 7px 16px 3px 16px;
}

.breadcrumb {
  margin-bottom: 0;
}


/*---------------------------------------
  PAGINATION               
-----------------------------------------*/
.pagination {
  margin-top: 30px;
  margin-bottom: 0;
}

.page-link {
  border-color: var(--border-color);
  border-radius: var(--border-radius-large);
  color: var(--p-color);
  font-size: var(--copyright-font-size);
  padding: 0;
  width: 45px;
  height: 45px;
  line-height: 45px;
  text-align: center;
  margin-right: 10px;
  margin-left: 10px;
}

.page-item.active .page-link,
.page-link:hover {
  background: var(--secondary-color);
  border-color: transparent;
  color: var(--white-color);
}

.page-item:first-child .page-link,
.page-item:last-child .page-link {
  border: 0;
  border-radius: var(--border-radius-large);
}

.page-item:not(:first-child) .page-link {
  margin-left: 5px;
}


/*---------------------------------------
  CUSTOM FORM               
-----------------------------------------*/
.custom-form .input-group {
  background-color: var(--white-color);
  border-radius: var(--border-radius-medium);
  margin-bottom: 24px;
  position: relative;
  overflow: hidden;
  padding-left: 10px;
}

.input-group-text {
  background: transparent;
  border: 0;
  padding-right: 0;
}

.custom-form label {
  margin-bottom: 5px;
}

.custom-form .form-control {
  background-color: var(--white-color);
  border: 2px solid transparent;
  border-radius: var(--border-radius-medium);
  box-shadow: none;
  color: var(--p-color);
  padding-top: 12px;
  padding-bottom: 12px;
  outline: none;
}

.custom-form button[type="submit"] {
  background: var(--primary-color);
  border: none;
  color: var(--white-color);
  font-size: var(--p-font-size);
  font-weight: var(--font-weight-normal);
  transition: all 0.3s;
  margin-bottom: 24px;
}

.custom-form button[type="submit"]:hover,
.custom-form button[type="submit"]:focus {
  background: var(--secondary-color);
  border-color: transparent;
}


/*---------------------------------------
  CUSTOM TEXT BLOCK               
-----------------------------------------*/
.custom-text-block {
  background: var(--primary-color);
  padding: 80px 60px;
  height: 100%;
}

.counter-thumb {
  margin: 20px;
  margin-bottom: 0;
}

.counter-number,
.counter-text {
  color: var(--secondary-color);
  display: block;
}

.counter-number,
.counter-number-text {
  color: var(--dark-color);
  font-size: var(--h1-font-size);
  line-height: normal;
}

.custom-text-block .counter-number,
.custom-text-block .counter-number-text {
  color: var(--white-color);
}


/*---------------------------------------
  CUSTOM LINK               
-----------------------------------------*/
.custom-link {
  color: var(--p-color);
  position: relative;
  overflow: hidden;
  z-index: 1;
  display: inline-block;
  vertical-align: middle;
  transition: all .3s cubic-bezier(.645,.045,.355,1);
  padding-bottom: 2px;
}

.custom-link::after {
  content: "";
  width: 0;
  height: 2px;
  bottom: 0;
  position: absolute;
  left: auto;
  right: 0;
  z-index: -1;
  transition: width .6s cubic-bezier(.25,.8,.25,1) 0s;
  background: currentColor;
}

.custom-link:hover::after {
  width: 100%;
  left: 0;
  right: auto;
}

.custom-link:hover {
  color: var(--primary-color);
}

.custom-link:hover::after {
  background: var(--custom-btn-bg-color);
}


/*---------------------------------------
  CUSTOM BUTTON               
-----------------------------------------*/
.custom-btn {
  background-color: rgba(0, 128, 0, 0.6);
  border: 2px solid transparent;
  border-radius: var(--border-radius-large);
  color: var(--white-color);
  font-size: var(--btn-font-size);
  font-weight: var(--font-weight-normal);
  line-height: normal;
  padding: 15px 20px;
}

.custom-btn:hover,
.navbar-expand-lg .navbar-nav .nav-link.custom-btn:hover {
  background-color: green;
  color: var(--white-color);
}

.custom-border-btn-wrap .custom-border-btn {
  border-color: green;
  color: var(--white-color);
}

.custom-border-btn-wrap .custom-border-btn:hover,
.cta-section .custom-border-btn:hover {
  background: var(--white-color);
  color: var(--custom-btn-bg-color);
}

.custom-border-btn-wrap .custom-link {
  color: var(--white-color);
}

.custom-border-btn-wrap .custom-link:hover::after {
  background: var(--white-color);
}

.custom-border-btn {
  background: transparent;
  border: 2px solid var(--border-color);
  color: var(--custom-btn-bg-color);
}

.custom-border-btn:hover {
  background: var(--custom-btn-bg-color);
  border-color: transparent;
  color: var(--white-color);
}

.navbar-expand-lg .navbar-nav .nav-link.custom-btn {
  padding: 12px 22px;
  color: var(--white-color);
}


/*---------------------------------------
  NAVIGATION              
-----------------------------------------*/
.navbar {
  background: var(--white-color);
  padding-top: 15px;
  padding-bottom: 15px;
}


.logo-text {
  color: dodgerblue;
  font-size: var(--h4-font-size);
  display: block;
  line-height: normal;
}

.logo-slogan {
  color: dodgerblue;
  font-size: 12px;
  font-weight: var(--font-weight-bold);
  text-transform: uppercase;
}

.navbar-brand,
.navbar-brand:hover {
  color: var(--primary-color);
}

.navbar-expand-lg .navbar-nav .nav-link {
  margin-right: 0;
  margin-left: 0;
  padding: 20px;
}

.navbar-expand-lg .navbar-nav {
  width: 100%;
}

.navbar-nav .nav-link {
  display: inline-block;
  color: var(--p-bg-color);
  font-size: var(--menu-font-size);
  font-weight: var(--font-weight-medium);
  position: relative;
  padding-top: 15px;
  padding-bottom: 15px;
}

.navbar-nav .nav-link.active,
.navbar-nav .nav-link:hover {
  color: green;
}

.dropdown-menu {
  background: var(--white-color);
  box-shadow: 0 1rem 3rem rgba(0,0,0,.175);
  border: 0;
  padding: 0;
  margin-top: 20px;
}

.dropdown-item {
  display: inline-block;
  color: var(--p-bg-color);
  font-size: var(--menu-font-size);
  font-weight: var(--font-weight-medium);
  border-bottom: 1px solid var(--border-color);
  position: relative;
  padding-top: 10px;
  padding-bottom: 10px;
}

.dropdown-menu li:last-child .dropdown-item {
  border-bottom: 0;
}

.dropdown-item.active, 
.dropdown-item:active,
.dropdown-item:focus, 
.dropdown-item:hover {
  background: transparent;
  color: green;
}

.dropdown-toggle::after {
  content: "\f282";
  display: inline-block;
  font-family: bootstrap-icons !important;
  font-size: var(--copyright-font-size);
  font-style: normal;
  font-weight: normal !important;
  font-variant: normal;
  text-transform: none;
  line-height: 1;
  vertical-align: -.125em;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  position: relative;
  left: 2px;
  border: 0;
}

@media screen and (min-width: 992px) {
  .dropdown:hover .dropdown-menu {
    display: block;
    margin-top: 0;
  }
}

.navbar-toggler {
  border: 0;
  padding: 0;
  cursor: pointer;
  margin: 0;
  width: 30px;
  height: 35px;
  outline: none;
}

.navbar-toggler:focus {
  outline: none;
  box-shadow: none;
}

.navbar-toggler[aria-expanded="true"] .navbar-toggler-icon {
  background: transparent;
}

.navbar-toggler[aria-expanded="true"] .navbar-toggler-icon:before,
.navbar-toggler[aria-expanded="true"] .navbar-toggler-icon:after {
  transition: top 300ms 50ms ease, -webkit-transform 300ms 350ms ease;
  transition: top 300ms 50ms ease, transform 300ms 350ms ease;
  transition: top 300ms 50ms ease, transform 300ms 350ms ease, -webkit-transform 300ms 350ms ease;
  top: 0;
}

.navbar-toggler[aria-expanded="true"] .navbar-toggler-icon:before {
  transform: rotate(45deg);
}

.navbar-toggler[aria-expanded="true"] .navbar-toggler-icon:after {
  transform: rotate(-45deg);
}

.navbar-toggler .navbar-toggler-icon {
  background: var(--dark-color);
  transition: background 10ms 300ms ease;
  display: block;
  width: 30px;
  height: 2px;
  position: relative;
}

.navbar-toggler .navbar-toggler-icon:before,
.navbar-toggler .navbar-toggler-icon:after {
  transition: top 300ms 350ms ease, -webkit-transform 300ms 50ms ease;
  transition: top 300ms 350ms ease, transform 300ms 50ms ease;
  transition: top 300ms 350ms ease, transform 300ms 50ms ease, -webkit-transform 300ms 50ms ease;
  position: absolute;
  right: 0;
  left: 0;
  background: var(--dark-color);
  width: 30px;
  height: 2px;
  content: '';
}

.navbar-toggler .navbar-toggler-icon::before {
  top: -8px;
}

.navbar-toggler .navbar-toggler-icon::after {
  top: 8px;
}


/*---------------------------------------
  SITE HEADER              
-----------------------------------------*/
.site-header {
  background-image: url('../images/site-header/close-up-young-business-team-working.jpg');
  background-repeat: no-repeat;
  background-position: bottom;
  background-size: cover;
  position: relative;
  padding-top: 150px;
  padding-bottom: 150px;
}

.site-header .section-overlay {
  background: var(--primary-color);
}


/*---------------------------------------
  HERO              
-----------------------------------------*/
.hero-section {
  background-image: url('../logo/logo4.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  background-position: top;
  position: relative;
  padding-top: 150px;
  padding-bottom: 150px;
}

.hero-section .section-overlay {
  background-color: rgba(30, 144, 255, 0.5);
}

.hero-section .custom-border-btn {
  border-color: var(--secondary-color);
  color: var(--secondary-color);
}

.hero-section .custom-border-btn:hover {
  background: var(--secondary-color);
  color: var(--white-color);
}

.hero-form {
  background: var(--social-icon-link-bg-color);
  border-radius: var(--border-radius-small);
  padding: 40px;
}

.hero-form .form-control {
  padding-bottom: 10px;
}

.hero-form button[type="submit"] {
  padding-top: 10px;
  padding-bottom: 8px;
}

.hero-form .input-group-text i {
  position: relative;
  top: 2px;
}

.hero-section .badge {
  background: transparent;
  color: var(--white-color);
}

.hero-section .badge:hover {
  background: var(--white-color);
  color: var(--primary-color);
}

.badge {
  background: var(--section-bg-color);
  border: 1px solid var(--white-color);
  border-radius: var(--border-radius-medium);
  color: var(--primary-color);
  font-weight: var(--font-weight-normal);
  line-height: normal;
  margin-right: 5px;
  margin-left: 5px;
  padding: 8px 12px;
  padding-bottom: 6px;
}

.badge-level {
  background: var(--primary-color);
  color: var(--white-color);
}

.badge:hover {
  background: var(--custom-btn-bg-color);
  color: var(--white-color);
}


/*---------------------------------------
  ABOUT              
-----------------------------------------*/
.about-page .about-section {
  padding-top: 100px;
  padding-bottom: 0;
}
.about-section{
  padding-top: 100px;
}

.about-section .custom-text-block {
  background: var(--secondary-color);
  
}

.about-image-wrap,
.video-thumb {
  position: relative;
  overflow: hidden;
  height: 100%;
}

.about-info {
  background: var(--primary-color);
  border-radius: var(--border-radius-medium);
  border-top: 30px solid var(--secondary-color);
  position: absolute;
  bottom: 0;
  right: 0;
  margin: 20px;
  padding: 20px;
}

.about-info-text h4 {
  font-weight: var(--font-weight-normal);
}

.about-image-border-radius {
  border-radius: var(--border-radius-medium);
}

.about-image {
  display: block;
  object-fit: cover;
  height: 100%;
  
}

.dim-image {
  
  transition: filter 0.3s ease; /* Smooth transition effect */
}

.dim-image:hover {
  filter: brightness(50%); /* Adjust the brightness value to control the dimming effect */
}


.custom-border-radius-start {
  border-radius: var(--border-radius-medium) 0 0 var(--border-radius-medium);
}

.custom-border-radius-end {
  border-radius: 0 var(--border-radius-medium) var(--border-radius-medium) 0;
}

.video-info {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.youtube-icon {
  background: var(--custom-btn-bg-color);
  font-size: var(--h2-font-size);
  color: var(--white-color);
  border-radius: var(--border-radius-large);
  width: 90px;
  height: 90px;
  line-height: 110px;
  text-align: center;
  display: block;
  animation: pulse-animation 2s infinite;
  transition: all 0.5s;
}

.youtube-icon:hover {
  color: var(--white-color);
}

@keyframes pulse-animation {
  0% {
    box-shadow: 0 0 0 0px rgba(0, 0, 0, 0.2);
  }
  100% {
    box-shadow: 0 0 0 20px rgba(0, 0, 0, 0);
  }
}


/*---------------------------------------
  SERVICES              
-----------------------------------------*/
.services-block {
  border-top: 25px solid transparent;
  border-radius: var(--border-radius-medium);
  text-align: center;
  position: relative;
  overflow: hidden;
  transition: all 0.5s;
  padding: 40px;
}

.services-block:hover,
.services-section .services-block-wrap:nth-of-type(odd) .services-block {
  background: var(--section-bg-color);
  border-top-color: var(--secondary-color);
}

.services-block-icon {
  background: var(--white-color);
  box-shadow: 0 1rem 3rem rgba(0,0,0,.175);
  border-radius: var(--border-radius-large);
  display: block;
  color: var(--secondary-color);
  font-size: var(--h2-font-size);
  line-height: normal;
  width: 120px;
  height: 120px;
  line-height: 135px;
  margin: auto;
  margin-bottom: 24px;
  text-align: center;
  position: relative;
  transition: all 0.5s;
}

.services-block-body p {
  margin-bottom: 0;
}


/*---------------------------------------
  CATEGORIES              
-----------------------------------------*/
.categories-block {
  background: var(--primary-color);
  border-radius: var(--border-radius-large);
  border: 8px solid var(--social-icon-link-bg-color);
  width: 150px;
  height: 150px;
  margin: auto;
  margin-bottom: 24px;
  text-align: center;
  position: relative;
  transition: all 0.5s;
}

.categories-block:hover {
  border-color: var(--white-color);
  box-shadow: 0 1rem 3rem rgba(0,0,0,.175);
}

.categories-icon {
  color: var(--white-color);
  font-size: var(--h4-font-size);
  line-height: normal;
  margin-bottom: 5px;
}

.categories-block-title {
  color: var(--white-color);
  font-size: var(--copyright-font-size);
}

.categories-block-number {
  background: var(--secondary-color);
  border-radius: var(--border-radius-large);
  position: absolute;
  top: 0;
  right: 0;
  width: 40px;
  height: 40px;
  text-align: center;
}

.categories-block-number-text {
  color: var(--white-color);
  display: block;
  height: 45%;
  position: relative;
  left: 2px;
}


/*---------------------------------------
  REVIEWS              
-----------------------------------------*/
.reviews-section {
  background: var(--section-bg-color);
}

.reviews-carousel .owl-item img,
.avatar-image {
  border: 5px solid var(--section-bg-color);
  border-radius: var(--border-radius-large);
  width: 65px;
  height: 65px;
  object-fit: cover;
}

.reviews-carousel .owl-dots .owl-dot span {
  background: var(--white-color);
  border: 5px solid transparent;
  padding: 5px;
  transition: all 0.5s;
}

.reviews-carousel .owl-dots .owl-dot.active span, 
.reviews-carousel .owl-dots .owl-dot:hover span {
  background: var(--white-color);
  border-color: var(--custom-btn-bg-color);
}

.reviews-thumb {
  background: var(--white-color);
  border-radius: var(--border-radius-medium);
  position: relative;
  overflow: hidden;
  margin-bottom: 24px;
}

.reviews-body {
  position: relative;
  padding: 30px 40px 30px 70px;
}

.reviews-info {
  position: relative;
  padding: 40px 40px 20px 40px;
}

.reviews-title {
  color: var(--p-color);
}

.reviews-info strong,
.reviews-info small {
  display: block;
}

.reviews-info strong {
  color: var(--dark-color);
  line-height: normal;
}

.bi-star-fill {
  color: var(--custom-btn-bg-color);
}

.reviews-bottom small {
  font-size: var(--btn-font-size);
  font-weight: var(--font-weight-normal);
}

.quote-icon {
  position: absolute;
  top: 0;
  left: 30px;
  opacity: 0.05;
}


/*---------------------------------------
  JOB              
-----------------------------------------*/
.recent-jobs-bottom .custom-btn {
  font-size: var(--h5-font-size);
  padding: 25px 50px;
  
  
}

.job-listings-page .hero-form .badge:hover {
  background: var(--primary-color);
}

.job-thumb {
  border-radius: var(--border-radius-small);
  margin-bottom: 25px;
  padding: 25px;
  transition: all 0.5s ease;
  height: 300px;
}

.job-thumb:hover,
.job-thumb:nth-of-type(even) {
  background: var(--white-color);
  box-shadow: 0 1rem 3rem rgba(0,0,0,.175);
}

.job-title-link {
  color: var(--dark-color);
}

.job-thumb p {
  font-size: 18px;
}

.job-thumb .badge {
  border: 0;
}

.job-thumb-box {
  border: 1px solid var(--border-color);
  position: relative;
  overflow: hidden;
  max-width: 400px;
  margin-bottom: 48px;
  padding: 0;
}

.job-thumb-box .job-body {
  padding: 25px;
}

.job-thumb-box .job-body .job-image-wrap {
  width: 50px;
  min-width: 50px;
  height: 50px;
}

.job-thumb-box .job-body .job-image {
  padding: 10px;
}

.job-thumb-box .job-location, 
.job-thumb-box .job-date {
  min-width: inherit;
}

.job-thumb-box .job-date {
  margin-right: 0;
}

.job-image-box-wrap {
  position: relative;
}

.job-image-box-wrap .job-image {
  padding: 0;
}

.job-image-box-wrap .badge-level {
  border-color: transparent;
}

.job-image-box-wrap .badge-level:hover,
.job-image-box-wrap .badge:hover {
  background: var(--custom-btn-bg-color);
  border-color: transparent;
}

.job-image-box-wrap-info {
  position: absolute;
  bottom: 0;
  right: 0;
  left: 0;
  margin: 20px 25px;
}

.job-image-wrap {
  border-radius: var(--border-radius-large);
  width: 80px;
  min-width: 80px;
  height: 80px;
}

.job-image {
  display: block;
  margin: auto;
  padding: 20px;
}

.job-body {
  flex: auto;
}

.job-location {
  min-width: 175px;
}

.job-location,
.job-date {
  margin-right: 20px;
}

.job-date {
  min-width: 155px;
}

.job-price {
  min-width: 120px;
  margin-right: 10px;
  margin-left: 10px;
}

.job-thumb-detail,
.job-thumb-detail:hover {
  background: transparent;
  box-shadow: none;
  margin: 0;
  padding: 0;
}

.job-thumb-detail-box {
  padding: 40px;
}

.job-detail-share {
  margin-left: auto;
}

.dropdown-sorting .dropdown-menu {
  border-radius: var(--border-radius-small);
  border-top: 0;
  padding-top: 8px;
  padding-bottom: 8px;
}

.dropdown-sorting .dropdown-item {
  font-size: var(--copyright-font-size);
  border-bottom: 0;
  padding-top: 0;
  padding-bottom: 0;
}

#dropdownSortingButton {
  background: transparent;
  color: var(--dark-color);
  border: 0;
  padding: 0;
}

.sorting-icon {
  color: var(--p-color);
}

.sorting-icon.active {
  color: var(--primary-color);
}

.job-section-btn-wrap {
  margin-left: auto;
}


/*---------------------------------------
  CTA               
-----------------------------------------*/
.cta-section {
  background-image: url('../logo/logo20.jpg');
  background-repeat: no-repeat;
  background-position: top;
  background-size: cover;
  position: relative;
  padding-top: 150px;
  padding-bottom: 75px;
}


/*---------------------------------------
  CONTACT               
-----------------------------------------*/
.contact-info-wrap {
  padding-top: 20px;
  padding-bottom: 20px;
}

.contact-info {
  padding: 20px 30px;
}

.contact-info:nth-of-type(even) {
  background-color: var(--section-bg-color);
  border-radius: var(--border-radius-large);
}

.contact-info .custom-icon {
  font-size: var(--h2-font-size);
  margin-right: 20px;
}

.contact-info-small-title {
  color: var(--secondary-color);
  display: block;
  font-size: var(--copyright-font-size);
  font-weight: var(--font-weight-semibold);
  line-height: normal;
}

.contact-form {
  margin-top: 20px;
}

.contact-form .form-control {
  background-color: var(--section-bg-color);
  margin-bottom: 24px;
  padding-top: 15px;
  padding-bottom: 15px;
  padding-left: 20px;
}

.contact-form .form-control:hover {
  background-color: var(--white-color);
  border-color: var(--primary-color);
}

.contact-form button[type="submit"] {
  margin-bottom: 0;
}

.google-map {
  display: block;
  border-radius: var(--border-radius-medium);
  filter: grayscale(100%);
}


/*---------------------------------------
  NEWSLETTER FORM              
-----------------------------------------*/
.newsletter-form {
  background: var(--section-bg-color);
  border-radius: var(--border-radius-small);
  padding: 30px;
}

.newsletter-form .input-group {
  margin-bottom: 0;
  padding: 10px;
}

.newsletter-form .form-control {
  margin-right: 42px;
  padding-top: 7px;
  padding-bottom: 7px;
}

.newsletter-form button[type="submit"] {
  display: flex;
  justify-content: center;
  align-content: center;
  position: absolute;
  top: 0;
  right: 0;
  margin: 10px;
  padding-top: 10px;
  padding-bottom: 8px;
  width: 42px;
  height: 42px;
}

.newsletter-form button[type="submit"] i {
  height: 100%;
}

.newsletter-form .input-group>:not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback) {
  margin-left: 0;
  border-radius: var(--border-radius-large);
}


/*---------------------------------------
  SITE FOOTER              
-----------------------------------------*/
.site-footer {
  padding-top: 100px;
  padding-bottom: 0;
}

.site-footer-link {
  color: var(--p-color);
}

.site-footer-bottom {
  background: var(--primary-color);
  margin-top: 100px;
  padding-top: 20px;
  padding-bottom: 20px;
  position: relative;
}

.site-footer-bottom .footer-menu-link {
  color: var(--white-color);
  font-size: var(--copyright-font-size);
  margin-right: 5px;
  margin-left: 5px;
}

.site-footer-title {
  margin-bottom: 15px;
}

.site-footer-bottom p,
.copyright-text {
  color: var(--white-color);
  font-size: var(--copyright-font-size);
  margin-bottom: 0;
}

.copyright-text {
  margin-right: 20px;
}

.sponsored-link {
  color: var(--white-color);
  font-weight: var(--font-weight-bold);
}

.footer-menu {
  justify-content: end;
  margin: 0;
  padding: 0;
}

.footer-menu-item {
  list-style: none;
  display: block;
}

.footer-menu-link {
  color: var(--p-color);
  display: inline-block;
  vertical-align: middle;
  margin-right: 10px;
  margin-bottom: 5px;
}


/*---------------------------------------
  SOCIAL ICON               
-----------------------------------------*/
.social-icon {
  margin: 0;
  padding: 0;
}

.social-icon-item {
  list-style: none;
  display: inline-block;
  vertical-align: top;
}

.social-icon-link {
  background: var(--social-icon-link-bg-color);
  border-radius: var(--border-radius-large);
  color: var(--white-color);
  font-size: var(--btn-font-size);
  display: block;
  margin-right: 5px;
  text-align: center;
  width: 35px;
  height: 35px;
  line-height: 40px;
  transition: all 0.5s;
}

.social-icon-link:hover {
  background: var(--secondary-color);
  color: var(--white-color);
  transform: scale(1.15);
}


/*---------------------------------------
  RESPONSIVE STYLES               
-----------------------------------------*/
@media screen and (min-width: 1025px) {
  .job-featured-section .job-thumb {
    max-width: 1120px;
    margin-right: auto;
    margin-left: auto;
  }
}

@media screen and (min-width: 991px) {
  .google-map {
    height: 100%;
  }
}

@media screen and (max-width: 991px) {
  h1 {
    font-size: 48px;
  }

  h2 {
    font-size: 36px;
  }

  h3 {
    font-size: 32px;
  }

  h4 {
    font-size: 28px;
  }

  h5 {
    font-size: 20px;
  }

  h6 {
    font-size: 18px;
  }

  .section-padding,
  .cta-section {
    padding-top: 50px;
    padding-bottom: 50px;
  }

  .about-page .about-section {
    padding-top: 50px;
  }

  .custom-btn {
    padding: 12px 20px;
  }

  .navbar-collapse {
    padding-bottom: 20px;
  }

  .navbar-expand-lg .navbar-nav .nav-link {
    padding: 10px;
  }

  .navbar-expand-lg .navbar-nav .nav-link.custom-btn {
    margin-top: 10px;
  }

  .page-link {
    font-size: 12px;
    width: 40px;
    height: 40px;
    line-height: 40px;
    margin-right: 5px;
    margin-left: 5px;
  }

  .custom-text-block {
    padding: 50px 30px;
  }

  .hero-section {
    padding-top: 100px;
    padding-bottom: 100px;
  }

  .badge {
    margin-top: 5px;
  }

  .counter-number, 
  .counter-number-text {
    font-size: var(--h2-font-size);
  }

  .custom-border-radius-start {
    border-radius: var(--border-radius-medium) var(--border-radius-medium) 0 0;
  }

  .custom-border-radius-end {
    border-radius: 0 0 var(--border-radius-medium) var(--border-radius-medium);
  }

  .job-body p {
    font-size: var(--btn-font-size);
  }

  .job-location {
    min-width: 140px;
  }

  .job-price {
    min-width: inherit;
    margin-top: 5px;
    margin-left: 0;
  }

  .hero-form button[type="submit"] {
    margin-bottom: 0;
  }

  .site-footer {
    padding-top: 50px;
  }

  .site-footer-bottom {
    margin-top: 50px;
  }
}

@media screen and (max-width: 480px) {
  h1 {
    font-size: 40px;
  }

  h2 {
    font-size: 28px;
  }

  h3 {
    font-size: 26px;
  }

  h4 {
    font-size: 22px;
  }

  h5 {
    font-size: 20px;
  }

  .badge {
    margin: 10px 10px 5px 0;
  }

  .page-link {
    width: 35px;
    height: 35px;
    line-height: 35px;
  }

  .counter-thumb {
    margin: 10px;
  }

  .counter-number, 
  .counter-number-text {
    font-size: var(--h3-font-size);
  }

  .job-date {
    margin-top: 5px;
  }

  .job-detail-share {
    margin: 20px auto 0 auto;
  }
}


/*---------------------------------------
  Extras               
-----------------------------------------*/

.logo-radius
{
  border-radius: 50px 50px;
  height: 100px;
  width: 200px;
}


</style>