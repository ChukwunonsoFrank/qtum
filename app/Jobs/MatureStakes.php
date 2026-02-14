<?php

namespace App\Jobs;

use App\Models\Stake;
use App\Models\UserAssets;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;

class MatureStakes implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Stake::where('has_matured', false)
            ->where('matures_on', '<=', now())
            ->chunkById(100, function ($stakes) {
                DB::transaction(function () use ($stakes) {
                    foreach ($stakes as $stake) {
                        $stake->update(['has_matured' => true]);

                        $userAsset = UserAssets::where('user_id', $stake->user_id)
                            ->where('asset_id', $stake->asset_id)
                            ->first();

                        if ($userAsset) {
                            $userAsset->increment('amount', $stake->amount + $stake->profit);
                        }
                    }
                });
            });
    }
}
