<?php
  $page_name = "Dashboard";
  include "partials/_header.php";
  include "partials/_menu.php";
?>

<main role="main" class="container-fluid">

  <div class="row">
    <div class="col-sm">
      <div class="contenttype-title">
        <h3>Posts</h3>
        <a href="" class="side-text-button" data-toggle="modal" data-target="#add-content-modal"><i class="fas fa-plus-circle"></i> New post</a>
      </div>
      <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action">How to deal with savage chicken ?</a>
        <a href="#" class="list-group-item list-group-item-action">Understand why the earth is flat in 5 minutes</a>
        <a href="#" class="list-group-item list-group-item-action">Another article that no one will read</a>
        <a href="#" class="list-group-item list-group-item-action">A new writer is here</a>
        <a href="#" class="list-group-item list-group-item-action">First post on this blog</a>
      </div>
      <a href="list.php" class="contenttype-all-button float-right">View all posts <i class="fas fa-chevron-circle-right"></i></a>
    </div>
    <div class="col-sm">
      <div class="contenttype-title">
        <h3>Pages</h3>
        <a href="" class="side-text-button" data-toggle="modal" data-target="#add-content-modal"><i class="fas fa-plus-circle"></i> New page</a>
      </div>
      <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action">About us</a>
        <a href="#" class="list-group-item list-group-item-action">Contact the team</a>
        <a href="#" class="list-group-item list-group-item-action">Legal mentions</a>
        <a href="#" class="list-group-item list-group-item-action">Our team</a>
        <a href="#" class="list-group-item list-group-item-action">Advertising on this website</a>
      </div>
      <a href="list.php" class="contenttype-all-button float-right">View all pages <i class="fas fa-chevron-circle-right"></i></a>
    </div>
    <div class="col-sm">
      <h3>Comments</h3>
      <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action">Cras justo odio</a>
        <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
        <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
        <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
        <a href="#" class="list-group-item list-group-item-action">Vestibulum at eros</a>
      </div>
      <a href="list.php" class="contenttype-all-button float-right">View all comments <i class="fas fa-chevron-circle-right"></i></a>
    </div>
  </div>

</main><!-- /.container -->

<?php
  include "partials/_modal.php";
?>

<?php
  include "partials/_footer.php";
?>