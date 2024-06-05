<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Debtor;

class DebtorController extends Controller
{
    // Add a method for adding in a new debtor.
    public function addDebtor()
    {
        return view('debtor/add-debtor');
    }

    // Add a method that will save the debtor to the database.
    public function saveDebtor(Request $request)
    {
        $debtor = new Debtor();
        $debtor->name = $request->name;
        $debtor->amountOwed = $request->amountOwed;
        $debtor->monthsToPay = $request->monthsToPay;
        $debtor->currentMonthNumber = $request->currentMonthNumber;
        $debtor->startDate = date("Y-m-d", strtotime($request->initialDate));
        $debtor->finalDate = date("Y-m-d", strtotime($request->finalDate));
        $debtor->save();

        return redirect('/');
    }

    // Add a method for viewing all debtors.
    public function listDebtors()
    {
        $debtors = Debtor::all();
        return view('debtor/list-debtors', ['debtors' => $debtors]);
    }

    // Add a method for viewing a single debtor in a cool thermometer widget.
    public function viewDebtor($id)
    {
        $debtor = Debtor::find($id);
        $monthsCompleted = $debtor->getMonthsCompleted();
        $totalMonths = $debtor->monthsToPay;
        $monthsLeft = $debtor->getMonthsLeft($monthsCompleted, $totalMonths);
        return view('debtor/view-debtor', [
            'debtor' => $debtor, 
            'monthsPassed' => $monthsCompleted,
            'totalMonths' => $totalMonths,
            'monthsLeft' => $monthsLeft,
        ]);
    }

}
