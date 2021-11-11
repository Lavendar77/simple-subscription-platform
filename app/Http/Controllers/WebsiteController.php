<?php

namespace App\Http\Controllers;

use App\Models\Website;

class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $websites = Website::all();

        return response()->json([
            'status' => true,
            'message' => 'Websites fetched successfully.',
            'data' => [
                'websites' => $websites,
            ],
        ]);
    }
}
