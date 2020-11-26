<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberRoom_Admin</title>
    <link rel="stylesheet" href="dashboard.css">
    <script src="javascript.js"></script>
</head>

<body>
    <div class="header">
        <div class="header_cadre">
            <div class="cadre_logo">
            </div>
            <div class="cadre_admin">
                <h2 class="title">𝗔𝗗𝗠𝗜𝗡</h2>
            </div>
        </div>
        <div class="header_time">
            <h2 class="in_time">
                <p id="date"></p>
                <p></p>
            </h2>
        </div>
    </div>



    <!-- Partie Création d'utilisateur-->
    <div class="account">
    <h2 class="account_titre">Ajouter un utilisateur</h2>
        <form method="post">
            <input type="text" class="account_first-name" placeholder="𝑬𝒏𝒕𝒓𝒆𝒛 𝒖𝒏 𝒏𝒐𝒎" name="nom">
            <input type="text" class="account_last-name" placeholder="𝑬𝒏𝒕𝒓𝒆𝒛 𝒖𝒏 𝒑𝒓𝒆́𝒏𝒐𝒎" name="prenom">
            <input type="submit" class="account_button" value="Valider">
        </form>
    </div>
    <?php
        if (isset($_POST['prenom']) & isset($_POST['nom'])){
            $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            $reponse = $bdd->query('SELECT * FROM clients');

            $requete= 'INSERT INTO clients VALUES(NULL, "' . $_POST['nom'] . '", "' . $_POST['prenom'] . '")';
            $resultat = $bdd -> query($requete);
        if ($resultat)
            echo "<p>Le contact a été ajouté</p>";
        else
            echo "<p>Erreur</p>";
            $reponse->closeCursor();
        }
    ?>

    <!-- Partie Assignation de postes-->
        <div class="reservations">
            <h2 class="reservations_titre">Assigner un poste</h2>
            <form method="post">
                <input type="text" placeholder= "𝑬𝒏𝒕𝒓𝒆𝒛 𝒖𝒏 𝒏𝒐𝒎" name="nom">
                <input type="text" placeholder= "𝑬𝒏𝒕𝒓𝒆𝒛 𝒖𝒏 𝒑𝒓𝒆́𝒏𝒐𝒎" name="prenom">
                <input type="text" placeholder= "Choisissez un poste" name="poste">
                <input type="text" placeholder="Choisissez un temps" name="temps">
                <input type="submit" class="account_button" value="Valider">
            </form>
        </div>
        <?php
        if (isset($_POST['nom']) & isset($_POST['prenom']) & isset($_POST['poste'])){
            $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            $reponse = $bdd->query('SELECT * FROM postes');
            
            $requete= 'UPDATE postes' ;
            $resultat = $bdd -> query($requete);
        }
    ?>

    <!-- Partie information sur les postes-->

    <div class="postes">
        <div class="postes_1">
            <div class="postes_img"></div>
            <div class="postes_infos">
                <ul class="poste_liste">
                    <li class="poste_titre">
                        <?php
                            $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                            $reponse = $bdd->query('SELECT * FROM postes WHERE numero=1');
                            while($donnees= $reponse->fetch()){
                                echo 'Poste n° ' . $donnees['numero'];
                            }
                            $reponse->closeCursor();
                        ?>
                    </li>

                    <li class="poste_utilisateur">
                        <?php
                            $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                            $reponse = $bdd->query('SELECT * FROM postes WHERE numero=1');
                            while($donnees= $reponse->fetch()){
                                echo 'Utilisateur : ' . $donnees['utilisateur_nom'] . ' ' . $donnees['utlisateur_prenom'];
                            }
                            $reponse->closeCursor();
                        ?>
                    </li>
                    <li class="poste_timer">
                        <?php
                            $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                            $reponse = $bdd->query('SELECT * FROM postes WHERE numero=1');
                            while($donnees= $reponse->fetch()){
                                echo 'Temps restant : ' . $donnees['temps_restant'];
                            }
                            $reponse->closeCursor();
                        ?>
                    </li>
                </ul>
            </div>
        </div>
        <div class="postes_2">
            <div class="postes_img"></div>
            <div class="postes_infos">
                <ul class="poste_liste">
                    <li class="poste_titre">
                        <?php
                            $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                            $reponse = $bdd->query('SELECT * FROM postes WHERE numero=2');
                            while($donnees= $reponse->fetch()){
                                echo 'Poste n° ' . $donnees['numero'];
                            }
                            $reponse->closeCursor();
                        ?>
                    </li>

                    <li class="poste_utilisateur">
                        <?php
                            $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                            $reponse = $bdd->query('SELECT * FROM postes WHERE numero=2');
                            while($donnees= $reponse->fetch()){
                                echo 'Utilisateur : ' . $donnees['utilisateur_nom'] . ' ' . $donnees['utlisateur_prenom'];
                            }
                            $reponse->closeCursor();
                        ?>
                    </li>
                    <li class="poste_timer">
                        <?php
                            $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                            $reponse = $bdd->query('SELECT * FROM postes WHERE numero=2');
                            while($donnees= $reponse->fetch()){
                                echo 'Temps restant : ' . $donnees['temps_restant'];
                            }
                            $reponse->closeCursor();
                        ?>
                    </li>
                </ul>
            </div>
        </div>
        <div class="postes_3">
            <div class="postes_img"></div>
            <div class="postes_infos">
                <ul class="poste_liste">
                    <li class="poste_titre">
                        <?php
                            $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                            $reponse = $bdd->query('SELECT * FROM postes WHERE numero=3');
                            while($donnees= $reponse->fetch()){
                                echo 'Poste n° ' . $donnees['numero'];
                            }
                            $reponse->closeCursor();
                        ?>
                    </li>

                    <li class="poste_utilisateur">
                        <?php
                            $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                            $reponse = $bdd->query('SELECT * FROM postes WHERE numero=3');
                            while($donnees= $reponse->fetch()){
                                echo 'Utilisateur : ' . $donnees['utilisateur_nom'] . ' ' . $donnees['utlisateur_prenom'];
                            }
                            $reponse->closeCursor();
                        ?>
                    </li>
                    <li class="poste_timer">
                        <?php
                            $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                            $reponse = $bdd->query('SELECT * FROM postes WHERE numero=3');
                            while($donnees= $reponse->fetch()){
                                echo 'Temps restant : ' . $donnees['temps_restant'];
                            }
                            $reponse->closeCursor();
                        ?>
                    </li>
                </ul>
            </div>
        </div>
        <div class="postes_4">
            <div class="postes_img"></div>
            <div class="postes_infos">
                <ul class="poste_liste">
                    <li class="poste_titre">
                        <?php
                            $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                            $reponse = $bdd->query('SELECT * FROM postes WHERE numero=4');
                            while($donnees= $reponse->fetch()){
                                echo 'Poste n° ' . $donnees['numero'];
                            }
                            $reponse->closeCursor();
                        ?>
                    </li>

                    <li class="poste_utilisateur">
                        <?php
                            $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                            $reponse = $bdd->query('SELECT * FROM postes WHERE numero=4');
                            while($donnees= $reponse->fetch()){
                                echo 'Utilisateur : ' . $donnees['utilisateur_nom'] . ' ' . $donnees['utlisateur_prenom'];
                            }
                            $reponse->closeCursor();
                        ?>
                    </li>
                    <li class="poste_timer">
                        <?php
                            $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                            $reponse = $bdd->query('SELECT * FROM postes WHERE numero=4');
                            while($donnees= $reponse->fetch()){
                                echo 'Temps restant : ' . $donnees['temps_restant'];
                            }
                            $reponse->closeCursor();
                        ?>
                    </li>
                </ul>
            </div>
        </div>
        <div class="postes_5">
            <div class="postes_img"></div>
            <div class="postes_infos">
                <ul class="poste_liste">
                    <li class="poste_titre">
                        <?php
                            $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                            $reponse = $bdd->query('SELECT * FROM postes WHERE numero=5');
                            while($donnees= $reponse->fetch()){
                                echo 'Poste n° ' . $donnees['numero'];
                            }
                            $reponse->closeCursor();
                        ?>
                    </li>

                    <li class="poste_utilisateur">
                        <?php
                            $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                            $reponse = $bdd->query('SELECT * FROM postes WHERE numero=5');
                            while($donnees= $reponse->fetch()){
                                echo 'Utilisateur : ' . $donnees['utilisateur_nom'] . ' ' . $donnees['utlisateur_prenom'];
                            }
                            $reponse->closeCursor();
                        ?>
                    </li>
                    <li class="poste_timer">
                        <?php
                            $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                            $reponse = $bdd->query('SELECT * FROM postes WHERE numero=5');
                            while($donnees= $reponse->fetch()){
                                echo 'Temps restant : ' . $donnees['temps_restant'];
                            }
                            $reponse->closeCursor();
                        ?>
                    </li>
                </ul>
            </div>
        </div>
        <div class="postes_6">
            <div class="postes_img"></div>
            <div class="postes_infos">
                <ul class="poste_liste">
                    <li class="poste_titre">
                        <?php
                            $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                            $reponse = $bdd->query('SELECT * FROM postes WHERE numero=6');
                            while($donnees= $reponse->fetch()){
                                echo 'Poste n° ' . $donnees['numero'];
                            }
                            $reponse->closeCursor();
                        ?>
                    </li>

                    <li class="poste_utilisateur">
                        <?php
                            $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                            $reponse = $bdd->query('SELECT * FROM postes WHERE numero=6');
                            while($donnees= $reponse->fetch()){
                                echo 'Utilisateur : ' . $donnees['utilisateur_nom'] . ' ' . $donnees['utlisateur_prenom'];
                            }
                            $reponse->closeCursor();
                        ?>
                    </li>
                    <li class="poste_timer">
                        <?php
                            $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                            $reponse = $bdd->query('SELECT * FROM postes WHERE numero=6');
                            while($donnees= $reponse->fetch()){
                                echo 'Temps restant : ' . $donnees['temps_restant'];
                            }
                            $reponse->closeCursor();
                        ?>
                    </li>
                </ul>
            </div>
        </div>
        <div class="postes_7">
            <div class="postes_img"></div>
            <div class="postes_infos">
                <ul class="poste_liste">
                    <li class="poste_titre">
                        <?php
                            $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                            $reponse = $bdd->query('SELECT * FROM postes WHERE numero=7');
                            while($donnees= $reponse->fetch()){
                                echo 'Poste n° ' . $donnees['numero'];
                            }
                            $reponse->closeCursor();
                        ?>
                    </li>

                    <li class="poste_utilisateur">
                        <?php
                            $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                            $reponse = $bdd->query('SELECT * FROM postes WHERE numero=7');
                            while($donnees= $reponse->fetch()){
                                echo 'Utilisateur : ' . $donnees['utilisateur_nom'] . ' ' . $donnees['utlisateur_prenom'];
                            }
                            $reponse->closeCursor();
                        ?>
                    </li>
                    <li class="poste_timer">
                        <?php
                            $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                            $reponse = $bdd->query('SELECT * FROM postes WHERE numero=7');
                            while($donnees= $reponse->fetch()){
                                echo 'Temps restant : ' . $donnees['temps_restant'];
                            }
                            $reponse->closeCursor();
                        ?>
                    </li>
                </ul>
            </div>
        </div>
        <div class="postes_8">
            <div class="postes_img"></div>
            <div class="postes_infos">
                <ul class="poste_liste">
                    <li class="poste_titre">
                        <?php
                            $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                            $reponse = $bdd->query('SELECT * FROM postes WHERE numero=8');
                            while($donnees= $reponse->fetch()){
                                echo 'Poste n° ' . $donnees['numero'];
                            }
                            $reponse->closeCursor();
                        ?>
                    </li>

                    <li class="poste_utilisateur">
                        <?php
                            $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                            $reponse = $bdd->query('SELECT * FROM postes WHERE numero=8');
                            while($donnees= $reponse->fetch()){
                                echo 'Utilisateur : ' . $donnees['utilisateur_nom'] . ' ' . $donnees['utlisateur_prenom'];
                            }
                            $reponse->closeCursor();
                        ?>
                    </li>
                    <li class="poste_timer">
                        <?php
                            $bdd = new PDO('mysql:host=127.0.0.1;dbname=cyber_room;charset=utf8', 'phpmyadmin', 'Workout974!',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                            $reponse = $bdd->query('SELECT * FROM postes WHERE numero=8');
                            while($donnees= $reponse->fetch()){
                                echo 'Temps restant : ' . $donnees['temps_restant'];
                            }
                            $reponse->closeCursor();
                        ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Partie Footer -->
    <footer>

        <div>

       
            <ul class="mail">
                <li>LAVIT Gaetan<br> <a href="dimitrigign@gmail.com" id="copy"><img src="images/email.png" width="20px"
                    height="20px" /></a>
            <a href="https://www.linkedin.com/in/dimitri-gigan-80a52a184/" target="blank"><img
                    src="images/linkedin-rond-300x300.png" width="20px" height="20px" /></a>
            <a href="https://www.facebook.com/dimitri.gigan" target="blank"><img
                    src="images/Facebook-share-icon.png" width="20px" height="20px" /></a>
            <a href="https://twitter.com/Dimimajin" target="blank"><img src="images/logo-rond-twitter.png"
                    width="20px" height="20px" /></a>
                    
                </li>

                <li>GIGAN Dimitri


                <br> <a href="dimitrigign@gmail.com" id="copy"><img src="images/email.png" width="20px"
                            height="20px" /></a>
                    <a href="https://www.linkedin.com/in/dimitri-gigan-80a52a184/" target="blank"><img
                            src="images/linkedin-rond-300x300.png" width="20px" height="20px" /></a>
                    <a href="https://www.facebook.com/dimitri.gigan" target="blank"><img
                            src="images/Facebook-share-icon.png" width="20px" height="20px" /></a>
                    <a href="https://twitter.com/Dimimajin" target="blank"><img src="images/logo-rond-twitter.png"
                            width="20px" height="20px" /></a>


                </li>
            

                <li>AH-KENG Abel <br> <a href="dimitrigign@gmail.com" id="copy"><img src="images/email.png" width="20px"
                    height="20px" /></a>
            <a href="https://www.linkedin.com/in/dimitri-gigan-80a52a184/" target="blank"><img
                    src="images/linkedin-rond-300x300.png" width="20px" height="20px" /></a>
            <a href="https://www.facebook.com/dimitri.gigan" target="blank"><img
                    src="images/Facebook-share-icon.png" width="20px" height="20px" /></a>
            <a href="https://twitter.com/Dimimajin" target="blank"><img src="images/logo-rond-twitter.png"
                    width="20px" height="20px" /></a></li>

                <li>BEGE Swann <br> <a href="dimitrigign@gmail.com" id="copy"><img src="images/email.png" width="20px"
                    height="20px" /></a>
            <a href="https://www.linkedin.com/in/dimitri-gigan-80a52a184/" target="blank"><img
                    src="images/linkedin-rond-300x300.png" width="20px" height="20px" /></a>
            <a href="https://www.facebook.com/dimitri.gigan" target="blank"><img
                    src="images/Facebook-share-icon.png" width="20px" height="20px" /></a>
            <a href="https://twitter.com/Dimimajin" target="blank"><img src="images/logo-rond-twitter.png"
                    width="20px" height="20px" /></a></li>

            </ul>

        </div>
        <p class="copyright">© Copyright Cyber Room </p>







    </footer>
</body>

</html>