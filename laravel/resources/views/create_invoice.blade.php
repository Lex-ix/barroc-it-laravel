@extends('master')
@section('content')

    <div class="container">
        <section>
            <h2 class="subhead">Create invoice</h2>
            <form action="{{ action('invoicesController@store') }}" method="POST">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="date">Date:*</label>
                    <input type="date" name="date" id="date" required>
                </div>
                <div class="form-group">
                    <label for="quantity">Paid invoice or unpaid invoice:*</label>
                    <select name="quantity" id="quantity" required>
                        <option value="-1">Paid</option>
                        <option value="1">unpaid</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="amount">Amount paid:*</label>
                    <input type="number" name="amount" id="amount" required>
                </div>

                <input type="hidden" value="{{ $id }}" name="id">

                <div class="form-group">
                    <input type="submit" value="Insert invoice" class="button">
                </div>
            </form>
        </section>
    </div>

@endsection