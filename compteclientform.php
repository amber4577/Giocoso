<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Inscription</title>
        <link rel="stylesheet" href="stylegiocoso.css">
    </head>
    <header>
        <?php include 'app/view/common/header.php';?>  
    </header>
    <body>
         <main class="container">



            <form id="survey-form">
       
        
            <div class="form-group">
                <label id="name-label" for="nom">Nom</label>
                <input
                type="text"
                name="nom"
                id="nom"
                class="form-control"
                required
                />
            </div>

            <div class="form-group">
                <label id="firstname-label" for="firstname">Prénom</label>
                <input
                type="text"
                name="prenom"
                id="prenom"
                class="form-control"
                required
                />
            </div>
        
         
            <div class="form-group">
                <label id="email-label" for="email">Adresse mail</label>
                <input
                type="email"
                name="email"
                id="email"
                class="form-control"
                required
                />
            </div>

            <div class="form-group">
                <label id="number-label" for="number"
                >Numéro de Téléphone<span class="clue"></span></label
                >
                <input
                type="number"
                name="numtel"
                id="number"
                minlenght="10"
                maxlength="10"
                class="form-control"
                />
            </div>

            <div class="form-group">
                <label id="name-label" for="adresse">Adresse Postale</label>
                <input
                type="text"
                name="adp"
                id="adress"
                class="form-control"
                required
                />
            </div>

            <div class="form-group">
                <label id="date-label" for="datebirth"
                >Date de Naissance<span class="clue"></span></label
                >
                <input
                type="date"
                name="birth"
                id="dnaiss"
                max = "2005-05-28"
                class="form-control"
                />
            </div>

      
            <div class="form-group">
                <label id="number-label" for="number"
                >Code Postal<span class="clue"></span></label
                >
                <input
                type="number"
                name="cp"
                id="codep"
                minlenght="5"
                maxlength="5"
                class="form-control"
                />
            </div>

            <div class="form-group">
                <label id="name-label" for="ville">Ville</label>
                <input
                type="text"
                name="ville"
                id="city"
                class="form-control"
                required
                />
            </div>

          <div class="form-group">
            <button type="submit" id="submit" class="submit-button">
              Je m'inscris
            </button>
          </div>
        </form>
        
      </main>
      
    </body>















</html>