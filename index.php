
<?php
$websiteName = "MyWebsite";
$title = "Welcome to My Website";
$message = "Learn, explore, and discover something new.";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $websiteName; ?></title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #eaf0ff;
            text-align: center;
        }

        nav {
            background: #0b0b29;
            padding: 20px;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        nav h2 {
            color: white;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 10px;
        }

        nav a:hover {
            color: #60a5fa;
        }

        .content {
            padding: 80px 20px;
        }

        h1 {
            color: #172554;
        }

        p {
            color: #334155;
        }

        button {
            background: #2563eb;
            color: white;
            border: none;
            padding: 14px 25px;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #0b0b29;
            transform: scale(1.05);
        }

        footer {
            background: #0b0b29;
            color: white;
            padding: 15px;
        }
    </style>
</head>
<body>

    <nav>
        <h2><?php echo $websiteName; ?></h2>
        <div>
            <a href="index.php">Home</a>
            <a href="#about">About</a>
            <a href="#contact">Contact</a>
        </div>
    </nav>

    <section class="content">
        <h1><?php echo $title; ?></h1>
        <p><?php echo $message; ?></p>

        <button onclick="location.href='#about'">
            Get Started
        </button>
    </section>

    <section id="about" class="content">
        <h1>About Us</h1>
        <p>This is a simple website created using PHP and CSS.</p>
    </section>

    <section id="contact" class="content">
        <h1>Contact Us</h1>
        <p>Email: example@gmail.com</p>
    </section>

    <footer>
        <p style="color:white;">
            &copy; <?php echo date("Y"); ?> <?php echo $websiteName; ?>
        </p>
    </footer>

</body>
</html>
