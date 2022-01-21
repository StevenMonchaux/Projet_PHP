<?php 
require_once '../includes/header.php';
require_once '../includes/navBar.php';
require_once '../controllers/registerCtrl.php';
?>
<style>
    body {
        background-image: url('../assets/img/salon.jpg');
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
    <div class="wrapper">
        <div class="form-left">
            <h2 class="text-uppercase">information</h2>
            <p>Afin de participer au festival de l'automobile 2022, Veuillez renseigner toutes les informations si contre. </p>
        </div>
        <form class="form-right" method="POST">
            <h2 class="text-uppercase">Inscription</h2>
            <div class="row">
                <div class="col-sm-6 mb-3"> <label>Nom</label> <input type="text" name="first_name" id="first_name" placeholder="Dupont" class="input-field">
                <div id ="messagefirst_name"></div>
            </div>
                <div class="col-sm-6 mb-3"> <label>Prénom</label> <input type="text" name="last_name" id="last_name" placeholder="Jean" class="input-field"> </div>
                <div id ="messagelast_name"></div>
            </div>
            <div class="mb-3"> <label>Email</label> <input type="email" class="input-field" name="email" placeholder="jean.dupon@lamanu.fr" required> </div>
            <p class="text-danger" ><?= @$formErrors['email'] ?></p>
            <div class="col-sm-6 mb-3"> <label>Numéros de téléphone</label> <input type="text" name="phoneNumber" id="phoneNumber" placeholder="06 25 35 98 58" class="input-field"> </div>
            <div id ="messagePhoneNumber"></div>
            <p class="text-danger" ><?= @$formErrors['phoneNumber'] ?></p>

            <div><label for="gender" class="form-label">vous êtes ?</label>
                <select name="gender" id="gender" class="form-select <?= isset($formErrors['gender']) ? 'is-invalid' : '' ?>">
                    <option disabled selected>Choisissez</option>
                    <option value="Exposant" <?= isset($_POST['gender']) && $_POST['gender'] == 'Exposant' ? 'selected' : '' ?>>Exposant</option>
                    <option value="Visiteur" <?= isset($_POST['gender']) && $_POST['gender'] == 'Visiteur' ? 'selected' : '' ?>>Visiteur</option>
                </select>
            </div>
            <p class="text-danger" ><?= @$formErrors['gender'] ?></p>
            <div id="formCategory" style="display:none;">
                <label for="category" class="form-label">Type d'exposition:</label>
                <select name="category" id="category" class="form-select <?= isset($formErrors['category']) ? 'is-invalid' : '' ?>">
                    <option disabled selected>Choisissez</option>
                    <option value="Concept" <?= isset($_POST['category']) && $_POST['category'] == 'Concept' ? 'selected' : '' ?>>Concept Cars</option>
                    <option value="newModel" <?= isset($_POST['category']) && $_POST['category'] == 'newModel' ? 'selected' : '' ?>>nouveau modèle</option>
                    <option value="Custom" <?= isset($_POST['category']) && $_POST['category'] == 'Custom' ? 'selected' : '' ?>>Customisation</option>

                </select>
            </div>
            <p class="text-danger" ><?= @$formErrors['category'] ?></p>
            <div><label for="day" class="form-label">Durée de la participation:</label>
                <select name="day" id="day" class="form-select <?= isset($formErrors['day']) ? 'is-invalid' : '' ?>">
                    <option disabled selected>Choisissez</option>
                    <option value="1Day" <?= isset($_POST['day']) && $_POST['day'] == '1Day' ? 'selected' : '' ?>>1 Jour</option>
                    <option value="2Days" <?= isset($_POST['day']) && $_POST['day'] == '2Day' ? 'selected' : '' ?>>2 Jours</option>
                </select>
            </div>
            <p class="text-danger" ><?= @$formErrors['day'] ?></p>
            <div id="nameExposant" class="col-sm-6 mb-3" style="display:none;"> <label>Nom de l'exposant</label> <input type="text" name="nameExposant" placeholder="ex: Ferrari" class="input-field"> </div>
            <p class="text-danger" ><?= @$formErrors['nameExposant'] ?></p>
            <div class="form-field"> <input type="submit" value="S'inscrire" class="register" name="register"> </div>
        </form>
    </div>
<script src="../assets/js/registerScript.js"></script>
