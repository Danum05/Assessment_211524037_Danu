<?php

namespace App\Http\Controllers;

use App\Models\Tenan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TenanController extends Controller
{
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;
        $jumlahbaris = 4;

        if (strlen($katakunci)) {
            $data = Tenan::where('id', 'like', "%$katakunci%")
                ->orWhere('KodeTenan', 'like', "%$katakunci%")
                ->orWhere('NamaTenan', 'like', "%$katakunci%")
                ->orWhere('HP', 'like', "%$katakunci%")
                ->paginate($jumlahbaris);
        } else {
            $data = Tenan::orderBy('id', 'desc')->paginate($jumlahbaris);
        }

        return view('tenan.index')->with('data', $data);
    }

    public function create()
    {
        return view('tenan.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'KodeTenan' => 'required|string|max:255',
            'NamaTenan' => 'required|string|max:255',
            'HP' => 'required|regex:/^[0-9]+$/|digits_between:10,15',
        ]);

        if ($validator->fails()) {
            return redirect("tenan/create")
                ->withErrors($validator)
                ->withInput();
        }

        $data = [
            'KodeTenan' => $request->KodeTenan,
            'NamaTenan' => $request->NamaTenan,
            'HP' => $request->HP,
        ];

        Tenan::create($data);

        return redirect()->to('tenan')->with('success', 'Berhasil menambahkan data tenan');
    }

    public function show($id)
    {
        $data = Tenan::find($id);

        return view('tenan.show')->with('data', $data);
    }

    public function edit($id)
    {
        $data = Tenan::find($id);
        return view('tenan.edit')->with('data', $data);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'KodeTenan' => 'required|string|max:255',
            'NamaTenan' => 'required|string|max:255',
            'HP' => 'required|regex:/^[0-9]+$/|digits_between:10,15',
        ]);

        if ($validator->fails()) {
            return redirect("tenan/{$id}/edit")
                ->withErrors($validator)
                ->withInput();
        }

        $data = [
            'KodeTenan' => $request->KodeTenan,
            'NamaTenan' => $request->NamaTenan,
            'HP' => $request->HP,
        ];

        Tenan::where('id', $id)->update($data);

        return redirect()->to('tenan')->with('success', 'Berhasil melakukan update data');
    }

    public function destroy($id)
    {
        Tenan::where('id', $id)->delete();
        return redirect()->to('tenan')->with('success', 'Berhasil melakukan delete data');
    }
}
