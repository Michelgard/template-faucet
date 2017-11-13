<html>
	<head>
        <link rel="stylesheet" href="<?= css_url($param_theme) ?>">
        <link rel="stylesheet" href="<?= css_url('style') ?>">
       
        <link rel="stylesheet" href="<?= assets('font-awesome-4.7.0/css/font-awesome.min.css') ?>">
        <script type="text/javascript" src="http://api.solvemedia.com/papi/challenge.ajax"></script>
        
        <link rel="shortcut icon" href="<?=img_url('logo-icone.ico') ?>" type="images/x-icon" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link href="<?=css_url('AdminLTE.min')?>" rel="stylesheet"/>
        
        <title><?= $title ?></title>
        
        <?=$JS_before_close_head ?>
	</head>
    
    <?=$JS_before_open_boby ?>
    
	<body>
        
        <?=$JS_after_open_body ?>
        
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Affichage Non site et LOGO -->
                <a href="<?php echo base_url();?>"><span class="logo"><?= $param_nom_site; ?>	&nbsp;	</span>
                    <img src="<?php echo img_url('logo.png', 'logo faucet');?>" style="height: 50px; margin: 0 0 5px 0;"/></a>
                
                <!-- Affichage Balance FaucetHub -->
                	&nbsp;		&nbsp;		&nbsp;		&nbsp;	
                <i class="fa fa-gift" aria-hidden="true"></i>
                <span class="balance">Balance : &nbsp;
                    <?= $balance ?>
                    <?= $param_monnaie_cent ?></span> 
                
                &nbsp;		&nbsp;		&nbsp;		&nbsp;	
                <span class="monnaie"> Faucet in <?= $param_monnaie_complet ?></span> 
            </div>
        </div>
    </div>