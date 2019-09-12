<?php
namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\StoreFamilyRequest;
use App\Models\Family;
use Illuminate\Http\Request;
use Illuminate\Log\Logger;

class FamilyController extends Controller
{
    /**
     * @param Family $family
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Family $family)
    {
        return response()->json($family->get()->toTree());
    }

    /**
     * @param Request $request
     * @param Family $family
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Validation\ValidationException
     *
     */
    public function store(Request $request, Family $family)
    {
        $this->validate($request, $family->validate());
        $family = Family::create($request->all());

        return response()->json($family);
    }

    public function update()
    {
        // "Test update";
    }

    /**
     * @param $id
     * @param Family $family
     * @return \Illuminate\Http\JsonResponse
     *
     */
    public function show($id, Family $family)
    {
        return response()->json($family->ancestorsOf($id));
    }

    public function delete()
    {
        // "Test delete";
    }
}
