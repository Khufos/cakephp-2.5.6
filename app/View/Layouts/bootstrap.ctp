<!-- <!DOCTYPE html>
<html>

<head>

    <title>

    </title>

</head>

<body>

    <div id="content">

        ?php echo $this->Session->flash(); ?

        ?php echo $this->fetch('content'); ?>
    </div>

    </div>

</body>

</html> -->



<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>Starter Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    <?php

    echo $this->Html->css('bootstrap.min.css');
    echo $this->Html->css('starter-template.css');


    ?>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">Cinema</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <?php echo $this->Html->link('Atores', '/atores', array('class' => 'nav-link')) ?>

                </li>
                <li class="nav-item">

                    <?php echo $this->Html->link('Filmes', '/filmes', array('class' => 'nav-link')) ?>

                </li>
                <li class="nav-item">
                    <?php echo $this->Html->link('Generos', '/generos', array('class' => 'nav-link')) ?>

                </li>
                <li class="nav-item">
                    <?php echo $this->Html->link('Criticas', '/criticas', array('class' => 'nav-link')) ?>

            </ul>
        </div>
    </nav>

    <main role="main" class="container">

        <?php
        echo $this->Session->flash();

        echo $this->fetch('content');
        ?>

    </main>
    <?php
    echo $this->Html->script('jquery-3.7.1.min.js');
    echo $this->Html->script('bootstrap.bundle.min.js')

    ?>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script> -->
</body>

</html>