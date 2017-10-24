@extends('master')
@section('content')

<section>
    <div class="container customer">
        <h2 class="subhead">Add customer</h2>

        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form action="{{ action('companiesController@store') }}" method="POST">
            {{csrf_field()}}

            <h4 class="subhead">Personal information:</h4>
            <div class="form-group">
                <label for="name">First name:*</label>
                <input type="text" id="name" name="name" placeholder="Enter your fisrt name here." required>
            </div>
            <div class="form-group">
                <label for="preposition">preposition:</label>
                <input type="text" id="preposition" name="preposition" placeholder="Enter your preposition here.">
            </div>
            <div class="form-group">
                <label for="lastname">Last name:*</label>
                <input type="text" id="lastname" name="lastname" placeholder="Enter your lastname here." required>
            </div>

            <h4 class="subhead">Company information:</h4>
            <div class="form-group">
                <label for="company">Company name:*</label>
                <input type="text" id="company" name="company" placeholder="Enter your company name here." required>
            </div>
            <div class="form-group">
                <label for="phone">Phone number:*</label>
                <input type="text" id="phone" name="phone" placeholder="Enter your phone number here." required>
            </div>
            <div class="form-group">
                <label for="establishment">Establishment:*</label>
                <input type="text" id="establishment" name="establishment" placeholder="Enter your establishment here." required>
            </div>
            <div class="form-group">
                <label for="adress">Adress:*</label>
                <input type="text" id="adress" name="adress" placeholder="Enter your adress here." required>
            </div>
            <div class="form-group">
                <label for="house_number">House number:*</label>
                <input type="number" id="house_number" name="house_number" placeholder="Enter your house number here." required>
            </div>
            <div class="form-group">
                <label for="bank_account_number">Bank account number:*</label>
                <input type="text" id="bank_account_number" name="bank_account_number" placeholder="Enter your bank account number here." required>
            </div>
            <div class="form-group">
                <label for="zipcode">Zipcode:*</label>
                <input type="text" id="zipcode" name="zipcode" placeholder="Enter your zipcode here." required>
            </div>
            <div class="form-group">
                <label for="email">E-mail:*</label>
                <input type="email" id="email" name="email" placeholder="Enter your e-mail here." required>
            </div>
            <div class="form-group">
                <label for="vat_number">VAT number:*</label>
                <input type="text" id="vat_number" name="vat_number" placeholder="Enter your VAT number here." required>
            </div>
            <div class="form-group">
                <label for="ledger_number">Ledger number:*</label>
                <input type="number" id="ledger_number" name="ledger_number" placeholder="Enter your ledger number here." required>
            </div>
            <div class="form-group">
                <label for="maximum">Maximum debt:*</label>
                <input type="number" id="maximum" name="maximum" placeholder="Enter your maximum amount of debt here." required>
            </div>
            <div class="form-group">
                <label for="bcr_control">BCR control:*</label>
                <select name="bcr_control" id="bcr_control">
                    <option value="">Unkown</option>
                    <option value="1">Passed</option>
                    <option value="0">Not passed</option>
                </select>
            </div>
            <div class="form-group">
                <label for="initials">Initials:*</label>
                <input type="text" id="initials" name="initials" placeholder="Enter the initials here." required>
            </div>

            <div class="form-group">
                <input class="submit" type="submit" value="Add">
            </div>
        </form>
    </div>
</section>

@endsection