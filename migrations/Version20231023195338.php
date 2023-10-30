<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231023195338 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE product (id INT AUTO_INCREMENT NOT NULL, idstone_id INT DEFAULT NULL, carat DOUBLE PRECISION NOT NULL, price DOUBLE PRECISION NOT NULL, obs LONGTEXT DEFAULT NULL, color VARCHAR(255) DEFAULT NULL, INDEX IDX_D34A04ADBF579A9F (idstone_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE top (id INT AUTO_INCREMENT NOT NULL, id_product_id INT DEFAULT NULL, caractere VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_1ED91FCAE00EE68D (id_product_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04ADBF579A9F FOREIGN KEY (idstone_id) REFERENCES stone (id)');
        $this->addSql('ALTER TABLE top ADD CONSTRAINT FK_1ED91FCAE00EE68D FOREIGN KEY (id_product_id) REFERENCES product (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE product DROP FOREIGN KEY FK_D34A04ADBF579A9F');
        $this->addSql('ALTER TABLE top DROP FOREIGN KEY FK_1ED91FCAE00EE68D');
        $this->addSql('DROP TABLE product');
        $this->addSql('DROP TABLE top');
    }
}
