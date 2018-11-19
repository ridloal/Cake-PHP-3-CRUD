
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= h($title) ?>
    </title>
    <?= $this->Html->css('bootstrap.min') ?>
    <?= $this->Html->script('jquery.min') ?>
    <?= $this->Html->script('bootstrap.min', ['block' => 'scriptBottom']) ?>
    <?= $this->Html->script('validator', ['block' => 'scriptBottom']) ?>

    <!-- Fetch Meta CSS And Script -->
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <!-- Page Nav Bar -->
    <nav class="navbar navbar-findcond navbar-fixed-top" style="background: #2d3246; marg">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="http://localhost/mitla_practice/" style="color: white;">MITLA</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="color: white;">English <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#" style="color: white;">Japan</a></li>
                        <li class="divider"></li>
                        <li><a href="#" style="color: white;">English</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    </nav>
    <!-- end nav bar -->

    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>

    <!-- Footer -->
    <footer class="section footer-classic context-dark bg-image navbar navbar-fixed-bottom" style="background: #2d3246;">
        <div class="container">
            <div class="row row-30">
                <h4 align="center" style="color: white;">Copyright &copy; MITLA Corporation, All Right Reserved</h4>
            </div>
        </div>
    </footer>
    <!-- end footer -->
<?= $this->fetch('scriptBottom') ?>
</body>
</html>
