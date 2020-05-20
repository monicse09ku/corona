<?php

namespace App\Http\Controllers\Api;

use App\Models\Donation;
use App\Models\DonationArea;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Api\FamilyResource;
use App\Models\Family;
use Auth;
use Illuminate\Support\Facades\DB;

class FamilyController extends ApiBaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $data=[];
        $text2= "REPLACE(group_concat(family_id_array),'[','')";
        if(!empty($request->days)){
            $family_ids = Donation::where(['donation_area_id'=>$request->area_id])
                ->select(DB::raw("REPLACE(".$text2.",']','') as ttt"))
                ->where('created_at','>',Carbon::now()->addDays(-$request->days)->format('Y-m-d'))
                ->groupBy('donation_area_id')
                ->first();

        }

        $data['families'] = Family::with('donation_area');

        if(!empty($request->area_id)){
            $data['families']=$data['families']->where('donation_area_id',(int)$request->area_id);
        }
        if(isset($family_ids) && isset($family_ids->ttt) && !empty($family_ids->ttt)){
            $data['families']=$data['families']->whereIn('id',explode(',',$family_ids->ttt));
        }elseif(!empty($request->days) && !isset($family_ids)){
            $data['families']=$data['families']->whereIn('id',[0]);
        }
        $data['families']=$data['families']->orderBy('id', 'DESC')
            ->paginate(request('limit') ?? 10);

        $data['areas'] = DonationArea::get();

        return $data;
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
            //'phone' => 'regex:/[0-9]+/|between:1,31',
            'type' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->respondValidationError('Parameters failed validation');
        }

        if(!empty($request->phone)){
            $family = Family::where('phone', $request->phone)->first();

            if(!empty($family)){
                return $this->respondValidationError('Family Already Exists');
            }
        }

        try{
            $raw_medications = [];
            foreach ($request->medications as $key => $value) {
                array_push($raw_medications, $value['language']);
            }

            $medications = implode(', ', $raw_medications);

            Family::create([
                    'donation_area_id' => $request->donation_area_id,
                    'name' => $request->name,
                    'phone' => $request->phone,
                    'occupation' => $request->occupation,
                    'type' => $request->type,
                    'total_member' => $request->elderly + $request->adult + $request->children,
                    'elderly' => !empty($request->elderly) ? $request->elderly : 0,
                    'adult' => !empty($request->adult) ? $request->adult : 0,
                    'children' => !empty($request->children) ? $request->children : 0,
                    'medications' => $medications,
                    'details' => $request->details,
                    'contact_history' => $request->contact_history,
                    'created_by' => Auth::user()->id,
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
            //'phone' => 'regex:/[0-9]+/|between:1,31',
            'type' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->respondValidationError('Parameters failed validation');
        }

        try{
            $data = [
                    'donation_area_id' => $request->donation_area_id,
                    'name' => $request->name,
                    'phone' => $request->phone,
                    'occupation' => $request->occupation,
                    'type' => $request->type,
                    'total_member' => $request->elderly + $request->adult + $request->children,
                    'elderly' => $request->elderly,
                    'adult' => $request->adult,
                    'children' => $request->children,
                    'details' => $request->details,
                    'contact_history' => $request->contact_history
                ];

            if(!empty($request->medications)){
                $medications = [];
                foreach ($request->medications as $key => $value) {
                    array_push($medications, $value['language']);
                }

                $data['medications'] = implode(', ', $medications);
            }


            Family::where('id', $id)->update($data);
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
