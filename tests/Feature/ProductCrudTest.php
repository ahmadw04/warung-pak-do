<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductCrudTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_create_update_and_delete_product(): void
    {
        $this->post(route('products.store'), [
            'name' => 'Beras Pak Do',
            'category' => 'Sembako',
            'price' => 15000,
            'stock' => 20,
            'unit' => 'kg',
            'description' => 'Beras untuk kebutuhan harian.',
            'is_active' => '1',
        ])->assertRedirect(route('products.index'));

        $product = Product::firstOrFail();

        $this->assertSame('Beras Pak Do', $product->name);

        $this->put(route('products.update', $product), [
            'name' => 'Beras Premium Pak Do',
            'category' => 'Sembako',
            'price' => 17000,
            'stock' => 15,
            'unit' => 'kg',
            'description' => 'Beras premium.',
        ])->assertRedirect(route('products.index'));

        $this->assertDatabaseHas('products', [
            'id' => $product->id,
            'name' => 'Beras Premium Pak Do',
            'is_active' => false,
        ]);

        $this->delete(route('products.destroy', $product))
            ->assertRedirect(route('products.index'));

        $this->assertDatabaseMissing('products', [
            'id' => $product->id,
        ]);
    }
}
