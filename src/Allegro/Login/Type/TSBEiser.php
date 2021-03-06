<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TSBEiser implements RequestInterface
{

    /**
     * @var int
     */
    private $RelatieCode;

    /**
     * @var int
     */
    private $Volgnummer;

    /**
     * @var int
     */
    private $CodeEiser;

    /**
     * @var string
     */
    private $NaamEiser;

    /**
     * @var int
     */
    private $UniekVolgnummer;

    /**
     * @var string
     */
    private $Referentie;

    /**
     * @var float
     */
    private $TeruggemeldBedrag;

    /**
     * @var float
     */
    private $BerekendBedrag;

    /**
     * @var float
     */
    private $GereserveerdBedrag;

    /**
     * @var float
     */
    private $DoorbetaaldBedrag;

    /**
     * @var float
     */
    private $PrognoseRestschuld;

    /**
     * @var int
     */
    private $CodeIncasso;

    /**
     * @var string
     */
    private $NaamIncasso;

    /**
     * @var string
     */
    private $ReferentieIncasso;

    /**
     * @var int
     */
    private $CodeDeurwaarder;

    /**
     * @var string
     */
    private $NaamDeurwaarder;

    /**
     * @var string
     */
    private $ReferentieDeurwaarder;

    /**
     * Constructor
     *
     * @var int $RelatieCode
     * @var int $Volgnummer
     * @var int $CodeEiser
     * @var string $NaamEiser
     * @var int $UniekVolgnummer
     * @var string $Referentie
     * @var float $TeruggemeldBedrag
     * @var float $BerekendBedrag
     * @var float $GereserveerdBedrag
     * @var float $DoorbetaaldBedrag
     * @var float $PrognoseRestschuld
     * @var int $CodeIncasso
     * @var string $NaamIncasso
     * @var string $ReferentieIncasso
     * @var int $CodeDeurwaarder
     * @var string $NaamDeurwaarder
     * @var string $ReferentieDeurwaarder
     */
    public function __construct($RelatieCode, $Volgnummer, $CodeEiser, $NaamEiser, $UniekVolgnummer, $Referentie, $TeruggemeldBedrag, $BerekendBedrag, $GereserveerdBedrag, $DoorbetaaldBedrag, $PrognoseRestschuld, $CodeIncasso, $NaamIncasso, $ReferentieIncasso, $CodeDeurwaarder, $NaamDeurwaarder, $ReferentieDeurwaarder)
    {
        $this->RelatieCode = $RelatieCode;
        $this->Volgnummer = $Volgnummer;
        $this->CodeEiser = $CodeEiser;
        $this->NaamEiser = $NaamEiser;
        $this->UniekVolgnummer = $UniekVolgnummer;
        $this->Referentie = $Referentie;
        $this->TeruggemeldBedrag = $TeruggemeldBedrag;
        $this->BerekendBedrag = $BerekendBedrag;
        $this->GereserveerdBedrag = $GereserveerdBedrag;
        $this->DoorbetaaldBedrag = $DoorbetaaldBedrag;
        $this->PrognoseRestschuld = $PrognoseRestschuld;
        $this->CodeIncasso = $CodeIncasso;
        $this->NaamIncasso = $NaamIncasso;
        $this->ReferentieIncasso = $ReferentieIncasso;
        $this->CodeDeurwaarder = $CodeDeurwaarder;
        $this->NaamDeurwaarder = $NaamDeurwaarder;
        $this->ReferentieDeurwaarder = $ReferentieDeurwaarder;
    }

    /**
     * @return int
     */
    public function getRelatieCode()
    {
        return $this->RelatieCode;
    }

    /**
     * @param int $RelatieCode
     * @return TSBEiser
     */
    public function withRelatieCode($RelatieCode)
    {
        $new = clone $this;
        $new->RelatieCode = $RelatieCode;

        return $new;
    }

    /**
     * @return int
     */
    public function getVolgnummer()
    {
        return $this->Volgnummer;
    }

    /**
     * @param int $Volgnummer
     * @return TSBEiser
     */
    public function withVolgnummer($Volgnummer)
    {
        $new = clone $this;
        $new->Volgnummer = $Volgnummer;

        return $new;
    }

    /**
     * @return int
     */
    public function getCodeEiser()
    {
        return $this->CodeEiser;
    }

    /**
     * @param int $CodeEiser
     * @return TSBEiser
     */
    public function withCodeEiser($CodeEiser)
    {
        $new = clone $this;
        $new->CodeEiser = $CodeEiser;

        return $new;
    }

    /**
     * @return string
     */
    public function getNaamEiser()
    {
        return $this->NaamEiser;
    }

    /**
     * @param string $NaamEiser
     * @return TSBEiser
     */
    public function withNaamEiser($NaamEiser)
    {
        $new = clone $this;
        $new->NaamEiser = $NaamEiser;

        return $new;
    }

    /**
     * @return int
     */
    public function getUniekVolgnummer()
    {
        return $this->UniekVolgnummer;
    }

    /**
     * @param int $UniekVolgnummer
     * @return TSBEiser
     */
    public function withUniekVolgnummer($UniekVolgnummer)
    {
        $new = clone $this;
        $new->UniekVolgnummer = $UniekVolgnummer;

        return $new;
    }

    /**
     * @return string
     */
    public function getReferentie()
    {
        return $this->Referentie;
    }

    /**
     * @param string $Referentie
     * @return TSBEiser
     */
    public function withReferentie($Referentie)
    {
        $new = clone $this;
        $new->Referentie = $Referentie;

        return $new;
    }

    /**
     * @return float
     */
    public function getTeruggemeldBedrag()
    {
        return $this->TeruggemeldBedrag;
    }

    /**
     * @param float $TeruggemeldBedrag
     * @return TSBEiser
     */
    public function withTeruggemeldBedrag($TeruggemeldBedrag)
    {
        $new = clone $this;
        $new->TeruggemeldBedrag = $TeruggemeldBedrag;

        return $new;
    }

    /**
     * @return float
     */
    public function getBerekendBedrag()
    {
        return $this->BerekendBedrag;
    }

    /**
     * @param float $BerekendBedrag
     * @return TSBEiser
     */
    public function withBerekendBedrag($BerekendBedrag)
    {
        $new = clone $this;
        $new->BerekendBedrag = $BerekendBedrag;

        return $new;
    }

    /**
     * @return float
     */
    public function getGereserveerdBedrag()
    {
        return $this->GereserveerdBedrag;
    }

    /**
     * @param float $GereserveerdBedrag
     * @return TSBEiser
     */
    public function withGereserveerdBedrag($GereserveerdBedrag)
    {
        $new = clone $this;
        $new->GereserveerdBedrag = $GereserveerdBedrag;

        return $new;
    }

    /**
     * @return float
     */
    public function getDoorbetaaldBedrag()
    {
        return $this->DoorbetaaldBedrag;
    }

    /**
     * @param float $DoorbetaaldBedrag
     * @return TSBEiser
     */
    public function withDoorbetaaldBedrag($DoorbetaaldBedrag)
    {
        $new = clone $this;
        $new->DoorbetaaldBedrag = $DoorbetaaldBedrag;

        return $new;
    }

    /**
     * @return float
     */
    public function getPrognoseRestschuld()
    {
        return $this->PrognoseRestschuld;
    }

    /**
     * @param float $PrognoseRestschuld
     * @return TSBEiser
     */
    public function withPrognoseRestschuld($PrognoseRestschuld)
    {
        $new = clone $this;
        $new->PrognoseRestschuld = $PrognoseRestschuld;

        return $new;
    }

    /**
     * @return int
     */
    public function getCodeIncasso()
    {
        return $this->CodeIncasso;
    }

    /**
     * @param int $CodeIncasso
     * @return TSBEiser
     */
    public function withCodeIncasso($CodeIncasso)
    {
        $new = clone $this;
        $new->CodeIncasso = $CodeIncasso;

        return $new;
    }

    /**
     * @return string
     */
    public function getNaamIncasso()
    {
        return $this->NaamIncasso;
    }

    /**
     * @param string $NaamIncasso
     * @return TSBEiser
     */
    public function withNaamIncasso($NaamIncasso)
    {
        $new = clone $this;
        $new->NaamIncasso = $NaamIncasso;

        return $new;
    }

    /**
     * @return string
     */
    public function getReferentieIncasso()
    {
        return $this->ReferentieIncasso;
    }

    /**
     * @param string $ReferentieIncasso
     * @return TSBEiser
     */
    public function withReferentieIncasso($ReferentieIncasso)
    {
        $new = clone $this;
        $new->ReferentieIncasso = $ReferentieIncasso;

        return $new;
    }

    /**
     * @return int
     */
    public function getCodeDeurwaarder()
    {
        return $this->CodeDeurwaarder;
    }

    /**
     * @param int $CodeDeurwaarder
     * @return TSBEiser
     */
    public function withCodeDeurwaarder($CodeDeurwaarder)
    {
        $new = clone $this;
        $new->CodeDeurwaarder = $CodeDeurwaarder;

        return $new;
    }

    /**
     * @return string
     */
    public function getNaamDeurwaarder()
    {
        return $this->NaamDeurwaarder;
    }

    /**
     * @param string $NaamDeurwaarder
     * @return TSBEiser
     */
    public function withNaamDeurwaarder($NaamDeurwaarder)
    {
        $new = clone $this;
        $new->NaamDeurwaarder = $NaamDeurwaarder;

        return $new;
    }

    /**
     * @return string
     */
    public function getReferentieDeurwaarder()
    {
        return $this->ReferentieDeurwaarder;
    }

    /**
     * @param string $ReferentieDeurwaarder
     * @return TSBEiser
     */
    public function withReferentieDeurwaarder($ReferentieDeurwaarder)
    {
        $new = clone $this;
        $new->ReferentieDeurwaarder = $ReferentieDeurwaarder;

        return $new;
    }


}

