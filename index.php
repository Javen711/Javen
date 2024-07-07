<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Planner</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
  <section class="header">
    <nav>
        <a href="index.html"><img src=""></a>
        <div class="nav-links" id="navLinks">
            <i class="fa fa-times" onclick="hideMenu()"></i>
            <ul>
                <li><a href="">HOME</a></li>
                <li><a href="">FEATURES</a></li>
                <li><a href="">PRICING</a></li>
                <li><a href="">CONTACT</a></li>
            </ul>
        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>
    <div class="nav-line"></div>
    <div class="text-box">
        <h1>Event Planner</h1>
        <p>Event Planner is your ultimate tool for automating the scheduling process, eliminating the hassle of back-and-forth communications.</p>
        <a href="" class="hero-btn">Discover More</a>
    </div>
  </section>
  
  <section id="login-container">
    <section id="signup">
      <h2>Create an Account</h2>
      <form action="/signup" method="post">
        <label for="signup-username">Username:</label>
        <input type="text" id="signup-username" name="username" required>
        
        <label for="signup-email">Email:</label>
        <input type="email" id="signup-email" name="email" required>
        
        <label for="signup-password">Password:</label>
        <input type="password" id="signup-password" name="password" required>
        
        <input type="submit" value="Sign Up">
      </form>
    </section>
    
    <a href="javascript:void(0);" onclick="toggleSection()" id="toggleLink" class="center-link">Already have an account? Log in</a>
    
  </section>
  
  <script>
    var isSignUpVisible = true;
    
    function toggleSection() {
      var signupSection = document.getElementById('signup');
      var loginSection = document.getElementById('login');
      var toggleLink = document.getElementById('toggleLink');
      
      if (isSignUpVisible) {
        signupSection.style.display = 'none';
        loginSection.style.display = 'block';
        toggleLink.textContent = "Don't have an account? Sign up";
        isSignUpVisible = false;
      } else {
        signupSection.style.display = 'block';
        loginSection.style.display = 'none';
        toggleLink.textContent = "Already have an account? Log in";
        isSignUpVisible = true;
      }
    }
  </script>

  <!----FEATURES------>
  <section class="features">
    <h1>Exclusive Event Planner Features</h1>
    <div class="row">
        <div class="feature-col">
            <h3>Event Organization</h3>
            <p>Effortlessly create, manage, and prioritize your events in one centralized location.</p>
        </div> 
        <div class="feature-col">
            <h3>User Feedback</h3>
            <p>Share your thoughts and suggestions directly with our team to help us improve the platform.</p>
        </div>
        <div class="feature-col">
            <h3>Custom Alerts</h3>
            <p>Receive timely alerts for upcoming events and important milestones to stay on track.</p>
        </div>
    </div>
  </section>

  <div class="icon-container">
    <i class="fab fa-microsoft"></i>
    <i class="far fa-calendar"></i>
    <i class="far fa-clock"></i>
    <i class="far fa-edit"></i>
    <i class="far fa-bell"></i>
  </div>

  <!----REVENUE------>
  <section class="features2">
    <h1>Boost Your Earnings</h1>
    <p>Book high-value meetings in seconds, turning scheduling into a strategic advantage.</p>
    <div class="row">
        <div class="course-col2">
            <img src="images/setup.png">
            <div class="blog-right">
                <h3>Speed Up Sales</h3>
                <p>Keep momentum in your sales by removing scheduling barriers, allowing you to focus on closing deals.</p>
            </div> 
        </div>
        <div class="blog-right">
            <h3>Confident Closures</h3>
            <p>Maximize success with personalized reminders and follow-up strategies integrated with your sales tools.</p>
        </div>
        <div class="block-right">
            <h3>Explore Opportunities</h3>
            <p>Discover features and strategies to drive your business growth to new heights.</p>
        </div>
    </div>
  </section>

  <!----EVENTS------>
  <section class="campus">
    <div class="row">
        <div class="campus-col">
            <img src="images/conference1.webp">
            <div class="layer">
                <h3>EVENT REMINDERS</h3>
            </div>
        </div>
        <div class="campus-col">
            <img src="images/conference3.webp">
            <div class="layer">
                <h3>NOTIFICATIONS</h3>
            </div>
        </div>   
        <div class="campus-col">
            <img src="images/conferencep.webp">
            <div class="layer">
                <h3>SCHEDULE MANAGEMENT</h3>
            </div>
        </div>
    </div>
  </section>

  <!----FACILITIES------>
  <section class="facilities">
    <div class="row">
        <div class="facilities-col">
            <img src="images/meetcofee.webp">
            <h3>Event Scheduling</h3>
            <p>Customize event templates and select which events to display.</p>
        </div>
        <div class="facilities-col">
            <img src="images/meetcofee1.webp">
            <h3>Personalized Links</h3>
            <p>Share custom calendar links for easy scheduling based on your availability.</p>
        </div>
        <div class="facilities-col">
            <img src="meettcofee2.webp">
            <h3>Seamless Integration</h3>
            <p>Meetings scheduled through the app integrate with your calendar, eliminating back-and-forth emails.</p>
        </div>
    </div>
  </section>

  <!----TESTIMONIALS------>
  <section class="testimonials">
    <h1>Our Happy Users</h1>
    <p>Discover what our users have to say about Event Planner.</p>
    <div class="row">
        <div class="testimonials-col">
            <img src="images/user1.jpg">
            <div>
                <p>Event Planner has revolutionized my scheduling process. No more endless email threads or missed appointments!</p>
                <h3>Alex Johnson</h3>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
        </div>
        <div class="testimonials-col">
            <img src="images/user2.jpg">
            <div>
                <p>As a busy professional, this platform keeps my life in order with its customizable event templates and real-time availability checks.</p>
                <h3>Samantha Lee</h3>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half"></i>
            </div>
        </div>
    </div>
  </section>

  <!----CALL TO ACTION------>
  <section class="cta">
    <h1>Access Our Services Anywhere</h1>
  </section>

  <!----FOOTER------>
  <section class="footer">
    <h4>About Us</h4>
    <p>We simplify your life by empowering you to manage your time efficiently, whether it's for meetings, events, or personal
