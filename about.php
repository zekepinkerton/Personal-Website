<!DOCTYPE html>
<html>
    <head>
        <link rel = "stylesheet" href = "style.css">
        <script src="https://unpkg.com/htmx.org@1.9.10"></script>
        <link rel="icon" href="https://raw.githubusercontent.com/zekepinkerton/Personal-Website/main/favicon.ico?token=GHSAT0AAAAAACMSBDYZAF2KZHREZP2STJY6ZOX7BGQ" type="image/x-icon">
    </head>
    <body>
        <div hx-get = "header.html" hx-swap="outerHTML" hx-trigger="load"> </div>
        <img src="pictures/logopic.png" alt="Your Logo" class="logo">
        <div class="image-container1">
            <img src="mexico1.png" alt="Image 1" style="max-width: 400px; max-height: 300px; maxposition: absolute; top: 0; left: 50%;">
        </div>
            <div class="description">
                <h2>About</h2>
                <p>Hello! I'm a passionate computer science student getting a degree in computer science.
                    I started my journey into Computer Science in Fall 2022, moving from a Pre med field in college. 
                    I have learned so much in the last two years and feel much more prepared to deal with life (even outside my career).
                    My problem solving has expontentially gotten better and I have gotten much better on googling problem I have and solving from there. 
                    Outside of the classroom, I love playing any sports (especially volleyball or Basketball), going into nature, and love everything about the ocean.
                    I'm committed to lifelong learning and constantly seeking opportunities to grow both personally and professionally.
                    I'm excited about the opportunity to collaborate on innovative projects and make a meaningful impact in the digital world. 
                    Let's connect and create something amazing together!
                </p>
            </div>
        <!-- Add more images here -->
        <div hx-get = "footer.html" hx-swap="outerHTML" hx-trigger="load"> </div>
    </body>
</html>
