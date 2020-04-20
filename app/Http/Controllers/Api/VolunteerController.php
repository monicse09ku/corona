<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Api\VolunteerResource;
use App\Models\Volunteer;

class VolunteerController extends ApiBaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(\Auth::user()->role == 'org_admin'){
            return VolunteerResource::collection(Volunteer::with('organisation.org_admin')->whereHas('organisation.org_admin', function ($query) {
                    $query->where('user_id', \Auth::user()->id);
                })->paginate(request('limit') ?? 10));
        }else{
            return VolunteerResource::collection(Volunteer::with('organisation.org_admin')->paginate(request('limit') ?? 10));
        }
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
            'name' => 'required',
            'phone' => 'required|regex:/[0-9]+/|between:1,31',
            'org_id' => 'required',
            'expertise' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->respondValidationError('Parameters failed validation');
        }

        try{
            Volunteer::create([
                    'name' => $request->name,
                    'phone' => $request->phone,
                    'org_id' => $request->org_id,
                    'expertise' => $request->expertise,
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
            'name' => 'required',
            'phone' => 'required|regex:/[0-9]+/|between:1,31',
            'org_id' => 'required',
            'expertise' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->respondValidationError('Parameters failed validation');
        }

        try{
            Volunteer::where('id', $id)->update([
                    'name' => $request->name,
                    'phone' => $request->phone,
                    'org_id' => $request->org_id
                    'expertise' => $request->expertise
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
            if (Volunteer::findOrFail($id)->delete()) {
                return $this->respondSuccess('DELETE_SUCCESS');
            }
        } catch (\Exception $e) {
            return $this->respondError($e->getMessage());
            return $this->respondError('DELETE_FAIL');
        }
    }
}
