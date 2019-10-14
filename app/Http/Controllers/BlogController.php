<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function show($category, $slug = null)
    {
        $slug = $slug ?: "Parameter gak ketemu bos!";

        return "(Ini dari controller) " . $category . ' - ' . $slug;
    }
}
