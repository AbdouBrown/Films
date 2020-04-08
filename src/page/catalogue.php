
<?php


$films =  getCatalogueElements() ;

ob_start();
?>
<div class="dropdown mb-1">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Trier par
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Date d'ajout</a>
    <a class="dropdown-item" href="#">Ordre Croissant</a>
    <a class="dropdown-item" href="#">Ordre décroissant</a>
  </div>
</div>

<div>
<?php foreach ($films as $film): ?>
  <div class="card mb-1" style="max-width: 1000px;">
  
    <div class="row no-gutters">
      <div class="col-md-2">
        <img src="..." class="card-img" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title"><?= $film['mov_title'] ; ?></h5>
          <p class="card-text"><?= $film['mov_poster'] ; ?>
            </p>        
        </div>
      </div>
      <div class="col-md-2">
      <p><button type="button" class="btn btn-primary btn-lg ml-3 ">Details</button> </p>
      <p><button type="button" class="btn btn-primary btn-lg ml-3 ">Modifier</button> </p>
      </div>
    </div>
  </div>

  
  <?php endforeach ; ?>

  <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
</div>



<?php



$content = ob_get_clean();

require_once '../template.php'  ;