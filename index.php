<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>

    <h1 class="text-center">Connexion</h1>

    <form action="authentification.php" method="POST" class="container bg-light">
        <p>
            <label for="login" class="form-label">Login : </label>
            <input type="text" name="login" id="login" class="form-control">
        </p>

        <p>
            <label for="password" class="form-label">Mot de passe : </label>
            <input type="password" name="password" id="password" class="form-control">
        </p>

        <p>
            <input type="submit" value="OK" class="btn btn-primary btn-lg">
        </p>
    </form>
    
</body>
</html>