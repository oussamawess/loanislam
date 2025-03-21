<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulation de prêt</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .simulation-container {
            background-color: #fff;
            padding: 20px;
            width: 80%;

            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .slider-container,
        .radio-container,
        .taeg,
        .monthly-payment,
        .total-amount {
            margin-bottom: 5px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="range"] {
            width: 100%;
        }

        .slider-values {
            text-align: right;
        }

        .radio-container p {
            margin: 0;
            font-weight: bold;
        }

        .radio-container input {
            margin-right: 5px;
        }

        .taeg {
            font-weight: bold;
            color: #555;
        }

        .taeg span {
            color: #4f84c4;
        }

        .monthly-payment {
            font-weight: bold;
            font-size: 18px;
        }

        .monthly-payment span {
            color: #333;
        }

        .total-amount {
            font-weight: bold;
            color: #4f84c4;
            font-size: 16px;
        }

        .loan-button {
            width: 100%;
            padding: 10px;
            background-color: #4f84c4;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .loan-button:hover {
            background-color: #28c87a;
        }

        .radio-container {
            display: flex;
            /* Use flexbox to align items in a row */
            align-items: center;
            /* Center items vertically */
        }

        .radio-container input {
            margin-left: 10px;
            /* Add some space between the radio and label */
            margin-right: 5px;
            /* Add some space between radio buttons */
        }

        .radio-container label {
            margin-right: 15px;
            /* Space between labels */
            font-weight: normal;
            /* Normal font weight for labels */
        }

        .right-align {
            text-align: right;
        }

        .left-align {
            text-align: left;
        }

        @media (max-width: 600px) {

            /* Adjust the max-width as needed */
            .simulation-container {
                width: 100%;
            }
        }

        input[type='range'] {
            accent-color: #4f84c4;
        }

        .slider-values {
            text-align: right;
            width: 6em;
            float: right;
        }

        .slider-label {
            display: flex;
            /* Use flexbox to arrange items in a row */
            justify-content: space-between;
            /* Space between the label and value */
            align-items: center;
            /* Center items vertically */
        }

        .slider-label label {
            margin: 0;
            /* Remove default margin for the label */
        }

        .slider-values {
            flex-shrink: 0;
            /* Prevent the slider values from shrinking */
        }

        .slider-values {
            float: right !important;
            text-align: right;
            margin-right: -5em;
            width: 6em;
            float: right;
        }

        .slider-label label {
            margin: 0;
            /* Remove default margin for the label */
        }
    </style>
</head>

<body>
    <div class="simulation-container">
        <h1 style="display: inline-block; margin-right: 20px;margin-top: 0;">Votre simulation</h1>
        <div class="taeg" style="display: inline-block; text-align: right; float: right;">
            <p style="margin: -8px;">TAEG fixe :</p>
            <span style="padding-bottom:1em!important
            ">@7,75%</span>
        </div>


        <div class="slider-container">
            <div class="slider-label">
                <label for="montant" style="padding-bottom: 10px;">Montant souhaité</label>
                <div class="slider-values">
                    <span id="montant-val">150.000€</span>
                </div>
            </div>

            <input type="range" id="montant" min="50000" max="200000" step="1000" value="150000"
                oninput="updateMontant()">
        </div>

        <div class="slider-container">
            <div class="slider-label">
                <label for="duree">Durée de remboursement</label>
                <div class="slider-values" style="margin-right:0em;">
                    <span id="duree-val">12 Mois</span>
                </div>
            </div>

            <input type="range" id="duree" min="12" max="60" step="12" value="12" oninput="updateDuree()">
        </div>

        <div class="radio-container " style="text-align: left;">
            <p style="margin: 0;">Type de maison :</p>
            <input type="radio" id="neuve" name="type" value="Neuve" checked>
            <label for="neuve">Neuve</label>
            <input type="radio" id="ancienne" name="type" value="Ancienne">
            <label for="ancienne">Ancienne</label>
        </div>


        <div class="monthly-payment" style="text-align: center;">
            <p style="display: inline; margin: 0; font-weight: bold;">Vos mensualités :</p>
            <span id="monthly-amount" style="display: inline; margin-left: 5px; font-weight: bold;">200,32 € /
                mois</span>
        </div>

        <div class="total-amount" style="text-align: center;">
            <p style="display: inline; margin: 0; font-weight: bold;">Montant total du :</p>
            <span id="total-amount" style="display: inline; margin-left: 5px; font-weight: bold;">170.000€</span>
        </div>


        <button class="loan-button" onclick="demanderPret()">Demander ce prêt</button>
    </div>

    <script src="script.js"></script>
    <script>
        function updateMontant() {
            const montant = document.getElementById("montant").value;
            document.getElementById("montant-val").textContent = montant.toLocaleString() + "€";
            updateSimulation();
        }

        function updateDuree() {
            const duree = document.getElementById("duree").value;
            document.getElementById("duree-val").textContent = duree + " Mois";
            updateSimulation();
        }

        function updateSimulation() {
            const montant = document.getElementById("montant").value;
            const duree = document.getElementById("duree").value;
            const taux = 7.75 / 100; // 7.75% fixed TAEG

            const mensualite = (montant * taux / 12) / (1 - Math.pow(1 + taux / 12, -duree));
            document.getElementById("monthly-amount").textContent = mensualite.toFixed(2) + " € / mois";

            const total = mensualite * duree;
            document.getElementById("total-amount").textContent = total.toFixed(2) + "€";
        }

        function demanderPret() {
            // Get the values from the form
            const montant = document.getElementById("montant").value;
            const duree = document.getElementById("duree").value;
            const typeMaison = document.querySelector('input[name="type"]:checked').value;

            // Calculate the total amount again to ensure it's up to date
            const taux = 7.75 / 100; // 7.75% fixed TAEG
            const mensualite = (montant * taux / 12) / (1 - Math.pow(1 + taux / 12, -duree));
            const total = mensualite * duree;

            // Create a URL with the data as parameters
            const url = `stepper.php?montant=${montant}&duree=${duree}&typeMaison=${typeMaison}&total=${total.toFixed(2)}`;

            // Open the new page with the data
            window.open(url, '_blank');
        }
    </script>
</body>

</html>