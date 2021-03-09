<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210308235754 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contact DROP FOREIGN KEY FK_4C62E638F28ED68D');
        $this->addSql('DROP INDEX IDX_4C62E638F28ED68D ON contact');
        $this->addSql('ALTER TABLE contact CHANGE area_id_id area_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE contact ADD CONSTRAINT FK_4C62E638BD0F409C FOREIGN KEY (area_id) REFERENCES area (id)');
        $this->addSql('CREATE INDEX IDX_4C62E638BD0F409C ON contact (area_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contact DROP FOREIGN KEY FK_4C62E638BD0F409C');
        $this->addSql('DROP INDEX IDX_4C62E638BD0F409C ON contact');
        $this->addSql('ALTER TABLE contact CHANGE area_id area_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE contact ADD CONSTRAINT FK_4C62E638F28ED68D FOREIGN KEY (area_id_id) REFERENCES area (id)');
        $this->addSql('CREATE INDEX IDX_4C62E638F28ED68D ON contact (area_id_id)');
    }
}
