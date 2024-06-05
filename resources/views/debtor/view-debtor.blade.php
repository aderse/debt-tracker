<!-- View for a single debtor -->
@include('globals.header')

<div class="container mt-3">
    <div class="row">
        <div class="col-md-12">
            <h2>Debtor Details</h2>
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
                    <tr>
                        <td>{{ $debtor->name }}</td>
                        <td>{{ $debtor->amountOwed }}</td>
                        <td>{{ $debtor->monthsToPay }}</td>
                        <td>{{ $debtor->initialDate }}</td>
                        <td>{{ $debtor->finalDate }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class=="col-md-12">
            <h2>Time Remaining</h2>
            <p>~{{ $monthsPassed }} months paid of {{ $totalMonths }}</p>
        </div>
    </div>
    <div class="row payment-grid">
        @for ($i = $totalMonths; $i >= 1; $i--)
            <div class="col-sm-1">
                @if( $i >= $monthsLeft )
                    <div id="month-{{ $i }}" class="bg-success text-light text-center p-3">
                        {{ $i }}
                    </div>
                @else
                    <div id="month-{{ $i }}" class="bg-light text-center p-3">
                        {{ $i }}
                    </div>
                @endif
            </div>
        @endfor
    </div>
</div>

@include('globals.footer')