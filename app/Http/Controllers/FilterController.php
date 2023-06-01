<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class FilterController extends Controller
{
    public function applyFilter(Request $request)
    {
        // Process the filter logic and get the filtered data
        $filteredData = $request->getContent();
        // Redirect to the SearchPageController with the filtered data as query parameters
        return Redirect::route('search-page.index', ['filteredData' => $filteredData]);
    }
}
