<?php

include 'db_conn.php';

if (isset($_POST['submit'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $téléphone = $_POST['numero'];
    $sexe = $_POST['sexe'];
    $raison = $_POST['raison'];

  
    $sql = "INSERT INTO visiteurs (nom, prenom, email, numero, sexe, raison)
            VALUES ('$nom', '$prenom', '$email', '$téléphone', '$sexe', '$raison')";

            // Execute the query
            $result = mysqli_query($conn, $sql);
            if ($result) {
                // Data inserted successfully
                header('Location:create.php');
                exit;
            } else {
                die(mysqli_error($conn));
            }
        
        }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <title>Ajouter un visiteur</title>
    <style>
        /* Responsiveness using Media Queries */
		/* Responsiveness using Media Queries */
       /* Responsiveness using Media Queries */
        @media (max-width: 700px) {
            /* Form Styling for Smaller Screens */
            form {
                width: 90%; /* Make the form take up most of the screen width */
                margin: 20px auto; /* Center the form horizontally */
            }

            .form-group {
                margin-bottom: 15px; /* Add spacing between form elements */
            }

            /* Button Styling */
            .d-flex {
                flex-direction: column; /* Stack buttons vertically */
            }

            .d-flex > div {
                margin-bottom: 3px; /* Add spacing between buttons */
            }

            /* Remove the my-5 class */
            .container.my-5 { 
                /* This selector targets the container with the my-5 class */
                margin-top: 0 !important; /* Remove the margin-top */
            }
        }
        @media (max-width: 1024px) { 
            /* Remove the my-5 class for tablets */
            .container.my-5 {
                margin-top: 50px !important;
            }
            /* Reduce form width for tablet */
            form {
                width: 90%; /* Make the form take up 80% of the screen width */
                margin: 20px auto; /* Center the form horizontally */
            }
            label{
                font-size: 28px;
            }
            .save{
                width: 50px;
            }
            .sup{

            }
        }
    </style>
</head>

<body style="background-image: url('images/bg/bg3.jpg'); background-repeat: no-repeat; background-size: cover;">
    <div class="container my-5 border border-3 p-4 ">
        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" id="nommarche" placeholder="Nom" name="nom">
            </div>

            <!-- <div class="dropdown mt-2">
            <label for="nommarche">Ville</label><br/>
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown button
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#"></a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div> -->

            <div class="form-group mt-2">
                <label for="prenom">Prénom</label>
                <input type="text" class="form-control" id="description" placeholder="prénom" name="prenom">
            </div>

            <div class="form-group mt-2">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="email" name="email">
            </div>

            <div class="form-group mt-2">
                <label for="téléphone">Téléphone</label>
                <input type="text" class="form-control" id="numero" placeholder="numero" name="numero">
            </div>

            <div class="form-group mt-2">
                <label for="sexe">Sexe</label>
                <select class="form-control" id="sexe" name="sexe">
                    <option value="">Sélectionnez</option>
                    <option value="masculin">Masculin</option>
                    <option value="feminin">Féminin</option>
                </select>
            </div>
            <div class="form-group mt-2">
                <label for="raison">Raison de la visite</label>
                <input type="text" class="form-control" id="raison" placeholder="raison" name="raison">
            </div>
            

            <div class="d-flex">
                <div class="col d-flex justify-content-start sup">
                    <button type="submit" class="btn btn-danger mt-3" name="supprimer">Supprimer</button>
                </div>
                <div class="col d-flex justify-content-end save">
                    <button type="submit" class="btn btn-primary mt-3" name="submit">Enregistrer</button>
                </div>
            </div>
        </form>
    </div>

    <script type="text/javascript" src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <script>
        function clearForm() {
            document.getElementById("nommarche").value = "";
            document.getElementById("description").value = "";
            document.getElementById("email").value = "";
            document.getElementById("numero").value = "";
            document.getElementById("sexe").value = "";
            document.getElementById("raison").value = "";
        }
    </script>

</body>

</html>