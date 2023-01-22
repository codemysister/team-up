<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function update(Request $request)
    {
        Notification::where('user_id', '=', $request->user()->id)
            ->update([
                'is_read' => true
            ]);

        return response()->json(['status' => 'success']);
    }
}
