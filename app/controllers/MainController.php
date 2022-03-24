<?php 

class MainController extends Controller{
    public function getHome(){
        $this->f3->set('title', 'Home');
        $template = new Template;
        echo $template->render('home-page.htm');
    }

    public function getAbout(){
        $this->f3->set('title', 'About');
        $template = new Template;
        echo $template->render('about-page.htm');
    }

    public function getReport(){
        $this->f3->set('title', 'Report');
        $submission = new Main($this->db);
	    $this->f3->set('submissions', $submission->all());
        $template = new Template;
        echo $template->render('report-page.htm');
    }

    public function removeEntry(){
        if($this->f3->exists('PARAMS.id')){
            $submission = new Main($this->db);
            $submission->delete($this->f3->get('PARAMS.id'));
        }
        $this->f3->reroute('/contact-report');
    }

    public function submitRequest(){
        $submission = new Main($this->db);
        $submission->add();
        //$this->sendEmail(); //post params
        echo 'success';
    }

    function url(){
        return sprintf(
          "%s://%s",
          isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
          $_SERVER['SERVER_NAME']
        );
    }

    function sendEmail(){
        // Replace this with your own email address
        $to = 'bruce.clother@themovinghub.co.uk';

        if($_POST) {

            $name = trim(stripslashes($_POST['name']));
            $email = trim(stripslashes($_POST['email']));
            $phone = trim(stripslashes($_POST['phone']));

            
                if ($subject == '') { $subject = "Contact Form Submission"; }

            // Set Message
            $message .= "Email from: " . $name . "<br />";
            $message .= "Email address: " . $email . "<br />";
            $message .= "Phone: " . $phone . "<br />";
            $message .= "<br /> ----- <br /> This email was sent from your site " . url() . " contact form. <br />";

            // Set From: header
            $from =  $name . " <" . $email . ">";

            // Email Headers
            $headers = "From: " . $from . "\r\n";
            $headers .= "Reply-To: ". $email . "\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

            ini_set("sendmail_from", $to); // for windows server
            $mail = mail($to, $subject, $message, $headers);

            if ($mail) { 
                echo "OK"; 
            }else { 
                echo "Something went wrong. Please try again."; 
            }
        }
    }
}