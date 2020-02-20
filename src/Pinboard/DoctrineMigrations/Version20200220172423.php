<?php

namespace Pinboard\DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

class Version20200220172423 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        $this->addSql('
            create index created_at_idx on ipm_tag_info (created_at);
            create index created_at_idx on ipm_timer (created_at);
        ');
    }

    public function down(Schema $schema)
    {
        $this->addSql('
            drop index created_at_idx on ipm_tag_info;
            drop index created_at_idx on ipm_timer;
        ');
    }
}
