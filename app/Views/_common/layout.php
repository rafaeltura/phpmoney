<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPMoney</title>

    <?php echo link_tag('assets/bootstrap/css/bootstrap-5.min.css'); ?>


    <style>
        body{
            padding-top: 70px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="<?php echo base_url(); ?>">
            <img src="<?php echo base_url('assets/image/logo_php_exp_white.png')?>" height="40" alt="Logotipo PhpMoney">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle Navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="<?php echo base_url(); ?>" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('lancamento'); ?>" class="nav-link">Lançamentos</a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('categoria'); ?>" class="nav-link">Categorias</a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('orcamento'); ?>" class="nav-link">Orçamento</a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('relatorio'); ?>" class="nav-link">Relatório</a>
                </li>
            </ul>

            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Configurações
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="<?php echo base_url('perfil') ?>">
                            Perfil
                        </a>
                        <a class="dropdown-item" href="<?php echo base_url('usuario') ?>">
                            Usuário
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('login/signout') ?>">
                        Sair
                    </a>
                </li>

            </ul>
        </div>

    </nav> 
    
    <main>
        <div class="container" role="main">
            <?php echo $this->renderSection('content'); ?>
        </div>
    </main>

    <script src="<?php echo base_url('assets/jquery/jquery-3.6.0.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vue/vue_1x.js'); ?>"></script>
</body>
</html>