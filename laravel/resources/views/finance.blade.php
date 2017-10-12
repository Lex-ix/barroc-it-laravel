@extends('master')
@section('content')
    
<div class="main-content">
    <div class="container">
            <h2 class="subhead">company's lagging behind.</h2>
        <div class="scroll">
            <table class="finance">
                @foreach($companies as $company)
                    <tr>
                        <td>{{ $company->company_name }}</td>
                        <td>
                            <form action="">
                                {{ csrf_field() }}
                                <input type="submit" value="-">
                            </form>
                        </td>
                        <td>{{ $company->balance }}</td>
                        <td>
                            <form action="">
                                {{ csrf_field() }}
                                <input type="submit" value="+">
                            </form>
                        </td>
                        <td>
                            <form action="{{ action('financeController@create') }}">
                                {{ csrf_field() }}
                                <input type="submit" value="Insert invoice">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
            <a href="{{ action('financeController@create') }}">heu</a>
        </div>
    </div>
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

        <div class="container">
            <div class="pause-project">
                <h2 class="subhead">Pause Project</h2>
            <form action="">
                <label for="customer">Customer ID</label>
                <select name="customer" id="customer">
                    <option value="">Select</option>
                    <option value="">------------</option>
                    @foreach($companies as $company)
                        <option value="">{{ $company->id }}</option>
                    @endforeach
                </select>
                <input type="submit" value="Pause project">
            </form>
            </div>
        </div>


@endsection