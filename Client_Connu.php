<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Page Client</title>
    <link rel="stylesheet" href="public/css/Client_Connu.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@700&display=swap" rel="stylesheet">
</head>
<header>
    <?php include 'app/view/common/header.php';?>     
</header>
<body>
    <h1 class="MesInfos">Mes informations<h1>
        <div class="info">
            <h6 class = police>
                RENSEIGNER VOTRE NUMÉRO CLIENT
            </h6>

                     <input type="numéro client"/> <!--C'est pour le numéro client-->

                    <h6 class = police>
                            <a href="url" class="Compte" style="     /* text-decoration-color: white ; */     text-decoration: none;     color: white; text-decoration: underline;
                            ">JE N'AI PAS DE NUMÉRO CLIENT
                            </a>
                    </h6>
                    
                        <button>
                            <a href="url" class="Num" style="     /* text-decoration-color: white ; */     text-decoration: none;       color: #232323;">
                                RECUPÉRER MES INFORMATIONS
                            </a>
                        </button>       
        </div>
</body>