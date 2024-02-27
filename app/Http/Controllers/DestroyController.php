<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DestroyController extends Controller {
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request) {
        $model = "\\App\\Models\\".\Str::ucfirst($request->model);
        if (class_exists($model)) {
            $model::where('id', $request->id)->delete();
            return response()->json([
                'status' => 200,
                'message' => \Str::ucfirst($request->model) . ' deleted successfully.'
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Model class not found.'
            ]);
        }
    }
}
