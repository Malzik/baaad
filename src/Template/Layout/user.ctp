<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= h($title); ?></title>

    <?= $this->Html->css('bootstrap.min') ?>
    <?= $this->Html->css('font-awesome.min') ?>
    <?= $this->Html->script('jquery-3.2.1.slim.min') ?>

    <?= $this->Html->script('bootstrap.min', ['block' => 'scriptBottom']) ?>
    <?= $this->Html->script('popper.min', ['class' =>'thumbnail img-responsive'], ['block' => 'scriptBottom']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>

</head>
<body>
<!-- Nav Bar -->
<!-- Nav Bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ml-4">
            <li class="nav-item active">
                <?= $this->Html->link($this->Html->image('logo.png', ['width' => '40px'], ['alt' => 'Logo']), '/', ['class' => 'mr-auto', 'escape' => false]); ?>
            </li>
            <?= '&nbsp'; ?>
            <li class="nav-item active">
                <?= $this->Html->link('<i class="fa fa-home"> Accueil </i><span class="sr-only"> (current)</span>', '/', ['class' => 'nav-link', 'escape' => false]); ?>
            </li>
            <li class="nav-item">
                <?= $this->Html->link('<i class="fa fa-download"> Telecharger notre application </i><span class="sr-only"> (current)</span>', '/', ['class' => 'nav-link', 'escape' => false]); ?>
            </li>
        </ul>
        <div class="mt-2 my-lg-0 btn-group">
                <?= $this->Form->button($this->request->getSession()->read("Auth.User.username"), ['class' => 'btn btn-success dropdown-toggle','type' => 'button',  'data-toggle' => 'dropdown', 'aria-haspopup' => true, 'aria-expanded' => false]);?>
                <div class="dropdown-menu dropdown-menu-right w-100" style="right:0; left:auto;">
                    <?= $this->Html->link("Se deconnecter", ['controller' => 'Users','action'=> 'logout'], ['class' => 'button, dropdown-item'])?>
                    <?= $this->Html->link("Mon panierr", ['controller' => 'Profils','action'=> 'panier'], ['class' => 'button, dropdown-item'])?>
                </div>

        </div>
    </div>
</nav>

<div class="container mt-3">
    <?= $this->Flash->render() ?>
</div>
<?= $this->fetch('content') ?>
<footer>
</footer>
<?= $this->fetch('scriptBottom') ?>
</body>
</html>