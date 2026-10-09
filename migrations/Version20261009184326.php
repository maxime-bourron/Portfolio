<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20261009184326 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE profil (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) NOT NULL, prenom VARCHAR(50) NOT NULL, date_naissance DATE DEFAULT NULL, ville VARCHAR(60) DEFAULT NULL, telephone VARCHAR(20) DEFAULT NULL, email VARCHAR(100) NOT NULL, accroche VARCHAR(150) DEFAULT NULL, presentation LONGTEXT DEFAULT NULL, objectif LONGTEXT DEFAULT NULL, perspectives LONGTEXT DEFAULT NULL, photo VARCHAR(255) DEFAULT NULL, cv VARCHAR(255) DEFAULT NULL, statut_etudes VARCHAR(100) DEFAULT NULL, statut_travail VARCHAR(100) DEFAULT NULL, logo_etudes VARCHAR(255) DEFAULT NULL, logo_travail VARCHAR(255) DEFAULT NULL, url_github VARCHAR(255) DEFAULT NULL, url_linkedin VARCHAR(255) DEFAULT NULL, parcours LONGTEXT DEFAULT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0E3BD61CE16BA31DBBF396750 (queue_name, available_at, delivered_at, id), PRIMARY KEY (id))');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE profil');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
