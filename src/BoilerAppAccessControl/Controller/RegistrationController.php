<?php
namespace BoilerAppAccessControl\Controller;
class RegistrationController extends \BoilerAppDisplay\Mvc\Controller\AbstractActionController{

	/**
	 * Show register form or process register attempt
	 * @return \Zend\View\Model\ViewModel | \Zend\Http\Response
	 */
	public function registerAction(){
		//If user is already logged in, redirect him
		if($this->getServiceLocator()->get('AccessControlAuthenticationService')->hasIdentity())return $this->redirectUser();

		//Define title
		$this->layout()->title = $this->getServiceLocator()->get('Translator')->translate('register');

		//Assign form
		$this->view->form = $this->getServiceLocator()->get('RegisterForm');
		if(
			$this->getRequest()->isPost()
			&& $this->view->form->setData($this->params()->fromPost())->isValid()
			&& ($aData = $this->view->form->getData())
			&& $this->getServiceLocator()->get('RegistrationService')->register($aData)
		)$this->view->isValid = true;
		return $this->view;
	}

	/**
	 * Process ajax request to check email identity availability
	 * @throws \LogicException
	 * @return \Zend\View\Model\JsonModel
	 */
	public function checkEmailIdentityAvailabilityAction(){
		if(!$this->getRequest()->isXmlHttpRequest())throw new \LogicException('Only ajax requests are allowed for this action');
		if(!($sEmail = $this->params()->fromPost('email_identity')))throw new \LogicException('"email_identity" param is missing');
		return $this->view->setVariable(
			'available',
			$this->getServiceLocator()->get('AccessControlService')->isEmailIdentityAvailable($sEmail)
		);
	}

	/**
	 * Process ajax request to check username identity availability
	 * @throws \LogicException
	 * @return \Zend\View\Model\JsonModel
	 */
	public function checkUsernameIdentityAvailabilityAction(){
		if(!$this->getRequest()->isXmlHttpRequest())throw new \LogicException('Only ajax requests are allowed for this action');
		if(!($sUserName = $this->params()->fromPost('username_identity')))throw new \LogicException('"username_identity" param is missing');

		return $this->view->setVariable(
			'available',
			$this->getServiceLocator()->get('AccessControlService')->isUsernameIdentityAvailable($sUserName)
		);
	}

	/**
	 * Process email confirmation
	 * @throws \LogicException
	 * @return \Zend\View\Model\ViewModel
	 */
	public function confirmEmailAction(){
		if(!($sPublicKey = $this->params('public_key')))throw new \LogicException('"public_key" param is missing');
		if(!($sEmailIdentity = $this->params('email_identity')))throw new \LogicException('"email_identity" param is missing');

		if(($bReturn = $this->getServiceLocator()->get('RegistrationService')->confirmEmail($sPublicKey,$sEmailIdentity)) !== true)$this->view->error = $bReturn;
		return $this->view;
	}

	/**
	 * Process ajax request to resend email confirmation
	 * @throws \LogicException
	 * @return \Zend\View\Model\JsonModel
	 */
	public function resendConfirmationEmailAction(){
		if(!$this->getRequest()->isXmlHttpRequest())throw new \LogicException('Only ajax requests are allowed for this action');
		if(!($sAuthAccessIdentity = $this->params()->fromPost('auth_access_identity')))throw new \LogicException('auth_access_identity param is missing');
		$this->getServiceLocator()->get('RegistrationService')->resendConfirmationEmail($sAuthAccessIdentity);
		return $this->view;
	}
}