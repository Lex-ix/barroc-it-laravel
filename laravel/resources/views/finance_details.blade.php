@extends('master')

@section('content')
<div class="container">
    <h1>{{ $companies->company_name }}</h1>
    <div class="barroc_data">
        <div class="left_row">
            <table>
                <tr>
                    <th>Contacts first name</th>
                    <td>{{ $companies->name }}</td>
                </tr>
                <tr>
                    <th>Initials</th>
                    <td>{{ $companies->initials }}</td>
                </tr>
                <tr>
                    <th>Contacts last name</th>
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
            </table>
        </div>

        <div class="right_row">
            <table>
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
                <tr>
                    <th>BCR control</th>
                    <td>{{ $companies->bcr_control }}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection