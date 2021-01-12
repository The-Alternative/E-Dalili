<?php
/*namespace App\Service;

use App\Http\Requests\ProductRequest;
use App\Employee;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\This;

class ProductService
{
private $EmployeeModel;
private $employee;
    /**
     * ProductService constructor.
     */
   /* public function __construct(Employee $employee)
    {
        $this->EmployeeModel=$employee;

    }

    public function store(Request $request)
    {
        if ($request->is_active){
            $is_active=true;
        }else{
            $is_active=false;
        }
        if ($request->is_appear){
            $is_appear=true;
        }else{
            $is_appear=false;
        }

        //var_dump($request);
        $response=$this->EmployeeModel::create([
            'role_id'        => $request->role_id,
            'first_name'        => $request->fname,
            'l_name' => $request->lname,
            'age' => $request->age,
            'sex' => $request->sex,
            'image'       => $request->image->store('images','public'),
            'job_title' => $request->job_title,
            'certificate' => $request->certificate,
            'start_date' => $request->start_date,
            'upgrade' => $request->upgrade,
            'salary' => $request->salary,
        ]);
       /* for ($i = 0;$i< (int)$request->counter;$i++) {
            $this->customField::create([
                'product_id' => $response->id,
                'custom_field_id' => $request->custom_field[$i],
                'value' => $request->value[$i],
                'description' => 'assesses'
            ]);
        }
        for ($i = 0;$i< (int)$request->ccounter;$i++) {
            $this->pcategory::create([
                'product_id' => $response->id,
                'category_id' => $request->category[$i],
                'description' => $request->cdescription[$i],
            ]);
        }

        session()->flash('success','product created successfuly');

        return $request;

    }
    public function update(Request $request, Employee $employee)
    {
//        $product->title =$request->title;
//        $product->slug =$request->slug;
//        $product->brand_id =$request->brand_id;
//        $product->barcode =$request->barcode;
//        $product->productcol =$request->productcol;
//        $product->meta =$request->meta;
//        $product->description =$request->description;
//        $response= $product->save();
        $response=$product->update([
            'role_id'        => $request->role_id,
            'first_name'        => $request->fname,
            'l_name' => $request->lname,
            'age' => $request->age,
            'sex' => $request->sex,
            'image'       => $request->image->store('images','public'),
            'job_title' => $request->job_title,
            'certificate' => $request->certificate,
            'start_date' => $request->start_date,
            'upgrade' => $request->upgrade,
            'salary' => $request->salary,
        ]);
        if($response=true){
            return "success";
        }else{
            return "faild";
        }
//        return $response;


    }
    public function delete(Product $product){
        $res=DB::table('Employee')->where('id',$employee->id)->delete();


        $response=$employee->delete();

    }
//    public function storeProductCustomField(int $productId,Request $request)
//    {
//        $this->customField->product=product::find($productId);
//        return $this->customField;
//    }
public function Employee()
{
    $response=$this->EmployeeModel::all();
    return $response;
}
}*/