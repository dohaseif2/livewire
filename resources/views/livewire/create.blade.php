



<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add new Product</button>


<div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Add product</h4>
      </div>
      <div class="modal-body">
        
        <form>
          <div class="form-group">
            <label for="recipient-name" class="control-label">Name:</label>
            <input type="text" class="form-control" placeholder="Enter Product Name" wire:model='name'>
            @error('name')<span class="text-danger">{{$message}}</span>@enderror
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">price:</label>
            <input type="number" class="form-control" placeholder="Enter Price" wire:model='price'>
            @error('price')<span class="text-danger">{{$message}}</span>@enderror
          </div>
         
          <div class="form-group">
            <label for="message-text" class="control-label">Details:</label>
            <textarea class="form-control" placeholder="Enter details of the product" wire:model='details'></textarea>
            @error('details')<span class="text-danger">{{$message}}</span>@enderror
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" wire:click.prevent="store()">Save product</button>
      </div>
    </div>
  </div>
</div>
