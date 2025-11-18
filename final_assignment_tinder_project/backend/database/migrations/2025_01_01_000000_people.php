
<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(){
        Schema::create('people', function(Blueprint $t){
            $t->id();
            $t->string('name');
            $t->integer('age');
            $t->string('location')->nullable();
            $t->json('pictures')->nullable();
            $t->timestamps();
        });
    }
    public function down(){ Schema::dropIfExists('people'); }
};
