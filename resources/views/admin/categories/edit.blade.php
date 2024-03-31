@extends("admin.layouts.template")
@section('contenu')
<div class="card card-primary">
    <div class="card-header">
      <h3>Modifier categories</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form id="quickForm" method="post" action="{{route('categories.update',$category->id)}}">
    @csrf
    @method("put")
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Nom categories</label>
          <input type="text" name="name" value="{{$category->name}}" class="form-control @error("name") border-danger @enderror " id="name" placeholder="entrer le nom de la categories ">
          
          @error("name")
          <div class="text text-danger">{{$message}}</div>
          @enderror


        </div>


      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Modifier</button>
        <button type="reset" class="btn btn-secondary">Annuler</button>
      </div>
    </form>
  </div>

@endsection
