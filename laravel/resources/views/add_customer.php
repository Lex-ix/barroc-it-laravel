<?php
    require_once ('header.php');
    require_once ('nav.php');

?>

<section>
    <div class="container customer">
        <h2 class="subhead">Add customer</h2>

        <form action="">
            <h4 class="subhead">Personal information:</h4>
            <div class="form-group">
                <label for="name">First name:*</label>
                <input type="text" id="name" placeholder="Enter your fisrt name here." required>
            </div>
            <div class="form-group">
                <label for="preposition">preposition:</label>
                <input type="text" id="preposition" placeholder="Enter your preposition here.">
            </div>
            <div class="form-group">
                <label for="lastname">Last name:*</label>
                <input type="text" id="lastname" placeholder="Enter your lastname here." required>
            </div>

            <h4 class="subhead">Company information:</h4>
            <div class="form-group">
                <label for="company">Company name:*</label>
                <input type="text" id="company" placeholder="Enter your company name here." required>
            </div>
            <div class="form-group">
                <label for="phone">Phone number:*</label>
                <input type="text" id="phone" placeholder="Enter your phone number here." required>
            </div>
            <div class="form-group">
                <label for="establishment">Establishment:*</label>
                <input type="text" id="establishment" placeholder="Enter your establishment here." required>
            </div>
            <div class="form-group">
                <label for="zipcode">Zipcode:*</label>
                <input type="text" id="zipcode" placeholder="Enter your zipcode here." required>
            </div>
            <div class="form-group">
                <label for="email">E-mail:*</label>
                <input type="email" id="email" placeholder="Enter your e-mail here." required>
            </div>

            <h4 class="subhead">Project information</h4>
            <div class="form-group">
                <label for="project">Project name:*</label>
                <input type="text" id="project" placeholder="Enter your project name here." required>
            </div>
            <div class="form-group">
                <label for="amount">Max amount of debt:*</label>
                <input type="text" id="amount" placeholder="Enter the max amount of debt here." required>
            </div>
            <div class="form-group">
                <label for="comment">Comment:</label>
                <input type="text" id="comment" placeholder="Enter your comment here.">
            </div>
            <div class="form-group">
                <input class="submit" type="submit" value="Add">
            </div>
        </form>
    </div>
</section>

<?php
    require_once ('footer.php');

?>
