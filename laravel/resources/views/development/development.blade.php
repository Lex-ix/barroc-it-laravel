@extends('master')
@section('content')

<div class="projectstatus">
    <div class="container">
        <h2 class="subhead"> Development Home Scherm</h2>
        <div class="projects">
            <a href="development/create"  class="button">Projects</a>
        </div>
    </div>
</div>
<div class="background">
<div class="customerstatus">
    <div class="container">
        <h2 class="subhead">client status</h2>
        <div class="scroll">
            <table>
                <tr>
                    <th>project_id</th>
                    <th>company_id</th>
                    <th>Project_name</th>
                    <th>maintenance</th>
                    <th>operating_system</th>
                    <th>started</th>
                    <th>finished</th>
                </tr>
                @foreach($projectsS as $project)
                    <tr>
                        <td>{{ $project->id }}</td>
                        <td>{{ $project->company_id }}</td>
                        <td>{{$project->project_name}}</td>
                        <td>{{ $project->maintenance }}</td>
                        <td>{{ $project->operating_system }}</td>
                        <td>{{ $project->started }}</td>
                        <td>{{ $project->finished }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
</div>
<div class="pausedstatus">
    <div class="container">
        <h2 class="subhead">paused projects</h2>
        <div class="scroll">
            <table>
                <tr>
                    <th>project_id</th>
                    <th>company_id</th>
                    <th>project_name</th>
                    <th>maintenance</th>
                    <th>operating_system</th>
                    <th>started</th>
                    <th>finished</th>
                </tr>
                @foreach($projectsF as $project)
                    <tr>
                        <td>{{ $project->id }}</td>
                        <td>{{ $project->company_id }}</td>
                        <td>{{$project->project_name}}</td>
                        <td>{{ $project->maintenance }}</td>
                        <td>{{ $project->operating_system }}</td>
                        <td>{{ $project->started }}</td>
                        <td>{{ $project->finished }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>

@endsection