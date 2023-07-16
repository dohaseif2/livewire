<div>
    @include('livewire.create')
    @if(session('success'))
        <div class="alert alert-success">{{session('success')}}</div>
        @endif
</div>

<table class="table">
    <thead>
      <tr>
        <th>name</th>
        <th>price</th>
        <th>details</th>
        <th>Controls</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
          <tr>
            <td>{{$product->name}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->details}}</td>
            <td>
                <button type="button" class="btn btn-primary"  wire:click="edit({{$product->id}})" data-toggle="modal"  data-target="#updatemodal" data-whatever="@mdo">Edit</button>
                @include('livewire.update')
                <button type="button" class="btn btn-danger"  wire:click="delete({{$product->id}})" data-toggle="modal" data-whatever="@mdo">Delete</button>
                

            </td>
          </tr>
        @endforeach
      
  
    </tbody>
  </table>