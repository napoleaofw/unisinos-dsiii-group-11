<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Item;
use App\MeasureUnit;

class ItemController extends Controller
{
    public function index() {
        $data = [
            'records' => Item::all()
        ];

        return view('items.list', $data);
    }

    public function create() {
        return $this->form();
    }

    public function store(Request $request) {
        $record = new Item($this->validateData($request));
        $record->save();

        $data = [
            'message' => 'Registro inserido com sucesso.'
        ];

        return redirect()->route('items.index')->with($data);
    }

    public function show() {}
    
    public function edit($id) {
        if(isset($id)) {
            $record = Item::findOrFail($id);
        }

        return $this->form($record ?? null);
    }

    public function update(Request $request, $id) {
        $record = Item::findOrFail($id);
        $record->fill($this->validateData($request, $record));
        $record->save();

        $data = [
            'message' => 'Registro alterado com sucesso.'
        ];

        return redirect()->route('items.index')->with($data);
    }

    public function destroy(Request $request, $id) {
        $record = Item::findOrFail($id);

        if($record->requirements()->count() > 0) {
            $error = \Illuminate\Validation\ValidationException::withMessages([
                'field_name_1' => ['Esse item não pôde ser excluído, porque está presente em uma ou mais necessidades.']
            ]);

            throw $error;
        }

        $record->delete();

        $data = [
            'message' => 'Registro excluído com sucesso.'
        ];

        return redirect()->route('items.index')->with($data);
    }

    public function form($record = null) {
        if(!isset($record)) {
            $record = new Item();
        }

        $data = [
            'record' => $record,
            'categoryRecords' => Category::all(),
            'measureUnitRecords' => MeasureUnit::all()
        ];

        return view('items.form', $data);
    }

    public function validateData(Request $request, $record = null) {
        $idToIgnore = isset($record) ? $record->id : 0;

        $validatedData = $request->validate([
            'description' => 'required|unique:item,description,' . $idToIgnore . '|min:3|max:255',
            'category_id' => 'required',
            'measure_unit_id' => 'required'
        ], [
            'description.required' => 'O campo "Descrição" é obrigatório.',
            'description.unique' => 'O valor informado para o campo "Descrição" já está em uso.',
            'description.min' => 'O campo "Descrição" precisa conter ao menos :min caracteres.',
            'description.max' => 'O campo "Descrição" pode conter no máximo :max caracteres.',
            'category_id.required' => 'O campo "Selecione a categoria" é obrigatório.',
            'measure_unit_id.required' => 'O campo "Selecione a unidade de medida" é obrigatório.'
        ]);

        return $validatedData;
    }
}
