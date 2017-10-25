@extends('master')
@section('content')

    <div class="container">
        <h2 class="subhead">{{ $company->company_name }}</h2>
        <form action="{{ action('projectsController@create') }}" method="GET">
            <input type="hidden" value="{{ $company->id }}" name="id" id="id">
            <input type="submit" class="button" value="Create project">
        </form>

        <section>
            <div class="barroc_data">
                <div class="left_row">
                    <table>
                        <tr>
                            <th>Residence</th>
                            <td>{{ $company->residence }}</td>
                        </tr>
                        @if ($company->residence1)
                            <tr>
                                <th>Second residence</th>
                                <td>{{ $company->residence1 }}</td>
                            </tr>
                        @endif

                        <tr>
                            <th>Zip code</th>
                            <td>{{ $company->zipcode }}</td>
                        </tr>
                        @if ($company->zipcode1)
                            <tr>
                                <th>Second residence</th>
                                <td>{{ $company->zipcode1 }}</td>
                            </tr>
                        @endif

                        <tr>
                            <th>Adress</th>
                            <td>{{ $company->adress }}</td>
                        </tr>
                        @if ($company->adress1)
                            <tr>
                                <th>Second adress</th>
                                <td>{{ $company->adress1 }}</td>
                            </tr>
                        @endif

                        <tr>
                            <th>House number</th>
                            <td>{{ $company->house_number }}</td>
                        </tr>
                        @if ($company->house_number1)
                            <tr>
                                <th>Second house number</th>
                                <td>{{ $company->house_number1 }}</td>
                            </tr>
                        @endif

                        <tr>
                            <th>Unpaid invoices</th>
                            <td>{{ $company->unpaid_invoices }}</td>
                        </tr>

                        <tr>
                            <th>Bank account number</th>
                            <td>{{ $company->bank_account_number }}</td>
                        </tr>

                        <tr>
                            <th>VAT number</th>
                            <td>{{ $company->vat_number }}</td>
                        </tr>
                    </table>
                </div>
                <div class="right_row">
                    <table>
                        <tr>
                            <th>Ledger number</th>
                            <td>{{ $company->ledger_number }}</td>
                        </tr>

                        <tr>
                            <th>Maximum amount of debt</th>
                            <td>{{ $company->maximum }}</td>
                        </tr>

                        <tr>
                            <th>Balance</th>
                            <td>{{ $company->balance }}</td>
                        </tr>

                        <tr>
                            <th>Credit worthy</th>
                            <td>
                                @if ($company->balance > $company->maximum)
                                    No
                                @else
                                    Yes
                                @endif
                            </td>
                        </tr>

                        <tr>
                            <th>E-mail</th>
                            <td>{{ $company->email }}</td>
                        </tr>

                        <tr>
                            <th>Fax number</th>
                            <td>{{ $company->fax_number }}</td>
                        </tr>

                        <tr>
                            <th>Phone number</th>
                            <td>{{ $company->phone_number }}</td>
                        </tr>
                        @if ($company->phone_number1)
                            <tr>
                                <th>Second phone number</th>
                                <td>{{ $company->phone_number1 }}</td>
                            </tr>
                        @endif

                        <tr>
                            <th>Person of contact's name</th>
                            <td>{{ $company->name }} {{ $company->last_name }}</td>
                        </tr>

                        <tr>
                            <th>BCR Control</th>
                            <td>
                                @if ($company->bcr_control == 1)
                                    Done and worthy
                                @elseif ($company->bcr_control == 0)
                                    Done and not worthy
                                @else
                                    Not done
                                @endif
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </section>

        @if (isset($company->project[0]->id))
            <section>
                <h2 class="subhead">Projects</h2>
                <table class="barroc_data">
                    <tr>
                        <th></th>
                        <th>Project name</th>
                        <th></th>
                    </tr>
                @foreach ($company->project as $project)
                    <tr>
                        <td>
                            <form action="{{ action('projectsController@show', $project->id) }}" method="GET">
                                <input type="submit" class="submit" value="Details">
                            </form>
                        </td>
                        <td>{{ $project->name }}</td>
                        <td>
                            <form action="{{ action('projectsController@destroy', $project->id) }}" method="POST">
                                {{ csrf_field() }}

                                <input name="_method" type="hidden" value="DELETE">
                                <input type="submit" class="button" value="Delete">
                            </form>
                        </td>
                    </tr>
                @endforeach
                </table>
            </section>
        @endif
    </div>
@endsection