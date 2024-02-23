<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact Page</title>
        <link rel = "stylesheet" href = "style.css">
        <script src="https://unpkg.com/htmx.org@1.9.10"></script>
        <link rel="icon" href="https://raw.githubusercontent.com/zekepinkerton/Personal-Website/main/favicon.ico?token=GHSAT0AAAAAACMSBDYZAF2KZHREZP2STJY6ZOX7BGQ" type="image/x-icon">
    </head>
    <body>
        <div hx-get = "header.html" hx-swap="outerHTML" hx-trigger="load"> </div>
        <img src="pictures/logopic.png" alt="Your Logo" class="logo">
        <div class="contact-form">
            <h2>Contact</h2>
            <form action="#" method="POST">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div> 
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
            </div>
            <button type="submit">Submit</button>
            </form>
        </div>
        <div hx-get = "footer.html" hx-swap="outerHTML" hx-trigger="load"> </div>
    </body>
</html>