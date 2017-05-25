<?php

class Messages extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $name;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $phone;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $mail;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $message;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $time_create;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("public");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'messages';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Messages[]|Messages
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Messages
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
