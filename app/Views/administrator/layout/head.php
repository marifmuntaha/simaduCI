<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?=isset($title) ? $title : null ?></title>

    <!--    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">-->
    <link href="<?=base_url('/assets/fonts/icomoon/styles.min.css')?>" rel="stylesheet" type="text/css">
    <link href="<?=base_url('/assets/css/all.min.css')?>" rel="stylesheet" type="text/css">
    <?= $this->renderSection('css')?>

    <script src="<?=base_url('/assets/js/main/jquery.min.js')?>"></script>
    <script src="<?=base_url('/assets/js/main/bootstrap.bundle.min.js')?>"></script>
    <?= $this->renderSection('jsplugin')?>

    <script src="<?=base_url('/assets/js/administrator/app.js')?>"></script>
    <?= $this->renderSection('jsscript')?>
</head>