@extends('master')
@section('content')
    <div class="container">
        <h1>{{ $projects->project_id }}</h1>
        <div class="project_data">
            <div class="row">
                <table>
                    <tr>
                        <th>Project id</th>
                        <td>{{ $projects->project_id }}</td>
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
                    <input type="submit" value="Start Project" id="startProject">
                    <input type="submit" value="Finish project"id="finishProject">
                </div>
            </div>

        </div>
    </div>
    @endsection