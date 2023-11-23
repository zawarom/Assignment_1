<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="navbar.css">
    <title>Navigation Bar</title>
    @vite('public/navbar.css')
    @vite('public/contactpage.css')
</head>
<body>

    <div class="navbar">
        <ul>
            <li><a href="welcome">Home</a></li>
            <li><a href="about">About</a></li>
            <li><a href="Achievements">Achievements</a></li>
            <li><a href="contact">Contact</a></li>
        </ul>
    </div>

    <header>
        <h1>MS Dhoni</h1>
        <p>Captain, Indian Cricket Team</p>
    </header>

    <section>
        <h2>Contact Information</h2>

        <div class="contact-info">
            <div>
                <h3>Email</h3>
                <p>msdhoni@example.com</p>
            </div>

            <div>
                <h3>Phone</h3>
                <p>+91 9876543210</p>
            </div>
        </div>

        <div class="social-media-links">
            <h3>Social Media</h3>
            <p>Follow MS Dhoni on <a href="https://twitter.com/msdhoni" target="_blank">Twitter</a>
                <a href="https://www.instagram.com/mahi7781/" target="_blank">Instagram</a>
                <a href="https://www.facebook.com/msdofficial" target="_blank">Facebook</a>.</p>
        </div>
    </section>

</body>
</html>