<?php

namespace Tests\Feature;

use Tests\TestCase;

class SimulationTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testTheTeamsFunctionReturnsASuccessfulResponse()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testTheFixturesFunctionReturnsASuccessfulResponse()
    {
        $response = $this->get('/fixtures');

        $response->assertStatus(200);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testTheStartSimulationFunctionReturnsASuccessfulResponse()
    {
        $response = $this->get('/start_simulation');

        $response->assertStatus(200);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testThePlayNextWeekFunctionReturnsASuccessfulResponse()
    {
        $response = $this->get('/play_next_week');

        $response->assertStatus(200);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testThePlayAllWeeksFunctionReturnsASuccessfulResponse()
    {
        $response = $this->get('/play_all_weeks');

        $response->assertStatus(200);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testTheResetDataFunctionReturnsASuccessfulResponse()
    {
        $response = $this->get('/reset_data');

        $response->assertStatus(302);
    }
}
