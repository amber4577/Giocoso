<main class="container2">
    <form id="survey-form" action="" method="post">
    <div class="form-group">
            <label id="number-label" for="number"
            ><span class="clue"></span></label
            >
            <input
            type="text"
            name="numclient"
            id="number"
            class="form-control"
            placeholder="Numéro de Client"
            />
        </div>

       <div class="form-group">
            <label id="name-label" for="nom"></label>
            <input
            type="text"
            name="nom"
            id="nom"
            class="form-control"
            placeholder="Nom"
            required
            />
        </div>

        <div class="form-group">
            <label id="firstname-label" for="firstname"></label>
            <input
            type="text"
            name="prenom"
            id="prenom"
            class="form-control"
            placeholder="Prénom"
            required
            />
        </div>
        
         
        <div class="form-group">
            <label id="email-label" for="email"></label>
            <input
            type="email"
            name="email"
            id="email"
            class="form-control"
            placeholder="Adresse email"
            required
            />
        </div>

        <div class="form-group">
            <label id="number-label" for="number"
            ><span class="clue"></span></label
            >
            <input
            type="tel"
            name="numtel"
            id="number"
            minlenght="10"
            maxlength="10"
            class="form-control"
            placeholder="Numéro de Téléphone"
            />
        </div>

        <div class="form-group">
            <label id="name-label" for="adresse"></label>
            <input
            type="text"
            name="adp"
            id="adress"
            class="form-control"
            placeholder="Adresse Postale"
            required
             />
        </div>

        <div class="form-group">
            <label id="date-label" for="datebirth"
            ><span class="clue"></span></label
            >
            <input
            type="date"
            name="birth"
            id="dnaiss"
            max = "2005-05-28"
            class="form-control"
            placeholder="Date de Naissance"
            />
        </div>

      
        <div class="form-group">
            <label id="number-label" for="number"
            ><span class="clue"></span></label
            >
            <input
            type="text"
            name="cp"
            id="codep"
            minlenght="5"
            maxlength="5"
            class="form-control"
            placeholder="Code Postal"
            />
        </div>

        <div class="form-group">
            <label id="name-label" for="ville"></label>
            <input
            type="text"
            name="ville"
            id="city"
            class="form-control"
            placeholder="Ville"
            required
             />
        </div>

        <div class="form-group">
            <button type="submit" id="submit" class="submit-button" value="envoyer" style="background-color: #FFB904;">
            Je m'inscris
            </button>
        </div>

    </form>
        
</main>