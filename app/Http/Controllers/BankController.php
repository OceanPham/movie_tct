<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banks = [
            [
                'id' => '1',
                'name' => 'Vietcombank',
                'image' => 'image/vietcombank.png',
            ],
            [
                'id' => '2',
                'name' => 'BIDV',
                'image' => 'image/BIDV.png',
            ],
            [
                'id' => '3',
                'name' => 'Agribank',
                'image' => 'image/agribank.png',
            ],
            [
                'id' => '4',
                'name' => 'Vietinbank',
                'image' => 'image/vietinbank.png',
            ],
            [
                'id' => '5',
                'name' => 'Sacombank',
                'image' => 'image/sacombank.png',
            ],
            [
                'id' => '6',
                'name' => 'Techcombank',
                'image' => 'image/techcombank.png',
            ],
            [
                'id' => '7',
                'name' => 'VPBank',
                'image' => 'image/vpbank.png',
            ],
            [
                'id' => '8',
                'name' => 'TienphongBank',
                'image' => 'image/tpbank.png',
            ],
            [
                'id' => '9',
                'name' => 'SHB',
                'image' => 'image/shb.png',
            ],

            [
                'id' => '10',
                'name' => 'MB',
                'image' => 'image/mb.png',
            ],
            [
                'id' => '11',
                'name' => 'VIB',
                'image' => 'image/vib.png',
            ],
            [
                'id' => '12',
                'name' => 'HDBank',
                'image' => 'image/hdbank.png',
            ],
            [
                'id' => '13',
                'name' => 'NCB',
                'image' => 'image/ncb.png',
            ],
            [
                'id' => '14',
                'name' => 'MSB',
                'image' => 'image/msb.png',
            ],
            [
                'id' => '15',
                'name' => 'SeABank',
                'image' => 'image/seabank.png',
            ],
            [
                'id' => '16',
                'name' => 'Dong A bank',
                'image' => 'image/dongabank.png',
            ],
            [
                'id' => '17',
                'name' => 'ACB',
                'image' => 'image/acb.png',
            ],
            [
                'id' => '18',
                'name' => 'OCB',
                'image' => 'image/ocb.png',
            ],
            [
                'id' => '19',
                'name' => 'BAC A BANK',
                'image' => 'image/bacabank.png',
            ],
            [
                'id' => '20',
                'name' => 'BVBANK',
                'image' => 'image/bvbank.png',
            ],

            [
                'id' => '21',
                'name' => 'VietABank',
                'image' => 'image/vietabank.png',
            ],
            [
                'id' => '22',
                'name' => 'OceanBank',
                'image' => 'image/oceanbank.png',
            ],
            [
                'id' => '23',
                'name' => 'LBBank',
                'image' => 'image/lbbank.png',
            ],
            [
                'id' => '24',
                'name' => 'SaiGonBank',
                'image' => 'image/saigonbank.png',
            ],
            
        ];
        return View('pay.bank',compact('banks'));
    }
    public function cardInformation(Request $request)
    {
        $bank = [
            'name' => $request->query('name'),
            'image' => $request->query('image')
        ];
        return view('pay.cardinformation', compact('bank'));
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
