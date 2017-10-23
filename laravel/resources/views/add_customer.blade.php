@extends('master')
@section('content')

<section>
    <div class="container customer">
        <h2 class="subhead">Add customer</h2>

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
                <label for="zipcode">Zipcode:*</label>
                <input type="text" id="zipcode" name="zipcode" placeholder="Enter your zipcode here." required>
            </div>
            <div class="form-group">
                <label for="email">E-mail:*</label>
                <input type="email" id="email" name="email" placeholder="Enter your e-mail here." required>
            </div>

            <div class="form-group">
                <input class="submit" type="submit" value="Add">
            </div>
        </form>
    </div>
</section>

@endsection