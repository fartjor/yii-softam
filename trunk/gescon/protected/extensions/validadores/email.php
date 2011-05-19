<?php
/**
 * CPFValidator class file.
 *
 * @author Thiago F Macedo (#Panurge) <thiago@internetbudi.com.br>
 * @link http://twitter.com/thiagofmacedo/
 * @copyright Copyright &copy; 2008-2011 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

/**
 * CPFValidator valida um CPF brasileiro conforme algoritimo de geração.
 * @author Thiago F Macedo <thiago@internetbudi.com.br>
 * @version 0.1
 */
class email extends CValidator
{
	/**
	 * Validates the attribute of the object.
	 * If there is any error, the error message is added to the object.
	 * @param CModel the data object being validated
	 * @param string the name of the attribute to be validated.
	 */
	protected function validateAttribute( $object, $attribute ){
		if ( !$this->validaEmail( $object->$attribute ) )
            $this->addError($object, $attribute, Yii::t('yii','{attribute} não é um E-mail válido.'));
	}
    
    public function clientValidateAttribute($object,$attribute) {
    
    }

    
    /*
     * @autor: Moacir Selínger Fernandes
     * @email: hassed@hassed.com
     * Qualquer dúvida é só mandar um email
     * http://codigofonte.uol.com.br/codigo/php/validacao/validacao-de-cpf-com-php
     * 
     * Modificada conforme indicações nos comentários de habner e calex
    */
    

	// Define uma função que poderá ser usada para validar e-mails usando regexp
	function validaEmail($email) {
		$conta = "/^[a-zA-Z0-9\._-]+@";
		$domino = "[a-zA-Z0-9\._-]+.";
		$extensao = "([a-zA-Z]{2,4})$/";

		$pattern = $conta.$domino.$extensao;

		if (preg_match($pattern, $email))
			return true;
		else
			return false;
	}
    
}