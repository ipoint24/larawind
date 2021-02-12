<?php

namespace Tests\Feature\Http\Livewire;

use App\Http\Livewire\Companies;
use App\Models\Company;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class CompanyTest extends TestCase
{
    /*
     * Guest / RegUser
     * Route
     * Validation
     */
    public function test_company_name_is_required()
    {
        $this->actingAs($user = User::factory()->create());
        Livewire::test(Companies::class)
            ->set('title', '')
            ->call('store')
            ->assertHasErrors(['title' => 'required']);
    }

    public function test_company_name_is_unique()
    {
        $this->actingAs($user = User::factory()->create());
        $company = Company::factory()->create();
        Livewire::test(Companies::class)
            ->set('title', $company->title)
            ->call('store')
            ->assertHasErrors(['title' => 'unique']);
    }

    public function test_company_description_is_required()
    {
        $this->actingAs($user = User::factory()->create());
        Livewire::test(Companies::class)
            ->set('description', '')
            ->call('store')
            ->assertHasErrors(['description' => 'required']);
    }

    public function test_company_description_has_min_chars()
    {
        $this->actingAs($user = User::factory()->create());
        Livewire::test(Companies::class)
            ->set('description', '1')
            ->call('store')
            ->assertHasErrors(['description' => 'min']);
    }

    public function test_company_description_has_max_chars()
    {
        $this->actingAs($user = User::factory()->create());
        Livewire::test(Companies::class)
            ->set('description', str_repeat("1", 201))
            ->call('store')
            ->assertHasErrors(['description' => 'max']);
    }
}
