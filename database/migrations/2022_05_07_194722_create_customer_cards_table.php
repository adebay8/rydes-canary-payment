<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Customer;

class CreateCustomerCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_cards', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->string('authorization_code', 20);
            $table->string('card_type', 20);
            $table->string('last4', 10);
            $table->string('exp_month', 10);
            $table->string('exp_year', 10);
            $table->string('bin', 20);
            $table->string('bank', 255);
            $table->string('channel', 20);
            $table->string('reusable', 20);
            $table->string('country_code', 20);
            $table->foreignIdFor(Customer::class);
            $table->boolean('default')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_cards');
    }
}
