<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Deposit;
use Illuminate\Http\Request;

class DepositController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $deposits = Deposit::from('deposits as c')
        ->selectRaw('c.id, branch_offices.id as branch_office_id, cashiers.id as cashier_id, branch_offices.branch_office, cashiers.cashier, c.cash_amount, c.card_amount, c.created_at, c.updated_at')
        ->leftJoin('branch_offices', 'branch_offices.id', '=', 'c.branch_office_id')
        ->orderBy('c.created_at', 'desc')
        ->paginate(10);

        return response()->json([
            'success' => true,
            'data' => $deposits
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(BranchOffice $dte)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dte $dte)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dte $dte)
    {
        //
    }
}
