<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20261117142950 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE article (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(200) NOT NULL, source VARCHAR(100) NOT NULL, date_publication DATE NOT NULL, resume LONGTEXT NOT NULL, url VARCHAR(255) NOT NULL, image VARCHAR(255) DEFAULT NULL, veille_id INT NOT NULL, INDEX IDX_23A0E6655994766 (veille_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE veille (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(150) NOT NULL, presentation LONGTEXT NOT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E6655994766 FOREIGN KEY (veille_id) REFERENCES veille (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E6655994766');
        $this->addSql('DROP TABLE article');
        $this->addSql('DROP TABLE veille');
    }
}
