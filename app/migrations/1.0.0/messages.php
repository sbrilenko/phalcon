<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class MessagesMigration_100
 */
class MessagesMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('messages', [
                'columns' => [
                    new Column(
                        'name',
                        [
                            'type' => Column::TYPE_TEXT,
                            'size' => 1,
                            'first' => true
                        ]
                    ),
                    new Column(
                        'phone',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 1,
                            'after' => 'name'
                        ]
                    ),
                    new Column(
                        'mail',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 1,
                            'after' => 'phone'
                        ]
                    ),
                    new Column(
                        'message',
                        [
                            'type' => Column::TYPE_TEXT,
                            'size' => 1,
                            'after' => 'mail'
                        ]
                    ),
                    new Column(
                        'time_create',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 1,
                            'after' => 'message'
                        ]
                    )
                ],
            ]
        );
    }

    /**
     * Run the migrations
     *
     * @return void
     */
    public function up()
    {

    }

    /**
     * Reverse the migrations
     *
     * @return void
     */
    public function down()
    {

    }

}
