<?php
namespace Larawise\Tests\Feature;

use Larawise\Larawise;
use Tests\TestCase;

class ProfileTest extends TestCase
{
    public function test_if_all_user_profiles_can_be_fetched()
    {
        $profiles = Larawise::profile()->all();
        $this->assertCount(2, $profiles);
    }

    public function test_if_particular_user_profile_can_be_fetched()
    {
        $profileId = 16539971;
        $profile = Larawise::profile()->get($profileId);

        $this->assertEquals($profileId, $profile['id']);
    }
}
