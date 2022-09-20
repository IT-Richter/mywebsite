<?php require __DIR__ . "/../layout/header.php"; ?>
<main>
    <article>
        <div class="container px-4 py-5" id="featured-3">
            <h2 class="pb-2 border-bottom">Abgeschlossene Projekte</h2>
            <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                <div class="feature col">
                    <h3 class="fs-2">Was ziehe ich an?</h3>
                    <p class="lead mb-4">Android APP. Geplant und erstellt von mir während meines Praktikums bei <a class="lead mb-4"
                                href="https://www.liebenow.it/"> Liebenow IT</a>. Realisiert mit React Native und Expo.</p>
                    <a href="https://play.google.com/store/apps/details?id=it.liebenow.Waszieheichan&gl=DE"
                       class="icon-link d-inline-flex align-items-center">
                        Link to Google Play Store
                    </a>
                </div>
                <div class="feature col">
                    <h3 class="fs-2">IHK-Abschlussprojekt</h3>
                    <p class="lead mb-4">Meine Dokumentation des IHK-Abschlussprojektes. Realisiert mit Laravel</p>
                    <a href="src\data\Dokumentation_Kai_Richter.pdf"
                       class="icon-link d-inline-flex align-items-center">
                        PDF öffnen
                    </a>
                </div>
                <div class="feature col">
                    <h3 class="fs-2">APP für die IHK Prüfer (Fachinformatiker)</h3>
                    <p class="lead mb-4">Eingabe von Prüfungsnoten und anschließender Ausgabe ob der Prüfling bestanden, nicht
                        bestanden hat oder ob eine Nachprüfung möglich ist.</p>
                </div>
            </div>
        </div>
    </article>

</main>

<?php require __DIR__ . "/../layout/footer.php"; ?>
