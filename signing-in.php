<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Planner</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<?php include('nav.php');?>

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