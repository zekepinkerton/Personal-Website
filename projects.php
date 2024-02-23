<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>My Projects</title>
        <link rel = "stylesheet" href = "style.css">
        <script src="https://unpkg.com/htmx.org@1.9.10"></script>
    </head>
    <body>
        <div hx-get = "header.html" hx-swap="outerHTML" hx-trigger="load"> </div>
        <div class="project">
            <h2>MineWalker</h2>
            <p>Description of Project 1 goes here...</p>
            <a href="https://github.com/zekepinkerton/MineWalker" target="_blank">GitHub Repository</a>
        </div>
        <div class="project">
            <h2>BTree</h2>
            <p>Description of Project 2 goes here...</p>
        <a href="https://github.com/adamcrayton/CS321-003-f23-team-01" target="_blank">BTree Repository</a>
        </div>
        <div class="project">
            <h2>Intrepeter</h2>
            <p>Description of Project 3 goes here...</p>
            <a href="https://github.com/cs354-spring2024-002/ia-002-zekepinkerton" target="_blank">GitHub Repository</a>
        </div>
        <div hx-get = "footer.html" hx-swap="outerHTML" hx-trigger="load"> </div>
    </body>
</html>