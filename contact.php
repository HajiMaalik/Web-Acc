<?php 
include('exampleData.inc.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact | HR Accessibility Project</title>
  <meta name="description" content="A collection of essential accessibility resources, tools, and downloads.">
  <link rel="stylesheet" href="resources.css">
  <script src="js/script.js" defer></script>
</head>

<body>

<a href="#main-content" class="skip-link">Skip to main content</a>

<header>
  <h1>Contact</h1>
  <nav aria-label="Primary Navigation">
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="guidelines.html">Guidelines</a></li>
      <li><a href="tools.html">Tools</a></li>
      <li><a href="best-practices.html">Best Practices</a></li>
      <li><a href="Resources.html" aria-current="page" style="font-weight: bold;">Resources</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
  </nav>
</header>

<hr>
<body>
    <form>
        <fieldset>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?= $name ?>"

        <label for="mail">Email:</label>
         <input type="email" id="mail" name="email" value="<?= $email ?>"
        
        <button type="submit">
            Contact us
        </button>
        </fieldset>
    </form>
<hr>

<footer>
  <p>Last Updated: April 2026</p>
  <p>Contact: hr@company.com</p>
  <p>&copy; 2026 HR Accessibility Team</p>
  <p><a href="contact.html">Accessibility Statement</a></p>
</footer>

</body>
</html>
