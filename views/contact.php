<h1>Contact</h1>

<form action="" method="POST">
    <p>Vous avez un problème technique ? Faites un ticket IT et nous vous répondrons dès que possible.</p>
    <label for="employeID">ID employé.e: </label>
    <input type="text" name="employeID" id="employeID" required><br>

    <label for="email">Email: </label>
    <input type="email" id="email" name="email" required><br>

    <label for="number">Numéro de téléphone: </label>
    <input type="tel" id="number" name="number" required><br>

    <label for="problemDate">Date et heure d'apparition du problème: </label>
    <input type="datetime-local" id="problemDate" name="problemDate"><br>

    <label for="urgence">Niveau d'urgence: </label>
    <select name="urgence" id="urgence" required>
        <option value="">--Choicissez une option--</option>
        <option value="low">Faible</option>
        <option value="meddium">Moyen</option>
        <option value="high">Elevé</option>
    </select><br>

    <label for="responsable-choice">Nom de votre responsable: </label>
    <input type="text" list="responsable-options" id="responsable-choice" name="responsable-choice"><br>
    <datalist id="responsable-options">
        <?php
        foreach ($datalist as $row) { ?>
            <!-- trois façon d'intégrer du php et html
                    echo "<option value='$row'>"; PREFERABLE
                    echo "<option value='" .$row. "'>"; -->
                    <option value="<?= $row ?>">
            <?php } ?>
    </datalist>

    <label for="message">Description du problème: </label>
    <textarea id="message" name="message" row="10" cols="35" required></textarea><br>

    <label for="piece">Ajout d'une pièce jointe (optionnel)</label>
    <input type="file" id="piece" name="piece"><br>

    <input type="hidden" id="csrf_token" value="123456789456" name="csrf_token">

    <input type="submit" value="Envoyer">
    <input type="reset" value="Reset">
</form>