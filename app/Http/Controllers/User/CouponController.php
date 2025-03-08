<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class CouponController extends Controller
{
    /**
     * 顯示用戶的優惠券列表
     *
     * @param Request $request
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        // 從 session 獲取視圖偏好，如果沒有則使用 list 作為默認值
        $viewPreference = session('couponViewPreference', 'list');
        
        // 獲取當前日期，用於計算即將到期的優惠券
        $today = now();
        
        // 假設這些數據將來自數據庫
        $activeCoupons = [
            [
                'id' => 1,
                'title' => '新會員首購 85 折',
                'description' => '全館商品適用',
                'expiry_date' => '2023/12/31',
                'status' => 'active'
            ],
            [
                'id' => 2,
                'title' => '生日禮金 $100',
                'description' => '消費滿 $1,000 可使用',
                'expiry_date' => $today->copy()->addDays(3)->format('Y/m/d'),
                'status' => 'active'
            ],
            [
                'id' => 3,
                'title' => '周年慶滿 $3,000 折 $300',
                'description' => '特定商品適用',
                'expiry_date' => '2023/09/15',
                'status' => 'active'
            ],
            // 新增的優惠券 - 即將到期 (2天後)
            [
                'id' => 6,
                'title' => '夏季限定 9 折',
                'description' => '夏季新品適用',
                'expiry_date' => $today->copy()->addDays(2)->format('Y/m/d'),
                'status' => 'active'
            ],
            // 新增的優惠券 - 即將到期 (7天後，剛好是閾值)
            [
                'id' => 7,
                'title' => '會員專屬折扣 $50',
                'description' => '消費滿 $500 可使用',
                'expiry_date' => $today->copy()->addDays(7)->format('Y/m/d'),
                'status' => 'active'
            ],
            // 新增的優惠券 - 不是即將到期 (8天後)
            [
                'id' => 8,
                'title' => '秋季新品 95 折',
                'description' => '秋季新品適用',
                'expiry_date' => $today->copy()->addDays(8)->format('Y/m/d'),
                'status' => 'active'
            ]
        ];
        
        $usedCoupons = [
            [
                'id' => 4,
                'title' => '情人節特惠 9 折',
                'description' => '指定商品適用',
                'expiry_date' => '2023/02/14',
                'used_date' => '2023/02/10',
                'status' => 'used'
            ]
        ];
        
        $expiredCoupons = [
            [
                'id' => 5,
                'title' => '夏季特賣 85 折',
                'description' => '夏季商品適用',
                'expiry_date' => '2023/06/30',
                'status' => 'expired'
            ]
        ];
        
        // 計算每個優惠券是否即將到期
        $expiringThreshold = 7; // 7天內視為即將到期
        
        foreach ($activeCoupons as &$coupon) {
            $expiryDate = \Carbon\Carbon::createFromFormat('Y/m/d', $coupon['expiry_date']);
            $daysLeft = $today->diffInDays($expiryDate, false);
            
            if ($daysLeft >= 0 && $daysLeft <= $expiringThreshold) {
                $coupon['is_expiring'] = true;
                $coupon['days_left'] = (int)$daysLeft; // 轉換為整數，去除小數點
            } else {
                $coupon['is_expiring'] = false;
            }
        }
        
        return view('user.coupons', compact('activeCoupons', 'usedCoupons', 'expiredCoupons', 'viewPreference'));
    }
    
    /**
     * 兌換優惠碼
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function redeem(Request $request)
    {
        $request->validate([
            'coupon_code' => 'required|string|max:50'
        ]);
        
        $couponCode = $request->input('coupon_code');
        
        // 這裡將來會有實際的兌換邏輯
        // 例如檢查優惠碼是否有效，是否已被使用等
        
        // 假設兌換成功
        return redirect()->route('user.coupons')
            ->with('success', "優惠碼 {$couponCode} 兌換成功！");
            
        // 如果兌換失敗
        // return redirect()->route('user.coupons')
        //     ->with('error', '無效的優惠碼或該優惠碼已被使用');
    }
    
    /**
     * 顯示優惠券詳情
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        // 這裡將來會從數據庫獲取優惠券詳情
        // 假設找到了優惠券
        $coupon = [
            'id' => $id,
            'title' => '新會員首購 85 折',
            'description' => '全館商品適用',
            'expiry_date' => '2023/12/31',
            'terms' => '每個帳號限用一次，不可與其他優惠同時使用',
            'code' => 'NEWUSER85',
            'status' => 'active'
        ];
        
        return view('user.coupon_detail', compact('coupon'));
    }

    /**
     * 切換優惠券顯示視圖
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function switchView(Request $request)
    {
        $viewType = $request->input('view_type', 'list');
        
        // 使用 session 來存儲視圖偏好
        session(['couponViewPreference' => $viewType]);
        
        // 檢查是否為 AJAX 請求
        if ($request->ajax()) {
            return response()->json(['success' => true]);
        }
        
        // 非 AJAX 請求時重定向
        return redirect()->route('user.coupons');
    }
} 