<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    
    <title>Pratica</title>
</head>
<body>
    <form action="envia_formpratica.php" method="POST">
    <div class="form-group mx-sm-3 mb-2">
            <label for="exampleInputPassword1"> Name</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name='nome' placeholder="Name">
        </div>
        <div class="form-group mx-sm-3 mb-2">
            <label for="exampleInputPassword1">Surname</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name='sobrenome' placeholder="Surname">
        </div>
        <div class="form-group mx-sm-3 mb-2">
            <label for="exampleInputPassword1">CPF</label>
            <input type="text" class="form-control" id="cpf" name='cpf' placeholder="xxx.xxx.xxx-xx">
        </div>
        <div class="form-group mx-sm-3 mb-2">
            <label for="exampleInputPassword1">Birth Date</label>
            <input type="date" class="form-control" id="exampleInputPassword1" name='data_de_nascimento' placeholder="xx/xx/xxxx">
        </div>
        <div class="form-group mx-sm-3 mb-2">
            <label for="exampleInputEmail1">Address</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='endereco' placeholder="Address">
        </div>
        <div class="form-group mx-sm-3 mb-2">
            <label for="exampleInputPassword1">Phone</label>
            <input type="text" class="form-control" id="tel" name='telefone' placeholder="(xx)xxxxx-xxxx">
        </div>
        <div class="form-group mx-sm-3 mb-2">
            <label for="exampleInputEmail1">Email Address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name='email' aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
       
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</body>
</html>


<script>
    $( "#cpf" ).keypress(function() {
        $(this).mask('000.000.000-00');
    });

    $( "#tel" ).keypress(function() {
        $(this).mask('(00)00000-0000');
    });
</script>