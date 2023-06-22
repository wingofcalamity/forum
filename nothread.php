<?php http_response_code(404);?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
</head>
<body>
    <section id="main">
        <h1>
            Error
        </h1>
        <p>
            Thread &gt;<?php echo $_GET['thread'];?> not found on this server.
        </p>
        <p><a href="../">Return home</a></p>
    </section>
</body>
</html>
