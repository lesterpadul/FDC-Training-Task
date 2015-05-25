<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html>
<html ng-app="">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    
    <?php 
        if(count($header_styles)!==0):
            foreach($header_styles as $style):
                echo "<link rel='stylesheet' href='".$base_url.$style."'/>";
            endforeach;
        endif;    

        if(count($header_scripts)!==0):
            foreach($header_scripts as $script):
                echo "<script src='".$base_url.$script."' type='text/javascript'></script>";
            endforeach;
        endif;
    ?>
    
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    
</head>
<body>
    
    <?php if($landing_page===FALSE): ?>
    <!-- navbar -->
    <nav class="navbar navbar-default" role="navigation">

        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"></a>
        </div>
        
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Messages</a></li>
                <li><a href="#"><?= $session->read('profile')['name']; ?></a></li>
                <li><a href="<?php echo $base_url.'users/logout'; ?>">Logout</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
        
    </nav>
    <!-- /. -->
    <?php endif; ?>

    <!-- main container -->
    <div class='container'>
        
        <!-- flash data -->
        <?= $this->Flash->render() ?>
        <!-- /. -->
        
        <!-- content -->
        <div class="row">
            <div class="col-xs-12">
                <?= $this->fetch('content') ?>
            </div>
        </div>
        <!-- /. -->
        
    </div>
    <!-- end of container -->

</body>
</html>
