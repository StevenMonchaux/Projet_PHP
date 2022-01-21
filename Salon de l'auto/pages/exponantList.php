<?php 
require_once '../includes/header.php';
require_once '../includes/banner.php';
require_once '../includes/navBar.php';
require_once '../controllers/contactCtrl.php';
?>

<div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Nos exposants</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Activités</th>
                            <th scope="col">Stand</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>31 Corporate</td>
                            <td>Produits chimiques pour réparation de pneus</td>
                            <td>Stand 2F</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Abrites</td>
                            <td>Diagnostic automobile</td>
                            <td>Stand 2E</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Accor lubrifiants</td>
                            <td>Lubrifiants</td>
                            <td>Stand 4D</td>
                        </tr>
                        <th scope="row">2</th>
                        <td>Actia</td>
                        <td>Diagnostic et réparations</td>
                        <td>Stand 3B</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php require_once '../includes/footer.php'; ?>