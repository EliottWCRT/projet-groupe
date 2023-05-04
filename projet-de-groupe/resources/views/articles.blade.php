<html>
<head>
	<title>Blog d'un groupe de musique</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
      <!--Contenu-->
    <h1 class="text-center">Blog</h1>
    <br>
    <section class="article">
        <div class="container">
          <div class="row">
            <div class="col-md-4" class="card">
              <img src="images/IMG_3370.JPG" class="card-img-top" alt="Image">
              <div class="card-body">
                <h5 class="card-title">Article 1</h5>
                @guest
                @else
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Options
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item">Modifier</a>
                            <a class="dropdown-item">Supprimer</a>
                        </div>
                    </div>
                @endguest
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor, justo quis commodo consectetur, eros tortor pharetra turpis, sit amet aliquet neque massa id quam.</p>
                <div class="form-group">
                  @guest
      @else
      <label for="comment">Commenter :</label>
      @endguest
                  @guest
                  @else
                  <textarea class="form-control" id="comment" rows="3"></textarea>
                  @endguest
                </div>
                @guest
                  @else
                <button type="button" class="btn btn-primary">Envoyer</button>
                @endguest
              </div>
              <div class="card-footer">
                <h6>Commentaires:</h6>
                <ul class="list-group list-group-flush">
                </ul>
              </div>
            </div>
<div class="col-md-4" class="card">
  <img src="images/IMG_3370.JPG" class="card-img-top" alt="Image">
  <div class="card-body">
    <h5 class="card-title">Article 2</h5>
    @guest
    @else
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Options
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item">Modifier</a>
                <a class="dropdown-item">Supprimer</a>
            </div>
        </div>
    @endguest
    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor, justo quis commodo consectetur, eros tortor pharetra turpis, sit amet aliquet neque massa id quam.</p>
    <div class="form-group">
      @guest
      @else
      <label for="comment">Commenter :</label>
      @endguest
      @guest
                  @else
                  <textarea class="form-control" id="comment" rows="3"></textarea>
                  @endguest
                </div>
                @guest
                  @else
                <button type="button" class="btn btn-primary">Envoyer</button>
                @endguest
  </div>
  <div class="card-footer">
    <h6>Commentaires:</h6>
    <ul class="list-group list-group-flush">
    </ul>
  </div>
</div>
<div class="col-md-4" class="card">
  <img src="images/IMG_3370.JPG" class="card-img-top" alt="Image">
  <div class="card-body">
    <h5 class="card-title">Article 3</h5>
    @guest
    @else
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Options
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item">Modifier</a>
                <a class="dropdown-item">Supprimer</a>
            </div>
        </div>
    @endguest
    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor, justo quis commodo consectetur, eros tortor pharetra turpis, sit amet aliquet neque massa id quam.</p>
    <div class="form-group">
      @guest
      @else
      <label for="comment">Commenter :</label>
      @endguest
      @guest
                  @else
                  <textarea class="form-control" id="comment" rows="3"></textarea>
                  @endguest
                </div>
                @guest
                  @else
                <button type="button" class="btn btn-primary">Envoyer</button>
                @endguest
  </div>
  <div class="card-footer">
    <h6>Commentaires:</h6>
    <ul class="list-group list-group-flush">
    </ul>
  </div>
</div>
<div class="col-md-4" class="card">
  <img src="images/IMG_3370.JPG" class="card-img-top" alt="Image">
  <div class="card-body">
    <h5 class="card-title">Article 4</h5>
    @guest
    @else
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Options
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item">Modifier</a>
                <a class="dropdown-item">Supprimer</a>
            </div>
        </div>
    @endguest
    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor, justo quis commodo consectetur, eros tortor pharetra turpis, sit amet aliquet neque massa id quam.</p>
    <div class="form-group">
      @guest
      @else
      <label for="comment">Commenter :</label>
      @endguest
      @guest
      @else
      <textarea class="form-control" id="comment" rows="3"></textarea>
      @endguest
    </div>
    @guest
      @else
    <button type="button" class="btn btn-primary">Envoyer</button>
    @endguest
  </div>
  <div class="card-footer">
    <h6>Commentaires:</h6>
    <ul class="list-group list-group-flush">
    </ul>
  </div>
</div>
          </div>
        </div>
      </section>
      <!--Fin contenu-->  
      <footer class="bg-dark text-light py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <p>© 2023 Blog. Tous droits réservés.</p>
      </div>
    </div>
  </div>
</footer>
<script>
  // Sélectionne le bouton "Envoyer"
  const sendButton = document.querySelector('button.btn-primary');

  // Ajoute un écouteur d'événements sur le clic du bouton "Envoyer"
  sendButton.addEventListener('click', () => {
    // Récupère le contenu du champ de texte
    const commentContent = document.querySelector('#comment').value;

    // Sélectionne la liste de commentaires existante
    const commentList = document.querySelector('.list-group');

    // Crée un nouvel élément de liste contenant le commentaire
    const newComment = document.createElement('li');
    newComment.classList.add('list-group-item');
    newComment.textContent = commentContent;

    // Ajoute le nouvel élément de liste à la fin de la liste existante
    commentList.appendChild(newComment);

    // Réinitialise le champ de texte
    document.querySelector('#comment').value = '';
  });
</script>
</body>
</html>