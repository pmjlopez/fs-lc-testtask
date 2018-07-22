<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mail_chimp_list_members', function (Blueprint $table) {
            $table->string('local_id');
            $table->string('id');
            $table->string('email_address');
            $table->string('unique_email_id');
            $table->string('email_type');
            $table->string('status');
            $table->string('merge_fields');
            $table->string('stats');
            $table->string('ip_signup');
            $table->string('timestamp_signup');
            $table->string('ip_opt');
            $table->string('timestamp_opt');
            $table->string('member_rating');
            $table->string('last_changed');
            $table->string('language');
            $table->boolean('vip');
            $table->string('email_client');
            $table->string('location');
            $table->string('list_id');
            $table->string('_links');
            $table->string('interests');
            // $table->string('mail_chimp_id');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mail_chimp_list_members');
    }
}
