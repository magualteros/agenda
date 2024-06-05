<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>AGENDA</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a href="">HOME</a></li>
                <li class="nav-item"><a href="">CONTACS</a></li>
                <li class="nav-item"><a href="">ABOUT</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <form action="save.php" method="post">
                <input type="text" name="name" require placeholder="name" id="floatingInput">
                <input type="num" name="age" require maxlength="2" placeholder="age">
                <input type="email" name="email" require placeholder="email">
                <label for="floatingInput">Email address</label>
                <input type="num" name="phone" require placeholder="cellphone">

                <div class="form-floating ">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                    <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>

                <input type="submit" placeholder="SEND" class="btn btn-primary">
            </form>
        </section>
        <section>
            
        </section>

    </main>
    <footer>
        <ul>
            <li><a href="">HOME</a></li>
            <li><a href="">CONTACS</a></li>
            <li><a href="">ABOUT</a></li>
        </ul>
    </footer>

</body>
</html>