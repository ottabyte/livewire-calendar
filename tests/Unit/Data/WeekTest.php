<?php

declare(strict_types=1);

namespace Tests\Unit\Data;

use Carbon\Carbon;
use Illuminate\Support\Collection;
use PreemStudio\LivewireCalendar\Data\Day;
use PreemStudio\LivewireCalendar\Data\Week;

it('can be initialized with properties', function (): void {
    $day = new Day(Carbon::today(), true, true);
    $days = new Collection([$day]);
    $week = new Week($days);

    expect($week->days)->toBe($days);
});