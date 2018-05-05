<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('amount');
            $table->integer('interest')->nullable;
            $table->date('payment_date');
            $table->integer('installment_qty');
            $table->integer('installment');
            $table->integer('total_amount');
            $table->tinyInteger('loan_type'); //1 | payment 2|receipt 3 | charge
            $table->tinyInteger('payment_type');
            $table->integer('payment');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('expense_category_id')->unsigned();
            $table->foreign('expense_category_id')->references('id')->on('expense_categories');
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
        Schema::dropIfExists('loans');
    }
}
