<?php

use App\Models\Employer;
use App\Models\Job;


it('belongs to an employer', function () {

    //ARRANGE
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id,
    ]);

    //ACT and Assert

    expect($job->employer->is($employer))->toBeTrue();
});

it('have tags', function () {
    $job = Job::factory()->create();
    $job->tag('Frontend');

    expect($job->tags)->toHaveCount(1);
});
