<?php

// database/migrations/YYYY_MM_DD_create_post_tag_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_tag', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->foreignId('post_id')->constrained()->onDelete('cascade'); // Foreign key for posts
            $table->foreignId('tag_id')->constrained()->onDelete('cascade');  // Foreign key for tags
            $table->timestamps();  // created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_tag');
    }
}
