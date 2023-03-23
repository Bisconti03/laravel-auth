@extends('layouts.admin')


@section('content')
<div class="row justify-content-center">
    <div class="col mt-4">
        <h1 class="mb-4">{{ $project->name }}</h1>

        <h5>{{ $project->description }}</h5>

        <p>{{ $project->notes }}</p>

        @if ($project->img)
        <div>
            <img src="{{ asset('storage/'.$project->img) }}" alt="">
        </div>
        @endif
       

        <a href="{{ route('admin.projects.index') }}" class="btn btn-primary">
        Torna ai Progetti
        </a>
    </div>
</div>
@endsection