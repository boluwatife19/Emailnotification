<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Mail Xender</title>
</head>

<body>
    <form class="row g-3 m-3" method="post" action="send.php">
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input name  ='email' type="email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Address</label>
            <input name  = 'address'type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">City</label>
            <input name ='city' type="text" class="form-control" id="inputCity">
        </div>
        <div class="col-md-2">
            <label for="inputZip" class="form-label">Zip</label>
            <input name="zip" type="text" class="form-control" id="inputZip">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary" name ="send">Sign in</button>
        </div>
    </form>
</body>

</html>