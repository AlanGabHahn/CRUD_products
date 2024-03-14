<?php

namespace App\Http\Controllers;

use Illuminate\Http\{
    Request,
    JsonResponse
};
use App\Models\Product;
use Illuminate\Support\Facades\Validator;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(): JsonResponse
    {
        $collection = Product::paginate(10);
        return response()->json($collection, 200);
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request): JsonResponse
    {   
        $data = $request->all();
        $rules = [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric|min:0.00',
            'quantity' => 'required|integer|min:0'
        ];
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }
        $product = Product::create($data);
        return response()->json([
            'id' => $product->id,
            'message' => 'Produto criado com sucesso!'
        ], 200);
        
    }

    /**
     * Display the specified resource.
     * 
     * @param string $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(string $id): JsonResponse
    {
        $product = Product::find($id);
        return response()->json($product, 200);
    }

    /**
     * Update the specified resource in storage.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @param string $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, string $id): JsonResponse
    {
        $data =  $request->all();
        $rules = [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|integer'
        ];
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }
        $product = Product::findOrFail($id)
                    ->update($data);
        return response()->json([
            'message' => 'Produto atualizado com sucesso!' 
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @param string $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(string $id): JsonResponse
    {
        $product = Product::findOrFail($id)
                    ->delete();
        return response()->json(['message' => 'Produto deletado com sucesso!'], 200);
    }
}
