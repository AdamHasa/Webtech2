<h1>Maak een account</h1>
<?php $form = \app\core\form\Form::begin('', "post") ?>
    <?php echo $form->field($model, 'firstname') ?>
    <?php echo $form->field($model, 'lastname') ?>
    <?php echo $form->field($model, 'email') ?>
    <?php echo $form->field($model, 'password') ?>
    <?php echo $form->field($model, 'confirmPassword') ?>

    <button type="submit" class="btn btn-primary">Maak mijn account aan</button>
<?php \app\core\form\Form::end() ?>
<!--<form action="" method="post">
    <div class="row">
        <div class="col">
            <div class="mb-3">
                <label>Voornaam</label>
                <input type="text" name="firstname" value="<?php /*echo $model->firstname */?>"
                       class="form-control<?php /*echo $model->hasError('firstname') ? 'is-invalid' : ''*/?>">
                <div class ="invalid-feedback">
                    <?php /*echo $model->getFirstError('firstname') */?>
                </div>
                </div>
        </div>
        <div class="col">
            <div class="mb-3">
                <label>Achternaam</label>
                <input type="text" name="lastname" class="form-control">
            </div>
        </div>
    </div>
    <div class="mb-3">
        <label>E-mailadres</label>
        <input type="text" name="email" class="form-control">
    </div>
    <div class="mb-3">
        <label>Wachtwoord</label>
        <input type="password" name="password" class="form-control">
    </div>
    <div class="mb-3">
        <label>Bevestig wachtwoord</label>
        <input type="password" name="confirmPassword" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Maak mijn account aan</button>
</form>-->