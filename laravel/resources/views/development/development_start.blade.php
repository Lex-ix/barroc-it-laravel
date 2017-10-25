@extends('master')
@section('content')

<div class="customerstatus">
    <div class="container">
        <h2 class="subhead">Queued Projects</h2>
        <div class="scroll">
            <table>
                <tr>
                    <th>project_id</th>
                    <th>company_id</th>
                    <th>project_name</th>
                </tr>
                @foreach($projectsQ as $project)
                    <tr>
                        <td>{{ $project->id}}</td>
                        <td>{{ $project->company_id}}</td>
                        <td>{{$project->name}}</td>
                        <td><a href="{{ action ('developmentController@show', $project->id) }}" target="_blank" class="button">View Project</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
        <h2 class="subhead">Active Projects</h2>
        <div class="scroll">
            <table>
                <tr>
                    <th>project_id</th>
                    <th>company_id</th>
                    <th>project_name</th>
                </tr>
                @foreach($projectsA as $project)
                    <tr>
                        <td>{{ $project->id}}</td>
                        <td>{{ $project->company_id}}</td>
                        <td>{{ $project->name }}</td>
                        <td><a href="{{ action ('developmentController@show', $project->id) }}" target="_blank" class="button">View Project</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>

@endsection