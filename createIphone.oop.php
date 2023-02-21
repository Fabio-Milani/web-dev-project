<?php

// Creation of parent and child classes 

use Phone as GlobalPhone;

// parent class

class Phone{
    // attributes or properties
    public $call;
    public $photo;
    public $apps;
    public $recordVideo;
        // contructor
        public function __construct($call,$photo,$apps,$recordVideo){
           
            $this->call = $call; 
            $this->photo = $photo;
            $this->apps = $apps;
            $this->recordVideo = $recordVideo;
        }
            // method or behaviour
            public function showAction(){
                echo "\n The new Iphone ultra model is available now, with the following basic features: $this->call capability in the most extreme environments, $this->photo shooting with a resolution to impress the James Webb telescope, an infinity of free and non-free $this->apps, and finally the $this->recordVideo quality will be comparable to a movie camera!";
                // that double "" is for variable interpolation
            }
                
        }

$iphone = new Phone('calls','picture','applications','recorder video');
$iphone->showAction();

// first child
class includedApps extends Phone{

    public $compass;
    public $voiceMemos;
    public $findPhone;
    public $antivirusPro;
    public $home;
        
        public function __construct($call,$photo,$apps,$recordVideo,$compass,$voiceMemos,$findPhone,$antivirusPro,$home){
            parent::__construct($call,$photo,$apps,$recordVideo);
            $this->compass = $compass;
            $this->voiceMemos = $voiceMemos;
            $this->findPhone = $findPhone;
            $this->antivirusPro = $antivirusPro;
            $this->home = $home;
            
        }

        public function showBasicApps(){
            echo "\n This instead is a list of applications that the iPhone comes with natively, which you won't be able to do without: $this->compass, indispensable in the wildest jungles or in case you get lost at sea. $this->voiceMemos to be a real business man and not let any idea get away, $this->findPhone, in case you lose your device, $this->antivirusPro ready to destroy any malware, and finally $this->home, to connect all your smart devices and manage them via the internet of things.";
        }
       
}
$includedApps = new includedApps('compass','voice memos','find phone','antivirus Pro','home','calls','picture','applications','recorder video');
$includedApps->showBasicApps();

//second child 
class Gadget extends Phone{

    public $cable;
    public $earPhones;
    public $charger;
    public $cover;
    public $screenProtector;

        public function __construct($call,$photo,$apps,$recordVideo,$cable,$earphones,$charger,$cover,$screenProtector){
            parent::__construct($call,$photo,$apps,$recordVideo);
            $this->cable = $cable;
            $this->earPhones = $earphones;
            $this->charger = $charger;
            $this->cover = $cover;
            $this->screenProtector = $screenProtector;
            }

    public function showGadgets(){
        echo "\n And here are the exclusive gadgets we offer to enhance your experience in every way: the super $this->cable is the most durable of all time, the $this->earPhones are super dynamic and lightweight, the $this->charger will bring the battery up to over 50% in 25 minutes, and between $this->cover and $this->screenProtector it will be impossible for it to get damaged.";
    }
}

$gadget = new Gadget('cable','earphones','charger','cover','screenProtector','calls','picture','applications','recorder video');
$gadget->showGadgets();
// functions are called with this pattern $object->function