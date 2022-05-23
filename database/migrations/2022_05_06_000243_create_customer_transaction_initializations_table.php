<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Customer;

class CreateCustomerTransactionInitializationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_transaction_initializations', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->string('status', 20)->default('pending');
            $table->string('reference', 50)->unique();
            $table->string('access_code', 50)->nullable();
            $table->foreignIdFor(Customer::class)->nullable();
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
        Schema::dropIfExists('customer_transaction_initializations');
    }
}
