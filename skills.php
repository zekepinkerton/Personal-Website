<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Skills</title>
        <link rel = "stylesheet" href = "style.css">
        <script src="https://unpkg.com/htmx.org@1.9.10"></script>
        <link rel="icon" href="https://raw.githubusercontent.com/zekepinkerton/Personal-Website/main/favicon.ico?token=GHSAT0AAAAAACMSBDYZAF2KZHREZP2STJY6ZOX7BGQ" type="image/x-icon">
    </head>
    <body>
        <div hx-get = "header.html" hx-swap="outerHTML" hx-trigger="load"> </div>
        <img src="pictures/logopic.png" alt="Your Logo" class="logo">
            <div class="skill-container">
                <ul class="skills-list">
                    <li><img src="pictures/htmlpic.png" alt="Language 1"></li>
                    <li><img src="pictures/csspic.png" alt="Language 2"></li>
                    <li><img src="pictures/gitpic.png" alt="Language 2"></li>
                    <li><img src="pictures/javapic.png" alt="Language 2"></li>
                    <li><img src="pictures/cpic.png" alt="Language 2"></li>
                    <li><img src="pictures/pythonpic.png" alt="Language 2"></li>
                    <li><img src="pictures/sqlpic.png" alt="Language 2"></li>
                    <li><img src="pictures/javascriptpic.png" alt="Language 2"></li>
            <!-- Add more images here -->
                </ul>
            </div>
        <div hx-get = "footer.html" hx-swap="outerHTML" hx-trigger="load"> </div>
    </body>
</html>