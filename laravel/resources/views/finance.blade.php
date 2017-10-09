@include('/partials/header')
@include('/partials/nav')
    
<div class="main-content">
    <div class="container">
            <h2 class="subhead">company's lagging behind.</h2>
            <table class="finance">
                <tr>
                    <td>company_name</td>
                    <td>
                        <form action="">
                            <input type="submit" value="-">
                        </form>
                    </td>

                    <td>Hoeveelheid in het rood</td>
                    
                    <td>
                        <form action="">
                            <input type="submit" value="+">
                        </form>
                    </td>

                    <td>
                        <form action="/finance/create" class="form-group">
                            <input type="submit" value="Invoeren factuur" href="/invoice.php">
                        </form>
                    </td>
                </tr>
                
                <tr>
                    <td>company_name</td>
                    <td>
                        <form action="">
                            <input type="submit" value="-">
                        </form>
                    </td>
                    
                    <td>Hoeveelheid in het rood</td>
                    
                    <td>
                        <form action="">
                            <input type="submit" value="+">
                        </form>
                    </td>

                    <td>
                        <form action="/finance/create" class="form-group">
                            <input type="submit" value="Invoeren factuur" href="/invoice.php">
                        </form>
                    </td>
                </tr>
                
                <tr>
                    <td>company_name</td>
                    <td>
                        <form action="">
                            <input type="submit" value="-">
                        </form>
                    </td>

                    <td>Hoeveelheid in het rood</td>
                    
                    <td>
                        <form action="">
                            <input type="submit" value="+">
                        </form>
                    </td>

                    <td>
                        <form action="/finance/create" class="form-group">
                            <input type="submit" value="Invoeren factuur" href="/invoice.php">
                        </form>
                    </td>
                </tr>
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
                    @foreach($invoices as $invoice)
                        <option value="">{{ $invoice->project_id }}</option>
                        @endforeach
                </select>
                <input type="submit" value="Request information">
            </form>
            </div>
        </div>
    
            <div class="tbl-finance scroll">
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
                    <tr class="gerrie">
                        <td>Thing 1</td>
                        <td>Thing 2</td>
                        <td>Thing 3</td>
                        <td>Thing 4</td>
                        <td>Thing 5</td>
                        <td>Thing 6</td>
                        <td>Thing 7</td>
                        <td>Thing 8</td>
                        <td>Thing 9</td>
                        <td>Thing 10</td>
                        <td>Thing 11</td>
                        <td>Thing 12</td>
                    </tr>
                    <tr class="gerrie">
                        <td>Thing 1</td>
                        <td>Thing 2</td>
                        <td>Thing 3</td>
                        <td>Thing 4</td>
                        <td>Thing 5</td>
                        <td>Thing 6</td>
                        <td>Thing 7</td>
                        <td>Thing 8</td>
                        <td>Thing 9</td>
                        <td>Thing 10</td>
                        <td>Thing 11</td>
                        <td>Thing 12</td>
                    </tr>
                    <tr class="gerrie">
                        <td>Thing 1</td>
                        <td>Thing 2</td>
                        <td>Thing 3</td>
                        <td>Thing 4</td>
                        <td>Thing 5</td>
                        <td>Thing 6</td>
                        <td>Thing 7</td>
                        <td>Thing 8</td>
                        <td>Thing 9</td>
                        <td>Thing 10</td>
                        <td>Thing 11</td>
                        <td>Thing 12</td>
                    </tr>
                    <tr class="gerrie">
                        <td>Thing 1</td>
                        <td>Thing 2</td>
                        <td>Thing 3</td>
                        <td>Thing 4</td>
                        <td>Thing 5</td>
                        <td>Thing 6</td>
                        <td>Thing 7</td>
                        <td>Thing 8</td>
                        <td>Thing 9</td>
                        <td>Thing 10</td>
                        <td>Thing 11</td>
                        <td>Thing 12</td>
                    </tr>
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

                    <option value="">498465</option>
                    <option value="">61651615</option>
                    <option value="">61516</option>
                    <option value="">84561</option>
                    <option value="">16541</option>
                </select>
                <input type="submit" value="Pause project">
            </form>
            </div>
        </div>
</div>

@include('/partials/footer')