<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class JobController extends Controller
{
    public function index(Request $request)
    {
        $notifications = DB::table('notifications')
            ->where('user_id', '=', $request->user()->id)
            ->get();
        $notificationStatus = count(DB::table('notifications')
            ->where('user_id', '=', $request->user()->id)
            ->where('is_read', '=', false)
            ->get());

        $client = new Client();
        if ($request->searchKeyword) {
            $response = $client->get("https://www.freelancer.com/api/projects/0.1/projects/all/?query=$request->searchKeyword");
            $data = json_decode($response->getBody()->getContents(), true);
            $projects = $this->paginate($data['result']['projects']);
        } else {
            $response = $client->get('https://www.freelancer.com/api/projects/0.1/projects/all/');
            $data = json_decode($response->getBody()->getContents(), true);
            $projects = $this->paginate($data['result']['projects']);
        }

        return view('user.job-list', compact('notifications', 'notificationStatus', 'projects'));
    }

    public function paginate($items, $perPage = 5, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }
}
