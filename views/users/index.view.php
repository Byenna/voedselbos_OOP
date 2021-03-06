<section class="bg-overlay">

<?php require 'views/admin/partials/header.view.php' ?>
 

<div class=" container">

  <div class="row">
    <div class="col-md-4 "></div>
    <div class="col-md-4 text-white text-center "><h1 class="text-nowrap display-1">De users</h1></div>
    <div class="col-md-4"></div>
  </div>
<div class="row" style="width: 40rem;">
  <div class=" fs-2 col-md-12">
      <div ><a class="link_create_user text-white" href="/user/create">Create new user</a></div>
 

  <?php foreach ($users as $user) : ?> 
    <div class="container" >
    <div class="card ">
    <div class="card-body" width="200">
    <img src="/public/images/website/dummy.png" width="300">
    <h5 class="fs-2 card-title"><?= $user -> first_name ?> <?= $user -> last_name ?></h5>
    <h6 class="fs-4 card-subtitle mb-2 text-muted"><?= $user -> city ?></h6>
    <p class="card-text">Email: <?= $user -> email ?></p>
    <a href="/user/<?= $user -> id ?>" class="card-link">Show</a>
    </div>
    </div>
    </div>
  <?php endforeach ?> 
  </div>
  </div>
  </div>
</div>
   

   
 
<?php require 'views/admin/partials/footer.view.php' ?>