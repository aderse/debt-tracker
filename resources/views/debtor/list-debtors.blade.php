@include('globals.header')

<!-- List all debtors passed to the view -->
<div class="container mt-3">
    <div class="row">
        <div class="col-md-12">
            <h2>List of Debtors</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Amount Owed</th>
                        <th>Months To Pay</th>
                        <th>Initialized On</th>
                        <th>Finalizing On</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($debtors as $debtor)
                        <tr>
                            <td><a href="/view-debtor/{{ $debtor->id }}">{{ $debtor->name }}</a></td>
                            <td>{{ $debtor->amountOwed }}</td>
                            <td>{{ $debtor->monthsToPay }}</td>
                            <td>{{ $debtor->initialDate }}</td>
                            <td>{{ $debtor->finalDate }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@include('globals.footer')