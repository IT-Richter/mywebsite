<?php require __DIR__ . "/../layout/header.php"; ?>

<br />
<br />

<?php if (!empty($error)): ?>
    <p>
        Die Kombination aus Benutzername und Passwort ist falsch.
    </p>
<?php endif; ?>

<form method="POST" class="form-horizontal">
    <div class="form-group">
        <label for="username" class="control-label col-md-3">
            Benutzername:
        </label>
        <div class="col-md-9">
            <input id="username" type="text" name="username" class="form-control" />
        </div>
    </div>
    <div class="form-group">
        <label for="password" class="control-label col-md-3">
            Passwort:
        </label>
        <div class="col-md-9">
            <input id="password" type="password" name="password" class="form-control" />
        </div>
    </div>

    <input type="submit" value="Einloggen" class="btn btn-primary" />
</form>

<?php require __DIR__ . "/../layout/footer.php"; ?>
