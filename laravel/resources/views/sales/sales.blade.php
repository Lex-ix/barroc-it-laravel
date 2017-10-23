@extends('master')
@section('content')

    <div class="container">
        <h2 class="subhead">Sales</h2>
        <section>
            <a href="{{ action('companiesController@create') }}" class="button">Add customer</a>
        </section>
    </div>

    <section class="background">
        <div class="container">
            <section>
                <h2 class="subhead">Customers not in debt</h2>
            </section>
        </div>
    </section>

    <section class="background">
        <div class="tbl-center scroll">
            <table>
                <tr>
                    <th></th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Company</th>
                    <th>Phone</th>
                    <th>Establishment</th>
                    <th>Zip code</th>
                    <th>E-mail</th>
                    <th>maximum</th>
                    <th>balance</th>
                    <th></th>
                </tr>
                @foreach ($companies as $company)
                    @if ($company->balance <= $company->maximum)
                        <tr>
                            <td><a class="button" href="{{ action('salesController@show', $company->id) }}">Details</a></td>
                            <td>{{ $company->id }}</td>
                            <td>{{ $company->last_name }}, {{ $company->name }}</td>
                            <td>{{ $company->company_name }}</td>
                            <td>{{ $company->phone_number }}</td>
                            <td>{{ $company->residence }}</td>
                            <td>{{ $company->zipcode }}</td>
                            <td>{{ $company->email }}</td>
                            <td>{{ $company->maximum }}</td>
                            <td>{{ $company->balance }}</td>
                            <td><a class="button" href="{{ action('salesController@destroy', $company->id) }}">Delete</a></td>
                        </tr>
                    @endif
                @endforeach
            </table>
        </div>
    </section>

    <div class="container">
        <section>
            <h2 class="subhead">Customers in debt</h2>
        </section>
    </div>

    <div class="tbl-center scroll">
        <table>
            <tr>
                <th></th>
                <th>ID</th>
                <th>Name</th>
                <th>Company</th>
                <th>Phone</th>
                <th>Establishment</th>
                <th>Zip code</th>
                <th>E-mail</th>
                <th>maximum</th>
                <th>balance</th>
                <th></th>
            </tr>
            @foreach ($companies as $company)
                @if ($company->balance > $company->maximum)
                    <tr>
                        <td><a class="button" href="{{ action('salesController@show', $company->id) }}">Details</a></td>
                        <td>{{ $company->id }}</td>
                        <td>{{ $company->last_name }}, {{ $company->name }}</td>
                        <td>{{ $company->company_name }}</td>
                        <td>{{ $company->phone_number }}</td>
                        <td>{{ $company->residence }}</td>
                        <td>{{ $company->zipcode }}</td>
                        <td>{{ $company->email }}</td>
                        <td>{{ $company->maximum }}</td>
                        <td>{{ $company->balance }}</td>
                        <td><a class="button" href="{{ action('salesController@destroy', $company->id) }}">Delete</a></td>
                    </tr>
                @endif
            @endforeach
        </table>
    </div>

@endsection