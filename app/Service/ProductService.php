<?php
namespace App\Service;

use App\category;
use App\custom_field;
use App\Http\Requests\ProductRequest;
use App\product;
use App\product_category;
use App\product_customfield;
use App\product_image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\This;

class ProductService
{
private $productModel;
private $custom;
private $pimage;
    private $category;
    /**
     * ProductService constructor.
     */
    public function __construct(product $product,custom_field  $custom,category $category,product_image $pimage)
    {
        $this->productModel=$product;
        $this->custom=$custom;
        $this->category=$category;
        $this->pimage=$pimage;
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
        $response=$this->productModel::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'brand_id' => $request->brand_id,
            'barcode' => $request->barcode,
            'productcol' => $request->productcol,
            'meta' => $request->meta,
            'is_active' => $is_active,
            'is_appear' => $is_appear,
            'description' => $request->description,
        ]);
        for ($i=0;$i<(int)$request->counter;$i++){
            $response->customfields()->attach($request->custom_field[$i],[
                'value' => $request->value[$i],
                'description' => "sssssss",
            ]);
        }
        for ($i=0;$i<(int)$request->ccounter;$i++){
            $response->categories()->attach($request->category[$i],['description'=>$request->cdescription[$i]]);
        }



        for ($i = 0;$i< (int)$request->icounter;$i++){
            $e =$i + 1;
            if ( (int)$request->iscover == $e ){
                $xx[$i]=true;
            }else{
                $xx[$i]=false;
            }
        }
        for ($i = 0;$i< (int)$request->icounter;$i++) {

                $this->pimage::create([
                    'product_id' => $response->id,
                    'image'      =>$request->image[$i]->store('images','public'),
                    'is_cover'   =>$xx[$i]
                ]);



        }

        session()->flash('success','product created successfuly');

        return $request;

    }
    public function update(Request $request, Product $product)
    {
        //dd($request);
//        return $request;
//        $product->title =$request->title;
//        $product->slug =$request->slug;
//        $product->brand_id =$request->brand_id;
//        $product->barcode =$request->barcode;
//        $product->productcol =$request->productcol;
//        $product->meta =$request->meta;
//        $product->description =$request->description;
//        $response= $product->save();
//        for ($i=0;$i<(int)$request->counter;$i++){
        $links=[];
        for($i=0;$i<$request->counter;$i++){
            $links[$request->custom_field[$i]] = ['value'=>$request->value[$i],'description'=>'ttttt'];
        }
            $product->customfields()->sync($links);
//        }
        for ($i=0;$i<(int)$request->ccounter;$i++){
            $product->categories()->sync([$request->category[$i] => [

                'description' => $request->cdescription[$i],
            ]]);
        }
        $response=$product->update([
            'title' => $request->title,
            'slug' => $request->slug,
            'brand_id' => $request->brand_id,
            'barcode' => $request->barcode,
            'productcol' => $request->productcol,
            'meta' => $request->meta,
            'description' => $request->description,
        ]);
        if($response=true){
            return "success";
        }else{
            return "faild";
        }
//        return $response;
//        return $request->image[2]->store('images','public');


    }
    public function delete(Product $product){
        $response=$product->delete();
    }
//    public function storeProductCustomField(int $productId,Request $request)
//    {
//        $this->customField->product=product::find($productId);
//        return $this->customField;
//    }
public function Products()
{
    $response=$this->productModel::all();
    return $response;
}
public function appearProducts()
{

    $res=$this->productModel::all()->where('is_appear',1);
    return $res;
}
    public function productsByCategory($category_id)
    {
      //  $product_ids=DB::table('product_categories')->select('product_id')->where('category_id',$category_id)->get();
        $product_ids= $this->pcategory->ById($category_id);
        $i=0;
        foreach ($product_ids as $product_id){
            $ids[$i]=$product_id->product_id;
            $i++;

        }

        $res1=$this->productModel::all()->whereIn('id',$ids)->where('is_appear',1);
        return $res1;
    }
    public function productDetails($id){
        $response=$this->productModel::all()->where('id',$id);
        return $response;
    }

}
