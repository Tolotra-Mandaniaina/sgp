<?php

namespace App\Entity;

use App\Repository\ProjetRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProjetRepository::class)]
class Projet
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_soumission = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $projet_no = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $fonds = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $phase = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $paysage = null;

    #[ORM\Column(nullable: true)]
    private ?DateTimeInterface $annee = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $statut_projet = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?\DateTimeInterface $date_debut_propose = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $dure_prevu = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $titre_projet = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $action_principale_projet = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $lieu_implantation = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nom_local_communaute_beneficiaire = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $fokontany = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nom_organisation = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeInterface $annee_creation = null;

    #[ORM\Column(nullable: true)]
    private ?int $nombre_membre = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $adresse_physique = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $telephone = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $email = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nom_signataire = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $fonction_signataire = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nom_contact = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $fonction_contact = null;

    #[ORM\OneToMany(mappedBy: 'projet', targetEntity: Apport::class, cascade: ['persist'] )]
    private Collection $apport;

    public function __construct()
    {
        $this->apport = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateSoumission(): ?\DateTimeInterface
    {
        return $this->date_soumission;
    }

    public function setDateSoumission(\DateTimeInterface $date_soumission): static
    {
        $this->date_soumission = $date_soumission;

        return $this;
    }

    public function getProjetNo(): ?string
    {
        return $this->projet_no;
    }

    public function setProjetNo(?string $projet_no): static
    {
        $this->projet_no = $projet_no;

        return $this;
    }

    public function getFonds(): ?string
    {
        return $this->fonds;
    }

    public function setFonds(?string $fonds): static
    {
        $this->fonds = $fonds;

        return $this;
    }

    public function getPhase(): ?string
    {
        return $this->phase;
    }

    public function setPhase(?string $phase): static
    {
        $this->phase = $phase;

        return $this;
    }

    public function getPaysage(): ?string
    {
        return $this->paysage;
    }

    public function setPaysage(?string $paysage): static
    {
        $this->paysage = $paysage;

        return $this;
    }

    public function getAnnee(): ?int
    {
        return $this->annee;
    }

    public function setAnnee(?int $annee): static
    {
        $this->annee = $annee;

        return $this;
    }

    public function getStatutProjet(): ?string
    {
        return $this->statut_projet;
    }

    public function setStatutProjet(?string $statut_projet): static
    {
        $this->statut_projet = $statut_projet;

        return $this;
    }

    public function getDateDebutPropose(): ?string
    {
        return $this->date_debut_propose;
    }

    public function setDateDebutPropose(?string $date_debut_propose): static
    {
        $this->date_debut_propose = $date_debut_propose;

        return $this;
    }

    public function getDurePrevu(): ?string
    {
        return $this->dure_prevu;
    }

    public function setDurePrevu(?string $dure_prevu): static
    {
        $this->dure_prevu = $dure_prevu;

        return $this;
    }

    public function getTitreProjet(): ?string
    {
        return $this->titre_projet;
    }

    public function setTitreProjet(?string $titre_projet): static
    {
        $this->titre_projet = $titre_projet;

        return $this;
    }

    public function getActionPrincipaleProjet(): ?string
    {
        return $this->action_principale_projet;
    }

    public function setActionPrincipaleProjet(?string $action_principale_projet): static
    {
        $this->action_principale_projet = $action_principale_projet;

        return $this;
    }

    public function getLieuImplantation(): ?string
    {
        return $this->lieu_implantation;
    }

    public function setLieuImplantation(?string $lieu_implantation): static
    {
        $this->lieu_implantation = $lieu_implantation;

        return $this;
    }

    public function getNomLocalCommunauteBeneficiaire(): ?string
    {
        return $this->nom_local_communaute_beneficiaire;
    }

    public function setNomLocalCommunauteBeneficiaire(?string $nom_local_communaute_beneficiaire): static
    {
        $this->nom_local_communaute_beneficiaire = $nom_local_communaute_beneficiaire;

        return $this;
    }

    public function getFokontany(): ?string
    {
        return $this->fokontany;
    }

    public function setFokontany(?string $fokontany): static
    {
        $this->fokontany = $fokontany;

        return $this;
    }

    public function getNomOrganisation(): ?string
    {
        return $this->nom_organisation;
    }

    public function setNomOrganisation(?string $nom_organisation): static
    {
        $this->nom_organisation = $nom_organisation;

        return $this;
    }

    public function getAnneeCreation(): ?int
    {
        return $this->annee_creation;
    }

    public function setAnneeCreation(?int $annee_creation): static
    {
        $this->annee_creation = $annee_creation;

        return $this;
    }

    public function getNombreMembre(): ?int
    {
        return $this->nombre_membre;
    }

    public function setNombreMembre(?int $nombre_membre): static
    {
        $this->nombre_membre = $nombre_membre;

        return $this;
    }

    public function getAdressePhysique(): ?string
    {
        return $this->adresse_physique;
    }

    public function setAdressePhysique(?string $adresse_physique): static
    {
        $this->adresse_physique = $adresse_physique;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(?string $telephone): static
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getNomSignataire(): ?string
    {
        return $this->nom_signataire;
    }

    public function setNomSignataire(?string $nom_signataire): static
    {
        $this->nom_signataire = $nom_signataire;

        return $this;
    }

    public function getFonctionSignataire(): ?string
    {
        return $this->fonction_signataire;
    }

    public function setFonctionSignataire(?string $fonction_signataire): static
    {
        $this->fonction_signataire = $fonction_signataire;

        return $this;
    }

    public function getNomContact(): ?string
    {
        return $this->nom_contact;
    }

    public function setNomContact(?string $nom_contact): static
    {
        $this->nom_contact = $nom_contact;

        return $this;
    }

    public function getFonctionContact(): ?string
    {
        return $this->fonction_contact;
    }

    public function setFonctionContact(?string $fonction_contact): static
    {
        $this->fonction_contact = $fonction_contact;

        return $this;
    }

    /**
     * @return Collection<int, Apport>
     */
    public function getApport(): Collection
    {
        return $this->apport;
    }

    public function addApport(Apport $apport): static
    {
        if (!$this->apport->contains($apport)) {
            $this->apport->add($apport);
            $apport->setProjet($this);
        }

        return $this;
    }

    public function removeApport(Apport $apport): static
    {
        if ($this->apport->removeElement($apport)) {
            // set the owning side to null (unless already changed)
            if ($apport->getProjet() === $this) {
                $apport->setProjet(null);
            }
        }

        return $this;
    }
            public function __toString()
        {
            $fonds = $this->getFonds();

            return $fonds !== null ? $fonds : '';
        }

}
