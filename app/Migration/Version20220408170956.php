<?php
namespace App\Migration;


use Laventure\Component\Database\Migration\Migration;
use Laventure\Foundation\Facade\Database\Schema;
use Laventure\Component\Database\Schema\BluePrint\BluePrint;


/**
 * @Version20220408170956
 *
 * @package App\Migration
 *
 * <Generated By Laventure 08/04/2022 17:09:56>
*/
class Version20220408170956 extends Migration
{


    /**
      * @return void
    */
    public function up()
    {
        /*
        Schema::create('tableName', function (BluePrint $table) {
            $table->increments('id');
            // ...
        });
        */
    }


    /**
     * @return void
    */
    public function down()
    {
        // Schema::dropIfExists('tableName');
    }
}
