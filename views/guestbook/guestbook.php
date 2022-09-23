<?php require __DIR__ . "/../layout/header.php"; ?>
<main>
    <div class="px-4 py-2 text-center">
        <h1 class="display-5 fw-bold">Gästebuch</h1>
        <div class="col-lg-6 mx-auto mt-4">
            <form method="post" action="">
                <div class="form-group mt-3">
                    <label for="author" class="control-label col-md-3">Namen eingeben:</label>
                    <input id="author" name="author" class="form-control">
                </div>

                <div class="form-group">
                    <label for="content" class="control-label col-md-3">Kommentar eingeben:</label>
                    <textarea id="content" name="content" class="form-control"></textarea>
                </div>
                <input type="submit" value="Kommentar hinzufügen" class="btn btn-primary mb-5"/>
            </form>


            <div class="list-group">
                <?php foreach ($guestbookEntrys as $entry): ?>
                    <div class="card text-center mb-4">
                        <div class="card-header">
                            <?php echo $entry['author'];?> schrieb:
                        </div>
                        <div class="card-body">
                            <p class="card-text"><?php echo $entry['content'];?></p>
                        </div>
                        <div class="card-footer text-muted">
                           am <?php echo date('d.m.Y H:i:s', $entry['timestamp']);?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</main>
<?php require __DIR__ . "/../layout/footer.php"; ?>
