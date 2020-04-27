<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Api\DonationAreaResource;
use App\Models\DonationArea;

class DonationAreaController extends ApiBaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
//        return DonationAreaResource::collection(DonationArea::paginate(request('limit') ?? 10));
        return DonationArea::paginate(request('limit') ?? 10);
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
            'area_name' => 'required',
            'status' => 'required',
            'lat' => 'required',
            'long' => 'required'
        ]);

        if ($validator->fails()) {
            return $this->respondValidationError('Parameters failed validation');
        }

        $donation_area = DonationArea::where([
            ['lat', $request->lat],
            ['long', $request->long]
        ])->first();

        if ($donation_area !== null) {
           return $this->respondInternalError('Donation Area already exists.');
        }

        try{
            DonationArea::create([
                    'area_name' => $request->area_name,
                    'status' => $request->status,
                    'lat' => $request->lat,
                    'long' => $request->long
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
            'area_name' => 'required',
            'status' => 'required',
            'lat' => 'required',
            'long' => 'required'
        ]);

        if ($validator->fails()) {
            return $this->respondValidationError('Parameters failed validation');
        }

        /*$donation_area = DonationArea::where([
            ['lat', $request->lat],
            ['long', $request->long]
        ])->first();

        if ($donation_area !== null) {
           return $this->respondInternalError('Donation Area already exists.');
        }*/

        try{
            DonationArea::where('id', $id)->update([
                    'area_name' => $request->area_name,
                    'status' => $request->status,
                    'lat' => $request->lat,
                    'long' => $request->long
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
            if (DonationArea::findOrFail($id)->delete()) {
                return $this->respondSuccess('DELETE_SUCCESS');
            }
        } catch (\Exception $e) {
            return $this->respondError('DELETE_FAIL');
        }
    }
}
