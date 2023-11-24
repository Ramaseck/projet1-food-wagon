<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title>Document</title>
</head>
<body> 
    <a href="/">Retour</a>
    <div class="container">
        <div class="row my-5">
            <div class="col-lg-12">
              <div class="id">{{!}}</div>
                <h2>Passer la Commande</h2>
                <div class="card sadow">
                    <div class="card-header d-flex justify-content-betweeen align-items-center">
                        <h3 class="text-light">Produit</h3>
                        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="bi bi-plus"></i>Remplir Informations</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Button trigger modal -->

  
  <!-- Modal -->
  @if (session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
            @endif
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="alert alert-danger">{{ $error }}</li>
                @endforeach
            </ul>
            
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Passer Commande</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="/details/traitement" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" name="telephone" class="form-control m-2" placeholder="téléphone">
            <input type="text" name="prix" class="form-control m-2" placeholder="Nom du produit">
            <input type="text" name="email" class="form-control m-2" placeholder="email">
            <input type="text" name="address" class="form-control m-2" placeholder="address">
            <button type="submit" class="btn btn-primary" >Enregistrer</button>
            <a href="/details" style="text-decoration: none;" class="btn btn-secondary">Annuler</a>

            

        </form>
        </div>
        </div>
      </div>
    </div>
  </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>
</body>
</html>