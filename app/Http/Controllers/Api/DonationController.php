<?php

namespace App\Http\Controllers\Api;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Api\DonationResource;
use App\Models\Donation;
use App\Http\Resources\Api\FamilyResource;
use App\Models\Family;
use Illuminate\Support\Facades\DB;

class DonationController extends ApiBaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return DonationResource::collection(Donation::with('donation_area', 'organisation')->paginate(request('limit') ?? 10));
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
            'family_ids' => 'required',
            'org_id' => 'required'
        ]);

        if ($validator->fails()) {
            return $this->respondValidationError('Parameters failed validation');
        }

        try{
            Donation::create([
                    'donation_area_id' => $request->donation_area_id,
                    'family_ids' => $request->family_ids,
                    'family_id_array' => array_column($request->family_ids, 'id'),
                    'org_id' => $request->org_id
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
            'family_ids' => 'required',
            'org_id' => 'required'
        ]);

        if ($validator->fails()) {
            return $this->respondValidationError('Parameters failed validation');
        }

        try{
            Donation::where('id', $id)->update([
                    'donation_area_id' => $request->donation_area_id,
                    'family_ids' => $request->family_ids,
                    'family_id_array' => array_column($request->family_ids, 'id'),
                    'org_id' => $request->org_id
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
            if (Donation::findOrFail($id)->delete()) {
                return $this->respondSuccess('DELETE_SUCCESS');
            }
        } catch (\Exception $e) {
            return $this->respondError($e->getMessage());
            return $this->respondError('DELETE_FAIL');
        }
    }

    public function donationAreaFamilies($id)
    {
        $text2= "REPLACE(group_concat(family_id_array),'[','')";
        $family_ids = Donation::where(['donation_area_id'=>$id])
            ->select(DB::raw("REPLACE(".$text2.",']','') as ttt"))
            ->where('created_at','<',Carbon::now()->addDays(-6))
            ->groupBy('donation_area_id')->first();

        $family =Family::where(['donation_area_id'=>$id]);
        if(isset($family_ids) && isset($family_ids->ttt) && !empty($family_ids->ttt)){
            $family=$family->whereNotIn('id',explode(',',$family_ids->ttt));
        }
        $family=$family->get();
        return FamilyResource::collection($family);
    }
}
