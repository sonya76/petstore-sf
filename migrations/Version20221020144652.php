<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221020144652 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE categorie ADD categorie_mere_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE categorie ADD CONSTRAINT FK_497DD634665D6AAC FOREIGN KEY (categorie_mere_id) REFERENCES categorie (id)');
        $this->addSql('CREATE INDEX IDX_497DD634665D6AAC ON categorie (categorie_mere_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE categorie DROP FOREIGN KEY FK_497DD634665D6AAC');
        $this->addSql('DROP INDEX IDX_497DD634665D6AAC ON categorie');
        $this->addSql('ALTER TABLE categorie DROP categorie_mere_id');
    }
}
