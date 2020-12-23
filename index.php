<?php   
 require_once('busca_cep.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="index.js"></script>
    <title>Consumi  API - CEP</title>
</head>
<body>

<div class="meio">
    <form method="POST" >
        <div class="mb-3">
            <label class="form-label">CEP</label>
            <input type="text" onblur="pesquisacep(this.value);" class="form-control teste" id="cep" aria-describedby="emailHelp" name="cep" <?php if(isset($_POST['cep'])){ $endereco = get_endereco($_POST['cep']); ?> value="<?php echo $endereco->cep; ?>" <?php } ?>>
        </div>        
        
        <div class="mb-3">
            <label class="form-label">Endereço</label>
            <input type="text" class="form-control teste" id="rua"  value="<?php echo (isset($endereco->logradouro) && !empty($endereco->logradouro) )  ? $endereco->logradouro :  "" ?>" > 
            <!-- <input type="text" class="form-control teste" id="rua"  value="<?php //echo (isset($endereco->logradouro)) == "" ? "" :  $endereco->logradouro; ?>" >  -->
            <!-- <input type="text" class="form-control teste" id="rua" <?php //if(isset($_POST['cep'])){ $endereco = get_endereco($_POST['cep']); ?> value="<?php //echo $endereco->logradouro; ?>" <?php //} ?> >  -->
        </div>

        <div class="mb-3">
            <label class="form-label">Bairro</label>
            <input type="text" class="form-control teste" id="bairro"   value="<?php (isset($endereco->bairro) && !empty($endereco->bairro) ? $endereco->bairro : "") ?>">
        </div>
        
        <div class="mb-3">
            <label class="form-label">Município</label>
            <input type="text" class="form-control teste" id="cidade"   value="<?php isset($endereco->localidade) && !empty($endereco->localidade) ? $endereco->localidade : "" ?>">
        </div>

        <div class="mb-3">
            <label class="form-label">Estado</label>
            <input type="text" class="form-control teste" id="uf"   value="<?php isset($endereco->uf) && !empty($endereco->uf) ? $endereco->uf : "" ?>">
        </div>
        <a href="index.php" class="btn btn-primary" >Limpar</a>
    </form>
</div>  


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>
