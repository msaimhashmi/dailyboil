<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Statistics;
use Carbon\Carbon;
class DashboardController extends Controller
{
    public function index()
    {
    	// Last 30 Day
    	$mymonth = Carbon::now()->subDays(30);
		$month= $mymonth->toDateTimeString();

		// last 7 Day
		$myweek = Carbon::now()->subDays(6);
		$week= $myweek->toDateTimeString();

		// Today
		$myday = Carbon::now();
		$td= $myday->toDateTimeString();

		$startDate = date('Y-m-d',strtotime("-6 days"));
		$endDate = date("Y-m-d");

		$today = 'Today';
        $tddownloads = Statistics::whereDate('created_at', '>=', $td)->sum('downloads');
        $tdpageViews = Statistics::whereDate('created_at', '>=', $td)->sum('pageViews');
        $tduniqueViews = Statistics::whereDate('created_at', '>=', $td)->sum('uniqueViews');

		$weekTime = 'Last 7 Days';
        $wdownloads = Statistics::whereDate('created_at', '>=', $week)->sum('downloads');
        $wpageViews = Statistics::whereDate('created_at', '>=', $week)->sum('pageViews');
        $wuniqueViews = Statistics::whereDate('created_at', '>=', $week)->sum('uniqueViews');

		$monthTime = 'Last 30 Days';
        $mdownloads = Statistics::whereDate('created_at', '>=', $month)->sum('downloads');
        $mpageViews = Statistics::whereDate('created_at', '>=', $month)->sum('pageViews');
        $muniqueViews = Statistics::whereDate('created_at', '>=', $month)->sum('uniqueViews');

		$totalTime= 'All Time';
        $alldownloads = Statistics::get()->sum('downloads');
        $allpageViews = Statistics::get()->sum('pageViews');
        $alluniqueViews = Statistics::get()->sum('uniqueViews');
        return view('admin.dashboard')
            ->with('alldownloads',$alldownloads)
            ->with('allpageViews',$allpageViews)
            ->with('alluniqueViews',$alluniqueViews)
            ->with('tddownloads',$tddownloads)
            ->with('tdpageViews',$tdpageViews)
            ->with('tduniqueViews',$tduniqueViews)
            ->with('wdownloads',$wdownloads)
            ->with('wpageViews',$wpageViews)
            ->with('wuniqueViews',$wuniqueViews)
            ->with('mdownloads',$mdownloads)
            ->with('mpageViews',$mpageViews)
            ->with('muniqueViews',$muniqueViews)
            ->with('today',$today)
            ->with('weekTime',$weekTime)
            ->with('monthTime',$monthTime)
            ->with('totalTime',$totalTime);    	
    }
}
