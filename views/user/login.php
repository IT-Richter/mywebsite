<?php require __DIR__ . "/../layout/header.php"; ?>

<br/>
<br/>
<main>
    <div class="px-4 py-2 text-center">
        <div class="col-lg-3 mx-auto">
            <form method="POST" class="form-horizontal">
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input type="text" id="username" name="username" class="form-control"/>
                    <label class="form-label" for="username">Benutzername</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <input type="password" id="password" name="password" class="form-control"/>
                    <label class="form-label" for="password">Passwort</label>
                </div>

                <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4">
                    <div class="col d-flex justify-content-center">
                        <!-- Checkbox -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked/>
                            <label class="form-check-label" for="form2Example31"> Remember me </label>
                        </div>
                    </div>

                    <div class="col">
                        <!-- Simple link -->
                        <a href="">Forgot password?</a>
                    </div>
                </div>

                <!-- Submit button -->
                <input type="submit" value="Einloggen" class="btn btn-primary mb-4"/>

                <!-- Register buttons -->
                <div class="text-center">
                    <p>Not a member? <a href="">Register</a></p>

                </div>
            </form>

        </div>
    </div>
</main>
<?php require __DIR__ . "/../layout/footer.php"; ?>
