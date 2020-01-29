<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180216213515 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE entrada CHANGE num_entradas num_entradas INT NOT NULL');
        $this->addSql('ALTER TABLE entrada RENAME INDEX idx_c949a27432dcdbaf TO IDX_C949A274FCF8192D');
        $this->addSql('ALTER TABLE entrada RENAME INDEX idx_c949a2742497a39f TO IDX_C949A27461B1BEE8');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE entrada CHANGE num_entradas num_entradas VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci');
        $this->addSql('ALTER TABLE entrada RENAME INDEX idx_c949a274fcf8192d TO IDX_C949A27432DCDBAF');
        $this->addSql('ALTER TABLE entrada RENAME INDEX idx_c949a27461b1bee8 TO IDX_C949A2742497A39F');
    }
}
