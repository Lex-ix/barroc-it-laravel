<?php
    require_once ('header.php');
    require_once ('nav.php');
?>

<style>
    table {
        margin: 0 auto;

    }
</style>

<div class="container">
    <h2 class="subhead">Sales</h2>
    <section>
        <a href="">Klant toevoegen</a>
    </section>

    <section>
        <form action="">
            <label for="customer">Customer ID:</label>
            <select name="customer" id="customer">
                <option value="">42134</option>
                <option value="">1345423</option>
                <option value="">5145432</option>
                <option value="">3412</option>
                <option value="">542</option>
                <option value="">643214</option>
                <option value="">614</option>
            </select>
            <input type="submit" value="Edit customer">
            <input type="submit" value="Delete customer">
        </form>
    </section>
</div>

<div class="background">
    <div class="container">
        <h2 class="subhead">Customers</h2>
        <section>
            <table>
                <tr class="">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Company</th>
                    <th>Phone</th>
                    <th>Establishment</th>
                    <th>Zip code</th>
                    <th>E-mail</th>
                    <th>Project</th>
                </tr>
            </table>
        </section>
    </div>
</div>

<div class="container">
    <section>
        <h2 class="subhead">Customers in debt</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Company</th>
                <th>Phone</th>
                <th>Establishment</th>
                <th>Zip code</th>
                <th>E-mail</th>
                <th>Project</th>
            </tr>
            <tr>
                <td>Lorem</td>
                <td>Lorem</td>
                <td>Lorem</td>
                <td>Lorem</td>
                <td>Lorem</td>
                <td>Lorem</td>
                <td>Lorem</td>
                <td>Lorem</td>
            </tr>
            <tr>
                <td>Lorem</td>
                <td>Lorem</td>
                <td>Lorem</td>
                <td>Lorem</td>
                <td>Lorem</td>
                <td>Lorem</td>
                <td>Lorem</td>
                <td>Lorem</td>
            </tr><tr>
                <td>Lorem</td>
                <td>Lorem</td>
                <td>Lorem</td>
                <td>Lorem</td>
                <td>Lorem</td>
                <td>Lorem</td>
                <td>Lorem</td>
                <td>Lorem</td>
            </tr><tr>
                <td>Lorem</td>
                <td>Lorem</td>
                <td>Lorem</td>
                <td>Lorem</td>
                <td>Lorem</td>
                <td>Lorem</td>
                <td>Lorem</td>
                <td>Lorem</td>
            </tr><tr>
                <td>Lorem</td>
                <td>Lorem</td>
                <td>Lorem</td>
                <td>Lorem</td>
                <td>Lorem</td>
                <td>Lorem</td>
                <td>Lorem</td>
                <td>Lorem</td>
            </tr>
        </table>
    </section>
</div>
<?php
    require_once ('footer.php')
?>