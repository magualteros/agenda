<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <title>AGENDA</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="">HOME</a></li>
                <li class="nav-item"><a class="nav-link" href="">CONTACS</a></li>
                <li class="nav-item"><a class="nav-link" href="">ABOUT</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="form-container">
            <form  class="form-control "action="save.php" method="post">
            <div class="form-floating ">
                <input type="text" class="form-control" name="name" require placeholder="name">
                <label for="floatingInput">Name</label>
            </div>
            <div class="form-floating">
                <input type="num" 
                class="form-control" name="age" require maxlength="2" placeholder="age">
                <label for="floatingInput">Age</label>
            </div>
            <div class="form-floating ">
                <input type="email" class="form-control" name="email" require placeholder="email">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating ">
                <input type="num" class="form-control" name="phone" require placeholder="cellphone">
                <label for="floatingInput">Phone</label>
            </div>
                

                <input type="submit" placeholder="SEND" class="btn btn-outline-success">
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