<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamps();
            $table->rememberToken();
            $table->string('phone_number')->nullable();
            $table->string('company_name');
            $table->string('company_address');
            $table->string('incorporation_number')->nullable();
            $table->string('tax_number')->nullable();
            $table->string('company_size')->nullable();
            $table->string('banner_img_url')->nullable();
            $table->string('logo_url')->nullable();
            $table->string('avatar_url')->nullable();
            $table->text('presentation')->nullable();
            $table->boolean('optin')->nullable();
            $table->boolean('confirmed')->nullable();
            $table->char('language', 2)->nullable();
            $table->string('currency')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suppliers');
    }
}
