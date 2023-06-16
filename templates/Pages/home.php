<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.10.0
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;

$this->disableAutoLayout();

$checkConnection = function (string $name) {
    $error = null;
    $connected = false;
    try {
        $connection = ConnectionManager::get($name);
        $connected = $connection->connect();
    } catch (Exception $connectionError) {
        $error = $connectionError->getMessage();
        if (method_exists($connectionError, 'getAttributes')) {
            $attributes = $connectionError->getAttributes();
            if (isset($attributes['message'])) {
                $error .= '<br />' . $attributes['message'];
            }
        }
    }

    return compact('connected', 'error');
};

if (!Configure::read('debug')):
    throw new NotFoundException(
        'Please replace templates/Pages/home.php with your own version or re-enable debug mode.'
    );
endif;

?>
<!DOCTYPE html>
<html>

<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        CakePHP: the rapid development PHP framework:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake', 'home']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>

<body>
    <header>
        <div class="container text-center">
            <a href="https://cakephp.org/" target="_blank" rel="noopener">
                <img alt="CakePHP" src="https://cakephp.org/v2/img/logos/CakePHP_Logo.svg" width="350" />
            </a>
            <h1 style="font-size: 36px; font-weight: bold; margin-top: 30px;">Selamat Datang di App Vansky Hospital</h1>
            <p style="font-size: 20px;">Vansky Hospital adalah Aplikasi sederhana untuk mengelola data pasien. Aplikasi
                ini memiliki beberapa fitur, yaitu ::</p>

            <br>

            <style>
                .button {
                    transition-duration: 0.3s;
                }

                .button:hover {
                    transform: scale(1.1);
                }
            </style>

            <div class="button-container">
                <div class="row">
                    <div class="column">
                        <?= $this->Html->link('Daftar seluruh Pasien', ['controller' => 'pasien', 'action' => 'index'], ['class' => 'button', 'style' => 'background-color: #e74c3c; width: 450px']) ?>
                    </div>
                    <div class="column">
                        <?= $this->Html->link('Tambah pasien baru', ['controller' => 'pasien', 'action' => 'add'], ['class' => 'button', 'style' => 'background-color: #e74c3c; width: 450px']) ?>
                    </div>
                </div>
            </div>
            <div class="button-container">
                <div class="row">
                    <div class="column">
                        <?= $this->Html->link('Daftar seluruh Dokter', ['controller' => 'dokter', 'action' => 'index'], ['class' => 'button', 'style' => 'background-color: #3498db; width: 450px']) ?>
                    </div>
                    <div class="column">
                        <?= $this->Html->link('Tambah dokter baru', ['controller' => 'dokter', 'action' => 'add'], ['class' => 'button', 'style' => 'background-color: #3498db; width: 450px']) ?>
                    </div>
                </div>
            </div>

            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    var buttons = document.getElementsByClassName("button");

                    for (var i = 0; i < buttons.length; i++) {
                        buttons[i].addEventListener("click", function () {
                            this.classList.add("clicked");
                            var button = this;
                            setTimeout(function () {
                                button.classList.remove("clicked");
                            }, 300);
                        });
                    }
                });
            </script>

        </div>
    </header>