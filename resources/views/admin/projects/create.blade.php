@extends('layouts.admin')


@section('content')
<div class="row justify-content-center">
    <div class="col mt-4">
        <h1 class="mb-4">Crea un Progetto</h1>

        <a href="{{ route('admin.projects.index') }}" class="btn btn-primary">
        Torna ai Progetti
        </a>

        @if ($errors ->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
            
        @endif

        
    </div>

    
</div>

<div class="row ">
    <div class="col mt-4">
       

    <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">

        @csrf
        
          <div class="mb-3">
            <label for="name" class="form-label">Nome Progetto</label>
            <input type="text" class="form-control" name="name" id="name" required maxlength="128" placeholder="Inserisci un Nome">
          </div>

          <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" name="description" id="description" rows="5" required></textarea>
          </div>

          <div class="mb-3">
            <label for="notes" class="form-label">Note</label>
            <textarea class="form-control" name="notes" id="notes" required rows="3"></textarea>
          </div>

          <div class="mb-3">
            <label for="img" class="form-label">Immagine</label>
            <input type="file" class="form-control" name="img" id="img" accept="image/*"  placeholder="Inserisci un'immagine">
          </div>

          <div class="col-auto">
            <button type="submit" class="btn btn-success mb-3">Aggiungi Progetto</button>
          </div>
    
    </form>
        
    </div>

    
</div>
@endsection