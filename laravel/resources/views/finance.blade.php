@extends('master')
@section('content')
    
<div class="main-content">
    <div class="background">
        <div class="container">
            <div class="request-info">
                <h2 class="subhead">Request information</h2>
            </div>

            <div class="scroll">
                <table>
                    <tr>
                        <th>Company ID</th>
                        <th>Company name</th>
                    </tr>
                    @foreach($companies as $company)
                        <tr>
                            <td>{{ $company->id }}</td>
                            <td>{{ $company->company_name }}</td>
                            <td>
                                <a class="button" href="{{ action('financeController@show', $company->id) }}">Request info</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection