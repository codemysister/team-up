<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function kick()
    {

        if (request('id')) {
            $member = Member::where('user_id', '=', request('id'))->first();
            $member->delete();
            return response()->json(['status' => 'success']);
        }
    }
}
