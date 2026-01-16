<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $userInstance = config('user-activity-log.user_model') ?? '\App\Models\User';

        Schema::create('logs', function (Blueprint $table) use ($userInstance){
                $table->id();
            $table->foreignIdFor($userInstance);
            $table->dateTime('log_datetime');
            $table->string('table_name')->nullable();
            $table->string('log_type');
            $table->json('request_info');
            $table->json('data')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logs');
    }
}
