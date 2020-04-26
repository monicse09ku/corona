<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Api\ExpenseResource;
use App\Models\Expense;

class ExpenseController extends ApiBaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(\Auth::user()->role == 'org_admin'){
            return ExpenseResource::collection(Expense::with('organisation.org_admin')->whereHas('organisation.org_admin', function ($query) {
                    $query->where('user_id', \Auth::user()->id);
                })->paginate(request('limit') ?? 10));
        }else{
            return ExpenseResource::collection(Expense::with('organisation.org_admin')->paginate(request('limit') ?? 10));
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
            'summary' => 'required',
            'medium' => 'required',
            'account' => 'required',
            'amount' => 'required|integer',
            'org_id' => 'required'
        ]);

        if ($validator->fails()) {
            return $this->respondValidationError('Parameters failed validation');
        }

        try{
            $imageName = null;
            if ($request->hasFile('file')) {
                $imageName = time().'.'.$request->file->getClientOriginalExtension();
                $request->file->move(public_path('images/expenses/' . $request->org_id), $imageName);
            }

            Expense::create([
                    'summary' => $request->summary,
                    'medium' => $request->medium,
                    'account' => $request->account,
                    'amount' => $request->amount,
                    'vouchar' => $imageName,
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
            'summary' => 'required',
            'medium' => 'required',
            'account' => 'required',
            'amount' => 'required|integer',
            'org_id' => 'required'
        ]);

        if ($validator->fails()) {
            return $this->respondValidationError('Parameters failed validation');
        }

        try{
            $expense = Expense::findOrFail($id);
            
            $data = [
                    'summary' => $request->summary,
                    'medium' => $request->medium,
                    'account' => $request->account,
                    'amount' => $request->amount,
                    'org_id' => $request->org_id
                ];
            if ($request->hasFile('file')) {
                $imageName = time().'.'.$request->file->getClientOriginalExtension();
                $request->file->move(public_path('images/expenses/' . $request->org_id), $imageName);

                if(!empty($expense->vouchar)){
                    if(file_exists(public_path('images/expenses/' . $request->org_id) . '/' . $expense->vouchar)){
                        unlink(public_path('images/expenses/' . $request->org_id) . '/' . $expense->vouchar);
                    }
                }
                $data['vouchar'] = $imageName;
            }

            $expense->update($data);
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
            $expense = Expense::findOrFail($id);

            if(!empty($expense->vouchar)){
                if(file_exists(public_path('images/expenses/' . $expense->org_id) . '/' . $expense->vouchar)){
                    unlink(public_path('images/expenses/' . $expense->org_id) . '/' . $expense->vouchar);
                }
            }

            if ($expense->delete()) {
                return $this->respondSuccess('DELETE_SUCCESS');
            }
        } catch (\Exception $e) {
            return $this->respondError('DELETE_FAIL');
        }
    }
}
