@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col">
            <h1 class="mb-4">Tutti i Progetti</h1>

            <a href="{{ route('admin.projects.create') }}" class="btn btn-success">
            Crea un nuovo Progetto
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Note</th>
                  </tr>
                </thead>
                <tbody>

                    @foreach ($projects as $project)
                        <tr>
                            <th scope="row">{{ $project->id }}</th>
                            <td>{{ $project->name }}</td>
                            <td>{{ $project->description }}</td>
                            <td>{{ $project->notes }}</td>
                            <td>
                                <a href="{{ route('admin.projects.show', $project->id) }}" class="btn btn-info mb-2">
                                    Dettagli
                                </a>
                                <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-warning mb-2">
                                    Modifica
                                </a>
                                <a href="#" class="btn btn-danger">
                                    Elimina
                                </a>
                        
                            </td>
                        </tr>
                    @endforeach
                  
                
                </tbody>
              </table>

            
        </div>
    </div>
</div>
@endsection