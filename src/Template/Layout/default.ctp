<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css(['bootstrap.css', 'https://unpkg.com/aos@2.3.1/dist/aos.css','style.css','font-awesome.min','https://fonts.googleapis.com/css?family=Dancing+Script|Vibes&display=swap" rel="stylesheet', 'https://fonts.googleapis.com/css?family=Saira+Stencil+One&display=swap" rel="stylesheet','https://fonts.googleapis.com/css?family=Black+Ops+One&display=swap" rel="stylesheet','maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js']) ?>
    <?= $this->Html->css('maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css' ) ?>
    <?= $this->Html->script(['jquery-3.3.1.min.js','https://unpkg.com/aos@2.3.1/dist/aos.js','bootstrap.min','//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js','https://fonts.googleapis.com/css?family=Audiowide&display=swap','https://kit.fontawesome.com/8e61cfa57b.js']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>

<body>
   <?= $this->element('menu') ?>
    <?= $this->Flash->render() ?>
    <div class="">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
