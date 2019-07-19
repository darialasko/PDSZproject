
    <?php
   require '/home/milosz/Desktop/darcia/projektzkodem/vendor/autoload.php';
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;;
    //require "/usr/share/php/libphp-phpmailer/class.phpmailer.php";
    //require "/usr/share/php/libphp-phpmailer/class.smtp.php";
    $mail = new PHPMailer();
    $mail->setFrom("lasko.daria@wp.pl");
    $mail->addAddress("olek+bai@cichowicz.eu");
    $mail->Subject = "Message sent by PHPMailer";
    $mail->Body = "Hello!";
    $mail->Host = "smtp1.mailgun.org";
    $mail->SMTPAuth = true;
    $mail->Port = 587;
    $mail->Username = "bai@simple-system.pl";                 // SMTP username
    $mail->Password = "bai123";                           // SMTP password
    $mail->SMTPSecure = "tls"; 
    
    if(!$mail->send()) {
      echo 'Email is not sent.';
      echo 'Email error: ' . $mail->ErrorInfo;
    } else {
      echo 'Email has been sent.';
    }

/*require_once '../vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
class Mailer {
  private $phpMailer;
  private $smtpSetting;
  public function __construct( $isDebug = false ) {
    $this->smtpSetting = include '/home/milosz/Desktop/darcia/projektzkodem/public/mail.config.php';
    $this->phpMailer = new PHPMailer();
    $this->phpMailer->isSMTP();
    $this->phpMailer->Host = $this->smtpSetting['host'];
    $this->phpMailer->SMTPAuth = true;
    $this->phpMailer->Username = $this->smtpSetting['login'];
    $this->phpMailer->Password = $this->smtpSetting['password'];
    $this->phpMailer->SMTPSecure = $this->smtpSetting['secure'];
    $this->phpMailer->Port = $this->smtpSetting['port'];
    if ( $isDebug ) {
      $this->phpMailer->SMTPDebug = 2;
    }
}
public function sendEmail( $reciever, $firstName, $lastName ) {
$this->phpMailer->setFrom("lasko.daria@wp.pl", "Daria");
$this->phpMailer->Subject = "Mail testowy";
$this->phpMailer->Body = "Hej! To mój skrypt. Test polskich znaków:ą,ę,ć,ó,ż";
$this->phpMailer->addAddress( $reciever );
// Add a recipient
$this->phpMailer->send();
}
}
*/
    