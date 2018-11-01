<?php
  $page_name = "Posts List";
  include "partials/_header.php";
  include "partials/_menu.php";
?>

<main role="main" class="container">

  <div class="row">
    <div class="col-12">

      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add-content-modal">
        Add new content
      </button>

      <hr>

      <div class="list-group">
        <div class="list-group-item list-group-item-action align-items-start list-group-item-flex">
          <div class="list-group-item-tools">
            <a href="#" title="View"><i class="fas fa-eye"></i></a>
            <a href="edit.php" title="Edit"><i class="fas fa-pencil-alt"></i></a>
            <a href="#" title="Delete"><i class="far fa-trash-alt"></i></a>
          </div>
          <div class="list-group-item-content">
            <div class="d-flex w-90 justify-content-between">
              <h5 class="mb-1">How to deal with savage chicken ?</h5>
              <small>18 hours ago</small>
            </div>
            <p class="mb-1">Here are few steps you need to reproduce in order to catch a savage chicken ...</p>
            <small>#animal, #social, #experience</small>
          </div>
        </div>
        <div class="list-group-item list-group-item-action align-items-start list-group-item-flex">
          <div class="list-group-item-tools">
            <a href="#" title="View"><i class="fas fa-eye"></i></a>
            <a href="#" title="Edit"><i class="fas fa-pencil-alt"></i></a>
            <a href="#" title="Delete"><i class="far fa-trash-alt"></i></a>
          </div>
          <div class="list-group-item-content">
            <div class="d-flex w-90 justify-content-between">
              <h5 class="mb-1">Understand why the earth is flat in 5 minutes</h5>
              <small class="text-muted">2 days ago</small>
            </div>
            <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit...</p>
            <small class="text-muted">#space, #mindthinking, #truth, #reality</small>
          </div>
        </div>
        <div class="list-group-item list-group-item-action align-items-start list-group-item-flex">
          <div class="list-group-item-tools">
            <a href="#" title="View"><i class="fas fa-eye"></i></a>
            <a href="#" title="Edit"><i class="fas fa-pencil-alt"></i></a>
            <a href="#" title="Delete"><i class="far fa-trash-alt"></i></a>
          </div>
          <div class="list-group-item-content">
            <div class="d-flex w-90 justify-content-between">
              <h5 class="mb-1">Another article that no one will read</h5>
              <small class="text-muted">6 days ago</small>
            </div>
            <p class="mb-1">This is a full description of an upcoming post that you won't be interested in ...</p>
            <small class="text-muted">#article, #interest, #useless-tag</small>
          </div>
        </div>
      </div>

      <hr>

      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-end">
          <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1">Previous</a>
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
  </div>

</main><!-- /.container -->

<?php
  include "partials/_modal.php";
?>

<?php
  include "partials/_footer.php";
?>