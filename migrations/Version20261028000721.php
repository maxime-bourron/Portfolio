<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20261028000721 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE formation CHANGE logo logo VARCHAR(255) NOT NULL, CHANGE date_debut date_debut DATE NOT NULL, CHANGE resume resume VARCHAR(300) NOT NULL, CHANGE presentation presentation LONGTEXT NOT NULL, CHANGE specialites specialites LONGTEXT NOT NULL, CHANGE acquis acquis LONGTEXT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE formation CHANGE logo logo VARCHAR(255) DEFAULT NULL, CHANGE date_debut date_debut DATE DEFAULT NULL, CHANGE resume resume VARCHAR(300) DEFAULT NULL, CHANGE presentation presentation LONGTEXT DEFAULT NULL, CHANGE specialites specialites LONGTEXT DEFAULT NULL, CHANGE acquis acquis LONGTEXT DEFAULT NULL');
    }
}
