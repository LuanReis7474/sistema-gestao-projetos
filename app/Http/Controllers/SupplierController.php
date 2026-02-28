<?php

namespace App\Http\Controllers;
use App\Models\Supplier;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

class SupplierController extends Controller
{
    public function index():View
    {
        $suppliers = Supplier::orderBy('created_at', 'desc')->paginate(5);
        return view('suppliers.index', compact('suppliers'));
    }

    public function create(): View
    {
        return view('suppliers.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'         => 'required|string|max:255',
            'phone'     => 'nullable|string|max:20',
            'cnpj' => 'nullable|string|max:18|unique:suppliers'
        ], [
            'name.required' => 'O campo nome é obrigatório.'
        ]);

        Supplier::create($validatedData);
        return redirect()->route('suppliers.index')->with('success', 'Fornecedor cadastrado com sucesso!');
    }
}