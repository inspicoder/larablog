<?php

namespace Tests\Unit;

use App\Post;
use Carbon\Carbon;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase; //using this on our test class will not persist the changes into our database and we roll back

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    use RefreshDatabase; 

    public function testBasicTest()
    {
    //setting the test environment/premise
    	$first = factory(Post::class)->create();
    	$second = factory(Post::class)->create([
    		'created_at' => Carbon::now()->subMonth()
    	]);

    //on certain test case
    	$post = Post::archives();

    //result of the above test whether it passes or fails
        $this->assertCount(2,$post);
    }
}
