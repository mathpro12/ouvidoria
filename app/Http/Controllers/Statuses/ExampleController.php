<?php

namespace App\Http\Controllers\Statuses;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Log;
use Validator;

use App\Models\Status;

class ExampleController extends Controller
{
    public function __construct()
    {
        //
    }

    public function store(Request $request)
    {
        $this->validateData($request);

        try {
            $status = new Status();
            $status->nome = $request->get('nome');

            return 'Deu Bom';
        } catch (\Exception $e) {
            Log::error($e->getMessage());
        }

        return 'Deu Ruim';
    }

    public function lists()
    {
        try {
            $status = Status::all();

            return $status;

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
            'nome' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            throw new \Exception();
        }

        return;
    }
}
