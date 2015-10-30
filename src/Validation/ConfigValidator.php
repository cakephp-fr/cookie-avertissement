<?php
/**
 * ConfigValidator
 *
 * @author   cake17
 * @license  http://www.opensource.org/licenses/mit-license.php The MIT License
 * @link     http://blog.cake-websites.com/
 */
namespace CookieAvertissement\Validation;

use Cake\Validation\Validator;

/**
 * Class used to validate config data
 */
class ConfigValidator extends Validator
{

    /**
     * ConfigValidator constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->add('expire', [
            'numeric' => [
                'rule' => ['numeric'],
                'message' => __d('CookieAvertissement', 'Valeur non reconnue'),
            ]
        ]);
    }
}