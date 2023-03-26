<?php

namespace App\Entity;

use App\Repository\InformationNutritionnelleRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InformationNutritionnelleRepository::class)]
class InformationNutritionnelle
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToOne(inversedBy: 'informationNutritionnelle', cascade: ['persist', 'remove'])]
    private ?Aliment $aliment = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 11, scale: 4, nullable: true)]
    private ?string $Energie_Reglement_UE_kJ100g = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 11, scale: 4, nullable: true)]
    private ?string $Energie_Reglement_UE_kcal100g = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 11, scale: 4, nullable: true)]
    private ?string $Energie_NxfacteurJones_kJ100g = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 11, scale: 4, nullable: true)]
    private ?string $Energie_NxfacteurJones_kcal100g = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 11, scale: 4, nullable: true)]
    private ?string $Eau_g100g = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 11, scale: 4, nullable: true)]
    private ?string $Proteines_NxfacteurJones_g100g = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 11, scale: 4, nullable: true)]
    private ?string $Proteines_Nx625_g100g = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 11, scale: 4, nullable: true)]
    private ?string $Glucides_g100g = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 11, scale: 4, nullable: true)]
    private ?string $Lipides_g100g = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 11, scale: 4, nullable: true)]
    private ?string $Sucres_g100g = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 11, scale: 4, nullable: true)]
    private ?string $Fructose_g100g = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 11, scale: 4, nullable: true)]
    private ?string $Galactose_g100g = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 11, scale: 4, nullable: true)]
    private ?string $Glucose_g100g = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 11, scale: 4, nullable: true)]
    private ?string $Lactose_g100g = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 11, scale: 4, nullable: true)]
    private ?string $Maltose_g100g = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 11, scale: 4, nullable: true)]
    private ?string $Saccharose_g100g = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 11, scale: 4, nullable: true)]
    private ?string $Amidon_g100g = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 11, scale: 4, nullable: true)]
    private ?string $Fibres_alimentaires_g100g = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 11, scale: 4, nullable: true)]
    private ?string $Polyols_totaux_g100g = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 11, scale: 4, nullable: true)]
    private ?string $Cendres_g100g = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 11, scale: 4, nullable: true)]
    private ?string $Alcool_g100g = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 11, scale: 4, nullable: true)]
    private ?string $Acides_organiques_g100g = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 11, scale: 4, nullable: true)]
    private ?string $AG_satures_g100g = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 11, scale: 4, nullable: true)]
    private ?string $AG_monoinsatures_g100g = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 11, scale: 4, nullable: true)]
    private ?string $AG_polyinsatures_g100g = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 11, scale: 4, nullable: true)]
    private ?string $AG_butyrique_g100g = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 11, scale: 4, nullable: true)]
    private ?string $AG_capro_que_g100g = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 11, scale: 4, nullable: true)]
    private ?string $AG_caprylique_g100g = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 11, scale: 4, nullable: true)]
    private ?string $AG_caprique_g100g = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 11, scale: 4, nullable: true)]
    private ?string $AG_laurique_g100g = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 11, scale: 4, nullable: true)]
    private ?string $AG_myristique_g100g = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 11, scale: 4, nullable: true)]
    private ?string $AG_palmitique_g100g = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 11, scale: 4, nullable: true)]
    private ?string $AG_stearique_g100g = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 11, scale: 4, nullable: true)]
    private ?string $AG_oleique_g100g = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 11, scale: 4, nullable: true)]
    private ?string $AG_linoleique_g100g = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 11, scale: 4, nullable: true)]
    private ?string $AG_alphanulllinolenique_g100g = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 11, scale: 4, nullable: true)]
    private ?string $AG_arachidonique_g100g = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 11, scale: 4, nullable: true)]
    private ?string $AG_EPA_g100g = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 11, scale: 4, nullable: true)]
    private ?string $AG_DHA_g100g = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 11, scale: 4, nullable: true)]
    private ?string $Cholesterol_mg100g = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 11, scale: 4, nullable: true)]
    private ?string $Sel_chlorure_de_sodium_g100g = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 11, scale: 4, nullable: true)]
    private ?string $Calcium_mg100g = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 11, scale: 4, nullable: true)]
    private ?string $Chlorure_mg100g = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 11, scale: 4, nullable: true)]
    private ?string $Cuivre_mg100g = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 11, scale: 4, nullable: true)]
    private ?string $Fer_mg100g = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 11, scale: 4, nullable: true)]
    private ?string $Iode_microg100g = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 11, scale: 4, nullable: true)]
    private ?string $Magnesium_mg100g = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 11, scale: 4, nullable: true)]
    private ?string $Manganese_mg100g = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 11, scale: 4, nullable: true)]
    private ?string $Phosphore_mg100g = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 11, scale: 4, nullable: true)]
    private ?string $Potassium_mg100g = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 11, scale: 4, nullable: true)]
    private ?string $Selenium_microg100g = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 11, scale: 4, nullable: true)]
    private ?string $Sodium_mg100g = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 11, scale: 4, nullable: true)]
    private ?string $Zinc_mg100g = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 11, scale: 4, nullable: true)]
    private ?string $Retinol_microg100g = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 11, scale: 4, nullable: true)]
    private ?string $BetaCarotene_microg100g = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 11, scale: 4, nullable: true)]
    private ?string $Vitamine_D_microg100g = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 11, scale: 4, nullable: true)]
    private ?string $Vitamine_E_mg100g = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 11, scale: 4, nullable: true)]
    private ?string $Vitamine_K1_microg100g = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 11, scale: 4, nullable: true)]
    private ?string $Vitamine_K2_microg100g = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 11, scale: 4, nullable: true)]
    private ?string $Vitamine_C_mg100g = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 11, scale: 4, nullable: true)]
    private ?string $Vitamine_B1_Thia_mg100g = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 11, scale: 4, nullable: true)]
    private ?string $Vitamine_B2_Ribo_mg100g = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 11, scale: 4, nullable: true)]
    private ?string $Vitamine_B3_PP_Nia_mg100g = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 11, scale: 4, nullable: true)]
    private ?string $Vitamine_B5_AcidePan_mg100g = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAliment(): ?Aliment
    {
        return $this->aliment;
    }

    public function setAliment(?Aliment $aliment): self
    {
        $this->aliment = $aliment;

        return $this;
    }

    public function getEnergieReglementUEKJ100g(): ?string
    {
        return $this->Energie_Reglement_UE_kJ100g;
    }

    public function setEnergieReglementUEKJ100g(string $Energie_Reglement_UE_kJ100g): self
    {
        $this->Energie_Reglement_UE_kJ100g = $Energie_Reglement_UE_kJ100g;

        return $this;
    }

    public function getEnergieReglementUEKcal100g(): ?string
    {
        return $this->Energie_Reglement_UE_kcal100g;
    }

    public function setEnergieReglementUEKcal100g(string $Energie_Reglement_UE_kcal100g): self
    {
        $this->Energie_Reglement_UE_kcal100g = $Energie_Reglement_UE_kcal100g;

        return $this;
    }

    public function getEnergieNxfacteurJonesKJ100g(): ?string
    {
        return $this->Energie_NxfacteurJones_kJ100g;
    }

    public function setEnergieNxfacteurJonesKJ100g(string $Energie_NxfacteurJones_kJ100g): self
    {
        $this->Energie_NxfacteurJones_kJ100g = $Energie_NxfacteurJones_kJ100g;

        return $this;
    }

    public function getEnergieNxfacteurJonesKcal100g(): ?string
    {
        return $this->Energie_NxfacteurJones_kcal100g;
    }

    public function setEnergieNxfacteurJonesKcal100g(string $Energie_NxfacteurJones_kcal100g): self
    {
        $this->Energie_NxfacteurJones_kcal100g = $Energie_NxfacteurJones_kcal100g;

        return $this;
    }

    public function getEauG100g(): ?string
    {
        return $this->Eau_g100g;
    }

    public function setEauG100g(string $Eau_g100g): self
    {
        $this->Eau_g100g = $Eau_g100g;

        return $this;
    }

    public function getProteinesNxfacteurJonesG100g(): ?string
    {
        return $this->Proteines_NxfacteurJones_g100g;
    }

    public function setProteinesNxfacteurJonesG100g(string $Proteines_NxfacteurJones_g100g): self
    {
        $this->Proteines_NxfacteurJones_g100g = $Proteines_NxfacteurJones_g100g;

        return $this;
    }

    public function getProteinesNx625G100g(): ?string
    {
        return $this->Proteines_Nx625_g100g;
    }

    public function setProteinesNx625G100g(string $Proteines_Nx625_g100g): self
    {
        $this->Proteines_Nx625_g100g = $Proteines_Nx625_g100g;

        return $this;
    }

    public function getGlucidesG100g(): ?string
    {
        return $this->Glucides_g100g;
    }

    public function setGlucidesG100g(string $Glucides_g100g): self
    {
        $this->Glucides_g100g = $Glucides_g100g;

        return $this;
    }

    public function getLipidesG100g(): ?string
    {
        return $this->Lipides_g100g;
    }

    public function setLipidesG100g(string $Lipides_g100g): self
    {
        $this->Lipides_g100g = $Lipides_g100g;

        return $this;
    }

    public function getSucresG100g(): ?string
    {
        return $this->Sucres_g100g;
    }

    public function setSucresG100g(string $Sucres_g100g): self
    {
        $this->Sucres_g100g = $Sucres_g100g;

        return $this;
    }

    public function getFructoseG100g(): ?string
    {
        return $this->Fructose_g100g;
    }

    public function setFructoseG100g(string $Fructose_g100g): self
    {
        $this->Fructose_g100g = $Fructose_g100g;

        return $this;
    }

    public function getGalactoseG100g(): ?string
    {
        return $this->Galactose_g100g;
    }

    public function setGalactoseG100g(string $Galactose_g100g): self
    {
        $this->Galactose_g100g = $Galactose_g100g;

        return $this;
    }

    public function getGlucoseG100g(): ?string
    {
        return $this->Glucose_g100g;
    }

    public function setGlucoseG100g(string $Glucose_g100g): self
    {
        $this->Glucose_g100g = $Glucose_g100g;

        return $this;
    }

    public function getLactoseG100g(): ?string
    {
        return $this->Lactose_g100g;
    }

    public function setLactoseG100g(string $Lactose_g100g): self
    {
        $this->Lactose_g100g = $Lactose_g100g;

        return $this;
    }

    public function getMaltoseG100g(): ?string
    {
        return $this->Maltose_g100g;
    }

    public function setMaltoseG100g(string $Maltose_g100g): self
    {
        $this->Maltose_g100g = $Maltose_g100g;

        return $this;
    }

    public function getSaccharoseG100g(): ?string
    {
        return $this->Saccharose_g100g;
    }

    public function setSaccharoseG100g(string $Saccharose_g100g): self
    {
        $this->Saccharose_g100g = $Saccharose_g100g;

        return $this;
    }

    public function getAmidonG100g(): ?string
    {
        return $this->Amidon_g100g;
    }

    public function setAmidonG100g(string $Amidon_g100g): self
    {
        $this->Amidon_g100g = $Amidon_g100g;

        return $this;
    }

    public function getFibresAlimentairesG100g(): ?string
    {
        return $this->Fibres_alimentaires_g100g;
    }

    public function setFibresAlimentairesG100g(string $Fibres_alimentaires_g100g): self
    {
        $this->Fibres_alimentaires_g100g = $Fibres_alimentaires_g100g;

        return $this;
    }

    public function getPolyolsTotauxG100g(): ?string
    {
        return $this->Polyols_totaux_g100g;
    }

    public function setPolyolsTotauxG100g(string $Polyols_totaux_g100g): self
    {
        $this->Polyols_totaux_g100g = $Polyols_totaux_g100g;

        return $this;
    }

    public function getCendresG100g(): ?string
    {
        return $this->Cendres_g100g;
    }

    public function setCendresG100g(string $Cendres_g100g): self
    {
        $this->Cendres_g100g = $Cendres_g100g;

        return $this;
    }

    public function getAlcoolG100g(): ?string
    {
        return $this->Alcool_g100g;
    }

    public function setAlcoolG100g(string $Alcool_g100g): self
    {
        $this->Alcool_g100g = $Alcool_g100g;

        return $this;
    }

    public function getAcidesOrganiquesG100g(): ?string
    {
        return $this->Acides_organiques_g100g;
    }

    public function setAcidesOrganiquesG100g(string $Acides_organiques_g100g): self
    {
        $this->Acides_organiques_g100g = $Acides_organiques_g100g;

        return $this;
    }

    public function getAGSaturesG100g(): ?string
    {
        return $this->AG_satures_g100g;
    }

    public function setAGSaturesG100g(string $AG_satures_g100g): self
    {
        $this->AG_satures_g100g = $AG_satures_g100g;

        return $this;
    }

    public function getAGMonoinsaturesG100g(): ?string
    {
        return $this->AG_monoinsatures_g100g;
    }

    public function setAGMonoinsaturesG100g(string $AG_monoinsatures_g100g): self
    {
        $this->AG_monoinsatures_g100g = $AG_monoinsatures_g100g;

        return $this;
    }

    public function getAGPolyinsaturesG100g(): ?string
    {
        return $this->AG_polyinsatures_g100g;
    }

    public function setAGPolyinsaturesG100g(string $AG_polyinsatures_g100g): self
    {
        $this->AG_polyinsatures_g100g = $AG_polyinsatures_g100g;

        return $this;
    }

    public function getAGButyriqueG100g(): ?string
    {
        return $this->AG_butyrique_g100g;
    }

    public function setAGButyriqueG100g(string $AG_butyrique_g100g): self
    {
        $this->AG_butyrique_g100g = $AG_butyrique_g100g;

        return $this;
    }

    public function getAGCaproQueG100g(): ?string
    {
        return $this->AG_capro_que_g100g;
    }

    public function setAGCaproQueG100g(string $AG_capro_que_g100g): self
    {
        $this->AG_capro_que_g100g = $AG_capro_que_g100g;

        return $this;
    }

    public function getAGCapryliqueG100g(): ?string
    {
        return $this->AG_caprylique_g100g;
    }

    public function setAGCapryliqueG100g(string $AG_caprylique_g100g): self
    {
        $this->AG_caprylique_g100g = $AG_caprylique_g100g;

        return $this;
    }

    public function getAGCapriqueG100g(): ?string
    {
        return $this->AG_caprique_g100g;
    }

    public function setAGCapriqueG100g(string $AG_caprique_g100g): self
    {
        $this->AG_caprique_g100g = $AG_caprique_g100g;

        return $this;
    }

    public function getAGLauriqueG100g(): ?string
    {
        return $this->AG_laurique_g100g;
    }

    public function setAGLauriqueG100g(string $AG_laurique_g100g): self
    {
        $this->AG_laurique_g100g = $AG_laurique_g100g;

        return $this;
    }

    public function getAGMyristiqueG100g(): ?string
    {
        return $this->AG_myristique_g100g;
    }

    public function setAGMyristiqueG100g(string $AG_myristique_g100g): self
    {
        $this->AG_myristique_g100g = $AG_myristique_g100g;

        return $this;
    }

    public function getAGPalmitiqueG100g(): ?string
    {
        return $this->AG_palmitique_g100g;
    }

    public function setAGPalmitiqueG100g(string $AG_palmitique_g100g): self
    {
        $this->AG_palmitique_g100g = $AG_palmitique_g100g;

        return $this;
    }

    public function getAGSteariqueG100g(): ?string
    {
        return $this->AG_stearique_g100g;
    }

    public function setAGSteariqueG100g(string $AG_stearique_g100g): self
    {
        $this->AG_stearique_g100g = $AG_stearique_g100g;

        return $this;
    }

    public function getAGOleiqueG100g(): ?string
    {
        return $this->AG_oleique_g100g;
    }

    public function setAGOleiqueG100g(string $AG_oleique_g100g): self
    {
        $this->AG_oleique_g100g = $AG_oleique_g100g;

        return $this;
    }

    public function getAGLinoleiqueG100g(): ?string
    {
        return $this->AG_linoleique_g100g;
    }

    public function setAGLinoleiqueG100g(string $AG_linoleique_g100g): self
    {
        $this->AG_linoleique_g100g = $AG_linoleique_g100g;

        return $this;
    }

    public function getAGAlphanulllinoleniqueG100g(): ?string
    {
        return $this->AG_alphanulllinolenique_g100g;
    }

    public function setAGAlphanulllinoleniqueG100g(string $AG_alphanulllinolenique_g100g): self
    {
        $this->AG_alphanulllinolenique_g100g = $AG_alphanulllinolenique_g100g;

        return $this;
    }

    public function getAGArachidoniqueG100g(): ?string
    {
        return $this->AG_arachidonique_g100g;
    }

    public function setAGArachidoniqueG100g(string $AG_arachidonique_g100g): self
    {
        $this->AG_arachidonique_g100g = $AG_arachidonique_g100g;

        return $this;
    }

    public function getAGEPAG100g(): ?string
    {
        return $this->AG_EPA_g100g;
    }

    public function setAGEPAG100g(string $AG_EPA_g100g): self
    {
        $this->AG_EPA_g100g = $AG_EPA_g100g;

        return $this;
    }

    public function getAGDHAG100g(): ?string
    {
        return $this->AG_DHA_g100g;
    }

    public function setAGDHAG100g(string $AG_DHA_g100g): self
    {
        $this->AG_DHA_g100g = $AG_DHA_g100g;

        return $this;
    }

    public function getCholesterolMg100g(): ?string
    {
        return $this->Cholesterol_mg100g;
    }

    public function setCholesterolMg100g(string $Cholesterol_mg100g): self
    {
        $this->Cholesterol_mg100g = $Cholesterol_mg100g;

        return $this;
    }

    public function getSelChlorureDeSodiumG100g(): ?string
    {
        return $this->Sel_chlorure_de_sodium_g100g;
    }

    public function setSelChlorureDeSodiumG100g(string $Sel_chlorure_de_sodium_g100g): self
    {
        $this->Sel_chlorure_de_sodium_g100g = $Sel_chlorure_de_sodium_g100g;

        return $this;
    }

    public function getCalciumMg100g(): ?string
    {
        return $this->Calcium_mg100g;
    }

    public function setCalciumMg100g(string $Calcium_mg100g): self
    {
        $this->Calcium_mg100g = $Calcium_mg100g;

        return $this;
    }

    public function getChlorureMg100g(): ?string
    {
        return $this->Chlorure_mg100g;
    }

    public function setChlorureMg100g(string $Chlorure_mg100g): self
    {
        $this->Chlorure_mg100g = $Chlorure_mg100g;

        return $this;
    }

    public function getCuivreMg100g(): ?string
    {
        return $this->Cuivre_mg100g;
    }

    public function setCuivreMg100g(string $Cuivre_mg100g): self
    {
        $this->Cuivre_mg100g = $Cuivre_mg100g;

        return $this;
    }

    public function getFerMg100g(): ?string
    {
        return $this->Fer_mg100g;
    }

    public function setFerMg100g(string $Fer_mg100g): self
    {
        $this->Fer_mg100g = $Fer_mg100g;

        return $this;
    }

    public function getIodeMicrog100g(): ?string
    {
        return $this->Iode_microg100g;
    }

    public function setIodeMicrog100g(string $Iode_microg100g): self
    {
        $this->Iode_microg100g = $Iode_microg100g;

        return $this;
    }

    public function getMagnesiumMg100g(): ?string
    {
        return $this->Magnesium_mg100g;
    }

    public function setMagnesiumMg100g(string $Magnesium_mg100g): self
    {
        $this->Magnesium_mg100g = $Magnesium_mg100g;

        return $this;
    }

    public function getManganeseMg100g(): ?string
    {
        return $this->Manganese_mg100g;
    }

    public function setManganeseMg100g(string $Manganese_mg100g): self
    {
        $this->Manganese_mg100g = $Manganese_mg100g;

        return $this;
    }

    public function getPhosphoreMg100g(): ?string
    {
        return $this->Phosphore_mg100g;
    }

    public function setPhosphoreMg100g(string $Phosphore_mg100g): self
    {
        $this->Phosphore_mg100g = $Phosphore_mg100g;

        return $this;
    }

    public function getPotassiumMg100g(): ?string
    {
        return $this->Potassium_mg100g;
    }

    public function setPotassiumMg100g(string $Potassium_mg100g): self
    {
        $this->Potassium_mg100g = $Potassium_mg100g;

        return $this;
    }

    public function getSeleniumMicrog100g(): ?string
    {
        return $this->Selenium_microg100g;
    }

    public function setSeleniumMicrog100g(string $Selenium_microg100g): self
    {
        $this->Selenium_microg100g = $Selenium_microg100g;

        return $this;
    }

    public function getSodiumMg100g(): ?string
    {
        return $this->Sodium_mg100g;
    }

    public function setSodiumMg100g(string $Sodium_mg100g): self
    {
        $this->Sodium_mg100g = $Sodium_mg100g;

        return $this;
    }

    public function getZincMg100g(): ?string
    {
        return $this->Zinc_mg100g;
    }

    public function setZincMg100g(string $Zinc_mg100g): self
    {
        $this->Zinc_mg100g = $Zinc_mg100g;

        return $this;
    }

    public function getRetinolMicrog100g(): ?string
    {
        return $this->Retinol_microg100g;
    }

    public function setRetinolMicrog100g(string $Retinol_microg100g): self
    {
        $this->Retinol_microg100g = $Retinol_microg100g;

        return $this;
    }

    public function getBetaCaroteneMicrog100g(): ?string
    {
        return $this->BetaCarotene_microg100g;
    }

    public function setBetaCaroteneMicrog100g(string $BetaCarotene_microg100g): self
    {
        $this->BetaCarotene_microg100g = $BetaCarotene_microg100g;

        return $this;
    }

    public function getVitamineDMicrog100g(): ?string
    {
        return $this->Vitamine_D_microg100g;
    }

    public function setVitamineDMicrog100g(string $Vitamine_D_microg100g): self
    {
        $this->Vitamine_D_microg100g = $Vitamine_D_microg100g;

        return $this;
    }

    public function getVitamineEMg100g(): ?string
    {
        return $this->Vitamine_E_mg100g;
    }

    public function setVitamineEMg100g(string $Vitamine_E_mg100g): self
    {
        $this->Vitamine_E_mg100g = $Vitamine_E_mg100g;

        return $this;
    }

    public function getVitamineK1Microg100g(): ?string
    {
        return $this->Vitamine_K1_microg100g;
    }

    public function setVitamineK1Microg100g(string $Vitamine_K1_microg100g): self
    {
        $this->Vitamine_K1_microg100g = $Vitamine_K1_microg100g;

        return $this;
    }

    public function getVitamineK2Microg100g(): ?string
    {
        return $this->Vitamine_K2_microg100g;
    }

    public function setVitamineK2Microg100g(string $Vitamine_K2_microg100g): self
    {
        $this->Vitamine_K2_microg100g = $Vitamine_K2_microg100g;

        return $this;
    }

    public function getVitamineCMg100g(): ?string
    {
        return $this->Vitamine_C_mg100g;
    }

    public function setVitamineCMg100g(string $Vitamine_C_mg100g): self
    {
        $this->Vitamine_C_mg100g = $Vitamine_C_mg100g;

        return $this;
    }

    public function getVitamineB1ThiaMg100g(): ?string
    {
        return $this->Vitamine_B1_Thia_mg100g;
    }

    public function setVitamineB1ThiaMg100g(string $Vitamine_B1_Thia_mg100g): self
    {
        $this->Vitamine_B1_Thia_mg100g = $Vitamine_B1_Thia_mg100g;

        return $this;
    }

    public function getVitamineB2RiboMg100g(): ?string
    {
        return $this->Vitamine_B2_Ribo_mg100g;
    }

    public function setVitamineB2RiboMg100g(string $Vitamine_B2_Ribo_mg100g): self
    {
        $this->Vitamine_B2_Ribo_mg100g = $Vitamine_B2_Ribo_mg100g;

        return $this;
    }

    public function getVitamineB3PPNiaMg100g(): ?string
    {
        return $this->Vitamine_B3_PP_Nia_mg100g;
    }

    public function setVitamineB3PPNiaMg100g(string $Vitamine_B3_PP_Nia_mg100g): self
    {
        $this->Vitamine_B3_PP_Nia_mg100g = $Vitamine_B3_PP_Nia_mg100g;

        return $this;
    }

    public function getVitamineB5AcidePanMg100g(): ?string
    {
        return $this->Vitamine_B5_AcidePan_mg100g;
    }

    public function setVitamineB5AcidePanMg100g(?string $Vitamine_B5_AcidePan_mg100g): self
    {
        $this->Vitamine_B5_AcidePan_mg100g = $Vitamine_B5_AcidePan_mg100g;

        return $this;
    }
}
