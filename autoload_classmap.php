<?php
return array(
    'BoilerAppAccessControl\Module'                                                 => __DIR__ . '/Module.php',
    'BoilerAppAccessControl\Authentication\AccessControlAuthenticationService'      => __DIR__ . '/src/BoilerAppAccessControl/Authentication/AccessControlAuthenticationService.php',
    'BoilerAppAccessControl\Authentication\Adapter\AuthenticationAdapterInterface'  => __DIR__ . '/src/BoilerAppAccessControl/Authentication/Adapter/AuthenticationAdapterInterface.php',
    'BoilerAppAccessControl\Authentication\Adapter\AuthenticationDoctrineAdapter'   => __DIR__ . '/src/BoilerAppAccessControl/Authentication/Adapter/AuthenticationDoctrineAdapter.php',
    'BoilerAppAccessControl\Authentication\Adapter\AuthenticationHybridAuthAdapter' => __DIR__ . '/src/BoilerAppAccessControl/Authentication/Adapter/AuthenticationHybridAuthAdapter.php',
    'BoilerAppAccessControl\Controller\AuthenticationController'                    => __DIR__ . '/src/BoilerAppAccessControl/Controller/AuthenticationController.php',
    'BoilerAppAccessControl\Controller\RegistrationController'                      => __DIR__ . '/src/BoilerAppAccessControl/Controller/RegistrationController.php',
    'BoilerAppAccessControl\Doctrine\DBAL\Types\AuthAccessStateEnumType'            => __DIR__ . '/src/BoilerAppAccessControl/Doctrine/DBAL/Types/AuthAccessStateEnumType.php',
    'BoilerAppAccessControl\Entity\AuthAccessEntity'                                => __DIR__ . '/src/BoilerAppAccessControl/Entity/AuthAccessEntity.php',
    'BoilerAppAccessControl\Entity\AuthProviderEntity'                              => __DIR__ . '/src/BoilerAppAccessControl/Entity/AuthProviderEntity.php',
    'BoilerAppAccessControl\Factory\AccessControlAuthenticationServiceFactory'      => __DIR__ . '/src/BoilerAppAccessControl/Factory/AccessControlAuthenticationServiceFactory.php',
    'BoilerAppAccessControl\Factory\AuthenticationDoctrineAdapterFactory'           => __DIR__ . '/src/BoilerAppAccessControl/Factory/AuthenticationDoctrineAdapterFactory.php',
    'BoilerAppAccessControl\Factory\AuthenticationHybridAuthAdapterFactory'         => __DIR__ . '/src/BoilerAppAccessControl/Factory/AuthenticationHybridAuthAdapterFactory.php',
    'BoilerAppAccessControl\Factory\AuthenticationStorageFactory'                   => __DIR__ . '/src/BoilerAppAccessControl/Factory/AuthenticationStorageFactory.php',
    'BoilerAppAccessControl\Factory\AuthenticateFormFactory'                        => __DIR__ . '/src/BoilerAppAccessControl/Factory/AuthenticateFormFactory.php',
    'BoilerAppAccessControl\Factory\RegisterFormFactory'                            => __DIR__ . '/src/BoilerAppAccessControl/Factory/RegisterFormFactory.php',
    'BoilerAppAccessControl\Factory\ResetCredentialFormFactory'                     => __DIR__ . '/src/BoilerAppAccessControl/Factory/ResetCredentialFormFactory.php',
    'BoilerAppAccessControl\Factory\SessionManagerFactory'      					=> __DIR__ . '/src/BoilerAppAccessControl/Factory/SessionManagerFactory.php',
    'BoilerAppAccessControl\Form\AuthenticateForm'                                  => __DIR__ . '/src/BoilerAppAccessControl/Form/AuthenticateForm.php',
    'BoilerAppAccessControl\Form\RegisterForm'                                      => __DIR__ . '/src/BoilerAppAccessControl/Form/RegisterForm.php',
    'BoilerAppAccessControl\Form\ResetCredentialForm'                               => __DIR__ . '/src/BoilerAppAccessControl/Form/ResetCredentialForm.php',
    'BoilerAppAccessControl\InputFilter\AuthenticateInputFilter'                    => __DIR__ . '/src/BoilerAppAccessControl/InputFilter/AuthenticateInputFilter.php',
    'BoilerAppAccessControl\InputFilter\RegisterInputFilter'                        => __DIR__ . '/src/BoilerAppAccessControl/InputFilter/RegisterInputFilter.php',
    'BoilerAppAccessControl\InputFilter\ResetCredentialInputFilter'                 => __DIR__ . '/src/BoilerAppAccessControl/InputFilter/ResetCredentialInputFilter.php',
    'BoilerAppAccessControl\Repository\AuthAccessRepository'                        => __DIR__ . '/src/BoilerAppAccessControl/Repository/AuthAccessRepository.php',
    'BoilerAppAccessControl\Repository\AuthProviderRepository'                      => __DIR__ . '/src/BoilerAppAccessControl/Repository/AuthProviderRepository.php',
    'BoilerAppAccessControl\Service\AccessControlService'                           => __DIR__ . '/src/BoilerAppAccessControl/Service/AccessControlService.php',
    'BoilerAppAccessControl\Service\AuthenticationService'                          => __DIR__ . '/src/BoilerAppAccessControl/Service/AuthenticationService.php',
    'BoilerAppAccessControl\Service\RegistrationService'                            => __DIR__ . '/src/BoilerAppAccessControl/Service/RegistrationService.php',
    'BoilerAppAccessControl\Validator\IdentityAvailabilityValidator'                => __DIR__ . '/src/BoilerAppAccessControl/Validator/IdentityAvailabilityValidator.php',
    'BoilerAppAccessControl\Validator\NoSpaces'                  				    => __DIR__ . '/src/BoilerAppAccessControl/Validator/NoSpaces.php'
);