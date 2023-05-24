<!DOCTYPE html>
<html>
<head>
    <title>Le Footer</title>
    <link rel="stylesheet" href="Footer.css">
    <link href='https://fonts.googleapis.com/css?family=Fredoka One' rel='stylesheet'>
</head>
<body><style>
    p,ul{
    font-family: fredoka one;
    font-size: 2em;
    list-style-type: none;  
}

body{
    background-image: url("public/images/Footer/FIN2.png");
    background-repeat: no-repeat    
}

.Horaires{
    display: flex;
    flex-direction: column;
    align-items: start;
    float: left;
    margin-left: 3%;

}

.RS{
    display: flex;
    flex-direction: column;
    align-items: end;
    justify-content:start;
    margin-right: 3%;
}

.alcool{
margin-top: 10%;
text-align: center;

}

footer{
    margin-top: 22%;
}
</style>
    <footer>
        <ul class="Horaires">
            <li>
                HORAIRES
            </li>

            <br>

            <li>
                Lundi : fermé
            </li>

            <li>
                Mardi : fermé
            </li>

            <li>
                Mercredi : 14h - 23h
            </li>

            <li>
                Jeudi : 14h - 23h
            </li>
            
            <li>
                Vendredi : 14h - 01h
            </li>

            <li>
                Samedi : 14h - 01h
            </li>

            <li>
                Dimanche : 14h - 23h
            </li>
        </ul>

        <div class="RS">
            <a href="url">          
                <img src="public/images/Footer/facebook.png" alt=Facebook>
            </a>

            <a href="url">
                <img src="public/images/Footer/twitter.png" alt="twitter">
            </a>
            
            <a href="url">
                <img src="public/images/Footer/instagram.png" alt="instagram">
            </a>
        </div>

        <p class="alcool"> 
           L'abus d'alcool est dangereux pour la santé. A consommer avec modération.
        </p>
    </footer>
</body>
</html>