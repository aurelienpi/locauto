<html>
 <head> 
<meta http-equiv="content-Type" content="text/html; charset=iso-8859-1"> 
<link rel="stylesheet" type="text/css" href="index.css" />
</head>

<body>
<h4>EN-TETE</h4>

<div class="gauche">
    <div>
        <a target="_blank"><img border="0" src="http://www.calendian.com/gen/fr.png" alt="Calendrier - Français, Calendian"></a>
    </div>
    
    <div>
    <!-- weather widget start --><a target="_blank" href="https://hotelmix.fr/weather/paris-18145">
        <img src="https://w.bookcdn.com/weather/picture/31_18145_1_3_c55a99_250_bf428c_ffffff_ffffff_1_2071c9_ffffff_0_6.png?scode=124&domid=581&anc_id=54502" alt="booked.net"/></a><!-- weather widget end -->
    </div>
        
</div>

<div class="droite"> <!-- Dans certains cas, mettre la colonne droite avant la centre passe mieux -->
    <a href="https://www.norauto.fr/"><img src="norauto.gif" alt= "norauto"></a>
</div>
    
<div class="centre"> 
        <script>

        function verif(){

            var email=document.getElementById("email").value;
            var cptad=0;
            var cptpoint=0;

            for (var i=0; i<email.length; i++)
            {
                if (email.charAt(i)=='@')
                {
                    cptad++;

                }
                else if (email.charAt(i)=='.')
                {
                    cptpoint++;
                }
            }
            if(cptad==1 && cptpoint>=1){}
            else
            {
                alert("email saisie invalide ");
                return false;
            }
        }

    </script>

    <center>
        <h2>Enquête de satisfaction</h2> <br>
        <form method="POST" onSubmit="return verif()" action="page3.html">
            nom: <input id="nom" required/> <br><br>
            prenom: <input id="prenom" required/> <br><br>
            email: <input id="email"required/> <br><br>
            Date de naissance: <input type="date" id="date" name = "date" required>
            <br><br>
            <input type="submit" value = "Suivant" >
        </form>
    </center>
    </div>
<h4>PIED-DE-PAGE</h4>

</div>  <!--fin du container--> 

</body>
</html>