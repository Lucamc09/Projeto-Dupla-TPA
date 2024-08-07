<?php

include "../model/Conexao.class.php";
include "../model/Manager.class.php";

$manager = new Manager();
$id = $_POST['id'];

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>

    <link rel="shortcut icon" href="resources/icon.png" type="image/x-icon" ></link>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"/>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />

    <link href="fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"/>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquert.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquert.mask.min.js"></script>

</head>

<body>
<div class="container">
    <h2 class="py-5 text-center"> Atualizar Usuário </i></h2>

    <form method="POST" action="../controller/update_client.php">
        <div class="row g-3">
            <?php foreach ($manager->list_client_by_id($id) as $data) :?>
            <div class="col-md-6">
                <label for="name" class="form-label">Nome <i class="bi bi-person"></i></label>
                <input type="text" class="form-control" name="name" id="name" value="<?= $data['name'] ?>" required autofocus>
            </div>

            <div class="col-md-6">
                <label for="email" class="form-label">E-mail <i class="bi bi-envelope"></i></label>
                <input type="email" class="form-control" name="email" id="email" value="<?= $data['email'] ?>" required>
            </div>

            <div class="col-md-4">
                <label for="cpf" class="form-label">CPF <i class="bi bi-credit-card-2-front"></i></label>
                <input type="text" class="form-control" name="cpf" id="cpf" value="<?= $data['cpf'] ?>" required>
            </div>

            <div class="col-md-4">
                <label for="birth" class="form-label">Dt. de Nascimento <i class="bi bi-calendar"></i></label>
                <input type="date" class="form-control" name="birth" id="birth" value="<?= $data['birth'] ?>"required>
            </div>

            <div class="col-md-4">
                <label for="phone" class="form-label">Telefone <i class="bi bi-whatsapp"></i></label>
                <input type="text" class="form-control" name="phone" id="phone" value="<?= $data['phone'] ?>" required>
            </div>

            <div class="col-md-12">
                <label for="address" class="form-label">Endereço <i class="bi bi-map"></i></label>
                <input type="text" class="form-control" name="address" id="address" value="<?= $data['address'] ?>" required>
            </div>
            <input type="hidden" name="id" value="<?= $data['id'] ?>">
            <?php endforeach;?>   
            <hr class="my-4">

            <div class="col-md-12 text-end">
                <button class="btn btn-primary btn-lg" type="submit"> Atualizar </button>
                <a class="btn btn-success btn-lg" href="../index.php">Cancelar</a>
            </div>

        </div>
    </form> 
      
</div>

</body>

</html>