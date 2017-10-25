@extends('master')
@section('content')

    <div class="container">
        <h2 class="subhead">{{ $project->name }}</h2>

        <h3 class="subhead">Application description</h3>
        <p>{{ $project->application_desc }}</p>

        <h3 class="subhead">Hardware Description</h3>
        <p>{{ $project->hardware_desc }}</p>

        <h3 class="subhead">Details</h3>
        <table class="barroc_data">
            <tr>
                <th>Finished</th>
                <td>
                    @if ($project->finished == 0)
                        The project isn't finished yet
                    @else
                        The project is finished
                    @endif
                </td>
            </tr>
            <tr>
                <th>Maintenance</th>
                <td>
                    @if($project->maintenance == 0)
                        No maintenance in contract
                    @else
                        Maintenance included
                    @endif
                </td>
            </tr>
            <tr>
                <th>Operating system</th>
                <td>{{ $project->operating_system }}</td>
            </tr>
        </table>
    </div>

@endsection