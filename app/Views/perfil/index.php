<?php echo $this->extend('_common/layout'); ?>
<?php echo $this->section('content'); ?>

<nav aria-label="breadcrumb" class="bg-light p-1 mb-2">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <?php echo anchor('', 'home'); ?>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
            Perfil
        </li>
    </ol>
</nav>

<div class="card">
    <div class="card-header">
        Perfil
    </div>
    <div class="card-body">
        Conteúdo ...
    </div>
</div>

<?php echo $this->endSection('content'); ?>