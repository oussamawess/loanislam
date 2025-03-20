<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Favicon icon-->
  <!-- <link rel="shortcut icon" type="image/png" href="../assets/images/logos/loanislam.png" width="16" height="auto" /> -->

  <link rel="icon" type="image/png" href="../assets/images/logos/favicon-96x96.png" sizes="96x96" />
  <link rel="icon" type="image/svg+xml" href="../assets/images/logos/favicon.svg" />
  <link rel="shortcut icon" href="../assets/images/logos/favicon.ico" />
  <link rel="apple-touch-icon" sizes="180x180" href="../assets/images/logos/apple-touch-icon.png" />
  <link rel="manifest" href="../assets/images/logos/site.webmanifest" />

  <!-- Core Css -->
  <link rel="stylesheet" href="../assets/css/styles.css" />

  <title>Loanislam</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .step {
      display: none;
    }

    .step.active {
      display: block;
    }

    .error-message {
      color: red;
      font-size: 12px;
      display: none;
      /* Hide by default */
    }

    /* Add your custom CSS here */
    .flex-container {
      display: flex;
    }

    .flex-check,
    .flex-title {
      flex: 1;
    }

    body {
      font-family: "aktiv-grotesk-std", sans-serif;
      font-style: normal;
      font-weight: 400;
      text-rendering: optimizeLegibility;
      -webkit-font-smoothing: antialiased;
    }

    .c-selection {
      box-sizing: border-box;
      align-items: center;
      display: flex;
      justify-content: space-between;
      width: auto;
      margin: 60px auto;
    }

    .c-selection-card {
      border: 2px solid #D6DDE3;
      border-radius: 4px;
      padding: 15px;
      cursor: pointer;
      box-sizing: border-box;
      max-width: 100%;
      min-width: 0;
      flex: 1;
    }

    .c-selection-card__heading {
      color: #394956;
      font-size: 12px;
      letter-spacing: 1.85px;
      text-transform: uppercase;
    }

    .c-selection-card__price {
      color: #394956;
      display: flex;
      flex-direction: row;
      align-items: center;
      font-size: 32px;
      font-weight: 500;
    }

    .c-selection-card__footer {
      display: flex;
      justify-content: space-between;
      padding-top: 20px;
    }

    .c-selection-card__body {
      align-items: center;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .c-selection-card__currency {
      font-size: 20px;
      margin-top: -4px;
    }

    .c-selection-card__frequency {
      color: #93A1AF;
      font-size: 12px;
    }

    .c-selection-card:hover {
      background-color: rgba(0, 0, 0, .025);
      transition: all .1s ease-in-out;
    }

    .c-selection-card.selected {
      border: 2px solid #3096D5;
      transition: all 0.5s ease;
    }

    .selection-gap>* {
      /* margin-left: 20px; */
      margin: 10px;
    }

    input[type='radio'] {
      height: 0;
      width: 0;
      display: none;
    }

    input[type='radio']+label {
      font-size: 24px;
      position: relative;
      cursor: pointer;
      display: flex;
      margin: 0;
      align-items: center;
      color: #9e9e9e;
      transition: color 250ms cubic-bezier(.4, .0, .23, 1);
    }

    input[type='radio']+label>.control__indicator {
      box-sizing: border-box;
      display: flex;
      justify-content: center;
      align-items: center;
      margin-right: 1em;
      width: 1em;
      height: 1em;
      background: transparent;
      border: 2px solid #D6DDE3;
      border-radius: 2px;
      cursor: pointer;
      transition: all 250ms cubic-bezier(.4, .0, .23, 1);
    }

    input[type='radio']+label:hover,
    input[type='radio']:focus+label {
      color: #fff;
    }

    input[type='radio']+label:hover>.control__indicator,
    input[type='radio']:focus+label>.control__indicator {
      background: rgba(255, 255, 255, .1);
    }

    input[type='radio']:checked+label>.control__indicator {
      border: .5em solid #3096D5;
      animation: shrink-bounce 200ms cubic-bezier(.4, .0, .23, 1);
    }

    input[type='radio']:checked+label>.control__indicator:before {
      content: "";
      position: absolute;
      top: 0.4em;
      left: .18em;
      border-right: 3px solid transparent;
      border-bottom: 3px solid transparent;
      transform: rotate(45deg);
      transform-origin: 0% 100%;
      animation: checkbox-check 100ms 200ms cubic-bezier(.4, .0, .23, 1) forwards;
    }

    @keyframes shrink-bounce {
      0% {
        transform: scale(1);
      }

      33% {
        transform: scale(.85);
      }

      100% {
        transform: scale(1);
      }
    }

    @keyframes checkbox-check {
      0% {
        width: 0;
        height: 0;
        border-color: #fff;
        transform: translate3d(0, 0, 0) rotate(45deg);
      }

      33% {
        width: .2em;
        height: 0;
        transform: translate3d(0, 0, 0) rotate(45deg);
      }

      100% {
        width: .2em;
        height: .5em;
        border-color: #fff;
        transform: translate3d(0, -.5em, 0) rotate(45deg);
      }
    }

    .footer-item-right {
      color: #9B9B9B;
      font-size: 12px;
      margin-right: 10px;
    }

    .footer-item-left {
      color: #4BC27D;
      font-weight: 500;
      font-size: 12px;
      margin-left: 10px;
    }

    .text-grey {
      color: #9B9B9B;
      font-weight: 400;
    }

    @media (max-width: 768px) {
      .c-selection {
        flex-direction: column;
      }

      .c-selection-card {
        width: 100%;
      }
    }
  </style>
</head>

<body>
  <!-- Preloader -->
  <div class="preloader">
    <img src="../assets/images/logos/loanislam.png" alt="loader" class="lds-ripple img-fluid" />
  </div>
  <div id="main-wrapper">
    <div
      class="position-relative overflow-hidden auth-bg min-vh-100 w-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100 my-5 my-xl-0">
          <div class="col-md-9 d-flex flex-column justify-content-center">
            <div class="card mb-0 bg-body auth-login m-auto w-100">
              <div class="row gx-0">
                <!-- ------------------------------------------------- -->

                <!-- Stepper -->
                <div class="container my-4">
                  <div class="stepper">
                    <form id="multiStepForm" method="POST" action="process_form.php" enctype="multipart/form-data">
                      <!-- Step 1 -->
                      <div class="container mt-5">
                        <div class="step active" id="step1">
                          <h3>Sélectionnez le nombre de personnes</h3>
                          <div class="c-selection selection-gap">
                            <div class="c-selection-card js-1person">
                              <div class="c-selection-card__header">
                                <div class="flex-container">
                                  <div class="flex-check">
                                    <input id="1person" name="1person" class="c-selection-card__selector" type="radio"
                                      value="1" />
                                    <label for="1person">
                                      <div class="control__indicator"></div>
                                    </label>
                                  </div>
                                  <div class="center">
                                    <div class="c-selection-card__heading">
                                      1 Personne
                                    </div>
                                  </div>
                                  <div class="flex-title"></div>
                                </div>
                              </div>
                              <div class="c-selection-card__body">
                                <div class="c-selection-card__price">
                                  <iconify-icon icon="material-symbols:person" width="1.2em" height="1.2em"
                                    style="color: #22825d"></iconify-icon>
                                </div>
                                <!-- <div class="c-selection-card__frequency">
                                  text text
                                </div> -->
                              </div>
                              <div class="c-selection-card__footer">
                                <!-- <div class="footer-item-left">text text</div>
                                <div class="footer-item-right">text text</div> -->
                              </div>
                            </div>

                            <div class="c-selection-card js-2persons">
                              <div class="c-selection-card__header">
                                <div class="flex-container">
                                  <div class="flex-check">
                                    <input id="2persons" name="2person" class="c-selection-card__selector" type="radio"
                                      value="2" />
                                    <label for="2persons">
                                      <div class="control__indicator"></div>
                                    </label>
                                  </div>
                                  <div class="center">
                                    <div class="c-selection-card__heading">
                                      2 Personnes
                                    </div>
                                  </div>
                                  <div class="flex-title"></div>
                                </div>
                              </div>
                              <div class="c-selection-card__body">
                                <div class="c-selection-card__price">
                                  <iconify-icon icon="material-symbols:group" width="1.2em" height="1.2em"
                                    style="color: #22825d"></iconify-icon>
                                </div>
                                <!-- <div class="c-selection-card__frequency">
                                  text text
                                </div> -->
                              </div>
                              <div class="c-selection-card__footer">
                                <!-- <div class="footer-item-left text-grey">text text</div>
                                <div class="footer-item-right">text text</div> -->
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>


                      <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                      <script>
                        $(document).ready(function() {
                          $(".js-1person").click(function() {
                            $("#1person").prop("checked", true);
                            $("#2persons").prop("checked", false);

                            $('.js-1person').addClass('selected');
                            $('.js-2persons').removeClass('selected');
                          });

                          $(".js-2persons").click(function() {
                            $("#1person").prop("checked", false);
                            $("#2persons").prop("checked", true);

                            $('.js-1person').removeClass('selected');
                            $('.js-2persons').addClass('selected');
                          });
                        });
                      </script> -->
                      <!-- Step 2 -->
                      <div class="step" id="step2">
                        <h3>Détails personnels</h3>
                        <!-- Add form fields for Person 1 -->
                        <div class="form-body p-3 border rounded col-12 col-md-12 col-lg-12">
                          <div class="d-flex align-items-center gap-6 mb-4 justify-content-between">
                            <span
                              class="round-48 d-flex align-items-center justify-content-center rounded bg-icons-dashboard">
                              <iconify-icon icon="solar:users-group-rounded-linear" width="2em" height="2em"
                                style="color: #22825d"></iconify-icon>
                            </span>
                            <h6 class="mb-0 fs-4 fw-medium" style="color: #22825d">Details</h6>
                          </div>

                          <div class="mb-3">
                            <div class="row align-items-center">
                              <!-- Age Label and Input -->
                              <label class="col-md-2 form-label">Nom</label>
                              <div class="col-md-4">
                                <input type="text" name="nom_client" class="form-control" placeholder="John" required>
                                <span class="invalid-feedback" style="display: none;">Ce champ est obligatoire.</span>
                              </div>

                              <!-- Phone Label and Input -->
                              <label class="col-md-2 form-label">prénom</label>
                              <div class="col-md-4">
                                <input type="text" name="prenom_client" class="form-control" placeholder="Doe" required>
                                <span class="invalid-feedback" style="display: none;">Ce champ est obligatoire.</span>
                              </div>
                            </div>
                          </div>

                          <div class="mb-3">
                            <div class="row align-items-center">
                              <!-- Age Label and Input -->
                              <label class="col-md-2 form-label">Age</label>
                              <div class="col-md-4">
                                <input type="number" name="age_client" class="form-control" placeholder="35 Ans" required>
                                <span class="invalid-feedback" style="display: none;">Ce champ est obligatoire.</span>
                              </div>

                              <!-- Phone Label and Input -->
                              <label class="col-md-2 form-label">Téléphone</label>
                              <div class="col-md-4">
                                <input type="text" name="telephone_client" class="form-control" placeholder="+1-202-555-0116" required>
                                <span class="invalid-feedback" style="display: none;">Ce champ est obligatoire.</span>
                              </div>
                            </div>
                          </div>


                          <div class="mb-3">
                            <div class="row align-items-center">
                              <!-- Age Label and Input -->
                              <label class="col-md-2 form-label">Statut</label>
                              <div class="col-md-4">
                                    <input type="text" name="statut_civil_client" class="form-control" placeholder="Célibataire" required>
                                    <span class="invalid-feedback" style="display: none;">Ce champ est obligatoire.</span>
                              </div>
                              <!-- <label class="col-md-2 form-label">Email</label>
                              <div class="col-md-4">
                                <input type="text" name="email_client" class="form-control" placeholder="john.doe@gmail.com" required>
                                <span class="invalid-feedback" style="display: none;">Ce champ est obligatoire.</span>
                              </div> -->

                              <!-- Phone Label and Input -->
                              <label class="col-md-2 form-label">Adresse</label>
                              <div class="col-md-4">
                                <input type="text" name="adresse_client" class="form-control"
                                  placeholder="12 rue de la Croissant. Appartement 3D. 56000" required>
                                <span class="invalid-feedback" style="display: none;">Ce champ est obligatoire.</span>
                              </div>
                            </div>
                          </div>

                          <div class="mb-3">
                            <div class="row align-items-center">
                              <!-- Age Label and Input -->
                              <label class="col-md-2 form-label">Profession</label>
                              <div class="col-md-4">
                                <input type="text" name="profession_client" class="form-control" placeholder="Ingénieur Informatique" required>
                                <span class="invalid-feedback" style="display: none;">Ce champ est obligatoire.</span>
                              </div>

                              <!-- Phone Label and Input -->
                              <label class="col-md-2 form-label">Salaire Brut</label>
                              <div class="col-md-4">
                                <input type="number" name="salaire_client" class="form-control" placeholder="3500€" required>
                                <span class="invalid-feedback" style="display: none;">Ce champ est obligatoire.</span>
                              </div>
                            </div>
                          </div>

                          <hr>

                          <div class="mb-3">
                            <div class="row align-items-center">
                              <!-- Age Label and Input -->
                              <label class="col-md-2 form-label">Montant souhaité</label>
                              <div class="col-md-4">
                                <input type="text" name="montant" class="form-control" placeholder="150.000€" id="montant"
                                  readonly>
                              </div>

                              <!-- Phone Label and Input -->
                              <label class="col-md-2 form-label">D.Remboursement</label>
                              <div class="col-md-4">
                                <input type="text" name="duree" class="form-control" placeholder="24 mois" id="duree"
                                  readonly>
                              </div>
                            </div>
                          </div>

                          <div class="mb-3">
                            <div class="row align-items-center">
                              <!-- Age Label and Input -->
                              <label class="col-md-2 form-label">Type de maison</label>
                              <div class="col-md-4">
                                <input type="text" name="typeMaison" class="form-control" placeholder="Neuve" id="typeMaison"
                                  readonly>
                              </div>

                              <!-- Phone Label and Input -->
                              <label class="col-md-2 form-label">Montant total dû</label>
                              <div class="col-md-4">
                                <input type="text" name="total" class="form-control" placeholder="170.000€" id="total"
                                  readonly>
                              </div>
                            </div>
                          </div>


                        </div>
                      </div>

                      <!-- Step 3 -->
                      <div class="step" id="step3">
                        <h3>Fichiers</h3>
                        <!-- Add form fields for Person 2 -->
                        <div class="form-body p-3 border rounded col-12 col-md-12 col-lg-12">
                          <div class="d-flex align-items-center gap-6 mb-4 justify-content-between">
                            <span
                              class="round-48 d-flex align-items-center justify-content-center rounded bg-icons-dashboard">
                              <iconify-icon icon="ic:outline-book" width="2em" height="2em"
                                style="color: #22825d"></iconify-icon>
                            </span>
                            <h6 class="mb-0 fs-4 fw-medium" style="color: #22825d">Documents</h6>
                          </div>

                          <div class="mb-3">
                            <div class="row align-items-center">
                              <!-- Age Label and Input -->
                              <label class="col-md-2 form-label">Fichier de paie</label>
                              <div class="col-md-4">
                                <input class="form-control" name="fichier_paie_client" type="file" id="formFile" required>
                                <span class="invalid-feedback" style="display: none;">Ce champ est obligatoire.</span>
                              </div>

                              <!-- Phone Label and Input -->
                              <label class="col-md-2 form-label">Attestation Salaire</label>
                              <div class="col-md-4">
                                <input class="form-control" name="attestation_salaire_client" type="file" id="formFile" required>
                                <span class="invalid-feedback" style="display: none;">Ce champ est obligatoire.</span>
                              </div>
                            </div>
                          </div>
                          <div class="mb-3">
                            <div class="row align-items-center">
                              <!-- Age Label and Input -->
                              <label class="col-md-2 form-label">Extrait Bancaire</label>
                              <div class="col-md-4">
                                <input class="form-control" name="extrait_salaire_client" type="file" id="formFile" required>
                                <span class="invalid-feedback" style="display: none;">Ce champ est obligatoire.</span>
                              </div>

                              <!-- Phone Label and Input -->
                              <label class="col-md-2 form-label">Contrat</label>
                              <div class="col-md-4">
                                <input class="form-control" name="contrat_client" type="file" id="formFile" required>
                                <span class="invalid-feedback" style="display: none;">Ce champ est obligatoire.</span>
                              </div>
                            </div>
                          </div>

                        </div>
                      </div>

                      <!-- Step 4 -->
                      <div class="step" id="step4">
                        <h3>les données du co-emprunteur</h3>
                        <!-- Add additional information fields -->
                        <div class="card">
                          <div class="card-body p-2">

                            <!-- <div class=" d-flex justify-content-center p-3 flex-lg-row flex-sm-column"> -->
                            <div class="d-flex flex-column justify-content-center flex-md-row flex-lg-row p-3">
                              <div class="form-body p-3 border rounded col-12 col-md-6 col-lg-7">
                                <div class="d-flex align-items-center gap-6 mb-4 justify-content-between">
                                  <span
                                    class="round-48 d-flex align-items-center justify-content-center rounded bg-icons-dashboard">
                                    <iconify-icon icon="solar:users-group-rounded-linear" width="2em" height="2em"
                                      style="color: #22825d"></iconify-icon>
                                  </span>
                                  <h6 class="mb-0 fs-4 fw-medium" style="color: #22825d">Details</h6>
                                </div>
                                <div class="mb-3">
                                  <div class="row align-items-center">
                                    <label class="col-lg-3 form-label">Nom, prénom</label>
                                    <div class="col-lg-9">
                                      <div class="row">
                                        <div class="col-md-6 mb-2 mb-md-0">
                                          <input type="text" name="nom_partner" class="form-control" placeholder="John" required>
                                          <span class="invalid-feedback" style="display: none;">Ce champ est obligatoire.</span>
                                        </div>
                                        <div class="col-md-6">
                                          <input type="text" name="prenom_partner" class="form-control" placeholder="Doe" required>
                                          <span class="invalid-feedback" style="display: none;">Ce champ est obligatoire.</span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="mb-3">
                                  <div class="row align-items-center">
                                    <label class="col-lg-3 form-label">Age</label>
                                    <div class="col-lg-9">
                                      <div class="row">
                                        <div class="col-md-12 mb-2 mb-md-0">
                                          <input type="number" name="age_partner" class="form-control" placeholder="35 Ans" required>
                                          <span class="invalid-feedback" style="display: none;">Ce champ est obligatoire.</span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="mb-3">
                                  <div class="row align-items-center">
                                    <label class="col-lg-3 form-label">Téléphone</label>
                                    <div class="col-lg-9">
                                      <div class="row">
                                        <div class="col-md-12 mb-2 mb-md-0">
                                          <input type="text" name="telephone_partner" class="form-control" placeholder="+1-202-555-0116" required>
                                          <span class="invalid-feedback" style="display: none;">Ce champ est obligatoire.</span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="mb-3">
                                  <div class="row align-items-center">
                                    <label class="col-lg-3 form-label">Email</label>
                                    <div class="col-lg-9">
                                      <div class="row">
                                        <div class="col-md-12 mb-2 mb-md-0">
                                          <input type="text" name="email_partner" class="form-control" placeholder="john.doe@gmail.com" required>
                                          <span class="invalid-feedback" style="display: none;">Ce champ est obligatoire.</span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="mb-3">
                                  <div class="row align-items-center">
                                    <label class="col-lg-3 form-label">Adresse</label>
                                    <div class="col-lg-9">
                                      <div class="row">
                                        <div class="col-md-12 mb-2 mb-md-0">
                                          <input type="text" name="adresse_partner" class="form-control"
                                            placeholder="12 rue de la Croissant. Appartement 3D. 56000" required>
                                          <span class="invalid-feedback" style="display: none;">Ce champ est obligatoire.</span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="mb-3">
                                  <div class="row align-items-center">
                                    <label class="col-lg-3 form-label">Profession</label>
                                    <div class="col-lg-9">
                                      <div class="row">
                                        <div class="col-md-12 mb-2 mb-md-0">
                                          <input type="text" name="profession_partner" class="form-control" placeholder="Ingénieur Informatique" required>
                                          <span class="invalid-feedback" style="display: none;">Ce champ est obligatoire.</span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="mb-3">
                                  <div class="row align-items-center">
                                    <label class="col-lg-3 form-label">Salaire Brut</label>
                                    <div class="col-lg-9">
                                      <div class="row">
                                        <div class="col-md-12 mb-2 mb-md-0">
                                          <input type="number" name="salaire_partner" class="form-control" placeholder="3500€" required>
                                          <span class="invalid-feedback" style="display: none;">Ce champ est obligatoire.</span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="mb-3">
                                  <div class="row align-items-center">
                                    <label class="col-lg-3 form-label">Statut</label>
                                    <div class="col-lg-9">
                                      <div class="row">
                                        <div class="col-md-12 mb-2 mb-md-0">
                                          <input type="text" name="statut_civil_partner" class="form-control" placeholder="Célibataire" required>
                                          <span class="invalid-feedback" style="display: none;">Ce champ est obligatoire.</span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="form-body p-3 my-1 mx-1 border rounded col-12 col-md-6 col-lg-5">
                                <div class="d-flex align-items-center gap-6 mb-4 justify-content-between">
                                  <span
                                    class="round-48 d-flex align-items-center justify-content-center rounded bg-icons-dashboard">
                                    <iconify-icon icon="lets-icons:bubble" width="2em" height="2em"
                                      style="color: #22825d"></iconify-icon>
                                  </span>
                                  <h6 class="mb-0 fs-4 fw-medium" style="color: #22825d">Simulation</h6>
                                </div>
                                <div class="mb-3">
                                  <div class="row align-items-center">
                                    <label class="col-lg-6 form-label">Montant souhaité</label>
                                    <div class="col-lg-6">
                                      <div class="row">
                                        <div class="col-md-12 mb-2 mb-md-0">
                                          <input type="text" class="form-control" placeholder="150.000€" id="montant1"
                                            name="montant1" readonly>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="mb-3">
                                  <div class="row align-items-center">
                                    <label class="col-lg-6 form-label">D.Remboursement</label>
                                    <div class="col-lg-6">
                                      <div class="row">
                                        <div class="col-md-12 mb-2 mb-md-0">
                                          <input type="text" class="form-control" placeholder="24 mois" id="duree1"
                                            name="duree1" readonly>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="mb-3">
                                  <div class="row align-items-center">
                                    <label class="col-lg-6 form-label">Type de maison</label>
                                    <div class="col-lg-6">
                                      <div class="row">
                                        <div class="col-md-12 mb-2 mb-md-0">
                                          <input type="text" class="form-control" placeholder="Neuve" id="typeMaison1"
                                            name="typeMaison1" readonly>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="mb-3">
                                  <div class="row align-items-center">
                                    <label class="col-lg-6 form-label">Montant total dû</label>
                                    <div class="col-lg-6">
                                      <div class="row">
                                        <div class="col-md-12 mb-2 mb-md-0">
                                          <input type="text" class="form-control" placeholder="170.000€" id="total1"
                                            name="total1" readonly>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="d-flex align-items-center gap-6 mb-4 justify-content-between">
                                  <span
                                    class="round-48 d-flex align-items-center justify-content-center rounded bg-icons-dashboard">
                                    <iconify-icon icon="ic:outline-book" width="2em" height="2em"
                                      style="color: #22825d"></iconify-icon>
                                  </span>
                                  <h6 class="mb-0 fs-4 fw-medium" style="color: #22825d">Documents</h6>
                                </div>
                                <div class="mb-3">
                                  <div class="row align-items-center">
                                    <label class="col-lg-6 form-label">Fichier de paie</label>
                                    <div class="col-lg-6">
                                      <div class="row">
                                        <div class="col-md-12 mb-2 mb-md-0">
                                          <input class="form-control" name="fichier_paie_partner" type="file" id="formFile" required>
                                          <span class="invalid-feedback" style="display: none;">Ce champ est obligatoire.</span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="mb-3">
                                  <div class="row align-items-center">
                                    <label class="col-lg-6 form-label">Attestation Salaire</label>
                                    <div class="col-lg-6">
                                      <div class="row">
                                        <div class="col-md-12 mb-2 mb-md-0">
                                          <input class="form-control" name="attestation_salaire_partner" type="file" id="formFile" required>
                                          <span class="invalid-feedback" style="display: none;">Ce champ est obligatoire.</span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="mb-3">
                                  <div class="row align-items-center">
                                    <label class="col-lg-6 form-label">Extrait Bancaire</label>
                                    <div class="col-lg-6">
                                      <div class="row">
                                        <div class="col-md-12 mb-2 mb-md-0">
                                          <input class="form-control" name="extrait_salaire_partner" type="file" id="formFile" required>
                                          <span class="invalid-feedback" style="display: none;">Ce champ est obligatoire.</span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="mb-3">
                                  <div class="row align-items-center">
                                    <label class="col-lg-6 form-label">Contrat</label>
                                    <div class="col-lg-6">
                                      <div class="row">
                                        <div class="col-md-12 mb-2 mb-md-0">
                                          <input class="form-control" name="contrat_partner" type="file" id="formFile" required>
                                          <span class="invalid-feedback" style="display: none;">Ce champ est obligatoire.</span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                          </div>
                        </div>
                      </div>

                      <!-- Step 5 -->
                      <div class="step" id="step5">
                        <h3>Inscription</h3>
                        <!-- Error message placeholder -->
                        <div id="error-message" class="alert alert-danger" style="display: none;"></div>

                        <!-- Add your form fields here -->
                        <!-- <div class="mb-3">
                          <label for="text-name" class="form-label">Nom</label>
                          <input type="text" name="nom_user" class="form-control" id="text-name" placeholder="Entrez votre nom" required>
                        </div> -->
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Adresse e-mail</label>
                          <input type="email" name="mail_user" class="form-control" id="exampleInputEmail1" placeholder="Entrez votre adresse e-mail" required>
                        </div>
                        <div class="mb-4">
                          <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                          <input type="password" name="password_user" class="form-control" id="exampleInputPassword1"
                            placeholder="Entrez votre mot de passe" required minlength="8">
                          <small id="passwordError" style="color: red; display: none;">Le mot de passe doit contenir au moins 8 caractères.</small>
                        </div>
                        <button type="submit" class="btn btn-dark w-100 py-8 mb-4 rounded-1" id="submitBtn">S'inscrire</button>

                        <script>
                          document.getElementById("submitBtn").addEventListener("click", function(event) {
                            let passwordInput = document.getElementById("exampleInputPassword1");
                            let passwordError = document.getElementById("passwordError");

                            if (passwordInput.value.length < 8) {
                              event.preventDefault(); // Prevent form submission
                              passwordError.style.display = "block"; // Show error message
                            } else {
                              passwordError.style.display = "none"; // Hide error message
                            }
                          });
                        </script>

                      </div>

                      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                      <script>
                        $(document).ready(function() {
                          // Handle form submission
                          $('#multiStepForm').on('submit', function(e) {
                            e.preventDefault(); // Prevent the default form submission

                            // Create a FormData object to handle file uploads
                            const formData = new FormData(this);

                            // Send AJAX request
                            $.ajax({
                              url: 'process_form.php', // URL to the PHP script
                              type: 'POST',
                              data: formData,
                              dataType: 'json',
                              processData: false, // Required for FormData
                              contentType: false, // Required for FormData
                              success: function(response) {
                                if (response.status === "success") {
                                  // Redirect or show success message
                                  window.location.href = "login.php"; // Redirect to login page
                                } else if (response.status === "error") {
                                  // Display error message in step5
                                  $('#step5 #error-message').text(response.message).show();
                                }
                              },
                              error: function(xhr, status, error) {
                                // Handle AJAX errors
                                $('#step5 #error-message').text("Une erreur s'est produite. Veuillez réessayer.").show();
                              }
                            });
                          });
                        });
                      </script>
                    </form>
                  </div>

                  <div class="mt-3 d-flex justify-content-between">
                    <button class="btn btn-secondary" id="prevBtn" disabled>Précédent</button>
                    <button class="btn btn-primary" id="nextBtn" disabled>Suivant</button>
                  </div>
                </div>


                <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
                <script>
                  $(document).ready(function() {
                    let currentStep = 1;
                    let totalSteps = 5;
                    let isTwoPersons = false;

                    // Card Selection Logic
                    $(".js-1person").click(function() {
                      $("#1person").prop("checked", true);
                      $("#2persons").prop("checked", false);
                      isTwoPersons = false;
                      $('.js-1person').addClass('selected');
                      $('.js-2persons').removeClass('selected');

                      // Remove required attribute from Step 4 inputs
                      $('#step4 input[required]').removeAttr('required');

                      updateSteps();
                    });

                    $(".js-2persons").click(function() {
                      $("#1person").prop("checked", false);
                      $("#2persons").prop("checked", true);
                      isTwoPersons = true;
                      $('.js-1person').removeClass('selected');
                      $('.js-2persons').addClass('selected');

                      // Add required attribute back to Step 4 inputs
                      $('#step4 input').each(function() {
                        if ($(this).data('was-required')) {
                          $(this).attr('required', true);
                        }
                      });

                      updateSteps();
                    });

                    $(document).ready(function() {
                      // Store the initial required state of Step 4 inputs
                      $('#step4 input[required]').each(function() {
                        $(this).data('was-required', true);
                      });
                    });

                    // Stepper Logic
                    function updateSteps() {
                      $('.step').removeClass('active');
                      $(`#step${currentStep}`).addClass('active');

                      // Disable "Précédent" button on the first step
                      $('#prevBtn').prop('disabled', currentStep === 1);

                      // Enable "Suivant" button on the first step only if a radio button is selected
                      if (currentStep === 1) {
                        const isRadioSelected = $('#1person').is(':checked') || $('#2persons').is(':checked');
                        $('#nextBtn').prop('disabled', !isRadioSelected);
                      } else {
                        // Enable "Suivant" button for other steps (validation happens on click)
                        $('#nextBtn').prop('disabled', false);
                      }

                      // Hide "Suivant" button in Step 5
                      if (currentStep === totalSteps) {
                        $('#nextBtn').hide();
                      } else {
                        $('#nextBtn').show();
                      }
                    }

                    // Validate the current step and show error messages if any
                    function validateStep(step) {
                      let isValid = true;

                      // Skip validation for Step 4 if "1 Person" is selected
                      if (step === 4 && !isTwoPersons) {
                        return true;
                      }

                      $(`#step${step} input[required]`).each(function() {
                        if (!$(this).val()) {
                          isValid = false;
                          $(this).addClass('is-invalid');
                          $(this).siblings('.invalid-feedback').show();
                        } else {
                          $(this).removeClass('is-invalid');
                          $(this).siblings('.invalid-feedback').hide();
                        }
                      });

                      return isValid;
                    }

                    // Next Button Click
                    $('#nextBtn').click(function() {
                      if (currentStep === 1) {
                        // For Step 1, no validation is needed (only radio button selection)
                        currentStep++;
                        updateSteps();
                      } else {
                        // For other steps, validate inputs
                        const isStepValid = validateStep(currentStep);
                        if (isStepValid) {
                          currentStep++;
                          // Skip Step 4 if "1 Person" is selected
                          if (currentStep === 4 && !isTwoPersons) {
                            currentStep++; // Skip to Step 5
                          }
                          updateSteps();
                        }
                      }
                    });

                    // Previous Button Click
                    $('#prevBtn').click(function() {
                      if (currentStep > 1) {
                        currentStep--;
                        // Skip Step 4 if "1 Person" is selected
                        if (currentStep === 4 && !isTwoPersons) {
                          currentStep--; // Go back to Step 3
                        }
                        updateSteps();
                      }
                    });

                    updateSteps();
                  });
                </script>
                <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                <script
                  src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
                <script>
                  $(document).ready(function() {
                    let currentStep = 1;
                    let totalSteps = 5;
                    let isTwoPersons = false;

                    // Card Selection Logic
                    $(".js-1person").click(function() {
                      $("#1person").prop("checked", true);
                      $("#2persons").prop("checked", false);
                      isTwoPersons = false;
                      $('.js-1person').addClass('selected');
                      $('.js-2persons').removeClass('selected');
                      updateSteps();
                    });

                    $(".js-2persons").click(function() {
                      $("#1person").prop("checked", false);
                      $("#2persons").prop("checked", true);
                      isTwoPersons = true;
                      $('.js-1person').removeClass('selected');
                      $('.js-2persons').addClass('selected');
                      updateSteps();
                    });

                    // Stepper Logic
                    function updateSteps() {
                      $('.step').removeClass('active');
                      $(`#step${currentStep}`).addClass('active');

                      // Disable "Précédent" button on the first step
                      $('#prevBtn').prop('disabled', currentStep === 1);

                      // Disable "Suivant" button on the first step if no checkbox is selected
                      if (currentStep === 1) {
                        const isCheckboxSelected = $('#1person').is(':checked') || $('#2persons').is(':checked');
                        $('#nextBtn').prop('disabled', !isCheckboxSelected);
                      } else {
                        // Disable "Suivant" button on the last step
                        $('#nextBtn').prop('disabled', currentStep === totalSteps);
                      }
                    }

                    $('#nextBtn').click(function() {
                      if (currentStep < totalSteps) {
                        currentStep++;
                        // Skip Step 4 if "1 Person" is selected
                        if (currentStep === 4 && !isTwoPersons) {
                          currentStep++; // Skip to Step 5
                        }
                        updateSteps();
                      }
                    });

                    $('#prevBtn').click(function() {
                      if (currentStep > 1) {
                        currentStep--;
                        // Skip Step 4 if "1 Person" is selected
                        if (currentStep === 4 && !isTwoPersons) {
                          currentStep--; // Go back to Step 3
                        }
                        updateSteps();
                      }
                    });

                    updateSteps();
                  });
                </script> -->

                <!-- script for required inputs START-->
                <!-- <script>
                  const form = document.getElementById("multiStepForm");
                  const steps = document.querySelectorAll(".step");
                  const nextBtn = document.getElementById("nextBtn");
                  const prevBtn = document.getElementById("prevBtn");

                  let currentStep = 0;

                  // Function to validate required inputs in the current step
                  function validateInputs() {
                    let isValid = true;
                    const currentInputs = steps[currentStep].querySelectorAll(".required");

                    currentInputs.forEach(input => {
                      const errorMessage = input.nextElementSibling;

                      if (!input.value.trim()) {
                        errorMessage.textContent = "Please fill out this field";
                        errorMessage.style.display = "inline";
                        isValid = false;
                      } else {
                        errorMessage.style.display = "none";
                      }
                    });

                    return isValid;
                  }

                  // Function to show the current step
                  function showStep(stepIndex) {
                    steps.forEach((step, index) => {
                      step.classList.toggle("active", index === stepIndex);
                    });

                    prevBtn.disabled = stepIndex === 0;
                    nextBtn.textContent = stepIndex === steps.length - 1 ? "Submit" : "Suivant";
                  }

                  // Event listener for "Next" button
                  nextBtn.addEventListener("click", (event) => {
                    if (!validateInputs()) {
                      event.preventDefault(); // Prevent going to the next step if fields are empty
                      return;
                    }

                    if (currentStep < steps.length - 1) {
                      currentStep++;
                      showStep(currentStep);
                    } else {
                      form.submit(); // Submit the form on the last step
                    }
                  });

                  // Event listener for "Previous" button
                  prevBtn.addEventListener("click", () => {
                    if (currentStep > 0) {
                      currentStep--;
                      showStep(currentStep);
                    }
                  });
                </script> -->

                <!-- script for required inputs END-->

                <!-- retrieve data from stepper-->
                <script>
                  // Function to get URL parameters
                  function getParameterByName(name, url = window.location.href) {
                    name = name.replace(/[\[\]]/g, '\\$&');
                    const regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
                      results = regex.exec(url);
                    if (!results) return null;
                    if (!results[2]) return '';
                    return decodeURIComponent(results[2].replace(/\+/g, ' '));
                  }

                  // Retrieve the data from the URL
                  const montant = getParameterByName('montant');
                  const duree = getParameterByName('duree');
                  const typeMaison = getParameterByName('typeMaison');
                  const total = getParameterByName('total');

                  // Populate the inputs with the data
                  document.getElementById('montant').value = montant + ' €';
                  document.getElementById('duree').value = duree + ' mois';
                  document.getElementById('typeMaison').value = typeMaison;
                  document.getElementById('total').value = total + ' €';

                  // Retrieve the data from the URL
                  const montant1 = getParameterByName('montant');
                  const duree1 = getParameterByName('duree');
                  const typeMaison1 = getParameterByName('typeMaison');
                  const total1 = getParameterByName('total');

                  // Populate the inputs with the data
                  document.getElementById('montant1').value = montant + ' €';
                  document.getElementById('duree1').value = duree + ' mois';
                  document.getElementById('typeMaison1').value = typeMaison;
                  document.getElementById('total1').value = total + ' €';
                </script>
                <!-- retrieve data from stepper-->
                <!-- ------------------------------------------------- -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="dark-transparent sidebartoggler"></div>
  <!-- Import Js Files -->
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>
  <script src="../assets/js/theme/app.init.js"></script>
  <script src="../assets/js/theme/theme.js"></script>
  <script src="../assets/js/theme/app.min.js"></script>

  <!-- solar icons -->
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>