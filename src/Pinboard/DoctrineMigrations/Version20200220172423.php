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
            create index created_at on ipm_report_by_hostname_and_server (created_at);
            create index server_created_idx on ipm_report_by_hostname_and_server (server_name, created_at);
        ');
    }

    public function down(Schema $schema)
    {
        $this->addSql('
            drop index created_at_idx on ipm_tag_info;
            drop index created_at_idx on ipm_timer;
            drop index created_at_idx on ipm_report_by_hostname_and_server;
            drop index server_created_idx on ipm_report_by_hostname_and_server;
        ');
    }
}
