<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Channel;
//use App\Http\Request;

class ChannelSettingsController extends Controller
{
    public function edit(Channel $channel)
    {
		return view('channel.settings.edit', [
			'channel' => $channel
    ]);
    }

    public function update(Channel $channel)
    {
    	//
    }


}
