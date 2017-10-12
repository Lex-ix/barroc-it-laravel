@extends('master')
@section('content')
    
<div class="main-content">
    <div class="container">
            <h2 class="subhead">company's lagging behind.</h2>
            <table class="finance">
                @foreach($companies as $company)
                    <tr>
                        <td>{{ $company->company_name }}</td>
                        <td>
                            <form action="">
                                <input type="submit" value="-">
                            </form>
                        </td>
                        <td>{{ $company->balance }}</td>
                        <td>
                            <form action="">
                                <input type="submit" value="+">
                            </form>
                        </td>
                        <td>
                            <form action="{{ action('financeController@create') }}">
                                <input type="submit" value="Insert invoice">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
    </div>
    <div class="background">
        <div class="container">
            <div class="request-info">
                <h2 class="subhead">Request information</h2>
            <form action="">
                <label for="customer">Customer ID</label>
                <select name="customer" id="customer">
                    <option value="">Select</option>
                    <option value="">------------</option>
                    @foreach($companies as $company)
                        <option value="">{{ $company->company_id }}</option>
                    @endforeach
                </select>
                <input type="submit" value="Request information">
            </form>
            </div>
        </div>
    
            <div class="tbl-center scroll">
                <table>
                    <tr>
                        <th>Company ID</th>
                        <th>Name</th>
                        <th>Last name</th>
                        <th>Initials</th>
                        <th>Company name</th>
                        <th>Unpaid invoices</th>
                        <th>Bank account Nr.</th>
                        <th>VAT Nr.</th>
                        <th>Ledger Nr.</th>
                        <th>E-mail</th>
                        <th>Fax Nr.</th>
                        <th>balance</th>
                    </tr>
                    @foreach($companies as $company)
                    <tr>
                        <td>{{ $company->company_id }}</td>
                        <td>{{ $company->name}}</td>
                        <td>{{ $company->last_name }}</td>
                        <td>{{ $company->initials }}</td>
                        <td>{{ $company->company_name }}</td>
                        <td>{{ $company->unpaid_invoices }}</td>
                        <td>{{ $company->bank_account_number }}</td>
                        <td>{{ $company->vat_number }}</td>
                        <td>{{ $company->ledger_number }}</td>
                        <td>{{ $company->email }}</td>
                        <td>{{ $company->fax_number }}</td>
                        <td>{{ $company->balance }}</td>
                    </tr>
                    @endforeach
                </table>
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
                        <option value="">{{ $company->company_id }}</option>
                    @endforeach
                </select>
                <input type="submit" value="Pause project">
            </form>
            </div>
        </div>
</div>

@endsection