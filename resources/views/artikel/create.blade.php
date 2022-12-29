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
            Artikel erstellen
          </div>
          <div class="card-body">
            <form name="add-blog-post-form" id="add-blog-post-form" method="POST" action="{{ route('artikel.store') }}">
             @csrf
              <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" id="name" name="name" class="form-control" required="" value="{{ old('name') }}">

                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Variante</label>
                <textarea name="variante" class="form-control" required="">{{ old('variante') }}</textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>  

</x-app-layout>    