<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employee_id')->unsigned();
            $table->integer('operator_id')->unsigned()->nullable();
            $table->integer('it_id')->unsigned()->nullable();
            $table->integer('problem_id')->unsigned();
            $table->integer('status_id')->unsigned();
            $table->integer('bureau_id')->unsigned();
            $table->text('description');
            $table->text('location');
            $table->text('temp')->nullable();
            $table->timestamp('closed_at')->nullable();
            $table->timestamps();

            $table->foreign('employee_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');

            $table->foreign('operator_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');

            $table->foreign('it_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');

            $table->foreign('problem_id')
                  ->references('id')
                  ->on('problems')
                  ->onDelete('cascade');

            $table->foreign('status_id')
                  ->references('id')
                  ->on('statuses')
                  ->onDelete('cascade');

            $table->foreign('bureau_id')
                  ->references('id')
                  ->on('bureaus')
                  ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tickets');
    }
}
