<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Requirement;
use App\Urgency;

class RequirementController extends Controller
{
    public function index() {
        $data = [
            'records' => Requirement::all()
        ];

        return view('requirements.list', $data);
    }

    public function create() {
        return $this->form();
    }

    public function store(Request $request) {
        $record = new Requirement($this->validateData($request));
        $record->save();

        $data = [
            'message' => 'Registro inserido com sucesso.'
        ];

        return redirect()->route('requirements.index')->with($data);
    }

    public function show() {}
    
    public function edit($id) {
        if(isset($id)) {
            $record = Requirement::findOrFail($id);
        }

        return $this->form($record ?? null);
    }

    public function update(Request $request, $id) {
        $record = Requirement::findOrFail($id);
        $record->fill($this->validateData($request));
        $record->save();

        $data = [
            'message' => 'Registro alterado com sucesso.'
        ];

        return redirect()->route('requirements.index')->with($data);
    }

    public function destroy(Request $request, $id) {
        $record = Requirement::findOrFail($id);
        $record->delete();

        $data = [
            'message' => 'Registro excluído com sucesso.'
        ];

        return redirect()->route('requirements.index')->with($data);
    }

    public function form($record = null) {
        if(!isset($record)) {
            $record = new Requirement();
        }

        $data = [
            'record' => $record,
            'itemRecords' => Item::all(),
            'urgencyRecords' => Urgency::all()
        ];

        return view('requirements.form', $data);
    }

    public function validateData(Request $request) {
        $validatedData = $request->validate([
            'item_id' => 'required',
            'urgency_id' => 'required',
            'quantity' => 'required|numeric'
        ], [
            'item_id.required' => 'O campo "Selecione o item" é obrigatório.',
            'urgency_id.required' => 'O campo "Selecione a urgência" é obrigatório.',
            'quantity.required' => 'O campo "Quantidade" é obrigatório.',
            'quantity.numeric' => 'O valor do campo "Quantidade" deve ser numérico.'
        ]);

        return $validatedData;
    }
}
