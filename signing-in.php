<<<<<<< HEAD
<?php include('nav.php');?>

=======
>>>>>>> 84f1fe7863b1e3af18dce5fab73903d30b616201
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