<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231024165229 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE product (id INT AUTO_INCREMENT NOT NULL, stone_id INT NOT NULL, product VARCHAR(255) NOT NULL, INDEX IDX_D34A04AD1582D292 (stone_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE stone (id INT AUTO_INCREMENT NOT NULL, stonetype_id INT NOT NULL, stone VARCHAR(255) NOT NULL, INDEX IDX_1920052A129C4CE3 (stonetype_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE stonetype (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04AD1582D292 FOREIGN KEY (stone_id) REFERENCES stone (id)');
        $this->addSql('ALTER TABLE stone ADD CONSTRAINT FK_1920052A129C4CE3 FOREIGN KEY (stonetype_id) REFERENCES stonetype (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE product DROP FOREIGN KEY FK_D34A04AD1582D292');
        $this->addSql('ALTER TABLE stone DROP FOREIGN KEY FK_1920052A129C4CE3');
        $this->addSql('DROP TABLE product');
        $this->addSql('DROP TABLE stone');
        $this->addSql('DROP TABLE stonetype');
    }
}
