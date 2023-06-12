<?php

namespace App\Http\Controllers;

use App\Models\Reward;
use App\Http\Requests\StoreRewardRequest;
use App\Http\Requests\UpdateRewardRequest;
use App\Models\Properties;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use function PHPSTORM_META\map;

class RewardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rewardPoints = 0;
        $user = Auth::user();
        $user = User::find($user->id);
        $rewards = $user->rewards;
        foreach ($rewards as $reward) {
            $property = Properties::find($reward->propertie_id);
            $reward->propertie = $property;
        }
        $rewardPoints = $rewards->sum('points');
        if ($rewardPoints == 0) {
            $rewards = null;
        }

        return view('rewards-points', compact('rewardPoints', 'rewards'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRewardRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Reward $reward)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reward $reward)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRewardRequest $request, Reward $reward)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reward $reward)
    {
        //
    }
}
