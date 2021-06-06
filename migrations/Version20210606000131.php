<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210606000131 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article ADD content2 LONGTEXT NOT NULL, ADD content3 LONGTEXT DEFAULT NULL, ADD content4 LONGTEXT DEFAULT NULL, ADD content5 LONGTEXT DEFAULT NULL, ADD image2 VARCHAR(255) NOT NULL, ADD image3 VARCHAR(255) DEFAULT NULL, ADD image4 VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article DROP content2, DROP content3, DROP content4, DROP content5, DROP image2, DROP image3, DROP image4');
    }
}
