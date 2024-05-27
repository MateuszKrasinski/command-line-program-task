<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240527203755 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE item (id INT AUTO_INCREMENT NOT NULL, category_name LONGTEXT DEFAULT NULL, sku VARCHAR(255) DEFAULT NULL, name LONGTEXT DEFAULT NULL, short_desc LONGTEXT DEFAULT NULL, price NUMERIC(10, 4) DEFAULT NULL, link VARCHAR(255) DEFAULT NULL, image VARCHAR(255) DEFAULT NULL, brand VARCHAR(255) DEFAULT NULL, rating INT DEFAULT NULL, caffeine_type VARCHAR(255) DEFAULT NULL, count INT DEFAULT NULL, flavored TINYINT(1) DEFAULT NULL, seasonal TINYINT(1) DEFAULT NULL, instock TINYINT(1) DEFAULT NULL, facebook TINYINT(1) DEFAULT NULL, is_kcup TINYINT(1) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE item');
    }
}
