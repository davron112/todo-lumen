<?php
namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Family;
use Illuminate\Http\Request;

class FamilyController extends Controller
{
    public function index()
    {
        return app(Family::class)->get()->toTree();
    }

    public function store()
    {
        echo "Test store";
    }

    public function update()
    {
        echo "Test update";
    }

    public function delete()
    {
        echo "Test delete";
    }
}
