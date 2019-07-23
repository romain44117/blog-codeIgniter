<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php echo heading('Wild Circus Blog', 1)?>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![ endif ] -->
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="btn btn-warning" data-toggle="collapse"
                    data-target="#main_nav" aria-expanded="false">Menu</button>
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="d-flex justify-content-end">
            <?php if($this->auth_user->is_connected) : ?>
                <p class="navbar-text navbar-right">Bienvenue <strong><?= $this->auth_user->username; ?></strong></p>
            <?php endif; ?>
        </div>
            <ul class="nav navbar-nav navbar-right">
                <?php if($this->auth_user->is_connected) : ?>
                    <button type="button" class="btn btn-outline-primary btn-lg"><?= anchor('deconnexion', "Déconnexion"); ?></button>
                <?php else: ?>
                    <li><?= anchor('connexion', "Connexion"); ?></li>
                <?php endif; ?>
            </ul>
        <div class="collapse navbar-collapse" id="main_nav">
            <ul class="nav navbar-nav">
                <li><?= anchor('index', "Accueil"); ?></li>
                <li><?= anchor('presentation', "À propos"); ?></li>
                <li><?= anchor('contact', "Contact"); ?></li>
                <li><?= anchor('blog/index', "Articles"); ?></li>
                <?php if ($this->auth_user->is_connected) : ?>
                    <li>
                        <?= anchor('admin/index', "Panneau de contrôle"); ?>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>

</nav>

