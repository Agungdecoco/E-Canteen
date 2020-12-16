<?php


class Payment{
    
    private $id;
    private $accountid;
    private $menuid;


    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }


    public function getaccountid(): ?string
    {
        return $this->accountid;
    }

    public function setaccountid(?string $accountid): ?string
    {
        $this->accountid = $accountid;
    }

    public function getmenuid(): ?string
    {
        return $this->getmenuid;
    }

    public function setmenuid(?string $menuid): ?string
    {
        $this->setmenuid = $menuid;
    }
  
}
?>