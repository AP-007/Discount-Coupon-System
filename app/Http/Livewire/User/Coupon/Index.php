<?php

namespace App\Http\Livewire\User\Coupon;

use Livewire\Component;
use App\Models\Coupon;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    //for searching
    public $search;
    public $code;

    public $query='';

    public function render()
    {
        // $coupons = Coupon::with('hotels')->when($this->search,function($query,$search){
        //     return $query->where('no_of_users', '>', '0');
        // })
        // ->where([
        //     ['code', 'like', '%' . "%$this->search%" ], 
        //     ['end_date', '>=', date('Y-m-d', strtotime('today'))],
        //     ['start_date', '<=', date('Y-m-d', strtotime('today'))],
        //     ['hotel_id', '=', auth()->user()->hotel_id],
        //     ['no_of_users', '>', 0]
        // ])
        // ->paginate(10);

        $coupons = DB::table('coupons')
            ->join('coupon_hotel', 'coupons.id','=','coupon_hotel.coupon_id')
            ->join('hotels','coupon_hotel.hotel_id','=','hotels.id')
            ->where([
            ['code', 'like', '%' . "%$this->search%" ], 
            ['end_date', '>=', date('Y-m-d', strtotime('today'))],
            ['start_date', '<=', date('Y-m-d', strtotime('today'))],
            ['hotels.id', '=', auth()->user()->hotel_id],
            ['no_of_users', '>', 0]
        ])
        ->select(['coupons.*'])->paginate(10);
        return view('livewire.user.coupon.index',compact('coupons'));
    }
}
