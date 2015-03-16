<?php
/*=========================================================================
 Midas Server
 Copyright Kitware SAS, 26 rue Louis Guérin, 69100 Villeurbanne, France.
 All rights reserved.
 For more information visit http://www.kitware.com/.

 Licensed under the Apache License, Version 2.0 (the "License");
 you may not use this file except in compliance with the License.
 You may obtain a copy of the License at

         http://www.apache.org/licenses/LICENSE-2.0.txt

 Unless required by applicable law or agreed to in writing, software
 distributed under the License is distributed on an "AS IS" BASIS,
 WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 See the License for the specific language governing permissions and
 limitations under the License.
=========================================================================*/

/** Upgrade the batchmake module to version 0.2.0. */
class Batchmake_Upgrade_0_2_0 extends MIDASUpgrade
{
    /** Upgrade a MySQL database. */
    public function mysql()
    {
        $this->db->query("ALTER TABLE condor_dag ADD COLUMN dag_filename text NOT NULL;");
        $this->db->query("ALTER TABLE condor_job ADD COLUMN post_filename text NOT NULL;");
    }

    /** Upgrade a PostgreSQL database. */
    public function pgsql()
    {
        $this->db->query("ALTER TABLE condor_dag ADD COLUMN dag_filename text NOT NULL;");
        $this->db->query("ALTER TABLE condor_job ADD COLUMN post_filename text NOT NULL;");
    }
}
