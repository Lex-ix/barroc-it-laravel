@extends('master')

@section('content')
<div class="container">
    <h1>{{ $companies->company_name }}</h1>
    
    <table>
        <tr>
            <th>First name</th>
            <td>{{ $companies->name }}</td>
        </tr>
        <tr>
            <th>Initials</th>
            <td>{{ $companies->initials }}</td>
        </tr>
        <tr>
            <th>last name</th>
            <td>{{ $companies->last_name }}</td>
        </tr>
        <tr>
            <th>Unpaid invoices</th>
            <td>{{ $companies->unpaid_invoices }}</td>
        </tr>
        <tr>
            <th>Bank account number</th>
            <td>{{ $companies->bank_account_number }}</td>
        </tr>
        <tr>
            <th>Vat number</th>
            <td>{{ $companies->vat_number }}</td>
        </tr>
        <tr>
            <th>Ledger number</th>
            <td>{{ $companies->ledger_number }}</td>
        </tr>
        <tr>
            <th>Maximum</th>
            <td>{{ $companies->maximum }}</td>
        </tr>
        <tr>
            <th>Balance</th>
            <td>{{ $companies->balance }}</td>
        </tr>
        <tr>
            <th>Credit worthy</th>
            <td>{{ $companies->credit_worthy }}</td>
        </tr>
        <tr>
            <th>E-mail</th>
            <td>{{ $companies->email }}</td>
        </tr>
        <tr>
            <th>Fax number</th>
            <td>{{ $companies->fax_number }}</td>
        </tr>
    </table>

</div>
@endsection