<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231028033623 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE jewelry_stone (jewelry_id INT NOT NULL, stone_id INT NOT NULL, INDEX IDX_64F650163FB34C55 (jewelry_id), INDEX IDX_64F650161582D292 (stone_id), PRIMARY KEY(jewelry_id, stone_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE jewelry_stone ADD CONSTRAINT FK_64F650163FB34C55 FOREIGN KEY (jewelry_id) REFERENCES jewelry (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE jewelry_stone ADD CONSTRAINT FK_64F650161582D292 FOREIGN KEY (stone_id) REFERENCES stone (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE jewelry ADD matiere VARCHAR(255) DEFAULT NULL, ADD price DOUBLE PRECISION NOT NULL, ADD obs LONGTEXT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE jewelry_stone DROP FOREIGN KEY FK_64F650163FB34C55');
        $this->addSql('ALTER TABLE jewelry_stone DROP FOREIGN KEY FK_64F650161582D292');
        $this->addSql('DROP TABLE jewelry_stone');
        $this->addSql('ALTER TABLE jewelry DROP matiere, DROP price, DROP obs');
    }
}
