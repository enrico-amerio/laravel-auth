@extends('layouts.admin')
@section('content')
<h1 class="text-center">Progetti</h1>
<div class="container">
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            </tr>
        </thead>
        <tbody>@foreach ($projects as $project )
            <tr>
                <td>{{$project->title}}</td>
                <td>{{$project->description}}</td>
                <td class="d-flex">
                    <button class="btn btn-primary me-1">modifica</button>
                    <button class="btn btn-primary ">cancella</button>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>

</div>

@endsection
