@extends('master')
@section('content')
    <div class="container">
        <h1>{{ $projects->project_id }}</h1>
        <div class="project_data">
            <div class="row">
                <table>
                    <tr>
                        <th>Project id</th>
                        <td>{{ $projects->id }}</td>
                    </tr>
                    <tr>
                        <th>Project Name</th>
                        <td>{{ $projects->project_name }}</td>
                    </tr>
                    <tr>
                        <th>Company id</th>
                        <td>{{ $projects->company_id }}</td>
                    </tr>
                    <tr>
                        <th>Application description</th>
                        <td>{{ $projects->application_desc }}</td>
                    </tr>
                    <tr>
                        <th>Maintenance</th>
                        <td>{{ $projects->maintenance }}</td>
                    </tr>
                    <tr>
                        <th>Operating system</th>
                        <td>{{ $projects->operating_system }}</td>
                    </tr>
                    <tr>
                        <th>Started</th>
                        <td>{{ $projects->started }}</td>
                    </tr>
                    <tr>
                        <th>Finished</th>
                        <td>{{ $projects->finished }}</td>
                    </tr>
                    <tr>
                        <th>Hardware description</th>
                        <td>{{ $projects->hardware_desc }}</td>
                    </tr>
                    <tr>
                        <th>Created at</th>
                        <td>{{ $projects->created_at }}</td>
                    </tr>
                    <tr>
                        <th>Updated at</th>
                        <td>{{ $projects->updated_at }}</td>
                    </tr>
                </table>
                <div class="control-panel">
                    @if ($projects->started == 0)
                        <form action="{{action('developmentController@update', $projects->id)}}" method="POST">
                            {{ csrf_field() }}
                            {{method_field('PUT')}}
                            <input type="hidden" value="start" name="start">
                            <input type="submit" value="Start Project" id="startProject">
                        </form>
                    @elseif ($projects->finished == 0 && $projects->started == 1 )
                        <form action="{{ action('developmentController@update', $projects->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{method_field('PUT')}}
                            <input type="hidden" value="finish" name="finish">
                            <input type="submit" value="Finish Project" id="finishProject">
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @endsection