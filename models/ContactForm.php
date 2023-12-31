<?php
/** User: Gafour Tech **/

namespace app\models;

use gaf\phpmvc\Model;

/**

    * Class gaflication
    *
    * @author Gafour Panolong <gafopanolong.gafour@s.msumain.edu.ph>
    * @package app\models
    
**/
class ContactForm extends Model
{   
    public string $subject = '';
    public string $email = '';
    public string $body = '';

    public function rules(): array
    {
        return [
            'subject' => [self::RULE_REQUIRED],
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL],
            'body' => [self::RULE_REQUIRED],
        ];
    }

    public function labels(): array
    {
        return [
            'subject' => 'Subject',
            'email' => 'Email',
            'body' => 'Message',
        ];
    }

    public function send()
    {
        return true;
    }
}