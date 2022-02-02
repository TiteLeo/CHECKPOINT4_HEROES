<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220202100602 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE character_power (character_id INT NOT NULL, power_id INT NOT NULL, INDEX IDX_5549E6C21136BE75 (character_id), INDEX IDX_5549E6C2AB4FC384 (power_id), PRIMARY KEY(character_id, power_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE character_equipment (character_id INT NOT NULL, equipment_id INT NOT NULL, INDEX IDX_546877B81136BE75 (character_id), INDEX IDX_546877B8517FE9FE (equipment_id), PRIMARY KEY(character_id, equipment_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE character_power ADD CONSTRAINT FK_5549E6C21136BE75 FOREIGN KEY (character_id) REFERENCES `character` (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE character_power ADD CONSTRAINT FK_5549E6C2AB4FC384 FOREIGN KEY (power_id) REFERENCES power (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE character_equipment ADD CONSTRAINT FK_546877B81136BE75 FOREIGN KEY (character_id) REFERENCES `character` (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE character_equipment ADD CONSTRAINT FK_546877B8517FE9FE FOREIGN KEY (equipment_id) REFERENCES equipment (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE character_power');
        $this->addSql('DROP TABLE character_equipment');
        $this->addSql('ALTER TABLE `character` CHANGE real_name real_name VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE sex sex VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE hero_name hero_name VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description description LONGTEXT DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE story story LONGTEXT DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE strength strength VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE weakness weakness VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE url url LONGTEXT DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE equipment CHANGE name name VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE type type VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description description LONGTEXT DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE power CHANGE name name VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description description LONGTEXT DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
