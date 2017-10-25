@extends('master')
@section('content')

    <section>
        <div class="container">
            <h2 class="subhead">Login</h2>
            <p>
                If you want to login you will have to know your username and password first, if you don't know these then you should ask this to you your manager or to a co-worker
            </p>
            <p>
                If u have all your information then you can fill it in, when you have filled it in you can click 'submit' to login.
            </p>
        </div>
    </section>

    <section>
        <div class="container">
            <h2 class="subhead">Finance</h2>
            <p>
                On the finance home-page you can see all companies that are active.
            </p>
            <p>
                If you click on the 'request info' button then you can see all the specific information of the selected company.
            </p>
            <p>
                After that, if you click on the 'Insert invoice' button you will get a form where you can add an invoice.
            </p>
            <p>
                If you then click on 'insert invoice' the balance of the customer will be updated automatically.
            </p>
        </div>
    </section>

    <section>
        <div class="container">
            <h2 class="subhead">Sales</h2>
            <p>
                On the sales home-page you can see all companies that have debt en all the companies that don't have debt.
            </p>
            <p>
                If you click on the 'add cutomer' button then you can add an customer, fill in all the required information and click on the 'add' button.
            </p>
            <p>
                If you click on the 'delete' button, you won't delete the customer permanently, they will be set to inactive.
            </p>
            <p>
                If you click on the 'details' button, you will go to the details page of the selected customer, here you will see all the specific details of the customer.
            </p>
            <p>
                On the details page you cna click on the 'create project' button, there you will need to fill in a form with all the required information and click on 'create', then the project will be added to the customers detail page.
            </p>
            <p>
                At the project on the detail page of the customer is a 'delete' button, if you click on this you won't delete the project permanently but set it to inactive.
            </p>
            <p>
                At the project on the detail page of the customer is also a 'details' button, if you click on this you will go to the details page of the selected project.
            </p>
            <p>
                On the detail page of the project you can see all specific details about the project.
            </p>
        </div>
    </section>

    <section>
        <div class="container">
            <h2 class="subhead">Development</h2>
            <p>
                On the development home-page you can see the statuses of the customers and which projects are paused.
            </p>
            <p>
                If you click on the 'projects' button you can see all the queued projects and all active projects.
            </p>
            <p>
                If you then click on the 'view project' button you can see all the specific details of the selected project and make it active, if the project is already active you will have the posibility to finish it.
            </p>
        </div>
    </section>

@endsection