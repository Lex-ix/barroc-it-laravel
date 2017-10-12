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
                    <th>application_Desc</th>
                    {{--<th>maintenance</th>--}}
                    {{--<th>operating_system</th>--}}
                    <th>finished</th>
                    {{--<th>hardware_desc</th>--}}
                </tr>
                @foreach($projects as $project)
                    <tr>
                        <td>{{ $project->project_id}}</td>
                        <td>{{ $project->company_id}}</td>
                        <td>{{ $project->application_desc}}</td>
                        {{--<td>{{ $project->maintenance}}</td>--}}
                        {{--<td>{{ $project->operating_system}}</td>--}}
                        <td>{{ $project->finished}}</td>
                        {{--<td>{{ $project->hardware_desc}}</td>--}}
                        <td><input type="submit" value="View Project" class="button"></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>

@endsection