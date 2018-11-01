<div class="modal fade" id="add-content-modal" tabindex="-1" role="dialog" aria-labelledby="add-content-modal-label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form  action="#" method="POST">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add new content</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <div class="form-group">
            <label for="input-username">Name</label>
            <input type="text" class="form-control" id="input-username" name="name" aria-describedby="nameHelp" placeholder="Enter name">
          </div>
          <div class="form-group">
            <label for="input-description">Description</label>
            <input type="text" class="form-control" id="input-description" name="description" aria-describedby="descriptionHelp" placeholder="Enter description">
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Add content</button>
        </div>
      </div>
    </form>
  </div>
</div>