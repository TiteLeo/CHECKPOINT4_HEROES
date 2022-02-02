<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220202150501 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE `character` (id INT AUTO_INCREMENT NOT NULL, real_name VARCHAR(255) DEFAULT NULL, sex VARCHAR(255) DEFAULT NULL, hero_name VARCHAR(255) DEFAULT NULL, description LONGTEXT DEFAULT NULL, story LONGTEXT DEFAULT NULL, is_nasty TINYINT(1) NOT NULL, strength VARCHAR(255) NOT NULL, weakness VARCHAR(255) NOT NULL, url LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE character_power (character_id INT NOT NULL, power_id INT NOT NULL, INDEX IDX_5549E6C21136BE75 (character_id), INDEX IDX_5549E6C2AB4FC384 (power_id), PRIMARY KEY(character_id, power_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE character_equipment (character_id INT NOT NULL, equipment_id INT NOT NULL, INDEX IDX_546877B81136BE75 (character_id), INDEX IDX_546877B8517FE9FE (equipment_id), PRIMARY KEY(character_id, equipment_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE equipment (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE power (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE character_power ADD CONSTRAINT FK_5549E6C21136BE75 FOREIGN KEY (character_id) REFERENCES `character` (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE character_power ADD CONSTRAINT FK_5549E6C2AB4FC384 FOREIGN KEY (power_id) REFERENCES power (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE character_equipment ADD CONSTRAINT FK_546877B81136BE75 FOREIGN KEY (character_id) REFERENCES `character` (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE character_equipment ADD CONSTRAINT FK_546877B8517FE9FE FOREIGN KEY (equipment_id) REFERENCES equipment (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE character_power DROP FOREIGN KEY FK_5549E6C21136BE75');
        $this->addSql('ALTER TABLE character_equipment DROP FOREIGN KEY FK_546877B81136BE75');
        $this->addSql('ALTER TABLE character_equipment DROP FOREIGN KEY FK_546877B8517FE9FE');
        $this->addSql('ALTER TABLE character_power DROP FOREIGN KEY FK_5549E6C2AB4FC384');
        $this->addSql('DROP TABLE `character`');
        $this->addSql('DROP TABLE character_power');
        $this->addSql('DROP TABLE character_equipment');
        $this->addSql('DROP TABLE equipment');
        $this->addSql('DROP TABLE power');
    }
}
