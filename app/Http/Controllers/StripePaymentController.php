<?php
   
namespace App\Http\Controllers;
   
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use Stripe;
   
class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe($id)
    {
        $product = DB::table('products')->where('id',$id)->first();
        return view('stripe', compact('product'));
    }
  
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        

        try {

                Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
                $data = Stripe\Charge::create ([
                        "amount" => $request->amount * 100,
                        "currency" => "usd",
                        "source" => $request->stripeToken,
                        "description" => "Test payment" 
                ]);


        } catch (\Exception $e) {               
                
                return redirect('/')->with('update', 'failed Payment !'.$e->getMessage());
        }        
        
                return redirect('/')->with('update', 'Payment has been done successfully!');

          
        
    }
}
