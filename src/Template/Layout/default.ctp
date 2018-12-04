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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?= $this->Html->image('logo.png', ['width' => '5%'], ['alt' => 'Logo']); ?>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ml-4">
                <li class="nav-item active">
                    <a class="nav-link" href="./">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Téléchargez notre application</a>
                </li>
            </ul>
            <div class="mt-2 my-lg-0">
                <i class="fa fa-stroopwafel"></i>
                <?php
                    echo $this->Html->link('Register', '/register',
                        ['class' => 'btn btn-primary my-2 my-sm-0'] );
                    echo '&nbsp';
                    echo $this->Html->link('Login', '/login',
                        ['class' => 'btn btn-success my-2 my-sm-0'] );
                ?>
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
