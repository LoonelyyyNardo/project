<html>
    <head>
        <link rel="stylesheet" href="<?=base_url('vendor/assets/bootstrap.min.css');?>">
    </head>
    <body>
    <?= $this->include("navbar");?>    
    <?= $this->renderSection("content"); ?> 
    </body>
</html>