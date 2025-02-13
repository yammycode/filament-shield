<?php

namespace BezhanSalleh\FilamentShield\Commands;

use BezhanSalleh\FilamentShield\FilamentShield;
use Illuminate\Console\Command;

class MakeCreateShieldCommand extends Command
{
    use Concerns\CanGeneratePolicy;
    use Concerns\CanManipulateFiles;
    use Concerns\CanValidateInput;

    public $signature = 'shield:create {name?}';

    public $description = 'Create Permissions and/or Policy for the given Filament Resource Model';

    public function handle(): int
    {
        $model = $this->generateModelName($this->argument('name') ?? $this->askRequired('Model (e.g. `Post or PostResource`)', 'name'));

        $choice = $this->choice('What would you like to Generate for the Resource?', [
            "Permissions & Policy",
            "Only Permissions",
            "Only Policy",
        ], 0, null, false);

        if ($choice === "Permissions & Policy") {
            if ($this->checkForCollision([$this->generatePolicyPath($model)])) {
                return static::INVALID;
            }

            $this->copyStubToApp('DefaultPolicy', $this->generatePolicyPath($model), $this->generatePolicyStubVariables($model));

            $this->info("Successfully generated {$model}Policy for {$model}Resource");

            FilamentShield::generateForResource($model);

            $this->info("Successfully generated Permissions for {$model}Resource");
        }

        if ($choice === "Only Permissions") {
            FilamentShield::generateForResource($model);

            $this->info("Successfully generated Permissions for {$model}Resource");
        }

        if ($choice === "Only Policy") {
            if ($this->checkForCollision([$this->generatePolicyPath($model)])) {
                return static::INVALID;
            }

            $this->copyStubToApp('DefaultPolicy', $this->generatePolicyPath($model), $this->generatePolicyStubVariables($model));

            $this->info("Successfully generated {$model}Policy for {$model}Resource");
        }

        return self::SUCCESS;
    }
}
