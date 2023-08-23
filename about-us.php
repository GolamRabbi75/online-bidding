<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Reset some default styles for consistency */
        body, h1, h2, h3, p {
            margin: 0;
            padding: 0;
        }

        /* Basic styling */
        body {
            font-family: Arial, sans-serif;
            background-image: url('background.jpg'); /* Replace 'background.jpg' with the path to your background image */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .section {
            padding: 2em;
            text-align: center;
            color: white;
            background-color: rgba(0, 0, 0, 0.7); /* Add a semi-transparent overlay to improve readability */
        }

        .section.our-story {
            background-color: #1a0000;
        }

        .section.about-me, .section.my-name {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: white;
            color: black;
            text-align: center;
        }

        .section.my-name h2, .section.my-service h2 {
            margin-bottom: 1em;
        }

        .section.my-name p {
            max-width: 300px;
        }

        .section.my-service {
            background-color: #f2f2f2; /* Change the background color to a pale gray */
            color: black;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .section.my-service .points {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1em;
            max-width: 600px;
            margin-top: 1em;
            text-align: left;
        }

        .footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1em 0;
        }

        .contact-info {
            margin-top: 2em;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }

        .contact-info a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
        }
    </style>
    <title>About Us</title>
</head>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<body>
    <div class="section our-story">
        <h2>Welcome</h2>
        <p>"Akaar IT is a global leading IT company operating in Bangladesh. We have been successfully providing IT services in the country and abroad over the past years. We believe “customer satisfaction is our main profit”.
        </p>
    </div>
    <div class="section about-me">
        <div>
            <h2>About Us</h2>
            <p>Akaar IT is a privately owned IT Support and IT Services business formed in 2015. Today we’re proud to boast a strong team of IT engineers who thrive on rolling up their sleeves and solving your IT problems and meeting your business needs..</p>
        </div>
        <div class="my-name">
            <h2>Akaar IT</h2>
            <p>We help to shine</p>
        </div>
    </div>
    <div class="section my-service">
        <h2>Why Akaar IT Services?</h2>
        <div class="points">
            <div>
                <h3>Customer Service</h3>
                <p>
                 We strive to provide superior customer service and ensure that every client is completely satisfied with our work.</p>
            </div>
            <div>
                <h3>Support</h3>
                <p>
             Our engineers are trustworthy, dedicated and experienced and will go the extra mile to solve your IT issues..</p>
            </div>
            <div>
                <h3>Security</h3>
                <p>Our clients are protected because we are highly conscious about cybersecurity. We believe security is the first priority of a business.</p>
            </div>
            <div>
                <h3>Quality</h3>
                <p>We are committed to deliver outstanding, cutting edge IT solutions that add real value that goes beyond what is expected
                </p>
            </div>
        </div>
    </div>
    <footer class="footer">
         <p>&copy;Developed By Golam Rabbi</p>
    <div class="contact-info">
        <a href="tel:your-phone-number"><i class="fas fa-phone"></i> Phone:  +8801744-569317</a>
        <a href="mailto:your-email@example.com"><i class="fas fa-envelope"></i> Email: info@akaarit.com</a>
        <a href="https://www.facebook.com/your-facebook-page"><i class="fab fa-facebook"></i> Facebook:</a>
        <a href="https://www.instagram.com/your-instagram-profile"><i class="fab fa-instagram"></i> Instagram</a>
    </div>
    </footer>
</body>
</html>
