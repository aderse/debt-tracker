<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Debtor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'amountOwed',
        'monthsToPay',
        'initialDate',
        'finalDate',
    ];

    /**
     * Get the number of months completed since the initial date 
     * @return int
     */ 
    public function getMonthsCompleted(): int
    {
        $initialDate = new \DateTime($this->initialDate);
        $currentDate = new \DateTime(date('Y-m-d'));
        $interval = $initialDate->diff($currentDate);
        return $interval->m + ($interval->y * 12);
    }

    /**
     * Get the number of months left to complete the debt.
     * @param int $monthsPassed
     * @param int $totalMonths
     * @return int
     */
    public function getMonthsLeft( int $monthsPassed, int $totalMonths ): int
    {
        return $totalMonths - $monthsPassed;
    }
}