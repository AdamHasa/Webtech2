<h1>Maak een account</h1>

<?php
echo '<pre>';
var_dump($errors);
echo '</pre>';
exit;
?>

<form action="" method="post">
    <div class="row">
        <div class="col">
            <div class="mb-3">
                <label>Voornaam</label>
                <input type="text" name="firstname" class="form-control">
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
</form>