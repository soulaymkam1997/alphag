<?PHP

class fournisseur{
    private $id;
	private $nom;
	private $contact;
	private $logo;

    /**
     * fournisseur constructor.
     * @param $id
     * @param $nom
     * @param $contact
     * @param $logo
     */

    public function __construct($nom, $contact, $logo)
    {
        $this->nom = $nom;
        $this->contact = $contact;
        $this->logo = $logo;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param mixed $contact
     */
    public function setContact($contact)
    {
        $this->contact = $contact;
    }

    /**
     * @return mixed
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @param mixed $logo
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;
    }




    



}

