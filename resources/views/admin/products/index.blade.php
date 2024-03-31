@extends("admin.layouts.template")

@section('contenu')

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">liste des produits</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <!--afficher le message de succes-->
                @if(Session::has("message"))

                 <div class="alert alert-success">{{Session::get('message')}}</div>

                  @endif
                  <table id="example1" class="table table-bordered table-striped">

                  <thead>
                  <tr>
                    <th>Photo</th>
                    <th>name</th>
                    <th>description</th>
                    <th>price</th>
                    <th>category</th>
                    <th>action</th>
                  </tr>
                  </thead>
                  <tbody>

                 @forelse ($products as $product )

                <tr>
                  <td>{{$product->photos1}}</td>
                  <td>{{$product->name}}</td>
                  <td>{{$product->description}}</td>
                  <td>{{$product->price}}</td>
                  <td>{{$product->category->name}} </td>

                 <td>
                    <a href="{{route('products.edit',$product->id)}}"><button class= "btn btn-success">Modifier</button></a>

                <form class="d-inline"  action="{{route('products.destroy',$product->id )}}" method="post">

                  @csrf
                  @method('DELETE')
                  <button type="submit" onclick="return confirm('êtes vous sûr de vouloir supprimer ?')" class="btn btn-danger">Delete</button>
                  </form>
                 </td>
                </tr>


                 @empty
                <tr><td colspan="6"> a revoir cette partie </td></tr>
                 @endforelse

                </tbody>
                  <tfoot>
                  <tr>

                  <th>name</th>
                  <th>action</th>

                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
@endsection


