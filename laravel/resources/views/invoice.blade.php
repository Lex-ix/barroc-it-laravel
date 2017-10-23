@extends('master')
@section('content')

<div class="container">
    <h2 class="subhead">Invoice Information</h2>
    <div class="invoice_info">
        <form action="" class="form-group">
            {{csrf_field()}}
            <label for="invoice_nr">Invoice Nr</label>
            <input type="text" name="invoice_nr" id="invoice_nr" value="project ID" disabled>
            <label for="company_id">Customer ID</label>
            <input type="text" name="company_id" id="company_id" value="{{ $companies->id }}" disabled>
            <label for="company_name">Company name</label>
            <input type="text" name="company_name" id="company_name" value="{{ $companies->company_name }}" disabled>
            <label for="invoice_price">Invoice price</label>
            <input type="text" name="invoice_price" id="invoice_price" value="hi" disabled>
        </form>
    </div>
    
    <h2 class="subhead">Barroc.IT Information</h2>
    
    <div class="barroc_data">
        
        <div class="left_row">
            <table>
                <tr>
                    <th>Company name</th>
                    <td>Barroc IT</td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td>Terheijdenseweg</td>
                </tr>
                <tr>
                    <th>House number</th>
                    <td>350</td>
                </tr>
                <tr>
                    <th>Zip code</th>
                    <td>4826AA</td>
                </tr>
            </table>
        </div>
        
        <div class="right_row">
            <table>
                <tr>
                    <th>Residence</th>
                    <td>Breda</td>
                </tr>
                <tr>
                    <th>Phone number</th>
                    <td>076-5733444</td>
                </tr>
                <tr>
                    <th>E-mail</th>
                    <td>info@barroc.it</td>
                </tr>
            </table>
        </div>
    </div>
    
    <h2 class="subhead">Customer company information</h2>
    
    <div class="customer_data">
        
        <div class="left_row">
            <table>
                <tr>
                    <th>Company name</th>
                    <td>{{ $companies->company_name }}</td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td>{{ $companies->adress }}</td>
                </tr>
                <tr>
                    <th>House number</th>
                    <td>{{ $companies->house_number }}</td>
                </tr>
            </table>
        </div>
        
        <div class="right_row">
            <table>
                <tr>
                    <th>Residence</th>
                    <td>{{ $companies->residence }}</td>
                </tr>
                <tr>
                    <th>zip code</th>
                    <td>{{ $companies->zipcode }}</td>
                </tr>
            </table>
        </div>
    </div>
    
    <h2 class="subhead">Project information</h2>
    
    <div class="project_data">
        <div class="left_row">
        <table>
            <tr>
                <th>project name</th>
                <td>$project_name</td>
            </tr>
        </table>
        </div>
        <div class="right_row">
            <table>
                <tr>
                    <th>project description</th>
                    <td>{{ $projects->project_name }}</td>
                </tr>
            </table>
        </div>
    </div>
</div>

@endsection