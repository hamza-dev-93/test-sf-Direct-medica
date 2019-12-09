<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191208123806 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE contrat_affilie (contrat_id INT NOT NULL, affilie_id INT NOT NULL, INDEX IDX_5FB86A071823061F (contrat_id), INDEX IDX_5FB86A0784909E12 (affilie_id), PRIMARY KEY(contrat_id, affilie_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE contrat_affilie ADD CONSTRAINT FK_5FB86A071823061F FOREIGN KEY (contrat_id) REFERENCES contrat (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE contrat_affilie ADD CONSTRAINT FK_5FB86A0784909E12 FOREIGN KEY (affilie_id) REFERENCES affilie (id) ON DELETE CASCADE');
        $this->addSql('DROP TABLE affilie_contrat');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE affilie_contrat (affilie_id INT NOT NULL, contrat_id INT NOT NULL, INDEX IDX_537242401823061F (contrat_id), INDEX IDX_5372424084909E12 (affilie_id), PRIMARY KEY(affilie_id, contrat_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE affilie_contrat ADD CONSTRAINT FK_537242401823061F FOREIGN KEY (contrat_id) REFERENCES contrat (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE affilie_contrat ADD CONSTRAINT FK_5372424084909E12 FOREIGN KEY (affilie_id) REFERENCES affilie (id) ON DELETE CASCADE');
        $this->addSql('DROP TABLE contrat_affilie');
    }
}
