@extends("admin.layouts.template")
@section('contenu')
<div class="card card-primary">
    <div class="card-header">
      <h3>Modifier produits</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form id="quickForm" method="POST" action="{{route('products.update',$product->id )}}" enctype="multipart/form-data">
    @csrf
    @method('put')

      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Nom produit</label>

          <input type="text" name="name" value="{{$product->name}}" class="form-control @error("name") border-danger @enderror " id="name" placeholder="entrer le nom du produit ">
          @error("name")
          <div class="text text-danger">{{$message}}</div>
          @enderror


        </div>

        <div class="form-group">
            <label for="description">Description produit</label>

            <textarea name="description" class="form-control @error("description") border-danger @enderror " id="description" placeholder="entrer la description du produit ">{{$product->descrption}}</textarea>
            @error("description")
            <div class="text text-danger">{{$message}}</div>
            @enderror


          </div>

          <div class="form-group">
            <img src="{{asset('image/products/'.$product->photo1)}}"width="150">
            <label for="exampleInputEmail1">Photo1 produit</label>

            <input type="file" name="photos1" class="form-control @error("Photos1") border-danger @enderror " id="Photos1">
            @error("photos1")
            <div class="text text-danger">{{$message}}</div>
            @enderror


          </div>

          <div class="form-group">
            <img src="{{asset('image/products/'.$product->photo1)}}"width="150">
            <label for="exampleInputEmail1">Photo2 produit</label>

            <input type="file" name="photos2" class="form-control @error("Photos2") border-danger @enderror " id="Photos2">
            @error("photos2")
            <div class="text text-danger">{{$message}}</div>
            @enderror


          </div>

          <div class="form-group">
            <label for="price">Prix produit</label>

            <input type="number" name="price" value="{{$product->price}}" class="form-control @error("price") border-danger @enderror " id="price" placeholder="entrer le prix du produit ">
            @error("price")
            <div class="text text-danger">{{$message}}</div>
            @enderror


          </div>

          <div class="form-group">
            <label for="category_id">Categorie produit</label>

            <select type="text" name="category_id" class="form-control @error("category_id") border-danger @enderror " id="category_id">
            <option value=""> choisir </option>
            @foreach ($categories as $category )

            <option value="{{$category->id}}" @if($product->category_id==$category->id) selected @endif> {{$category->name}}</option>

            @endforeach
            </select>

            @error("category_id")


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
