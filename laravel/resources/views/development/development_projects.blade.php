@extends('master')
@section('content')

<div class="customerstatus">
    <div class="container">
        <h2 class="subhead">Projects</h2>
        <div class="scroll">
            <table>
                <tr>
                    <th>project_id</th>
                    <th>company_id</th>
                    {{--<th>application_Desc</th>--}}
                    <th>project_name</th>
                    {{--<th>maintenance</th>--}}
                    {{--<th>operating_system</th>--}}
                    <th>finished</th>
                    {{--<th> hardware_desc</th>--}}
                </tr>
                @foreach($projects as $project)
                    <tr>
                        <td>{{ $project->project_id }}</td>
                        <td>{{ $project->company_id }}</td>
                        {{--<td>{{ $project->application_desc }}</td>--}}
                        <td>{{$project->project_name}}</td>
                        {{--<td>{{ $project->maintenance }}</td>--}}
                        {{--<td>{{ $project->operating_system }}</td>--}}
                        <td>{{ $project->finished }}</td>
                        {{--<td>{{ $project->hardware_desc }}</td>--}}
                        <td><input type="submit" value="Finish Project" class="button"></td>
                        <td><a href="{{ action('developmentController@show', $project->project_id) }}" target="_blank" class="button">View Project</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>

@endsection

