@extends('master')
@section('content')

<div class="projectstatus">
    <div class="container">
        <h2 class="subhead"> Development Home Scherm</h2>
        <div class="projects">
            <a href="development/create" target="_blank" class="button">Projects</a>
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
                    {{--<th>application_Desc</th>--}}
                    <th>maintenance</th>
                    <th>operating_system</th>
                    <th>finished</th>
                    {{--<th> hardware_desc</th>--}}
                </tr>
                @foreach($projects as $project)
                    <tr>
                        <td>{{ $project->project_id }}</td>
                        <td>{{ $project->company_id }}</td>
                        <td>{{$project->project_name}}</td>
                        {{--<td>{{ $project->application_desc }}</td>--}}
                        <td>{{ $project->maintenance }}</td>
                        <td>{{ $project->operating_system }}</td>
                        <td>{{ $project->finished }}</td>
                        {{--<td>{{ $project->hardware_desc }}</td>--}}
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
                    {{--<th>application_Desc</th>--}}
                    <th>maintenance</th>
                    <th>operating_system</th>
                    <th>finished</th>
                    {{--<th> hardware_desc</th>--}}
                </tr>
                @foreach($projects as $project)
                    <tr>
                        <td>{{ $project->project_id }}</td>
                        <td>{{ $project->company_id }}</td>
                        <td>{{$project->project_name}}</td>
                        {{--<td>{{ $project->application_desc }}</td>--}}
                        <td>{{ $project->maintenance }}</td>
                        <td>{{ $project->operating_system }}</td>
                        <td>{{ $project->finished }}</td>
                        {{--<td>{{ $project->hardware_desc }}</td>--}}
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>

@endsection