<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
        <link rel="icon" type="image/x-icon" href="/images/icon.ico">
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="https://kit.fontawesome.com/cefac98de9.js" crossorigin="anonymous"></script>
    </head>
    <body>

        <div class="main-content" id="mainContent">
        </div>
    </body>
</html>

<script>
     const sidebar = document.getElementById('sidebar');
     const toggleBtn = document.getElementById('toggleBtn');

     toggleBtn.addEventListener('click', () => {
     sidebar.classList.toggle('collapsed');
     });
</script>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap');

body{
     margin: 0;
     padding: 0;
     font-family: "Roboto Slab", serif;
     font-optical-sizing: auto;
     font-weight: 400;
     font-style: normal;
}
</style>