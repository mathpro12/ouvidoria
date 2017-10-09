<?php

namespace App\Http\Controllers\Statuses;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Log;
use Validator;

use App\Models\Status;

class StatusesController extends Controller
{
    public function __construct()
    {
        //
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $this->validateData($data);

        try {
            $status = Status::create($data);

            return 'Saved';
        } catch (\Exception $e) {
            Log::error($e->getMessage());
        }

        return 'Failed';
    }

    public function lists()
    {
        try {
            $status = Status::all();

            var_dump($status);

            return 'Deu Bom';
        } catch (\Exception $e) {
            Log::error($e->getMessage());
        }

        return 'Deu Ruim';
    }

    /**
     * @param Request $request
     *
     * @throws StoreResourceFailedException
     */
    private function validateData(Request $request)
    {
        $rules = [
            'name' => 'required',
        ];

        $validator = Validator::make($request, $rules);

        if ($validator->fails()) {
            throw new \Exception();
        }

        return;
    }
}
