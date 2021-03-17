<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

      <title>Hello, world!</title>
  </head>
  <body style="background-color: #DCDCDC">


  <main>

      <!--La navbar-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">LPTF</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href="https://laplateforme.io/">Acceuil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="#">Units</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Jobs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Skills</a>
        </li>
      </ul>

    </div>
  </div>
</nav>


 <!--Le titre-->
<div style="text-align: center">
    <p class="display-4">LaPlateform_</p>
</div>
<section style="display: flex; justify-content: space-around;" >
    <!--La section qui contient papillons-->
<div class="card" style="width: 15vw; height: 37vh;">
  <img style="height: 15vh;" src="https://th.bing.com/th/id/Re62adabb906c6cbd6cf153de30bf5d80?rik=XkJ2enDC5Z8hcg&riu=http%3a%2f%2fpulmofit.com%2fuploads%2fgallery%2f43d0eddbfca46173d3ff28ed9adbbb6b.jpg&ehk=ld6YFl0UsZed2moDUiF3adQd63FdXWiKPAFjy8Q60co%3d&risl=&pid=ImgRaw" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Un papillon</h5>
    <p class="card-text">Un papillon c'est comme une chenille, mais avec des ailes.<br> Ne pas ingerer </p>
    <div class="d-grid gap-2 col-15 mx-auto">
      <button class="btn btn-primary" type="button"   data-bs-toggle="modal" data-bs-target="#staticBackdrop">Commander votre propre papillon</button>
    </div>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Papillon</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h1>Voulez vous acheter ce papillon qui est une espèce protégé et illégal à l'achat ? </h1>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Valider</button>
      </div>
    </div>
  </div>
</div>
  </div>
</div>
<!--Le menu au centre-->
    <div style="background-color: #E9ECEF; width: 70vw; padding-left: 2%; padding-right: 2%; padding-top: 3.5%"> <div class="jumbotron">
  <h1 class="display-4">Bonjour, monde!</h1>
  <p class="lead" id="p1">Il existe plusieurs vision du terme : <br><br>
    Le monde est la matiere, l'espace et les phénomènes qui nous sont accessibles par le sens, l'experience ou la raison.<br><br>
      Le sens le plus courant désigne notre planète, la Terre, avec ses habitants, et son environnement plus ou moins naturel.</p>

            <!--Les citations-->
            <p class="lead" id="p2">
                Eldon Tyrell : Le commerce est notre seul but chez Tyrell. Plus humain que l'humain est notre devise.
            </p>
                <p id="para" class="lead para"></p>

            <p class="lead" id="p3">
                Rick Deckard : Secouée ? Moi aussi. Je m'y fais pas. Ça fait partie du business.
                Rachel : Je ne suis pas dans le business. C'est moi le business.
            </p>


            <p class="lead" id="p4">
                Roy Batty : Quelle expérience de vivre dans la peur ! Voilà ce que c'est que d'être un esclave.
            </p>



  <hr class="my-4">
  <p>Le sens étendu désigne l'univers dans son enssemble.</p>
            <button tabindex="0"  id="buttonalpha" class="btn btn-lg btn-danger" role="button" data-bs-toggle="popover" data-bs-trigger="focus" title="Dismissible popover" data-bs-content="And here's some amazing content. It's very engaging. Right?">Rebooter le Monde!</button>
<div class="spinner-border text-danger text-secondary text-success text-warning text-info text-dark text-info text-primary" id="cerc" role="status">
  <span class="visually-hidden"></span>
</div>
    <div style="display: flex; flex-direction: row-reverse">
             <nav aria-label="Page navigation example">
              <ul class="pagination">
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li> <!--Cette pagination est le contenue de mon choix. Les citation mais dans un ordre.-->
                  <button class="page-link page-item"  id="parabutton1">1</button>
                  <button class="page-link page-item"  id="parabutton2">2</button>
                  <button class="page-link page-item"  id="parabutton3">3</button>
                  <button class="page-link page-item"  id="parabutton4">4</button>
                <div class="page-item">
                </div>
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
              </ul>
        </nav>

    </div>
</div>
    </div>
        <!--Les onglet-->
        <div>
            <ul class="list-group">
                <li id="11" onclick="active($('#11'))" class="list-group-item relo">Limbes</li>
                <li  id="22" onclick="active($('#22'))" class="list-group-item relo">Luxure</li>
                <li id="33" onclick="active($('#33'))" class="list-group-item relo">Gourmandise</li>
                <li id="44" onclick="active($('#44'))" class="list-group-item relo">Avarice</li>
                <li id="55" onclick="active($('#55'))" class="list-group-item relo">Colere</li>
                <li id="66" onclick="active($('#66'))" class="list-group-item relo">Heresie</li>
                <li id="77" onclick="active($('#77'))" class="list-group-item relo">Violence</li>
                <li id="88" onclick="active($('#88'))" class="list-group-item relo">Ruse et tromperie</li>
                <li id="99" onclick="active($('#99'))" class="list-group-item relo">Trahison</li>
                <li id="111" onclick="active($('#111'))" class="list-group-item relo">Internet Explorer</li>
            </ul>
        </div>
</section>  <!--La barre de progression-->
      <section style="margin-top: 1.7%">
          <div style="display: flex; justify-content: center; margin-left: 37%">
              <h5>Instalation de AI 9000</h5>
          </div>
          <div style="display: flex; justify-content: center">
                <svg  id="bM" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5zM10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5z"/>
                  </svg>
                    <div class="progress" style="width: 1000px;">
                         <div class="progress-bar progress-bar-striped bg-warning barre"  role="progressbar"  style="width: 30% " aria-valuenow="20" aria-valuemin="" aria-valuemax="50"></div>
                    </div>
                  <svg  id="bp" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M6 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L12.293 7.5H6.5A.5.5 0 0 0 6 8zm-2.5 7a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5z"/>
                  </svg>
          </div>
    <div style="display: flex; justify-content: space-around; margin-top: 1.5%">
        <div>

                  <!-- affichage form -->
            <h5>Recevez votre copie gratuite d'internet 2!</h5>

                <div class="input-group mb-3" style="width: 25vw;">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">@</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Login" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3" style="width: 25vw;">
                    <input type="text" class="form-control" placeholder="Mot de Passe" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon2">@example.com</span>
                    </div>
                </div>
                <label for="basic-url" style="margin-bottom: 1.5%">URL des Internets 2 et 2.1 Beta</label>
                <div class="input-group mb-3"  style="width: 25vw;">
                    <div class="input-group-prepend">
                        <span class="input-group-text">DogeCoin</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                    <div class="input-group-append">
                        <span class="input-group-text">.00</span>
                    </div>
                </div>
                <div class="input-group mb-3"  style="width: 25vw;">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon3">https://133t/ptf/dkwb/berlusconimkt/</span>
                    </div>
                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                </div>

        </div>

            <!-- affichage form connexion -->
            <form>
                <div class="form-group"  style="width: 15vw;">
                    <label for="exampleInputEmail1" style="margin-bottom: 3%">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="margin-bottom: 1%">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group"  style="width: 15vw;">
                    <label for="exampleInputPassword1" style="margin-top: 4%; margin-bottom: 3%">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="form-group form-check"  style="width: 20vw; margin-top: 3%; margin-bottom: 4.3%">
                    <input type="checkbox" style="background-color: #DEDEDE; font-size: 1.2vh"  class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <a href="#" onclick="g()"><button  style="color: white" type="submit" class="btn btn-primary">Submit</button></a>
            </form>
        </div>


          <div class="d-grid gap-2 col-15 mx-auto">
    </div>
      </section>




<!-- Modal si on appuis au tout début de l'actualisation du site sur DGC en majuscule -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">informations des champs du formulaire</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <div class="input-group mb-3" style="width: 25vw;">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">@</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Login" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3" style="width: 25vw;">
                    <input type="text" class="form-control" placeholder="Mot de Passe" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon2">@example.com</span>
                    </div>
                </div>
                <label for="basic-url" style="margin-bottom: 1.5%">URL des Internets 2 et 2.1 Beta</label>
                <div class="input-group mb-3"  style="width: 25vw;">
                    <div class="input-group-prepend">
                        <span class="input-group-text">DogeCoin</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                    <div class="input-group-append">
                        <span class="input-group-text">.00</span>
                    </div>
                </div>
                <div class="input-group mb-3"  style="width: 25vw;">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon3">https://133t/ptf/dkwb/berlusconimkt/</span>
                    </div>
                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


  </main>
              <script type="text/javascript" src="script.js"></script>

  </body>
</html>


