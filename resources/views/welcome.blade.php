@include('globals.header')

<main>

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                
                <h1>Welcome to Debt Tracker</h1>

                <p>Debt Tracker is a simple web application that helps you keep track of the debts you owe or are owed. You can add debtors, view their details, and update their information. You can also delete debtors from the system.</p>

                <p>Click on the links below to get started:</p>

                <ul>

                    <li><a href="{{ url('/add-debtor') }}">Add Debtor</a></li>

                    <li><a href="{{ url('/list-debtors') }}">List Debtors</a></li>
                    
                </ul>

            </div>
        </div>
    </div>
        
</main>

@include('globals.footer')