<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20261027233142 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE competence (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(2) NOT NULL, libelle VARCHAR(150) NOT NULL, definition LONGTEXT NOT NULL, preuve LONGTEXT DEFAULT NULL, justification LONGTEXT DEFAULT NULL, formation_id INT NOT NULL, UNIQUE INDEX UNIQ_94D4687F77153098 (code), INDEX IDX_94D4687F5200282E (formation_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('ALTER TABLE competence ADD CONSTRAINT FK_94D4687F5200282E FOREIGN KEY (formation_id) REFERENCES formation (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE competence DROP FOREIGN KEY FK_94D4687F5200282E');
        $this->addSql('DROP TABLE competence');
    }
}
