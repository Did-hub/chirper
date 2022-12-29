<x-app-layout>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <div class="container mt-4">
        @if(session('status'))
          <div class="alert alert-success">
              {{ session('status') }}
          </div>
        @endif
        <div class="card">
          <div class="card-header text-center font-weight-bold">
            Artikel Verwaltung
          </div>
          <div class="card-body">
            <form name="add-blog-post-form" id="add-blog-post-form" method="POST" action="{{ route('artikel.update', $artikel) }}">
             @csrf
             @method('patch')
              <div class="form-group">
                <label for="exampleInputEmail1">{{$artikel['name']}}</label>
                <input type="text" id="name" name="name" class="form-control" required="">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">{{$artikel['variante']}}</label>
                <textarea name="variante" class="form-control" required=""></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>  

</x-app-layout>    