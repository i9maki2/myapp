<?php

namespace DoctrineORMModule\Proxy\__CG__\CsnUser\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \CsnUser\Entity\User implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', 'id', 'username', 'firstName', 'lastName', 'password', 'email', 'role', 'language', 'state', 'question', 'answer', 'picture', 'passwordSalt', 'registrationDate', 'registrationToken', 'emailConfirmed', 'friendsWithMe', 'myFriends');
        }

        return array('__isInitialized__', 'id', 'username', 'firstName', 'lastName', 'password', 'email', 'role', 'language', 'state', 'question', 'answer', 'picture', 'passwordSalt', 'registrationDate', 'registrationToken', 'emailConfirmed', 'friendsWithMe', 'myFriends');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (User $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setUsername($username)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsername', array($username));

        return parent::setUsername($username);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', array());

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function setFirstName($firstName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFirstName', array($firstName));

        return parent::setFirstName($firstName);
    }

    /**
     * {@inheritDoc}
     */
    public function getFirstName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFirstName', array());

        return parent::getFirstName();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastName($lastName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastName', array($lastName));

        return parent::setLastName($lastName);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastName', array());

        return parent::getLastName();
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword($password)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', array($password));

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', array());

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', array($email));

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', array());

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setRole($role)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRole', array($role));

        return parent::setRole($role);
    }

    /**
     * {@inheritDoc}
     */
    public function getRole()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRole', array());

        return parent::getRole();
    }

    /**
     * {@inheritDoc}
     */
    public function setLanguage($language)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLanguage', array($language));

        return parent::setLanguage($language);
    }

    /**
     * {@inheritDoc}
     */
    public function getLanguage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLanguage', array());

        return parent::getLanguage();
    }

    /**
     * {@inheritDoc}
     */
    public function setState($state)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setState', array($state));

        return parent::setState($state);
    }

    /**
     * {@inheritDoc}
     */
    public function getState()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getState', array());

        return parent::getState();
    }

    /**
     * {@inheritDoc}
     */
    public function setQuestion($question)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQuestion', array($question));

        return parent::setQuestion($question);
    }

    /**
     * {@inheritDoc}
     */
    public function getQuestion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuestion', array());

        return parent::getQuestion();
    }

    /**
     * {@inheritDoc}
     */
    public function setAnswer($answer)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAnswer', array($answer));

        return parent::setAnswer($answer);
    }

    /**
     * {@inheritDoc}
     */
    public function getAnswer()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAnswer', array());

        return parent::getAnswer();
    }

    /**
     * {@inheritDoc}
     */
    public function setPicture($picture)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPicture', array($picture));

        return parent::setPicture($picture);
    }

    /**
     * {@inheritDoc}
     */
    public function getPicture()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPicture', array());

        return parent::getPicture();
    }

    /**
     * {@inheritDoc}
     */
    public function setPasswordSalt($passwordSalt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPasswordSalt', array($passwordSalt));

        return parent::setPasswordSalt($passwordSalt);
    }

    /**
     * {@inheritDoc}
     */
    public function getPasswordSalt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPasswordSalt', array());

        return parent::getPasswordSalt();
    }

    /**
     * {@inheritDoc}
     */
    public function setRegistrationDate($registrationDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRegistrationDate', array($registrationDate));

        return parent::setRegistrationDate($registrationDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getRegistrationDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRegistrationDate', array());

        return parent::getRegistrationDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setRegistrationToken($registrationToken)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRegistrationToken', array($registrationToken));

        return parent::setRegistrationToken($registrationToken);
    }

    /**
     * {@inheritDoc}
     */
    public function getRegistrationToken()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRegistrationToken', array());

        return parent::getRegistrationToken();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmailConfirmed($emailConfirmed)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmailConfirmed', array($emailConfirmed));

        return parent::setEmailConfirmed($emailConfirmed);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmailConfirmed()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmailConfirmed', array());

        return parent::getEmailConfirmed();
    }

    /**
     * {@inheritDoc}
     */
    public function getMyFriends()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMyFriends', array());

        return parent::getMyFriends();
    }

    /**
     * {@inheritDoc}
     */
    public function addMyFriends(\Doctrine\Common\Collections\Collection $users)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addMyFriends', array($users));

        return parent::addMyFriends($users);
    }

    /**
     * {@inheritDoc}
     */
    public function addMyFriend(\CsnUser\Entity\User $user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addMyFriend', array($user));

        return parent::addMyFriend($user);
    }

    /**
     * {@inheritDoc}
     */
    public function removeMyFriends(\Doctrine\Common\Collections\Collection $users)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeMyFriends', array($users));

        return parent::removeMyFriends($users);
    }

    /**
     * {@inheritDoc}
     */
    public function removeMyFriend(\CsnUser\Entity\User $user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeMyFriend', array($user));

        return parent::removeMyFriend($user);
    }

    /**
     * {@inheritDoc}
     */
    public function addFriendWithMe(\CsnUser\Entity\User $user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addFriendWithMe', array($user));

        return parent::addFriendWithMe($user);
    }

    /**
     * {@inheritDoc}
     */
    public function removeFriendWithMe(\CsnUser\Entity\User $user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeFriendWithMe', array($user));

        return parent::removeFriendWithMe($user);
    }

}
