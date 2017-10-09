@include('/partials/header')
@include('/partials/nav')

<div class="container">
    <h2 class="subhead">Sales</h2>
    <section>
        <a href="user/create" class="button">Add customer</a>
    </section>

    <section>
        <form action="">
            <label for="customer">Customer ID:</label>
            <select name="customer" id="customer">
                @foreach($companies as $company)
                    <option value="{{ $company->company_id }}">{{ $company->company_id }}</option>
                @endforeach
            </select>
            <input type="submit" value="Edit customer">
            <input type="submit" value="Delete customer">
        </form>
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
                <th>ID</th>
                <th>Name</th>
                <th>Company</th>
                <th>Phone</th>
                <th>Establishment</th>
                <th>Zip code</th>
                <th>E-mail</th>
                <th>maximum</th>
                <th>balance</th>
            </tr>
            @foreach ($companies as $company)
                @if ($company->balance <= $company->maximum)
                    <tr class="gerrie">
                        <td>{{ $company->company_id }}</td>
                        <td>{{ $company->last_name }}, {{ $company->name }}</td>
                        <td>{{ $company->company_name }}</td>
                        <td>{{ $company->phone_number }}</td>
                        <td>{{ $company->residence }}</td>
                        <td>{{ $company->zipcode }}</td>
                        <td>{{ $company->email }}</td>
                        <td>{{ $company->maximum }}</td>
                        <td>{{ $company->balance }}</td>
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
        <th>ID</th>
        <th>Name</th>
        <th>Company</th>
        <th>Phone</th>
        <th>Establishment</th>
        <th>Zip code</th>
        <th>E-mail</th>
        <th>maximum</th>
        <th>balance</th>
    </tr>
    @foreach ($companies as $company)
        @if ($company->balance > $company->maximum)
            <tr class="gerrie">
                <td>{{ $company->company_id }}</td>
                <td>{{ $company->last_name }}, {{ $company->name }}</td>
                <td>{{ $company->company_name }}</td>
                <td>{{ $company->phone_number }}</td>
                <td>{{ $company->residence }}</td>
                <td>{{ $company->zipcode }}</td>
                <td>{{ $company->email }}</td>
                <td>{{ $company->maximum }}</td>
                <td>{{ $company->balance }}</td>
            </tr>
        @endif
    @endforeach
    </table>
</div>

@include('/partials/footer')