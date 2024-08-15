<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConvertStringRequest;
use App\Services\StringToNumberService;
use Illuminate\Http\JsonResponse;

class StringToNumberController extends Controller
{
    protected StringToNumberService $stringToNumberService;

    public function __construct(StringToNumberService $stringToNumberService)
    {
        $this->stringToNumberService = $stringToNumberService;
    }

    public function convert(ConvertStringRequest $request): JsonResponse
    {
        $inputString = $request->input('input_string');
        $number = $this->stringToNumberService->convert($inputString);

        return response()->json([
            'input' => $inputString,
            'output' => $number,
        ]);
    }
}
