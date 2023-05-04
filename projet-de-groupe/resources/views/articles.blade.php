<html>
<head>
	<title>Blog d'un groupe</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<section class="article">
    <div class="container">
        <div class="row">
            <?php if (isset($articles) && !empty($articles)) : ?>
                <?php foreach ($articles as $article): ?>
                    <div class="col-md-4">
                        <img src="<?php echo $article['image']; ?>" alt="Image" class="img-fluid">
                        <h2><?php echo $article['title']; ?></h2>
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
                        @guest
@else
    <div class="text-right mb-3">
        <a href="{{ route('articles.create') }}" class="btn btn-primary">Créer un article</a>
    </div>
@endguest

                        <p><?php echo $article['content']; ?></p>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
              <a href="{{ route('articles.create') }}" class="btn btn-primary">Créer</a>
                <p>Aucun article disponible pour le moment.</p>
            <?php endif; ?>
        </div>
    </div>
</section>
</body>
</html>