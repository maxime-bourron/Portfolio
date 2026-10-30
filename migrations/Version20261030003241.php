<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20261030003241 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE profil DROP date_naissance, DROP ville, DROP telephone, CHANGE accroche accroche VARCHAR(150) NOT NULL, CHANGE presentation presentation LONGTEXT NOT NULL, CHANGE objectif objectif LONGTEXT NOT NULL, CHANGE perspectives perspectives LONGTEXT NOT NULL, CHANGE photo photo VARCHAR(255) NOT NULL, CHANGE statut_etudes statut_etudes VARCHAR(100) NOT NULL, CHANGE statut_travail statut_travail VARCHAR(100) NOT NULL, CHANGE logo_etudes logo_etudes VARCHAR(255) NOT NULL, CHANGE logo_travail logo_travail VARCHAR(255) NOT NULL, CHANGE url_github url_github VARCHAR(255) NOT NULL, CHANGE url_linkedin url_linkedin VARCHAR(255) NOT NULL, CHANGE parcours parcours LONGTEXT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE profil ADD date_naissance DATE DEFAULT NULL, ADD ville VARCHAR(60) DEFAULT NULL, ADD telephone VARCHAR(20) DEFAULT NULL, CHANGE accroche accroche VARCHAR(150) DEFAULT NULL, CHANGE presentation presentation LONGTEXT DEFAULT NULL, CHANGE objectif objectif LONGTEXT DEFAULT NULL, CHANGE perspectives perspectives LONGTEXT DEFAULT NULL, CHANGE photo photo VARCHAR(255) DEFAULT NULL, CHANGE statut_etudes statut_etudes VARCHAR(100) DEFAULT NULL, CHANGE statut_travail statut_travail VARCHAR(100) DEFAULT NULL, CHANGE logo_etudes logo_etudes VARCHAR(255) DEFAULT NULL, CHANGE logo_travail logo_travail VARCHAR(255) DEFAULT NULL, CHANGE url_github url_github VARCHAR(255) DEFAULT NULL, CHANGE url_linkedin url_linkedin VARCHAR(255) DEFAULT NULL, CHANGE parcours parcours LONGTEXT DEFAULT NULL');
    }
}
