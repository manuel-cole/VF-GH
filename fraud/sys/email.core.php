<?php

/**
 * @desc Mailer
 */
class Email
{
    /**
     * @description Constructor function
     */
    public final function __construct()
    {
        /**
         * @desc Name of this Mailer software
         * @var string $appName
         * @access public
         */
        $this->appName = 'EdzibanMailer';


        /**
         * @desc Current version of this software
         * @var string $appVersion
         * @access public
         */
        $this->appVersion = '1.1';

        /**
         * @desc Default SMTP server
         * @var string $SMTP
         * @access public
         */
        $this->SMTP = '';

        /**
         * @desc Default sendmail_from address
         * @var string $sendFrom
         * @access public
         */
        $this->sendFrom = '';

        /**
         * @desc Default From email address
         * @var string $From
         * @access public
         */
        $this->From = '';

        /**
         * @desc Default To email addresses
         * @var null $To
         * @access public
         */
        $this->To = null;

        /**
         * @desc Default Carbon Copy email addresses
         * @var null $Cc
         * @access public
         */
        $this->Cc = null;

        /**
         * @desc Default Blind Carbon Copy email addresses
         * @var null $Bcc
         * @access public
         */
        $this->Bcc = null;

        /**
         * @desc Default Subject
         * @var string $Subject
         * @access public
         */
        $this->Subject = '';

        /**
         * @desc Default Headers
         * @var string $Headers
         * @access public
         */
        $this->Headers = '';

        /**
         * @desc Default Body
         * @var string $Headers
         * @access public
         */
        $this->Body = '';

        /**
         * @desc Default Content Type
         * @var string $ContentType
         * @access public
         */
        $this->ContentType = 'text/plain';
    }

    /**
     * @description Destructor function
     */
    public final function __destruct()
    {
    }

    /**
     * @desc Add a receipient
     * @param string $sEmail email address of receipient
     */
    public final function AddTo($sEmail)
    {
        $this->To[] = $sEmail;
    }

    /**
     * @desc Add CC receipient
     * @param string $sEmail email address of receipient
     */
    public final function AddCc($sEmail)
    {
        $this->Cc[] = $sEmail;
    }

    /**
     * @desc Add BCC receipient
     * @param string $sEmail email address of receipient
     */
    public final function AddBcc($sEmail)
    {
        $this->Bcc[] = $sEmail;
    }

    /**
     * @desc Set mailer parameters
     * @param array $aParams
     */
    public final function Config($aParams)
    {
        foreach ($aParams as $sKey => $sValue) {
            // Transfer each key, value pairs onto this class
            $this->$sKey = $sValue;
        }
    }

    /**
     * @desc Send mail
     * @return bool true on success, false on failure
     */
    public final function Send()
    {

        if ($this->Prepare()) {
            if (@mail($this->To, $this->Subject, $this->Body, $this->Headers)) {
                return true;
            }
            return false;
        }
    }

    /**
     * @desc Prepare mail for sending
     * @access Private
     * @return void
     */
    private final function Prepare()
    {
        // Configure PHP to use the specified SMTP server
        if ($this->SMTP) ini_set('SMTP', $this->SMTP);

        // This block works when the $sendFrom property is not empty
        if ($this->sendFrom) {
            // Configure PHP to send mail from a specified address
            ini_set('sendmail_from', $this->sendFrom);

            // Use the $sendFrom address as the sender's email
            // in case a sender's email is not provided
            if (!$this->From) {
                $this->From = $this->appName . " " . $this->appVersion;
            }
        }

        // At least one receipient is required
        if (!$this->To) {
            //trigger_error('No receipient provided');
            return false;
        }

        // Join all To, Cc and Bcc receipients
        if ($this->To) $this->To = implode(',', $this->To) . "\r\n";
        if ($this->Cc) $this->Cc = implode(',', $this->Cc) . "\r\n";
        if ($this->Bcc) $this->Bcc = implode(',', $this->Bcc) . "\r\n";

        // Build mail header
        $this->Headers .= "X-Mailer:" . $this->appName . " " . $this->appVersion . "\r\n";
        $this->Headers .= "Content-Type:" . $this->ContentType . "\r\n";
        $this->Headers .= "From:" . $this->From . "\r\n";
        if ($this->Cc) $this->Headers .= "Cc:" . $this->Cc;
        if ($this->Bcc) $this->Headers .= "Bcc:" . $this->Bcc;

        return true;
    }
}

?>