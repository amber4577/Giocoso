    <!-- Titre -->
    <section class="contact">
        <h1><strong>Contact</strong></h1>
    </section>

    <!-- Sous-titre-->
    <section class="formulaire">
        <h2>Formulaire de contact</h2>
    </section>

    <!-- Nom et Prénom-->
    <section class="nom-prenom">
        <label for="nom">NOM Prénom</label>

        <input type="text" id="nom" name="nom" required minlength="0" maxlength="40" size="45">
    </section>

    <!-- Adresse Email-->
    <section class="Email">
        <label for="email">Email</label>

        <input type="text" id="email" name="email" required minlength="0" maxlength="40" size="45">
    </section>

    <!-- Sujet du message -->
    <section class="Sujet">
        <label for="sujet">Sujet</label>

        <input type="text" id="sujet" name="sujet" required minlength="0" maxlength="80" size="90">
    </section>

    <!-- Contenu du message -->
    <section class="Message">
        <label for="message">Votre message</label>
        <textarea id="message" name="message" rows="10" cols="300">
            </textarea>
    </section>

    <!-- Bouton d'envoie -->
    <section class="envoyer">
        <input type="submit" value="Envoyer" style="background-color: #355AC2; color: #FFFFFF;">
    </section>