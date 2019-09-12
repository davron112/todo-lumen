<?php
namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Family;
use Illuminate\Http\Request;
use Illuminate\Log\Logger;

class FamilyController extends Controller
{
    /**
     * @return mixed
     */
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

    /**
     * @param $id
     * @param Family $family
     * @return mixed
     */
    public function show($id, Family $family)
    {
        return $family->ancestorsOf($id);
    }

    public function delete()
    {
        echo "Test delete";
    }
}
