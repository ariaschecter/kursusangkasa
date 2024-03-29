<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class LeaderboardController extends Controller
{
    public function product() {
        $chart_options = [
            'chart_title' => 'Best Product',
            'report_type' => 'group_by_string',
            'model' => 'App\Models\Course',
            'group_by_field' => 'course_name',
            'aggregate_function' => 'sum',
            'aggregate_field' => 'course_enroll',
            'chart_type' => 'bar',
            'chart_color' => '0,0,0',
            'top_results' => 10,
        ];

        $chart1 = new LaravelChart($chart_options);
        $title = 'Leaderboard Product';
        return view('admin.leaderboard.product', compact('chart1', 'title'));
    }

    public function affiliate(Request $request) {
        $chart_options = [
            'chart_title' => 'Best Affiliate',
            'report_type' => 'group_by_relationship',
            'model' => 'App\Models\User',
            'group_by_field' => 'name',
            'relationship_name' => 'affiliate',
            'aggregate_function' => 'count',
            'aggregate_field' => 'affiliate_id',
            'chart_type' => 'bar',
            'filter_field' => 'created_at',
            'chart_color' => '0,0,0',
            'top_results' => 10,
        ];

        if ($request->day) {
            $chart_options['filter_days'] = $request->day;
        }
        $chart1 = new LaravelChart($chart_options);
        $title = 'Leaderboard Affiliate';
        return view('admin.leaderboard.affiliate', compact('chart1', 'title'));
    }

    public function course(Request $request) {
        $chart_options = [
            'chart_title' => 'Best Course Rating',
            'report_type' => 'group_by_relationship',
            'model' => 'App\Models\Review',
            'group_by_field' => 'course_name',
            'relationship_name' => 'course',
            'aggregate_function' => 'avg',
            'aggregate_field' => 'review_star',
            'chart_type' => 'bar',
            'filter_field' => 'created_at',
            'chart_color' => '0,0,0',
            'top_results' => 10,
        ];

        if ($request->day) {
            $chart_options['filter_days'] = $request->day;
        }
        $chart1 = new LaravelChart($chart_options);
        $title = 'Leaderboard Course Rating';
        return view('admin.leaderboard.course', compact('chart1', 'title'));
    }

    public function teacher(Request $request) {
        $chart_options = [
            'chart_title' => 'Best Teacher Rating',
            'report_type' => 'group_by_relationship',
            'model' => 'App\Models\Review',
            'group_by_field' => 'name',
            'relationship_name' => 'teacher',
            'aggregate_function' => 'avg',
            'aggregate_field' => 'review_star',
            'chart_type' => 'bar',
            'filter_field' => 'created_at',
            'chart_color' => '0,0,0',
            'top_results' => 10,
        ];

        if ($request->day) {
            $chart_options['filter_days'] = $request->day;
        }
        $chart1 = new LaravelChart($chart_options);
        $title = 'Leaderboard Teacher';
        return view('admin.leaderboard.teacher', compact('chart1', 'title'));
    }
}
