<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20261115225149 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE projet (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(100) NOT NULL, type_projet VARCHAR(255) NOT NULL, cadre VARCHAR(150) NOT NULL, date_debut DATE NOT NULL, date_fin DATE DEFAULT NULL, resume VARCHAR(300) NOT NULL, contexte LONGTEXT NOT NULL, realisations LONGTEXT NOT NULL, technos VARCHAR(255) NOT NULL, soft_skills VARCHAR(255) DEFAULT NULL, resultats LONGTEXT DEFAULT NULL, bilan LONGTEXT DEFAULT NULL, image VARCHAR(255) NOT NULL, url_code VARCHAR(255) DEFAULT NULL, url_demo VARCHAR(255) DEFAULT NULL, mis_en_avant TINYINT DEFAULT 0 NOT NULL, sur_accueil TINYINT DEFAULT 0 NOT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE projet');
    }
}
