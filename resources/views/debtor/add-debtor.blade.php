@include('globals.header')

<div class="container mt-3">
    <div class="row">
        <div class="col-md-12">
            <h2>Add Debtor</h2>

                <form class="form-horizontal" role="form" method="POST" action="{{ url('/add-debtor') }}">
                    {{ csrf_field() }}

                    <div class="form-group mt-3">
                        <label for="name" class="col-md-4 control-label">Debtor Name</label>
                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                        </div>
                    </div>

                    <div class="form-group mt-3">
                        <label for="amountOwed" class="col-md-4 control-label">Amount Owed</label>
                        <div class="col-md-6">
                            <input id="amountOwed" type="text" class="form-control" name="amountOwed" value="{{ old('amountOwed') }}" required>
                        </div>
                    </div>

                    <div class="form-group mt-3">
                        <label for="monthsToPay" class="col-md-4 control-label">Months To Pay</label>
                        <div class="col-md-6">
                            <input id="monthsToPay" type="text" class="form-control" name="monthsToPay" value="{{ old('monthsToPay') }}" required>
                        </div>
                    </div>

        
                    <div class="form-group mt-3">
                        <label for="initialDate" class="col-md-4 control-label">Initial Date</label>
                        <div class="col-md-6">
                            <input id="initialDate" type="date" class="form-control" name="initialDate" value="{{ old('initialDate') }}" required>
                        </div>

                    </div>

                    <div class="form-group mt-3">
                        <label for="finalDate" class="col-md-4 control-label">Final Date</label>
                        <div class="col-md-6">
                            <input id="finalDate" type="date" class="form-control" name="finalDate" value="{{ old('finalDate') }}" required>
                        </div>
                    </div>

                    <div class="form-group mt-3">
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-dark">
                                Add Debtor
                            </button>
                        </div>
                    </div>
                </form>
        </div>
    </div>
</div>

@include('globals.footer')