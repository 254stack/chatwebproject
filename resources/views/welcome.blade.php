<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Customer Care</title>
  <link rel="stylesheet" href="styles.css">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
      background-image: url('storage/assets/images/bg.jpg');
      min-height: 100vh; 
      background-size: cover;
      background-position: center;
      display: flex;
      flex-direction: column; 
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
    }

    header {
      padding: 20px 0;
    }

    header .logo img {
      height: 40px;
    }

    header nav ul {
      list-style: none;
      display: flex;
    }

    header nav ul li {
      margin-right: 20px;
    }

    header nav ul li a {
      text-decoration: none;
      color: #ffffff;
    }

    .contact-info p {
      margin-bottom: 5px;
    }

    .hero {
      text-align: center;
      padding: 50px 0;
    }

    .hero h1 {
      margin-bottom: 20px;
    }

    .support-channels {
      padding: 50px 0;
    }

    .support-channels h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    .channels {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
    }

    .channel {
      text-align: center;
      margin: 0 20px;
    }

    .channel h3 {
      margin-bottom: 10px;
    }

    .feedback {
      background: #f9f9f9;
      padding: 50px 0;
      text-align: center;
    }

    .feedback form {
      margin-top: 20px;
    }

    .feedback textarea {
      width: 100%;
      height: 150px;
      margin-bottom: 20px;
    }

    button {
      padding: 10px 20px;
      background: #333;
      color: #fff;
      border: none;
      cursor: pointer;
    }

    footer {
      background: #333;
      color: #fff;
      padding: 10px 0;
      text-align: center;
      margin-top: auto; 
    }

    .footer-nav {
      list-style: none;
      margin-bottom: 20px;
    }

    .footer-nav li {
      display: inline-block;
      margin-right: 20px;
    }

    .footer-nav li a {
      text-decoration: none;
      color: #fff;
    }

    .copy-info p {
      font-size: 14px;
    }
  </style>
</head>
<body>

<header>
  <div class="container">
    <div class="logo">
      <img src="storage/assets/images/branch.png" alt="Logo">
    </div>
  </div>
</header>

<section class="hero">
  <div class="container">
    <h1>Need Help? We're Here for You.</h1>
    <p>Our team is ready to assist you with any questions or concerns you may have. Choose your preferred support channel below.</p>
  </div>
</section>

<section class="support-channels">
  <div class="container">
    <h2>Support Channels</h2>
    <div class="channels">
      <div class="channel">
        <h3>Live Chat</h3>
        <p>Connect with a support agent instantly.</p>
        <button>Start Chat</button>
      </div>
      <div class="channel">
        <h3>Phone Support</h3>
        <p>Call us for immediate assistance.</p>
        <p><strong>+254 730731222</strong></p>
      </div>
      <div class="channel">
        <h3>Email Support</h3>
        <p>Send us an email and we'll get back to you.</p>
        <p><strong>kenya@branch.co</strong></p>
      </div>
    </div>
  </div>
</section>

<footer>
  <div class="container">
    <p>&copy; 2024 Branch international. All rights reserved.</p>
  </div>
</footer>

</body>
</html>
