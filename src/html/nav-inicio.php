          <div class="container-fluid fixed-bottom  bg-tramparente">
  <nav class="pt-1 mt-1">

	   
	        <ul class="nav nav-tabs mt-2 justify-content-center border-bottom pb-3 mb-3">
  <li class="nav-item"><a href="/dashboard" class="nav-link ">dashboard</a></li>
<?php $estado = "active"; ?>
  <?php
  foreach ($nav_items as $nav_item): ?>
    
    
            <li class="nav-item ">
            <a class="nav-link <?= $estado ?>  px-1 text-muted h6" id="perfil-tab" data-bs-toggle="tab" href="#<?= $nav_item ?>"><?= $nav_item ?></a>
            <i class="nav-link <?= $estado ?>  px-1 text-muted h6" id="perfil-tab" data-bs-toggle="tab" href="#<?= $nav_item ?>"><?= $nav_item ?></i>
            </li>

<?php
 $estado = "";
  
    endforeach;
 ?>
                </ul>
  </nav>
</div>

