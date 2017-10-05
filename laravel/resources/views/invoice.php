<?php
    require_once('header.php');
    require_once('nav.php');
?>

<div class="container">
    <div class="invoice_info">
        <form action="" class="form-group">
            <label for="invoice_nr">Invoice Nr</label>
            <input type="text" name="invoice_nr" id="invoice_nr" value="Invoice ID">
            <label for="company_id">Customer ID</label>
            <input type="text" name="company_id" id="company_id" value="Klant ID">
            <label for="company_name">Company name</label>
            <input type="text" name="company_name" id="company_name" value="Company name">
            <label for="invoice_price">Invoice price</label>
            <input type="text" name="invoice_price" id="invoice_price" value="Insert invoice price">
        </form>
    </div>
    <div class="barroc_data">
        <table>
            <div class="left_row">
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
            </div>
            <div class="right_row">
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
            </div>
        </table>
    </div>
    
    <div class="customer_data">
        <table>
            <tr>
                <th>Company name</th>
                <td>$company_name</td>
            </tr>
            <tr>
                <th>Address</th>
                <td>$address</td>
            </tr>
            <tr>
                <th>House number</th>
                <td>$house_number</td>
            </tr>
            <tr>
                <th>Residence</th>
                <td>$residence</td>
            </tr>
            <tr>
                <th>zip code</th>
                <td>$zipcode</td>
            </tr>
        </table>
        
        <div class="project_data">
            <table>
                <tr>
                    <th>project name</th>
                    <td>$project_name</td>
                </tr>
                <tr>
                    <th>project description</th>
                    <td>$project_description</td>
                </tr>
            </table>
        </div>
    </div>
    klant gegevens, naam, adres, huisnummer,woonplaats, postcode
    projectnaam, project beschrijving

</div>

<?php
    require_once('footer.php');
?>