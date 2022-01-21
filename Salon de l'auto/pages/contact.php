<?php 
require_once '../includes/header.php';
require_once '../includes/navBar.php';
require_once '../controllers/contactCtrl.php';
?>
<style>
    body {
        background-image: url('../assets/img/salon.jpg');
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>

<div class="container">
        <div class="row">
            <div class="col-12">
                <div class="wrapper">

                    <?php if (count($_POST) == 0 || count($formErrors) > 0) { ?>

                        <form class="form-right" method="POST" action="contact.php">
                            <h2 class="text-uppercase">Formulaire de contact</h2>
                            </br>
                            <div class="row">

                                <div class="col-sm-6 mb-3">

                                    <label>Prénom</label>
                                    <input type="text" name="first_name" id="first_name" placeholder="Dupont" class="input-field form-control <?= isset($formErrors['first_name']) ? 'is-invalid' : ''; ?> ">
                                    <div id ="messagefirst_name"></div>
                                    <?php if (isset($formErrors['first_name'])) { ?>
                                        <p class="invalid-feedback"><?= $formErrors['first_name']; ?></p>
                                    <?php } ?>
                                </div>


                                <div class="col-sm-6 mb-3">
                                    <label>Nom</label>
                                    <input type="text" name="last_name" id="last_name" placeholder="Jean" class="input-field form-control <?= isset($formErrors['last_name']) ? 'is-invalid' : ''; ?> ">
                                    <div id ="messagelast_name"></div>
                                    <?php if (isset($formErrors['last_name'])) { ?>
                                        <p class="invalid-feedback"><?= $formErrors['last_name']; ?></p>
                                    <?php } ?>
                                </div>

                            </div>

                            <div class="mb-3">
                                <label>Email</label>
                                <input type="email" class="input-field form-control <?= isset($formErrors['email']) ? 'is-invalid' : ''; ?>" name="email" placeholder="jean.dupon@lamanu.fr" required>
                                <?php if (isset($formErrors['email'])) { ?>
                                    <p class="invalid-feedback"><?= $formErrors['email']; ?></p>
                                <?php } ?>
                            </div>

                            <div class="col-sm-6 mb-3">
                                <label>Numéros de téléphone</label>
                                <input type="text" name="phonenumber" id="phonenumber" placeholder="06 25 35 98 58" class="input-field form-control <?= isset($formErrors['phonenumber']) ? 'is-invalid' : ''; ?> ">
                                <div id ="messagephonenumber"></div>
                                <?php if (isset($formErrors['phonenumber'])) { ?>
                                <p class="invalid-feedback"><?= $formErrors['phonenumber']; ?></p>
                            <?php } ?>
                            </div>

                            <div class="form-group">
                                <label for="bio">Message</label>
                                <textarea  name="message" class="input-field form-control <?= isset($formErrors['message']) ? 'is-invalid' : ''; ?> "></textarea>
                                </br>
                                <?php if (isset($formErrors['message'])) { ?>
                                <p class="invalid-feedback"><?= $formErrors['message']; ?></p>
                            <?php } ?>
                                <div class="form-field"><input type="submit" value="Envoyer" class="register" name="register"></div>
                            </div>
                        </form>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>


    <script src="../assets/js/script.js"></script>

<?php require_once '../includes/footer.php'; ?>