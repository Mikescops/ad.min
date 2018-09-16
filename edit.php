<?php
  $page_name = "Edit post";
  include "partials/_header.php";
  include "partials/_menu.php";
?>

<main role="main" class="container">

  <h2>Edit post #22</h2>

  <hr>

  <form>

    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="input-title">Title</span>
      </div>
      <input type="text" class="form-control" placeholder="Your awesome post title" aria-label="Title" aria-describedby="basic-addon1">
    </div>

    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text">Image</span>
      </div>
      <div class="custom-file">
        <input type="file" class="custom-file-input" id="inputGroupFile01">
        <label class="custom-file-label" for="inputGroupFile01">Choose a featured image</label>
      </div>
    </div>

    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text">Content</span>
      </div>
      <textarea class="form-control content-input" aria-label="Tell us your story..."></textarea>
    </div>

    <button type="submit" type="button" class="btn btn-primary float-right">Submit modifications</button>

  </form>

</main><!-- /.container -->

<?php
  include "partials/_footer.php";
?>