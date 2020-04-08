<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Api\DonorResource;
use App\Models\Donor;

class DonorController extends ApiBaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return DonorResource::collection(Donor::paginate(request('limit') ?? 10));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'summary' => 'required',
            'medium' => 'required',
            'amount' => 'required|integer'
        ]);

        if ($validator->fails()) {
            return $this->respondValidationError('Parameters failed validation');
        }

        try{
            $imageName = null;
            if ($request->hasFile('file')) {
                $imageName = time().'.'.$request->file->getClientOriginalExtension();
                $request->file->move(public_path('images\donors'), $imageName);
            }

            Donor::create([
                    'summary' => $request->summary,
                    'medium' => $request->medium,
                    'amount' => $request->amount,
                    'vouchar' => $imageName
                ]);
            return $this->respondSuccess('SUCCESS');
        }catch(Exception $e){
            return $this->respondInternalError($e->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = \Validator::make($request->all(), [
            'summary' => 'required',
            'medium' => 'required',
            'amount' => 'required|integer'
        ]);

        if ($validator->fails()) {
            return $this->respondValidationError('Parameters failed validation');
        }

        try{
            $donor = Donor::findOrFail($id);
            
            $data = [
                    'summary' => $request->summary,
                    'medium' => $request->medium,
                    'amount' => $request->amount,
                ];
            if ($request->hasFile('file')) {
                $imageName = time().'.'.$request->file->getClientOriginalExtension();
                $request->file->move(public_path('images\donors'), $imageName);

                if(!empty($donor->vouchar)){
                    unlink(public_path('images\donors\\') . $donor->vouchar);
                }
                $data['vouchar'] = $imageName;
            }

            $donor->update($data);
            return $this->respondSuccess('SUCCESS');
        }catch(Exception $e){
            return $this->respondInternalError($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $donor = Donor::findOrFail($id);

            if(!empty($donor->vouchar)){
                unlink(public_path('images\donors\\') . $donor->vouchar);
            }

            if ($donor->delete()) {
                return $this->respondSuccess('DELETE_SUCCESS');
            }
        } catch (\Exception $e) {
            return $this->respondError('DELETE_FAIL');
        }
    }
}
