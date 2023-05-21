<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230521125429 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE vinyl_mix ADD updated_at DATETIME NOT NULL, DROP update_at, DROP slug, CHANGE title title VARCHAR(255) NOT NULL, CHANGE description description LONGTEXT DEFAULT NULL, CHANGE genre genre VARCHAR(255) NOT NULL, CHANGE created_at created_at DATETIME NOT NULL, CHANGE votes votes INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE vinyl_mix ADD update_at VARCHAR(50) NOT NULL, ADD slug VARCHAR(50) NOT NULL, DROP updated_at, CHANGE title title VARCHAR(50) NOT NULL, CHANGE description description VARCHAR(50) NOT NULL, CHANGE genre genre VARCHAR(50) NOT NULL, CHANGE votes votes VARCHAR(50) NOT NULL, CHANGE created_at created_at VARCHAR(50) NOT NULL');
    }
}
