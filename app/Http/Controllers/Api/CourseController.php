<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateCourse;
use App\Http\Resources\CourceResource;
use App\Services\CourseService;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    protected $courseService;

    public function __construct(CourseService $courseService)
    {
       $this->courseService = $courseService;
    }
    /**
     * Display a listing of the resource.
     *
     */


    public function index()
    {
        $cousres = $this->courseService->getCourses();

        return CourceResource::collection($cousres);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpdateCourse $request)
    {
        $cousre = $this->courseService->createNewCourse($request->validated());

        return new CourceResource($cousre);
    }

    /**
     * Display the specified resource.
     */
    public function show($identify)
    {
        $curse = $this->courseService->getCourse($identify);
        return new CourceResource($curse);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
