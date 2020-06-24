<?php
namespace App\Modules\SuperAdmin\Database\Seeders;

use Illuminate\Database\Seeder;

class UploadedDocumentsTableSeeder extends Seeder
{

  /**
   * Auto generated seed file
   *
   * @return void
   */
  public function run()
  {


    \DB::table('uploaded_documents')->delete();

    \DB::table('uploaded_documents')->insert(array(
      0 =>
      array(
        'id' => 1,
        'full_name' => 'Mariko Odonnell',
        'phone' => '+1 (254) 499-9341',
        'position' => 'Accountant',
        'cv' => '/storage/uploaded_cvs/KY5vIlNju3kSf5ES2wiR89JP5GXj3MSddwjDDZSc.jpeg',
        'created_at' => '2020-06-24 14:24:49',
        'updated_at' => '2020-06-24 14:24:49',
        'deleted_at' => NULL,
      ),
      1 =>
      array(
        'id' => 2,
        'full_name' => 'Donna Mcneil',
        'phone' => '+1 (116) 634-1066',
        'position' => 'Customer Assistant',
        'cv' => '/storage/uploaded_cvs/1qsp7EPTr4tjmUPbvrJx6RL1UDSXTpy3O3d63tpU.docx',
        'created_at' => '2020-06-24 14:25:41',
        'updated_at' => '2020-06-24 14:25:41',
        'deleted_at' => NULL,
      ),
      2 =>
      array(
        'id' => 3,
        'full_name' => 'Amery Wilcox',
        'phone' => '+1 (492) 287-4483',
        'position' => 'Technical Support Agent',
        'cv' => '/storage/uploaded_cvs/O6qhIuWCFXz2miWNbqUlxwKOcSIWaNMWs1ka0Evw.pdf',
        'created_at' => '2020-06-24 14:26:17',
        'updated_at' => '2020-06-24 14:26:17',
        'deleted_at' => NULL,
      ),
      3 =>
      array(
        'id' => 4,
        'full_name' => 'Kirk Golden',
        'phone' => '+1 (604) 244-2728',
        'position' => 'Technical Support Agent',
        'cv' => '/storage/uploaded_cvs/7Z3oWfPW0ZUORfxBEsVBuY14quhWqDPVfeU4hOXz.pdf',
        'created_at' => '2020-06-24 14:26:42',
        'updated_at' => '2020-06-24 14:26:42',
        'deleted_at' => NULL,
      ),
    ));
  }
}
