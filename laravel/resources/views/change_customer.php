<?php
require_once ('header.php');
require_once ('nav.php');

?>

<section>
    <div class="container">
        <h2 class="subhead">Klant wijzigen</h2>

        <form action="">
            <h4 class="subhead">Persoonlijke informatie:</h4>
            <div class="form-group">
                <label for="name">Voornaam:*</label>
                <input type="text" id="name" placeholder="Voer hier uw eigen naam in." value="IMPORT FROM DATABASE" required>
            </div>
            <div class="form-group">
                <label for="preposition">Tussenvoegsel:</label>
                <input type="text" id="preposition" placeholder="Voeg hier indien mogelijk uw tussenvoegsel in." value="IMPORT FROM DATABASE">
            </div>
            <div class="form-group">
                <label for="lastname">Achternaam:*</label>
                <input type="text" id="lastname" placeholder="Voeg hier uw achternaam in." value="IMPORT FROM DATABASE" required>
            </div>

            <h4 class="subhead">Bedrijsinformatie:</h4>
            <div class="form-group">
                <label for="company">Bedrijfsnaam:*</label>
                <input type="text" id="company" placeholder="Voer hier uw bedrijfsnaam in." value="IMPORT FROM DATABASE" required>
            </div>
            <div class="form-group">
                <label for="phone">Telefoon nummer:*</label>
                <input type="text" id="phone" placeholder="Voer hier uw telefoon nummer in." value="IMPORT FROM DATABASE" required>
            </div>
            <div class="form-group">
                <label for="establishment">Vestiging:*</label>
                <input type="text" id="establishment" placeholder="Voer hier uw vestiging in." value="IMPORT FROM DATABASE" required>
            </div>
            <div class="form-group">
                <label for="zipcode">Postcode:*</label>
                <input type="text" id="zipcode" placeholder="Voer hier uw postcode in." value="IMPORT FROM DATABASE" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail:*</label>
                <input type="email" id="email" placeholder="Voer hier uw vestiging in." value="IMPORT FROM DATABASE" required>
            </div>

            <h4 class="subhead">Project informatie</h4>
            <div class="form-group">
                <label for="project">Project naam:*</label>
                <input type="text" id="project" placeholder="Voer hier uw project naam in." value="IMPORT FROM DATABASE" required>
            </div>
            <div class="form-group">
                <label for="amount">Hoeveelheid achterstand:*</label>
                <input type="text" id="amount" placeholder="Voer hier uw limiet in." value="IMPORT FROM DATABASE" required>
            </div>
            <div class="form-group">
                <label for="comment">Opmerking:</label>
                <input type="text" id="comment" placeholder="Voer hier uw opmerking naam in." value="IMPORT FROM DATABASE">
            </div>
            <div class="form-group">
                <input class="submit" type="submit" value="toevoegen">
            </div>
        </form>
    </div>
</section>

<?php
require_once ('footer.php');

?>
