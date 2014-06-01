<!DOCTYPE html>
<html lang="fr">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="BreakInvaders, le jeu. Site web support du jeu, projet Pixel Art IUT MMI du Puy-en-Velay.">
    <meta name="author" content="Logan Braga Claire Delaye Marie Nuel">
    <link rel="shortcut icon" href="favicon.ico">

    <title>BreakInvaders, le Jeu</title>

    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
  </head>

  <body data-spy="scroll" data-offset="0" data-target="#navigation" id="top">
    <!-- Preloader -->
    <div id="preloader">
      <div id="loader">&nbsp;</div>
    </div>

    <!-- Nav -->
    <nav>
      <div id="navigation" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#top"><b>BreakInvaders</b></a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="#home" class="smothscroll">Accueil</a></li>
              <li><a href="#projet">Projet</a></li>
              <li><a href="#download">T&eacute;l&eacute;charger</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <!-- JS Warning -->
    <div class="container">
      <div class="row js-warning centered">
        <div class="col-md-12 col-md-offset-3">
          <div class="alert alert-danger alert-dismissable">Merci d'activer <strong>JavaScript</strong> pour naviguer pleinement sur le site.
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Sections -->

    <!-- Home -->
    <section id="home" name="home"></section>
    <div id="headerwrap">
      <div class="container">
        <div class="row centered">
          <div class="col-lg-12">
            <div class="hidden-xs">
              <h1><b>BreakInvaders</b>, le Jeu&nbsp;!</h1>
              <h3>Bienvenue sur le site support du projet.</h3>
            </div>
            <div class="hidden-sm hidden-md hidden-lg">
              <h3><b>BreakInvaders</b>, le Jeu&nbsp;!</h3>
              <h6>Bienvenue sur le site support du projet.</h6>
            </div>
            <br>
          </div>

          <div class="col-lg-2">
            <h5>Ça, c'est notre jeu</h5>
            <p>Un m&eacute;lange de casse-briques et de Space Invaders. Avec une balle folle. Et des briques. Qui se d&eacute;fendent.
              <span class="hidden-lg pull-right"><i class="fa fa-2x fa-angle-down"></i></span></p>
            <img class="hidden-xs hidden-sm hidden-md" src="assets/img/arrow1_bis.png" alt="">
          </div>
          <div class="col-lg-8">
            <img class="img-responsive" src="assets/img/main_affiche.png" alt="Notre jeu">
          </div>
          <div class="col-lg-2">
            <br>
            <img class="hidden-xs hidden-sm hidden-md" src="assets/img/arrow2_bis.png" alt="">
            <p><span class="hidden-lg"><i class="fa fa-2x fa-angle-up"></i></span></p>
            <h5>Ça aussi&nbsp;!</h5>
            <p>Toute la puissance des technos modernes, r&eacute;unies pour vous dans un jeu d&eacute;licieusement r&eacute;tro. Excellent.</p>
          </div>
        </div>
      </div>
    </div>


    <!-- Project -->
    <section id="projet" name="projet"></section>
    <!-- INTRO WRAP -->
    <div id="intro">
      <div class="container">
        <div class="row centered">
          <h1>Nos engagements</h1>
          <br>
          <br>
          <div class="feature col-md-4">
            <i class="fa fa-globe fa-3x"></i>
            <h3>Multi-plateformes</h3>
            <p>Disponible en ex&eacute;cutables pour Windows et GNU/Linux.<br/>
              Votre plateforme n'est pas incluse&nbsp;? Vous avez la possibilit&eacute; de compiler vous-m&ecirc;me le code.</p>
          </div>
          <div class="feature col-md-4">
            <i class="fa fa-code fa-3x"></i>
            <h3>Code libre</h3>
            <p>Parce que nous croyons en un web libre et au partage des connaissances, l'int&eacute;gralit&eacute; du code utilis&eacute; pour le d&eacute;veloppement du jeu est public et libre de droits.<br/> Et c'est aussi le cas du site.</p>
          </div>
          <div class="feature col-md-4">
            <i class="fa fa-wrench fa-3x"></i>
            <h3>Personnalisable</h3>
            <p>Tout le programme est enti&egrave;rement personnalisable, rapidement et simplement.<br/>Changez les images, les scores ou les vitesses en quelques clics, et construisez un jeu qui vous ressemble.</p>
          </div>
        </div>
        <br>
        <hr>
      </div>
    </div>

    <!-- Progress -->
    <div id="progress">
      <div class="container">
        <div class="row centered">
          <h1>Avancement du projet</h1>
          <br>
          <br>
          <div class="col-md-offset-3 col-md-6">
            <div class="progress tooltip-js" data-toggle="tooltip" data-placement="auto top" title="80 %">
              <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
              </div>
            </div>
            <p><strong>&Eacute;tape actuelle :</strong> <em>M&eacute;canisme de d&eacute;fense des briques</em></p>
            <br>
            <p>Le projet est actuellement en d&eacute;veloppement ; toutes les fonctionnalit&eacute;s peuvent ne pas &ecirc;tre impl&eacute;ment&eacute;es correctement.
              <br>Vous pouvez facilement contribuer au projet : du code, une correction, un favori ou m&ecirc;me un test du jeu ; chaque action compte&nbsp;!
            </p>
          </div>
          <div class="col-md-offset-3 col-md-6">
            <a href="http://github.com/loganbraga/breakinvaders" target="_blank"><button type="button" class="btn btn-lg btn-danger"><i class="fa fa-github"></i> D&eacute;p&ocirc;t Github</button></a>
            <button type="button" class="btn btn-lg btn-default" data-toggle="modal" data-target="#contributeModal"><i class="fa fa-star"></i> Contribuer</button>
          </div>
          <div class="modal fade" id="contributeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="myModalLabel">Comment contribuer&nbsp;?</h4>
                </div>
                <div class="modal-body">
                  <h5>D&eacute;veloppeurs, pourquoi ne pas...</h5>
                  <ul>
                    <li>Faire une revue du code&nbsp;?</li>
                    <li>Corriger quelques bugs&nbsp;?</li>
                    <li>Impl&eacute;menter vos fonctionnalit&eacute;s&nbsp;?</li>
                    <li>Proposer des ex&eacute;cutables pour des plateformes suppl&eacute;mentaires&nbsp;?</li>
                  </ul>
                  <h5>Amateurs, pourquoi ne pas...</h5>
                  <ul>
                    <li>Tester le jeu avec retours&nbsp;?</li>
                    <li>Suivre le projet sur Github&nbsp;?</li>
                    <li>Nous envoyer un petit mot&nbsp;?</li>
                    <li>En parler un peu&nbsp;?</li>
                  </ul>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-check"></i> Okay&nbsp;!</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <br>
        <hr>
      </div>
    </div>

    <!-- FEATURES WRAP -->
    <div id="features" class="container">
      <div class="row">
        <h1 class="centered">Plus d'infos</h1>
        <br>
        <br>
        <div class="col-sm-6 col-lg-4 col-lg-offset-1 centered">
          <img class="hidden-xs centered" src="assets/img/affiche2.png" alt="Screenshot">
        </div>

        <div class="col-sm-6">
          <a class="accordion ac accordion-toggle" data-toggle="collapse" data-parent="#features" href="#game-rules">
            <h3>Comment jouer&nbsp;?</h3>
          </a>
          <br>
          <?php include('sendScoreForm.php'); ?>
          <!-- ACCORDION -->
          <div class="accordion ac" id="game-rules" class="accordion-body collapse in">
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#game-rules" href="#rules-concept">
                  Le Principe</a>
              </div>
              <div id="rules-concept" class="accordion-body collapse in">
                <div class="accordion-inner">
                  <p>
                    BreakInvaders est un mélange entre le traditionnel casse-briques et le non moins célèbre Space Invaders. Le but est de réussir à obtenir le plus haut score, en éliminant les briques. Mais attention, elles peuvent se défendre&nbsp;, tandis que les noires ne se laisseront pas briser si facilement ! Garre aux murs, qui peuvent vous renvoyer la balle avec force...
                  </p>
                </div>
              </div>
            </div>
            <br>

            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#game-rules" href="#rules-lives">
                  Les Vies &nbsp;<i class="black fa fa-angle-down"></i>
                </a>
              </div>
              <div id="rules-lives" class="accordion-body collapse">
                <div class="accordion-inner">
                  <p>
                    D&egrave;s le d&eacute;but de la partie, d&eacute;placez votre palette afin de rattraper la balle, et visez les briques. Si la balle tombe, c'est perdu... Enfin, apr&egrave;s 3 essais&nbsp;! Visez les briques sp&eacute;ciales (vous les reconnaitrez&nbsp;!) et obtenez des vies en plus... ou en moins.
                  </p>
                </div>
              </div>
            </div>
            <br>

            <div class="accordion-group">
              <div class="accordion-heading">
                <a id="scoresAnchor" class="accordion-toggle" data-toggle="collapse" data-parent="#game-rules" href="#rules-score">
                  Les Scores  &nbsp;<i class="black fa fa-angle-down"></i>
                </a>
              </div>
              <div id="rules-score" class="accordion-body collapse">
                <div class="accordion-inner">
                  <p>
                    Pour chaque brique cass&eacute;e, votre score est incr&eacute;ment&eacute;. Les points que rapportent chaque brique sont calcul&eacute;s selon sa position : plus la brique est dure &agrave; atteindre, et plus elle vous rapportera de points.
                    <br/>Le nombre de vies restant en fin de partie vous accorde un bonus de points : les vrais survivants sont bien &eacute;videmment r&eacute;compens&eacute;s... Les lâches, aussi, puisque vous faire toucher par un missile diminue votre score&nbsp;!
                  </p>
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#highScoresModal"><i class="fa fa-flash"></i> Meilleurs scores</button>
                </div>
              </div>
            </div>
            <br>

            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#game-rules" href="#rules-controles">
                  Les Contrôles  &nbsp;<i class="black fa fa-angle-down"></i>
                </a>
              </div>
              <div id="rules-controles" class="accordion-body collapse">
                <div class="accordion-inner">
                  <br>
                  <ul>
                    <li><strong>Lancer le jeu</strong>
                      <ul>
                        <li>Espace</li>
                    </ul></li>
                    <li><strong>Quitter le jeu</strong>
                      <ul>
                        <li>Echap</li>
                        <li>Q</li>
                    </ul></li>
                    <li><strong>Relancer la partie</strong>
                      <ul>
                        <li>R</li>
                    </ul></li>
                    <li><strong>Mettre en pause</strong>
                      <ul>
                        <li>Espace</li>
                        <li>P</li>
                    </ul></li>
                    <li><strong>Activer/D&eacute;sactiver le mode Nuit</strong>
                      <ul>
                        <li>N</li>
                      </ul></li>
                    <li><strong>D&eacute;placer la palette</strong>
                      <ul>
                        <li>Gauche</li>
                        <ul>
                          <li>Fl&egrave;che gauche, Fl&egrave;che haut, H, J</li>
                        </ul>
                        <li>Droite</li>
                        <ul>
                          <li>Fl&egrave;che droite, Fl&egrave;che bas, K, L</li>
                        </ul>
                    </ul></li>
                  </ul>
                </div>
              </div>
            </div>
            <br>
          </div>

          <div class="modal fade" id="highScoresModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="myModalLabel">Les meilleurs scores</h4>
                </div>
                <form id="scoresForm" role="form" action="#features" method="post" enctype="plain">
                  <div class="modal-body">
                    <table class="table table-stripped table-hover table-responsive table-bordered">
                      <tr class="active">
                        <th>Rang</th>
                        <th>Nom</th>
                        <th>Score</th>
                      </tr>
                      <tr>
                        <td><strong>1</strong></td>
                        <td>Claire Delaye</td>
                        <td>13 524</td>
                      </tr>
                      <tr>
                        <td><strong>2</strong></td>
                        <td>Logan Braga</td>
                        <td>12 553</td>
                      </tr>
                      <tr>
                        <td><strong>3</strong></td>
                        <td><em>Place &agrave; prendre&nbsp;!</em></td>
                        <td>0</td>
                      </tr>
                    </table>
                    <hr>
                    <h4>Envoyer vos scores</h4>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                        <input id="scoreName" type="text" name="scoreName" class="form-control input-lg" placeholder="Nom..." maxlength="51" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope fa-fw"></i></span>
                        <input id="scoreEmail" type="email" name="scoreEmail" class="form-control input-lg" placeholder="Mail..." maxlength="256" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-picture-o fa-fw"></i></span>
                        <input id="scoreURL" type="url" name="scoreURL" class="form-control input-lg" placeholder="Lien du screenshot..." maxlength="2000" required>
                      </div>
                    </div>
                    <br>
                    <button type="submit" id="sendScoreForm" class="btn btn-default" name="sendScoreForm"><i class="fa fa-check"></i> Envoyer</button>
                    <button type="reset" id="resetScoreForm" class="btn btn-danger"><i class="fa fa-times"></i> Annuler</button>
                  </div>
                </form>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-check"></i> Okay !</button>
                </div>
              </div>
            </div>
          </div>

          <a class="accordion ac accordion-toggle" data-toggle="collapse" data-parent="#features" href="#context">
            <h3>Contexte du Projet</h3>
          </a>
          <br>

          <div class="accordion ac" id="context" class="accordion-body collapse in">
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#context" href="#initiative">
                  L'initiative&nbsp;<i class="black fa fa-angle-down"></i></a>
              </div>
              <div id="initiative" class="accordion-body collapse">
                <div class="accordion-inner">
                  <p>
                    L'initiative du projet vient du Cours <em>Gestion de Projet</em> de l'IUT MMI du Puy-en-Velay, promotion 2013-2014.
                    Le but est de r&eacute;aliser un projet, quelconque, sur le th&egrave;me du <em>Pixel Art</em> ; vid&eacute;os, murales, jeux, ..., pas plus de contraintes.
                  </p>
                </div>
              </div>
            </div>
            <br>

            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#context" href="#members">
                  Les Participants&nbsp;<i class="black fa fa-angle-down"></i></a>
              </div>
              <div id="members" class="accordion-body collapse">
                <div class="accordion-inner">
                  <p>
                    Les &eacute;l&egrave;ves participants &agrave; ce projet sont Logan <em>BRAGA</em>, Claire <em>DELAYE</em> et Marie <em>NUEL</em>, tous trois &eacute;tudiants &agrave; l'IUT du Puy-en-Velay, et dont
                    vous pouvez retrouver les informations <a class="goto" href="#contact">ici</a>.
                  </p>
                </div>
              </div>
            </div>
            <br>

            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle accordion ac" data-toggle="collapse" data-parent="#context" href="#following">
                  La Suite&nbsp;<i class="black fa fa-angle-down"></i></a>
              </div>
              <div id="following" class="accordion-body collapse">
                <div class="accordion-inner">
                  <p>
                    Le projet consiste essentiellement en la gestion d'un projet concret et la mise en place d'un site support ; la r&eacute;alisation m&ecirc;me du projet (ici, le jeu) &eacute;tant facultative.
                    L'ensemble est d&ucirc; au Lundi 02 Juin 2014. Pass&eacute; cette date, le jeu ne sera d&eacute;velopp&eacute; qu'en tant que hobby ponctuel et devrait recevoir des mises &agrave; jour beaucoup plus terses.<br>
                    Si, n&eacute;anmoins, le projet vous int&eacute;resse, vous pouvez <a class="goto" href="#contact">nous contacter</a> pour &eacute;tudier les modalit&eacute;s de contributions permanentes sur le Github du projet.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <br>
        </div>
      </div>
    </div>


    <!-- Download -->
    <section id="download" name="download"></section>
    <div id="download">
      <div class="container">
        <div class="row centered">
          <h1>T&eacute;l&eacute;charger le jeu</h1>
          <br>
          <br>
          <div class="col-md-10 col-md-offset-1 centered">
            <div class="col-md-6 operating-system" data-toggle="collapse" data-target="#windowsDL">
              <i class="fa fa-3x fa-windows"></i>
              <h3>Windows</h3>
              <br>
              <p>
                Compatible Windows&nbsp;Vista&#0153;, Windows&nbsp;Seven&#0153; et Windows&nbsp;8&#0153;. La d&eacute;sactivation de l'antivirus peut &ecirc;tre n&eacute;cessaire au lancement de l'ex&eacute;cutable.
              </p>
              <i class="fa fa-chevron-down"></i>
              <div class="collapse" id="windowsDL">
                <hr>
                <h5>Machines x86_64</h5>
                <p><a class="tooltip-js goto" data-toggle="tooltip" data-placement="left" title="Non disponible"  href="#download">Archive .zip</a>
                  <br>
                  <a class="tooltip-js goto" data-toggle="tooltip" data-placement="left" title="Non disponible"  href="#download">Ex&eacute;cutable binaire</a></p>
                <h5>Machines i686</h5>
                <p><a class="tooltip-js goto" data-toggle="tooltip" data-placement="left" title="Non disponible" href="#download">Archive .zip</a>
                  <br>
                  <a class="tooltip-js goto" data-toggle="tooltip" data-placement="left" title="Non disponible" href="#download">Ex&eacute;cutable binaire</a></p>
              </div>
            </div>
            <div class="col-md-6 operating-system" data-toggle="collapse" data-target="#linuxDL">
              <i class="fa fa-3x fa-linux"></i>
              <h3>GNU/Linux</h3>
              <br>
              <p>
                Compatible toutes distributions GNU/Linux. L'application du bit d'ex&eacute;cution peut &ecirc;tre n&eacute;cessaire
                au lancement de l'ex&eacute;cutable.
              </p>
              <i class="fa fa-chevron-down"></i>
              <div class="collapse" id="linuxDL">
                <hr>
                <h5>Machines x86_64</h5>
                <p><a href="/download/breakinvaders_linux_x86_64.zip" target="_blank">Archive .zip</a>
                  <br>
                  <a href="/download/breakinvaders_linux_x86_64">Ex&eacute;cutable binaire</a></p>
                <h5>Machines i686</h5>
                <p><a class="tooltip-js goto" data-toggle="tooltip" data-placement="right" title="Non disponible" href="#download">Archive .zip</a>
                  <br>
                  <a class="tooltip-js goto" data-toggle="tooltip" data-placement="right" title="Non disponible" href="#download">Ex&eacute;cutable binaire</a></p>
              </div>
            </div>
            <br>
          </div>
          <div class="col-md-10 col-md-offset-1 centered">
            <br>
            <p>Merci de signaler tout ex&eacute;cutable d&eacute;fectueux ou lien mort en <a class="goto" href="#contact">nous contactant</a>.</p>
          </div>
        </div>
        <br>
        <hr>
      </div>

      <div id="compile">
        <div class="container">
          <div class="row centered">
            <br>
            <br>
            <h1>Compiler le jeu</h1>
            <br>
            <br>
            <div class="instruction col-md-12 col-md-offset-0">
              <p>
                Votre plateforme n'est pas incluse, les ex&eacute;cutables ci-dessus ne vous conviennent pas ou vous aimez tout simplement compiler vos programmes&nbsp;?
                C'est possible&nbsp;!
                <br>
                <em>Attention, vise les utilisateurs avanc&eacute;s.</em>
              </p>
              <br>
              <div class="col-md-4">
                <h3><i class="fa fa-download"></i>&nbsp;R&eacute;cup&eacute;rer les sources</h3>
                <ol>
                  <li>R&eacute;cup&eacute;rer le code source sur <a href="https://github.com/loganbraga/breakinvaders/archive/master.zip">Github</a></li>
                  <li>Disposer d'un <a href="https://gcc.gnu.org/">compilateur C++</a></li>
                  <li>Installer l'utilitaire <a href="https://www.gnu.org/software/make/">GNU Make</a>&nbsp;/&nbsp;<a href="http://gnuwin32.sourceforge.net/packages/make.htm">Windows Make</a></li>
                  <li>Obtenir la biblioth&egrave;que <a href="http://qt-project.org/downloads">Qt</a></li>
                  <li>Installer le programme <a href="http://qt-project.org/wiki/category:tools::qtcreator">Qt Creator</a></li>
                </ol>
              </div>
              <div class="col-md-4">
                <h3><i class="fa fa-cogs"></i>&nbsp;Compiler</h3>
                <ol>
                  <li>G&eacute;n&eacute;rer le projet Qt</li>
                  <code>
                    qmake
                  </code>
                  <li>Lancer la compilation</li>
                  <code>
                    make
                  </code>
                  <li>Nettoyer le r&eacute;pertoire</li>
                  <code>
                    make clean
                  </code>
                </ol>
              </div>
              <div class="col-md-4">
                <h3><i class="fa fa-desktop"></i>&nbsp;Installer</h3>
                <ol>
                  <li>Installer le programme</li>
                  <code>
                    [sudo] make install
                  </code>
                  <li>Ajouter un raccourci</li>
                  <li>Recharger le <em>$PATH</em> et/ou le <em>shell</em></li>
                  <li>Jouer</li>
                  <code>
                    BreakInvaders
                  </code>
                </ol>
              </div>
            </div>
          </div>
        <br>
        <br>
        <hr>
        </div>
      </div>

      <div id="update">
        <div class="container">
          <div class="row">
            <br>
            <br>
            <h1 class="centered">Mettre &agrave; jour</h1>
            <br>
            <br>
            <div class="col-md-8 col-md-offset-2">
              <p class="centered">
                Le programme n'est (pour l'instant) pas capable de se mettre &agrave; jour automatiquement. Vous devrez v&eacute;rifier les mises &agrave; jours disponibles et les installer manuellement en r&eacute;p&eacute;tant les op&eacute;rations ci-dessus.
              </p>
              <div id="hints">
                <a class="accordion ac accordion-toggle" data-toggle="collapse" data-parent="#hints" href="#hints-list"><h4>Astuces&nbsp;<i class="fa fa-angle-down"></i></h4></a>
                <div id="hints-list" class="collapse">
                  <ul>
                    <li>Vous pouvez &ecirc;tre pr&eacute;venu des nouvelles mises &agrave; jour en suivant le <a href="http://github.com/loganbraga/breakinvaders" target="_blank">d&eacute;p&ocirc;t Github</a> du projet.</li>
                    <li>Si vous compilez depuis les sources fr&eacute;quemment, n'ex&eacute;cutez pas <code>make clean</code> : garder les fichiers objets pr&eacute;-compil&eacute;s permet de gagner du temps &agrave; la compilation.</li>
                    <li>Le programme peut ne plus se compiler/fonctionner si ses d&eacute;pendances ont subies d'importants changements ; surveillez les mises &agrave; jours requises des d&eacute;pendances dans le <em>changelog</em> du projet.</li>
                  </ul>
                </div>
              </div>
              <br>
              <table class="table">
                <caption>Historique des versions de BreakInvaders</caption>
                <tr class="active">
                  <th><i class="fa fa-tasks"></i>&nbsp;&nbsp;Version</th>
                  <th><i class="fa fa-calendar"></i>&nbsp;&nbsp;Date</th>
                  <th><i class="fa fa-github"></i>&nbsp;&nbsp;Commit</th>
                </tr>
                <tr>
                  <td><strong>1.0.0</strong></td>
                  <td><strong>01/06/2014</strong></td>
                  <td><strong><a class="tooltip-js" href="https://github.com/loganbraga/breakinvaders/commit/7d8248bf8dea0d121719e51e4156068dd409696d" target="_blank" data-toggle="tooltip" data-placemen="auto top" title="e7b373a2c4440f560a9a6799fcd97c4106eaca56">7d8248bf8dea0d12171...</a></strong></td>
                </tr>
                <tr>
                  <td>0.2.1</td>
                  <td>17/05/2014</td>
                  <td><a class="tooltip-js" href="https://github.com/loganbraga/breakinvaders/commit/e7b373a2c4440f560a9a6799fcd97c4106eaca56" target="_blank" data-toggle="tooltip" data-placemen="auto top" title="e7b373a2c4440f560a9a6799fcd97c4106eaca56">e7b373a2c4440f560a9a...</a></td>
                </tr>
                <tr>
                  <td>0.1.1</td>
                  <td>15/05/2014</td>
                  <td><a class="tooltip-js" href="https://github.com/loganbraga/breakinvaders/commit/42ac1de982664884b45974b0f3333dfc11fd0d43" target="_blank" data-toggle="tooltip" data-placemen="auto top" title="42ac1de982664884b45974b0f3333dfc11fd0d43">42ac1de982664884b459...</a></td>
                </tr>
              </table>
              <div id="tableExplain">
                <a class="accordion ac accordion-toggle" data-toggle="collapse" data-parent="#tableExplain" href="#explain-list"><h5><i class="fa fa-info-circle"></i>&nbsp;&nbsp;Comment &ccedil;a marche&nbsp;?</h5></a>
                <div id="explain-list" class="collapse">
                  <p>Les versions sont num&eacute;rot&eacute;es sous la forme <strong>X</strong>.<strong>Y</strong>.<strong>Z</strong>, avec :</p>
                  <ul>
                    <li><strong>X</strong> num&eacute;ro de version majeure</li>
                    <li><strong>Y</strong> num&eacute;ro de fonctionnalit&eacute;</li>
                    <li><strong>Z</strong> num&eacute;ro de correction de bug</li>
                  </ul>
                  <p>L'identifiant de version se lit de droite &agrave; gauche&nbsp;:</p>
                  <blockquote>Correction <strong>Z</strong> de fonctionnalit&eacute; <strong>Y</strong> dans la version <strong>X</strong> du programme.</blockquote>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>
      <br>

    </div>

    <!-- Contact -->
    <section id="contact" name="contact"></section>
    <div id="footerwrap">
      <div class="container">
        <div class="col-lg-5">
          <h3>Qui sommes-nous&nbsp;?</h3>
          <p>
            Logan BRAGA
            &lt;<a href="http://loganbraga.fr/" target="_blank">loganbraga.fr</a>&gt;<br/>
            <em>D&eacute;veloppeur &eacute;tudiant<br/></em>
            <br/>
            Claire DELAYE
            &lt;<a href="http://delaye-claire.fr/" target="_blank">delaye-claire.fr</a>&gt;<br/>
            <em>Graphiste &eacute;tudiante<br></em>
            <br/>
            Marie NUEL
            &lt;<a href="http://marienuel.com/" target="_blank">marienuel.com</a>&gt;<br/>
            <em>Community Manager &eacute;tudiante<br></em>
          </p>
        </div>

        <div class="col-lg-6">
          <h3>Nous contacter</h3>
          <br>
          <?php include('sendMailForm.php'); ?>
          <form id="contactForm" role="form" action="#contact" method="post" enctype="plain">
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                <input id="name" type="text" name="name" class="form-control input-lg" placeholder="Nom..." maxlength="51" required>
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope fa-fw"></i></span>
                <input id="email" type="email" name="email" class="form-control input-lg" placeholder="Mail..." maxlength="256" required>
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-comment fa-fw"></i></span>
                <textarea id="message" class="tooltip-js form-control input-lg" name="message" rows="5" placeholder="Message..." maxlength="10001" required></textarea>
              </div>
            </div>
            <br>
            <button type="submit" name="sendContactForm" id="sendContactForm" class="btn btn-lg btn-default"><i class="fa fa-check"></i> ENVOYER</button>
            <button type="reset" id="formReset" class="btn btn-lg btn-danger"><i class="fa fa-times"></i> ANNULER</button>
          </form>
        </div>
      </div>
    </div>

    <div id="credits">
      <div class="container">
        <p>Logan <b>BRAGA</b> - Claire <b>DELAYE</b> - Marie <b>NUEL</b>
          <br/>Licence <a href="https://github.com/loganbraga/breakinvaders/blob/master/LICENCE">WTFPL</a>
          <br/><span class='mini'>Base th&egrave;me par <a href="http://www.blacktie.co">blacktie.co</a></span></p>
      </div>
    </div>

    <!-- Javascript -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/easing.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/bootstrap.js"></script>
  </body>

</html>
