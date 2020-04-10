<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Api\FamilyResource;
use App\Models\Family;

class FamilyController extends ApiBaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return FamilyResource::collection(Family::with('donation_area')->paginate(request('limit') ?? 10));
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
            'donation_area_id' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'type' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->respondValidationError('Parameters failed validation');
        }

        try{
            Family::create([
                    'donation_area_id' => $request->donation_area_id,
                    'name' => $request->name,
                    'phone' => $request->phone,
                    'type' => $request->type,
                    'total_member' => $request->elderly + $request->adult + $request->children,
                    'elderly' => !empty($request->elderly) ? $request->elderly : 0,
                    'adult' => !empty($request->adult) ? $request->adult : 0,
                    'children' => !empty($request->children) ? $request->children : 0,
                    'smoker' => !empty($request->smoker) ? $request->smoker : 0,
                    'respiratory' => !empty($request->respiratory) ? $request->respiratory : 0,
                    'diabetes' => !empty($request->diabetes) ? $request->diabetes : 0,
                    'heart' => !empty($request->heart) ? $request->heart : 0,
                    'details' => $request->details,
                    'contact_history' => $request->contact_history
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
            'donation_area_id' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'type' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->respondValidationError('Parameters failed validation');
        }

        try{
            Family::where('id', $id)->update([
                    'donation_area_id' => $request->donation_area_id,
                    'name' => $request->name,
                    'phone' => $request->phone,
                    'type' => $request->type,
                    'total_member' => $request->elderly + $request->adult + $request->children,
                    'elderly' => $request->elderly,
                    'adult' => $request->adult,
                    'children' => $request->children,
                    'smoker' => $request->smoker,
                    'respiratory' => $request->respiratory,
                    'diabetes' => $request->diabetes,
                    'heart' => $request->heart,
                    'details' => $request->details,
                    'contact_history' => $request->contact_history
                ]);
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
            if (Family::findOrFail($id)->delete()) {
                return $this->respondSuccess('DELETE_SUCCESS');
            }
        } catch (\Exception $e) {
            return $this->respondError($e->getMessage());
            return $this->respondError('DELETE_FAIL');
        }
    }
}
