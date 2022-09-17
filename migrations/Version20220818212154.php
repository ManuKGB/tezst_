<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220818212154 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE informations ADD intro_text1 VARCHAR(255) DEFAULT NULL, ADD intro_text2 VARCHAR(255) DEFAULT NULL, ADD intro_text3 VARCHAR(255) DEFAULT NULL, ADD intro_text4 VARCHAR(255) DEFAULT NULL, ADD intro_text5 VARCHAR(255) NOT NULL, ADD intro_text6 VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE informations DROP intro_text1, DROP intro_text2, DROP intro_text3, DROP intro_text4, DROP intro_text5, DROP intro_text6');
    }
}
