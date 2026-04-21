<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact | HR Accessibility Project</title>
  <meta name="description" content="Contact the HR Accessibility Team for questions or feedback." />
  <link rel="stylesheet" href="resources.css" />
  <script src="js/script.js" defer></script>
</head>
<body>

<?php
// Initialize variables
$name = $email = $message = "";
$success = false;
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    // Basic validation
    if (empty($name) || empty($email) || empty($message)) {
        $error = "Please fill in all fields.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Please enter a valid email address.";
    } else {
        // Here you could send email or store data
        // For demonstration, we'll just set success to true
        $success = true;
    }
}
?>

<a href="#main-content" class="skip-link">Skip to main content</a>

<header>
  <h1><i class="fas fa-universal-access"></i> HR Accessibility Resource</h1>
  <p>Creating inclusive and accessible HR systems for everyone</p>
</header>

<nav>
  <ul>
    <li><a href="index.html">Home</a></li>
    <li><a href="guidelines.html">Guidelines</a></li>
    <li><a href="tools.html">Tools</a></li>
    <li><a href="best-practices.html">Best Practices</a></li>
    <li><a href="Resources.html">Resources</a></li>
    <li><a href="contact.html" aria-current="page">Contact</a></li>
  </ul>
</nav>

<main id="main-content">
  <section>
    <h2>Contact the HR Accessibility Team</h2>
    <?php if ($success): ?>
      <p style="color: green;">Thank you for your message! We will get back to you soon.</p>
    <?php elseif ($error): ?>
      <p style="color: red;"><?php echo htmlspecialchars($error); ?></p>
    <?php endif; ?>
    <form method="POST" action="contact.php">
      <label for="name">Name:</label><br>
      <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>" required><br><br>

      <label for="email">Email:</label><br>
      <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" required><br><br>

      <label for="message">Message:</label><br>
      <textarea id="message" name="message" rows="5" required><?php echo htmlspecialchars($message); ?></textarea><br><br>

      <button type="submit">Send Message</button>
    </form>
  </section>
</main>

<footer>
  <p>Last Updated: April 2026</p>
  <p>Contact: hr@company.com</p>
  <p>&copy; 2026 HR Accessibility Team</p>
  <p><a href="accessibility.html">Accessibility Statement</a></p>
</footer>

</body>
</html>
